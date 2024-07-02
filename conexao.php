<?php
$caminhoBanco =  __DIR__ . '/banco.sqlite';

try {
    $pdo = new PDO('sqlite:'.$caminhoBanco);

} catch(PDOException $e ) {
    echo "Erro ".$e->getMessage();
}
