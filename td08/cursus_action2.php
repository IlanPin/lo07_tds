<?php
require_once 'Module.class.php';
require_once 'Cursus2.class.php';
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
$cursus = new Cursus2();

$cursus->addModule($module1);
$cursus->addModule($module2);
$cursus->addModule($module3);

$module1->pageOK();
echo "création d'un cursus et ajout d'un module<br>";
echo "Cursus2 constructeur<br>";
echo "Cursus2 constructeur : recuperation des informations de la variable de session<br>\n";

echo $module1->getSigle()." :=: Module (".$module1->getSigle()
    .",".$module1->getCategorie()
    .",".$module1->getLabel()
    .",".$module1->getEffectif().")<br>"
;
echo $module2->getSigle()." :=: Module (".$module2->getSigle()
    .",".$module2->getCategorie()
    .",".$module2->getLabel()
    .",".$module2->getEffectif().")<br>"
;
echo $module3->getSigle()." :=: Module (".$module3->getSigle()
    .",".$module3->getCategorie()
    .",".$module3->getLabel()
    .",".$module3->getEffectif().")<br><br>\n"
;
$cursus->affiche_session();
Charte::html_foot_bootstrap5();