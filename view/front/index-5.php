<?php
include "header.php";
?>


<div class="content pt1"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_6">
            <h2>Réclamations</h2><br>
            <div class="map">
                <img src="images/reclamation.jpg">

            </div>
        </div>
        <div class="grid_5 prefix_1">
            <h2 class="ic1">Réclamation Form</h2>
            <form  method="post" action="../../controller/reclamationC.php">
                <label class="type">Type</label>
                <select name="type">
                    <option value="service">service</option>
                    <option value="produit">produit</option>
                    <option value="prix">prix</option>
                </select>
                <br >
                <br >
                <label class="message">
                    <textarea name="descc"></textarea>
                    <br class="clear">

                    <div class="clear"></div>
                    <button  type="submit" name="submit"> envoyer </button>
                    <div class="clear"></div>
        </div></form>

    </div>
</div>
</div>
<!--=======content================================-->



<!--==============================footer=================================-->

<?php include "footer.php";?>