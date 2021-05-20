<?php

include "../../controller/boutiqueC.php";


$boutiqueC=new BoutiqueC();
$listeboutique=$boutiqueC->afficherBoutiques();



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
                  <li class="breadcrumb-item active" aria-current="page">affiche d'un boutique</li>
                </ol>
              </nav>
            </div>





        <div class="col-xl-6 col-md-10"  >
          <div class="ms-panel ms-panel-fh" style="width:900px ; margin-left: 120px;"  >
            <div class="ms-panel-body"  >
              
                <div class="form-row">
                  <div class="col-xl-12 col-md-12 ">
                          <h5>afficher boutique</h5>
                          <div align="right"><input  type="text" id="myInput"class="col-x1" onkeyup="myFunction()" placeholder="Search">
                          </div>
                          <div class="table-responsive">
                          <table class="table "  id="dataTable"> 
                          </div>
                            <thead>

  
<th>Id/ </th>
<th>Nom/ </th>
<th>Email/ </th>
<th>Gearnt/ </th>
<th>Description/ </th>
<th>Adresse/ </th>
<th>Image/ </th>
</thead> 
<tbody>


   

               


                          
<?PHP
foreach($listeboutique as $row){
  ?>
  <tr>
  <td><?PHP echo $row['Id']; ?></td>
  <td><?PHP echo $row['Nom']; ?></td>
  <td><?PHP echo $row['Email']; ?></td>
  <td><?PHP echo $row['Gearnt']; ?></td>
  <td><?PHP echo $row['Description']; ?></td>
  <td><?PHP echo $row['Adresse']; ?></td>
  <td><img class= "" src="assets/img/<?PHP echo $row['Image']; ?>"></td>
  <td><form method="POST" action="supprimerboutique.php">
  <input type="submit" name="supprimer" value="supprimer">
  <input type="hidden" value="<?PHP echo $row['Id']; ?>" name="Id">
   </form>
  </td>
  <td><a href="modifierboutique.php?Id=<?PHP echo $row['Id']; ?>">
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




  <script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("dataTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[1];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
              }
        }
    }
</script>


<?php require 'footer.php'; ?>

