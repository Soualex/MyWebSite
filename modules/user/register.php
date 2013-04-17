<?php

if ($user_id != 0)
{
    erreur('', ALREADY_REGISTRED);
}
else
{
    //On inclut le modèle
    include MODELE_DIR.'register.php';

    
    function checkPseudo($pseudo)
    {
        $query = $this->getData($pseudo, self::SEARCHDATA_PSEUDO);
        $pseudo_free = ($query->fetchColumn()==0)?1:0;
        $query->CloseCursor();
        
        if (empty($pseudo))
        {
            $this->err_pseudo = 'Champ vide';
        }
        else if(!$pseudo_free)
        {
            $this->err_pseudo = 'Pseudo déjà utilisé';
        }  
        else if (strlen($pseudo) < 3)
        {
            $this->err_pseudo = 'Pseudo trop court';
        }
        else if (strlen($pseudo) > 15)
        {
            $this->err_pseudo = 'Pseudo trop long';
        }
        else
        {
            $this->pseudo = $pseudo;
        }
    }
    
    function checkPassword($pass, $confirm_pass)
    {
        if (empty($pass) || empty($confirm_pass))
        {
            $this->err_pass = 'Champ vide';
            $this->err_confirm_pass = 'Champ vide';
        }
        else if (empty($confirm_pass))
        {
            $this->err_confirm_pass = 'Champ vide';
        }
        else if ($pass != $confirm_pass)
        {
            $this->err_confirm_pass = 'Mots de passe différents';
        }
        else
        {
            $this->password = md5($pass);
        }
    }
    
    function checkMail($mail)
    {
        $query = $this->getData($mail, self::SEARCHDATA_EMAIL);
        $mail_free = ($query->fetchColumn()==0)?1:0;
        $query->CloseCursor();
        
        if (empty($mail))
        {
            $this->err_email = 'Champ vide';
        }
        else if(!$mail_free)
        {
            $this->err_email = 'Adresse email déjà utilisé';
        }
        else if (!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $mail) || empty($mail))
        {
            $this->err_email = 'Format incorrecte';
        }
        else
        {
            $this->email = $mail;
        }
    }
     
     
    //On inclut la vue
    include VUE_DIR.'register.php';
} 

?>