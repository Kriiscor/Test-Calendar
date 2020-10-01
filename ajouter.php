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
  $uneDes=$_POST["des"];
  $unPrix=$_POST["prix"];
  $uneImage=$_POST["image"];
  $uneCat=$_POST["cat"];
  ajouter($uneRef, $uneDes, $unPrix, $uneImage, $uneCat,$tabErreurs);
}

// Début de l'affichage (les vues)

include($repVues."entete.php");
include($repVues."menu.php");
include($repVues."erreur.php");
include($repVues."vAjouterForm.php");
include($repVues."pied.php");
?>
  
