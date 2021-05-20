<?php
include_once '../../model/Article.php';
include_once '../../controller/ArticleC.php';

include "../../controller/CategorieC.php";
include "../../controller/SousCategorieC.php";

include "header.php";
$_SESSION["user_id"] = $_SESSION["id"];
$_SESSION["user_name"] = $_SESSION["nom"];
$articleC=new ArticleC();
$categorieC = new CategorieC();
$listeArticle = $articleC->afficherArticle();
$categoris = $categorieC->afficherCategories();


?>
<!--=======content================================-->
    <div class="page1_block">
    <div class="container_12">
        <form action="categorieArticle.php" method="post">
            <select class="form-select" aria-label="Categories" name="cat" id="cat">
                <?php
                foreach ($categoris as $categorie) {
                    echo '<option  value="'.$categorie["id_cat"].'">'.$categorie["nom"].'</option>';
                }
                ?>
            </select>
            <input type="submit" name="search" value="Filter">
        </form>
    </div></div>
<div class="content page1">

        <div class="container_12">


            <div class="row">
                <?PHP
                foreach($listeArticle as $article) :
                ?>

                <div class="col-sm-4 col-lg-4 d-flex">
                    <div class="column" style="width: 100%">
                        <div class="card ">

                            <img class="card-img-top" src="../../uploads/<?PHP echo $article['image']; ?>" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="color: black"><?PHP echo $article['name']; ?></h5>
                                <p class="card-text" style="color: black"><?PHP echo $article['prix']; ?> .DT</p>
                                <a href="afficherArticle.php?id=<?PHP echo $article['id_art']; ?>" class="btn btn-primary">details</a>
                            </div>
                        </div>
                    </div>

            </br>
                </div>
                <?php endforeach; ?>
            </div>
        </div>

</div>
<?php include "footer.php"?>