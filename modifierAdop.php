<?php
require_once 'C:/xampp/htdocs/monprojet/Tanimo--master/config/config.php';
include_once '../../../controller/adoptionc.php';
include_once '../../../model/adoption.php';
 
  $error="";
$adoptionc = new adoptionc();
 if(isset($_GET['id'])) {
$oldadoption = $adoptionc->recupererAdoption($_GET['id']);}
var_dump('cccc');
var_dump($oldadoption['espece']);

if(isset($_POST['modifier']))
{  
 
 $check=$_FILES["img1"]["tmp_name"];
 if($_FILES['img1']['size'] !==0)
 {
 $uploaddir = "up/";
 $uploadfile = $uploaddir . basename($_FILES['img1']['name']);
  move_uploaded_file($_FILES['img1']['tmp_name'], $uploadfile);
    $image = $_FILES['img1']['name'];

}else {$image = $oldadoption["image"];}
    $adoption = new adoption($_POST['espece'],$_POST['race'],$_POST['age'],$_POST['sexe'],$_POST['region'],$image);
    $id= $oldadoption['id'];
    $adoptionc->modifierAdoption($adoption, $id);
   
     var_dump($_POST['espece']);
  
}
 


 

?>



<!DOCTYPE html>
<html lang="en">


 
<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/product/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:13:35 GMT -->
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Tanimo Dashboard</title>
  <!-- Iconic Fonts -->
  <link href="vendors/iconic-fonts/font-awesome/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="vendors/iconic-fonts/flat-icons/flaticon.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- jQuery UI -->
  <link href="assets/css/jquery-ui.min.css" rel="stylesheet">
  <!-- Greendash styles -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- Favicon -->
  <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

</head>


<body class="ms-body ms-aside-left-open ms-primary-theme ">
 
  

<script>
function myFunction(s1,s2)
{
var s1= document.getElementById(s1);
var s2= document.getElementById(s2);
s2.innerHTML= ""; 
if(s1.value == "chien" ) 
{
var optionArray = ['berge|Berge','doberman|Doberman', 'caniche|Caniche' , 'rottweiller|Rottweiler'];

}
if(s1.value == "chat" ) 
{
var optionArray = ['british|British','persan|Persan' , 'ragdoll|Ragdoll'];

}

 for( var option in optionArray)
 {var pair =optionArray[option].split("|");
 
 var newoption = document.createElement("option");
 newoption.value = pair[0];
 newoption.innerHTML=pair[1];
 s2.options.add(newoption);
 
 }

}
    
