<?php

namespace Admin\MailingBundle\Controller;

require __DIR__ . '/../../../../vendor/autoload.php';
use \Mailjet\Resources;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CRUDController extends Controller
{	
	/**
     * Récupère le Mailjet_ID d'une liste de diffusion de la BD.
     *
     * @param int $id  L'ID d'une liste dans la BD
     *
     * @return string $list_id L'ID mailjet d'une liste de diffusion. 0 si elle n'est pas trouvée.
	 *
     */
	private function getDBListID($id){
		
		//La valeur de retour. 0 si la liste n'est pas trouvée
		$list_id = 0;
		
		// Connexion à la BD
		$conn = new \mysqli(getenv('MYSQL_ADDON_HOST'), getenv('MYSQL_ADDON_USER'), getenv("MYSQL_ADDON_PASSWORD"), getenv('MYSQL_ADDON_DB'));
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
	
	/**
     * Récupère tous les utilisateurs de la BD.
     *
     * @param string $list_id  L'ID mailjet d'une liste de diffusion
     *
     * @return array $users La liste des utilisateurs
	 *
     */
	private function getDBUsers($list_id){
		
		//La valeur de retour
		$users=array();
		
		// Connexion à la BD
		$conn = new \mysqli(getenv('MYSQL_ADDON_HOST'), getenv('MYSQL_ADDON_USER'), getenv("MYSQL_ADDON_PASSWORD"), getenv('MYSQL_ADDON_DB'));
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		
		else{
			//Requête SQL (Récupération des utilisateurs de la BD)
			$sql = "SELECT username, email FROM user WHERE id IN (SELECT user_id from subscriber WHERE newsletter_id=(SELECT id FROM newsletter WHERE mailjet_id=".$list_id."))";
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
	
	/**
     * Récupère tous les utilisateurs d'une liste de Mailjet
     *
     * @param string $list_id  L'ID mailjet d'une liste de diffusion
     *
     * @return array|int $result La liste des utilisateurs. 0 S'il y'a eu une erreur lors du contact avec Mailjet. 1 si la liste n'a pas été trouvée.
	 *
     */
	private function mailjetGetAllUsers($list_id){
		

		//Récupération de tous les contacts de la liste Mailjet
		$mj = new \Mailjet\Client(getenv('MJ_PUBLIC_KEY'), getenv('MJ_PRIVATE_KEY'));
		$result = 0;
		
		//On récupère tous les contacts de la liste
		$response = $mj->get(Resources::$Contact, ['contactslist' => $list_id]);
		if ($response->success())
			$result = $response->getData();
			
		//Si ça n'a pas marché, on vérifie que la liste existe
		else{			
			$response = $mj->get(Resources::$Listrecipient, ['contactslist' => $list_id]);
			
			//Si elle existe, on renvoie 1 au lieu de 0
			if (!empty($response->getData())){
				$result = 1;
			}
		}
		return $result;   
	}
	
	/**
     * Exporte une liste d'utilisateurs vers une liste Mailjet
     *
     * @param string $list_id  L'ID mailjet d'une liste de diffusion
	 * @param array $users La liste des utilisateurs à exporter
     *
     * @return int 0
	 *
     */
	private function mailjetExportList($list_id, $users){
	
		//Ajout des contacts à la liste
		$mj = new \Mailjet\Client(getenv('MJ_PUBLIC_KEY'), getenv('MJ_PRIVATE_KEY'));
		$body = [
			'ContactsLists' => [
				[
					'ListID' => $list_id,
					'action' => "addforce"
				]
			],
			'Contacts' => $users
		];
	
		//On effectue les modifications sur la liste Mailjet et on retourne un message indiquant un succès
		$mj->post(Resources::$ContactManagemanycontacts, ['body' => $body]);

		return 0;
	}
	
	/**
     * Supprime les utilisateurs une liste Mailjet
     *
     * @param string $list_id  L'ID mailjet d'une liste de diffusion
	 * @param array $users La liste des utilisateurs à supprimer
     *
     * @return int 0
	 *
     */
	private function mailjetDeleteList($list_id, $users){
	
		//Ajout des contacts à la liste
		$mj = new \Mailjet\Client(getenv('MJ_PUBLIC_KEY'), getenv('MJ_PRIVATE_KEY'));
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
		$mj->post(Resources::$ContactManagemanycontacts, ['body' => $body]);
		return 0;
	}
	
	/**
     * Action relative au clic sur le bouton "Maijet Export"
     *
     * @param int $id  L'ID de la ligne cliquée
	 *
	 * @return RedirectResponse $url L'URL permettant de revenir sur la page de la liste des newsletters
     */
    public function mailjetexportAction($id)
    {
		
		//Récupération de l'élément sélectionné
        $object = $this->admin->getSubject();
        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id: %s', $id));
        }
		
		//Ajoute tous les utilisateurs à la liste en question
		$list_id = self::getDBListID($id);
		
		//Si la liste existe
		if ($list_id != '0'){
			
			//Récupération de tous les utilisateurs de la liste Mailjet concernée
			$users = self::mailjetGetAllUsers($list_id);
			if ($users != 0){
				if ($users != 1){
					self::mailjetDeleteList($list_id, $users);
				
					// Export de la liste des contacts de la BD vers Mailjet
					$users = self::getDBUsers($list_id);
					self::mailjetExportList($list_id, $users);
						
						//Message indiquant un succès
						$this->addFlash('sonata_flash_success', 'Export réussi');
				}
				
				//Si la liste à supprimer n'a pas été trouvée sur Mailjet, afficher un message d'erreur
				else{
					$this->addFlash('sonata_flash_error', 'Aucune liste mailjet trouvée avec ID = '.$list_id);
				}
			}
			
			//Si on n'a pas réussi à accéder à Mailjet, afficher un message d'erreur
			else{
				$this->addFlash('sonata_flash_error', 'Impossible de joindre Mailjet');
			}
		}
		
		//Sinon, retourner un message d'erreur
		else{
			$this->addFlash('sonata_flash_error', 'List ID Mailjet non assignée');
		}
		
		//Revenir sur la page avec la liste des newsletters
        return new RedirectResponse($this->admin->generateUrl('list'));

        // if you have a filtered list and want to keep your filters after the redirect
        // return new RedirectResponse($this->admin->generateUrl('list', ['filter' => $this->admin->getFilterParameters()]));
    }


	/**
     * Action relative à l'ajout d'un utilisateur"
     *
     * @param int $id  L'ID de la ligne cliquée
	 *
	 * @return RedirectResponse $url L'URL permettant de revenir sur la page de la liste des newsletters
     */
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
