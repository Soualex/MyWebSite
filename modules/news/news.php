<?php
  
//On inclut le mod�le
include MODELE_DIR.'news.php';

// On cr�� une nouvelle instance de news
$manager = new NewsManager(PDO2::getInstance());
  
//On r�cup�re les news
$news = NewsManager->getList(0, 5);
  
//On inclut la vue
include VUE_DIR.'news.php';

?>