<?php
include_once "../../controller/boutiqueC.php";
include_once "../../model/boutique.php";

if (isset($_GET['Id'])){
    $boutiqueC=new BoutiqueC();
      $result=$boutiqueC->recupererBoutique($_GET['Id']);
    foreach($result as $row){
      $Id=$row['Id'];
      $Nom=$row['Nom'];
      $Email=$row['Email'];
      $Gearnt=$row['Gearnt'];
      $Description=$row['Description'];
      $Adresse=$row['Adresse'];
      $Image=$row['Image'];

   require 'header.php';
?>


   <div class="ms-content-wrapper"  >
      <div class="row">

            <div class="col-md-12" >
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                  <li class="breadcrumb-item"><a href="#">boutiques</a></li>
                  <li class="breadcrumb-item active" aria-current="page">modifier un boutique</li>
                </ol>
              </nav>
            </div>





        <div class="col-xl-6 col-md-12"  >
          <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
            <div class="ms-panel-body"  >
              <form method="POST"  class="needs-validation clearfix" novalidate="">
                <div class="form-row">
                  <div class="col-xl-12 col-md-12 ">
                          <h5>modifier boutique</h5><br>

               <label>Id</label>
                  <div class="input-group">
                       <input type="number" name="Id" class="form-control" id="Id" placeholder="Entrer l'Id de boutique"  value="<?PHP echo $Id ?>">
                       <div class="invalid-feedback">
                       </div>
                     </div>
         

              <label>Nom</label>
                <div class="input-group">
                  <input type="text" name="Nom" class="form-control" id="Nom" placeholder="Entrer le Nom de boutique" value="<?PHP echo $Nom ?>">
                  <div class="invalid-feedback">
                  </div>
                </div>


                <label>Email</label>
                  <div class="input-group">
                    <input type="email" name="Email" class="form-control" id="Email" placeholder="Entrer l'Email "value="<?PHP echo $Email ?>">
                      <div class="invalid-feedback">
                      </div>
                  </div>


                  <label>Gearnt</label>
                  <div class="input-group">
                    <input type="text" name="Gearnt" class="form-control" id="Gearnt" placeholder="Entrer la Gearnt "value="<?PHP echo $Gearnt ?>">
                      <div class="invalid-feedback">
                      </div>
                  </div>

               
                  <label>Description</label>
                  <div class="input-group">
                    <input type="text" name="Description" class="form-control" id="Description" placeholder="Entrer la description "value="<?PHP echo $Description ?>" >
                      <div class="invalid-feedback">
                      </div>
                  </div>


                  <label>Adresse</label>
                  <div class="input-group">
                    <input type="text" name="Adresse" class="form-control" id="Adresse" placeholder="Entrer L'adresse "value="<?PHP echo $Adresse ?>" >
                      <div class="invalid-feedback">
                      </div>
                  </div>
                
                  <label for="validationCustom10">Image</label>
             <div class="input-group">
              <input type="file" name="Image" class="form-control" value="<?PHP echo $Image ?>">
            </div>
            
             </div>

              <div class="col-md-12">
              <input type="submit" name="modifier" value="Modifier boutique!">
              </div>
         
                  </div>
                </div>
              </form>
              <?PHP
  }

if (isset($_POST['modifier'])){
  $Boutique = new Boutique($_POST['Id'],$_POST['Nom'],$_POST['Email'],$_POST['Gearnt'],$_POST['Description'],$_POST['Adresse'],$_POST['Image']);
  $boutiqueC->modifierBoutique($Boutique,$_POST['Id']);
echo'<script>location.replace("afficherBoutique.php")</script>';  
}
}?>

            </div>
          </div>
        </div>
      </div>
    </div> 



 <!--            xttttttt          -->



<?php require 'footer.php'; ?>