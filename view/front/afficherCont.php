<?php 


include "../../controller/donC.php";
include "../../controller/UtilisateurC.php";

include "header.php";

$donC= new donC();

$don = $donC-> recupererdon($_POST["id"]);

$userc = new UtilisateurC();
$id1=$don['id_u'] ;
 
$listuser = $userc->afficherUser($id1);
 



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
     <link rel="icon" href="../../images/favicon.ico">
     <link rel="shortcut icon" href="../../images/favicon.ico" />
     <link rel="stylesheet" href="../../css/style.css">
     <link rel="stylesheet" href="../../css/slider.css">
     <script src="../../js/jquery.js"></script>
     <script src="../../js/jquery-migrate-1.1.1.js"></script>
     <script src="../../js/superfish.js"></script>
     <script src="../../js/jquery.carouFredSel-6.1.0-packed.js"></script>
     
     <script src="../../js/jquery.equalheights.js"></script>
     <script src="../../js/jquery.easing.1.3.js"></script>
     <script src="../../js/tms-0.4.1.js"></script>
     <script src="../../js/jquery.ui.totop.js"></script>

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
         <script src="../../js/html5shiv.js"></script>
         <link rel="stylesheet" media="screen" href="../../css/ie.css">

         <![endif]-->
     </head>
     <body  class="page1">
<!--==============================header=================================-->

<!--=======content================================-->

 
 

 
    <h2>contact</h2>

 
                <?PHP
                foreach($listuser as $user) :
                ?>
                 
     <table class="tableau-style">
     	<thead>
     	<tr> <th> nom </th>
     		<th> adresse</th>
     		<th> email </th>
        <th> phone </th>

     	</tr>
     		</thead>
     		<tbody>
     		 <td><?PHP    echo    $user['nom']; ?> </td>
     		 <td><?PHP    echo    $user['adresse']; ?> </td>
     		 <td> <?PHP    echo    $user['email']; ?> </td>
             <td> <?PHP    echo    $user['phone']; ?> </td>






     		</tbody>
     </table> 
     
     
       
    

            
 
            
             

                <?php endforeach; ?>
   
 
 
 
 




<!--==============================footer=================================-->

<?php include "footer.php";?>