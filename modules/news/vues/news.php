<?php

echo '<h2><img src="style/image/emerald.png" class="icon" />'.$titre.'</h2>', "\n",
     '<p>Par <em>'.$auteur.'</em>, '.$dateAjout; 
       
if ($user_rank >= MODO)
{
	echo '<a href="index.php?page=admin&cat=manage-news&news-edit='.$id.'" title="Modifier la News" ><img src="./style/image/edit.png" /></a> 
		  <a href="index.php?page=admin&cat=manage-news&news-delete='.$id.'" title="Supprimer la News" ><img src="./style/image/delete.png" /></a></p>', "\n";
}
  
echo '<p>'.$contenu.'</p>', "\n";
   
if ($dateAjout != $dateModif)
{
	echo '<p style="text-align: right;"><small><em>Modifiée '.$dateModif.'</em></small></p>';
}
  
?>
