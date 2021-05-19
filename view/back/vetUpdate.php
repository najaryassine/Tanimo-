<?php
set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
include 'view/back/header.php';

require_once '../../controller/vetController.php';
$vet = VetController::getVetById($_GET["id"]);
?>

<form method="post" action="modifierVet.php?id=<?php echo $_GET[" enctype="multipart/form-data" name="form">
    <div class="ms-content-wrapper">
        <div class="row">

            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Veterinaire</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Modfier d'un veterinaire</li>
                    </ol>
                </nav>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="ms-panel ms-panel-fh" style="width:700px ; margin-left: 120px;">
                    <div class="ms-panel-body">
                        <form class="needs-validation clearfix" novalidate="">
                            <div class="form-row">
                                <div class="col-xl-12 col-md-12 ">
                                    <h5>Modifier veterinaire</h5><br>

                                    <label for="nop">Nom</label>
                                    <div class="input-group">
                                        <input autocomplete="off" value="<?php echo $vet["NOM"] ?>" type="text" name="nom" class="form-control" id="nom" placeholder="Entrer le Nom du veterinaire " pattern="[A-Za-z]*" required>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>


                                    <label for="budget">prenom</label>
                                    <div class="input-group">
                                        <input autocomplete="off" value="<?php echo $vet["PRENOM"] ?>" type="text" name="prenom" class="form-control" id="prenom" placeholder="Entrer le prenom " pattern="[A-Za-z]*" required>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>


                                    <label for="gearnt">mail</label>
                                    <div class="input-group">
                                        <input autocomplete="off" type="email" value="<?php echo $vet["MAIL"] ?>" name="mail" class="form-control" id="mail" placeholder="Entrer le mail " required>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>


                                    <label for="telephone">telephone</label>
                                    <div class="input-group">
                                        <input autocomplete="off" type="number" value="<?php echo $vet["TELEPHONE"] ?>" name="telephone" class="form-control" id="telephone" placeholder="Entrer le numero du telephone " pattern="^[0-9]{8}$" required>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <label for="image">Image</label>
                                    <div class="input-group">
                                        <input autocomplete="off" type="file" name="image" class="form-control" id="image" required>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-12">
                                    <button class="btn btn-dark mr-2  ms-graph-metrics"> <a href="vetUpdate.php?id=<?php echo $_GET[">Vider </a> </button>
                                    <button class="btn btn-primary " name="submit" type="submit" id="submit">Modifier</button>
                                </div>

                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<?php
include 'view/back/footer.php';
?>