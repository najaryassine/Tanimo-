<!DOCTYPE html>
<html lang="en">
     <head>
     <title>Contacts</title>
     <meta charset="utf-8">
<<<<<<< HEAD:view/front/view/index-4.html
     <link rel="icon" href="../images/favicon.ico">
     <link rel="shortcut icon" href="../images/favicon.ico" />
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/form.css">
     <script src="../js/jquery.js"></script>
     <script src="../js/forms.js"></script>
     <script src="../js/jquery-migrate-1.1.1.js"></script>
     <script src="../js/superfish.js"></script>
     <script src="../js/jquery.equalheights.js"></script>
     <script src="../js/jquery.easing.1.3.js"></script>
          <script src="../js/jquery.ui.totop.js"></script>
=======
     <link rel="icon" href="../images/favicon.ico">
     <link rel="shortcut icon" href="../images/favicon.ico" />
     <link rel="stylesheet" href="../css/style.css">
     <link rel="stylesheet" href="../css/form.css">
     <script src="../js/jquery.js"></script>
     <script src="../js/forms.js"></script>
     <script src="../js/jquery-migrate-1.1.1.js"></script>
     <script src="../js/superfish.js"></script>
     <script src="../js/jquery.equalheights.js"></script>
     <script src="../js/jquery.easing.1.3.js"></script>
          <script src="../js/jquery.ui.totop.js"></script>
>>>>>>> ce409d30636e5ca5da5f575b394012e9476d2900:view/front/index-4.php

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
         <script src="../js/html5shiv.js"></script>
         <link rel="stylesheet" media="screen" href="../css/ie.css">

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
<<<<<<< HEAD:view/front/view/index-4.html
  <div class="container_12">
    <div class="grid_12"> 
    <h1><a href="index.html"><img src="../images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
=======
 <div class="container_12">
  <div class="grid_12"> 
    <h1><a href="../index.php"><img src="../images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
>>>>>>> ce409d30636e5ca5da5f575b394012e9476d2900:view/front/index-4.php
         <div class="menu_block">
           <nav  class="" >
            <ul class="sf-menu">
                   <li class="current"><a href="../index.php">Home</a></li>
                   <li class="with_ul"><a href="index-1.php">About Us </a>
                     <ul>
                         <li><a href="#"> Testimonials</a></li>
                         <li><a href="#">Archive</a></li>
                     </ul>
                   </li>
                   <li><a href="index-2.php">Services</a></li>
<<<<<<< HEAD:view/front/view/index-4.html
                   <li><a href="index-3.html">Blog</a></li>
                   <li class="current"><a href="index-4.html">Contacts </a></li>
=======
                   <li><a href="index-3.php">Blog</a></li>
                   <li><a href="index-4.php">Contacts </a></li>
				   <li class="with_ul"><a href="#">R??clamations </a>
                     <ul>
                         <li><a href="../index-5.php"> R??clamations</a></li>
                         <li><a href="../index-7.php">mes R??clamations</a></li>
                     </ul>
                   </li>
>>>>>>> ce409d30636e5ca5da5f575b394012e9476d2900:view/front/index-4.php
                 </ul>
              </nav>
           <div class="clear"></div>
           </div>
		  <a href="../index-6.php"><span id="pr"> <img src="../../picture/<?php echo $_SESSION['picture'];?>" width="5%"> </span></a>
           <div class="clear"></div>
      </div>
	  </div>
</header>


<div class="content pt1"><div class="ic"></div>
  <div class="container_12">
     <div class="grid_6">
      <h2>Contact Info</h2><br>
            <div class="map">
            <figure class="img_inner">
                          <iframe src="../http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
               </figure>
              <address>
                            <dl>
                                <dt><p>The Company Name Inc.<br>
                                    8901 Marmora Road,<br>
                                    Glasgow, D04 89GR.</p>
                                </dt>
                                <dd><span>Freephone:</span>+1 800 559 6580</dd>
                                <dd><span>Telephone:</span>+1 800 603 6035</dd>
                                <dd><span>FAX:</span>+1 800 889 9898</dd>
                            </dl>
                         </address>
                       
          </div>
     </div>
     <div class="grid_5 prefix_1">
       <h2 class="ic1">Contact Form</h2>
       <form id="form">
       <div class="success_wrapper">
       <div class="success">Contact form submitted!<br>
       <strong>We will be in touch soon.</strong> </div></div>
       <fieldset>
       <label class="name">
       <input type="text" value="Name:">
       <br class="clear">
       <span class="error error-empty">*This is not a valid name.</span><span class="empty error-empty">*This field is required.</span> </label>
       <label class="email">
       <input type="text" value="E-mail:">
       <br class="clear">
       <span class="error error-empty">*This is not a valid email address.</span><span class="empty error-empty">*This field is required.</span> </label>
       <label class="phone">
       <input type="tel" value="Phone:">
       <br class="clear">
       <span class="error error-empty">*This is not a valid phone number.</span><span class="empty error-empty">*This field is required.</span> </label>
       <label class="message">
       <textarea></textarea>
       <br class="clear">
       <span class="error">*The message is too short.</span> <span class="empty">*This field is required.</span> </label>
       <div class="clear"></div>
       <div class="btns"><a data-type="reset" class="btn">Clear</a><a data-type="submit" class="btn">Send</a>
       <div class="clear"></div>
       </div></fieldset></form>
        
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
</body>
</html>