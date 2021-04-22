
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
    <title>sqwazyxter/Formation - Rendez-vous</title>
</head>

<body>
   
<h1>RENDEZ-VOUS</h1>
<form action="" class="needs-validation" novalidate>
    <div class="container">
        <div class="row">
            <div class="col-6">
               
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="NOM" required>
                        <div class="valid-feedback">
                        Bon !
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre NOM !
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="" placeholder="Prénom" required>
                        <div class="valid-feedback">
                            Bon !
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre prénom !
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="" placeholder="Téléphone" required>
                        <div class="valid-feedback">
                        Bon !
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre téléphone!
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="mail" class="form-control" id="" placeholder="Email" required>
                        <div class="valid-feedback">
                        Bon !
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre email!
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                            placeholder="Raison de la visite"></textarea>
                            <div class="valid-feedback">
                            Bon !
                        </div>
                        
                    </div>
                    
                    
            </div>
            <div class="col-6">
            <?php include("includes/formDate.php"); ?>
            <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">
                            J'accepte le <a href="RGPD.php">Règlement Général sur la Protection des Données.</a>
                        </label>
                    </div>
                    </div>
                    <div class="row">
                        <div class="col-10">
                        
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-primary marge-bouton">Valider</button>
                           
                        </div>
                    </div>
                    
                    </form>

                    
            </div>
        </div>
    </div>
    
    <?php include("includes/footer.php"); ?>
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


                </script>
    <script src="js/scripts.js"></script>
    <script src="js/rdv_date.js"></script>
    <script src="js/scriptForm.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>