<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Proposition 1</h5>

          <div class='mx-lg-3'> 

            Utilisation d'un routeur plus robuste : 
            au lieu d'utiliser un simple switch-case, 
            nous pouvons envisager d'utiliser une bibliothèque de routage plus avancée et flexible, 
            telle que FastRoute ou Symfony Routing Component.

          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Proposition 2</h5>

          <div class='mx-lg-3'> 

            Utilisation d'un système de conteneur d'injection de dépendances (DI) : 
            au lieu d'inclure directement les classes de contrôleur dans le routeur, 
            nous pouvons utiliser un conteneur d'injection de dépendances pour gérer les instances des classes de contrôleur. 
            Cela facilite la gestion des dépendances et la création d'objets.

          </div>
        </div>
      </div>
    
  </div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>