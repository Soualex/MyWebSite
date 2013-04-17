<?php
  
//On inclut le modèle
include 'modeles/news.php';

// On créé une nouvelle instance de news
$manager = new NewsManager(PDO2::getInstance());
  
//On récupère les news
foreach($manager->getList(1, 5) as $cle => $news)
{
    $news[$cle]['titre'] = $news['titre'];
    $news[$cle]['contenu'] = nl2br($news['contenu']);
}
  
//On inclut la vue
include 'modules/news/vues/news.php';

?>