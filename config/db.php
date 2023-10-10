<?php

$user = 'root';
$mdp = '';
$host = 'localhost';
$db_name = 'db_wshop';

try {
    //code: connection à la db
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $user, $mdp);
} catch (Exception $e) {
    //code: erreur si con echoue
    die('Erreur : ' . $e->getMessage());
}

?>