</script>


  <!-- Preloader -->
  <div id="preloader-wrap">
    <div class="spinner spinner-8">
      <div class="ms-circle1 ms-child"></div>
      <div class="ms-circle2 ms-child"></div>
      <div class="ms-circle3 ms-child"></div>
      <div class="ms-circle4 ms-child"></div>
      <div class="ms-circle5 ms-child"></div>
      <div class="ms-circle6 ms-child"></div>
      <div class="ms-circle7 ms-child"></div>
      <div class="ms-circle8 ms-child"></div>
      <div class="ms-circle9 ms-child"></div>
      <div class="ms-circle10 ms-child"></div>
      <div class="ms-circle11 ms-child"></div>
      <div class="ms-circle12 ms-child"></div>
    </div>
  </div>

  <!-- Overlays -->
  <div class="ms-aside-overlay ms-overlay-left ms-toggler" data-target="#ms-side-nav" data-toggle="slideLeft"></div>
  <div class="ms-aside-overlay ms-overlay-right ms-toggler" data-target="#ms-recent-activity" data-toggle="slideRight"></div>

  <!-- Sidebar Navigation Left -->
  <!-- Sidebar Navigation Left -->
  <aside id="ms-side-nav" class="side-nav fixed ms-aside-scrollable ms-aside-left">

    <!-- Logo -->
    <div class="logo-sn ms-d-block-lg">
      <a class="pl-0 ml-0 text-center" href="index.html"> <img src="assets/img/dashboard/logo.png" alt="logo"> </a>
    </div>


    <!-- Navigation -->
    <ul class="accordion ms-main-aside fs-14" id="side-nav-accordion">
      <!-- Dashboard -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#dashboard" aria-expanded="false" aria-controls="dashboard">
          <span><i class="material-icons fs-16">dashboard</i>Dashboard </span>
        </a>
        <ul id="dashboard" class="collapse" aria-labelledby="dashboard" data-parent="#side-nav-accordion">
          <li> <a href="index.html">Tanimo</a> </li>

           
        </ul>
      </li>
      <!-- /Dashboard -->

      <!-- gestion des categories-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Categorie-page" aria-expanded="false" aria-controls="Categorie-page">
          <span><i class='fas fa-bars' style='font-size:18px;color:white'></i>Gestion Des Catégories</span>
        </a>
        <ul id="Categorie-page" class="collapse" aria-labelledby="Categorie-page" data-parent="#side-nav-accordion">
          <li> <a href="categorie/AjoutCategorie.html">Ajouter Une catégorie</a> </li>
          <li> <a href="categorie/AfficherCategorie.html"> Afficher les Catégories</a> </li>

        </ul>
      </li>
      <!-- /gestion de categries-->

      <!-- gestion des Sous Categorie/categories -->

      <!-- gestion des Sous Categorie-->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#SousCategorie-page" aria-expanded="false" aria-controls="SousCategorie-page">
         <span><i class='fas fa-plus-circle' style='font-size:16px;color:white'></i>Gestion Des Sous Categories</span>
        </a>
        <ul id="SousCategorie-page" class="collapse" aria-labelledby="SousCategorie-page" data-parent="#side-nav-accordion">
          <li> <a href="sousCategorie/AjoutSousCategotie.html">Ajouter Un Sous Categorie</a> </li>
          <li> <a href="sousCategorie/AfficherSousCategorie.html"> Afficher les Sous Categories</a> </li>
         
        </ul>
      </li>
      <!-- /gestion de produit-->

      <!-- gestion commande -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Commande-page" aria-expanded="false" aria-controls="Commande-page">
          <span><i class='far fa-address-book' style='font-size:18px;color:white'></i>Gestion Des Commandes</span>
        </a>
        <ul id="Commande-page" class="collapse" aria-labelledby="Commande-page" data-parent="#side-nav-accordion">
          <li> <a href="commande/AjoutCommande.html">Ajouter Une commande</a> </li>
          <li> <a href="commande/AfficherCommande.html"> Afficher les commandes</a> </li>
         
        </ul>
      </li>
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#adoption-page" aria-expanded="false" aria-controls="adoption-page">
          <span><i class='far fa-address-book' style='font-size:18px;color:white'> </i> Gestion Des adoptions </span>
        </a>
        <ul id="adoption-page" class="collapse" aria-labelledby="adoption-page " data-parent="#side-nav-accordion">
          <li> <a href="adoptions/ajouteradoption.html">Ajouter Une adoption</a> </li>
          <li> <a href="commande/afficheradoption.html"> Afficher les adoption</a> </li>
         
        </ul>
      </li>

      <!-- /gestion commande -->
     


      <!-- /gestion des promotions/publicité-->

      <!-- gestion des promotions -->
