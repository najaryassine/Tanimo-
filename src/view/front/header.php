<?php 
$url= explode("/",$_SERVER['REQUEST_URI']); 
$url = end($url);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>Home</title>
    <meta charset="utf-8">
    <link rel="icon" href="../../../images/favicon.ico">
    <link rel="shortcut icon" href="../../../images/favicon.ico" />
    <link rel="stylesheet" href="../../../css/style.css">
    <link rel="stylesheet" href="../../../css/slider.css">

<!-- Bootstrap import -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    <!-- <script src="../js/jquery.js"></script>
    <script src="../js/jquery-migrate-1.1.1.js"></script>
    <script src="../js/superfish.js"></script>
    <script src="../js/jquery.carouFredSel-6.1.0-packed.js"></script>

    <script src="../js/jquery.equalheights.js"></script>
    <script src="../js/jquery.easing.1.3.js"></script>
    <script src="../js/tms-0.4.1.js"></script>
    <script src="../js/jquery.ui.totop.js"></script> -->

</head>

<body class="page1">

    <header>
        <div class="container_12">
            <div class="grid_12">
                <h1><a href="index.html"><img src="../../../images/logo.png" alt="Tanimo"></a> </h1>
                <div class="menu_block">
                    <nav class="">
                        <ul class="sf-menu">
                            <li><a href="../index.html">Produits</a></li>
                            <li class="with_ul"><a href="../index-1.html">Adoptations </a>
                                <ul>
                                    <li><a href="#"> Testimonials</a></li>
                                    <li><a href="#">Archive</a></li>
                                </ul>
                            </li>
                            <li><a href="../index-2.html">Compte</a></li>
                            <li><a href="../index-3.html">Nos boutiques</a></li>
                            <li class="<?php echo $url == "vetList.php" ? 'current' : '' ?>"><a href="../../../view/front/vetList.php">Vétérinaires </a></li>
                            <li class="<?php echo $url == "promotionList.php" ? 'current' : '' ?>"><a href="../../../view/front/promotionList.php">Promotion </a></li>

                        </ul>
                    </nav>
                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </header>