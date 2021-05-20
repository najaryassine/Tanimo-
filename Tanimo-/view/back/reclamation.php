<?php

require_once("../../controller/ReclamationC.php");



if(isset($_SESSION["sdate"]))
{
	$res =  afficherRecDate();
}
else if(isset($_SESSION["stype"]))
{
	$res =  afficherRecType();
}
else
{
	$res =  afficherRec();
}


require 'header.php';

?>




   <!--            xttttttt          -->








        <div class="ms-content-wrapper"  >
          <div class="row">

                <div class="col-md-12" >
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                      <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    </ol>
                  </nav>
                </div>





            <div class="col-xl-6 col-md-12"  >
              <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                <div class="ms-panel-body"  >
				<p>
				<form action="../../controller/reclamationC.php" method="post">
				<input type="submit" value="par Date" name="sortDate"> &nbsp;<input type="submit" value="par type" name="sorttype">
				</form>
				</p>
                  <table class="table table-bordered">
    <thead>
      <tr>
		<th>type</th>
        <th>description</th>
        <th>date</th>
        <th>User</th>
		<th>Action</th>
      </tr>
    </thead>
	<?php
foreach($res as $row){
echo "<tr>";
echo "<td>$row[type]</td>";
echo "<td>$row[description]</td>";
echo "<td>$row[date]</td>";
echo "<td>$row[user_id]</td>";
echo "<td><a href='reclamationRep.php?id=$row[idreclamation]'><button>Répondre</button></a></td>";
echo "</tr>";
}
?>
  </table>
                </div>
              </div>
            </div>
          </div>
        </div> 
</form>




 <!--            xttttttt          -->



<?php require 'footer.php'; ?>
