<?PHP
include "../../model/event.php";
include "../../controller/eventC.php";

if(isset($_POST['Id'])and isset($_POST['Titre'])and isset($_POST['Description'])and isset($_POST['DateD'])and isset($_POST['DateF'])and isset($_POST['Image'])){
$Event1=new Event($_POST['Id'],$_POST['Titre'],$_POST['Description'],$_POST['DateD'],$_POST['DateF'],$_POST['Image']);

$event1C=new EventC();
$event1C->ajouterEvent($Event1);
header('Location: afficherevenement.php');
  

}

else{
  echo "verifier les champs";
}


require 'header.php';
?>


<?php require 'footer.php'; ?>
