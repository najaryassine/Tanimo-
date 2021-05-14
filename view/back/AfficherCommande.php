<?php
include_once '../../model/Commande.php';
include_once '../../controller/CommandeC.php';

class Boutique
{
    public $id_btq;
    public $nom;
}

$boutique1  = new Boutique();
$boutique1->id_btq = 1;
$boutique1->nom = "mnihla";

$boutique2  = new Boutique();
$boutique2->id_btq = 2;
$boutique2->nom = "ben arous";

$magasins = [$boutique1, $boutique2];

$commandeC=new CommandeC();
$listeCommande=$commandeC->afficherCommandes();

require 'header.php';
?>

    <!--            xttttttt          -->

    <form action="rechercherCommande.php" method="POST"  enctype="multipart/form-data">




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
                            <div class="col-xl-12 col-md-12 ">
                                <h5>Afficher les commandes</h5><br>
                            </div>
                            <div class="col-xl-12 col-md-12 ">
                                <a href="triercommandes.php">Trier</a>
                            </div>

                            <div class="col-xl-12 col-md-auto ">
                                <form action="rechercherCommande.php" method="POST">
                                    <label for="btq">Boutique</label>
                                    <select name="btq" id="btq">
                                        <?php
                                        foreach ($magasins as $magasin) {
                                            echo '<option  value="'.$magasin->id_btq.'">'.$magasin->nom.'</option>';
                                        }
                                        ?>
                                    </select>
                                    <input type="submit" name="submit"  value="Rechercher"/>
                                </form>
                            </div>

                            <form class="needs-validation clearfix" novalidate="">
                                <div class="form-row">


                                    <table border=5 align = 'center'>
                                        <tr>
                                            <th>Id</th>
                                            <th>Prix</th>
                                            <th>Etat</th>
                                            <th>Boutique</th>
                                            <th>Username</th>
                                            <th>Supprimer</th>
                                            <th>Modifier</th>
                                            <th>Detail</th>


                                        </tr>

                                        <?PHP
                                        foreach($listeCommande as $commande){
                                            ?>
                                            <tr>
                                                <td><?PHP echo $commande['id_cmd']; ?></td>
                                                <td><?PHP echo $commande['prix']; ?></td>
                                                <td><?PHP echo $commande['etat']; ?></td>
                                                <td><?PHP echo $commande['boutique']; ?></td>
                                                <td><?PHP echo $commande['username']; ?></td>

                                                <td>
                                                    <a href="supprimerCommande.php?id=<?PHP echo $commande['id_cmd']; ?>"> supprimer </a>
                                                </td>

                                                <td>
                                                    <a href="modifierCommande.php?id=<?PHP echo $commande['id_cmd']; ?>"> Modifier </a>
                                                </td>

                                                <td>
                                                    <a href="AfficherDetailCommande.php?id=<?PHP echo $commande['id_cmd']; ?>"> Detail </a>
                                                </td>
                                            </tr>
                                            <?PHP
                                        }
                                        ?>
                                    </table>





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
