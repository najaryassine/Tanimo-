
<?php
include_once '../../model/Article.php';
include_once '../../controller/ArticleC.php';

include "../../controller/CategorieC.php";
include "../../controller/SousCategorieC.php";

session_start();

$articleC=new ArticleC();
if (isset($_GET['id'])) {
    $article = $articleC->recupererArticleById($_GET['id']);
}
include "header.php";
?>
<!--=======content================================-->

<div class="content page1">

    <div class="container_12">

        <table align = 'center'>

            <tr>
                <td><img src="../../uploads/<?PHP echo $article['image']; ?>" alt="aaaa"></td>
            </tr>

            <tr>
                <th>Nom : </th>
                <th><p>   <?PHP echo $article['name']; ?> </p></th>
            </tr>

            <tr>
                <th>Prix</th>
                <td><?PHP echo $article['prix']; ?></td>
            </tr>

            <tr>
                <th>Categorie</th>
                <td><?PHP echo $article['categorie']; ?></td>
            </tr>

            <tr>
                <th>SousCategorie</th>
                <td><?PHP echo $article['souscategorie']; ?></td>

            </tr>

            <tr>
                <td>
                    <form method="GET" action="AfficherArticles.php">
                    <button type="submit" class="btn btn-light">Back</button>
                    </form>
                </td>

                <td>

                    <button type="submit" class="btn btn-success"><a href="panier.php?action=ajout&amp;l=<?php echo $article['id_art']; ?>&amp;q=1&amp;p=<?php echo $article['prix']; ?>">Commander</a></button>


                </td>
            </tr>


        </table>

    </div>

</div>

<?php include "footer.php";?>