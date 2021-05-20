<?php
include "header.php";
?>

<div class="content pt1"><div class="ic"></div>
    <div class="container_12">
        <div class="grid_6">
            <form action="../../controller/UserC.php" method="post">
                <h2>User profile</h2> <h2>&nbsp;<input type="submit" value="déconnexion" name="dec"></h2><br>
            </form>
            <div class="map">
                <form  method="post" action="../../controller/UserC.php">
                    <table>
                        <tr>
                            <td>picture</td>
                            <td><img src="../../picture/<?php echo $_SESSION['picture'];?>"  width="100px"><br/> <input type="file" name="pic"> </td>
                        </tr>

                        <tr>
                            <td>nom</td>
                            <td><input type="text" value="<?php echo $_SESSION['nom']; ?>" name="nom"></td>
                        </tr>
                        <tr>
                            <td>email </td>
                            <td><input type="text" value="<?php echo $_SESSION['email']; ?>" name="email"></td>
                        </tr>
                        <tr>
                            <td>password &nbsp;</td>
                            <td><input type="text" value="<?php echo $_SESSION['password']; ?>" name="password"></td>
                        </tr>
                        <tr>
                            <td>adresse </td>
                            <td><input type="text" value="<?php echo $_SESSION['adresse']; ?>" name="adr"></td>
                        </tr>
                        <tr>
                            <td>phone </td>
                            <td><input type="text" value="<?php echo $_SESSION['phone']; ?>" name="tel"></td>
                        </tr>
                        <tr>
                            <td> </td>
                            <td><br><input type="submit" value="modifier" name="modiff"></td>
                        </tr>
                    </table>
                </form>

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