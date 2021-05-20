<?php
require 'header.php';
?>
   <!--            xttttttt          -->






    <div id="erreur" > </div>
    <hr>

   <form method="post" action="ajoutboutique.php" nom="form">




    <div class="ms-content-wrapper"  >
      <div class="row">

            <div class="col-md-12" >
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                  <li class="breadcrumb-item"><a href="#">boutique</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Ajout d'un boutique</li>
                </ol>
              </nav>
            </div>





        <div class="col-xl-6 col-md-12"  >
          <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
            <div class="ms-panel-body"  >
              <form class="needs-validation clearfix" novalidate="">
                <div class="form-row">
                  <div class="col-xl-12 col-md-12 ">
                          <h5>Ajout boutique</h5><br>
         

              <label for="validationCustom10">id</label>
                <div class="input-group">
                  <input type="text" name="Id" class="form-control" id="validationCustom10" placeholder="Entrer le titre de l'article ">
                 
                </div>


                <label for="validationCustom10">Nom</label>
                  <div class="input-group">
                    <input type="text" name="Nom" class="form-control" id="Nom" placeholder="Entrer le nom ">
                     
                  </div>

               

                <label for="validationCustom10">Email</label>
                 <div class="input-group">
                  <input type="Email" name="Email" class="form-control" id="Email">
                  
                </div>

                <label for="validationCustom10">Gearnt</label>
                 <div class="input-group">
                  <input type="text" name="Gearnt" class="form-control" id="Image">
                 
                </div>

                <label for="validationCustom10">Description</label>
                 <div class="input-group">
                  <input type="text" name="Description" class="form-control" id="Image">
                  
                </div>

                <label for="validationCustom10">Adresse</label>
                 <div class="input-group">
                  <input type="text" name="Adresse" class="form-control" id="Image">
                  
                </div>
              
                <label for="validationCustom10">Image</label>
                     <div class="input-group">
                      <input type="file" name="Image" class="form-control">
                    </div>
            
             </div>

              <div class="col-md-12">
                <button class="btn btn-dark mr-2  ms-graph-metrics">Vider</button>
                <button class="btn btn-primary " onclick="verif();"name="submit" type="submit">Ajouter </button>
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
    <button class="button share_twitter" style="background-color:#55ACEE ;" data-url="http://....">
      Partager sur twitter
  </button>
  <button class="button share_facebook" style="background-color: #4C67A1;" data-url="http://....">
      Partager sur facebook
  </button>
  <button class="button share_gplus" style="background-color: #D23F31;" data-url="http://....">
      Partager sur google+
  </button>
  <button class="button share_linkedin"  style ="background-color: #0177B5;" data-url="http://....">
      Partager sur linkedin
  </button>
<script src="assets/js/social.js"></script>




 <!--            xttttttt          -->

    <?php require 'footer.php'; ?>