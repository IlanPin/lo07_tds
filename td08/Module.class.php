<?php
require 'WebBean.interface.php';
require 'Charte.class.php';

class Module implements WebBean {
    private $sigle;
    private $label;
    private $categorie;
    private $effectif;
    
    // sigle
    function getSigle() {
        return $this->sigle;
    }
    function setSigle($value) {
        $this->sigle=$value;
    }
    
    // label
    function getLabel() {
        return $this->label;
    }
    function setLabel($value) {
        $this->label=$value;
    }
    
    // categorie
    function getCategorie() {
        return $this->categorie;
    }
    function setCategorie($value) {
        $this->categorie=$value;
    }
    
    // effectif
    function getEffectif() {
        return $this->effectif;
    }
    function setEffectif($value) {
        $this->effectif=$value;
    }
    
    // constructeur
    function  __construct($sigle, $label, $categorie, $effectif) {
        $this->setSigle($sigle);
        $this->setLabel($label);
        $this->setCategorie($categorie);
        $this->setEffectif($effectif);
    }
    
    // affichage
    function __toString() {
        return "Module : $this->label, $this->sigle, $this->categorie, $this->effectif";
    }
    
    //interface WebBean
    public function valide() {
        $resultat= TRUE;
        $sigle = filter_input(INPUT_GET, "sigle", FILTER_SANITIZE_STRING);
        $label = filter_input(INPUT_GET, "label", FILTER_SANITIZE_STRING);
        $categorie = filter_input(INPUT_GET, "categorie", FILTER_SANITIZE_STRING);
        $effectif = filter_input(INPUT_GET, "effectif", FILTER_SANITIZE_STRING);
        $tab = [
            $sigle,
            $label,
            $categorie,
            $effectif
        ];
        foreach ($tab as $key => $value) {
            if($value == NULL){
                $resultat = FALSE;
            }
        }
        return $resultat;
    }
    public function pageOK() {
        echo Charte::html_head_bootstrap5("Exercice 1");
        echo ("<h2>Votre formulaire est correct</h2>\n");
        foreach ($_GET as $key => $value){
            echo ("$key => $value<br>\n");
        }
        echo ("<br>");
    }
    public function pageKO() {
        echo Charte::html_head_bootstrap5("Exercice 1");
        echo ("<h2>Votre formulaire n'est pas correct</h2>\n");
        echo Charte::html_foot_bootstrap5();
    }
    public function pageFoot() {
        echo Charte::html_foot_bootstrap5();
    }
    public function sauveXML($file) {
        return "xml";
    }
    public function sauveTXT() {
        echo ("<h3>SauveTXT</h3>\n");
        $resultat = $this->sigle . ";";
        $resultat .= $this->label . ";";
        $resultat .= $this->categorie . ";";
        $resultat .= $this->effectif . ";<br>";
        return $resultat;
    }
    public function sauveBDR() {
        echo ("<h3>SauveBDR</h3>");
        $resultat = "insert into modules values (";
        $resultat .= "'" . $this->sigle . "',";
        $resultat .= "'" . $this->label . "',";
        $resultat .= "'" . $this->categorie . "',"; 
        $resultat .= "'" . $this->effectif . "');";
        return $resultat;
    }
    public function createTable() {
        echo ("<h3>createTable</h3>");
        $resultat = "create table modules (sigle varchar(6) not null, 
                categorie varchar(2) check categorie in ('CS', 'TM', 'EC','ME', 'CT'), 
                label varchar(40) not null, 
                effectif integer, 
                primary key (sigle));<br>";
        return $resultat;
    }
}