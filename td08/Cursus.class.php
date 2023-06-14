<?php
class Cursus {
    private $listeModules;
    
    function __construct() {
        $this->listeModules = [];
    }
    
    function addModule($module) {
        $this->listeModules[$module->getSigle()]=$module;
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
}
