<?php
require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';
include_once '../../controller/adoptionc.php';
include_once '../../model/adoption.php';
 
  $error="";
$adoptionc = new adoptionc();
 if(isset($_GET['id'])) {
$oldadoption = $adoptionc->recupererAdoption($_GET['id']);}


if(isset($_POST['modifier']))
{  
 
 $check=$_FILES["img1"]["tmp_name"];
 if($_FILES['img1']['size'] !==0)
 {
 $uploaddir = "assets/img/";
 $uploadfile = $uploaddir . basename($_FILES['img1']['name']);
  move_uploaded_file($_FILES['img1']['tmp_name'], $uploadfile);
    $image = $_FILES['img1']['name'];

}else {$image = $oldadoption["image"];}
    $adoption = new adoption($_POST['espece'],$_POST['race'],$_POST['age'],$_POST['sexe'],$_POST['region'],$image);
    $id= $oldadoption['id'];
    $adoptionc->modifierAdoption($adoption, $id);
   

  
}




require 'header.php';
?>




   <!-- modifier adop -->


   <button><a href="afficheradoption.php">Retour à la liste</a></button>
   <div> <?php echo $error; ?> </div>
   

    <form  action="" method="POST" enctype="multipart/form-data">
      <table align="center">
        <tr>
          
<td >
<label for="id"> Id :</label>
</td>

  <td>
  <input type="text" name="id"  id="id" value="<?php echo $oldadoption['id'];?>" disabled> 
<?php echo $oldadoption['id'];   ?>
</td>

 </tr>




 <tr>  <td><label for="validationCustom10">Espece</label> </td>
  <td> <select   class="select"   id="espece" name="espece"    onchange="myFunction(this.id,'race')">
    <option  value="<?php echo $oldadoption['espece'];?> "><?php echo $oldadoption['espece'];?></option>
  <option  value="chien">chien</option>
  <option    value="chat">chat</option>
  <option  value="oiseau">oiseau</option> 
 
</select>

</td>
 </tr>
  
 <tr>
     <td> <label for="validationCustom10">Race</label>  </td>
   <td> <select   id="race"  name="race"  >
        <option  value=" <?php echo $oldadoption['race'];?>"><?php echo $oldadoption['race'];?></option> 
<option>
  

</option>

 
</select>

</td>

 </tr>
        
<tr>
<td> <label >sexe</label>    </td>
 <td> <input type="radio" name="sexe"  value="mascul"
 <?php
if($oldadoption['sexe']=='mascul')
{
echo"checked";

}
?> >  mascul
 </td>
<td><input type="radio" name="sexe" id="sexe"   value="feminin"
 <?php
if($oldadoption['sexe']=='feminin')
{
echo"checked";

} 
?> >feminin  </td>
</tr>

       

<tr>
  
<td> <label for="age"> age</label></td>
<td><input type="radio" name="age"    value="BéBé"
 <?php
if($oldadoption['age']=='BéBé')
{
echo"checked";

} 
?> >bebe  </td>
<td><input type="radio" name="age"    value="junior"
 <?php
if($oldadoption['age']=='junior')
{
echo"checked";

} 
?> >junior </td>


 
  
 
<td><input type="radio" name="age"   value="Adulte"
 <?php
if($oldadoption['age']=='Adulte')
{
echo"checked";

} 
?> >adulte  </td>

<td><input type="radio" name="age"    value="senior"
 <?php
if($oldadoption['age']=='senior')
{
echo"checked";

} 
?> >senior </td>

</tr>


<tr>
  <td>
    


  <label> region</label>
  </td>
  <td>
    
<select class="select"  name="region"   >
        <option  value="<?php echo $oldadoption['region'];?> "><?php echo $oldadoption['region'];?></option>
        <option  value=" tunis"> Tunis </option> 
          <option  value=" sfax"> sfax </option> 
<option>
  

  </td>



</tr>
 </table>
 <br>
 <table  align="center">
  <td>
    
  <label for="img">Image pour l'article</label> </td>
  <td>
  <input type="file" name="img1" id="img1" class="form-control"  required="required"  accept="image/png, image/jpeg"  >   

  </td>


</tr>
  
 <tr> 
  <td><input type="submit" value="modifier" name="modifier">   </td>

<td>
  <input type="reset" value="Annuler">   
 </td>

 </tr>
 </table>


    </form>

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



   <!--            xttttttt          -->

<?php require 'footer.php'; ?>

 


