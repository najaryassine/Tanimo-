<?php
set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
require 'controller/promotionController.php';
require_once 'model/promotion.php';

if ($_POST) {
  $produit = $_POST['produit'];
  $prixnouveau = $_POST['prixnouveau'];

    // Insert record
    $prom = new Promotion($produit, $prixnouveau);
    print_r($_POST);
    promotionController::ajouterPromotion($prom);
  
  }
  header('Location:../promotionGestion.php');
?>
  <a href="../promotionGestion.php">Acceuil</a>
<?php
  echo "promotion ajoutée";
?>