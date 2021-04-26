<?php
include "C:/wamp/www/pro/config/config.php";


  class EventC
  {
    function afficherEvent($event){

        echo "id: ".$event->getid()."<br>";
        echo "Titre: ".$event->getTitre()."<br>";
        echo "Description: ".$event->getDescription()."<br>";
        echo "DateD: ".$event->getDateD()."<br>";
        echo "DateF: ".$event->getDateF()."<br>";
        echo "Image: ".$event->getImage()."<br>"; 
                              }
    

    function ajouterEvent($event){
        $sql="INSERT INTO event (id ,Titre, Description, DateD, DateF, Image) VALUES (:id, :Titre, :Description, :DateD, :DateF, :Image)";
        $db = config::getConnexion();
        try{
            $req = $db->prepare($sql);
            
                     $id=$event->getid();
                     $Titre=$event->getTitre();
                     $Description=$event->getDescription();
                     $DateD=$event->getDateD();
                     $DateF=$event->getDateF();
                     $Image=$event->getImage();

             
                          $req->bindVAlue(':id',$id);
                          $req->bindVAlue(':Titre',$Titre);
                          $req->bindVAlue(':Description',$Description);
                          $req->bindVAlue(':DateD',$DateD);
                          $req->bindVAlue(':DateF',$DateF);
                          $req->bindVAlue(':Image',$Image);
          $req->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
 
        }
    }




    function afficherEvents(){
        $sql = "SElECT * From event ORDER BY id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
   
    
    }




    




    function supprimerEvent($id)
    {
        $sql = "DELETE FROM event WHERE id= :id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':id', $id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function recupererEvent($id){
        $sql="SELECT * from event where id=$id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   

      

    function modifierEvent($event,$id){
        $sql="UPDATE event SET id=:id, Titre=:Titre,Description=:Description,DateD=:DateD,DateF=:DateF,Image=:Image WHERE id=:id";
        
        $db = config::getConnexion();
       
try{        
    $req = $db->prepare($sql);
       $id=$event->getid();
       $Titre=$event->getTitre();
       $Description=$event->getDescription();
       $DateD=$event->getDateD();
       $DateF=$event->getDateF();
       $Image=$event->getImage();
        $datas=array(':id'=>$id, ':Titre'=>$Titre,':Description'=>$Description,':DateD'=>$DateD,':DateF'=>$DateF,':Image'=>$Image);
        $req->bindVAlue(':id',$id);
        $req->bindVAlue(':Titre',$Titre);
        $req->bindVAlue(':Description',$Description);
        $req->bindVAlue(':DateD',$DateD);
        $req->bindVAlue(':DateF',$DateF);
        $req->bindVAlue(':Image',$Image);
         $s=$req->execute();
            
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
}