<?php
/** 
 * Script de contrôle et d'affichage du cas d'utilisation "rechercher"
 * @package default
 * @todo  RAS
 */
 
// Initialise les ressources nécessaires au fonctionnement de l'application

  $repVues = './vues/';
  require("./include/_init.inc.php");

    

// DEBUT du contrôleur supprimer.php

if (count($_POST)==0)
{
  $etape = 1;
}
else
{
  $etape = 2; 
  $uneDes=$_POST["ref"];
  $lafleur = rechercher($uneDes, $tabErreurs);
}

// Début de l'affichage (les vues)

include($repVues."entete.php");
include($repVues."menu.php");
include($repVues."erreur.php");
if ($etape==1)
{
  include($repVues."vRechercher.php");
}
if ($etape==2)
{
  include($repVues."vLister.php");
}
include($repVues."pied.php");
?>
  