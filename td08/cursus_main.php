<?php
require_once 'Module.class.php';
require_once 'Cursus.class.php';
require_once 'Charte.class.php';

$module1 = new Module("LO07", "Technologies du Web", "TM", "140");
$module2 = new Module("IF26", "Applications Mobile Android", "TM", "77");
$cursus = new Cursus();

$cursus->addModule($module1);
$cursus->addModule($module2);

echo Charte::html_head_bootstrap5("Exercice 2");
$cursus->affiche();
echo Charte::html_foot_bootstrap5();