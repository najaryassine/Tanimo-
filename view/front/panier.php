
<?php
include_once '../../controller/ArticleC.php';
include_once '../../controller/PanierC.php';
include_once '../../controller/boutiqueC.php';


$panierC=new PanierC();
$articleC = new ArticleC();
$boutiqueC = new BoutiqueC();

include "header.php";
if(!isset($_SESSION["id"]) || empty($_SESSION["id"])){
    header('Location:index.php');
}

$_SESSION["id_user"]=$_SESSION["id"];
$magasins = $boutiqueC->afficherBoutiques();

$erreur = false;
$magasin =
$action = (isset($_POST['action'])? $_POST['action']:  (isset($_GET['action'])? $_GET['action']:null )) ;
if($action !== null)
{
    if(!in_array($action,array('ajout', 'suppression', 'refresh')))
        $erreur=true;

    //récupération des variables en POST ou GET
    $l = (isset($_POST['l'])? $_POST['l']:  (isset($_GET['l'])? $_GET['l']:null )) ;
    $p = (isset($_POST['p'])? $_POST['p']:  (isset($_GET['p'])? $_GET['p']:null )) ;
    $q = (isset($_POST['q'])? $_POST['q']:  (isset($_GET['q'])? $_GET['q']:null )) ;

    //Suppression des espaces verticaux
    $l = preg_replace('#\v#', '',$l);
    //On vérifie que $p est un float
    $p = floatval($p);

    //On traite $q qui peut être un entier simple ou un tableau d'entiers

    if (is_array($q)){
        $QteArticle = array();
        $i=0;
        foreach ($q as $contenu){
            $QteArticle[$i++] = intval($contenu);
        }
    }
    else
        $q = intval($q);

}

if (!$erreur){
    switch($action){
        Case "ajout":
            $panierC->ajouterArticle($l,$q,$p);
            //header('Location:panier.php');;
            break;

        Case "suppression":
            $panierC->supprimerArticle($l);
            break;

        Case "refresh" :
            for ($i = 0 ; $i < count($QteArticle) ; $i++)
            {
                $panierC->modifierQTeArticle($_SESSION['panier']['libelleProduit'][$i],round($QteArticle[$i]));
            }
            break;

        Default:
            break;
    }
}

?>
<!--=======content================================-->

<div class="content page1">

    <div class="container_12">

        <div class="container">
            <div class="cart_inner">
                <div class="table-responsive">
                    <form method="post" action="panier.php">
                        <table style="width: 400px">
                            <tr>
                                <td colspan="4">Votre panier</td>
                            </tr>
                            <tr>
                                <td>Libellé</td>
                                <td>Quantité</td>
                                <td>Prix Unitaire</td>
                                <td>Action</td>
                            </tr>


                            <?php
                            if ($panierC->creationPanier())
                            {
                                $nbArticles=count($_SESSION['panier']['libelleProduit']);
                                if ($nbArticles <= 0)
                                    echo "<tr><td>Votre panier est vide </ td></tr>";
                                else
                                {
                                    for ($i=0 ;$i < $nbArticles ; $i++)
                                    {
                                        echo "<tr>";
                                        echo "<td>".htmlspecialchars($_SESSION['panier']['libelleProduit'][$i])."</ td>";
                                        echo "<td><input type=\"number\" size=\"4\" min =\"0\" max =\"10\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
                                        echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
                                        echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">Supprimer</a></td>";
                                        echo "</tr>";
                                    }

                                    echo "<tr><td colspan=\"2\"> </td>";
                                    echo "<td colspan=\"2\">";

                                    $total = $panierC->MontantGlobal();
                                    echo "Total : ".$total;
                                    echo "</td></tr>";

                                    echo "<tr><td colspan=\"4\">";
                                    echo "<input type=\"submit\" value=\"Rafraichir\"/>";
                                    echo "<input type=\"hidden\" name=\"action\" value=\"refresh\"/>";

                                    echo "</td></tr>";
                                }
                            }
                            ?>
                        </table>
                    </form>
                    <div class="checkout_btn_inner d-flex align-items-center">
                        <a href="AfficherArticles.php"><input type="submit" class="gray_btn" value="Continuez vos achats" /></a>
                        <form action="paiment.php" method="post">
                            <label for="btq">Boutique</label>
                            <select name="btq" id="btq" required="required">
                                <?php
                                foreach ($magasins as $magasin) {
                                    echo '<option  value="'.$magasin["Id"].'">'.$magasin["Nom"].'</option>';
                                }
                                ?>
                            </select>
                            <input type="submit" name="button" class="primary-btn ml-2" value="Commandez"/>
                            <input type="hidden" name="user_id" value="<?php echo $_SESSION['user_id']; ?>">
                            <input type="hidden" name="total" value="<?php echo $total; ?>">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
<?php include "footer.php" ?>
