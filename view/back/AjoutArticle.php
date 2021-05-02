<?php
include_once '../../model/Article.php';
include_once '../../controller/ArticleC.php';

include "../../controller/CategorieC.php";
include "../../controller/SousCategorieC.php";

$CategorieC=new CategorieC();
$listeCategories=$CategorieC->afficherCategories();

$SousCategorieC=new SousCategorieC();
$listeSousCategories=$SousCategorieC->afficherSousCategorie();

$error = "";

// create article
$article = null;
//Upload Image

// create an instance of the controller
$articleC = new ArticleC();
if (
    isset($_POST["prix"]) &&
    isset($_POST["sous_cat_id"])&&
    isset($_POST["nom"])
) {
    if (
        !empty($_POST["prix"]) &&
        !empty($_POST["sous_cat_id"])&&
        !empty($_POST["nom"])

    ) {
        if (isset($_FILES['image'])) {
            $uploaddir = "../../uploads/";
            $uploadfile = $uploaddir . basename($_FILES['image']['name']);
            move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
            $image = $_FILES['image']['name'];
        } else {
            $image = "";
        }
        //Add To DB
        $article = new Article(
            $_POST['prix'],
            $image,
            $_POST['sous_cat_id'],
            $_POST['nom']

        );
        $articleC->ajouterArticle($article);
        header('Location:AfficherArticles.php');
    }
    else
        $error = "Missing information";

}

require 'header.php';
?>

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
                      <li class="breadcrumb-item"><a href="#">Articles</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Ajout d'un Article</li>
                    </ol>
                  </nav>
                </div>



            <div class="col-xl-6 col-md-12"  >
              <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                <div class="ms-panel-body"  >
                  <form class="needs-validation clearfix" novalidate="">
                    <div class="form-row">
                      <div class="col-xl-12 col-md-12 ">
                              <h5>Ajout Article</h5><br>
             

                  <label for="nom">Nom</label>
                    <div class="input-group">
                      <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrer le nom de l'article " required="required">

                    </div>


                    <label for="prix">Prix</label>
                      <div class="input-group">
                        <input type="number" name="prix" class="form-control" id="prix" placeholder="Entrer le prix " required="required" min="1" >

                      </div>



                          <label for="categorie">Categorie</label>
                          <div class="input-group">
                              <select name="categorie" id="categorie" required="required">
                                  <option value="0">Please Select Option</option>
                                  <?php
                                  foreach ($listeCategories as $cat) {
                                      echo '<option  value="'.$cat["id_cat"].'">'.$cat["nom"].'</option>';
                                  }
                                  ?>
                              </select>
                          </div>


                          <label for="sous_cat_id">Sous Categorie</label>
                          <div class="input-group">
                              <select name="sous_cat_id" id="sous_cat_id" required="required">
                                  <option value="0">Please Select Option</option>
                                  <?php
                                  foreach ($listeSousCategories as $scat) {
                                      echo '<option  value="'.$scat["id_sous_cat"].'">'.$scat["nom"].'</option>';
                                  }
                                  ?>
                              </select>

                          </div>



                    <label for="image">Image pour l'article</label>
                     <div class="input-group">
                      <input type="file" name="image" class="form-control" id="image" required="required"  accept="image/png, image/jpeg">

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

<?php require 'footer.php';?>

