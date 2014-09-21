<?php

// 1- I connect the app with the database (In a bigger application, i would have put the connexion with the DDB in a pdo model pdo.php to avoid to repeat the same code...)
$pdo = new PDO("mysql:host=localhost;dbname=krds2", "root", "",
[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]
);
$pdo->exec('SET NAMES UTF8');
