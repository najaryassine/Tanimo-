<?php
include_once '../../controller/adoptionc.php';
$adoptionc = new adoptionc();
$listAdoption=$adoptionc->afficheradoption();
if (isset($_GET['key'])){
    $listAdoption = $adoptionc->rechercherAdop($_GET['key']);
}



require 'header.php';


?>





    <!--            xttttttt          -->


    <h1> afficher les adoptions </h1>





    <div class="ms-content-wrapper"  >
        <div class="row">

            <div class="col-md-12" >
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    </ol>
                </nav>
            </div>
            <div>



                <hr>
                <form>
                    <tr>
                        <td>
                            <div align="center"><input  type="text" name="key" class="col-x1"  placeholder="Search....">
                                <button type="submit">Search</button>
                            </div>
                        </td>
                    </tr>
                </form>
                <br>
                <br>
                <br>
                <table border="1" align="center">
                    <tr>  <td>



                        </td></tr>
                    <tr> <th> Id </th>
                        <th>espece</th>
                        <th>race</th>
                        <th> sexe</th>
                        <th>age</th>
                        <th> region </th>
                        <th>Image</th>
                        <th> supprimer </th>
                        <th> modifier</th>



                    </tr>
                    <?php

                    foreach ($listAdoption as $adop) :


                        ?>
                        <tr>
                            <td> <?php  echo $adop['id']  ; ?> </td>
                            <td> <?php  echo $adop['espece']  ; ?> </td>
                            <td> <?php  echo $adop['race']  ; ?> </td>
                            <td> <?php  echo $adop['age']  ; ?> </td>
                            <td> <?php  echo $adop['sexe']  ; ?> </td>
                            <td> <?php  echo $adop['region']  ; ?> </td>
                            <td> <img src="assets/img/<?PHP echo $adop['image']; ?>" alt="aaaa"> </td>

                            <td>
                                <form method="POST" action="supprimerAdoption.php">
                                    <input type="submit" name="supprimer" value="supprimer" class="btn btn-danger">
                                    <input type="hidden" value=<?PHP echo $adop['id']; ?> name="id">

                                </form>

                            </td>


                            <td>
                                <a href="modifierAdop.php?id=<?PHP echo $adop['id']; ?>"> Modifier </a>
                            </td>


                        </tr>
                    <?php endforeach; ?>



                </table>


                <div class="col-xl-6 col-md-12">
                    <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >

                    </div>
                </div>
            </div>
        </div>





        <!--            xttttttt          -->



<?php require 'footer.php'; ?>