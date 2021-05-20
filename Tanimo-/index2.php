<<<<<<< HEAD

<?php


  include_once '../Model/adoption.php';
    include_once '../Controller/adoptionc.php';

    $adoption = null ; 
    $adoptionc = new adoptionc();
    if(   isset($GET["species"]) && 
        isset($_GET["sexe"]) &&
        isset($_GET["taille"]) && 
        isset($_GET["age"]) && 
        isset($_GET["region"]))
    {
     
if(!empty($_GET["species"]) && 
            !empty($_GET["sexe"]) && 
            !empty($_GET["taille"]) && 
            !empty($_GET["age"]) && 
            !empty($_GET["region"]))


{
$adoption = new adoption($_GET["species"] && $_GET["sexe"] && $_GET["taille"] &&  $_GET["age"] &&  $_GET["region"]); 
 
$adoptionc->ajouteradoption($adoption);
}}






    






?>








<!DOCTYPE html>
<html>
<head>
  <title> Adoption </title>
  <link rel='stylesheet'   href='view/front/style.css'/>

</head>
<body>

  <form method="GET" action="">

    <h3> Trouver l'animal qui  <span class="font-style-2">vous</span> attend</h3>
    <div> 
<select id="species" name="species" class="select">
  <option value>Espéce </option>
    <option value="chien">chien </option>
    <option value="chat"> chat</option>
    <option value="cheval"> cheval</option>
    <option value="lapin"> lapin</option>
    <option value="furet"> furet</option>
    <option value="oiseau"> oiseau</option>
    <option value="reptile"> reptile</option>
    <option value="animal de ferme"> animal de ferme</option>
    <option value="autre"> autre</option>

</select>


    </div>
    <br>
    <div class="checkbox"> 
     <div id="sexes">
       <label class="checkbox-inline">
         <input type="checkbox"   name="sexes[] " value="male"> male

       </label>
       <label class="checkbox-inline">
         <input type="checkbox" name="sexes[]"   value="femelle"> Femlle


       </label>
     </div>


    </div>
    <br>
    <div class="checkbox">
      <div id="taille">
          <label>
         <input type="checkbox" name="taille[]"   value="moyen">
            moyen
          </label>
          <label >
         <input type="checkbox"  name="taille[]"  value="grand"> grand


       </label>
       </div>
    </div>

    <br>






    </div>
     <div id="checkbox">
      <div id="ageranges">
        <label class="checkbox-inline required">
          
            <input type="checkbox" name=" age[]" value="bebe"> BéBé

        </label>
        <label class="checkbox-inline required">
          
            <input type="checkbox" name=" age[]" value="junior"> junior

        </label>
        <label class="checkbox-inline required">
          
            <input type="checkbox" name=" age[]" value="adulte"> Adulte

        </label>
        <label class="checkbox-inline required">
          
            <input type="checkbox" name=" age[]" value="senior"> Senior

        </label>

        


      </div>
       


     </div>
     <br>
     <div class="for-group">
      <select   name="region" >
        <option value> Région</option>
         <option value="1"> Tunis</option>
          <option value="2"> Ariana</option>
          <option value="3"> Manouba</option>
          <option value="4"> Ben Arous</option>
         <option value="5"> Zaghouan</option>
         <option value="6"> nabeul</option>
          <option value="7"> Jendouba</option>
           <option value="8"> Béja</option>
                  <option value="9"> Le Kef </option>
                  <option value="10"> Siliana </option>
                  <option value="11"> Sousse </option>
                  <option value="12"> Monastir</option>
                  <option value="13"> Mahdia </option>
                  <option value="14"> kairouan </option>
                  <option value="15"> Kasserine </option>
                <option value="16"> Sidi Bouzid</option>
<option value="17"> Sfax </option>
<option value="18"> Gabes</option>
<option value="19"> Médnine </option>
<option value="20"> Tataouin</option>
<option value="21"> Gafsa </option>
<option value="22"> Tozeur</option>
<option value="23"> Kébili </option>





      </select>
       

     </div>
   <div>
     <input type="submit" value="Recheche"> 


   </div>
   <br>
  </form>

</body>
</html>
=======

