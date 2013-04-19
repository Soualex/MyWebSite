<?php

function getData($dataValue, $dataSearch)
{
    $query = PDO2::getInstance()->prepare('SELECT * FROM users WHERE '.$dataSearch.' = :var');
    $query->bindValue(':var', $dataValue, PDO::PARAM_STR);
    $query->execute();

    return $query;
}

function add($pseudo, $password, $email)
{
    $query = PDO2::getInstance()->prepare('INSERT INTO users (pseudo, password, email, rank, last_login, ip) VALUES (:pseudo, :pass, :email, :rank, NOW(), :ip)');
    $query->bindValue(':pseudo', $pseudo, PDO::PARAM_STR);
    $query->bindValue(':pass', Secure::hash($password), PDO::PARAM_STR);
    $query->bindValue(':email', $email, PDO::PARAM_STR);
    $query->bindValue(':rank', '2', PDO::PARAM_INT);
    $query->bindValue(':ip', $_SERVER["REMOTE_ADDR"], PDO::PARAM_STR);
    $query->execute();

    $user_rank = $pseudo;
    $user_id = PDO2::getInstance()->lastInsertId(); ;
    $user_rank = 2;
    $query->CloseCursor();
}

?>