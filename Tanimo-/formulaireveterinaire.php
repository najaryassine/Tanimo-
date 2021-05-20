<?php
    include '../../controller/boutiqueC.php';
    include '../../controller/mesFuncTable.php';

    
    
    $id = $_GET["id"];
    if ($id == 0) {
        $user = getNewUser();
        $action = "CREATE";
        $libelle = "Creer";
    } else {
        $user = ReadBoutique($id);
        $action = "UPDATE";
        $libelle = "Mettre a jour";
    }
    
    


?>

<html>
<header>
   
</header>
<body>

        
    <form action="../../../controller/createUpdate.php" method="get">
    <p> 
        <a href="gererlesboutique.php">Liste des boutiques</a>

        <input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
        <input type="hidden" name="action" value="<?php echo $action;  ?>"/>
        
         <div>
            <label for="nom">nom :</label>
            <input type="nom" id="nom" name="nom" value="<?php echo $user['nom'];  ?>">
        </div>
        <div>
            <label for="budget">titre :</label>
            <input type="budget" id="budget" name="budget" value="<?php echo $user['budget'];  ?>">
        </div>
        <div>
            <label for="gearnt">gearnt :</label>
            <textarea id="gearnt" name="gearnt" placeholder="<?php echo $user['gearnt'];  ?>"></textarea>
        </div>
        <div>
            <label for="description">description :</label>
            <textarea id="description" name="description" placeholder="<?php echo $user['description'];  ?>"></textarea>
        </div>
        <div>
            <label for="adresse">adresse :</label>
            <input id="adresse" name="adresse" placeholder="<?php echo $user['adresse'];  ?>"></textarea>
        </div>
        <div class="button">
            <button type="submit"><?php echo $libelle;  ?></button>
        </div>
    </p>
    </form>
    <br>

    <?php if ($action!="CREATE") { ?>
    <form action="../../../controller/createUpdate.php" method="get">
        <input type="hidden" name="action" value="DELETE"/>
        <input type="hidden" name="id" value="<?php echo $user['id'];  ?>"/>
        <p>
        <div class="button">
            <button type="submit">Supprimer</button>
        </div>
        </p>
    </form>
    <?php } ?>

</body>
</html>