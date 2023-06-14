<!DOCTYPE html>
<?php
require ('lo07_biblio_formulaire.php');
require ('lo07_biblio_planning.php');
require('lo07_biblio_tournoi.php');
$titre = "Formulaire pour le planning des soutenance";
?>

<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TD05 : formulaires dynamiques PHP et BT5</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">

    <link href="my_css.css" rel="stylesheet" type="text/css"/>
  </head>
  <body>
    <div class="container-fluid lo07_container">
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 : Squelette de la page avec modification du navbar -->
      <!-- ================================================================================================================ -->

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">PIN Ilan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item"><a class="nav-link" href="#exercice1">Exercice 1</a></li>
              <li class="nav-item"><a class="nav-link" href="#exercice2">Exercice 2</a></li>

              <!-- ===== Documentation ===== -->

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false">Documentation</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.3/forms/form-control/" target="_blank">Form Controls</a></li>
                  <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.3/forms/select/" target="_blank">Select</a></li>
                  <li><a class="dropdown-item" href="https://getbootstrap.com/docs/5.3/forms/input-group/" target="_blank">Input group</a></li>
                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>TD05: Formulaire PHP dynamique avec Bootstrap 5</h1>
      </div>

      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 1 ===== -->
      <!-- ================================================================================================================ -->

      <p/><hr/>
      <div id='exercice1' class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 1 : formulaire de login et méthode GET</h5>

          <?php
          
          form_begin("mt-3", "GET", "td05_planning_action.php");
          form_input_text("Nom", "nom", 30, "Pin");
          form_select("JourLabel", "jourlabel", "", 5, listeJourLabel());
          form_select("JourIndice", "jourIndice", "", 5, listeJourIndice());
          form_select("Mois", "mois", "", 3, listeMois());
          form_select("Séance", "seance[]", "multiple", 6, listeSeance());
          form_input_reset("effacer");
          form_input_submit("envoyer");
          form_end();
          
          ?>

        </div>
      </div>
      
      <!-- ================================================================================================================ -->
      <!-- ===== Exercice 2 ===== -->
      <!-- ================================================================================================================ -->

      <div id='exercice2' class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 2 : tournoi et méthode GET</h5>
      
            <?php

                form_begin("mt-3", "GET", "td05_tournoi_form.php");
                form_select("Joueurs équipe", "nbplayers", "", 4, joueursEquipe());
                form_input_reset("annuler");
                form_input_submit("soumettre");
                form_end();

            ?>
          
        </div>
      </div>
      
    <!-- ================================================================================================================ -->
    <p/><hr/><p/>
    <small>Page de Ilan Pin rédigée le 24 mars 2023</small>
    <p/><hr/><p/>
  </body>
</html>



