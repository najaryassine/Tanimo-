<?PHP
include_once '../../../controller/CommandeC.php';

$commandeC=new CommandeC();

if (isset($_GET['id'])){
    $commandeC->supprimerCommande($_GET['id']);
    header('Location:AfficherCommande.php');
}
