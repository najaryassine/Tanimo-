<?php
include_once '../../model/Categorie.php';
include "../../controller/CategorieC.php";
include "../../controller/SousCategorieC.php";

$sousCategorieC=new sousCategorieC();
$listesousCategorie=$sousCategorieC->afficherSousCategories();

require 'header.php';
?>




    <!--            xttttttt          -->



    <form action="" method="POST"  enctype="multipart/form-data">




        <div class="ms-content-wrapper"  >
            <div class="row">

                <div class="col-md-12" >
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb pl-0">
                            <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Sous Categories</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Afficher les sous categories</li>
                        </ol>
                    </nav>
                </div>



                <div class="col-xl-6 col-md-12"  >
                    <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                        <div class="ms-panel-body"  >
                            <form class="needs-validation clearfix" novalidate="">
                                <div class="form-row">
                                    <div class="col-xl-12 col-md-12 ">
                                        <h5>Afficher les sous categories</h5><br>
                                </div>
                                    <table border=5 align = 'center'>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nom</th>
                                            <th>Categorie</th>
                                            <th>Supprimer</th>
                                            <th>modifier</th>
                                            
                                        </tr>

                                        <?PHP
                                        foreach($listesousCategorie as $sousCategorie){
                                            ?>
                                            <tr>
                                                <td><?PHP echo $sousCategorie['id_sous_cat']; ?></td>
                                                <td><?PHP echo $sousCategorie['name']; ?></td>
                                                <td><?PHP echo $sousCategorie['categorie']; ?></td>


                                                <td>
                                                    <a href="supprimerSousCategorie.php?id=<?PHP echo $sousCategorie['id_sous_cat']; ?>"> supprimer </a>
                                                </td>
                                                <td>
                                                    <a href="modifierSousCategorie.php?id=<?PHP echo $sousCategorie['id_sous_cat']; ?>"> Modifier </a>
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



<?php require 'footer.php'; ?>