<?php
set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
require_once 'controller/promotionController.php';
?>

<?php
include 'view/front/header.php';
$proms = promotionController::getAllPromotions();
$proms = $proms->fetchAll();
$proms = array_values($proms);
if (isset($_GET["sort"])) {
    $proms = promotionController::trierPrixCroissant($proms);
}

?>


<div class="container">
    <div class="d-flex flex-row-reverse">
        <div class="col-3 mt-4 text-right">
            <button class="btn btn-primary">
                <a href="promotionList.php?sort=true" style="color: white;">Trier par nouveau prix</a>
            </button>
        </div>
    </div>
    <div class="row">
        <?php
        foreach ($proms as $row) {
        ?>
            <div class="col-4 mb-3 mt-3 vet-element">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="./ihr" alt="product-image">
                    <div class="card-body">
                        <p class="card-text">
                        <div class="container">
                            <div class="row">
                                <div class="col-6">
                                    <p> Ancien prix </p>
                                    <p> <?php echo $row["prixancien"] ?> $</p>
                                </div>
                                <div class="col-6">
                                    <p> Nouveau prix </p>
                                    <p> <?php echo $row["prixnouveau"] ?> $ </p>
                                </div>
                            </div>
                        </div>
                        </p>
                    </div>
                </div>
            </div>


        <?php } ?>

    </div>
</div>

<?php
include 'view/front/footer.php';
?>