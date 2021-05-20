<?php
include_once '../../controller/ArtcomC.php';
include_once '../../controller/CommandeC.php';
include_once '../../model/Artcom.php';
include_once '../../model/Commande.php';

session_start();
$commandeC = new CommandeC();
$artcomC = new ArtcomC();
$error= "";
if (
    isset($_POST["btq"]) &&
    isset($_POST["user_id"])&&
    isset($_POST["total"])
) {
    if (
        !empty($_POST["btq"]) &&
        !empty($_POST["user_id"])&&
        !empty($_POST["total"])

    ) {
        //Add Commande To DB
        $commande = new Commande($_POST['total'],'non livre',$_POST['btq'],$_POST['user_id']);
        $lastId = $commandeC->ajouterCommande($commande);
        //Add artCom To DB
        $nbArticles=count($_SESSION['panier']['libelleProduit']);
        for ($i=0 ;$i < $nbArticles ; $i++){
            $artcom = new Artcom($_SESSION['panier']['libelleProduit'][$i],$lastId,$_SESSION['panier']['qteProduit'][$i]);
            $artcomC->ajouterArtcom($artcom);
        }

        header('Location:HistoriqueCommande.php');
    }
    else
        $error = "Missing information";

}
?>
 <div id="error">
          <?php
          if($error != ""){
              echo "<div class=\"alert alert-danger\" role=\"alert\">". $error ."</div>";
          }

          ?>
      </div>