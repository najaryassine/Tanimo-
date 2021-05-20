<?php
//set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');

//set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');


require_once '../../controller/promotionController.php';
$articles = promotionController::getAllArticles();
$prom = promotionController::getPromotionById($_GET["id"]);
require 'header.php';
?>



<form method="post" action="modifierPromotion.php?id=<?php echo $_GET["id"] ?>" enctype="multipart/form-data" name="form">
    <div class="ms-content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Promotion</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modifier d'une Promotion</li>
                    </ol>
                </nav>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="ms-panel ms-panel-fh" style="width:700px ; margin-left: 120px;">
                    <div class="ms-panel-body">
                        <form class="needs-validation clearfix" novalidate="">
                            <div class="form-row">
                                <div class="col-xl-12 col-md-12 ">
                                    <h5>Modifier promotion</h5><br>
                                    <label for="produit">Produits:</label>
                                    <select class="form-control" name="produit" id="produit">
                                        <option value="">--- Choisir un produit ---</option>
                                        <?php foreach ($articles as $a) { ?>
                                            <option selected="<?php echo $a["nom"] == $prom["nom"]? 'true' : 'false' ?>" value="<?php echo $a["id"] ?>"><?php echo $a["nom"] ?></option>
                                        <?php } ?>
                                    </select>
                                    <label for="prixnouveau">Nouveau Prix</label>
                                    <div class="input-group">
                                        <input autocomplete="off" value="<?php echo $prom["prixnouveau"] ?>" type="number" name="prixnouveau" class="form-control" id="prixnouveau" placeholder="Entrer nouveau prix " pattern="^[0-9]{8}$" required>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-dark mr-2  ms-graph-metrics"> <a href="promotionModofier.php">Vider </a> </button>
                                    <button class="btn btn-primary " name="submit" type="submit" id="submit">Modifier</button>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>


<?php require 'footer.php'; ?>