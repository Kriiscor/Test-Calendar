<?php
/** 
 * Script de contr�le et d'affichage du cas d'utilisation "Rechercher"
 * @package default
 * @todo  RAS
 */
 
// Initialise les ressources n�cessaires au fonctionnement de l'application

  $repVues = './vues/';
  require("./include/_init.inc.php");

// DEBUT du contr�leur lister.php
 
  $lafleur = lister();
  
  // Construction de la page Lister
  // pour l'affichage (appel des vues)
  include($repVues."entete.php") ;
  include($repVues."menu.php") ;
  include($repVues."vLister.php");
  include($repVues."pied.php") ;
  ?>
    
