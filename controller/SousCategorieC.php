<?php
require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';
require_once 'c:/xampp/htdocs/Tanimo-/model/SousCategorie.php';

class SousCategorieC
{

    function afficherSousCategorie()
    {

        $sql = "SELECT * FROM sous_categories";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

}