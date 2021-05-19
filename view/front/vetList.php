<?php
set_include_path('C:\xampp\htdocs\front\ali-project-front-mvc\src');
require_once 'controller/vetController.php';
?>

<?php
include 'view/front/header.php';
$vets = VetController::getAllVet();
?>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-6 col-9 mb-3 mt-3">
            <label for="search">
                Entrer votre recherche
            </label>
            <input id="search" type="text" class="form-control">
        </div>
    </div>
    <div class="row">
        <?php
        foreach ($vets as $row) {
        ?>
            <div class="col-4 mb-3 mt-3 vet-element">
                <div class="card" style="width: 18rem;">
                    <!-- // <img class="card-img-top" src=<?php //echo '"data:image/jpg;base64,' . base64_encode($row['IMAGE']) . '"'; ?> alt="Card image cap"> -->
                    <img class="card-img-top" src="<?php echo $row['IMAGE']; ?>" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text">
                        <p> <strong>Nom: </strong> <span class="nom-el"> <?php echo $row['NOM'] ?> </span></p>
                        <p> <strong>Prenom: </strong> <span class="nom-el"> <?php echo $row['PRENOM'] ?> </span> </p>
                        <p> <strong>Telephone: </strong> <span class="nom-el"> <?php echo $row['TELEPHONE'] ?> </span> </p>
                        <p> <strong>Mail: </strong> <span class="nom-el"> <?php echo $row['MAIL'] ?> </span> </p>
                        </p>
                    </div>
                </div>
            </div>


        <?php } ?>

    </div>
</div>


<script>
    function filter() {
        // Declare variables
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("search");
        filter = input.value.toUpperCase();
        tr = document.getElementsByClassName("vet-element");

        console.log(tr);
        // Loop through all table rows, and hide those who don't match the search query
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            td = tr[i].getElementsByClassName("nom-el")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    input = document.getElementById("search");
    input.onkeypress = filter;
</script>

<?php
include 'view/front/footer.php';
?>