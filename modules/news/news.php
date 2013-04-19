<?php

//On inclut le modèle
include MODELE_DIR.'/news.php';

// On créé une nouvelle instance de news
$manager = new NewsManager(PDO2::getInstance());

$messagesParPage = 5; //Nous allons afficher 5 messages par page.

//Une connexion SQL doit être ouverte avant cette ligne...
$donnees_total = $manager->count();
// $total = $donnees_total['total']; //On récupère le total pour le placer dans la variable $total.

//Nous allons maintenant compter le nombre de pages.
$nombreDePages = ceil($donnees_total / $messagesParPage);

if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
{
     $pageActuelle = intval($_GET['page']);
     
     if($pageActuelle > $nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
     {
          $pageActuelle = $nombreDePages;
     }
}
else // Sinon
{
     $pageActuelle = 1; // La page actuelle est la n°1    
}

$premiereEntree = ($pageActuelle - 1) * $messagesParPage; // On calcul la première entrée à lire

//On récupère les news
foreach($manager->getList($premiereEntree, $messagesParPage) as $news)
{
    $titre = Secure::output($news->titre());
    $contenu = nl2br(Secure::output($news->contenu()));
    $auteur = Secure::output($news->auteur());
    $dateAjout = Secure::output($news->dateAjout());
    $dateModif = Secure::output($news->dateModif());
    $id = Secure::output($news->id());
}

//On inclut la vue
include VUE_DIR.'/news.php';

?>