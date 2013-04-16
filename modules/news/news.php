<?php
  
//On inclut le modèle
include MODELE_DIR.'news.php';

// On créé une nouvelle instance de news
$manager = new NewsManager(PDO2::getInstance());
  
//On récupère les news
$news = NewsManager->getList(0, 5);
  
//On inclut la vue
include VUE_DIR.'news.php';

?>