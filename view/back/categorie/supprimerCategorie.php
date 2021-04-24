<?PHP
include_once '../../../controller/CategorieC.php';

$categorieC=new CategorieC();

if (isset($_GET['id'])){
    $categorieC->supprimerCategorie($_GET['id']);
    header('Location:AfficherCategories.php');
}
