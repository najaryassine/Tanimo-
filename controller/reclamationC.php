<?php


if(isset($_POST['submit']))
{   session_start();
	require_once("../model/Reclamation.php");

	require_once "c:/xampp/htdocs/Tanimo-/config/config.php";
	$a1=new Reclamation();
	$a1->description = $_POST['descc'];
	$a1->date = date("Y/m/d");
	$a1->user_id = $_SESSION['id'];
	$a1->type = $_POST['type'];
	
	
	ajouterRec($a1);
	
	header("location:../view/front/index-7.php");
	
}
else if (isset($_POST['rep']))
{
	require_once("../model/ReclamationRep.php");
	require_once("../model/Reclamation.php");

	$id = $_POST["idrec"];
	$desc = $_POST["repo"];
	
	$r = new ReclamationRep();
	$r->idRec = $id;
	$r->description = $desc;
	$r->insertRecRep($r);
	$a = new Reclamation();
	$cnx = config::getConnexion();
	$req="update reclamation set etat = 1 where idreclamation = '$id'";
	$cnx->exec($req) or print_r($cnx->errorInfo());
	header("location:../view/back/reclamation.php");
}
else if (isset($_POST['sortDate']))
{
	session_unset();
	session_start();
		$_SESSION['sdate']= "date";
		header("location:../view/back/reclamation.php");
}
else if (isset($_POST['sorttype']))
{
	session_unset();
	session_start();
		$_SESSION['stype']= "type";
		header("location:../view/back/reclamation.php");
}

function afficherRec(){
		include_once "c:/xampp/htdocs/Tanimo-/model/Reclamation.php";

include_once "c:/xampp/htdocs/Tanimo-/config/config.php";
	$cnx = config::getConnexion();
  $req="SELECT * from reclamation";	
 $res= $cnx->query($req) or die($cnx->errorInfo());
  return $res;
}

function afficherRecDate(){
require_once("c:/xampp/htdocs/Tanimo-/model/Reclamation.php");

require_once "c:/xampp/htdocs/Tanimo-/config/config.php";
	$cnx = config::getConnexion();
  $req="SELECT * from reclamation order by date ASC";
 $res= $cnx->query($req) or die($cnx->errorInfo());
  return $res;
}

function afficherRecType(){
require_once("c:/xampp/htdocs/Tanimo-/model/Reclamation.php");

require_once "c:/xampp/htdocs/Tanimo-/config/config.php";
	$cnx = config::getConnexion();
  $req="SELECT * from reclamation order by type ASC";
 $res= $cnx->query($req) or die($cnx->errorInfo());
  return $res;
}

function ajouterRec($reclamation)
{
	$cnx = config::getConnexion();
	$req="INSERT into reclamation values ('','$reclamation->description','$reclamation->date','$reclamation->user_id','$reclamation->type','0')";
	$cnx->exec($req) or print_r($cnx->errorInfo());
}

function getRec($id)
{	
	require_once("c:/xampp/htdocs/Tanimo-/model/Reclamation.php");

require_once "c:/xampp/htdocs/Tanimo-/config/config.php";
	$cnx = config::getConnexion();
  $req="SELECT * from reclamation where user_id = '$id'";	
 $res= $cnx->query($req) or die($cnx->errorInfo());
  return $res;
}

function RecById($id)
{
	$cnx = config::getConnexion();
  $req="SELECT * from reclamation where idreclamation = '$id'";	
 $res= $cnx->query($req) or die($cnx->errorInfo());
  return $res;
}

?>