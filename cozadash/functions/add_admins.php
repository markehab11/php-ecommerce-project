<?php

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
        $gender = filter_var($_POST['gender'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $hashpass = password_hash($password, PASSWORD_DEFAULT);
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    }

    if(!empty($email) && !empty($username) && !empty($gender) && !empty($phone) && !empty($password)){
        $stmt = $coon-> prepare("INSERT INTO admins(email, username, gender, password, phone)
                                    VALUES(:email, :username, :gender, :hashpass, :phone)");
        $stmt->execute([
            'email' => $email,
            'username' => $username,
            'gender' => $gender,
            'hashpass' => $hashpass,
            'phone' => $phone
        ]);
    }
    
    header('Location: ../admins.php');
    exit();