<!--      <li class="menu-item">-->
<!--        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Promotion-page" aria-expanded="false" aria-controls="Promotion-page">-->
<!--          <span><i class='fas fa-donate' style='font-size:18px;color:white'></i>Gestion Des Promotions</span>-->
<!--        </a>-->
<!--        <ul id="Promotion-page" class="collapse" aria-labelledby="Promotion-page" data-parent="#side-nav-accordion">-->
<!--          <li> <a href="../Promotion/AjoutPromotion.html">Ajouter Une Promotions</a> </li>-->
<!--          <li> <a href="../Promotion/ModifierPromotion.html">Modifier Une Promotions</a> </li>-->
<!--          <li> <a href="../Promotion/SupprimerPromotion.html">Supprimmer Une Promotions</a> </li>-->
<!--          <li> <a href="../Promotion/AfficherPromotion.html"> Afficher les Promotions</a> </li>-->
<!--         -->
<!--        </ul>-->
<!--      </li>-->
      <!-- /gestion de promotion -->

      <!-- /gestion des articles/commentaires-->

      <!-- gestion des articles -->
      <li class="menu-item">
        <a href="#" class="has-chevron" data-toggle="collapse" data-target="#Article-page" aria-expanded="false" aria-controls="Article-page">
          <span><i class='fa fa-shopping-cart' style='font-size:18px;color:white'></i>Gestion Des Articles</span>
        </a>
        <ul id="Article-page" class="collapse" aria-labelledby="Article-page" data-parent="#side-nav-accordion">
          <li> <a href="article/AjoutArticle.html">Ajouter Un Article</a> </li>
          <li> <a href="article/AfficherArticle.html"> Afficher les Articles</a> </li>
         
        </ul>
      </li>
      <!-- /gestion des articles -->
    </ul>


  </aside>


  <!-- Main Content -->
  <main class="body-content">
        
    <!-- Navigation Bar -->
    <nav class="navbar ms-navbar">

      <div class="ms-aside-toggler ms-toggler pl-0" data-target="#ms-side-nav" data-toggle="slideLeft">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>

      <div class="logo-sn logo-sm ms-d-block-sm">
        <a class="pl-0 ml-0 text-center navbar-brand mr-0" href="index.html"><img src="assets/img/dashboard/greendash-logo-84x41.png" alt="logo"> </a>
      </div>

      <ul class="ms-nav-list ms-inline mb-0" id="ms-nav-options">
        <li class="ms-nav-item ms-nav-user dropdown">
          <a href="#" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <img class="ms-user-img ms-img-round float-right" src="assets/img/dashboard/yass.jpg" alt="people"> </a>
          <ul class="dropdown-menu dropdown-menu-right user-dropdown" aria-labelledby="userDropdown">
            <li class="dropdown-menu-header">
              <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Welcome, Anny Farisha</span></h6>
            </li>
            <li class="dropdown-divider"></li>
            <li class="ms-dropdown-list">
              <a class="media fs-14 p-2" href="../prebuilt-pages/user-profile.html"> <span><i class="flaticon-user mr-2"></i> Profile</span> </a>
              <a class="media fs-14 p-2" href="../apps/email.html"> <span><i class="flaticon-mail mr-2"></i> Inbox</span> <span class="badge badge-pill badge-info">3</span> </a>
              <a class="media fs-14 p-2" href="../prebuilt-pages/user-profile.html"> <span><i class="flaticon-gear mr-2"></i> Account Settings</span> </a>
            </li>
            <li class="dropdown-divider"></li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="../prebuilt-pages/lock-screen.html"> <span><i class="flaticon-security mr-2"></i> Lock</span> </a>
            </li>
            <li class="dropdown-menu-footer">
              <a class="media fs-14 p-2" href="../prebuilt-pages/default-login.html"> <span><i class="flaticon-shut-down mr-2"></i> Logout</span> </a>
            </li>
          </ul>
        </li>
      </ul>

      <div class="ms-toggler ms-d-block-sm pr-0 ms-nav-toggler" data-toggle="slideDown" data-target="#ms-nav-options">
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
        <span class="ms-toggler-bar bg-primary"></span>
      </div>
      
    </nav>
    <!-- body wrapper -->
    
  <!-- Quick bar -->
  <aside id="ms-quick-bar" class="ms-quick-bar fixed ms-d-block-lg">

    <ul class="nav nav-tabs ms-quick-bar-list" role="tablist">
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Chat" data-title="Chat">
        <a href="#qa-chat" aria-controls="qa-chat" role="tab" data-toggle="tab">
          <i class="flaticon-chat"></i>
          <span class="ms-quick-bar-label">Chat</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Email" data-title="Email">
        <a href="#qa-email" aria-controls="qa-email" role="tab" data-toggle="tab">
          <i class="flaticon-mail"></i>
          <span class="ms-quick-bar-label">Email</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch To-do-list" data-title="To-do-list">
        <a href="#qa-toDo" aria-controls="qa-toDo" role="tab" data-toggle="tab">
          <i class="flaticon-list"></i>
          <span class="ms-quick-bar-label">To-do</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Reminders" data-title="Reminders">
        <a href="#qa-reminder" aria-controls="qa-reminder" role="tab" data-toggle="tab">
          <i class="flaticon-bell"></i>
          <span class="ms-quick-bar-label">Reminder</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Launch Notes" data-title="Notes">
        <a href="#qa-notes" aria-controls="qa-notes" role="tab" data-toggle="tab">
          <i class="flaticon-pencil"></i>
          <span class="ms-quick-bar-label">Notes</span>
        </a>
      </li>
      <li class="ms-quick-bar-item ms-has-qa" role="presentation" data-toggle="tooltip" data-placement="left" title="Invite Members" data-title="Invite Members">
        <a href="#qa-invite" aria-controls="qa-invite" role="tab" data-toggle="tab">
          <i class="flaticon-share-1"></i>
          <span class="ms-quick-bar-label">Invite</span>
        </a>
      </li>

    </ul>

    <div class="ms-configure-qa" data-toggle="tooltip" data-placement="left" title="Configure Quick Access">

      <a href="#">
        <i class="flaticon-hammer"></i>
        <span class="ms-quick-bar-label">Configure</span>
      </a>

    </div>

    <!-- Quick bar Content -->
    <div class="ms-quick-bar-content">

      <div class="ms-quick-bar-header clearfix">
        <h5 class="ms-quick-bar-title float-left">Title</h5>
        <button type="button" class="close ms-toggler" data-target="#ms-quick-bar" data-toggle="hideQuickBar" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="ms-quick-bar-body tab-content">
        <div role="tabpanel" class="tab-pane" id="qa-chat">

          <div class="ms-chat-container">

            <div class="ms-chat-header px-3">
              <div class="ms-chat-user-container media clearfix">
                <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                  <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-chat-user-info mt-1">
                  <h6>Anny Farisha</h6>
                  <a href="#" class="text-disabled has-chevron fs-12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Available
                  </a>
                  <ul class="dropdown-menu">
                    <li class="ms-dropdown-list">
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Busy</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Away</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="media-body">
                          <span>Offline</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <form class="ms-form my-3" method="POST">
                <div class="ms-form-group my-0 mb-0 has-icon fs-14">
                  <input type="search" class="ms-form-input w-100" name="search" placeholder="Search for People and Groups" value="">
                  <i class="flaticon-search text-disabled"></i>
                </div>
              </form>
            </div>

            <div class="ms-chat-body">
              <ul class="nav nav-tabs tabs-bordered d-flex nav-justified px-3" role="tablist">
                <li role="presentation" class="fs-12"><a href="#chats" aria-controls="chats" class="active show" role="tab" data-toggle="tab"> Chats </a></li>
                <li role="presentation" class="fs-12"><a href="#groups" aria-controls="groups" role="tab" data-toggle="tab"> Groups </a></li>
                <li role="presentation" class="fs-12"><a href="#contacts" aria-controls="contacts" role="tab" data-toggle="tab"> Contacts </a></li>
              </ul>

              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active show fade in" id="chats">
                  <ul class="ms-scrollable ms-quickbar-container">
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-away ms-has-new-msg ms-chat-img mr-3 align-self-center">
                        <span class="msg-count">3</span>
                        <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>James Zathila</h6> <span class="ms-chat-time">2 Hours ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Raymart Sandiago</h6> <span class="ms-chat-time">3 Hours ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-offline ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-4.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Heather Brown</h6> <span class="ms-chat-time">12 Hours ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-busy ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-5.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Micheal John</h6> <span class="ms-chat-time">Yesterday</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat ms-deletable p-3 media clearfix">
                      <div class="ms-chat-status ms-status-online ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-4.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>John Doe</h6> <span class="ms-chat-time">3 Days ago</span>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <i class="flaticon-trash ms-delete-trigger"> </i>
                      </div>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="groups">
                  <ul class="ms-scrollable ms-quickbar-container">
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>James Zathila</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <ul class="ms-group-members clearfix mt-3 mb-0">
                          <li> <img src="assets/img/dashboard/rakhan-potik-1.jpg" alt="member"> </li>
                          <li> <img src="assets/img/dashboard/rakhan-potik-2.jpg" alt="member"> </li>
                          <li> <img src="assets/img/dashboard/rakhan-potik-3.jpg" alt="member"> </li>
                          <li class="ms-group-count"> + 12 more </li>
                        </ul>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Raymart Sandiago</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <ul class="ms-group-members clearfix mt-3 mb-0">
                          <li> <img src="assets/img/dashboard/rakhan-potik-3.jpg" alt="member"> </li>
                          <li> <img src="assets/img/dashboard/rakhan-potik-4.jpg" alt="member"> </li>
                        </ul>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>John Doe</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                        <ul class="ms-group-members clearfix mt-3 mb-0">
                          <li> <img src="assets/img/dashboard/rakhan-potik-2.jpg" alt="member"> </li>
                          <li> <img src="assets/img/dashboard/rakhan-potik-3.jpg" alt="member"> </li>
                          <li> <img src="assets/img/dashboard/rakhan-potik-4.jpg" alt="member"> </li>
                          <li class="ms-group-count"> + 4 more </li>
                        </ul>
                      </div>
                    </li>
                  </ul>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="contacts">
                  <ul class="ms-scrollable ms-quickbar-container">
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-5.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>John Doe</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-7.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Raymart Sandiago</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-8.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Micheal John</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Heather Brown</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>Mila Freign</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                    <li class="ms-chat-user-container ms-open-chat p-3 media clearfix">
                      <div class="ms-chat-img mr-3 align-self-center">
                        <img src="assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
                      </div>
                      <div class="media-body ms-chat-user-info mt-1">
                        <h6>James Zathila</h6> <a href="#" class="ms-chat-time"> <i class="flaticon-chat"></i> </a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

            </div>

          </div>

        </div>

        <div role="tabpanel" class="tab-pane" id="qa-email">

          <div class="ms-email-container">

            <div class="ms-qa-options">
              <a href="#" class="btn btn-primary w-100 mt-0 has-icon"> <i class="flaticon-pencil"></i> Compose Email </a>
            </div>

            <ul class="ms-scrollable ms-quickbar-container">
              <li class="p-3  media ms-email clearfix">
                <div class="ms-email-img mr-3 ">
                  <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-email-details">
                  <span class="ms-email-sender">James Zathila</span>
                  <h6 class="ms-email-subject">[WordPress] New Comment</h6> <span class="ms-email-time">2 Hours ago</span>
                  <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                </div>
              </li>
              <li class="p-3  media ms-email clearfix">
                <div class="ms-email-img mr-3 ">
                  <img src="assets/img/dashboard/rakhan-potik-2.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-email-details">
                  <span class="ms-email-sender">John Doe</span>
                  <h6 class="ms-email-subject">[WordPress] New Comment</h6> <span class="ms-email-time">8 Hours ago</span>
                  <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                </div>
              </li>
              <li class="p-3  media ms-email clearfix">
                <div class="ms-email-img mr-3 ">
                  <img src="assets/img/dashboard/rakhan-potik-3.jpg" class="ms-img-round" alt="people">
                </div>
                <div class="media-body ms-email-details">
                  <span class="ms-email-sender">Heather Brown</span>
                  <h6 class="ms-email-subject">[WordPress] New Comment</h6> <span class="ms-email-time">1 Day ago</span>
                  <p class="ms-email-msg">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In in arcu turpis. Nunc</p>
                </div>
              </li>
            </ul>
          </div>

        </div>

        <div role="tabpanel" class="tab-pane" id="qa-toDo">
          <div class="ms-quickbar-container ms-todo-list-container ms-scrollable">

            <form method="POST" class="ms-add-task-block">
              <div class="form-group mx-3 mt-0  fs-14 clearfix">
                <input type="text" class="form-control fs-14 float-left" id="task-block" name="todo-block" placeholder="Add Task Block" value="">
                <button type="submit" class="ms-btn-icon bg-primary float-right"><i class="material-icons text-disabled">add</i></button>
              </div>
            </form>

            <ul class="ms-todo-list">
              <li class="ms-card ms-qa-card ms-deletable">

                <div class="ms-card-header clearfix">
                  <h6 class="ms-card-title">Task Block Title</h6>
                  <button data-toggle="tooltip" data-placement="left" title="Add a Task to this block" class="ms-add-task-to-block ms-btn-icon float-right"> <i class="material-icons text-disabled">add</i> </button>
                </div>

                <div class="ms-card-body">
                  <ul class="ms-list ms-task-block">
                    <li class="ms-list-item ms-to-do-task ms-deletable">
                      <label class="ms-checkbox-wrap ms-todo-complete">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                      </label>
                      <span> Task to do </span>
                      <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                    </li>
                    <li class="ms-list-item ms-to-do-task ms-deletable">
                      <label class="ms-checkbox-wrap ms-todo-complete">
                        <input type="checkbox" value="">
                        <i class="ms-checkbox-check"></i>
                      </label>
                      <span>Task to do</span>
                      <button type="submit" class="close"><i class="flaticon-trash ms-delete-trigger"> </i></button>
                    </li>
                  </ul>
                </div>

                <div class="ms-card-footer clearfix">
                  <a href="#" class="text-disabled mr-2"> <i class="flaticon-archive"> </i> Archive </a>
                  <a href="#" class="text-disabled  ms-delete-trigger float-right"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </li>
            </ul>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="qa-reminder">
          <div class="ms-quickbar-container ms-reminders">

            <ul class="ms-qa-options">
              <li> <a href="#" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-bell"></i> New Reminder </a> </li>
            </ul>

            <div class="ms-quickbar-container ms-scrollable">

              <div class="ms-card ms-qa-card ms-deletable">
                <div class="ms-card-body">
                  <p> Developer Meeting in Block B </p>
                  <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Today - 3:45 pm</span>
                </div>
                <div class="ms-card-footer clearfix">

                  <div class="ms-note-editor float-right">
                    <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                    <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                  </div>

                </div>
              </div>
              <div class="ms-card ms-qa-card ms-deletable">
                <div class="ms-card-body">
                  <p> Start adding change log to version 2 </p>
                  <span class="text-disabled fs-12"><i class="material-icons fs-14">access_time</i> Tomorrow - 12:00 pm</span>
                </div>
                <div class="ms-card-footer clearfix">

                  <div class="ms-note-editor float-right">
                    <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#reminder-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                    <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                  </div>

                </div>
              </div>

            </div>

          </div>
        </div>

        <div role="tabpanel" class="tab-pane" id="qa-notes">

          <ul class="ms-qa-options">
            <li> <a href="#" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-sticky-note"></i> New Note </a> </li>
            <li> <a href="#"> <i class="flaticon-excel"></i> Export to Excel </a> </li>
          </ul>

          <div class="ms-quickbar-container ms-scrollable">

            <div class="ms-card ms-qa-card ms-deletable">
              <div class="ms-card-header">
                <h6 class="ms-card-title">Don't forget to check with the Manager</h6>
              </div>
              <div class="ms-card-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                  vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
                </p>
                <ul class="ms-note-members clearfix mb-0">
                  <li class="ms-deletable"> <img src="assets/img/dashboard/rakhan-potik-2.jpg" alt="member"> </li>
                  <li class="ms-deletable"> <img src="assets/img/dashboard/rakhan-potik-3.jpg" alt="member"> </li>
                </ul>
              </div>
              <div class="ms-card-footer clearfix">

                <div class="dropdown float-left">
                  <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flaticon-share-1"></i> Share
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-scrollable ms-dropdown-list ms-members-list">
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/dashboard/rakhan-potik-4.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>John Doe</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/dashboard/rakhan-potik-5.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Raymart Sandiago</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/dashboard/rakhan-potik-7.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Heather Brown</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="ms-note-editor float-right">
                  <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                  <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </div>
            </div>

            <div class="ms-card ms-qa-card ms-deletable">
              <div class="ms-card-header">
                <h6 class="ms-card-title">Perform the required unit tests</h6>
              </div>
              <div class="ms-card-body">
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vulputate urna in faucibus venenatis. Etiam at dapibus neque,
                  vel varius metus. Pellentesque eget orci malesuada, venenatis magna et
                </p>
                <ul class="ms-note-members clearfix mb-0">
                  <li class="ms-deletable"> <img src="assets/img/dashboard/rakhan-potik-2.jpg" alt="member"> </li>
                </ul>
              </div>
              <div class="ms-card-footer clearfix">

                <div class="dropdown float-left">
                  <a href="#" class="text-disabled" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flaticon-share-1"></i> Share
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-menu-header">
                      <h6 class="dropdown-header ms-inline m-0"><span class="text-disabled">Share With</span></h6>
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="ms-scrollable ms-dropdown-list ms-members-list">
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/dashboard/rakhan-potik-1.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>John Doe</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/dashboard/rakhan-potik-7.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Raymart Sandiago</span>
                        </div>
                      </a>
                      <a class="media p-2" href="#">
                        <div class="mr-2 align-self-center">
                          <img src="assets/img/dashboard/rakhan-potik-8.jpg" class="ms-img-round" alt="people">
                        </div>
                        <div class="media-body">
                          <span>Heather Brown</span>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="ms-note-editor float-right">
                  <a href="#" class="text-disabled mr-2" data-toggle="modal" data-target="#notes-modal"> <i class="flaticon-pencil"> </i> Edit </a>
                  <a href="#" class="text-disabled  ms-delete-trigger"> <i class="flaticon-trash"> </i> Delete </a>
                </div>

              </div>
            </div>

          </div>

        </div>

        <div role="tabpanel" class="tab-pane" id="qa-invite">

          <div class="ms-quickbar-container text-center ms-invite-member">
            <i class="flaticon-network"></i>
            <p>Invite Team Members</p>
            <form method="POST">
              <div class="ms-form-group">
                <input type="text" placeholder="Member Email" class="form-control" name="invite-email" value="">
              </div>
              <div class="ms-form-group">
                <button type="submit" name="invite-member" class="btn btn-primary w-100">Invite</button>
              </div>
            </form>
          </div>

        </div>

      </div>

    </div>

  </aside>

  <!-- MODALS -->

  <!-- Reminder Modal -->
  <div class="modal fade" id="reminder-modal" tabindex="-1" role="dialog" aria-labelledby="reminder-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white"> New Reminder</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <form method="POST">

          <div class="modal-body">

            <div class="ms-form-group">
              <label>Remind me about</label>
              <textarea class="form-control" name="reminder"></textarea>
            </div>

            <div class="ms-form-group">
              <span class="ms-option-name fs-14">Repeat Daily</span>
              <label class="ms-switch float-right">
                <input type="checkbox">
                <span class="ms-switch-slider round"></span>
              </label>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="ms-form-group">
                  <input type="text" class="form-control datepicker" name="reminder-date" value="" />
                </div>
              </div>
              <div class="col-md-6">
                <div class="ms-form-group">
                  <select class="form-control" name="reminder-time">
                    <option value="">12:00 pm</option>
                    <option value="">1:00 pm</option>
                    <option value="">2:00 pm</option>
                    <option value="">3:00 pm</option>
                    <option value="">4:00 pm</option>
                  </select>
                </div>
              </div>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Reminder</button>
          </div>

        </form>

      </div>
    </div>
  </div>
   <!-- modifier adop -->


   <button><a href="afficheradoption.php">Retour à la liste</a></button>
   <div> <?php echo $error; ?> </div>
   

    <form  action="" method="POST" enctype="multipart/form-data">
      <table align="center">
        <tr>
          
