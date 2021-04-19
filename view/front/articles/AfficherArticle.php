
<?php
include_once '../../../model/Article.php';
include_once '../../../controller/ArticleC.php';

include "../../../controller/CategorieC.php";
include "../../../controller/SousCategorieC.php";

$articleC=new ArticleC();
if (isset($_GET['id'])) {
    $article = $articleC->recupererArticleById($_GET['id']);
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

        <table align = 'center'>

            <tr>
                <td><img src="../../../uploads/<?PHP echo $article['image']; ?>" alt="aaaa"></td>
            </tr>

            <tr>
                <th>Nom : </th>
                <th><p>   <?PHP echo $article['name']; ?> </p></th>
            </tr>

            <tr>
                <th>Prix</th>
                <td><?PHP echo $article['prix']; ?></td>
            </tr>

            <tr>
                <th>Categorie</th>
                <td><?PHP echo $article['categorie']; ?></td>
            </tr>

            <tr>
                <th>SousCategorie</th>
                <td><?PHP echo $article['souscategorie']; ?></td>

            </tr>

            <tr>
                <td>
                    <form method="GET" action="AfficherArticles.php">
                    <button type="submit" class="btn btn-light">Back</button>
                    </form>
                </td>

                <td>
                    <form method="POST" action="CommanderArticle.php">
                    <button type="submit" class="btn btn-success">Commander</button>
                    <input type="hidden" value=<?PHP echo $article['id_art']; ?> name="id">
                    </form>
                </td>
            </tr>


        </table>

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
