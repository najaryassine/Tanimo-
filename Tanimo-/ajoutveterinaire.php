<?php
  
   
  $con=mysqli_connect("localhost","root","") or die ("Erreur");
  mysqli_select_db( $con ,'projet_web') or die("La base de donnée est introuvable.");
  
   
   if($_POST)
   {
   $nom = $_POST['nom'];
   $prenom = $_POST['prenom'];
   $mail = $_POST['mail'];
   $telephone = $_POST['telephone'];

    mysqli_query($con,'INSERT INTO veterinaire (nom,prenom,mail,telephone) VALUES ("'.$nom.'","'.$prenom.'","'.$mail.'","'.$telephone.'")') or die ('Erreur: '.mysqli_error($con)); ?>
    <a href=ajouterveterinaire.html>Acceuil</a>
    <?php  
    echo "veterinaire ajouter";

}

   ?>