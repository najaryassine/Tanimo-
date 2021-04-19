<?php

require_once "../config/config.php";

class User {
	
 public $idUser;
 public $nom;
 public $email; 
 public $password;
 
 public function __construct()
 {}

 public function afficher(){
	$cnx = config::getConnexion();
  $req="SELECT * from user";	
 $res= $cnx->query($req) or die($cnx->errorInfo());
  return $res;
}

public function insertUser($User)
{
	
	$cnx = config::getConnexion();
	$req="INSERT into user values ('','$User->email','$User->password','$User->nom')";
	$cnx->exec($req) or print_r($cnx->errorInfo());
}

public function modifUser($id)
{
	$cnx = config::getConnexion();
	$req="update user set nom='$this->nom',email='$this->email',password='$this->password' where id_user ='$id' ";
	$cnx->exec($req) or print_r($cnx->errorInfo());
	
}

public function consultUser($id)
{
	$cnx = config::getConnexion();
	$req="SELECT * from user where id_user ='$id'";
	$res=$cnx->query($req) or die($cnx->errorInfo());
	return $res;
}


public function suppUser($id)
{
	$cnx = config::getConnexion();
    $req="DELETE from user where id_user ='$id'";
	$cnx->exec($req) or print_r($pdo->errorInfo());
	
}

}
?>