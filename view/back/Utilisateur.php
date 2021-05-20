<?php

require_once("../../controller/UserC.php");
session_start();
if(isset($_SESSION["sortName"]))
{
    $res =  afficherUserbynom();
}
else
{
    $res =  afficherUser();
}


require 'header.php';
?>



    <!--            xttttttt          -->








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
                    <div class="ms-panel-body"  ><p>
                        <form action="../../controller/UserC.php" method="post">
                            <input type="submit" value="par nom" name="sortName">
                        </form>
                        </p>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                            <tr>
                                <th>picture</th>
                                <th>nom</th>
                                <th>email</th>
                                <th>password</th>
                                <th>adresse</th>
                                <th>phone</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody id="table1">
                            <?php
                            foreach($res as $row){
                                echo "<tr>";
                                echo "<td><img src='../../picture/$row[picture]'> </td>";
                                echo "<td>$row[nom]</td>";
                                echo "<td>$row[email]</td>";
                                echo "<td>$row[password]</td>";
                                echo "<td>$row[adresse]</td>";
                                echo "<td>$row[phone]</td>";
                                echo "<td><a href='../../controller/UserC.php?supprimer=$row[id_user]'>supprimer</a></td>";
                                echo "</tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                        <input type="hidden" id="name_order" value="asc">
                    </div>
                </div>
            </div>
        </div>
    </div>





    <!--            xttttttt          -->

<?php require 'footer.php'; ?>

