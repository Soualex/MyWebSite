<?php

function getData($pseudo)
{
    $query = PDO2::getInstance()->prepare('SELECT * FROM users WHERE pseudo = :pseudo');
    $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $query->execute();
            
    return $query;
}

function update($pseudo)
{
    $query = PDO2::getInstance()->prepare('UPDATE users SET last_login = NOW(), ip = :ip WHERE pseudo = :pseudo');
    $query->bindValue(':ip', $_SERVER["REMOTE_ADDR"], PDO::PARAM_INT);
    $query->bindValue(':pseudo', $pseudo, PDO::PARAM_INT);
    $query->execute();
    $query->CloseCursor();        
}