<?php
set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
include 'view/back/header.php';
?>

<form method="post" action="actions/ajoutveterinaire.php" enctype="multipart/form-data" name="form">




    <div class="ms-content-wrapper">
        <div class="row">

            <div class="col-md-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                        <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Veterinaire</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Ajout d'un veterinaire</li>
                    </ol>
                </nav>
            </div>
            <div class="col-xl-6 col-md-6">
                <div class="ms-panel ms-panel-fh" style="width:700px ; margin-left: 120px;">
                    <div class="ms-panel-body">
                        <form class="needs-validation clearfix" novalidate="">
                            <div class="form-row">
                                <div class="col-xl-12 col-md-12 ">
                                    <h5>Ajout veterinaire</h5><br>

                                    <label for="nop">Nom</label>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" name="nom" class="form-control" id="nom" placeholder="Entrer le Nom du veterinaire " pattern="[A-Za-z]*" required>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>


                                    <label for="budget">prenom</label>
                                    <div class="input-group">
                                        <input autocomplete="off" type="text" name="prenom" class="form-control" id="prenom" placeholder="Entrer le prenom " pattern="[A-Za-z]*" required>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>


                                    <label for="gearnt">mail</label>
                                    <div class="input-group">
                                        <input autocomplete="off" type="email" name="mail" class="form-control" id="mail" placeholder="Entrer le mail " required>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>


                                    <label for="telephone">telephone</label>
                                    <div class="input-group">
                                        <input autocomplete="off" type="number" name="telephone" class="form-control" id="telephone" placeholder="Entrer le numero du telephone " pattern="^[0-9]{8}$" required>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <label for="image">Image</label>
                                    <div class="input-group">
                                        <input autocomplete="off" type="file" name="image" class="form-control" id="image" required>
                                        <div class="invalid-feedback">
                                        </div>
                                    </div>

                                    <!-- <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" name="image" id="image" required>
                                            <label class="custom-file-label" for="image">Choisir une image</label>
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                    </div> -->

                                </div>

                                <div class="col-md-12">
                                    <button class="btn btn-dark mr-2  ms-graph-metrics"> <a href="newVet.php">Vider </a> </button>
                                    <button class="btn btn-primary " name="submit" type="submit" id="submit">Ajouter</button>
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