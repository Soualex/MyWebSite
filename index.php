<?php
 
// Initialisation
require 'global/init.php';
 
// Début de la tamporisation de sortie
ob_start();
 
// Si un module est specifié, on regarde s'il existe
if (isset($_GET['module'])) 
{
    $module = dirname(__FILE__).'/modules/'.$_GET['module'].'/';
     
    // Si l'action est specifiée, on l'utilise, sinon, on tente une action par défaut
    $action = (!empty($_GET['action'])) ? $_GET['action'].'.php' : 'index.php';
     
    // Si l'action existe, on l'exécute
    if (is_file($module.$action)) 
    {
        include $module.$action;
    }
    else 
    {
        include 'modules/news/news.php';
    }
} 
else 
{
    include 'modules/news/news.php';
}
 
// Fin de la tamporisation de sortie
$contenu = ob_get_clean();
 
// Affichage de la page
include 'global/acceuil.php';

?>