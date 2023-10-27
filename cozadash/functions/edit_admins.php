<?php

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id = $_POST['idname'];
        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);

        if(!empty($_POST['password'])){
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $hashpass = password_hash($password, PASSWORD_DEFAULT);

        }else{

            $hashpass = $_POST['old_pass'];
        }
    }

            $stmt = $coon->prepare("UPDATE admins SET email = ?, username = ?, gender = ?, password = ?, phone = ? WHERE id = ?");
            $stmt->execute([$email, $username, $gender, $hashpass, $phone, $id]);

    header('Location: ../admins.php');
    exit();

