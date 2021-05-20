<?php
//set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
require_once '../../controller/promotionController.php';
$vets = PromotionController::suppPromotion($_GET["id"]);
header('Location:promotionGestion.php');
