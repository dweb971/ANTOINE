<?php include("includes/header.php"); ?>
<title>Inscription</title>

<body>
    <div class="login-form">
        <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
        <div class="alert alert-success">
            <strong>Succès</strong> inscription réussie !
        </div>
        <?php
                        break;

                        case 'prenom_length':
                            ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> Prénom trop long !
        </div>
        <?php
                            break;

                        case 'password':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> mot de passe différent
        </div>
        <?php
                        break;

                        case 'email':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> email non valide
        </div>
        <?php
                        break;

                        case 'email_length':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> email trop long
        </div>
        <?php 
                        break;

                        case 'nom_length':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> nom trop long
        </div>
        <?php 
                        case 'already':
                        ?>
        <div class="alert alert-danger">
            <strong>Erreur</strong> compte deja existant
        </div>
        <?php 

                    }
                }
                ?>

        <form action="inscription_traitement.php" method="post" class="needs-validation" novalidate>
            <h2 class="text-center">Inscription</h2>
            <div class="form-group">
                <label>NOM *</label>
                <input type="text" name="nom" class="form-control" placeholder="Entrez votre NOM" required="required"
                    autocomplete="off">
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    Indiquez votre Nom!
                </div>
            </div>
            <div class="form-group">
                <label>Prénom *</label>
                <input type="text" name="prenom" class="form-control" placeholder="Entrez votre prénom"
                    required="required" autocomplete="off">
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    Indiquez votre Prénom!
                </div>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email *</label>
                <input type="email" name="email" class="form-control" placeholder="Entrez votre Email"
                    required="required" autocomplete="off">
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    Indiquez votre Email!
                </div>
            </div>
            <div class="form-group">
                <label>Date de naissance *</label>
                <input type="date" name="date_naissance" class="form-control" required="required" autocomplete="off">
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    Indiquez votre Date de naissance!
                </div>
            </div>
            <div class="form-group">
                <label>Mot de passe *</label>
                <input type="password" name="password" class="form-control" placeholder="Entrez votre mot de passe"
                    required="required" autocomplete="off">
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    Indiquez votre Mot de passe!
                </div>
            </div>
            <div class="form-group">
                <label>Re-tapez le mot de passe *</label>
                <input type="password" name="password_retype" class="form-control"
                    placeholder="Re-tapez le mot de passe" required="required" autocomplete="off">
                <div class="valid-feedback">
                    Parfait !
                </div>
                <div class="invalid-feedback">
                    Veuiller retaper votre Mot de passe!
                </div>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Inscription</button>
            </div>
            <div class="form-group">
                <a href="https://sqwazyxter-formation.com/connexion.php">se connecter</a>
            </div>
            <div class="form-group">
            <p>Tous les champs avec un (*) sont obligatoire</p>
        </div>
        </form>
        
    </div>
    <style>
    .login-form {
        width: 340px;
        margin: 50px auto;
    }

    .login-form form {
        margin-bottom: 15px;
        background: #f7f7f7;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 30px;
    }

    .login-form h2 {
        margin: 0 0 15px;
    }

    .form-control,
    .btn {
        min-height: 38px;
        border-radius: 2px;
    }

    .btn {
        font-size: 15px;
        font-weight: bold;
    }
    </style>
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
    <?php include("includes/footer.php"); ?>