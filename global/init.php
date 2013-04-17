<?php
 
// Inclusion du fichier de configuration et du loader de .class
require 'global/config.php';
require 'libs/autoload.inc.php';

// Utilisation et d�marrage des sessions
session_start();

// D�finition des variables de l'utilisateur
$user_rank = (isset($_SESSION['rank'])) ? (int) $_SESSION['rank'] : 1;
$user_id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;
$user_name = (isset($_SESSION['name'])) ? $_SESSION['name'] : '';

// Fonctions
function erreur($title, $message)
{
    if($message == NULL)
    {
        $message = 'Une erreur inconnue s\'est produite';
    }
    
    echo '
    <div class="page">
        <h2><img src="style/image/erreur.png"  class="icon" />Erreur : '.$title.'</h2>
        <p>'.$message.'. S\'il s\'agit d\'une erreur, veuillez contacter l\'Administrateur.</p>
        <p><a href="index.php">Retourner � l\'acceuil</a></p>
    </div>';
}

?>