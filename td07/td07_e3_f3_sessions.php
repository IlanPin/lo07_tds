<?php
session_start();
$_SESSION["resp_org"]=$_POST["resp_org"];
$_SESSION["resp_proces"]=$_POST["resp_proces"];
$_SESSION["DPO"]=$_POST["DPO"];
?>
<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sessions 3</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>

  </head>
  <body>
    <div class="container">
      <h1>Sessions 3</h1>
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
          <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>Sessions : formulaire 3</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 3 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <a id='exercice3'/>
      <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Formulaire 3</h6>
            <div class='mx-lg-3'>

                <form method="POST" action="lo07_analyse_superglobales2">
                    <div class="form-group">
                        <label for="proces">Nom du traitement</label>
                        <input type="text" class="form-control" name="proces" required>
                    </div>
                    <div class="form-group">
                        <label for="object">Finalité du traitement</label>
                        <input type="text" class="form-control" name="object" required>
                    </div>
                    <div>
                        <input type="checkbox" name="DCP">
                        <label for="DCP">Traitement de données personnelles</label><br>
                        <input type="checkbox" name="DS">
                        <label for="DS">Traitement de données sensibles</label><br>
                        <input type="checkbox" name="HUE">
                        <label for="HUE">Traitement avec transfert de données hors UE</label><br>
                    </div> 
                    <div style="margin-top: 10px">
                        <button type="submit" class="btn btn-success">Submit</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </form>
                
            </div>      
        </div>
      </div>

      </form>

    </div>


    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Ilan Pin rédigée le 4 avril 2023</small>
    <p/><hr/><p/>
  </body>
</html>