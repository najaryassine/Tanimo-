<?php
  //require 'connect.php';
  $objectPdo = new PDO('mysql:host=localhost;dbname=projet_web', 'root', '');
  $pdoStat = $objectPdo->prepare('SELECT Titre,Description,DateD,DateF,Image FROM event ORDER BY Id ASC ');
  $executeIsOK = $pdoStat->execute();
  $listeEvents= $pdoStat->fetchAll(); 

 ?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pet Club</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body onload="window.print();">
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-xs-12">
        <h2 class="page-header">
          <br>
          <i class="fa fa-globe"></i> Liste des evenements
          <small class="pull-right"></small>
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    <div class="row invoice-info">
      <div class="col-sm-4 invoice-col">
        <br>
        From
        <address>
          <strong>Pet Club</strong><br>
          Tunis<br>
          Phone: (+216) 50.048.691<br>
          Email: Pet@gmail.tn

        </address>
      </div>
      <div class="row">
                <div class="col-lg-12">
                  
                        <img src="../images/favicon-0" alt="#">
                     
                    </div>
                </div>
      <br>
      <!-- /.col -->
      
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
  <thead>
    <tr>
      <th scope="col"> Titre</th>
      <th scope="col">Description</th>
      <th scope="col">Date Debut</th>
      <th scope="col">Date Finale</th>
      <th scope="col">Image</th>

    </tr>
  </thead>
  <tbody>
          <?php foreach ($listeEvents as $listeEvents): ?> 
              <tr>
                <td><?PHP echo $listeEvents['Titre']; ?></td>
                <td><?PHP echo $listeEvents['Description']; ?></td>
                <td><?PHP echo $listeEvents['DateD']; ?></td>
                <td><?PHP echo $listeEvents['DateF']; ?></td>
                <td><img style="width: 200px; height: 200px;" src="../back/assets/img/<?PHP echo $listeEvents['Image']; ?>"></td>


                <td>
      
                </td>
                
              </tr>
                  <?php endforeach; 
                  ?>
    </tbody>
</table>

    <!-- /.row -->

    <div class="row">
      <!-- accepted payments column -->
      
      <!-- /.col -->
      
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->

</body>
</html>