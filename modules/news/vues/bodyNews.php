<p align="center">Page :

<?php

for($i = 1; $i <= $nombreDePages; $i++) //On fait notre boucle
{
     //On va faire notre condition
     if($i == $pageActuelle) //Si il s'agit de la page actuelle...
     {
         echo $i; 
     }	
     else //Sinon...
     {
          echo ' <a href="index.php?page='.$i.'">'.$i.'</a> ';
     }
}

?>

</p>