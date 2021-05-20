<?PHP
include "../../controller/eventC.php";
$eventC=new eventC();
if (isset($_POST["Id"])){
    $eventC->supprimerEvent($_POST["Id"]);
    header('Location: afficherevenement.php');
}

?>