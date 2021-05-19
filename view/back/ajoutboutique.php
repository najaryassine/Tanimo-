<?PHP
include "../../model/boutique.php";
include "../../controller/boutiqueC.php";

if(isset($_POST['Id']) and isset($_POST['Nom']) and isset($_POST['Email']) and isset($_POST['Gearnt'])and isset($_POST['Description'])and isset($_POST['Adresse'])and isset($_POST['Image'])){


$boutique1=new Boutique($_POST['Id'],$_POST['Nom'],$_POST['Email'],$_POST['Gearnt'],$_POST['Description'],$_POST['Adresse'],$_POST['Image']);

$boutique1C=new BoutiqueC();
$boutique1C->ajouterBoutique($boutique1);
header('Location: afficherBoutique.php');
  

}

else{
  echo "verifier les champs";
}

require 'header.php';
?>


<?php require 'footer.php'; ?>
