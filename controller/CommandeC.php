<?php

require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';
require_once 'c:/xampp/htdocs/Tanimo-/model/Commande.php';

class CommandeC
{
    /**
     * @param $Commande
     */
    function ajouterCommande($Commande){
        $sql="INSERT INTO commandes (id_art, qte, prix,etat, id_btq , id_user) VALUES (:id_art,:qte,:prix,'non livre', :id_btq,:id_user)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'id_art' => $Commande->getIdArt(),
                'qte' => $Commande->getQte(),
                'prix' => $Commande->getPrix(),
                'id_btq' => $Commande->getIdBtq(),
                'id_user' => $Commande->getIdUser()

            ]);
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

        $sql="SELECT cm.id_cmd, ar.nom as article, cm.qte, cm.prix,cm.etat, bt.nom as boutique, us.nom as username FROM commandes as cm INNER JOIN articles as ar ON cm.id_art = ar.id_art INNER JOIN boutiques as bt ON cm.id_btq = bt.id_btq INNER JOIN user as us ON us.id_user = cm.id_user WHERE cm.id_cmd = $id";
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
     * @return false|PDOStatement
     */
    function afficherCommandes(){
        $sql="SELECT cm.id_cmd, ar.nom as article, cm.qte, cm.prix,cm.etat, bt.nom as boutique, us.nom as username FROM commandes as cm INNER JOIN articles as ar ON cm.id_art = ar.id_art INNER JOIN boutiques as bt ON cm.id_btq = bt.id_btq INNER JOIN user as us ON us.id_user = cm.id_user";
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
    function modifierCommande($etat, $id){
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


}



