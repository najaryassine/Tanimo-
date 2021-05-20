<?php

require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';
require_once 'c:/xampp/htdocs/Tanimo-/model/Commande.php';

class CommandeC
{

    /**
     * @param $Commande
     */
    function ajouterCommande($Commande){
        $sql="INSERT INTO commandes (prix,etat, id_btq , id_user) VALUES (:prix,'non livre', :id_btq,:id_user)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'prix' => $Commande->getPrix(),
                'id_btq' => $Commande->getIdBtq(),
                'id_user' => $Commande->getIdUser()

            ]);
            $LAST_ID = $db->lastInsertId();
            return $LAST_ID;
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

    /**
     * @param $id
     * @return false|PDOStatement
     */
    function afficherCommande($id){

        $sql="SELECT cm.id_cmd, cm.prix,cm.etat, bt.Nom as boutique, us.nom as username FROM commandes as cm  INNER JOIN boutique as bt ON cm.id_btq = bt.Id INNER JOIN user as us ON us.id_user = cm.id_user WHERE cm.id_cmd = $id";
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
    /**
     * @param $id
     * @return false|PDOStatement
     */
    function afficherMesCommande($id){

        $sql="SELECT cm.id_cmd, cm.prix,cm.etat, bt.Nom as boutique, us.nom as username FROM commandes as cm  INNER JOIN boutique as bt ON cm.id_btq = bt.Id INNER JOIN user as us ON us.id_user = cm.id_user WHERE cm.id_user = $id";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    /**
     * @return false|PDOStatement
     */
    function afficherCommandes(){
        $sql="SELECT cm.id_cmd, cm.prix,cm.etat, bt.Nom as boutique, us.nom as username FROM commandes as cm  INNER JOIN boutique as bt ON cm.id_btq = bt.Id INNER JOIN user as us ON us.id_user = cm.id_user";
        $db = config::getConnexion();
        try{
            $liste = $db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    /**
     * @param $id
     */
    function supprimerCommande($id)
    {
        $sql = "DELETE FROM commandes WHERE id_cmd=:id";
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
     * @param $commande
     * @param $id
     */
    function modifierCommande($etat, $id)
    {
        try {
            $sql ='UPDATE commandes SET etat=:etat WHERE id_cmd=:id';
            $db = config::getConnexion();
            $query = $db->prepare($sql);
            $query->execute([
                'etat' => $etat,
                'id' => $id
            ]);

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }


    function triercommandes()
    {
        $sql = "SELECT cm.id_cmd, cm.prix,cm.etat, bt.Nom as boutique, us.nom as username FROM commandes as cm  INNER JOIN boutique as bt ON cm.id_btq = bt.Id INNER JOIN user as us ON us.id_user = cm.id_user ORDER BY etat ASC";
        $db = config::getConnexion();
        try {
            $req = $db->query($sql);
            return $req;
        } catch (Exception $e)
        {
            die('Erreur: ' . $e->getMessage());
        }
    }


    function triercommandes1()
    {
        $sql = "SELECT cm.id_cmd, cm.prix,cm.etat, bt.Nom as boutique, us.nom as username FROM commandes as cm  INNER JOIN boutique as bt ON cm.id_btq = bt.Id INNER JOIN user as us ON us.id_user = cm.id_user ORDER BY prix ASC";
        $db = config::getConnexion();
        try {
            $req = $db->query($sql);
            return $req;
        } catch (Exception $e)
        {
            die('Erreur: ' . $e->getMessage());
        }
    }






    function rechercherCommande($boutique)
    {
        $sql="SELECT cm.id_cmd, cm.prix,cm.etat, bt.Nom as boutique, us.nom as username FROM commandes as cm  INNER JOIN boutique as bt ON cm.id_btq = bt.Id INNER JOIN user as us ON us.id_user = cm.id_user where cm.id_btq =$boutique";
        $db = config::getConnexion();
        try{
            $req=$db->query($sql);
            return $req;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}



