<?php
include_once '../../../model/Categorie.php';
include_once '../../../controller/CategorieC.php';



$categorieC=new CategorieC();
$listeCategorie=$categorieC->afficherCategories();

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
                            <li class="breadcrumb-item"><a href="#">Categorie</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Afficher Categories</li>
                        </ol>
                    </nav>
                </div>



                <div class="col-xl-6 col-md-12"  >
                    <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                        <div class="ms-panel-body"  >
                            <form class="needs-validation clearfix" novalidate="">
                                <div class="form-row">
                                    <div class="col-xl-12 col-md-12 ">
                                        <h5>Afficher les categories</h5><br>
                                </div>
                                    <table border=5 align = 'center'>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Supprimer</th>
                                            <th>modifier</th>
                                            
                                        </tr>

                                        <?PHP
                                        foreach($listeCategorie as $categorie){
                                            ?>
                                            <tr>
                                                <td><?PHP echo $categorie['id_cat']; ?></td>
                                                <td><?PHP echo $categorie['nom']; ?></td>


                                                <td>
                                                    <a href="supprimerCategorie.php?id=<?PHP echo $categorie['id_cat']; ?>"> supprimer </a>
                                                </td>

                                                <td>
                                                    <a href="modifierCategorie.php?id=<?PHP echo $categorie['id_cat']; ?>"> Modifier </a>
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
<?php require '../footer.php';