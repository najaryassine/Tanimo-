<?php
require_once '../../../config/config.php';
require_once '../../../model/adoption.php';

/**
 * 
 */
class adoptionc {

function ajouterAdoption($adoption)

{
$sql="INSERT INTO adoption (espece,  race,sexe,  age, region , image) 
			VALUES (:espece,:race,:sexe, :age, :region ,:image)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'espece' => $adoption->getespece(),
					'race' => $adoption->getrace(),
					'sexe' => $adoption->getsexe(),
					'age' => $adoption->getage(),
					'region' => $adoption->getregion(),
					'image' => $adoption->getimage()
				 
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}		

}

function supprimerAdoption($id){
			$sql="DELETE FROM  adoption WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}



		function afficheradoption(){
			
			$sql="SELECT * FROM adoption";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
}






?>