<?php
  
   
  $conn=mysqli_connect("localhost","root","") or die ("Erreur");
  mysqli_select_db( $conn ,'projet_web') or die("La base de donnée est introuvable.");
  
   
  $sql = "DELETE FROM promotion WHERE id='" . $_GET["id"] . "'";
  if (mysqli_query($conn, $sql)) {
      echo "promotion supprimée avec succès";
  } else {
      echo "Error deleting record: " . mysqli_error($conn);
  }
  mysqli_close($conn);
  ?>