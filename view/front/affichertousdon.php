<?php


require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';

include_once '../../model/don.php';
include_once '../../controller/donC.php';

include_once '../../model/adoption.php';
include_once '../../controller/adoptionc.php';


include "header.php";
$donC=new donC();
$listeDon=$donC->afficherDon();

if (isset($_GET['key'])){
  $listeDon = $donC->rechercherdon($_GET['key']);
}
  


$adoptionc=new adoptionc();
$listeAdoption=$adoptionc->afficheradoption();

$don = null ; 
$donC = new donC(); 

if( isset($_POST["type"]) && isset($_POST["sexe"]) && isset($_POST["couleur"]) && isset($_POST["pelage"]) && isset($_POST["age"])  && isset($_POST["race"]))
{
 if (! empty($_POST["type"]) && ! empty($_POST["sexe"]) && ! empty($_POST["couleur"]) && ! empty($_POST["pelage"]) && ! empty($_POST["age"] ) &&  !empty($_POST["race"] ))
 { if (isset($_FILES['img'])) {
  $photos = $_FILES['img']['name'];
            $upload = "../back/assets/img/" . $photos;
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
 <td><img src="../back/assets/img/<?PHP echo $don['image']; ?>" alt="aaaa" width="200"></td>
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

<?php include "footer.php";?>