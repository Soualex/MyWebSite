<?php
  
//On inclut le mod�le
include 'modeles/news.php';

// On cr�� une nouvelle instance de news
$manager = new NewsManager(PDO2::getInstance());
  
//On r�cup�re les news
foreach($manager->getList(1, 5) as $cle => $element)
{
    $news[$cle]['titre'] = $element['titre'];
    $news[$cle]['contenu'] = nl2br($element['contenu']);
    $news[$cle]['auteur'] = $element['auteur'];
    $news[$cle]['dateAjout'] = $element['dateAjout'];
    $news[$cle]['dateModif'] = $element['dateModif'];
    $news[$cle]['id'] = $element['id'];
}
  
//On inclut la vue
include 'modules/news/vues/news.php';

?>