<?php
set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
require_once('model/vetModel.php');
require 'config/config.php';

class VetController {
    public static function getAllVet() {
        $sql="SELECT * from veterinaire";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    public static function ajouterVet($vet){
        $sql="INSERT INTO veterinaire (nom, prenom, telephone, mail, image) VALUES (:nom, :prenom, :telephone, :mail, :image)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'nom' => $vet->getNom(),
                'prenom' => $vet->getPrenom(),
                'telephone' => $vet->getTelephone(),
                'mail' => $vet->getmail(),
                'image' => $vet->getImage()
            ]);
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
 
        }
    }

    public static function suppVet($id) {
        $sql = "DELETE FROM veterinaire WHERE id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    public static function modifierVet($vet, $id) {
        try {
            $sql ='UPDATE veterinaire SET
						nom = :nom,
						prenom = :prenom,
						telephone = :telephone,
						mail = :mail,
                        image = :image
					WHERE id = :id';
            $db = config::getConnexion();
            $query = $db->prepare($sql);

            $query->execute([
                'nom' => $vet->getNom(),
                'prenom' => $vet->getPrenom(),
                'telephone' => $vet->getTelephone(),
                'mail' => $vet->getmail(),
                'image' => $vet->getImage(),
                'id' => $id
            ]);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public static function getVetById($id) {
        $sql="SELECT * from veterinaire where id = :id ";
        $db = config::getConnexion();
        try{
            $query=$db->prepare($sql);
            $query->execute([
                'id' => $id
            ]);

            $article=$query->fetch();
            return $article;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}
