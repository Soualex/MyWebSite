<?php
  
//On inclut le modèle
include MODELE_DIR.'/news.php';

// On créé une nouvelle instance de news
$manager = new NewsManager(PDO2::getInstance());
  
//On récupère les news
foreach($manager->getList(0, 5) as $news)
{
    $titre = Secure::output($news->titre());
    $contenu = Secure::output(nl2br($news->contenu()));
    $auteur = Secure::output($news->auteur());
    $dateAjout = Secure::output($news->dateAjout());
    $dateModif = Secure::output($news->dateModif());
    $id = Secure::output($news->id());
}
  
//On inclut la vue
include VUE_DIR.'/news.php';

?>