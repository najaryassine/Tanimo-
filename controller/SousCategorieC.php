<?php
require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';
require_once 'c:/xampp/htdocs/Tanimo-/model/SousCategorie.php';

class SousCategorieC
{
    /**
     * @return false|PDOStatement
     */
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

    /**
     * @return false|PDOStatement
     */
    function afficherSousCategories()
    {

        $sql = "SELECT sc.id_sous_cat, sc.nom as name, c.nom as categorie FROM sous_categories as sc INNER JOIN categories as c on sc.id_cat=c.id_cat";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }


    /**
     * @param $sousCategorie
     */
    function ajouterSousCategorie($sousCategorie){
        $sql="INSERT INTO sous_categories(nom, id_cat) VALUES (:nom,:id_cat)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'nom' => $sousCategorie->getNom(),
                'id_cat' => $sousCategorie->getIdCat()

            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    function recupererSousCategorieById($id){
        $sql = "SELECT sc.id_sous_cat, sc.nom as name, c.nom as categorie FROM sous_categories as sc INNER JOIN categories as c on sc.id_cat=c.id_cat where sc.id_sous_cat=$id ";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $sousCategorie=$query->fetch();
            return $sousCategorie;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    /**
     * @param $id
     */
    function supprimerSousCategorie($id)
    {
        $sql = "DELETE FROM sous_categories WHERE id_sous_cat=:id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function modifierCategorie($sousCategorie, $id){
        try {
            $sql ='UPDATE sous_categories SET nom=:nom,id_cat=:id_cat WHERE id_sous_cat=:id';
            $db = config::getConnexion();
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $sousCategorie->getNom(),
                'id_cat' => $sousCategorie->getIdCat(),
                'id' => $id
            ]);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


}