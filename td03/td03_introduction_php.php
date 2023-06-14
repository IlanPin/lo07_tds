<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LO07 TD03</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>

  </head>
  <body>
    <div class="container">
      <h1>TD</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
      <!-- ================================================================================================================ -->

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LO07 TD03</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#exercice1">Exercice 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice2">Exercice 2</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice3">Exercice 3</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice4">Exercice 4</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice5">Exercice 5</a></li>

              <!-- ===== Documentation ===== -->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="https://www.php.net/manual/fr/language.basic-syntax.php" target="_blank">La syntaxe de base</a></li>
                  <li><a class="dropdown-item" href="https://www.php.net/manual/fr/language.variables.php" target="_blank">Les variables</a></li>
                  <li><a class="dropdown-item" href="https://www.php.net/manual/fr/language.operators.php" target="_blank">Les opérateurs</a></li>
                  <li><a class="dropdown-item" href="https://www.php.net/manual/fr/language.functions.php" target="_blank">Les fonctions</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Introduction à PHP</h1>
        <p>PHP est un langage de scripts généraliste et Open Source spécialement conçu pour le développement d'applications web.</p>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice1'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 1 : réparation et validation</h5>

          <div class='mx-lg-3'> 

            <?php 
            echo "Bonjour à tous"
            ?>

          </div>
        </div>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 2 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice2'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 2 : variables PHP</h6>
            <div class='mx-lg-3'> 

              <?php
                $nom = "Pin";
                $prénom = "Ilan";
                $age = 20;
                $ingénieur = true;    
              ?>
                
              <ul class="list-group">
                  <li class="list-group-item">Nom = <?php echo $nom?></li>
                  <li class="list-group-item">Prénom = <?php echo $prénom?></li>
                  <li class="list-group-item">Age = <?php echo $age?></li>
                  <li class="list-group-item">Ingénieur = <?php echo $ingénieur?></li>
              </ul>
                
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
          <h5 class="card-title">Exercice 3 : tableaux PHP</h6>
            <div class='mx-lg-3'>
                
                <?php
                $tableau = ["Paris",
                    "Madrid",
                    "Lisbonne",
                    "Berlin",
                    "Berne",
                    "Bruxelles",
                    "Athènes",
                    "Sofia"];
                array_push($tableau,"Varsovie");
                unset($tableau[4]);
                ?>
                
                <p style="color: red">
                    print_r
                </p>
                <pre><?php
                print_r($tableau);
                ?></pre>
                
                <hr>
                <p style="color: red">
                    foreach
                </p>
                <ul class="list-group">
                    <?php
                    foreach($tableau as $element) {
                        echo '<li class="list-group-item">' . $element . '</li>';
                    }
                    ?>
                </ul>
                
                <hr>
                <p style="color: red">
                    implode
                </p>
                <?php
                $liste = implode('; ', $tableau); 
                ?>
                <ul class="list-group">    
                    <li class="list-group-item"><?php echo $liste?></li>
                </ul>

                <hr>
                <p style="color: red">
                    Accès aux données
                </p>
                <?php
                $nbTab = count($tableau);
                sort($tableau);
                $triListe = implode('; ', $tableau);
                ?>
                <ul class="list-group">
                    <li class="list-group-item list-group-item-danger">Nombre d'éléments = <?php echo $nbTab?></li>
                    <li class="list-group-item list-group-item-warning">Tableau trié = <?php echo $triListe?></li>
                </ul>

            </div>      
        </div>
      </div>
      
      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 4 ===== -->
      <!-- ================================================================================================================ -->
      
      <hr>
      <a id='exercice4'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 4 : tableaux associatifs</h5>

          <div class='mx-lg-3'> 

            <?php
            $hashCapitales = [
                "Bulgarie" => "Sofia",
                "Chypre" => "Nicosie",
                "Estonie" => "Tallinn",
                "Lettonie" => "Riga",
                "Lituanie" => "Vilnius",
                "Roumanie" => "Bucarest",
            ];            
            ?>
            <p style="color: red">
                Estonie ?
            </p>
            <ul class="list-group">
                <li class="list-group-item"><?php echo $hashCapitales["Estonie"]?></li>
            </ul>
            
            <hr>
            <p style="color: red">
                Bilan d'un ajout
            </p>
            <?php
            $hashCapitales["Estonie"] = "Narva";
            ?>
            <ul class="list-group">
                <li class="list-group-item"><?php echo $hashCapitales["Estonie"]?></li>
            </ul>
            
            <hr>
            <p style="color: red">
                print_r
            </p>
            <pre><?php
            print_r($hashCapitales);
            ?></pre>
            
            <hr>
            <p style="color: red">
                foreach
            </p>
            <ul class="list-group">
                <?php
                foreach($hashCapitales as $clé=>$element) {
                    echo '<li class="list-group-item list-group-item-success">' . $clé . " ==> " . $element . '</li>';
                    }
                ?>
            </ul>
            
            <hr>
            <p style="color: red">
                Acccès aux données
            </p>
            <?php
            $clés = [
                "Bulgarie",
                "Chype",
                "Estonie",
                "Lettonie",
                "Lituanie",
                "Roumanie"
            ];
            $valeurs = [
                "Sofia",
                "Nicosie",
                "Tallinn",
                "Riga",
                "Vilnius",
                "Bucarest"
            ];
            ?>
            <ul class="list-group">
                <li class="list-group-item">Liste des clés =<pre><?php
                print_r($clés)
                ?></pre></li>
                <li class="list-group-item">Liste des valeurs =<pre><?php
                print_r($valeurs)
                ?></li>
            </ul>

          </div>
        </div>
      </div>
      
      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 5 ===== -->
      <!-- ================================================================================================================ -->
      
      <hr>
      <a id='exercice5'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 5 : Fonctions PHP</h5>

          <div class='mx-lg-3'>
              
              <?php
              function badge($label, $compteur) {
                  $badge = "<button type='button' class='btn btn-primary' style='margin-right: 5px'>$label <span class='badge-counter' style='color: red'>$compteur</span></button>";
                  return $badge;
              }
              ?>
              
              <p style="color: red">
                Test de la fonction avec Web, 6
              </p>
              <?php
              echo badge("Web", 6);
              ?>
              
              <hr>
              <p style="color: red">
                Accès aux données
              </p>
              <?php
              foreach($tableau as $element) {
                  echo badge($element, strlen($element));
              }
              ?>

          </div>
        </div>
      </div>

    </div>


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Ilan Pin rédigée le 11 mars 2023</small>
    <p/><hr/><p/>
  </body>
</html>
