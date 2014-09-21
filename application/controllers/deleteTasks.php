<?php

// 1- I connect the app with the database
include '../models/pdo.php';


// 2- Delete all the entries in the table.
$queryDeleteTask = $pdo->prepare(
    'DELETE FROM tasks'
);
$queryDeleteTask -> execute();


// 3 - Redirection
header('Location: ../../index.php');
