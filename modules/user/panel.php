<?php

if(isset($_POST['pseudo']))
{
    $db = DBFactory::getMysqlConnexionWithPDO();
    $login = new Login($db, Security::DB($_POST['pseudo']), Security::DB($_POST['password']));
    
    $err_pseudo = $login->checkPseudo();
    $err_pass = $login->checkPass();
    
    if (empty($err_pseudo) && empty($err_pass))
    {
        $login->setSession($login->getData());
        header('Location: '.$_SERVER['HTTP_REFERER'].'');
    }
}

if ($session_id == 0)
{
    //On inclut le modèle
    include MODELE_DIR.'/login.php';
    
    

    //On inclut la vue
    include VUE_DIR.'/login.php';
}
else
{
    //On inclut la vue
    include VUE_DIR.'/panel.php';
}

?>