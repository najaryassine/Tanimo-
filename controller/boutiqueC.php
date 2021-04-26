<?php
include "C:/wamp/www/pro/config/config.php";


  class BoutiqueC
  {
    function afficherboutique($boutique){

        echo "Id: ".$boutique->getId()."<br>";
        echo "Nom: ".$boutique->getNom()."<br>";
        echo "Budget: ".$boutique->getBudget()."<br>";
        echo "Gearnt: ".$boutique->getGearnt()."<br>";
        echo "description: ".$boutique->getDescription()."<br>";
        echo "Adresse: ".$boutique->getAdresse()."<br>"; 
                              }
    

    function ajouterBoutique($boutique){
        $sql="INSERT INTO boutique (Id,Nom,Budget,Gearnt,Description,Adresse) VALUES (:Id,:Nom,:Budget,:Gearnt,:Description,:Adresse)";
        $db = config::getConnexion();
        try{
            $req = $db->prepare($sql);
            
                     $Id=$boutique->getId();
                     $nom=$boutique->getNom();
                     $Budget=$boutique->getBudget();
                     $Gearnt=$boutique->getGearnt();
                     $Description=$boutique->getDescription();
                     $Adresse=$boutique->getAdresse();

             
                            $req->bindVAlue(':Id',$Id);
                            $req->bindVAlue(':Nom',$Nom);
                            $req->bindVAlue(':Budget',$Budget);
                            $req->bindVAlue(':Gearnt',$Gearnt);
                            $req->bindVAlue(':Description',$Description);
                            $req->bindVAlue(':Adresse',$Adresse);
          $req->execute();
            
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
 
        }
    }




    function afficherBoutiques(){
        $sql = "SElECT * From boutique ORDER BY Id";
        $db = config::getConnexion();
        try{
        $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }   
   
    
    }




    




    function supprimerBoutique($Id)
    {
        $sql = "DELETE FROM boutique WHERE Id= :Id";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':Id', $Id);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }





    function recupererBoutique($Id){
        $sql="SELECT * from boutique where Id=$Id";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
        return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

   

      

    function modifierBoutique($boutique,$Id){
        $sql="UPDATE boutique SET Id=:Id, Nom=:Nom,Budget=:Budget,Gearnt=:Gearnt,Description=:Description,Adresse=:Adresse WHERE Id=:Id";
        
        $db = config::getConnexion();
       
try{        
    $req = $db->prepare($sql);
       $Id=$boutique->getId();
       $Nom=$boutique->getNom();
       $Budget=$boutique->getBudget();
       $Gearnt=$boutique->getGearnt();
       $Description=$boutique->getDescription();
       $Adresse=$boutique->getAdresse();
        $datas=array(':Id'=>$Id, ':Nom'=>$Nom,':Budget'=>$Budget,':Gearnt'=>$Gearnt,':Description'=>$Description,':Adresse'=>$Adresse);
         $req->bindValue(':Id',$Id);
         $req->bindVAlue(':Nom',$Nom);
         $req->bindVAlue(':Budget',$Budget);
         $req->bindVAlue(':Gearnt',$Gearnt);
         $req->bindVAlue(':Description',$Description);
         $req->bindVAlue(':Adresse',$Adresse);
         $s=$req->execute();
            
           
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }
        
    }
}



    


    