<td >
<label for="id"> Id :</label>
</td>

  <td>
  <input type="text" name="id"  id="id" value="<?php echo $oldadoption['id'];?>" disabled> 
<?php echo $oldadoption['id'];   ?>
</td>

 </tr>




 <tr>  <td><label for="validationCustom10">Espece</label> </td>
  <td> <select   class="select"   id="espece" name="espece"    onchange="myFunction(this.id,'race')">
    <option  value="<?php echo $oldadoption['espece'];?> "><?php echo $oldadoption['espece'];?></option>
  <option  value="chien">chien</option>
  <option    value="chat">chat</option>
  <option  value="oiseau">oiseau</option> 
 
</select>

</td>
 </tr>
  
 <tr>
     <td> <label for="validationCustom10">Race</label>  </td>
   <td> <select   id="race"  name="race"  >
        <option  value=" <?php echo $oldadoption['race'];?>"><?php echo $oldadoption['race'];?></option> 
<option>
  

</option>

 
</select>

</td>

 </tr>
        
<tr>
<td> <label >sexe</label>    </td>
 <td> <input type="radio" name="sexe"  value="mascul"
 <?php
if($oldadoption['sexe']=='mascul')
{
echo"checked";

}
?> >  mascul
 </td>
<td><input type="radio" name="sexe" id="sexe"   value="feminin"
 <?php
