<?php
set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
require 'controller/vetController.php';

if ($_POST) {
  $nom = $_POST['nom'];
  $prenom = $_POST['prenom'];
  $mail = $_POST['mail'];
  $telephone = $_POST['telephone'];

  $name = $_FILES['image']['name'];
  $target_dir = "../../../../upload/";
  $target_file = $target_dir . basename($_FILES["image"]["name"]);

  // Select file type
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
  $extensions_arr = array("jpg","jpeg","png","gif");

  if( in_array($imageFileType,$extensions_arr) ){
 
    // Convert to base64 
    $image_base64 = base64_encode(file_get_contents($_FILES['image']['tmp_name']) );
    $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
    // Insert record
    $vet = new Veterinaire($nom, $prenom, $mail, $telephone, $image);
    VetController::modifierVet($vet, $_GET['id']);
  
    // Upload file
    move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);
  }

?>
  <a href="../vetGestion.php">Acceuil</a>
<?php
  echo "veterinaire modifié";
}

?>