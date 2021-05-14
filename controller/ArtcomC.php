<?php

require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';
require_once 'c:/xampp/htdocs/Tanimo-/model/Artcom.php';

class ArtcomC
{
    /**
     * @param $Article
     */
    function ajouterArtcom($Artcom){
        $sql="INSERT INTO artcom(id_art, id_cmd, qte) VALUES (:id_art,:id_cmd,:qte)";
        $db = config::getConnexion();
        try{
            $query = $db->prepare($sql);

            $query->execute([
                'id_art' => $Artcom->getIdArt(),
                'id_cmd' => $Artcom->getIdCmd(),
                'qte' => $Artcom->getQte()


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
    function recupererArticleByIdCmd($id){
        $sql="SELECT ar.nom AS name, ar.prix AS unit_prix, arc.qte FROM artcom AS arc INNER JOIN articles AS ar on ar.id_art = arc.id_art  where arc.id_cmd=$id ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

    /**
     * @param $id
     * @return mixed
     */
    function afficherMesCommandeByIdCmd($id, $user_id){
        $sql="SELECT ar.nom AS name, ar.prix AS unit_prix, arc.qte as Qte, ar.image as image FROM artcom AS arc INNER JOIN articles AS ar on ar.id_art = arc.id_art INNER JOIN commandes as cm on cm.id_cmd = arc.id_cmd where arc.id_cmd=$id  and cm.id_user = $user_id";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
}