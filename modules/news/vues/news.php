<?php

foreach ($news as $n)
{
  echo '<h2><img src="style/image/emerald.png" class="icon" />', $n->titre(), '</h2>', "\n",
       '<p>Par <em>', $n->auteur(), '</em>, ', $n->dateAjout(); 
       
  if ($session_rank > MODO)
  {
    echo ' <a href="index.php?page=admin&cat=manage-news&news-edit=', $n->id(), '" title="Modifier la News" ><img src="./style/image/edit.png" /></a> 
           <a href="index.php?page=admin&cat=manage-news&news-delete=', $n->id(), '" title="Supprimer la News" ><img src="./style/image/delete.png" /></a></p>', "\n";
  }
       
  echo '<p>', nl2br($n->contenu()), '</p>', "\n";
   
  if ($n->dateAjout() != $n->dateModif())
  {
    echo '<p style="text-align: right;"><small><em>Modifiée ', $n->dateModif(), '</em></small></p>';
  }
}

?>