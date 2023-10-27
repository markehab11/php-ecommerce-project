<?php

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id = $_POST['idname'];
        $address = filter_var($_POST['address'], FILTER_SANITIZE_STRING);
        $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $facebook = filter_var($_POST['facebook'], FILTER_SANITIZE_STRING);
        $instgram = filter_var($_POST['instgram'], FILTER_SANITIZE_STRING);
        $pinterest = filter_var($_POST['pinterest'], FILTER_SANITIZE_STRING);
    }

        
            $stmt = $coon->prepare("UPDATE website_info SET address = ? , phone = ?, email = ?, facebook = ?, instgram = ?, pinterest = ? WHERE id = ?");
            $stmt->execute([$address, $phone, $email, $facebook, $instgram, $pinterest, $id]);

    header('Location: ../website_info.php');
    exit();