<?php


  include_once '../Model/adoption.php';
    include_once '../Controller/adoptionc.php';

    $adoption = null ; 
    $adoptionc = new adoptionc();
    if(   isset($GET["species"]) && 
        isset($_GET["sexe"]) &&
        isset($_GET["taille"]) && 
        isset($_GET["age"]) && 
        isset($_GET["region"]))
    {
     
if(!empty($_GET["species"]) && 
            !empty($_GET["sexe"]) && 
            !empty($_GET["taille"]) && 
            !empty($_GET["age"]) && 
            !empty($_GET["region"]))


{
$adoption = new adoption($_GET["species"] && $_GET["sexe"] && $_GET["taille"] &&  $_GET["age"] &&  $_GET["region"]); 
 
$adoptionc->ajouteradoption($adoption);
}}






    






?>








<!DOCTYPE html>
<html>
<head>
  <title> Adoption </title>
  <link rel='stylesheet'   href='view/front/style.css'/>

</head>
<body>

  <form method="GET" action="">

    <h3> Trouver l'animal qui  <span class="font-style-2">vous</span> attend</h3>
    <div> 
<select id="species" name="species" class="select">
  <option value>Espéce </option>
    <option value="chien">chien </option>
    <option value="chat"> chat</option>
    <option value="cheval"> cheval</option>
    <option value="lapin"> lapin</option>
    <option value="furet"> furet</option>
    <option value="oiseau"> oiseau</option>
    <option value="reptile"> reptile</option>
    <option value="animal de ferme"> animal de ferme</option>
    <option value="autre"> autre</option>

</select>


    </div>
    <br>
    <div class="checkbox"> 
     <div id="sexes">
       <label class="checkbox-inline">
         <input type="checkbox"   name="sexes[] " value="male"> male

       </label>
       <label class="checkbox-inline">
         <input type="checkbox" name="sexes[]"   value="femelle"> Femlle


       </label>
     </div>


    </div>
    <br>
    <div class="checkbox">
      <div id="taille">
          <label>
         <input type="checkbox" name="taille[]"   value="moyen">
            moyen
          </label>
          <label >
         <input type="checkbox"  name="taille[]"  value="grand"> grand


       </label>
       </div>
    </div>

    <br>






    </div>
     <div id="checkbox">
      <div id="ageranges">
        <label class="checkbox-inline required">
          
            <input type="checkbox" name=" age[]" value="bebe"> BéBé

        </label>
        <label class="checkbox-inline required">
          
            <input type="checkbox" name=" age[]" value="junior"> junior

        </label>
        <label class="checkbox-inline required">
          
            <input type="checkbox" name=" age[]" value="adulte"> Adulte

        </label>
        <label class="checkbox-inline required">
          
            <input type="checkbox" name=" age[]" value="senior"> Senior

        </label>

        


      </div>
       


     </div>
     <br>
     <div class="for-group">
      <select   name="region" >
        <option value> Région</option>
         <option value="1"> Tunis</option>
          <option value="2"> Ariana</option>
          <option value="3"> Manouba</option>
          <option value="4"> Ben Arous</option>
         <option value="5"> Zaghouan</option>
         <option value="6"> nabeul</option>
          <option value="7"> Jendouba</option>
           <option value="8"> Béja</option>
                  <option value="9"> Le Kef </option>
                  <option value="10"> Siliana </option>
                  <option value="11"> Sousse </option>
                  <option value="12"> Monastir</option>
                  <option value="13"> Mahdia </option>
                  <option value="14"> kairouan </option>
                  <option value="15"> Kasserine </option>
                <option value="16"> Sidi Bouzid</option>
<option value="17"> Sfax </option>
<option value="18"> Gabes</option>
<option value="19"> Médnine </option>
<option value="20"> Tataouin</option>
<option value="21"> Gafsa </option>
<option value="22"> Tozeur</option>
<option value="23"> Kébili </option>





      </select>
       

     </div>
   <div>
     <input type="submit" value="Recheche"> 


   </div>
   <br>
  </form>

</body>
</html>
>>>>>>> 65e142153bebd23674b25694b5f7781e63add880
