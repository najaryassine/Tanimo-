<?php
<<<<<<< HEAD
require_once '../../../config/config.php';
require_once '../../../model/adoption.php';
=======
require_once 'C:/xampp/htdocs/monprojet/Tanimo--master/config/config.php';
require_once 'C:/xampp/htdocs/monprojet/Tanimo--master/model/adoption.php';
>>>>>>> 65e142153bebd23674b25694b5f7781e63add880

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


<<<<<<< HEAD

		function afficheradoption(){
=======
function afficheradoption()
		{
>>>>>>> 65e142153bebd23674b25694b5f7781e63add880
			
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
<<<<<<< HEAD
=======





          function recupererAdoption($id)
          {
			$sql="SELECT * from   adoption where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$adoption=$query->fetch();
				return $adoption;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		



			function modifierUtilisateur($adoption, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE adoption SET 
						espece = :espece, 
						race = :race,
						sexe = :sexe,
						age = :age,
						region = :region,
						image = :image,
					WHERE id = :id'
				);
				$query->execute([
					'espece' => $adoption->getespece(),
					'race' => $adoption->getrace(),
					'sexe' => $adoption->getsexe(),
					'age' => $adoption->getage(),
					'region' => $adoption->getregion(),
					'image' => $adoption->getimage(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}



		
>>>>>>> 65e142153bebd23674b25694b5f7781e63add880
}






?>