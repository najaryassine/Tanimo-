<?php
include_once '../../model/Commande.php';
include_once '../../controller/CommandeC.php';

$commandeC = new CommandeC();


if (isset($_GET['id'])) {
    $oldcommande = $commandeC->afficherCommande($_GET['id']);
}


$error = "";

// create commande
$article = null;


// create an instance of the controller

if (
    isset($_POST["etat"])
) {
    if (
        !empty($_POST["etat"])

    ) {

        //Add To DB

        $commandeC->modifierCommande($_POST["etat"],$_GET["id"]);
        header('Location:AfficherCommande.php');
    }
    else
        $error = "Missing information";

}

require 'header.php';

?>



    <!--            xttttttt          -->
    <div id="error">
        <?php
        if($error != ""){
            echo "<div class=\"alert alert-danger\" role=\"alert\">". $error ."</div>";
        }

        ?>
    </div>


    <form action="" method="POST"  enctype="multipart/form-data">




        <div class="ms-content-wrapper"  >
            <div class="row">

                <div class="col-md-12" >
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Commande</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Modifier l'état d'une commande</li>
                        </ol>
                    </nav>
                </div>



                <div class="col-xl-6 col-md-12"  >
                    <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                        <div class="ms-panel-body"  >
                            <form class="needs-validation clearfix" novalidate="">
                                <div class="form-row">
                                    <div class="col-xl-12 col-md-12 ">
                                        <h5>Modifier Commande</h5><br>

<!---->
                                        <label for="prix">Prix</label>
                                        <div class="input-group">
                                            <input type="text" disabled="disabled" name="prix" class="form-control" id="prix" placeholder="Entrer l'etat de la commande " required="required" value="<?php echo $oldcommande["prix"] ?>">

                                        </div>

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
                                            <select name="etat" id="etat" required="required">
                                                <?php if($oldcommande["etat"] === "non livre") {
                                                echo  '<option selected="selected" value="non livre">non livre</option>' ?>
                                               <?php echo  '<option value="livre">livre</option>' ?>
                                                <?php } else {
                                                echo  '<option selected="selected" value="non livre">non livre</option>' ?>
                                                <?php echo  '<option value="livre">livre</option>' ?>
                                                <?php }?>

                                            </select>
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <button class="btn btn-dark mr-2  ms-graph-metrics">Vider</button>
                                        <button class="btn btn-primary " name="upload" type="submit">Modifier</button>
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