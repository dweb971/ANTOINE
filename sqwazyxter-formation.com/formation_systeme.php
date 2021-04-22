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

    <title>Formation - Systeme d'exploitation</title>
  </head>
  <body>
  
  <div class="container">
  <ul class="margin">
  <li><a href="https://sqwazyxter-formation.com/index.php">  Accueil</a></li>
  <li class="ariane"><a href="https://sqwazyxter-formation.com/catalogue.php">Catalogue</a></li>
  <li  class="ariane">Formation Systeme d'exploitation</li>
</ul> 
  </div>


    <h3 class="h3">FORMATION SYSTÈME D'EXPLOITATION</h3>


    <div class="container">
        <div class="row">
            <div class="col-3">

            </div>
            <div class="col-4">
                <img src="img/620px-GNU_and_Tux.svg.png" alt="" srcset="">
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
      <td>GNU/LINUX</td>
      <td>SXL01</td>
      <td>Présentation et prise en main de votre ordinateur sous GNU/LINUX</td>
      <td>7h</td>
      <td></td>
      <td>tout public</td>
      <td>Aucun</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>GNU/LINUX</td>
      <td>SXL02</td>
      <td>Sécuriser le système -Les techniques de sécurisation</td>
      <td>35h</td>
      <td></td>
      <td>Public Expert</td>
      <td>Aucun</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>GNU/LINUX</td>
      <td>SXS03</td>
      <td>Administration niveau I - installation et mise en œuvre</td>
      <td>35h</td>
      <td></td>
      <td>public Expert</td>
      <td>avoir suivi " linux
commandes de
base"</td>
    </tr><tr>
      <th scope="row">4</th>
      <td>GNU/LINUX</td>
      <td>SXL03</td>
      <td>Sécuriser le système -Les techniques de sécurisation</td>
      <td>35h</td>
      <td></td>
      <td>Public Expert</td>
      <td>avoir suivi " linux
administration
niveau I"</td>
    </tr>
    <tr>
      <th scope="row">5</th>
      <td>GNU/LINUX</td>
      <td>SXL04</td>
      <td>Les services réseaux - La puissance des outils Open Source</td>
      <td>35h</td>
      <td></td>
      <td>Tout Expert</td>
      <td>avoir suivi " linux
administration
niveau I"</td>


    </tr><tr>
      <th scope="row">6</th>
      <td>GNU/LINUX</td>
      <td>SXL05</td>
      <td>Commandes de base - Les bases pour l'administration</td>
      <td>21h</td>
      <td></td>
      <td>intermédiaire</td>
      <td>aucun</td>
    </tr>
  </tbody>
</table>
            </div>
            
        </div>
    </div>


   
      <div class="row">
        <div class="col-4">
        <button type="submit" value="add Cart" name='AddCart' class="btn btn-outline-primary btnPlace">Ajouter au panier</button>
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
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
