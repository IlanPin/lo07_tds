<?php
class Cursus2 {
    private $listeModules;
    
    function __construct() {
        session_start();
        $_SESSION["SESSION_cursus"];
        if(isset($_SESSION["SESSION_cursus"])){
            $this->listeModules = $_SESSION["SESSION_cursus"];
        }
    }
    
    function addModule($module) {
        $this->listeModules[$module->getSigle()]=$module;
        $_SESSION["SESSION_cursus"][$module->getSigle()]=$module;
    }
    
    function __toString() {
        $resultat = "";
        foreach($this->listeModules as $key => $value) {
            $resultat .= "$key => $value<br>";
        }
        return $resultat;
    }
    
    function affiche() {
        echo "<h2>Définition des modules</h2><br>\n";
        foreach($this->listeModules as $key => $value) {
            echo "Module (" . $this->listeModules[$key]->getSigle()
                    . "," . $this->listeModules[$key]->getLabel()
                    . "," . $this->listeModules[$key]->getCategorie()
                    . "," . $this->listeModules[$key]->getEffectif()
                    . ")<br>";
        }
        echo "<br>\n";
        echo "<h2>Définition d'un cursus</h2><br>\n";
        foreach($this->listeModules as $key => $value) {
            echo "addmodule : Module (" . $this->listeModules[$key]->getSigle()
                    . "," . $this->listeModules[$key]->getLabel()
                    . "," . $this->listeModules[$key]->getCategorie()
                    . "," . $this->listeModules[$key]->getEffectif()
                    . ")<br><br>\n";
        }
        echo "<h2>Affichage d'un cursus</h2><br>\n";
        echo "<pre>";
        print_r($this->listeModules);
        echo"</pre>";
    }
    
    function affiche_session(){
        echo "<h3>Visualisation des modules</h3><br>\n";
        foreach($_SESSION["SESSION_cursus"] as $key => $value) {
            echo $_SESSION["SESSION_cursus"][$key]->getSigle() . " :=: Module (" . $_SESSION["SESSION_cursus"][$key]->getSigle()
                    . "," . $_SESSION["SESSION_cursus"][$key]->getLabel()
                    . "," . $_SESSION["SESSION_cursus"][$key]->getCategorie()
                    . "," . $_SESSION["SESSION_cursus"][$key]->getEffectif()
                    . ")<br>";
        }
        echo "Affichage de la superGlobale SESSION<br>";
        echo "<pre>";
        print_r($_SESSION["SESSION_cursus"]);
        echo"</pre>";
    }
}