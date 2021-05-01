<?php
include_once '../../../model/Article.php';
include_once '../../../controller/ArticleC.php';

include "../../../controller/CategorieC.php";
include "../../../controller/SousCategorieC.php";
$articleC = new ArticleC();
$CategorieC=new CategorieC();
$listeCategories=$CategorieC->afficherCategories();

if (isset($_GET['id'])) {
    $oldarticle = $articleC->recupererArticleById($_GET['id']);
}

$SousCategorieC=new SousCategorieC();
$listeSousCategories=$SousCategorieC->afficherSousCategorie();

$error = "";

// create article
$article = null;
//Upload Image

// create an instance of the controller

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
            $check = $_FILES["image"]["tmp_name"];
            if($_FILES['image']['size'] !== 0) {
                $uploaddir = "../../../uploads/";
                $uploadfile = $uploaddir . basename($_FILES['image']['name']);
                move_uploaded_file($_FILES['image']['tmp_name'], $uploadfile);
                $image = $_FILES['image']['name'];
            }else{
                $image = $oldarticle["image"];
            }
        } else {
            $image = $oldarticle["image"];
        }
        //Add To DB
        $article = new Article(
            $_POST['prix'],
            $image,
            $_POST['sous_cat_id'],
            $_POST['nom']

        );
        $articleC->modifierArticle($article,$_GET["id"]);
        header('Location:AfficherArticles.php');
    }
    else
        $error = "Missing information";

}


 require '../header.php';
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
                            <li class="breadcrumb-item"><a href="#">Articles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Modifier un Article</li>
                        </ol>
                    </nav>
                </div>



                <div class="col-xl-6 col-md-12"  >
                    <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                        <div class="ms-panel-body"  >
                            <form class="needs-validation clearfix" novalidate="">
                                <div class="form-row">
                                    <div class="col-xl-12 col-md-12 ">
                                        <h5>Modifier Article</h5><br>


                                        <label for="nom">Nom</label>
                                        <div class="input-group">
                                            <input type="text" name="nom" class="form-control" id="nom" placeholder="Entrer le nom de l'article " required="required" value="<?php echo $oldarticle["name"] ?>">

                                        </div>


                                        <label for="prix">Prix</label>
                                        <div class="input-group">
                                            <input type="number" name="prix" class="form-control" id="prix" placeholder="Entrer le prix " required="required" min="1" value="<?php echo $oldarticle["prix"]  ?>" >

                                        </div>



                                        <label for="categorie">Categorie</label>
                                        <div class="input-group">
                                            <select name="categorie" id="categorie" required="required">

                                                <?php
                                                foreach ($listeCategories as $cat) {
                                                    if($cat["id_cat"]==$oldarticle["id_cat"]){
                                                        echo '<option selected="selected" value="'.$cat["id_cat"].'">'.$cat["nom"].'</option>';
                                                    }
                                                    else {
                                                        echo '<option  value="'.$cat["id_cat"].'">'.$cat["nom"].'</option>';
                                                    }

                                                }
                                                ?>
                                            </select>
                                        </div>


                                        <label for="sous_cat_id">Sous Categorie</label>
                                        <div class="input-group">
                                            <select name="sous_cat_id" id="sous_cat_id" required="required">

                                                <?php
                                                foreach ($listeSousCategories as $scat) {
                                                    if($scat["id_sous_cat"]==$oldarticle["id_sous_cat"]){
                                                        echo '<option selected="selected" value="'.$scat["id_sous_cat"].'">'.$scat["nom"].'</option>';
                                                    }
                                                    else {
                                                        echo '<option  value="'.$scat["id_sous_cat"].'">'.$scat["nom"].'</option>';
                                                    }

                                                }
                                                ?>
                                            </select>

                                        </div>



                                        <label for="image">Image pour l'article</label>
                                        <div class="input-group">
                                            <input type="file" name="image" class="form-control" id="image" accept="image/png, image/jpeg">

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
<?php require '../footer.php'; ?>