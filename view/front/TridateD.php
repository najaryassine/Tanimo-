
<!--==============================header=================================-->

<?php  
include "../../controller/boutiqueC.php";
$boutique= new BoutiqueC();
$listeboutique=$boutique->afficherBoutiques();

include "header.php"
?>
<section>
<div class="page1_block nb">
<div class="small-container">
            <div class="row row-2">
                <h2>Liste des boutique  : </h2>
               
            </div>
            <div class="row">
                <!--- start of script --->                                                                  
                <?PHP
                foreach($listeboutique as $row){
            ?> 
                <div class="col-4">
                <div class="page-btn">
                <a href="single-product.php"><img src="../back/assets/img/<?PHP echo $row['Image']; ?>"></a> <br>
                <hr>
                <h5 align="center">Nom : <?PHP echo $row['Nom']; ?></h5>
                <h5 align="center">Adresse : <?PHP echo $row['Adresse']; ?></h5> 
                <p align="center">Email: <?PHP echo $row['Email']; ?></p> <br>
                
                  <hr>  
                <div class="ripple-container"></div>
                </button> </h5>
                    </div>
                </div>
                <!--- end of script-->
                <?PHP
                }
            ?>
                <margin-left>
            </div>
            
            <div class="page-btn">
            <!----- script ----->
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>&#8594;</span>
            </div>
            
        </div>
  <!-- gestion commande -->
              </div>
              </section>


       
<?php
include "../../controller/eventC.php";
$event= new EventC();
$listeevent=$event->trierdate();
?>
<section>

<div class="page1_block nb">
<div class="small-container">
<h2 class="ic1">Nos evenement</h2>
       <a href="TridateD.php" class="btn">Date Debut</a>
       <a href="TridateF.php" class="btn">Date Finale</a>
            <div class="row row-2"> </div>
            <div class="row">
                <!--- start of script --->                                                                  
                <?PHP
                foreach($listeevent as $row){
            ?> 
                <div class="col-4">
                <div class="page-btn">
                <a href="single-product.php"><img src="../../back/assets/img/<?PHP echo $row['Image']; ?>"></a> 
                <hr>
                <h5 align="center">Titre : <?PHP echo $row['Titre']; ?></h5>
                <p align="center">DateD : <?PHP echo $row['DateD']; ?></p> 
                <p align="center">DateF: <?PHP echo $row['DateF']; ?></p> 
                
                  <hr>  
                <div class="ripple-container"></div>
                </button> </h5>
                    </div>
                </div>
                <!--- end of script-->
                <?PHP
                }
            ?>
                <margin-left>
                  
            </div>
            
            <div class="page-btn">
            <!----- script ----->
                <span>1</span>
                <span>2</span>
                <span>3</span>
                <span>&#8594;</span>
            </div>
            <a href="pdf.php" class="btn">Enregistrer les évenments</a>
        </div>
        
  <!-- gestion commande -->
              </div>
              </div>
              </section>
  

  
  
<!--=======content================================-->


<!--==============================footer=================================-->

<?php include "footer.php"?>