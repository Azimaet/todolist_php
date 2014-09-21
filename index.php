<?php

// 1- I connect the app with the database
include 'application/models/pdo.php';


// 2- I load all the tasks wrote in the database
$queryTasks = $pdo->prepare(
    'SELECT *
     FROM tasks'
);
$queryTasks->execute();
$tasks = $queryTasks->fetchAll();



// I render the view:
include 'application/www/index.phtml';
