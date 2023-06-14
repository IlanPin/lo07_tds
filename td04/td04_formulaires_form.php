<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TD04</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>

  </head>
  <body>
    <div class="container">
      <h1>TD04</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
      <!-- ================================================================================================================ -->

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Ilan Pin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#exercice1">Exercice 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice2">Exercice 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice3">Exercice 3</a></li>

              <!-- ===== Documentation ===== -->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://openclassrooms.com/fr/courses/918836-concevez-votre-site-web-avec-php-et-mysql/913099-administrez-des-formulaires-de-facon-securisee" target="_blank">Administrez des formulaires de façon sécurisée</a></li>
                  <li><a class="dropdown-item" href="https://www.pierre-giraud.com/php-mysql-apprendre-coder-cours/recuperer-manipuler-donnee-formulaire/" target="_blank">Récupérer et manipuler les données des formulaires HTML en PHP</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>TD04 : Formulaire PHP avec Bootstrap 5</h1>
      </div>
      
      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 1 : formulaire de login et méthode GET</h5>

          <div class='mx-lg-3'>
              
                <form method="GET" action="lo07_analyse_formulaire1">
                    <div class="form-group">
                        <label for="login">Login :</label>
                        <input type="text" class="form-control" id="login" name="login" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe :</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div style="margin-top: 10px">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>    
              <hr>
              
          </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 2 ===== -->
      <!-- ================================================================================================================ -->

      <form method="POST" action="lo07_analyse_formulaire1">
      
      <p/><hr/>
      <a id='exercice2'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 2 : formulaire de login et méthode POST</h6>
            <div class='mx-lg-3'> 

                            <div class="form-group">
                                <label for="login">Login :</label>
                                <input type="text" class="form-control" id="login" name="login" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe :</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <div style="margin-top: 10px">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="reset" class="btn btn-danger">Reset</button>
                            </div>           
                    <hr>

            </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 3 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice3'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3 : sondage UTT</h6>
            <div class='mx-lg-3'> 

                    <div class="form-group" style="margin-bottom: 10px">
                        <label for="login">Nom</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                    <div class="form-group" style="margin-bottom: 10px">
                        <label for="password">Prénom</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" required>
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="gender">Sélectionnez votre genre</label><br>
                        <input type="radio" id="man" name="man" onclick="document.getElementById('woman').checked = false;" checked>
                        <label for="man">Homme</label>
                        <input type="radio" id="woman" name="woman" onclick="document.getElementById('man').checked = false;">
                        <label for="woman">Femme</label>
                    </div>
                    <div style="margin-bottom: 10px">
                        <label for="status">Sélectionnez votre statut</label><br>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="status" id="btnradio1" value="étudiant" autocomplete="off" checked>
                            <label class="btn btn-outline-secondary" for="btnradio1">Etudiant</label>
                            <input type="radio" class="btn-check" name="status" id="btnradio2" value="doctorant" autocomplete="off">
                            <label class="btn btn-outline-secondary" for="btnradio2">Doctorant</label>
                            <input type="radio" class="btn-check" name="status" id="btnradio3" value="administratif" autocomplete="off">
                            <label class="btn btn-outline-secondary" for="btnradio3">Administratif</label>
                            <input type="radio" class="btn-check" name="status" id="btnradio4" value="enseignant" autocomplete="off">
                            <label class="btn btn-outline-secondary" for="btnradio4">Enseignant</label>
                        </div>
                    </div>
                    <div class="form-group w-50" style="margin-bottom: 10px">
                        <label for="car">Sélectionnez un véhicule</label><br>
                        <select name="car" class="form-control" size="10">
				<optgroup label="Renault">
					<option name="Twingo">Twingo</option>
					<option name="Clio">Clio</option>
					<option name="Captur">Captur</option>
                                        <option name="Espace">Espace</option>
				</optgroup>
				<optgroup label="Tesla">
				<option name="S">Modèle S</option>
				<option name="3">Modèle 3</option>
				<option name="X">Modèle X</option>
				<option selected name="Y">Modèle Y</option>
				</optgroup>
			</select>
                    </div>
                    <div class="form-group w-50" style="margin-bottom: 10px">
                        <label for="UT">Sélectionnez vos UT (plusieurs choix possibles)</label><br>
                        <select name="UT[]" class="form-control" multiple size="3">
				<option name="UTT">UTT</option>
				<option name="UTC">UTC</option>
				<option name="UTBM">UTBM</option>
			</select>
                    </div>
                    <div>
                        <input type="checkbox" name="news" id="news">
                        <label for="news">Je souhaite recevoir la news letter</label><br>
                        <input type="checkbox" name="refund" id="refund">
                        <label for="refund">Je souhaite recevoir le remboursement du déplacement</label><br>
                    </div> 
                
                    <div style="margin-top: 10px">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>

            </div>      
        </div>
      </div>

      </form>

    </div>


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Ilan Pin rédigée le 17 mars 2023</small>
    <p/><hr/><p/>
  </body>
</html>
