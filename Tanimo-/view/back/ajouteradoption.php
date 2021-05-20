
<?php 


include_once '../../model/adoption.php';
include_once '../../controller/adoptionc.php';

$error = "";
$adoption = null ; 
$adoptionc = new adoptionc(); 


if( isset($_POST["espece"]) && isset($_POST["race"]) && isset($_POST["age"]) && isset($_POST["sexe"]) && isset($_POST["region"]) )
{
 if (! empty($_POST["espece"]) && ! empty($_POST["race"]) && ! empty($_POST["age"]) && ! empty($_POST["sexe"]) && ! empty($_POST["region"] ) )
 { if (isset($_FILES['img'])) {
  $photos = $_FILES['img']['name'];
            $upload = "up/" . $photos;
           move_uploaded_file($_FILES['img']['tmp_name'], $upload);

            


  $adoption = new adoption ($_POST["espece"] , $_POST["race"], $_POST["age"] , $_POST["sexe"], $_POST["region"],$photos);
   $adoptionc->ajouterAdoption($adoption) ;
   header('Location:afficheradoption.php');

 }
  else
    $error = "missing ";
 }
}

require 'header.php';
?>






   <!--            xttttttt          -->



<form action="ajouteradoption.php" method="POST" enctype="multipart/form-data" >
                <div class="col-md-12" >
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                      <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    </ol>
                  </nav>
                </div>


            <div class="col-xl-6 col-md-12"  >
              <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                
              </div>
            </div>

            <div class="col-xl-6 col-md-12"  >
              <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                <div class="ms-panel-body"  >
                  <form class="needs-validation clearfix" enctype="multipart/form-data">
                    <div class="form-row">
                      <div class="col-xl-12 col-md-12 ">
                              <h5>Ajout une adoption </h5>
                              <br>
   <pre>

 <label for="validationCustom10">Espece</label> 
   <select   class="select" id="mySelect1"   name="espece"    onchange="myFunction(this.id,'race')">
  <option  value="chien">chien</option>
  <option    value="chat">chat</option>
  <option  value="oiseau">oiseau</option>
 
</select>
</pre>
<br>
 <pre>
  <label for="validationCustom10">Race</label>  
    <select class="select"  name="race"  id="race">

 
</select>
</pre>
<br>



                   
                       
<pre>
<label for="validationCustom10">sexe</label>       <input type="radio" name="sexe"  value="feminin">feminin      <input type="radio" name="sexe"  value="mascul"> mascul  </div> </pre>



                 
                   <br>
                   <pre>
<label for="validationCustom10">age</label>       <input type="radio" name="age"  value="BéBé">BéBé      <input type="radio" name="age"  value="junior"> junior  <input type="radio" name="age"  value="Adulte"> Adulte  <input type="radio" name="age"  value="Senior"> Senior </div> </form>


 <br>
   <pre> <label for="validationCustom10">Region</label>   <select   class="select"     name="region"     ">
  <option  value="Tunis">tunis</option>
  <option    value="sfax">Sfax</option>
  <option  value="mednine">Mednine</option>
 
</select>
</pre>
                      

                    <br>
                       <div class="input-group">
                       <label for="img">Image pour l'article</label>
                     
                      <input type="file" name="img" class="form-control" id="img" required="required"  accept="image/png, image/jpeg">

                    </div>  
                      
                    
                    
                   
                  
                
                  
                  
                
                 
                    <button class="btn btn-dark mr-2  ms-graph-metrics">Vider</button>
                    <button class="btn btn-primary " name="upload" type="submit">Ajouter</button>
                  </div>
             
                      </div>
                    </div>
                  </form>
                </main>
              </div>
            </div>
</form>




 <!--            xttttttt          -->




<?php require 'footer.php'; ?>


<style >
    .select {
        padding: 8px 12px ;
        color: #333333;
        background-color: #eeeeee;
        border: 1px solid #dddddd;
        cursor: pointer;
        border-radius:  5px ;
        background-size: 10px;
        padding-right: 90px;


    }




</style>


<script>
    function myFunction(s1,s2)
    {
        var s1= document.getElementById(s1);
        var s2= document.getElementById(s2);
        s2.innerHTML= "";
        if(s1.value == "chien" )
        {
            var optionArray = ['berge|Berge','doberman|Doberman', 'caniche|Caniche' , 'rottweiller|Rottweiler'];

        }
        if(s1.value == "chat" )
        {
            var optionArray = ['british|British','persan|Persan' , 'ragdoll|Ragdoll'];

        }

        for( var option in optionArray)
        {var pair =optionArray[option].split("|");

            var newoption = document.createElement("option");
            newoption.value = pair[0];
            newoption.innerHTML=pair[1];
            s2.options.add(newoption);

        }

    }
</script>
