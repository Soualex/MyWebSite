<?php
  
//On inclut le mod�le
include 'modeles/news.php';

// On cr�� une nouvelle instance de news
$manager = new NewsManager(PDO2::getInstance());
  
//On r�cup�re les news
foreach($manager->getList(1, 5) as $cle => $news)
{
    $news[$cle]['titre'] = $news['titre'];
    $news[$cle]['contenu'] = nl2br($news['contenu']);
}
  
//On inclut la vue
include 'modules/news/vues/news.php';

?>