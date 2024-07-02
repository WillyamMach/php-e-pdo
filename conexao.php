<?php

try {
    $pdo = new PDO('sqlite:banco.sqlite');
} catch(PDOException $e ) {
    echo "Erro ".$e->getMessage();
}
