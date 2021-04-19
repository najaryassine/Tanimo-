<?php

require_once("../model/User.php");

	if(isset($_POST['submit']))
	{
	$User=new User();
	$User->nom= $_POST['nom'];
	$User->email= $_POST['email'];
	$User->password= $_POST['pwd'];
	
	ajouterUser($User);
	
	header("location:../view/AllUser.php");
	
	}
	else if(isset($_GET['supprimer']))
	{
	$a1=new User();
	$a1->suppUser($_GET['supprimer']);
	header("location:../view/AllUser.php");
	}
	else if(isset($_POST['mod']))
	{
	$User=new User();
	$User->nom= $_POST['nom'];
	$User->email= $_POST['email'];
	$User->password= $_POST['pwd'];
	
	$User->modifUser($_POST['id']);
	header("location:../view/AllUser.php");
	}

	function ajouterUser($User){

	$a1=new User();
	$a1->insertUser($User);	
	}
	
	function afficherUser(){

	$a1=new User();
	$res=$a1->afficher();
	return $res;	
}



?>