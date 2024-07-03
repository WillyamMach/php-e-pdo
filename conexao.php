<?php
$caminhoBanco =  __DIR__.'/banco.sqlite';

try {
    $pdo = new PDO('sqlite:'.$caminhoBanco);
} catch(PDOException $e ) {
    echo "Erro ".$e->getMessage();
}

if($pdo) {
    $pdo->exec("CREATE TABLE students (id integer primary key, name TEXT, birth_date TEXT); ");
    echo "Success";
}