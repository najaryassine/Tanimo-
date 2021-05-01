<?php
session_start();
/*A l'ajout du produit dans le panier, on recherche le prix de base du produit
et s'il y a une promo qui correspond à cette reference, puis on entre les données dans la table panier.*/
include_once '../../../controller/PanierC.php';
include_once '../../../controller/ArticleC.php';
include_once '../../../model/Panier.php';

$panierC =  new panierC();
$produitC =  new ArticleC();
$panier = new Panier();


if (isset($_POST['id_art'])) {

    $result = $produitC->recupererArticleById($_POST['id_art']);

    print_r($result);
        $price = $result["prix"];
    /*besoin d'une connexion pour pouvoir tester */
    $panier = new Panier($result['id_art'],$_SESSION['id'],$price);
// $panier = new Panier($result['id_produit'],2,$price);
    //print_r($panier);
    $panierC->addPanierC($panier);
    header('Location:panier.php?id='.$_SESSION["id"]);
}

?>