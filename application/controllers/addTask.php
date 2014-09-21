<?php

// 1- I connect the app with the database
include '../models/pdo.php';

// 2- Insert Query with the user input
$querySaveTask = $pdo->prepare(
    'INSERT INTO tasks (taskContent)
    VALUES (:taskContent)'
);

$querySaveTask -> execute(array(
    ":taskContent" => $_POST["task_content"]
));

// 3 - Redirection
header('Location: ../../index.php');
