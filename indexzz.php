<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Calendar</title>
</head>
<body>
    <h1> Site publier sur Github </h1>
</body>
</html>
<?php
/** 
 * Script de contr�le et d'affichage du cas d'utilisation "Rechercher"
 * @package default
 * @todo  RAS
 */
 
  $repInclude = './include/';
  $repVues = './vues/';
  
  require($repInclude."_init.inc.php");
 
  // Construction de la page Accueil
  // pour l'affichage (appel des vues) 
  include($repVues."entete.php") ;
  include($repVues."menu.php") ;
  include($repVues."vAccueil.php");
  include($repVues."pied.php") ;
?>
    
