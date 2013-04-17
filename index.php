<?php
 
// Initialisation
require 'global/init.php';
 
// D�but de la tamporisation de sortie
ob_start();
 
// Si un module est specifi�, on regarde s'il existe
if (isset($_GET['module'])) 
{
    $module = dirname(__FILE__).'/modules/'.$_GET['module'].'/';
     
    // Si l'action est specifi�e, on l'utilise, sinon, on tente une action par d�faut
    $action = (!empty($_GET['action'])) ? $_GET['action'].'.php' : 'index.php';
     
    // Si l'action existe, on l'ex�cute
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