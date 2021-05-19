<?php 

include "../../../controller/adoptionc.php";
 
$adoptionc = new adoptionc();


if(isset($_POST["id"]))
{

$adoptionc->supprimerAdoption($_POST["id"]);
header('Location:afficheradoption.php');


}




?>