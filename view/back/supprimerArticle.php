<?PHP
include_once '../../controller/ArticleC.php';

$articleC=new ArticleC();

if (isset($_GET['id'])){
    $articleC->supprimerArticle($_GET['id']);
    header('Location:AfficherArticles.php');
}
