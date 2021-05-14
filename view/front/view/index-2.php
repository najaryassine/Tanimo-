<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Services</title>
     <meta charset="utf-8">
     <link rel="icon" href="../images/favicon.ico">
     <link rel="shortcut icon" href="../images/favicon.ico" />
     <link rel="stylesheet" href="../css/style.css">
          <link rel="preconnect" href="https://fonts.gstatic.com">
          <link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru&family=Montserrat&display=swap" rel="stylesheet">
          <link rel="stylesheet" href="../css/FrontTemplate.css">
     <script src="../js/jquery.js"></script>
     <script src="../js/jquery-migrate-1.1.1.js"></script>
     <script src="../js/superfish.js"></script>
     <script src="../js/jquery.equalheights.js"></script>
     <script src="../js/jquery.easing.1.3.js"></script>
          <script src="../js/jquery.ui.totop.js"></script>
           <style>
             h5 {
               color:maroon;
             }
             </style>

     <script>
    
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
     <body>
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
    <div class="grid_12"> 
    <h1><a href="index.html"><img src="../images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li><a href="index.html">Home</a></li>
                   <li><a href="index-1.html">About Us </a>
                     <ul>
                         <li><a href="#"> Testimonials</a></li>
                         <li><a href="#">Archive</a></li>
                     </ul>
                   </li>
                   <li class="current"><a href="index-2.php">Services</a></li>
                   <li><a href="index-3.html">Blog</a></li>
                   <li><a href="index-4.html">Contacts </a></li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
           <div class="clear"></div>
      </div>
    </div>
</header>
<?php  
include "../controller/boutiqueC.php";
$boutique= new BoutiqueC();
$listeboutique=$boutique->afficherBoutiques();
?>
<section>
<div class="page1_block nb">
<div class="small-container">
            <div class="row row-2">
                <h2>Liste des boutique  : </h2>
               
            </div>
            <div class="row">
                <!--- start of script --->                                                                  
                <?PHP
                foreach($listeboutique as $row){
            ?> 
                <div class="col-4">
                <div class="page-btn">
                <a href="single-product.php"><img src="../../back/assets/img/<?PHP echo $row['Image']; ?>"></a> <br>
                <hr>
                <h5 align="center">Nom : <?PHP echo $row['Nom']; ?></h5>
                <h5 align="center">Adresse : <?PHP echo $row['Adresse']; ?></h5> 
                <p align="center">Email: <?PHP echo $row['Email']; ?></p> <br>
                
                  <hr>  
                <div class="ripple-container"></div>
                </button> </h5>
                    </div>
                </div>
                <!--- end of script-->
                <?PHP
                }
            ?>
                <margin-left>
            </div>
            
            <div class="page-btn">
            <!----- script ----->
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>&#8594;</span>
            </div>
            
        </div>
  <!-- gestion commande -->
              </div>
              </section>




















              
       
              <?php  
include "../controller/eventC.php";
$event= new EventC();
$listeevent=$event->afficherEvents();
?>
<section>

<div class="page1_block nb">
<div class="small-container">
<h2 class="ic1">Nos evenement</h2>
       <a href="TridateD.php" class="btn">Date Debut</a>
       <a href="TridateF.php" class="btn">Date Finale</a>
            <div class="row row-2"> </div>
            <div class="row">
                <!--- start of script --->                                                                  
                <?PHP
                foreach($listeevent as $row){
            ?> 
                <div class="col-4">
                <div class="page-btn">
                <a href="single-product.php"><img src="../../back/assets/img/<?PHP echo $row['Image']; ?>"></a> 
                <hr>
                <h5 align="center">Titre : <?PHP echo $row['Titre']; ?></h5>
                <p align="center">DateD : <?PHP echo $row['DateD']; ?></p> 
                <p align="center">DateF: <?PHP echo $row['DateF']; ?></p> 
                
                  <hr>  
                <div class="ripple-container"></div>
                </button> </h5>
                    </div>
                </div>
                <!--- end of script-->
                <?PHP
                }
            ?>
                <margin-left>
                  
            </div>
            
            <div class="page-btn">
            <!----- script ----->
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>&#8594;</span>
            </div>
            <a href="pdf.php" class="btn">Enregistrer les évenments</a>
        </div>
        
  <!-- gestion commande -->
              </div>
              </div>
              </section>
  

  
  
<!--=======content================================-->

<div class="content"><div class="ic"></div>
  <div class="container_12">
  <div class="grid_12">
   
    <h2 class="ic1" >Special Services</h2>
  </div>
  <div class="clear"></div>
  <div class="grid_4">
     <div class="pad2"> <img src="../images/page3_img3.jpg" alt="" class="img_inner fleft i2">
      <div class="extra_wrapper"><div class="text2 col2"><a href="#">Lokitoq</a></div>Laes quis orci eget diam viverralopr con
equat. Fusce sagit quam ihui hyhy kolo opirlo pulvinarhjkjo.</div>
    </div></div>
    <div class="grid_4">
    <div class="pad2">  <img src="../images/page3_img4.jpg" alt="" class="img_inner fleft i2">
      <div class="extra_wrapper"><div class="text2 col2"><a href="#">Gylikot
</a></div>Foaesent quis orci 
diam viverralopr con
equat. Lusce sagittis quam ihui hyhy opir
pulvinarhjk velit.</div><div class="clear"></div></div>
    </div>
    <div class="grid_4">
    <div class="pad2">  <img src="../images/page3_img5.jpg" alt="" class="img_inner fleft i2">
      <div class="extra_wrapper"><div class="text2 col2"><a href="#">Sertymon</a></div>Eroaesent quis orci ediam viverralopr con jikjulo poiu retyulo hyk
equat. Usce sagittis ki quam ihui hyhy opirp. </div><div class="clear"></div></div>
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