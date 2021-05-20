<?PHP
include "../../controller/boutiqueC.php";
$boutiqueC=new BoutiqueC();
if (isset($_POST["Id"])){
    $boutiqueC->supprimerBoutique($_POST["Id"]);
    header('Location: afficherBoutique.php');

    
}

?>