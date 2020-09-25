<?php

    namespace app;
    require './bootstrap.php';
    ob_start();

    $referer = explode('?', $_SERVER['HTTP_REFERER'])[0];

    if(empty($_POST['astronautName']) || empty($_POST['astronautWeight'])) {
        header('Location: ' . $referer . '?status=error');
        die();
    }

    $connection = new ConnectionHandler();
    $conInstance = $connection->getConnRes();
    $query = 'INSERT INTO astronaut (`name`, weight) VALUES (:aName, :aWeight)';
    $statement = $conInstance->prepare($query);

    try {
        $statement->execute(array(':aName' => $_POST['astronautName'], ':aWeight' => $_POST['astronautWeight']));
        header('Location: ' . $referer.'?status=success');
        die();
    }catch(PDOException $e){
        //Log the exception using a logger tool.
        die('CRITICAL ERROR '.$e->getMessage());
    }

    ob_end_flush();