<?php 
    use \Alura\Pdo\Domain\Model\Student;

    require_once 'vendor/autoload.php';

    $databasePath =  __DIR__.'/banco.sqlite';

    try {
        $pdo = new PDO('sqlite:'.$databasePath);
    } catch(PDOException $e ) {
        echo "Erro ".$e->getMessage();
    }

    $student = new Student(null, "Willyam Machado", new \DateTimeImmutable('2005-01-18'));

    $sqlInsert = "INSERT INTO students (name, birth_date) VALUES ('{$student->name()}', '{$student->birthDate()->format('Y-m-d')}')";

    echo $sqlInsert;
    
    var_dump($pdo->exec($sqlInsert));