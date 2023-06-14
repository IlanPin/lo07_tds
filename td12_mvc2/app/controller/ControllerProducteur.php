<?php
require_once '../model/ModelProducteur.php';

class ControllerProducteur {
 public static function producteurReadAll() {
  $results = ModelProducteur::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewAll.php';
  if (DEBUG)
   echo ("ControllerProducteur : producteurReadAll : vue = $vue");
  require ($vue);
 }

 public static function producteurReadId($args) {
  $results = ModelProducteur::getAllId();

  $target = $args['target'];
  if (DEBUG) echo ("ControllerProducteur:producteurReadId : target = $target</br>");
  
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewId.php';
  require ($vue);
 }

 public static function producteurReadOne() {
  $producteur_id = $_GET['id'];
  $results = ModelProducteur::getOne($producteur_id);

  include 'config.php';
  $vue = $root . '/app/view/producteur/viewAll.php';
  require ($vue);
 }

 public static function producteurCreate() {
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewInsert.php';
  require ($vue);
 }

 // Affiche un formulaire pour récupérer les informations d'un nouveau producteur.
 // La clé est gérée par le systeme et pas par l'internaute
 public static function producteurCreated() {
  // ajouter une validation des informations du formulaire
  $results = ModelProducteur::insert(
      htmlspecialchars($_GET['nom']), htmlspecialchars($_GET['prenom']), htmlspecialchars($_GET['region'])
  );
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewInserted.php';
  require ($vue);
 }
 
 public static function producteurReadAllRegion() {
  $results = ModelProducteur::getAllRegion();
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewRegion.php';
  require ($vue);
 }
 
 public static function producteurReadNbProd() {
  $results = ModelProducteur::getNbProd();
  include 'config.php';
  $vue = $root . '/app/view/producteur/viewNbProd.php';
  require ($vue);
 }
 
 public static function producteurDeleted() {
     $producteur_id = $_GET['id'];
     $results = ModelProducteur::delete($producteur_id);

     include 'config.php';
     $vue = $root . '/app/view/producteur/viewAll.php';
     require ($vue);
 }
 
}
?>