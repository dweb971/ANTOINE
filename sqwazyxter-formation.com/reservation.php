<?php 
    session_start();
   
if(isset($_SESSION['user']))
{
    require_once 'includes/headerOnline.php';   
}
else {
    require_once 'includes/header.php'; 
}
?>
<title>Hello, world!</title>
</head>

<body>
    <div class="">
        <ul class="margin2">
            <li><a href="https://sqwazyxter-formation.com/index.php"> Accueil</a></li>
            <li class="ariane">Réservation</li>
        </ul>
    </div>

    <div class="container">
        <div class="row">
            <h3 class="titleAchat">RÉSERVATION</h3>
        </div>
    </div>
    <h4 class="placeStep1">ETAPE 1 - Choisissez une Salle</h4>
    <div class="container">
        <div class="row">
            <div class="">

                <img class="tailleImg2" src="img/salle-informatique.jpg" alt="" />
                <div class="moveR">
                    <input type="radio" id="huey" name="drone" value="salle1" checked>
                    <label for="huey">Salle 1</label>
                </div>


            </div>
            <div class="">

                <img class="tailleImg2 marginLonImg" src="img/salle-informatique.jpg" alt="" />
                <div class="moveR">
                    <input type="radio" id="huey" name="drone" value="salle2" checked>
                    <label for="huey">Salle 2</label>
                </div>
            </div>
            <div class="">

                <img class="tailleImg2 marginLonImg" src="img/salle-informatique.jpg" alt="" />

                <div class="moveR">
                    <input type="radio" id="huey" name="drone" value="salle3" checked>
                    <label for="huey">Salle 3</label>
                </div>
            </div>
        </div>
    </div>

    <div class="container">



        <div class="row">
            <h4 class="placeStep1">ETAPE 2</h4>
        </div>

        <div class="col-6">
        <?php include("includes/formDate.php"); ?>
        </div>


        <h4 class="placeStep1">Réserver pour :</h4>





        <div class="placeStep1 form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1"
                checked>
            <label class="form-check-label" for="exampleRadios1">
                La matinée
            </label>
        </div>
        <div class="placeStep1 form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                L'après-midi
            </label>
        </div>
        <div class="placeStep1 form-check">
            <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
            <label class="form-check-label" for="exampleRadios2">
                La journée
            </label>
        </div>
    </div>


    <h4 class="placeStep1">ETAPE 3</h4>

    <div class="row">
        <button type="submit" class="btn btn-primary marge-bouton btnPlace">Valider</button>
    </div>
    </div>
    </form>









    <?php include("includes/footer.php"); ?>
    <!-- Optional JavaScript; choose one of the two! -->
    <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
        'use strict';
        window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
                form.addEventListener('submit', function(event) {
                    if (form.checkValidity() === false) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    var a = document.getElementsByTagName("a");
    for (var i = 0; i < a.length; i++) {
        a[i].onclick = function() {
            var id = this.getAttribute("data-id");
            document.getElementById(id).checked = true;
        }
    }
    </script>

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <script src="js/rdv_date.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>