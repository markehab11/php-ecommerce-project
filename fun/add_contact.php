<?php

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $msg = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);

        if(!empty($email) && !empty($msg)){
            $stmt = $coon-> prepare("INSERT INTO contact(con_email, con_message)
                                        VALUES(:email, :msg)");
            $stmt->execute([
                'email' => $email,
                'msg' => $msg
            ]);

            echo 'ok';

        }else{

            echo 'no'; 
        };

    }else{

        echo 'no';
    }