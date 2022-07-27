<?php


$host = 'localhost';
$user = 'u839792224_sistema_cursos';
$db = 'u839792224_sistema_cursos';
$pass = 'Prom2204';

try {
    $pdo = new PDO('mysql:host=' . $host . ';dbname=' . $db . ';charset=utf8', $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo 'ERROR: ' . $e->getMessage();
}