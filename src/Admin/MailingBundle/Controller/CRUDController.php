<?php

namespace Admin\MailingBundle\Controller;

require __DIR__ . '/../../../../vendor/autoload.php';
use \Mailjet\Resources;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CRUDController extends Controller
{
	const DB_SERVERNAME = "localhost";
	const DB_USERNAME = "root";
	const DB_PASSWORD = "root";
	const DB_DBNAME = "panelis";
	const MJ_PUBLIC_KEY = "4c58205eb61ff40311b3ee4f5bacb082";
	const MJ_PRIVATE_KEY = "075cdea4b6f2938cedf47795eff2d2b9";
	
	/**
	* @param $id
	*/
	
	private function getDBListID($id){
		
		//La valeur de retour. 0 si la liste n'est pas trouvée
		$list_id = 0;
		
		// Connexion à la BD
		$conn = new \mysqli(self::DB_SERVERNAME, self::DB_USERNAME, self::DB_PASSWORD, self::DB_DBNAME);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		// Si la connexion a réussi
		else{
			
			//Requête SQL (Récupération de la list ID de mailjet)
			$sql = "SELECT mailjet_id FROM newsletter WHERE id=".$id."";
			$result = $conn->query($sql);
			
			// Récupération de la list ID de mailjet
			if ($result->num_rows > 0) {
				$row = $result->fetch_assoc();
				$list_id = $row['mailjet_id'];
			}
		}
		
		//Retourne l'ID de la liste
		$conn->close();
		return $list_id;	
	}
	
	private function getDBUsers($list_id){
		
		//La valeur de retour
		$users=array();
		
		// Connexion à la BD
		$conn = new \mysqli(self::DB_SERVERNAME, self::DB_USERNAME, self::DB_PASSWORD, self::DB_DBNAME);
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		else{
			//Requête SQL (Récupération des utilisateurs de la BD)
			$sql = "SELECT username, email FROM user WHERE id IN (SELECT user_id from subscriber WHERE newsletter_id=(SELECT id FROM newsletter WHERE mailjet_id=".$list_id.")) LIMIT 3";
			$result = $conn->query($sql);
			
			// Récupération des utilisateurs à ajouter
			if ($result->num_rows > 0) {
				while($row = $result->fetch_assoc()) {
					$user=array(
						"Email" => $row['email'],
						"Name" => $row['username']
					);
					array_push($users,$user);
				}
			}
		}
		
		//Retourner la liste des utilisateurs
		$conn->close();
		return $users;
	}
	
	private function mailjetGetAllUsers($list_id){
		
		$mj = new \Mailjet\Client(self::MJ_PUBLIC_KEY, self::MJ_PRIVATE_KEY);
		$params = array(
			"method" => "GET",
			"ContactsList" => $list_id
		);
	
		$result = $mj->listrecipient($params);
	
		if ($mj->_response_code == 200)
		   echo "success - got unsubscribed contact(s) ";
		else
		   echo "error - ".$mj->_response_code;
	
		return $result;   
	}
	
	private function mailjetExportList($list_id, $users){
	
		//Ajout des contacts à la liste
		$mj = new \Mailjet\Client(self::MJ_PUBLIC_KEY, self::MJ_PRIVATE_KEY);
		$body = [
			'ContactsLists' => [
				[
					'ListID' => $list_id,
					'action' => "addforce"
				]
			],
			'Contacts' => $users
		];
	
		//On effectue les modifications sur la liste Mailjet et on retourne un message d'erreur
		$response = $mj->post(Resources::$ContactManagemanycontacts, ['body' => $body]);
		$response->success() && var_dump($response->getData());
		return 0;
	}
	
	private function mailjetDeleteList($list_id, $users){
	
		//Ajout des contacts à la liste
		$mj = new \Mailjet\Client(self::MJ_PUBLIC_KEY, self::MJ_PRIVATE_KEY);
		$body = [
			'ContactsLists' => [
				[
					'ListID' => $list_id,
					'action' => "remove"
				]
			],
			'Contacts' => $users
		];
	
		//On effectue les modifications sur la liste Mailjet et on retourne un message d'erreur
		$response = $mj->post(Resources::$ContactManagemanycontacts, ['body' => $body]);
		$response->success() && var_dump($response->getData());
		return 0;
	}
	
    public function mailjetexportAction($id)
    {
		
		//Récupération de l'élément sélectionné
        $object = $this->admin->getSubject();
        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id: %s', $id));
        }
		
		//Ajoute tous les utilisateurs à la liste en question
		$list_id = self::getDBListID($id);
		//$users = self::mailjetGetAllUsers($list_id);
		//self::mailjetDeleteList($list_id, $users);
		$users = self::getDBUsers($list_id);
		self::mailjetExportList($list_id, $users); 

		//Message indiquant un succès
        $this->addFlash('sonata_flash_success', 'Export successful');
        return new RedirectResponse($this->admin->generateUrl('list'));

        // if you have a filtered list and want to keep your filters after the redirect
        // return new RedirectResponse($this->admin->generateUrl('list', ['filter' => $this->admin->getFilterParameters()]));
    }

    /**
    *Ajout tout les utilisateurs a la newsletter
    *@param $id
    *
    **/
    public function addUserListAction($id)
    {
    	$em = $this->getDoctrine()->getManager();
        $listeUser = self::getalluser($em);
        $newsletter = self::getNewsletter($em,$id);
	    $newsletter->setUsers($listeUser);
	    if(empty($newsletter->getUsers())){
	    	$this->addFlash('sonata_flash_error', 'Erreur d\'ajout d\'utilisateurs dans newsletter');
	    }
	    $em->flush();
        $this->addFlash('sonata_flash_success', 'Users Ajouté');

        return new RedirectResponse($this->admin->generateUrl('list'));
    }
     /**
     * Ajout tout les utilisateurs de la promo a la newsletters
     * @param $id, $promotion
     */
    public function addUserPromoAction($id,$promotion)
    {
		$em = $this->getDoctrine()->getManager();
        $listeUser = self::getalluser($em);
        $newsletter = self::getNewsletter($em,$id);
        foreach ($listeUser as $user) {
        	if ($user->getPromotion() ==(string)$promotion) {
        		$newsletter->setUsers($user);
        	}
        }
	    if(empty($newsletter->getUsers())){
	    	$this->addFlash('sonata_flash_error', 'Erreur d\'ajout de la promotion');
	    }
	    $em->flush();
        $this->addFlash('sonata_flash_success', 'Users Ajouté');

        return new RedirectResponse($this->admin->generateUrl('list'));
    }

    private function getalluser($em){
		
        $listeUser = $em->getRepository("AdminUserBundle:User")->findAll();
        if (!$listeUser) {
        	$this->addFlash('sonata_flash_error', 'Erreur sur la récupération des utilisateur');
	        throw $this->createNotFoundException(
	            'Aucun user trouvé :  '.$id
	        );
    	}
    	return $listeUser;
    }
    /**
     * @param $id
     */
    private function getNewsletter($em,$id){
        $newsletter = $em->getRepository('AdminMailingBundle:Newsletter')->find($id);
        if (!$newsletter) {
        	$this->addFlash('sonata_flash_error', 'Erreur sur la newsletter');
	        throw $this->createNotFoundException(
	            'Aucun newsletter trouvé avec l\'id :  '.$id
	        );
    	}
    	return $newsletter;
    }
}
