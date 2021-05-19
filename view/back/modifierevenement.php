
   <?php
include_once "../../controller/eventC.php";
include_once "../../model/event.php";

if (isset($_GET['Id'])){
    $EventC=new EventC();
      $result=$EventC->recupererEvent($_GET['Id']);
    foreach($result as $row){
      $Id=$row['Id'];
      $Titre=$row['Titre'];
      $Description=$row['Description'];
      $DateD=$row['DateD'];
      $DateF=$row['DateF'];
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
                  <li class="breadcrumb-item active" aria-current="page">modifier un evenement</li>
                </ol>
              </nav>
            </div>





        <div class="col-xl-6 col-md-12"  >
          <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
            <div class="ms-panel-body"  >
              <form method="POST"  class="needs-validation clearfix" novalidate="">
                <div class="form-row">
                  <div class="col-xl-12 col-md-12 ">
                          <h5>modifier evenement</h5><br>

               <label>Id</label>
                  <div class="input-group">
                       <input type="number" name="Id" class="form-control" id="Id" placeholder="Entrer l'Id de evenement"  value="<?PHP echo $Id ?>">
                       <div class="invalid-feedback">
                       </div>
                     </div>
         

              <label>Titre</label>
                <div class="input-group">
                  <input type="text" name="Titre" class="form-control" id="Nom" placeholder="Entrer le Titre " value="<?PHP echo $Titre ?>">
                  <div class="invalid-feedback">
                  </div>
                </div>


                <label>Description</label>
                  <div class="input-group">
                    <input type="text" name="Description" class="form-control" id="Description" placeholder="Entrer la Description "value="<?PHP echo $Description ?>">
                      <div class="invalid-feedback">
                      </div>
                  </div>


                  <label>DateD</label>
                  <div class="input-group">
                    <input type="date" name="DateD" class="form-control" id="Gearnt" placeholder="Entrer la DateD "value="<?PHP echo $DateD ?>">
                      <div class="invalid-feedback">
                      </div>
                  </div>

               
                  <label>DateF</label>
                  <div class="input-group">
                    <input type="date" name="DateF" class="form-control" id="Description" placeholder="Entrer la DateF "value="<?PHP echo $DateF ?>" >
                      <div class="invalid-feedback">
                      </div>
                  </div>


                  
                
                  <label for="validationCustom10">Image</label>
             <div class="input-group">
              <input type="file" name="Image" class="form-control" value="<?PHP echo $Image ?>">
            </div>
            
             </div>

              <div class="col-md-12">
              <input type="submit" name="modifier" value="Modifier evenement!">
              </div>
         
                  </div>
                </div>
              </form>
              <?PHP
  }

if (isset($_POST['modifier'])){
  $event = new Event($_POST['Id'],$_POST['Titre'],$_POST['Description'],$_POST['DateD'],$_POST['DateF'],$_POST['Image']);
  $EventC->modifierEvent($event,$_POST['Id']);
echo'<script>location.replace("afficherevenement.php")</script>';  
}
}?>

            </div>
          </div>
        </div>
      </div>
    </div> 



 <!--            xttttttt          -->


   <?php require 'footer.php'; ?>
