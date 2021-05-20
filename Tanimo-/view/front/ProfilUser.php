
<?php
include_once '../../model/don.php';
include_once '../../controller/donC.php';
include_once  'C:/xampp/htdocs/Tanimo-/model/User.php';
include_once  'C:/xampp/htdocs/Tanimo-/controller/UtilisateurC.php';
include "header.php";
$donC=new donC();
$listeDon=$donC->afficherDonUser($_SESSION['id']);
if (isset($_GET['key'])){
    $listeDon = $donC->rechercherdon($_GET['key']);
}
$utilisateurC = new UtilisateurC();

$don = null ;
$donC = new donC();

if( isset($_POST["type"]) && isset($_POST["sexe"]) && isset($_POST["couleur"]) && isset($_POST["pelage"]) && isset($_POST["age"])  && isset($_POST["race"]))
{
    if (! empty($_POST["type"]) && ! empty($_POST["sexe"]) && ! empty($_POST["couleur"]) && ! empty($_POST["pelage"]) && ! empty($_POST["age"] ) &&  !empty($_POST["race"] ))
    {
        if (isset($_FILES['img'])) {
            $photos = $_FILES['img']['name'];
            $upload = "updon/" . $photos;
            move_uploaded_file($_FILES['img']['tmp_name'], $upload);




            $don = new don ($_POST["type"] , $_POST["sexe"], $_POST["couleur"] , $_POST["pelage"], $_POST["age"],$_POST["race"],$photos, $_SESSION['idUser']);
            $donC->ajouterDon($don) ;


        }
        else
            $error = "missing ";
    }
}

?>

<!--==============================header=================================-->






<span class="material-icons">
question_answer
</span>

<button type="button" class="icon-button">  <a href="chat.php">Chat </a> </button>



<style type="text/css">

    .main{
        background-color: rgd(0,0,0,0.5);
        width: 800px;
        margin:auto;


    }
    form{padding: 10px;}
    input {

        border : none;
        appearance: none;
        background : #f2f2f2;
        padding: 12px;
        border-radius: 3px;
        width: 150px;




    }
    .button{

        background-color: #ff6a19;
        border:none;
        color: white;
        padding:15px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin:4px 2px;
        border-radius: 2rem;

    }
    .content-table{
        border-collapse: collapse;
        margin: 25px 0;
        font-size: 0.6cm;
        min-width: 400px;



    }
    .content-table thead tr {
        background-color: #009879;
        color: #ffffff;
        text-align: left;
        font-weight: bold;

    }
    .content-table th ,
    .content-table td {
        padding: 12px 15px;
    }
    .tableau-style{

        border-collapse: collapse;
        min-width: 400px;
        width: auto;
        box-shadow: 0 5px 5px rgba(0,0,0,0.15);
        cursor: pointer;
        margin: 100px auto;
        border : 2px solid midnightblue;


    }
    thead tr {

        background-color: midnightblue;
        color: #fff;
        text-align: left;



    }
    th,td
    {
        padding: 15px 20px;


    }
    tbody tr, td, th {
        border : 1px solid #ddd;

    }
    .icon-button{


        font-family: "Roboto" , sans-serif ;
        font-size: 18px;
        font-weight: bold;
        background : #1E90FF;
        width: 160px;
        padding: 20px;
        text-align: center;
        text-transform: uppercase;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);

    }

</style>
<!--==============================afficher don=================================-->
<div class="main">
    <div class="container_12">
        <div class="grid_6">
<form>
    <tr>
        <td>
            <div align="center"><input  type="text" name="key" class="col-x1"  placeholder="Search....">
                <button type="submit">Search</button>
            </div>
        </td>
    </tr>
</form>

<h1> Mes dons </h1>

<?PHP
foreach($listeDon as $don) :
    ?>
    <table border="2"  ">

    <tr>
        <th> type </th>
        <th> sexe </th>
        <th> couleur</th>
        <th>pelage</th>
        <th> age </th>
        <th> race </th>
        <th> image </th>
        <th> supprimer </th>
        <th> modifier </th>


    </tr>

    <tr>
        <td><h4 class="card-title" style="color: black"><?PHP echo $don['type']; ?></h4>
        <td><p class="card-text"><?PHP  echo $don['sexe']; ?> </p> </td>
        <td>  <p class="card-text"><?PHP echo $don['couleur']; ?> </p>  </td>
        <td>   <p class="card-text"><?PHP echo $don['pelage']; ?> </p>   </td>
        <td> <p class="card-text"><?PHP echo $don['age']; ?> </p> </td>
        <td>   <p class="card-text"><?PHP echo $don['race']; ?> </p>  </td>
        <td> <img  src="../back/assets/img/<?PHP echo $don['image']; ?>"alt="aaaa" > </td>


        <td>
            <form method="POST" action="supprimerDon.php">
                <input type="submit" name="supprimer" value="supprimer">
                <input type="hidden" value = <?php  echo $don['id']; ?> name="id">

            </form>

        </td>
        <td>
            <a href="modifierdon.php?id=<?PHP echo $don['id']; ?>"> Modifier </a>
        </td>

    </tr>


    </div>


<?php endforeach; ?>



<!--==============================ajouter don=================================-->








                    <form action=" " method="POST" enctype="multipart/form-data">
                        <table align="center">
                            <tr>

                                <td>
                                    <label for="type">type: </label>
                                </td>
                                <td>
                                    <label for="sexe">sexe: </label>
                                </td>
                                <td>
                                    <label for="couleur">couleur: </label>
                                </td>
                                <td>
                                    <label for="pelage">pelage: </label>
                                </td>
                                <td>
                                    <label for="age">age: </label>
                                </td>
                                <td>
                                    <label for="race">race: </label>
                                </td>

                            </tr>

                        </table>
                    </form>



                            <div class="main">
                                <div class="container_12">
                                    <div class="grid_6">
                                        <h2>ajouter don  </h2><br>

                                        <form  method="POST" enctype="multipart/form-data">

                                            <div id="type">

                                                <h2 class="type"> Type</h2>
                                                <input  class="type" type="text" name="type">
                                                <h2 class="sexe">sexe</h2>
                                                <input class="sexe" type="text" name="sexe">
                                                <br>
                                                <h2 class="couleur">couleur</h2>
                                                <input class="couleur" type="text" name="couleur">
                                                <h2 class="pelag">Pelage</h2>

                                                <input class="pelage" type="text" name="pelage">
                                                <h2 class="age">age</h2>
                                                <input class="age" type="age" name="age">


                                                <h2 class="race">race</h2>
                                                <input class="race" type="text" name="race">
                                                <br>



                                                <h2 for="img">Image </h2>

                                                <input type="file" name="img" class="form-control" id="img"   accept="image/png, image/jpeg">

                                                <button class="button" name="upload" type="submit">ajouter</button>




                                            </div>




                                        </form>



                                    </div>
                                </div>
                            </div>








<!--==============================footer=================================-->

<?php include "footer.php" ?>


