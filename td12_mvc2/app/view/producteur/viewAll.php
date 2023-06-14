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
          echo ("Le producteur a été supprimé.");
      } elseif ($results=="impossible") {
          echo ("Problème de suppression du producteur. Il est probable qu'il soit présent dans la table des récoltes.");
      } else {
          echo ("<table class = 'table table-striped table-bordered'>
                  <thead>
                    <tr>
                      <th scope = 'col'>id</th>
                      <th scope = 'col'>nom</th>
                      <th scope = 'col'>prenom</th>
                      <th scope = 'col'>region</th>
                    </tr>
                  </thead>
                  <tbody>");

          foreach ($results as $element) {
                printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td></tr>", $element->getId(), 
                $element->getNom(), $element->getPrenom(), $element->getRegion());
            }

          echo ("</tbody>
                 </table>");
      }
      ?>
  </div>
<?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>