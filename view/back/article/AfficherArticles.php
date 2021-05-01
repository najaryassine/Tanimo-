<?php
include_once '../../../model/Article.php';
include_once '../../../controller/ArticleC.php';

include "../../../controller/CategorieC.php";
include "../../../controller/SousCategorieC.php";

$articleC=new ArticleC();
$listeArticle=$articleC->afficherArticle();

require '../header.php';
?>

    <!--            xttttttt          -->



    <form action="" method="POST"  enctype="multipart/form-data">




        <div class="ms-content-wrapper"  >
            <div class="row">

                <div class="col-md-12" >
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Articles</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Afficher Articles</li>
                        </ol>
                    </nav>
                </div>



                <div class="col-xl-6 col-md-12"  >
                    <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                        <div class="ms-panel-body"  >
                            <form class="needs-validation clearfix" novalidate="">
                                <div class="form-row">
                                    <div class="col-xl-12 col-md-12 ">
                                        <h5>Afficher les articles</h5><br>
                                </div>
                                    <table border=5 align = 'center'>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Prix</th>
                                            <th>Categorie</th>
                                            <th>SousCategorie</th>
                                            <th>Image</th>
                                            <th>Supprimer</th>
                                            <th>modifier</th>
                                            
                                        </tr>

                                        <?PHP
                                        foreach($listeArticle as $article){
                                            ?>
                                            <tr>
                                                <td><?PHP echo $article['id_art']; ?></td>
                                                <td><?PHP echo $article['name']; ?></td>
                                                <td><?PHP echo $article['prix']; ?></td>
                                                <td><?PHP echo $article['categorie']; ?></td>
                                                <td><?PHP echo $article['souscategorie']; ?></td>
                                                <td><img src="../../../uploads/<?PHP echo $article['image']; ?>" alt="aaaa"></td>
                                                <td>
                                                    <a href="supprimerArticle.php?id=<?PHP echo $article['id_art']; ?>"> supprimer </a>
                                                </td>
                                                <td>
                                                    <a href="modifierArticle.php?id=<?PHP echo $article['id_art']; ?>"> Modifier </a>
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
<?php require '../footer.php'; ?>