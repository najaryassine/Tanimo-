
<?php
include_once '../../../controller/ArticleC.php';
include_once '../../../controller/PanierC.php';

$panierC=new PanierC();
$articleC = new ArticleC();

session_start();
$erreur = false;

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

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Home</title>
    <meta charset="utf-8">
    <link rel="icon" href="../images/favicon.ico">
    <link rel="shortcut icon" href="../images/favicon.ico" />
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/slider.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha3000000000000000000000000000000084-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <script src="../js/jquery.js"></script>
    <script src="../js/jquery-migrate-1.1.1.js"></script>
    <script src="../js/superfish.js"></script>
    <script src="../js/jquery.carouFredSel-6.1.0-packed.js"></script>

    <script src="../js/jquery.equalheights.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/tms-0.4.1.js"></script>
    <script src="../js/jquery.ui.totop.js"></script>

    <script>
        $(window).load(function(){
            $('.slider')._TMS({
                show:0,
                pauseOnHover:false,
                prevBu:'.prev',
                nextBu:'.next',
                playBu:false,
                duration:800,
                preset:'fade',
                pagination:true,//'.pagination',true,'<ul></ul>'
                pagNums:false,
                slideshow:8000,
                numStatus:false,
                banners:true,
                waitBannerAnimation:false,
                progressBar:false
            })
        });




        $(window).load (
            function(){$('.carousel1').carouFredSel({auto: false,prev: '.prev',next: '.next', width: 960, items: {
                    visible : {min: 3,
                        max: 3},
                    height: 'auto',
                    width: 300,

                }, responsive: true,

                scroll: 1,

                mousewheel: false,

                swipe: {onMouse: true, onTouch: true}});


            } );

        jQuery(document).ready(function() {
            $().UItoTop({ easingType: 'easeOutQuart' });
        });

    </script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="../css/ie.css">

    <![endif]-->
</head>
<body  class="page1">
<!--==============================header=================================-->
<header>
    <div class="container_12">
        <div class="grid_12">
            <h1><a href="index.html"><img src="../images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
            <div class="menu_block">
                <nav  class="" >
                    <ul class="sf-menu">
                        <li class="current"><a href="index.html">Home</a></li>
                        <li class="with_ul"><a href="../index-1.html">About Us </a>
                            <ul>
                                <li><a href="#"> Testimonials</a></li>
                                <li><a href="#">Archive</a></li>
                            </ul>
                        </li>
                        <li><a href="../index-2.html">Services</a></li>
                        <li><a href="../index-3.html">Blog</a></li>
                        <li><a href="../index-4.html">Contacts </a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</header>
<div class="top_block">
    <div class="slider-relative">
        <div class="slider-block">
            <div class="slider">
                <ul class="items">
                    <li><img src="../images/slide.jpg" alt="">
                        <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
                    </li>
                    <li><img src="../images/slide1.jpg" alt="">
                        <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
                    </li>
                    <li><img src="../images/slide2.jpg" alt="">
                        <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
                    </li>
                    <li><img src="../images/slide3.jpg" alt="">
                        <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<div class="page1_block">
    <div class="container_12">

    </div>
</div>
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
                                        echo "<td><input type=\"text\" size=\"4\" name=\"q[]\" value=\"".htmlspecialchars($_SESSION['panier']['qteProduit'][$i])."\"/></td>";
                                        echo "<td>".htmlspecialchars($_SESSION['panier']['prixProduit'][$i])."</td>";
                                        echo "<td><a href=\"".htmlspecialchars("panier.php?action=suppression&l=".rawurlencode($_SESSION['panier']['libelleProduit'][$i]))."\">XX</a></td>";
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
                        <a href="../articles/AfficherArticles.php"><input type="submit" class="gray_btn" value="Continuez vos achats" /></a>
                        <form action="paiment.php" method="post">
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


<!--==============================footer=================================-->

<footer>
    <div class="container_12">
        <div class="grid_12">
            <div class="socials">
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
                <a href="#"></a>
            </div>
            <p>Pet Club  &copy; 2013 | <a href="#">Privacy Policy</a> | Website  designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a></p><p>Professional free website templates <a href="http://www.websitetemplatesonline.com" target="_blank">at www.websitetemplatesonline.com</a>. <a href="http://www.getjoomlatemplatesfree.com/" title="Best Joomla templates">www.getjoomlatemplatesfree.com</a> - free Joomla templates for websites. </p>

        </div>
        <div class="clear"></div>
    </div>
</footer>
</body>
</html>
