<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulaire 3</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>

  </head>
  <body>
    <div class="container">
      <h1>Formulaire 3</h1>
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
        <h1>Formulaire 3 avec Bootstrap 5</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 3 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 3 : formulaire de sondage et méthode POST</h5>

          <div class='mx-lg-3'>
                <table class="table w-50 table-bordered">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>clé</th>
                        <th>valeur</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th>1</th>
                        <td>Nom</td>
                        <td><?php echo $_POST["name"]?></td>
                      </tr>
                      <tr>
                        <th>2</th>
                        <td>Prénom</td>
                        <td><?php echo $_POST["firstname"]?></td>
                      </tr>
                      <tr>
                        <th>3</th>
                        <td>Sexe</td>
                        <td><?php 
                        if(!empty($_POST["man"])){
                            echo "homme";
                        }
                        else{
                            echo "femme";
                        }
                        ?>
                        </td>
                      </tr>
                      <tr>
                        <th>4</th>
                        <td>Statut</td>
                        <td><?php 
                        echo $_POST["status"];
                        ?>
                        </td>
                      </tr>
                      <tr>
                        <th>5</th>
                        <td>véhicule</td>
                        <td><?php
                        echo $_POST["car"];
                        ?>
                        </td>
                      </tr>
                      <tr>
                        <th>6</th>
                        <td>UT</td>
                        <td><?php
                        $uts = implode(", ", $_POST["UT"]);
                        echo $uts;
                        ?>
                        </td>
                      </tr>
                      <tr>
                        <th>7</th>
                        <td>Letter</td>
                        <td><?php echo $_POST["news"]?></td>
                      </tr>
                      <tr>
                        <th>8</th>
                        <td>Refund</td>
                        <td><?php echo $_POST["refund"]?></td>
                      </tr>
                    </tbody>
                </table>
          </div>
        </div>
      </div>

    </div>

    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Ilan Pin rédigée le 16 mars 20</small>
    <p/><hr/><p/>
  </body>
</html>
