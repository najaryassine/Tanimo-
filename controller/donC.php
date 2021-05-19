<?php
require_once 'C:/xampp/htdocs/monprojet/Tanimo--master/config/config.php';
require_once 'C:/xampp/htdocs/monprojet/Tanimo--master/model/don.php';

/**
 * 
 */
class donc {

function ajouterDon($don)

{
$sql="INSERT INTO don (type,  sexe,couleur,  pelage, age ,race, image, id_u) 
			VALUES (:type,:sexe,:couleur, :pelage, :age , :race, :image ,:id_u)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'type' => $don->gettype(),
					'sexe' => $don->getsexe(),
					'couleur' => $don->getcouleur(),
					'pelage' => $don->getpelage(),
					'age' => $don->getage(),
					'race' => $don->getrace(),
					'image' => $don->getimage(),
					'id_u' => $don->getid_u()
				 
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}		

}

function supprimerDon($id){
			$sql="DELETE FROM  don WHERE id= :id";
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


function afficherDon()
		{
			
			$sql="SELECT * FROM don";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}
		function afficherDonUser($id_u)
		{
			
$sql="SELECT * from   don where id_u=$id_u";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}




function recupererdon($id)
          {
			$sql="SELECT * from   don where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$don=$query->fetch();
				return $don;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

 

		



			function modifierDon($don, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE don SET 
						type = :type,
						 sexe = :sexe,
						 couleur = :couleur,
						 pelage = :pelage,
						 age = :age,
					 
                         race = :race,
					 
						image = :image,
					WHERE id = :id'
				);
				$query->execute([
					'type' => $don->gettype,
					'sexe' => $don->getsexe(),
					'couleur' => $don->getcouleur(),
					'pelage' => $don->getpelage(),
					'age' => $don->getage(),
				 
					'race' => $don->getrace(),
				 
					'image' => $adoption->getimage(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}



		
}






?>