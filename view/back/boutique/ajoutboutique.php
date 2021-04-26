<?PHP
include "../../../model/boutique.php";
include "../../../controller/boutiqueC.php";

if (isset($_GET['Id']) and isset($_GET['Nom']) and isset($_GET['Budget']) and isset($_GET['Gearnt'])and isset($_GET['Description'])and isset($_GET['Adresse'])){


$boutique1=new Boutique($_GET['Id'],$_GET['Nom'],$_GET['Budget'],$_GET['Gearnt'],$_GET['Description'],$_GET['Adresse']);

$boutique1C=new BoutiqueC();
$boutique1C->ajouterBoutique($boutique1);
header('Location: afficherBoutique.php');
  

}

else{
  echo "verifier les champs";
}



?>