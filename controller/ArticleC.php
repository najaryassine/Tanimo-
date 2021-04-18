<?php

require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';
require_once 'c:/xampp/htdocs/Tanimo-/model/Article.php';

class ArticleC
{
    function ajouterArticle($Article){
        $sql="INSERT INTO articles (prix, image, sous_cat_id, nom) VALUES (:prix,:image,:sous_cat_id,:nom)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'prix' => $Article->getPrix(),
                'image' => $Article->getImage(),
                'sous_cat_id' => $Article->getSousCatId(),
                'nom' => $Article->getNom()

            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    function afficherArticle(){

        $sql="SELECT ar.id_art, ar.nom AS name, ar.prix, ar.image,  c.nom AS categorie, sc.nom AS souscategorie  FROM articles AS ar INNER JOIN sous_categories AS sc on ar.sous_cat_id = sc.id_sous_cat INNER JOIN categories AS c on c.id_cat = sc.id_cat ";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function supprimerArticle($id)
    {
        $sql = "DELETE FROM articles WHERE id_art= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    function recupererArticleById($id){
        $sql="SELECT * from articles where id_art=$id";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $article=$query->fetch();
            return $article;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererArticleBySousCategorie($id_sous_cat){
        $sql="SELECT * from articles where id_sous_cat=$id_sous_cat";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $article=$query->fetch();
            return $article;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function recupererArticleByCategorie($id_cat){
        $sql="SELECT * from articles as a INNER JOIN sous_categories as sc on a.sous_cat_id = sc.id_sous_cat INNER JOIN categories as c on c.id_cat = sc.id_cat where id_cat=$id_cat";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute();

            $article=$query->fetch();
            return $article;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    function modifierArticle($Article, $id){
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE articles SET
						prix = :prix,
						image = :image,
						sous_cat_id = :sous_cat_id
						nom = :nom
					WHERE id_art = :id'


            );
            $query->execute([
                'prix' => $Article->getPrix(),
                'image' => $Article->getImage(),
                'sous_cat_id' => $Article->getSousCatId(),
                'nom' => $Article->getNom(),
                'id' => $id
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }










}



