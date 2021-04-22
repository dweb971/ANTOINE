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

<title>Formation - Informatique</title>
</head>

<body>

    <div class="container">
        <ul class="margin">
            <li><a href="https://sqwazyxter-formation.com/index.php"> Accueil</a></li>
            <li class="ariane"><a href="https://sqwazyxter-formation.com/catalogue.php">Catalogue</a></li>
            <li class="ariane">Formation Informatique</li>
        </ul>
    </div>


    <h3 class="h3">FORMATION INFORMATIQUES</h3>

    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <img src="img/excel.jpg" alt="" srcset="">
            </div>
            <div class="col-5">

            </div>
        </div>
    </div>


    <form action="insertCart.php" method="post">
        <div class="">
            <div class="row">
                <div class="col-12">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Domaine</th>
                                <th scope="col">ref.produit</th>
                                <th scope="col">intitulé de la formation</th>
                                <th scope="col">Durée</th>
                                <th scope="col">Certfication vidée</th>
                                <th scope="col">Public ou niveau</th>
                                <th scope="col">Prérequis</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Bureautiques</td>
                                <td>SXINT04</td>
                                <td>Traitement de texte microsoft word</td>
                                <td>14h</td>
                                <td></td>
                                <td>Tout public</td>
                                <td>Savoir utiliser Microsoft windows</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Bureautiques</td>
                                <td>SXI08</td>
                                <td>Tableur Microsoft Exel</td>
                                <td>14h ou 2jours</td>
                                <td></td>
                                <td>Tout public</td>
                                <td>Savoir utiliser Microsoft windows</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Bureautiques</td>
                                <td>SXCO3</td>
                                <td>EXEL consolidation des compétences pour autodidacte</td>
                                <td>14h ou 2jours</td>
                                <td></td>
                                <td>Tout public</td>
                                <td>Utlisation courante d'Excel</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Bureautiques</td>
                                <td>SXI03</td>
                                <td>Mon courier électronique</td>
                                <td>8h ou 1jour</td>
                                <td></td>
                                <td>Tout public</td>
                                <td>Savoir utiliser Microsoft windows</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Bureautiques</td>
                                <td>SXI00</td>
                                <td>Autonomie pour l'utilisation de son ordinateur au quotidien sous microsoft Windows
                                </td>
                                <td>35h ou 5jours</td>
                                <td></td>
                                <td>Tout public</td>
                                <td>Aucun</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Internet</td>
                                <td>SXINT02</td>
                                <td>Eveil internet, naviguer et communiquer sur le web</td>
                                <td>7h</td>
                                <td></td>
                                <td>Tout public</td>
                                <td>Savoir utiliser Microsoft windows</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>



        <div class="row">
            <div class="col-4">
                <button type="submit" value="add Cart" name='AddCart' class="btn btn-outline-primary btnPlace">Ajouter
                    au panier</button>
            </div>
            <div class="col-8">

            </div>

            <input type="hidden" name="name" value="FormationDev">
            <input type="hidden" name="prix" value="300$">
        </div>

    </form>

    <?php include("includes/footer.php"); ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>