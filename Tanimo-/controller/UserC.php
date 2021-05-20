<?php


	if(isset($_POST['submit']))
	{
	require_once "c:/xampp/htdocs/Tanimo-/config/config.php";
	require_once("c:/xampp/htdocs/Tanimo-/model/User.php");
	$User=new User();
	$User->nom= $_POST['nom'];
	$User->email= $_POST['email'];
	$User->password= $_POST['pwd'];
	$User->adresse= $_POST['adr'];
	$User->phone= $_POST['tel'];
	$User->picture= $_POST['pic'];
	
	$cnx = config::getConnexion();
	$req="INSERT into user values ('','$User->email','$User->password','$User->nom','$User->adresse','$User->phone','$User->picture' )";
	$cnx->exec($req) or print_r($cnx->errorInfo());
    session_start();
    $r= $User->GetUser($User->email);
    $u = $r->fetch();
    $_SESSION['id']= $u['id_user'];
    $_SESSION['email']= $User->email;
    $_SESSION['nom']= $User->nom;
    $_SESSION['password']= $User->password;
    $_SESSION['adresse']= $User->adresse;
    $_SESSION['phone']= $User->phone;
    $_SESSION['picture']= $User->picture;
	header("location:../view/front/index.php");
	
	}
	else if(isset($_GET['supprimer']))
	{
		require_once "c:/xampp/htdocs/Tanimo-/config/config.php";
		require_once("c:/xampp/htdocs/Tanimo-/model/User.php");
	$a1=new User();
	$id= $_GET['supprimer'];
	$cnx = config::getConnexion();
    $req="DELETE from user where id_user ='$id'";
	$cnx->exec($req) or print_r($pdo->errorInfo());
	
	header("location:../view/back/utilisateur.php");
	}
	else if(isset($_POST['mod']))
	{
		require_once "c:/xampp/htdocs/Tanimo-/config/config.php";
		require_once("c:/xampp/htdocs/Tanimo-/model/User.php");
	$User=new User();
	$User->nom= $_POST['nom'];
	$User->email= $_POST['email'];
	$User->password= $_POST['pwd'];
	
	$id = $_POST['id'];
	
	$cnx = config::getConnexion();
	$req="update user set nom='$User->nom',email='$User->email',password='$User->password' where id_user ='$id' ";
	$cnx->exec($req) or print_r($cnx->errorInfo());
	
	header("location:../view/back/utilisateur.php");
	}
	else if(isset($_POST['modiff']))
	{
		
		require_once "c:/xampp/htdocs/Tanimo-/config/config.php";
		$id = $_SESSION['id']; 
		$nom = $_POST["nom"];
		$email = $_POST["email"];
		$password = $_POST["password"];
		$adresse = $_POST["adr"];
		$tel = $_POST["tel"];
		$pic = $_POST["pic"];
		
		if($pic=="")
		{
			$pic= $_SESSION['picture'];
		}
				session_start();
				$_SESSION['email']= $email;
				$_SESSION['nom']= $nom;
				$_SESSION['password']= $password;
				$_SESSION['adresse']= $adresse;
				$_SESSION['phone']= $tel;
				$_SESSION['picture']= $pic;
		
		$cnx = config::getConnexion();
		$req="update user set nom='$nom',email='$email',password='$password',adresse='$adresse',phone='$tel',picture='$pic' where id_user ='$id' ";
		$cnx->exec($req) or print_r($cnx->errorInfo());
				
				
		header("location:../view/front/index.php");
	
	}
	else if(isset($_POST['login']))
	{
		require_once "c:/xampp/htdocs/Tanimo-/config/config.php";
		require_once("c:/xampp/htdocs/Tanimo-/model/User.php");
		$email = $_POST['email'];
		$password = $_POST['password'];
		$a1=new User();
		$cnx = config::getConnexion();
    $req="select count(*) from user where email ='$email' and password ='$password'";
	$res = $cnx->query($req);

		if($res->fetchColumn()==1)
		{
				$r= $a1->GetUser($email);
				$u = $r->fetch();
				session_start();
				$_SESSION['id']= $u['id_user'];
				$_SESSION['email']= $u['email'];
				$_SESSION['nom']= $u['nom'];
				$_SESSION['password']= $u['password'];
				$_SESSION['adresse']= $u['adresse'];
				$_SESSION['phone']= $u['phone'];
				$_SESSION['picture']= $u['picture'];
				header("location:../view/front/index.php");
		
			
			
		}
		else
		{
			header("location:sign up.php");
		}
	}
	else if (isset($_POST['dec']))
	{
        session_start();
		session_unset();
		session_destroy();
		header("location:../view/front/sign up.php");
	}
	else if (isset($_POST['sortName']))
	{
		session_start();
		$_SESSION['sortName']= "name";
		header("location:../view/back/Utilisateur.php");
	}
	

	function ajouterUser($User){

	$a1=new User();
	$a1->insertUser($User);	
	}
	
	function afficherUser(){
		require_once "c:/xampp/htdocs/Tanimo-/config/config.php";
	require_once("c:/xampp/htdocs/Tanimo-/model/User.php");
	$cnx = config::getConnexion();
  $req="SELECT * from user";	
 $res= $cnx->query($req) or die($cnx->errorInfo());
  return $res;	
}

function afficherUserbynom(){
	require_once "c:/xampp/htdocs/Tanimo-/config/config.php";
	require_once("c:/xampp/htdocs/Tanimo-/model/User.php");
	$cnx = config::getConnexion();
  $req="SELECT * from user order by nom";	
 $res= $cnx->query($req) or die($cnx->errorInfo());
  return $res;	
}


?>