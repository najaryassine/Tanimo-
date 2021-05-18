<?php
require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';
require_once 'c:/xampp/htdocs/Tanimo-/model/boutique.php';


  class BoutiqueC
  {
    function afficherboutique($boutique){

        echo "Id: ".$boutique->getId()."<br>";
        echo "Nom: ".$boutique->getNom()."<br>";
        echo "Email: ".$boutique->getEmail()."<br>";
        echo "Gearnt: ".$boutique->getGearnt()."<br>";
        echo "description: ".$boutique->getDescription()."<br>";
        echo "Adresse: ".$boutique->getAdresse()."<br>"; 
        echo "Image: ".$boutique->getImage()."<br>";
                              }
    

    function ajouterBoutique($boutique){
        $sql="INSERT INTO boutique (Id,Nom,Email,Gearnt,Description,Adresse,Image) VALUES (:Id,:Nom,:Email,:Gearnt,:Description,:Adresse,:Image)";
        $db = config::getConnexion();
        try{
            $req = $db->prepare($sql);
            
                     $Id=$boutique->getId();
                     $Nom=$boutique->getNom();
                     $Email=$boutique->getEmail();
                     $Gearnt=$boutique->getGearnt();
                     $Description=$boutique->getDescription();
                     $Adresse=$boutique->getAdresse();
                     $Image=$boutique->getImage();

             
                            $req->bindVAlue(':Id',$Id);
                            $req->bindVAlue(':Nom',$Nom);
                            $req->bindVAlue(':Email',$Email);
                            $req->bindVAlue(':Gearnt',$Gearnt);
                            $req->bindVAlue(':Description',$Description);
                            $req->bindVAlue(':Adresse',$Adresse);
                            $req->bindVAlue(':Image',$Image);
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
        $sql="UPDATE boutique SET Id=:Id, Nom=:Nom,Email=:Email,Gearnt=:Gearnt,Description=:Description,Adresse=:Adresse,Image=:Image WHERE Id=:Id";
        
        $db = config::getConnexion();
       
try{        
    $req = $db->prepare($sql);
       $Id=$boutique->getId();
       $Nom=$boutique->getNom();
       $Email=$boutique->getEmail();
       $Gearnt=$boutique->getGearnt();
       $Description=$boutique->getDescription();
       $Adresse=$boutique->getAdresse();
       $Image=$boutique->getImage();
       
        $datas=array(':Id'=>$Id, ':Nom'=>$Nom,':Email'=>$Email,':Gearnt'=>$Gearnt,':Description'=>$Description,':Adresse'=>$Adresse,':Image'=>$Image);
         $req->bindValue(':Id',$Id);
         $req->bindVAlue(':Nom',$Nom);
         $req->bindVAlue(':Email',$Email);
         $req->bindVAlue(':Gearnt',$Gearnt);
         $req->bindVAlue(':Description',$Description);
         $req->bindVAlue(':Adresse',$Adresse);
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



    


    