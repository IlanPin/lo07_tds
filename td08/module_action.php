<?php
require_once 'Module.class.php';

$module = new Module($_GET["sigle"], 
        $_GET["label"], 
        $_GET["categorie"], 
        $_GET["effectif"]
        );

if($module->valide()){
    $module->pageOK();
    echo ($module->sauveTXT() . "<br />\n");
    echo ($module->createTable() . "<br />\n");
    echo ($module->sauveBDR() . "<br />\n");
    $module->pageFoot();
}
else {
    $module->pageKO();
}