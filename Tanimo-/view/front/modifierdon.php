<?php

include_once '../../model/don.php';
include_once '../../controller/donC.php';
require_once 'c:/xampp/htdocs/Tanimo-/config/config.php';

include "header.php";

 $error = "";
 $donc = new donc();
 
 if(isset($_GET['id']))
  { $oldDon = $donc->recupererdon($_GET['id']); }
	


 

  if(isset($_POST['modifier']))
  {

  $check=$_FILES["img"]["tmp_name"];
 if($_FILES['img']['size'] !==0)
 {
 
   
 $uploaddir = "../back/assets/img//";
 $uploadfile = $uploaddir . basename($_FILES['img']['name']);
  move_uploaded_file($_FILES['img']['tmp_name'], $uploadfile);
    $image = $_FILES['img']['name'];


   }
   else 
          {$image = $oldDon["image"];}
           $don = new don($_POST['type'],$_POST['sexe'],$_POST['couleur'],$_POST['pelage'],$_POST['age'],$_POST['race'],$image ,$_SESSION['id']);

 

 

  $id= $_GET['id'];
  $donc->modifierDon($don,$id);

   header('refresh:15;url=ProfilUser.php');




 }


	
?>


<!--==============================header=================================-->
 
 
     <html>
	   <head>
		 <title>Modifier Utilisateur</title>
		 <meta charset="UTF-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
	   </head>
	   <body>
		 <button><a href="ProfilUser.php">Retour à la liste</a></button>
        <hr>
     <?php  
     
   

     ?>
    
		 <?php  echo $error;   ?>
 
		 <form action=" " method="POST" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    
                    <td>
                        <label for="id">Id: </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $oldDon['id']; ?>" disabled>
					</td>
				</tr>
				<tr>
					<td>
						<label for="type">type:
						</label>
					</td>
					<td>
						<input type="text"   id="type" name="type"    value = "<?php echo $oldDon['type']; ?>">
					</td>
				</tr>
                <tr>
                    <td>
                        <label for="sexe">sexe:
                        </label>
                    </td>
                    <td><input type="text"  id="sexe"  name="sexe" maxlength="20" value = "<?php echo $oldDon['sexe']; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="couleur">couleur :
                        </label>
                    </td>
                    <td>
                        <input type="text"   id="couleur"  name="couleur"  value = "<?php echo $oldDon['couleur']; ?>">
                    </td>
                </tr>
                <tr>
                     
                    <td>
                        <label for="pelage">pelage:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="pelage" id="pelage" value = "<?php echo $oldDon['pelage']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="age">age:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="age" id="age" value = "<?php echo $oldDon['age']; ?>">
                    </td>
                  </tr>
                    <br>
                    <td>
                        <label for="race">race:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="race" id="race" value = "<?php echo $oldDon['race']; ?>">
                    </td>

                </tr>
                
           
                	
                	<td>
                		<label for="img">Image pour l'article</label>
                	</td>
                	<td>
                		<input type="file" name="img" class="form-control" id="img" required="required"  accept="image/png, image/jpeg"  value="<?php echo $oldDon['image'];?>">   


                	</td>
                </tr>
                     <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="modifier" name="modifier"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler" >
                    </td>
                </tr>
          
            </table>
        </form>
		 
	 
 

<!--==============================footer=================================-->

         <?php include "footer.php"?>


