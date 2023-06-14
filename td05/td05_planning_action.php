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
          <h5 class="card-title">Exercice 1 : traitement du formulaire de soutenance</h5>

          <h1 clas="fw-bold">SuperGlobale GET</h1>
          
            <table class="table w-50 table-bordered">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>valeur(s)</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($_GET as $name => $value) {
                        if(is_array($value)){
                            $tab = implode(", ", $_GET["$name"]);
                            echo "<tr><td>$name</td><td>$tab</td></tr>";
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
    </body>
</html>