<?php


require_once '../../config/config.php';

include_once '../../model/don.php';
include_once '../../controller/donC.php';
$donC=new donC();
$listeDon=$donC->afficherDon();

if (isset($_GET['key'])){
  $listeDon = $donC->rechercherdon($_GET['key']);
}
  

?>

<?php

require_once '../../config/config.php';

include_once '../../model/don.php';
include_once '../../controller/donC.php';
include_once '../../model/adoption.php';
include_once '../../controller/adoptionc.php';
$adoptionc=new adoptionc();
$listeAdoption=$adoptionc->afficheradoption();

$don = null ; 
$donC = new donC(); 

if( isset($_POST["type"]) && isset($_POST["sexe"]) && isset($_POST["couleur"]) && isset($_POST["pelage"]) && isset($_POST["age"])  && isset($_POST["race"]))
{
 if (! empty($_POST["type"]) && ! empty($_POST["sexe"]) && ! empty($_POST["couleur"]) && ! empty($_POST["pelage"]) && ! empty($_POST["age"] ) &&  !empty($_POST["race"] ))
 { if (isset($_FILES['img'])) {
  $photos = $_FILES['img']['name'];
            $upload = "updon/" . $photos;
           move_uploaded_file($_FILES['img']['tmp_name'], $upload);

            


  $don = new don ($_POST["type"] , $_POST["sexe"], $_POST["couleur"] , $_POST["pelage"], $_POST["age"],$_POST["numero"],$_POST["race"],$_POST["adresse"],$photos);
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
background : #ADD8E6;
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
color: #F0FFFF;
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
  
<!--=======afficher les dons ================================-->
 <form>
                    <tr>
                      <td>
<div align="center"><input  type="text" name="key" class="col-x1"  placeholder="Search....">
                    <button type="submit">Search</button>
                      </div>
                      </td>
                      </tr>
                      </form>
 





<!--=======afficher   ================================-->
 <?php 

 foreach ($listeDon as $don) {
  

  ?>

 <table class="tableau-style">
      


<thead>
  <tr>
    <th>
      Type
    </th>
    <th> sexe</th>
    <th>couleur</th>
    <th> pelage </th>
    <th> age </th> 
    <th> race </th>
    <th> image </th>
    <th>contacter </th>


  </tr>



</thead>
<tbody>
  
<tr>
  
<td>  <?php  echo $don['type']  ; ?></td>
<td><?php  echo $don['sexe']  ; ?> </td>
 <td> <?php  echo $don['couleur']  ; ?></td>
 <td> <?php  echo $don['pelage']  ; ?></td>
 <td>  <?php  echo $don['age']  ; ?>  </td>
 <td> <?php  echo $don['race']  ; ?>  </td>
 <td><img src="updon/<?PHP echo $don['image']; ?>" alt="aaaa" width="200"></td>
 <td><form method="POST" action="afficherCont.php">
<input type="submit" name="contacter" value="contacter">
<input type="hidden" value = <?php  echo $don['id']; ?> name="id">

</form></td>

</tr>


</tbody>





   </table>
     <?php 
}

?>
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