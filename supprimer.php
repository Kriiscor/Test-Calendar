<?php
/** 
 * Script de contrôle et d'affichage du cas d'utilisation "Ajouter"
 * @package default
 * @todo  RAS
 */
 
// Initialise les ressources nécessaires au fonctionnement de l'application

  $repVues = './vues/';
  require("./include/_init.inc.php");
  
    

// DEBUT du contrôleur ajouter.php

if (count($_POST)==0)
{
  $etape = 1;
}
else
{
  $etape = 2;
  $uneRef=$_POST["ref"];
  
  supprimer($uneRef,$tabErreurs);
}

// Début de l'affichage (les vues)

include($repVues."entete.php");
include($repVues."menu.php");
include($repVues."erreur.php");

if ($etape == 1)
{
include($repVues."vSupprimer.php");
}
include($repVues."pied.php");
?>
  
