<?php

require_once("../../controller/reclamationC.php");
include "header.php";
$id = $_SESSION["id"];

$res = getRec($id);


?>



<div class="content pt1"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_6">
            <h2>Mes Reclamation</h2><br>
            <div class="map">

                <table  border="2" style="border-color: black">
                    <tr>
                        <th>description</th>
                        <th>date</th>
                        <th>type</th>
                        <th>état</th>
                    </tr>
                    <?php

                    foreach($res as $row)
                    {
                        echo "<tr>";
                        echo "<td>$row[description]</td>";
                        echo "<td>$row[date]</td>";
                        echo "<td>$row[type]</td>";
                        if($row['etat']==0){ echo "<td><img src='images/error.png'></td>";}else { echo "<td><img src='images/valid.png'></td>";}
                        echo "</tr>";
                    }

                    ?>
                </table>


                <div class="clear"></div>
            </div>


        </div>
    </div>

    </form>

</div>
</div>
</div>
<!--=======content================================-->



<!--==============================footer=================================-->

<?php include "footer.php";?>