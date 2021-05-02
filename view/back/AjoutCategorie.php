<?php
include_once '../../model/Categorie.php';
include "../../controller/CategorieC.php";


$error = "";

// create catgorie
$categorie = null;
//Upload Image

// create an instance of the controller
$categorieC = new CategorieC();
if (
    isset($_POST["nom"])
) {
    if (
        !empty($_POST["nom"])
    ) {

        //Add To DB
        $categorie = new Categorie(

            $_POST['nom']

        );
        $categorieC->ajouterCategorie($categorie);
        header('Location:AfficherCategories.php');
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
                      <li class="breadcrumb-item"><a href="#">Categories</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Ajouter catégorie</li>
                    </ol>
                  </nav>
                </div>



            <div class="col-xl-6 col-md-12"  >
              <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                <div class="ms-panel-body"  >
                  <form class="needs-validation clearfix" novalidate="">
                    <div class="form-row">
                      <div class="col-xl-12 col-md-12 ">
                              <h5>Ajout Categorie</h5><br>
             

                  <label for="nom">Nom</label>
                    <div class="input-group">
                      <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrer le nom de la categorie " required="required">

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



<?php require 'footer.php';