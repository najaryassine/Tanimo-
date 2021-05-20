<?php
//set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
require_once '../../controller/promotionController.php';
require_once '../../model/promotion.php';

if ($_POST) {
  $produit = $_POST['produit'];
  $prixnouveau = $_POST['prixnouveau'];

    // Insert record
    $promotion = new Promotion($produit, $prixnouveau);
    promotionController::modifierPromotion($promotion, $_GET['id']);
  }
  header('Location:promotionGestion.php');

require 'header.php';
?>

  <a href="promotionGestion.php">Acceuil</a>

<?php
  echo "Promotion modifié";
require 'footer.php';
?>