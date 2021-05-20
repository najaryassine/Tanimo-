<?php

require_once("../model/User.php");

$id = $_GET["idUser"];
$a = new User();
$res =  $a->consultUser($id);
$row=$res->fetch();

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
  <h1>modifier Utilisateur</h1>
  <form action="../controller/UserC.php" method="POST">
	<div class="form-group">
		<input type="hidden" name="id" value="<?php echo $id ?>">
      <label for="email">Nom:</label>
      <input type="text" class="form-control" id="nom" placeholder="Enter nom" name="nom" value="<?php echo $row["nom"] ?>">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" value="<?php echo $row["email"] ?>">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pwd" value="<?php echo $row["password"] ?>">
    </div>
    <button type="submit" class="btn btn-default" name="mod">Submit</button>
  </form>
</div>

</body>
</html>
