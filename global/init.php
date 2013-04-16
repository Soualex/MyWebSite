<?php
 
// Inclusion du fichier de configuration et du loader de .class
require 'global/config.php';
require 'libs/autoload.inc.php';

// Utilisation et démarrage des sessions
session_start();

// Définition des variables de l'utilisateur
$user_rank = (isset($_SESSION['rank'])) ? (int) $_SESSION['rank'] : 1;
$user_id = (isset($_SESSION['id'])) ? (int) $_SESSION['id'] : 0;
$user_name = (isset($_SESSION['name'])) ? $_SESSION['name'] : '';

?>