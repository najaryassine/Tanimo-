<?php


require_once 'C:/xampp/htdocs/monprojet/Tanimo--master/config/config.php';
include_once '../../../controller/adoptionc.php';
include_once '../../../model/adoption.php';


if(isset($_POST["id"]))
{
$oldadoption = $adoptionc->recupererAdoption($_POST['id']);

$check=$_FILES["img1"]["tmp_name"];
if($_FILES['img1']['size'] !== 0)
{
$uploaddir = "up/";
 $uploadfile = $uploaddir . basename($_FILES['img1']['name']);
  move_uploaded_file($_FILES['img1']['tmp_name'], $uploadfile);
    $image = $_FILES['img1']['name'];
 
}else {$image = $oldadoption["image"];}
    $adoption = new adoption($_POST['espece'],$_POST['race'],$_POST['age'],$_POST['sexe'],$_POST['region'],$image);
    $id= $oldadoption['id'];

    $adoptionc->modifierAdoption($adoption,$_GET['id']);
      header('refresh:5;url=afficheradoption.php');
      var_dump("coucoi");
  
  


}







?>