<?php
$bdd = new PDO('mysql:host=127.0.0.1;dbname=contributor', 'root', 'skate');
 $nom=$_POST['fullName'];
 $mail=$_POST['email'];
 $country=$_POST['country'];
 $state=$_POST['state'];
 $password=$_POST['password'];


$req="INSERT INTO inscription (fullName,email,country,state,password)";

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">    <link rel="stylesheet" href="style.css">
    <title>Become a Contributor</title>
  </head>
    <body id="content">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <img src="img/decoration_gauche.png" alt="" id="deco">

        <div class="container">
            <div class="row">
                <div class="col-2">
                    
                </div>
                <div class="col-6">
                    <img src="img/logo.png" alt="">
                    <p class="belowTheLogo">Get paid! sharing your knowledge</p>
                </div>
                <div class="col-4">

                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">
                
                <div class="col-12">
                    <form id="inscription" method="GET">
                        <div class="container">
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control  border one " placeholder="Full Name*" id="fullNameFrm" value="" name="fullName">
                            <p style="color: red; font-weight: bolder;" id="erreurName"></p>
                          </div>
                        </div>
                        <div class="row">
                            
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <input type="email" class="form-control  border" placeholder="Email Adress*" id="emailFrm" value="" name="email">
                            <p style="color: red; font-weight: bolder;" id="erreurEmail"></p>
                          </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control  border" placeholder="Country*" id="countryFrm" value="" name="country">
                            <p style="color: red; font-weight: bolder;" id="erreurCountry"></p>
                          </div>
                        </div>
                        <div class="row">
                            
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <input type="text" class="form-control  border" placeholder="State*" id="stateFrm" value="" name="state">
                            <p style="color: red; font-weight: bolder;" id="erreurState"></p>
                          </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                          <div class="col">
                            <input type="password" class="form-control  border" placeholder="Password*" id="passwordFrm" value="" name="password">
                            <p style="color: red; font-weight: bolder;" id="erreurPassword"></p>
                          </div>
                        </div>
                        
                    </div>
                    
                   
                    
                          
                        
                      
                </div>
                
            </form>
            </div>
            <p class="forSignUp">Already have an account?<a href="http://youtube.com">Sign Up</a></p>
        </div>
        <div class="container">
         
          <p>* Champs obligatoires</p>

            <div class="row">
                
                <div class="col-6">
                    <button type="submit" id="valBtnFrm" style="font-weight: bolder;" name="valBtn">Become A Contributor</button>
                    <img src="img/decoration_bas.png" alt="" id="img">

                    


                </div>
                <div class="col-6">

                </div>

            </div>
        </div>
       

          </div>
          <div class="col-6">
            <img src="img/image_form.png" alt="">
          </div>
        </div>
      </div>
      
       
      
       

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery AND Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
    <!-- Option 2: jQuery, Popper.js, AND Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>