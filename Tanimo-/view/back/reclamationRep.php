<?php

require_once("../../controller/reclamationC.php");

$res =  afficherRec();

$id = $_GET['id'];

$r = RecById($id);

$row=$r->fetch();
require 'header.php';
?>




   <!--            xttttttt          -->



<form action="../../controller/reclamationC.php" method="post" enctype="multipart/form-data" >




        <div class="ms-content-wrapper"  >
          <div class="row">

                <div class="col-md-12" >
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb pl-0">
                      <li class="breadcrumb-item"><a href="#"><i class="material-icons">home</i> Home</a></li>
                    </ol>
                  </nav>
                </div>





            <div class="col-xl-6 col-md-12"  >
              <div class="ms-panel ms-panel-fh" style="width:1000px ; margin-left: 120px;"  >
                <div class="ms-panel-body"  >
				<input type="hidden" value="<?php echo $row['idreclamation'];?>" name="idrec">
                  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Date</th> <th><?php echo $row['date'];?></th>
      </tr>
	   <tr>
        <th>User</th> <th><?php echo $row['user_id'];?></th>
      </tr>
	   <tr>
        <th>Description</th> <th><?php echo $row['description'];?></th>
      </tr>
	   <tr>
        <th>Réponse</th> <th><textarea name ="repo"></textarea></th>
      </tr>
	  <tr>
        <th></th> <th><input type="submit" value="envoyer" name="rep"></th>
      </tr>
    </thead>
  </table>
                </div>
              </div>
            </div>
          </div>
        </div> 
</form>




 <!--            xttttttt          -->



<?php require 'footer.php'; ?>
