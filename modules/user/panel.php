<?php

if ($user_id == 0)
{
    //On inclut le mod�le
    include MODELE_DIR.'/login.php';
    
    if (isset($_POST['pseudo']))
    {
        // D�finition des variables
        $errors[] = NULL;
        
        $query = getData($_POST['pseudo']);
        $data = $query->fetch();
        
        if (empty($_POST['pseudo'])) 
        {
            $errors['pseudo'] = EMPTY_FIELD;
        }      
        else if (empty($data['pseudo']))
        {
            $errors['pseudo'] = 'Pseudo inexistant';
        }
        else
        {
            $pseudo = Secure::input($_POST['pseudo']);
        }

        if (empty($_POST['password'])) 
        {
            $errors['password'] = EMPTY_FIELD;
        }              
        else if ($data['password'] != md5($_POST['password']))
        {
            $errors['password'] = 'Mot de passe incorrecte';
        }
        else
        {
            $password = Secure::input($_POST['password']);
        }
        
        $query->CloseCursor();
        
        // D�finition des variables de sessions et mise � jour de compte
        if (empty($errors['pseudo']) && empty($errors['password']))
        {
            $_SESSION['name'] = $data['pseudo'];
            $_SESSION['rank'] = $data['rank'];
            $_SESSION['id'] = $data['id'];
            $query->CloseCursor();
            
            update($pseudo);
            
            header('Location: '.$_SERVER['HTTP_REFERER'].'');
        }
    }

    //On inclut la vue
    include 'modules/user/vues/login.php';
}
else
{
    switch($user_rank)
    {
        case 1:
        $rank_name = 'Visiteur';
        break;
                        
        case 2:
        $rank_name = '<img src="style/image/membre.gif" class="icon" />';
        break;

        case 3:
        $rank_name = '<img src="style/image/modo.gif" class="icon" />';
        break;

        case 4:
        $rank_name ='<img src="style/image/admin.gif" class="icon" />';
        break;

    }
    
    //On inclut la vue
    include 'modules/user/vues/panel.php';
}

?>