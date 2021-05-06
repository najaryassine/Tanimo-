<?php
set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
include 'view/back/header.php';

require_once 'controller/promotionController.php';
$proms = promotionController::getAllPromotions();

?>

<h3 class="ml-5 mt-5 mr-5">Liste des promotions</h3>
<table class="table table-bordered ml-5 mt-5" style="width: 93%;">
  <thead>
    <tr>
      <th scope="col">Nom du produit </th>
      <th scope="col">Prix</th>
      <th scope="col">Prix en promotion</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

      <?php foreach($proms as $row) {  ?>
        <tr>
            <td> <?php echo $row["nom"]; ?> </td>
            <td> <?php echo $row["prix"] ?> </td>
            <td> <?php echo $row["prixnouveau"] ?> </td>
            <td>

            <a href="promotionModifier.php?id=<?php echo $row["id"]; ?>">
                <span><i class='fa fa-edit' style='font-size:18px;color:green'></i></span>
            </a>
            <a href="actions/supprimerPromotion.php?id=<?php echo $row["id"]; ?>">
                <span><i class='fa fa-trash-alt' style='font-size:18px;color:red'></i></span>
            </a>
            </td>
        </tr>
        <?php } ?>
      
  </tbody>
</table>


<?php
include 'view/back/footer.php';
?>