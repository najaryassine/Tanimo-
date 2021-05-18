<?php

require_once("../controller/UserC.php");

$res =  afficherUser();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="AllUser.php">Home</a></li>
    </ul>
  </div>
</nav>
  
<div class="container">
  <h2>Utilisateurs</h2>
   <p><a href="AddUser.php"><button type="button" class="btn btn-success">Ajouter utilisateur</button></a></p>           
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>nom</th>
        <th>email</th>
        <th>password</th>
		<th>Action</th>
      </tr>
    </thead>
	<?php
foreach($res as $row){
echo "<tr>";
echo "<td>$row[nom]</td>";
echo "<td>$row[email]</td>";
echo "<td>$row[password]</td>";
echo "<td><a href='modifierUser.php?idUser=$row[id_user]'>modifier</a> <a href='../controller/UserC.php?supprimer=$row[id_user]'>supprimer</a></td>";
echo "</tr>";
}
?>
  </table>
</div>

</body>
</html>
