<?php

require_once("../../controller/reclamationC.php");

$id = $_SESSION["id"];

$res = getRec($id);

?>
<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Réclamations</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/form.css">
     <script src="js/jquery.js"></script>
     <script src="js/forms.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>     
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
          <script src="js/jquery.ui.totop.js"></script>

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
	<style>
		table, tr, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}

#pr {
		margin-right : 1050px;
	}
	</style>
     </head>
     <body>
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
    <div class="grid_12"> 
    <h1><a href="index.php"><img src="images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li class="current"><a href="index.php">Home</a></li>
                   <li class="with_ul"><a href="index-1.php">About Us </a>
                     <ul>
                         <li><a href="#"> Testimonials</a></li>
                         <li><a href="#">Archive</a></li>
                     </ul>
                   </li>
                   <li><a href="index-2.php">Services</a></li>
                   <li><a href="index-3.php">Blog</a></li>
                   <li><a href="index-4.php">Contacts </a></li>
				   <li class="with_ul"><a href="#">Réclamations </a>
                     <ul>
                         <li><a href="index-5.php"> Réclamations</a></li>
                         <li><a href="index-7.php">mes Réclamations</a></li>
                     </ul>
                   </li>
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
		   <a href="index-6.php"><span id="pr"> <img src="../../picture/<?php echo $_SESSION['picture'];?>"  width="5%"> </span></a>
           <div class="clear"></div>
      </div>
    </div>
</header>


<div class="content pt1"><div class="ic"></div>
  <div class="container_12">
     <div class="grid_6">
      <h2>Mes Reclamation</h2><br>
            <div class="map">
       
 <table >
  <tr>
    <th>description</th>
    <th>date</th>
	<th>type</th>
	<th>état</th>
  </tr>
  <?php
	
	foreach($res as $row)
	{	
		echo "<tr>";
		echo "<td>$row[description]</td>";
		echo "<td>$row[date]</td>";
		echo "<td>$row[type]</td>";
		if($row['etat']==0){ echo "<td><img src='images/error.png'></td>";}else { echo "<td><img src='images/valid.png'></td>";}       
		echo "</tr>";
	}
		
  ?>
</table>
      
       
       <div class="clear"></div>
       </div>
	  
                       
          </div>
     </div>
     
	   </form>
        
     </div>
   </div>
  </div>
<!--=======content================================-->



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
</html>
</body>