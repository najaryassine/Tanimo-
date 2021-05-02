<?php
include_once '../../model/Commande.php';
include_once '../../controller/CommandeC.php';
include_once '../../controller/ArtcomC.php';

$commandeC = new CommandeC();
$artcomC = new ArtcomC();


if (isset($_GET['id'])) {
    $oldcommande = $commandeC->afficherCommande($_GET['id']);

    $articlesCommande = $artcomC->recupererArticleByIdCmd($_GET['id']);

}


$error = "";

// create commande
$article = null;

require 'header.php';
?>




    <!--            xttttttt          -->



    <form action="" method="POST"  enctype="multipart/form-data">




        <div class="ms-content-wrapper"  >
            <div class="row">

                <div class="col-md-12" >
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Commandes</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Afficher les Commandes</li>
                        </ol>
                    </nav>
                </div>



                <div class="col-xl-6 col-md-12"  >
                    <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                        <div class="ms-panel-body"  >
                            <form class="needs-validation clearfix" novalidate="">
                                <div class="form-row">
                                    <div class="col-xl-12 col-md-12 ">
                                        <h5>Afficher les commandes</h5><br>
                                    </div>
                                    <table border=0 align = 'left'>
                                        <tr>
                                            <th>Article</th>
                                            <th>Prix Unitaire</th>
                                            <th>Qte</th>


                                        </tr>

                                        <?PHP
                                        foreach($articlesCommande as $article){
                                            ?>
                                            <tr>
                                                <td><?PHP echo $article['name']; ?></td>
                                                <td><?PHP echo $article['unit_prix']; ?></td>
                                                <td><?PHP echo $article['qte']; ?></td>
                                            </tr>
                                            <?PHP
                                        }
                                        ?>
                                    </table>
                                    <div class="col-xl-12 col-md-12 ">
                                    <label for="boutique">Boutique</label>
                                    <div class="input-group">
                                        <input type="text" disabled="disabled" name="boutique" class="form-control" id="boutique" placeholder="Entrer l'etat de la commande " required="required" value="<?php echo $oldcommande["boutique"] ?>">

                                    </div>
                                    <label for="user">User</label>
                                    <div class="input-group">
                                        <input type="text" disabled="disabled" name="user" class="form-control" id="user" placeholder="Entrer l'etat de la commande " required="required" value="<?php echo $oldcommande["username"] ?>">

                                    </div>
                                    <label for="etat">Etat</label>
                                    <div class="input-group">
                                        <input type="text" disabled="disabled" name="etat" class="form-control" id="etat" placeholder="Entrer l'etat de la commande " required="required" value="<?php echo $oldcommande["etat"] ?>">
                                    </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>




    <!--            xttttttt          -->



<?php require 'footer.php'; ?>