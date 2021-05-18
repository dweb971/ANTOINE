<main class="container">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <form class="needs-validation" novalidate>
                <div class="form-group">
                    <label for="pays">Civilite</label>
                    <select class="form-control" id="pays" required>
                        <option selected>Precisez votre civilite</option>
                        <option>Monsieur</option>
                        <option>Madame</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="">NOM</label>
                    <input type="<text" class="form-control" id="nom" placeholder="votre NOM"
                        maxlength="100" required>
                    <div class="valid-feedback">
                        Bon !
                    </div>
                    <div class="invalid-feedback">
                        Indiquez votre nom !
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="<text" class="form-control" id="prenom" placeholder="votre Prenom"
                        maxlength="55" required>
                    <div class="valid-feedback">
                        Bon !
                    </div>
                    <div class="invalid-feedback">
                        Indiquez votre prénom !
                    </div>
                </div>
                <div class="form-group">
                    <label for="">telephone</label>
                    <input type="<tel" class="form-control" id="telephone"
                        placeholder="votre numero de telephone" maxlength="15" required>
                    <div class="valid-feedback">
                        Bon !
                    </div>
                    <div class="invalid-feedback">
                        Indiquez votre numero de telephone !
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Email address</label>
                    <input type="email" class="form-control" id="email"
                        placeholder="name@example.com" maxlength="160" required>
                    <div class="valid-feedback">
                        Bon !
                    </div>
                    <div class="invalid-feedback">
                        Indiquez votre adresse email !
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Mot de passe</label>
                    <input type="password" class="form-control" id="password"
                        placeholder="votre Mot de passe" maxlength="20" required>
                    <div class="valid-feedback">
                        Bon !
                    </div>
                    <div class="invalid-feedback">
                        Indiquez votre mot de passe !
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Adresse</label>
                    <input type="<text" class="form-control" id="adresse" placeholder="votre Adresse"
                        maxlength="60">
                </div>
                <div class="form-group">
                    <label for="">Adresse complementaire</label>
                    <input type="<text" class="form-control" id="adresseComp"
                        placeholder="complement d'adresse">
                </div>
                <div class="form-group">
                    <label for="">Code postal</label>
                    <input type="<text" class="form-control" id="codePostal"
                        placeholder="votre Code postal" maxlength="5">
                </div>
                <div class="form-group">
                    <label for="">Ville</label>
                    <input type="<text" class="form-control" id="ville" placeholder="votre Ville"
                        maxlength="40">
                </div>
                <div class="form-group">
                    <label for="pays">Pays</label>
                    <select class="form-control" id="pays">
                        <option selected>Selectionner un pays</option>
                        <option>Guadeloupe</option>
                        <option>Martinique</option>
                        <option>La réunion</option>
                        <option>France</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-success">Valider</button>
            </form>
        </div>
        <div class="col-md-4">

        </div>
    </div>
</main>