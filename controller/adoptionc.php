
<?php

require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';
require_once 'c:/xampp/htdocs/Tanimo-/model/adoption.php';


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


function afficheradoption()
		{
			
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

		

 


 
   
    	function modifierAdoption($adoption, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE adoption SET 
						espece = :espece, 
						race = :race,
						sexe = :sexe,
						age = :age,
						region = :region
					WHERE id = :id'
				);
				$query->execute([
					'espece' => $adoption->getespece(),
					'race' => $adoption->getrace(),
					'sexe' => $adoption->getsexe(),
					'age' => $adoption->getage(),
					'region' => $adoption->getregion(),
					'id' => $id
				]);
				echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
 

		
function rechercherAdop($str)
{
$sql = "select * from adoption where id like '%".$str."%' or espece like '%".$str."%' or race like '%".$str."%' or sexe like '%".$str."%' or age  like '%".$str."%' or region like '%".$str."%' ";
$db = config::getConnexion();
try{

$liste = $db->query($sql);
return $liste;

}
catch (Exception $e){
die('erreur:'. $e->getMessage());

}


}



 function trierreg(){
        $sql="SELECT * from adoption order by region ";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }





}

?>