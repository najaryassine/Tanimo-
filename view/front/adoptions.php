<?php

include_once '../../controller/adoptionc.php';
include_once '../../model/adoption.php';
$adoptionc = new adoptionc();
$listAdoption=$adoptionc->afficheradoption();
if (isset($_GET['key'])){
    $listAdoption = $adoptionc->rechercherAdop($_GET['key']);
}
if (isset($_GET['key1'])){
    $listAdoption = $adoptionc->trierreg();
}

include "header.php";
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
    <tbody>
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
        <td> <img src="../back/assets/img/<?PHP  echo $adop['image'];   ?>"    alt="aaaa" width="300px" height="200px"></td>



        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
<!--==============================ajouter don=================================-->


<!--==============================footer=================================-->

<?php include "footer.php";?>