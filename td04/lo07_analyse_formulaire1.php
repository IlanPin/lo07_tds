<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Analyse</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>

  </head>
  <body>
    <div class="container">
      <h1>Analyse</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Ilan Pin</a>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Analyse avec Bootstrap 5</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 3 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Analyse : POST et GET</h5>

          <div class='mx-lg-3'>

                            <h6>Données transmises par la méthode GET :</h6>
                            <table class="table w-50 table-bordered">
                                <thead>
                                    <tr>
                                        <th>Clé</th>
                                        <th>Valeur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($_GET as $name => $value) {
                                        echo "<tr><td>$name</td><td>$value</td></tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>

                            <h6>Données transmises par la méthode POST :</h6>
                            <table class="table w-50 table-bordered">
                                <thead>
                                    <tr>
                                        <th>Clé</th>
                                        <th>Valeur</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($_POST as $name => $value) {
                                        if($name=="UT"){
                                            $uts = implode(", ", $_POST["UT"]);
                                            echo "<tr><td>$name</td><td>$uts</td></tr>";
                                        }
                                        else{
                                            echo "<tr><td>$name</td><td>$value</td></tr>";
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
          </div>
        </div>
      </div>

    </div>

    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Ilan Pin rédigée le 17 mars 20</small>
    <p/><hr/><p/>
  </body>
</html>
