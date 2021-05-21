<!DOCTYPE html>
<html lang="en">
<head>
    <title>Home</title>
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico">
    <link rel="shortcut icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slider.css">
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.1.1.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/jquery.carouFredSel-6.1.0-packed.js"></script>

    <script src="js/jquery.equalheights.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/tms-0.4.1.js"></script>
    <script src="js/jquery.ui.totop.js"></script>

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
    <script src="js/html5shiv.js"></script>
    <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
</head>
<body  class="page1">
<!--==============================header=================================-->
<header>
    <div class="container_12">
        <div class="grid_12">
            <h1><a href="index.php"><img src="../back/assets/img/dashboard/logo.png" alt="Tanimo"></a> </h1>
            <div class="menu_block">
                <nav  class="" >
                    <ul class="sf-menu">
                        <li><a href="index.php">Accueil</a></li>


                        <li><a href="AfficherArticles.php">Articles</a></li>
                        <li><a href="HistoriqueCommande.php">Commandes</a></li>

                        <li><a href="index-2.php">Boutiques et Evénements</a></li>
                        <li><a href="vetList.php">Vétérinaires</a></li>
                        <li><a href="promotionList.php">Promotions</a></li>
                        <li><a href="adoptions.php">Adoptions</a></li>
                        <li><a href="ProfilUser.php">Mes Dons</a></li>
                        <li><a href="affichertousdon.php">Tous les dons</a></li>

                        <li class="with_ul"><a href="#">Réclamations </a>
                            <ul>
                                <li><a href="index-5.php"> Réclamations</a></li>
                                <li><a href="index-7.php">mes Réclamations</a></li>
                            </ul>
                        </li>



                        <li style=" float:right;"><a href="panier.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                                </svg></a></li>
                    </ul>
                </nav>
                <div class="clear"></div>
            </div>

            <a href="index-6.php"><span id="pr"> <img src="../../picture/<?php echo $_SESSION['picture'];?>"  width="5%"> </span></a>

            <div class="clear"></div>
        </div>
    </div>
</header>



<div class="top_block">
    <div class="slider-relative">
        <div class="slider-block">
            <div class="slider">
                <ul class="items">
                    <li><img src="images/slide.jpg" alt="">
                        <div class="banner"> <span></span>  <p><i>Les Animaux </i> sont nés pour nous apprendre à aimer</p></div>
                    </li>
                    <li><img src="images/slide1.jpg" alt="">
                        <div class="banner"><span></span>  <i></i><p><i>Les Animaux </i> sont nés pour nous apprendre à aimer</p></div>
                    </li>
                    <li><img src="images/slide2.jpg" alt="">
                        <div class="banner"><span></span>  <i></i><p><i>Les Animaux </i> sont nés pour nous apprendre à aimer</p></div>
                    </li>
                    <li><img src="images/slide3.jpg" alt="">
                        <div class="banner"> <span></span>  <i></i><p><i>Les Animaux </i> sont nés pour nous apprendre à aimer</p></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<div class="page1_block">
    <div class="container_12">
        <div class="grid_6">
            <h2>Bienvenue dans notre site</h2><br>
            <img src="images/page1_img5.jpg" alt="" class="img_inner fleft">
            <div class="extra_wrapper style1"><p class="text1"><a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow"></a>

            </div>
            <div class="clear"></div>
            Propose des produits spécialisés pour les chiens, les chats et de nombreux autres animaux de compagnie .
            L’idée est d’aider et d’accompagner au quotidien les propriétaires qui se préoccupent de la santé et le bien-être de leurs animaux.
            Les clients peuvent aussi consulte la localisation de nos boutique
            et trouver des animaux      a  adopter  ou bien déposer une annonce
            .<br>

        </div>
        <div class="grid_5 prefix_1">
            <h2 class="ic1">Dernières nouvelles</h2>
            <ul class="list">
                <li>
           <span>
             <time datetime="2021-04-10">27<span>APR</span></time></span>
                    <div class="extra_wrapper">
                        <div class="col1"><a href="#">Création de notre nouveau site web Tanimo;</a><time datetime="2021-04-10">April 10.04.21</time></div>Premier site  Tunisien en ligne d’adoptation et d’achat des produits des animaux</div>
                </li>

            </ul>
        </div>
    </div>
</div>
<!--=======content================================-->

<div class="content page1"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_12">

            <h2>Animeaux pour adoptation</h2>
        </div>
        <div class="clear"></div>
        <ul class="carousel1">
            <li class="grid_4">
                <img src="images/carousel1_img1.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper pad1">
                    <p class="col2"><a href="#">Ronny</a></p>
                </div>
            </li>
            <li class="grid_4">
                <img src="images/carousel1_img2.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper pad1">
                    <p class="col2"><a href="#">Bikou</a></p>
                </div>
            </li>
            <li class="grid_4">
                <img src="images/carousel1_img3.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper pad1">
                    <p class="col2"><a href="#">Jax</a></p>
                </div>
            </li>
            <li class="grid_4">
                <img src="images/carousel1_img4.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper pad1">
                    <p class="col2"><a href="#"></a></p>
                </div>
            </li>
            <li class="grid_4">
                <img src="images/carousel1_img5.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper pad1">
                    <p class="col2"><a href="#"></a></p>
                </div>
            </li>
            <li class="grid_4">
                <img src="images/carousel1_img6.jpg" alt="" class="img_inner fleft">
                <div class="extra_wrapper pad1">
                    <p class="col2"><a href="#">.</a></p>
                </div>
            </li>
        </ul>
    </div>
</div>
<div class="bottom_block">
    <div class="container_12">
        <div class="grid_6">
            <h2>Conseils de soins pour votre animaux </h2><br>
            Comme pour les hommes, il est important que votre animal consulte régulièrement son médecin, autrement dit son vétérinaire. Notre conseil : rendez visite à votre véto en dehors des séances de vaccination. L’idée étant que votre animal soit véritablement suivi.
        </div>
        <div class="grid_4 prefix_2">
            <h2 class="ic1"> Pour vos questions</h2>
            <img src="images/page1_img4.jpg"
                 alt="" class="fleft img_inner">
            <div class="extra_wrapper">
                <div class="cont">
                    Contact:
                    <span>+216 50048691</span>
                </div>
            </div>
            <div class="clear"></div>

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
            <p>© 2021 Tanimo | Tous droits réservés.</p>

        </div>
        <div class="clear"></div>
    </div>
</footer>
</body>
</html>