if($oldadoption['sexe']=='feminin')
{
echo"checked";

} 
?> >feminin  </td>
</tr>

       

<tr>
  
<td> <label> age</label></td>
<td><input type="radio" name="age"    value="BéBé"
 <?php
if($oldadoption['age']=='BéBé')
{
echo"checked";

} 
?> >bebe  </td>
<td><input type="radio" name="age"    value="junior"
 <?php
if($oldadoption['age']=='junior')
{
echo"checked";

} 
?> >junior </td>


 
  
 
<td><input type="radio" name="age"   value="Adulte"
 <?php
if($oldadoption['age']=='Adulte')
{
echo"checked";

} 
?> >adulte  </td>

<td><input type="radio" name="age"    value="senior"
 <?php
if($oldadoption['age']=='senior')
{
echo"checked";

} 
?> >senior </td>

</tr>


<tr>
  <td>
    


  <label> region</label>
  </td>
  <td>
    
<select class="select"  name="region"   >
        <option  value="<?php echo $oldadoption['region'];?> "><?php echo $oldadoption['region'];?></option>
        <option  value=" tunis"> Tunis </option> 
          <option  value=" sfax"> sfax </option> 
<option>
  

  </td>



</tr>
 </table>
 <br>
 <table  align="center">
  <td>
    
  <label for="img">Image pour l'article</label> </td>
  <td>
  <input type="file" name="img1" id="img1" class="form-control"  required="required"  accept="image/png, image/jpeg"  >   

  </td>


