<?php

require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';


require_once 'C:/xampp/htdocs/Tanimo-/model/User.php';

class UtilisateurC {
  function ajouterUtilisateur($Utilisateur){
            $sql="INSERT INTO user (nom, prenom, email, login, password) 
			VALUES (:nom,:prenom,:email, :login, :password)";
            $db = config::getConnexion();
            try{
                $query = $db->prepare($sql);

                $query->execute([
                    'nom' => $Utilisateur->getNom(),
                    'prenom' => $Utilisateur->getPrenom(),
                    'email' => $Utilisateur->getEmail(),
                    'login' => $Utilisateur->getLogin(),
                    'password' => $Utilisateur->getPassword()
                ]);
            }
            catch (Exception $e){
                echo 'Erreur: '.$e->getMessage();
            }
        }


function connexionUser($login,$password){
            $sql="SELECT * FROM user WHERE login='" . $login . "' and password = '". $password."'";
            $db = config::getConnexion();
            try{
                $query=$db->prepare($sql);
                $query->execute();
                $count=$query->rowCount();
                if($count==0) {
                    $message = "pseudo ou le mot de passe est incorrect";
                } else {
                    $x=$query->fetch();
                    $message = "cbn";
                }
            }
            catch (Exception $e){
                    $message= " ".$e->getMessage();
            }
          return $message;
        }
        function recupererUtilisateur($login){
			$sql="SELECT * from user where login='" . $login . "'";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		public function getuser($email , $password)
		{

$sql = "SELECT id_user,email,password from user where email='$email' and password='$password' LIMIT 1";
$result=mysqli_query($this->conn,$sql);
return $result;


		}

function afficherUser($id)
		{
			
$sql="SELECT * from   user where id_user=$id ";
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