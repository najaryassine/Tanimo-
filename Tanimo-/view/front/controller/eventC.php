<?php
require_once "c:/xampp/htdocs/Tanimo-/config/config.php";

  class EventC
  {
    function afficherEvent($event){

        echo "Id: ".$event->getId()."<br>";
        echo "Titre: ".$event->getTitre()."<br>";
        echo "Description: ".$event->getDescription()."<br>";
        echo "DateD: ".$event->getDateD()."<br>";
        echo "DateF: ".$event->getDateF()."<br>";
        echo "Image: ".$event->getImage()."<br>"; 
                              }
    

    function ajouterEvent($event){
        $sql="INSERT INTO event (Id,Titre,Description,DateD,DateF,Image) VALUES (:Id,:Titre,:Description,:DateD,:DateF,:Image)";
        $db = config::getConnexion();
        try{
            $req = $db->prepare($sql);
            
                     $Id=$event->getId();
                     $Titre=$event->getTitre();
                     $Description=$event->getDescription();
                     $DateD=$event->getDateD();
                     $DateF=$event->getDateF();
                     $Image=$event->getImage();

             
                          $req->bindVAlue(':Id',$Id);
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
        $sql = "SElECT * From event ORDER BY Id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
   
    
    }




    




    function supprimerEvent($Id)
    {
        $sql = "DELETE FROM event WHERE Id= :Id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':Id', $Id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function recupererEvent($Id){
        $sql="SELECT * from event where Id=$Id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   

      

    function modifierEvent($event,$Id){
        $sql="UPDATE event SET Id=:Id,Titre=:Titre,Description=:Description,DateD=:DateD,DateF=:DateF,Image=:Image WHERE Id=:Id";
        
        $db = config::getConnexion();
       
try{        
    $req = $db->prepare($sql);
       $Id=$event->getId();
       $Titre=$event->getTitre();
       $Description=$event->getDescription();
       $DateD=$event->getDateD();
       $DateF=$event->getDateF();
       $Image=$event->getImage();
        $datas=array(':Id'=>$Id,':Titre'=>$Titre,':Description'=>$Description,':DateD'=>$DateD,':DateF'=>$DateF,':Image'=>$Image);
        $req->bindVAlue(':Id',$Id);
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

    function trierdate(){
        $sql="SELECT * from event order by DateD desc";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function trierdatef(){
        $sql="SELECT * from event order by DateF desc";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

}