<?php
require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';
require_once 'c:/xampp/htdocs/Tanimo-/model/Categorie.php';

class CategorieC
{

    function afficherCategorie()
    {

        $sql = "SELECT * FROM categories";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

}