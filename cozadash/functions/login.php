<?php

    session_start();

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $passhach = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $coon->prepare('SELECT * FROM admins WHERE email = ?');
        $stmt->execute([$username]);
        $row = $stmt->fetch();

        if(password_verify($password, $row['password'])){

            $_SESSION['username'] = $row['password'];

            header("location:../index.php");
            exit();

            echo 'Yes';

        }else{

            header("location:../login.php");
            exit();

            echo 'No';
        }
    }else{

        header("location:../login.php");
        exit();

        echo 'No No';
    }