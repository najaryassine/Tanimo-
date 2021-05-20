<?php 


include "C:/xampp/htdocs/monprojet/Tanimo--master/controller/donC.php";
include "C:/xampp/htdocs/monprojet/Tanimo--master/controller/UtilisateurC.php";
$donC= new donC();

$don = $donC-> recupererdon($_POST["id"]);
var_dump($don['id_u']);
$userc = new UtilisateurC();
$id1=$don['id_u'] ; 
 
$listuser = $userc->afficherUser($id1);
 
var_dump("sss");


?>




 




<!DOCTYPE html>
<html lang="en">
<style type="text/css">
  
  .main{

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
  .tableau-style{

border-collapse: collapse;
min-width: 400px;
width: auto;
box-shadow: 0 5px 5px rgba(0,0,0,0.15);
cursor: pointer;
margin: 100px auto;
border : 2px solid midnightblue;


  }
  thead tr {

background-color: midnightblue;
color: #fff;
text-align: left;



  }
  th,td
  {
padding: 15px 20px;


  }
  tbody tr, td, th {
border : 1px solid #ddd;

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
                   <li><a href="index5.php">don </a></li>
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
  
<!--=======content================================-->

 
 

 
    <h2>contacte</h2>

 
                <?PHP
                foreach($listuser as $user) :
                ?>
                 
     <table class="tableau-style">
     	<thead>
     	<tr> <th> nom </th>
     		<th> prenom</th>
     		<th> email </th>
        <th> numero </th>
        <th> ville </th>
     	</tr>
     		</thead>
     		<tbody> 
     		 <td><?PHP    echo    $user['nom']; ?> </td>
     		 <td><?PHP    echo    $user['prenom']; ?> </td>
     		 <td> <?PHP    echo    $user['email']; ?> </td>
 <td> <?PHP    echo    $user['numero']; ?> </td>
           <td> <?PHP    echo    $user['ville']; ?> </td>





     		</tbody>
     </table> 
     
     
       
    

            
 
            
             

                <?php endforeach; ?>
   
 
 
 
 




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