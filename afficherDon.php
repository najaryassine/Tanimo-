
<?php

require_once '../../config/config.php';

include_once '../../model/don.php';
include_once '../../controller/donC.php';
$donC=new donC();
$listeDon=$donC->afficherDon();

$don = null ; 
$donC = new donC(); 

if( isset($_POST["type"]) && isset($_POST["sexe"]) && isset($_POST["couleur"]) && isset($_POST["pelage"]) && isset($_POST["age"])  && isset($_POST["race"])  )
{
 if (! empty($_POST["type"]) && ! empty($_POST["sexe"]) && ! empty($_POST["couleur"]) && ! empty($_POST["pelage"]) && ! empty($_POST["age"] )&&  !empty($_POST["race"] )  )
 { if (isset($_FILES['img'])) {
  $photos = $_FILES['img']['name'];
            $upload = "updon/" . $photos;
           move_uploaded_file($_FILES['img']['tmp_name'], $upload);

            


  $don = new don ($_POST["type"] , $_POST["sexe"], $_POST["couleur"] , $_POST["pelage"], $_POST["age"],$_POST["race"] ,$photos);
   $donC->ajouterDon($don) ;
   header('Location:afficherDon.php');

 }
  else
    $error = "missing ";
 }
}
 

?>




<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  
  .main{
background-color: rgd(0,0,0,0.5);
width: 800px;
margin:auto;


  }
  form{padding: 10px;}
  input {

border : none;
appearance: none;
background : #f2f2f2;
padding: 12px;
border-radius: 3px;
width: 150px;




  }
  .button{

background-color: #ff6a19;
border:none;
color: white;
padding:15px;
text-align: center;
text-decoration: none;
display: inline-block;
font-size: 16px;
margin:4px 2px;
border-radius: 2rem;

  }
</style>
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
    <h1><a href="index.html"><img src="images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li class="current"><a href="index.html">Home</a></li>
                   <li class="with_ul"><a href="index-1.html">About Us </a>
                     <ul>
                         <li><a href="#"> Testimonials</a></li>
                         <li><a href="#">Archive</a></li>
                     </ul>
                   </li>
                   <li><a href="index-2.html">Services</a></li>
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
<div class="top_block">
 <div class="slider-relative">
    <div class="slider-block">
      <div class="slider">
        <ul class="items">
          <li><img src="images/slide.jpg" alt="">
            <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
          </li>
          <li><img src="images/slide1.jpg" alt="">
            <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
          </li>
          <li><img src="images/slide2.jpg" alt="">
            <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
          </li>
          <li><img src="images/slide3.jpg" alt="">
            <div class="banner">They Need  Your <span>Love</span> and <i>Care</i><p>It is so easy to make them happy</p></div>
          </li>
        </ul>
      </div>
    </div>
  </div>

 </div> 
 <div class="page1_block">
   <div class="container_12">
     <div class="grid_6">
      <h2>Welcome to Our Site</h2><br>
      <img src="images/page1_img5.jpg" alt="" class="img_inner fleft">
      <div class="extra_wrapper style1"><p class="text1"><a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow">Click here</a> for more info about this free website template created by TemplateMonster.com </p>
      Hibh ullamcorper accumsan sem lectus ut sapien. Donec venenatis .

      </div>
    
     </div>
     <div class="grid_5 prefix_1">
       <h2 class="ic1">Latest News</h2>
       <ul class="list">
         <li>
           <span>
             <time datetime="2013-01-01">27<span>APR</span></time></span>
             <div class="extra_wrapper">
           <div class="col1"><a href="#">Duis posuere consectetur pellentesqe;</a><time datetime="2013-01-01">April 27.03.13</time></div>Sed nisi turpis, pellentesque at ultrices in dapibus in magna. Nunc easi diam risus,placerat ut scelerisque  suscipit eu ante. Nullam vitae dolor ullcper felises</div>
         </li>
         <li>
           <span class="cnt">
             <time datetime="2013-01-01">28<span>APR</span></time></span> <div class="extra_wrapper">
           <div class="col1"><a href="#">Kuuis posuere consectetur pellentes;</a><time datetime="2013-01-01">April 28.03.13</time></div>Eed nisi turpis, pellentesque at ultrices in dapibus in magna. Nunc easi diam risulacerat ut scelerisque et suscipit eu ante. Nullam vitae dolor ullcper felises. </div>
         </li>
         <li>
           <span>
             <time datetime="2013-01-01">29<span>APR</span></time></span> <div class="extra_wrapper">
           <div class="col1"><a href="#">Opuis posuere honsectetur pellentesyt;</a><time datetime="2013-01-01">April 29.03.13</time></div>Koed nisi turpis, pellentesque at ultrices in dapibus in magna. Nunc easi diam risujo placerat ut scelerisque et suscipit eu ante. Ullam vitae dolor ullcper felises. </div>
         </li>
       </ul>
     </div>
   </div>
 </div>
<!--=======content================================-->

<div class="content page1"><div class="ic"></div>
  <div class="container_12">
  <div class="grid_12">
    <a href="#" class="next"></a><a href="#" class="prev"></a>
    <h2>Tous Don</h2>

 
                <?PHP
                foreach($listeDon as $don) :
                ?>
                 
     <div class="col-sm-4 ">
      <div class="column">
       <div class="card">
  <img width="200" src="updon/<?PHP echo $don['image']; ?>" >
   <h4 class="card-title" style="color: black"><?PHP echo $don['type']; ?></h4> 
    <p class="card-text"><?PHP echo $don['sexe']; ?> </p> 
     <p class="card-text"><?PHP echo $don['couleur']; ?> </p> 
      <p class="card-text"><?PHP echo $don['pelage']; ?> </p> 
       <p class="card-text"><?PHP echo $don['age']; ?> </p> 
        <p class="card-text"><?PHP echo $don['numero']; ?> </p> 
   <p class="card-text"><?PHP echo $don['race']; ?> </p> 
    <p class="card-text"><?PHP echo $don['adresse']; ?> </p> 


            
</div>
</div>
</div>

            
             

                <?php endforeach; ?>
            </div>
        </div>

 </div>
 
 

<!--=======don================================-->




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