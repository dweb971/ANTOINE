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
    <title>sqwazyxter/Formation - Mon Compte</title>
  </head>

  <?php
  if(isset($_SESSION['user']))
  {
      
      require_once 'includes/monCompteOnline.php'; 
       
  }
  else {
      require_once 'includes/monCompteOff.php'; 
  }
  require_once 'includes/footer.php';
  ?>
  



<?php 
    session_start();
   
if(!isset($_SESSION['user']))
{
    require_once 'includes/monCompteOff.php';
}
else {
 
    require_once 'includes/monCompteOnline.php'; 
}
?>












<?php include("includes/footer.php"); ?>

<!-- Optional JavaScript; choose one of the two! -->

<!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
</script>