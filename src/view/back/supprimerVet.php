<?php
set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
require_once 'controller/vetController.php';
$vets = VetController::suppVet($_GET["id"]);
header('Location:vetGestion.php');
