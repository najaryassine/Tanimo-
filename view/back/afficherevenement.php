<?php
include "../../controller/eventC.php";
$eventC=new eventC();
$listeevent=$eventC->afficherEvents();



require 'header.php';
?>




   <!--            xttttttt          -->



   




    <div class="ms-content-wrapper"  >
      <div class="row">

            <div class="col-md-12" >
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb pl-0">
                  <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                  <li class="breadcrumb-item"><a href="#">boutique</a></li>
                  <li class="breadcrumb-item active" aria-current="page">affichage des evenements</li>
                </ol>
              </nav>
            </div>





        <div class="col-xl-6 col-md-12"  >
          <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
            <div class="ms-panel-body"  >
              
                <div class="form-row">
                  <div class="col-xl-12 col-md-12 ">
                          <h5> afficher evenement </h5>
                          <table>
                            <thead>

  <tr>
<td>Id/ </td>
<td>Titre/ </td>
<td>Description/ </td>
<td>DateD/ </td>
<td>DateF/ </td>
<td>Image/ </td>
<td>supprimer/ </td>
<td>modifier</td>
</tr>

               


                          
<?PHP
foreach($listeevent as $row){
  ?>
  <tr>
  <td><?PHP echo $row['Id']; ?></td>
  <td><?PHP echo $row['Titre']; ?></td>
  <td><?PHP echo $row['Description']; ?></td>
  <td><?PHP echo $row['DateD']; ?></td>
  <td><?PHP echo $row['DateF']; ?></td>
  <td><img class= "" src="../assets/img/<?PHP echo $row['Image']; ?>"></td>
  <td><form method="POST" action="supprimerevenemt.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['Id']; ?>" name="Id">
   </form>
  </td>
  <td><a href="modifierevenement.php?Id=<?PHP echo $row['Id']; ?>">
  <input type="submit" name="modifier" value="modifier"></a></td>
  </tr>
  <?PHP
}
?>

</tbody>
</table>

                
              
            
             </div>
         
                  </div>
                </div>
              
            </div>
          </div>
        </div>
      </div>
    </div> 





 <!--            xttttttt          -->



<?php require 'footer.php'; ?>