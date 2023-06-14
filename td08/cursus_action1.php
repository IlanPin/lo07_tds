<?php
require_once 'Module.class.php';
require_once 'Cursus.class.php';
require_once 'Charte.class.php';

$module1 = new Module($_GET["sigle1"], 
        $_GET["label1"], 
        $_GET["categorie1"], 
        $_GET["effectif1"]);
$module2 = new Module($_GET["sigle2"], 
        $_GET["label2"], 
        $_GET["categorie2"], 
        $_GET["effectif2"]);
$module3 = new Module($_GET["sigle3"], 
        $_GET["label3"], 
        $_GET["categorie3"], 
        $_GET["effectif3"]);
$cursus = new Cursus();

$cursus->addModule($module1);
$cursus->addModule($module2);
$cursus->addModule($module3);

echo Charte::html_head_bootstrap5("Exercice 2");
$cursus->affiche();
echo Charte::html_foot_bootstrap5();