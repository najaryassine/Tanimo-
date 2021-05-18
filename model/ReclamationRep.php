<?php

require_once "../config/config.php";

class ReclamationRep {
	
 public $id;
 public $idRec;
 public $description; 
 
 public function insertRecRep($reclamation)
{
	
	$cnx = config::getConnexion();
	$req="INSERT into reclamationrep values ('','$reclamation->idRec','$reclamation->description')";
	$cnx->exec($req) or print_r($cnx->errorInfo());
}
  public function __construct()
 {}

 

}

?>