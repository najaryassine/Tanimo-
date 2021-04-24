<?PHP
include_once '../../../controller/SousCategorieC.php';

$sousCategorie=new SousCategorieC();

if (isset($_GET['id'])){
    $sousCategorie->supprimerSousCategorie($_GET['id']);
    header('Location:AfficherSousCategories.php');
}
