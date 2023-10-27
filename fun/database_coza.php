<?php

    $dsn = 'mysql:local=localhost;dbname=cozastore';
    $user = 'root';
    $pass = '';
    $options = [

        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',

    ];

    try {

        $coon = new PDO($dsn, $user, $pass, $options);

        $coon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }
    catch(PDOException $e) {
        
        echo ('fild to connect to database') . $e->getMessage();
    }
