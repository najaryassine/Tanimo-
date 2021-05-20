<?php 

include "../../controller/donC.php";
 
$donc = new donc();


if(isset($_POST["id"]))
{

$donc->supprimerDon($_POST["id"]);
header('Location:ProfilUser.php');


}




?>