<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="style1.css">
    
        
    

    
</head>

<body>
    <header>
        <a href="https://sqwazyxter-formation.com/index.php">
        <img src="img/logo.jpeg" alt="logo du site" class="logo">
        </a>

        <div class="row">
            <div class="col-10">
           
            </div>
            
            <div class="col-2">
        <!-- Example single danger button -->
   
<div class="btn-group">
    
  <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Parametre
  </button>
  <div class="dropdown-menu">
    <a class="dropdown-item " href="deconnexion.php">Deconnexion</a>
    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#change_password"> Changer mon mot de passe</a>
  </div>
</div>

                        
                        
                </div>
            </div>
            
        </div>

        <div class="row up">
        <div class="col-10">
        
        </div>
        <div class="col-2">
       <a href="viewCart.php"><button type="submit" value="add Cart" name='viewCart' class="btn btn-dark">Votre panier</button></a> 
        </div>
        </div>

        <nav>
            <ul>
                <li>
                    <a href="https://sqwazyxter-formation.com/index.php" title="accueil du site">Accueil</a>
                </li>
                <li>
                    <a href="https://sqwazyxter-formation.com/catalogue.php" title="Catalogue">Catalogue</a>
                </li>
                <li>
                    <a href="https://sqwazyxter-formation.com/accompagnement.php" title="Accompagnement">Accompagnement</a>
                </li>
                <li>
                    <a href="http://sqwazyxter-formation.com/reservation.php" title="Réservation">Réservation</a>
                </li>
                <li>
                    <a href="http://sqwazyxter-formation.com/rendez-vous.php" title="Rendez-vous">Rendez-vous</a>
                </li>
            </ul>
        </nav>
        <body>
        <div class="container">
            <div class="col-md-12">
                <?php 
                        if(isset($_GET['err'])){
                            $err = htmlspecialchars($_GET['err']);
                            switch($err){
                                case 'current_password':
                                    echo "<div class='alert alert-danger'>Le mot de passe actuel est incorrect</div>";
                                break;
                                case 'success_password':
                                    echo "<div class='alert alert-success'>Le mot de passe a bien été modifié ! </div>";
                                break; 
                            }
                        }
                    ?>
                
            </div>
        </div>    
       
        
                                
        <!-- Modal -->
        <div class="modal fade" id="change_password" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Changer mon mot de passe</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                         </div>
                            <div class="modal-body">
                                <form action="layouts/change_password.php" method="POST">
                                    <label for='current_password'>Mot de passe actuel</label>
                                    <input type="password" id="current_password" name="current_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password'>Nouveau mot de passe</label>
                                    <input type="password" id="new_password" name="new_password" class="form-control" required/>
                                    <br />
                                    <label for='new_password_retype'>Re tapez le nouveau mot de passe</label>
                                    <input type="password" id="new_password_retype" name="new_password_retype" class="form-control" required/>
                                    <br />
                                    <button type="submit" class="btn btn-success">Sauvegarder</button>
                                </form>
                            </div>
                            <?php include("includes/footer.php"); ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

    </header>
