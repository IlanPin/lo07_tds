<?php
require ('lo07_biblio_formulaire.php');
require('lo07_biblio_tournoi.php');
?>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
        <link href="my_css.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
       <div class="card">
        <div class="card-body bg-info">
          <h5 class="card-title">Exercice 2 : détails de l'équipe</h5>

          <?php
          
          form_begin("mt-3", "GET", "td05_tournoi_action.php");
          $nb = intval($_GET["nbplayers"]);
          for($i = 1; $i <= $nb; $i++){
              form_input_text("Name_"."$i", "name_"."$i", 30, "nom");
              form_input_text("Fname_"."$i", "fname_"."$i", 30, "prénom");
              form_input_text("Email_"."$i", "email_"."$i", 30, "email");
              echo "<br>";
          }
          form_input_reset("annuler");
          form_input_submit("soumettre");
          form_end();
          
          ?>

        </div>
      </div>
    </body>
</html>