<?php

namespace Admin\MailingBundle\Controller;

require __DIR__ . '/../../../../vendor/autoload.php';
use \Mailjet\Resources;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sonata\AdminBundle\Controller\CRUDController as Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

class CRUDController extends Controller
{
	//Identifiants de la BD
	const DB_SERVERNAME = "localhost";
	const DB_USERNAME = "root";
	const DB_PASSWORD = "root";
	const DB_DBNAME = "panelis";
	
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
		
		//Récupération de tous les contacts de la liste Mailjet
		$mj = new \Mailjet\Client(getenv('MJ_PUBLIC_KEY'), getenv('MJ_PRIVATE_KEY'));
		$result = getenv('MJ_PUBLIC_KEY');
		$response = $mj->get(Resources::$Contact, ['contactslist' => $list_id]);
		if ($response->success())
			$result = $response->getData();
		return $result;   
	}
	
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
		$response = $mj->post(Resources::$ContactManagemanycontacts, ['body' => $body]);
		$response->success() && var_dump($response->getData());
		return 0;
	}
	
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
		
		//Récupération de l'ID de la liste Mailjet en question
		$list_id = self::getDBListID($id);
		
		//Si la liste existe
		if ($list_id != 0){
			
			//Vidage de la liste Mailjet
			$users = self::mailjetGetAllUsers($list_id);
			if ($users != 0){
				self::mailjetDeleteList($list_id, $users);
			
				// Export de la liste des contacts de la BD vers Mailjet
				$users = self::getDBUsers($list_id);
				self::mailjetExportList($list_id, $users);
				
				//Message indiquant un succès
				$this->addFlash('sonata_flash_success', 'Export réussi');
			}
			
			//Si le vidage a échoué, la liste n'existe pas
			else{
				$this->addFlash('sonata_flash_error', $users);
			}
		}
		
		//Sinon, retourner un message d'erreur
		else{
			$this->addFlash('sonata_flash_error', 'List ID Mailjet non assignée');
		}
		
		//Revenir sur la page avec la liste des newsletters
        return new RedirectResponse($this->admin->generateUrl('list'));
    }

    public function addUserListAction($id)
    {
        $object = $this->admin->getSubject();

        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id: %s', $id));
        }

        $this->addFlash('sonata_flash_success', 'Users Ajouté');

        return new RedirectResponse($this->admin->generateUrl('list'));

        // if you have a filtered list and want to keep your filters after the redirect
        // return new RedirectResponse($this->admin->generateUrl('list', ['filter' => $this->admin->getFilterParameters()]));
    }
}