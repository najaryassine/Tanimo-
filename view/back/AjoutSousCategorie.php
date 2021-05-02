<?php
include_once '../../model/SousCategorie.php';
include "../../controller/CategorieC.php";
include "../../controller/SousCategorieC.php";

$CategorieC=new CategorieC();
$listeCategories=$CategorieC->afficherCategories();



$error = "";

// create sous categorie
$sousCategorie = null;


// create an instance of the controller
$sousCategorieC = new SousCategorieC();
if (
    isset($_POST["id_cat"])&&
    isset($_POST["nom"])
) {
    if (

        !empty($_POST["id_cat"])&&
        !empty($_POST["nom"])

    ) {

        //Add To DB
        $sousCategorie = new SousCategorie(
            $_POST['nom'],
            $_POST['id_cat']

        );
        $sousCategorieC->ajouterSousCategorie($sousCategorie);
        header('Location:AfficherSousCategories.php');
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
                      <li class="breadcrumb-item"><a href="#">Sous Categorie</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Ajouter une sous categorie</li>
                    </ol>
                  </nav>
                </div>



            <div class="col-xl-6 col-md-12"  >
              <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                <div class="ms-panel-body"  >
                  <form class="needs-validation clearfix" novalidate="">
                    <div class="form-row">
                      <div class="col-xl-12 col-md-12 ">
                              <h5>Ajouter Sous Categorie</h5><br>
             

                  <label for="nom">Nom</label>
                    <div class="input-group">
                      <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrer le nom de sous categorie " required="required">

                    </div>



                          <label for="id_cat">Categorie</label>
                          <div class="input-group">
                              <select name="id_cat" id="id_cat" required="required">
                                  <option value="0">Please Select Option</option>
                                  <?php
                                  foreach ($listeCategories as $cat) {
                                      echo '<option  value="'.$cat["id_cat"].'">'.$cat["nom"].'</option>';
                                  }
                                  ?>
                              </select>
                          </div>


                
                 </div>

                  <div class="col-md-12">
                    <button class="btn btn-dark mr-2  ms-graph-metrics">Vider</button>
                    <button class="btn btn-primary " name="upload" type="submit">Ajouter</button>
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