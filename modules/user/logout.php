<?php

if ($user_id  == 0) 
{
    erreur('Authentification Requise', ERR_IS_NOT_CO);
}
else
{
    session_destroy();
    
    header('Location: '.$_SERVER['HTTP_REFERER']);
    exit();
}

?>