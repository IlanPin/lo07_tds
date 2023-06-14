<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LO07 TD10</title>
    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../css/bootstrap53.min.css" type="text/css"/>

  </head>
  <body>
    <div class="container">
      <h1>TD10</h1>
      <script 
          src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
          integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
      </script>

      <nav class="navbar navbar-expand-lg bg-primary fixed-top">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">LO07 TD10</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>
      </nav> 

      <!-- ================================================================================================================ -->
      <!-- ===== Les jumbotrons de BT3 n'existe plus et sont remplacés par de simple div ===== -->       

      <div class="mt-4 p-5 bg-primary text-white rounded">
        <h1>PHP et SQL</h1>
      </div>

      <p/><hr/>
      <div class="card">
        <div class="card-body bg-info">
          <h6 class="card-title">Connexion à ma base sur dev-isi</h6>

          <div class='mx-lg-3'> 

            <?php 
            $dsn = 'mysql:dbname=pinilan;host=localhost;charset=utf8';
            $username = 'pinilan';
            $password = 'xuz1valb';
            
            try {
                $base = new PDO($dsn, $username, $password);
            } catch (PDOException $ex) {
                printf("%s - %s<p/>\n", $ex->getCode(), $ex->getMessage());
            }
            ?>
              
              <ul>
                  <li>dsn = <?php echo $dsn ?></li>
                  <li>username = <?php echo $username ?></li>
                  <li>password = ........</li>
              </ul>


          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-body bg-info">
          <h6 class="card-title">Insertion d'un tuple : insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45)</h6>

          <div class='mx-lg-3'> 

            <?php 
            $requete1 = "insert into vin values (3001, 'Champagne de Troyes', 1976, 11.45)";
            
            if($base->exec($requete1)) {
                echo "Nombre de tuples ajoutés = 1";
                $base->exec($requete1);
            }
            else {
                echo "Nombre de tuples ajoutés = 0";
            }
            ?>
              
              
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-body bg-info">
          <h6 class="card-title">Requete SQL : query = select * from vin where annee = 1976</h6>

          <div class='mx-lg-3'> 

            <?php 
            $requete2 = "select * from vin where annee = 1976";
            $resultats = $base->query($requete2);
            /*$i=1;
            while($row = $resultats->fetch(2)) {
                $vin = implode(", ", $row);
                echo($i.". vin(".$vin.")");
                echo("<br>");
                $i++;
            }*/
            ?>
              
              
              <h6 class="card-title">Tableau Bootstrap</h6>
              
            <?php
            echo("<table class='table table-bordered'>");
            echo("<tbody>");
            while($row = $resultats->fetch(2)) {
               echo("<tr class='table-warning'>
                       <td>".$row["id"]."</td>
                       <td>".$row["cru"]."</td>
                       <td>".$row["annee"]."</td>
                       <td>".$row["degre"]."</td>
                    </tr>");
            }
            echo("</tbody>");
            echo("</table>");
            ?>
              
              
          </div>
        </div>
      </div>

      <div class="card">
        <div class="card-body bg-info">
          <h6 class="card-title">Récupération des noms des attributs avec select id, cru from vin where annee = 1976</h6>

          <div class='mx-lg-3'> 

            <?php
            $requete3 = "select id, cru from vin where annee = 1976";
            $statement = $base->query($requete3);
            
            $nbcol = $statement->columnCount();
            
            echo("<table class='table table-bordered'>");
            echo("<thead>");
            echo("<tr class='table-danger'>");
            for($i = 0; $i < $nbcol; $i++) {
                $nom = $statement->getColumnMeta($i);
                echo("<th>".$nom["name"]."</th>");
            }
            echo("</tr>");
            echo("</thead>");
            echo("<tbody>");
            while($row = $statement->fetch()) {
                echo("<tr class='table-success'>");
                for($i = 0; $i < $nbcol; $i++) {
                    echo("<td>".$row[$i]."</td>");
                }
                echo("</tr>");
            }
            echo("</tbody>");
            echo("</table>");
            ?>
              
              
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-body bg-info">
          <h6 class="card-title">Requete paramétrée par position avec annee = 1980</h6>

          <div class='mx-lg-3'> 

            <?php 
            $requete4 = "select cru, annee from vin where annee = :a";
            $statement = $base->prepare($requete4);
            
            $statement->execute(['a' => 1980]);
            
            $nbcol = $statement->columnCount();
            
            echo("<table class='table table-bordered'>");
            echo("<thead>");
            echo("<tr class='table-danger'>");
            for($i = 0; $i < $nbcol; $i++) {
                $nom = $statement->getColumnMeta($i);
                echo("<th>".$nom["name"]."</th>");
            }
            echo("</tr>");
            echo("</thead>");
            echo("<tbody>");
            while($row = $statement->fetch()) {
                echo("<tr class='table-success'>");
                for($i = 0; $i < $nbcol; $i++) {
                    echo("<td>".$row[$i]."</td>");
                }
                echo("</tr>");
            }
            echo("</tbody>");
            echo("</table>");
            ?>
              
              
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-body bg-info">
          <h6 class="card-title">Paramètres nommés</h6>

          <div class='mx-lg-3'> 

            <?php 
            $requete5 = "select id, cru from vin where annee = :an and degre = :dg";
            
            $statement = $base->prepare($requete5);
            
            $statement->execute([
            'an' => 1980,
            'dg' => 10.00
            ]);
            
            $nbcol = $statement->columnCount();
            
            echo("<table class='table table-bordered'>");
            echo("<thead>");
            echo("<tr class='table-danger'>");
            for($i = 0; $i < $nbcol; $i++) {
                $nom = $statement->getColumnMeta($i);
                echo("<th>".$nom["name"]."</th>");
            }
            echo("</tr>");
            echo("</thead>");
            echo("<tbody>");
            while($row = $statement->fetch()) {
                echo("<tr class='table-success'>");
                for($i = 0; $i < $nbcol; $i++) {
                    echo("<td>".$row[$i]."</td>");
                }
                echo("</tr>");
            }
            echo("</tbody>");
            echo("</table>");
            ?>
              
              
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-body bg-info">
          <h6 class="card-title">Gestion des erreurs</h6>

          <div class='mx-lg-3'> 

            <?php
            $requete6 = "select * from vinXYZ";
            $resultat = $base->query($requete6);
            if ($resultat == false) {
                $erreur = $base->errorInfo();
                foreach($erreur as $value) {
                    echo($value . " ");
                }
            }
            ?>
              
              
          </div>
        </div>
      </div>
      
      <div class="card">
        <div class="card-body bg-info">
          <h6 class="card-title">Gestion des transactions</h6>

          <div class='mx-lg-3'> 

            <?php 
            $base->beginTransaction();

            $requete7 = "insert into vin values (2000, 'Champagne de Troyes', 2019, 11.45)";
            if ($base->exec($requete7) == false) {
                $base->rollback();
                echo "Erreur lors de l'exécution de la première insertion : " . $base->errorInfo()[2];
            } else {
                if ($base->exec($requete7) == false) {
                    $base->rollback();
                    echo "Erreur lors de l'exécution de la deuxième insertion : " . $base->errorInfo()[2];
                } else {
                    $base->commit();
                    echo "Les deux insertions ont été effectuées avec succès";
                }
            }
            ?>
              
              
          </div>
        </div>
      </div>

    <div class="card">
        <div class="card-body bg-info">
          <h6 class="card-title">supprimer tous les vins dont l’id est supérieur à 2500</h6>

          <div class='mx-lg-3'> 

            <?php 
            $requete8 = "delete from vin where id > 2500";
            if ($base->exec($requete8) == false) {
                $erreur = $base->errorInfo();
                foreach($erreur as $value) {
                    echo($value . " ");
                }
            } else {
                $base->exec($requete8);
                echo("suppression effectuée");
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