<?php

// Initialisation
require 'global/init.php';

// D�but de la tamporisation de sortie
ob_start();
 
// Si un module est specifi�, on regarde s'il existe
if (isset($_GET['module'])) 
{
    if ($_GET['module'] == is_dir(dirname(__FILE__).'/modules/'.$_GET['module'].'/')) 
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
            erreur('Action Impossible', 'Cette action ne vous est pas autoris� ou est inexistante');
        }
    }
    else
    {
        erreur('Page Inexistante', 'La page que vous tentez d\'afficher est introuvable sur le serveur. Veuille v�rfifier les donn�es que vous avez saisi');
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