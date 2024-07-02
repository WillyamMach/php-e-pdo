<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Vinicius Dias',
    new \DateTimeImmutable('2005-01-18')
);

echo $student->age();
