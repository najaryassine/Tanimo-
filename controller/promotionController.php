<?php
//set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
require_once('c:/xampp/htdocs/Tanimo-/model/promotion.php');
require_once "c:/xampp/htdocs/Tanimo-/config/config.php";

class promotionController
{

    public static function getAllPromotions()
    {
        $sql = "SELECT b.id as id, a.nom as nom, a.prix as prix, b.prixnouveau as prixnouveau, a.prix as prixancien, a.image
        FROM promotion as b
        INNER JOIN articles as a ON b.produit = a.id_art;";
        $db = config::getConnexion();
        try {
            $query = $db->query($sql);

            return $query;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public static function ajouterPromotion($promotion)
    {
        $sql = "INSERT INTO Promotion (produit, prixnouveau) VALUES (:produit, :prixnouveau)";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);

            $query->execute([
                'produit' => $promotion->getProduit(),
                'prixnouveau' => $promotion->getprixnouveau()
            ]);
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    public static function suppPromotion($id)
    {
        $sql = "DELETE FROM promotion WHERE id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public static function modifierPromotion($promotion, $id)
    {
        print_r($id);
        try {
            $sql = "UPDATE Promotion SET
						prixnouveau = :prixnouveau
					WHERE id = :id";
            $db = config::getConnexion();
            $query = $db->prepare($sql);

            $query->execute([
                'prixnouveau' => $promotion->getprixnouveau(),
                'id' => $id
            ]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getPromotionById($id)
    {
        $sql = "SELECT a.nom as nom, a.prix as prix, b.prixnouveau as prixnouveau
        FROM promotion as b
        INNER JOIN articles as a ON (b.produit = a.id_art and b.id = :id) ";
        $db = config::getConnexion();
        try {
            $query = $db->prepare($sql);
            $query->execute([
                'id' => $id
            ]);

            $article = $query->fetch();
            return $article;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public static function getAllArticles()
    {
        $sql = "SELECT id_art as id, nom as nom from articles";
        $db = config::getConnexion();
        try {
            $query = $db->query($sql);

            return $query;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public static function trierPrixCroissant($tab)
    {

        usort($tab, function ($item1, $item2) {
            return $item1['prixnouveau'] <=> $item2['prixnouveau'];
        });

        return $tab;
    }
}
