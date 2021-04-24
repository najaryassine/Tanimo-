<?php
require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';
require_once 'c:/xampp/htdocs/Tanimo-/model/Categorie.php';

class CategorieC
{
    /**
     * @return false|PDOStatement
     */
    function afficherCategories()
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

    /**
     * @param $Categorie
     */
    function ajouterCategorie($Categorie){
        $sql="INSERT INTO categories( nom) VALUES (:nom)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'nom' => $Categorie->getNom()

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
    function recupererCategorieById($id){
        $sql="SELECT * FROM categories where  id_cat = $id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $Categorie=$query->fetch();
            return $Categorie;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    /**
     * @param $id
     */
    function supprimerCategorie($id)
    {
        $sql = "DELETE FROM categories WHERE id_cat= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    /**
     * @param $Categorie
     * @param $id
     */
    function modifierCategorie($Categorie, $id){
        try {
            $sql ='UPDATE categories SET nom=:nom WHERE id_cat=:id';
            $db = config::getConnexion();
            $query = $db->prepare($sql);
            $query->execute([
                'nom' => $Categorie->getNom(),
                'id' => $id
            ]);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
}