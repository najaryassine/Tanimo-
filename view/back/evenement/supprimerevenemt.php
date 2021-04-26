<?PHP
include "../../../controller/eventC.php";
$eventC=new eventC();
if (isset($_POST["id"])){
    $eventC->supprimerEvent($_POST["id"]);
    header('Location: afficherevenement.php');
}

?>