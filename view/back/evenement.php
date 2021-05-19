<?php
require 'header.php';
?>


   <!--            xttttttt          -->





   <form action="ajouterevent.php" method="post">


        <div class="ms-content-wrapper"  >
          <div class="row">

                <div class="col-md-12" >
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                      <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                      <li class="breadcrumb-item"><a href="#">Evenements</a></li>
                      <li class="breadcrumb-item active" aria-current="page">Ajout d'un Evenement</li>
                    </ol>
                  </nav>
                </div>     

            <div class="col-xl-6 col-md-12"  >
              <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                <div class="ms-panel-body"  >
                  <form class="needs-validation clearfix" novalidate="">
                    <div class="form-row">
                      <div class="col-xl-12 col-md-12 ">
                              <h5>Ajout Evenement</h5><br>
             

                  <label for="validationCustom10">Id</label>
                    <div class="input-group">
                      <input type="number" name="Id" class="form-control"  placeholder="Entrer l'ID de l'Evenement " required>
                    </div>


                    <label for="validationCustom10">Titre</label>
                      <div class="input-group">
                        <input type="text" name="Titre" class="form-control" placeholder="Entrer le Titre " required>  
                      </div>

                   

                    <label for="validationCustom10">Description</label>
                     <div class="input-group">
                      <input type="text" name="Description" class="form-control" placeholder="Entrer la Description " required>
                    </div>
                    
                   

                    <label for="validationCustom10">Date Debut</label>
                     <div class="input-group">
                      <input type="date" name="DateD" class="form-control"  required>
                    </div>
                    
                   

                    <label for="validationCustom10">Date Fin</label>
                     <div class="input-group">
                      <input type="date" name="DateF" class="form-control"  required>
                    </div>
                    
                   

                    <label for="validationCustom10">Image</label>
                     <div class="input-group">
                      <input type="file" name="Image" class="form-control">
                    </div>
                  
                
                 </div>

                  <div class="col-md-12">
                    <button class="btn btn-dark mr-2  ms-graph-metrics"><a href="evenement.php">Vider </a></button>
                    <input class="btn btn-primary " name="submit" type="submit" value="Ajouter">
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



<?php require 'footer.php'; ?>