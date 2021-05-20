<?php
include_once '../../model/Commande.php';
include_once '../../controller/CommandeC.php';
include_once '../../controller/ArtcomC.php';

include "header.php";

$commandeC=new CommandeC();
$artcomC = new ArtcomC();
if (isset($_GET['id'])) {
    $listeArticles = $artcomC->afficherMesCommandeByIdCmd($_GET['id'],$_SESSION["id"]);
    $commande = $commandeC->afficherCommande($_GET['id']);
}

?>

<!--=======content================================-->

<div class="content page1">

    <div class="container_12">
        <div class="row">

            <ul class="list-group">
                <li class="list-group-item"> <h5 style="color: #000000">Afficher  commande Ref: <?PHP echo $commande['id_cmd']; ?></h5>  </li>
                <li class="list-group-item">boutique:<?PHP echo $commande['boutique']; ?> </li>
                <li class="list-group-item">etat:<?PHP echo $commande['etat']; ?> </li>
                <li class="list-group-item">Total Prix:<?PHP echo $commande['prix']; ?>.Dt </li>

            </ul>
        </div>
        <div class="row">


            <table class="table" >
                <thead>
                <tr>
                    <th scope="col">Article</th>
                    <th scope="col">Prix Unitaire</th>
                    <th scope="col">Qte</th>

                </tr>
                </thead>
                <tbody>
                <?PHP
                foreach($listeArticles as $article){
                    ?>
                    <tr>
                        <th scope="row"><?PHP echo $article['name']; ?></th>
                        <td><?PHP echo $article['unit_prix']; ?></td>
                        <td><?PHP echo $article['Qte']; ?></td>
                    </tr>
                    <?PHP
                }
                ?>
                </tbody>
            </table>
            <form method="get" action="HistoriqueCommande.php">
            <button type="submit"  class="btn btn-light">Return</button>
            </form>
            <form method="get" action="exportCommandes.php">
                <input type="hidden" value=<?PHP echo $commande['id_cmd']; ?> name="id" id="id">
            <button type="submit" class="btn btn-secondary">Exporter PDF</button>
            </form>
        </div>
    </div>

</div>

<?php include "footer.php" ?>