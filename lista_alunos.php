<?php
    $caminhoBanco =  __DIR__.'/banco.sqlite';

    try {
        $pdo = new PDO('sqlite:'.$caminhoBanco);
    } catch(PDOException $e ) {
        echo "Erro ".$e->getMessage();
    }

    $statament = $pdo->query('SELECT * FROM students');
    var_dump($statament->fetchAll());