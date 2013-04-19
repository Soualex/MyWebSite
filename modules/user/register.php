<?php

if ($user_id != 0)
{
    erreur('', ALREADY_REGISTRED);
}
else
{
    //On inclut le modèle
    include MODELE_DIR.'register.php';
    
    if (isset($_POST['reg_pseudo']))
    {
        // Définition des variables
        $errors[] = NULL;
        
        
        // Vérification du pseudo
        $query = getData($_POST['reg_pseudo'], 'pseudo');
        $pseudo_free = ($query->fetchColumn()==0)?1:0;
        $query->CloseCursor();
        
        if (empty($_POST['reg_pseudo']))
        {
            $errors['pseudo'] = EMPTY_FIELD;
        }
        else if(!$pseudo_free)
        {
            $errors['pseudo'] = 'Pseudo déjà utilisé';
        }  
        else if (strlen($_POST['reg_pseudo']) < 3)
        {
            $errors['pseudo'] = 'Pseudo trop court';
        }
        else if (strlen($_POST['reg_pseudo']) > 15)
        {
            $errors['pseudo'] = 'Pseudo trop long';
        }
        else
        {
            $pseudo = Secure::input($_POST['reg_pseudo']);
        }
        
        
        // Vérification du password
        if (empty($_POST['password']))
        {
            $errors['password'] = EMPTY_FIELD;
        }
        
        if (empty($_POST['confirm']))
        {
            $errors['confirm_password'] = EMPTY_FIELD;
        }
        else if ($_POST['password'] != $_POST['confirm'])
        {
            $errors['confirm_password'] = 'Mots de passe différents';
        }
        else
        {
            $password = Secure::input($_POST['password']);
        }
        
        
        // Verification de l'email
        $query = getData($_POST['email'], 'email');
        $mail_free = ($query->fetchColumn()==0)?1:0;
        $query->CloseCursor();
        
        if (empty($_POST['email']))
        {
            $errors['email'] = EMPTY_FIELD;
        }
        else if(!$mail_free)
        {
            $errors['email'] = 'Adresse email déjà utilisé';
        }
        else if (!preg_match("#^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email']) || empty($_POST['email']))
        {
            $errors['email'] = 'Format incorrecte';
        }
        else
        {
            $email = Secure::input($_POST['email']);
        }
        
        
        // Ajout de l'utilisateur
        if (empty($errors['email']) && empty($errors['pseudo']) && empty($errors['password']) && empty($errors['confirm_password']))
        {
            add($pseudo, $password, $email);
        }
    }
    
     
    //On inclut la vue
    include VUE_DIR.'register.php';
} 

?>