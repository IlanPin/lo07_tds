<?php
require ('lo07_biblio_formulaire.php');
?>

<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TD08</title>
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

    <div class="card-body bg-info">
      <h5 class="card-title">Formulaire pour la collecte des données d'un module</h5>      
      
      <?php
      
      $categorie = [
          "CS",
          "TM",
          "EC",
          "ME",
      ];

      form_begin("mt-3", "GET", "module_action.php");
      form_input_text("Sigle", "sigle", "", "LO07");
      form_input_text("Label", "label", "", "Web");
      form_select("Catégorie", "categorie", "", 4, $categorie);
      form_input_text("Effectif", "effectif", "", "87");
      form_input_submit("envoyer");
      form_input_reset("effacer");
      form_end();

      ?>

    </div>

      
  </body>
</html>