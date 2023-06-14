<!-- ----- début viewAll -->
<?php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      ?>
      
      <?php
      if($results==NULL) {
          echo ("Le vin a été supprimé.");
      } elseif ($results=="impossible") {
          echo ("Problème de suppression du vin. Il est probable qu'il soit présent dans la table des récoltes.");
      } else {
          echo ("<table class = 'table table-striped table-bordered'>
                  <thead>
                    <tr>
                      <th scope = 'col'>id</th>
                      <th scope = 'col'>cru</th>
                      <th scope = 'col'>annee</th>
                      <th scope = 'col'>degre</th>
                    </tr>
                  </thead>
                  <tbody>");
          
          foreach ($results as $element) {
                printf("<tr><td>%d</td><td>%s</td><td>%d</td><td>%.2f</td></tr>", $element->getId(), 
                $element->getCru(), $element->getAnnee(), $element->getDegre());
            }
            
          echo ("</tbody>
                 </table>");
      }
      ?>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->