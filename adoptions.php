
<?php

include_once 'C:/xampp/htdocs/monprojet/Tanimo--master/controller/adoptionc.php';
include_once 'C:/xampp/htdocs/monprojet/Tanimo--master/model/adoption.php';
$adoptionc = new adoptionc();
$listAdoption=$adoptionc->afficheradoption();
if (isset($_GET['key'])){
  $listAdoption = $adoptionc->rechercherAdop($_GET['key']);
}
if (isset($_GET['key1'])){
  $listAdoption = $adoptionc->trierreg();
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
  .content-table{
border-collapse: collapse;
margin: 25px 0;
font-size: 0.6cm;
min-width: 400px;



  }
  .content-table thead tr {
  	background-color: #009879;
  	color: #ffffff;
  	text-align: left;
  	font-weight: bold;

  }
  .content-table th ,
  .content-table td {
  	padding: 12px 15px; 
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
<form method="GET">


<div align="center"><input  type="text" name="key" class="col-x1"  placeholder="Search....">
<button type="submit">Search</button> <br>

<button type="submit" name="key1">trier selon l'ordre alphabétique de region  </button> <br>




                    </form>
   
      

<!--==============================afficher adop=================================-->

<table  class="tableau-style" border="1" align="center">
	<tr>  <th> espece</th>

<th> race </th>
<th> sexe </th>
<th> age </th>
<th> region </th>
<th> image </th>

	</tr>

	<?php
foreach ($listAdoption as $adop ) :

	 
?>
<tr></tr>
<td> <?php  echo $adop['espece'];  ?></td>
<td> <?php   echo $adop['race'];        ?></td>
<td> <?php   echo $adop['sexe'];        ?></td>
<td> <?php   echo $adop['age'];        ?></td>
<td> <?php   echo $adop['region'];        ?></td>
<td> <img src="../back/adoption/up/<?PHP  echo $adop['image'];   ?>"    alt="aaaa" width="300px" height="200px"></td>


	
</tr>
<?php endforeach; ?>
</table>
<!--==============================ajouter don=================================-->


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