</tr>
  
 <tr> 
  <td><input type="submit" value="modifier" name="modifier">   </td>

<td>
  <input type="reset" value="Annuler">   
 </td>

 </tr>
 </table>
 



     
      


    </form>
  <?php  



  ?>
  <!-- Notes Modal -->
  <div class="modal fade" id="notes-modal" tabindex="-1" role="dialog" aria-labelledby="notes-modal">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-header bg-secondary">
          <h5 class="modal-title has-icon text-white" id="NoteModal">New Note</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>

        <form>

          <div class="modal-body">

            <div class="ms-form-group">
              <label>Note Title</label>
              <input type="text" class="form-control" name="note-title" value="">
            </div>

            <div class="ms-form-group">
              <label>Note Description</label>
              <textarea class="form-control" name="note-description"></textarea>
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-secondary shadow-none" data-dismiss="modal">Add Note</button>
          </div>

        </form>

      </div>
    </div>
  </div>



   <!--            xttttttt          -->



 

  <!-- SCRIPTS -->
  <!-- Global Required Scripts Start -->
  <script src="assets/js/jquery-3.3.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/perfect-scrollbar.js"> </script>
  <script src="assets/js/jquery-ui.min.js"> </script>
  <!-- Global Required Scripts End -->

  <!-- Greendash core JavaScript -->
  <script src="assets/js/framework.js"></script>

  <!-- Settings -->
  <script src="assets/js/settings.js"></script>
</body>


<!-- Mirrored from slidesigma.com/themes/html/greendash/pages/product/product-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 14 Apr 2020 10:13:48 GMT -->
</html>
</main>
</body>
</html>