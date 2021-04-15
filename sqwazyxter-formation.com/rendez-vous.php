
<?php include("includes/header.php"); ?>
    <title>sqwazyxter/Formation - Rendez-vous</title>
</head>

<body>
   
    <h1>RENDEZ-VOUS</h1>
    <div class="container">
        <div class="row">
            <div class="col-6">
            <form method="POST" action="traitement.php" class="needs-validation" novalidate>
                    <div class="form-group">
                        <label for="nom">Nom <span class="obligatoire">*</span> </label>
                        <input type="text" class="form-control" id="" name="nom" maxlength="1000" minlength="1"
                            required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre nom!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="prenom">Prénom <span class="obligatoire">*</span> </label>
                        <input type="text" class="form-control" id="" name="prenom" maxlength="1984" minlength="2"
                            required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre prénom!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Téléphone  <span class="obligatoire">*</span></label>
                        <input type="tel" class="form-control" id="" name="telephone" maxlength="10" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre numéro de téléphone!
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email <span class="obligatoire">*</span> </label>
                        <input type="email" class="form-control downe" id="exampleInputEmail1" aria-describedby="emailHelp"
                            name="email" maxlength="5977" minlength="7" required>
                        <div class="valid-feedback">
                            Looks good!
                        </div>
                        <div class="invalid-feedback">
                            Indiquez votre email!
                        </div>
                        <div class="form-group up">
                        <textarea class="form-control " id="exampleFormControlTextarea1" rows="3"
                            placeholder="Raison de la visite"></textarea>
                    </div>
                    </div>
                
                    
               
            </div>
            <div class="col-6">
                
                    <select class="custom-select" id="selectedM" required>
                        <option value="1" id="mois">Janvier</option>
                        <option value="2" id="mois">Février</option>
                        <option value="3" id="mois">Mars</option>
                        <option value="4" id="mois">Avril</option>
                        <option value="5" id="mois">Mai</option>
                        <option value="6" id="mois">Juin</option>
                        <option value="7" id="mois">Juillet</option>
                        <option value="8" id="mois">Août</option>
                        <option value="9" id="mois">Septembre</option>
                        <option value="10" id="mois">Octobre</option>
                        <option value="11" id="mois">Novembre</option>
                        <option value="12" id="mois">Décembre</option>
                    </select>
                    <table class="table table-bordered table-sm" id="agenda" required>
                        <thead>
                            <!--entête tableau-->
                            <tr>
                                <th> Lundi </th>
                                <th> Mardi </th>
                                <th> Mercredi </th>
                                <th> Jeudi </th>
                                <th> Vendredi </th>
                                <th> Samedi </th>
                                <th> Dimanche </th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--corps du tableau-->
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="invalid-feedback" id="agendaFrm">
        Merci de choisir une date !
      </div>
                    <div>
                      
                        <select class="custom-select needs-validation" id="heure" required>
                            <option value="" selected>Choisir une heure</option>
                            <option value="7:00">7h00</option>
                            <option value="7:40">7h40</option>
                            <option value="8:00">8h00</option>
                            <option value="8:40">8h40</option>
                            <option value="9:00">9h00</option>
                            <option value="9:40">9h40</option>
                            <option value="10:00">10h00</option>
                            <option value="10:40">10h40</option>
                            <option value="11:00">11h00</option>
                            <option value="11:40">11h40</option>
                            <option value="14:00">14h00</option>
                            <option value="14:30">14h30</option>
                        </select>
                        <div class="invalid-feedback" id="heureForm">Merci de choisir une heure de rendez-vous</div>
                    </div>
                    <div class="row">
                        <div class="col-6">

                        </div>
                        <div class="col-6">
                        <input type="checkbox"> J’autorise ce site à conserver mes données transmises via ce formulaire. Voir notre 
                    <a href="#" target="_blank">Politique de Gestion des Données Personnelles</a>





                    <button type="submit" class="btn btn-primary">Submit</button>
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