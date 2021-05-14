<?PHP
include "../../../controller/boutiqueC.php";
$boutiqueC=new BoutiqueC();
if (isset($_POST["id"])){
    $eventC->supprimerBoutique($_POST["id"]);
    header('Location: afficherBoutique.php');
}

?>