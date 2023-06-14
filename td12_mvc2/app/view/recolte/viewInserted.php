<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
<div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
    if ($results!=1) {
        echo ("<h3>La nouvelle récolte a été ajoutée</h3>");
        echo("<ul>");
        echo ("<li>producteur_id = " . $_GET['producteur'] . "</li>");
        echo ("<li>vin_id = " . $_GET['vin'] . "</li>");
        echo ("<li>quantite = " . $_GET['quantite'] . "</li>");
        echo("</ul>");
    } else {
        echo ("<h3>La recolte a été mise à jour</h3>");
        echo("<ul>");
        echo ("<li>producteur_id = " . $_GET['producteur'] . "</li>");
        echo ("<li>vin_id = " . $_GET['vin'] . "</li>");
        echo ("<li>quantite = " . $_GET['quantite'] . "</li>");
        echo("</ul>");
    }

    echo("</div>");

    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    