<?php
//set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
require 'header.php';

require_once '../../controller/vetController.php';
$vets = VetController::getAllVet();
?>

    <h3 class="ml-5 mt-5 mr-5">Liste des vétérinaires</h3>
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered ml-5 mt-5" style="width: 93%;">
                <thead>
                <tr>
                    <th scope="col">Nom </th>
                    <th scope="col">Prénom</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Téléphone</th>
                    <th scope="col">Actions</th>
                </tr>
                </thead>
                <tbody>
                <?php
                foreach ($vets as $row) {
                    ?>
                    <tr>
                        <td> <?php echo $row["NOM"]; ?> </td>
                        <td> <?php echo $row["PRENOM"] ?> </td>
                        <td> <?php echo $row["MAIL"] ?> </td>
                        <td> <?php echo $row["TELEPHONE"] ?> </td>
                        <td>

                            <a href="vetUpdate.php?id=<?php echo ''.$row["ID"] ?>">
                                <span><i class='fa fa-edit' style='font-size:18px;color:green'></i></span>
                            </a>
                            <a href="supprimerVet.php?id=<?php echo $row["ID"]; ?>">
                                <span><i class='fa fa-trash-alt' style='font-size:18px;color:#ff0000'></i></span>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

<?php
require 'footer.php';
?>