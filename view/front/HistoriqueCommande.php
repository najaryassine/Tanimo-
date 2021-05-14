<?php
include_once '../../model/Commande.php';
include_once '../../controller/CommandeC.php';


session_start();
$_SESSION["user_id"] = 1;
$_SESSION["user_name"] = "bbbb";

$commandeC=new CommandeC();

$listeCommande=$commandeC->afficherMesCommande($_SESSION["user_id"]);

include "header.php"
?>
<!--=======content================================-->

<div class="content page1">

    <div class="container_12">
        <div class="row">

                <h5 style="color: black">Afficher les commandes</h5>

            <table class="table" >
                <thead>
                <tr>
                    <th scope="col">Ref</th>
                    <th scope="col">Prix</th>
                    <th scope="col">Etat</th>
                    <th scope="col">Boutique</th>
                    <th scope="col">Detail</th>


                </tr>
                </thead>
                <tbody>
                <?PHP
                foreach($listeCommande as $commande){
                    ?>
                    <tr>
                        <th scope="row"><?PHP echo $commande['id_cmd']; ?></th>
                        <td><?PHP echo $commande['prix']; ?></td>
                        <td><?PHP echo $commande['etat']; ?></td>
                        <td><?PHP echo $commande['boutique']; ?></td>
                        <td>
                            <a href="AfficherDetailCommande.php?id=<?PHP echo $commande['id_cmd']; ?>"> Detail </a>
                        </td>
                    </tr>
                    <?PHP
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php include "footer.php" ?>