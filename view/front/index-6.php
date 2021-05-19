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
	 <form action="../../controller/UserC.php" method="post">
      <h2>User profile</h2> <h2>&nbsp;<input type="submit" value="déconnexion" name="dec"></h2><br>
	  </form>
      <div class="map">
       <form  method="post" action="../../controller/UserC.php">
       <table>
	   <tr>
	   <td>picture</td>
	   <td><img src="../../picture/<?php echo $_SESSION['picture'];?>"  width="100px"><br/> <input type="file" name="pic"> </td>
	   </tr>
	   
	   <tr>
	   <td>nom</td>
	   <td><input type="text" value="<?php echo $_SESSION['nom']; ?>" name="nom"></td>
	   </tr>
	   <tr>
	   <td>email </td>
	   <td><input type="text" value="<?php echo $_SESSION['email']; ?>" name="email"></td>
	   </tr>
	   <tr>
	   <td>password &nbsp;</td>
	   <td><input type="text" value="<?php echo $_SESSION['password']; ?>" name="password"></td>
	   </tr>
	   <tr>
	   <td>adresse </td>
	   <td><input type="text" value="<?php echo $_SESSION['adresse']; ?>" name="adr"></td>
	   </tr>
	   <tr>
	   <td>phone </td>
	   <td><input type="text" value="<?php echo $_SESSION['phone']; ?>" name="tel"></td>
	   </tr>
	   <tr>
	   <td> </td>
	   <td><br><input type="submit" value="modifier" name="modiff"></td>
	   </tr>
	   </table>
      </form>
       
       <div class="clear"></div>
       </div>
	   
                       
          </div>
     </div>
     
	   </form>
        
     </div>
   </body>
  </html>
<!--=======content================================-->



<!--==============================footer=================================-->

<?php include "footer.php"?>