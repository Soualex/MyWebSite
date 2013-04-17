<?php

// Constantes pour le hashage
define("PRE","1zA$");//Sel
define("POST","%yU1");


class Secure
{
      /**
       * Securise les donn�es entrantes dans la DB
       * @param Une cha�ne de caract�res
       * @return Une cha�ne de carat�re s�curi�
       */
       
    public static function input($string)
    {
        // On regarde si le type de string est un nombre entier (int)
        if(ctype_digit($string))
        {
            $string = intval($string);
        }
        // Pour tous les autres types
        else
        {
            $string = mysql_real_escape_string($string);
            $string = addcslashes($string, '%_');
        }
                         
        return $string;
    }
        
        
      /**
       * Securise les donn�es sortantes de la DB
       * @param Une cha�ne de caract�res
       * @return Une cha�ne de carat�re s�curi�
       */
    public static function output($string)
    {
                return htmlentities($string);
    }
    
    
      /**
       * Hash un mot de passe
       * @param Mot de passe en clair
       * @return Mot de passe hash�
       */
       
    public static function hash($password)
    {
        return hash("whirlpool", PRE . $password . POST);
    }
}

?>