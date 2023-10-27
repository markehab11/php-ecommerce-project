<?php

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id = $_POST['idname'];
        $cmt = filter_var($_POST['cmt'], FILTER_SANITIZE_STRING);
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $web = filter_var($_POST['web'], FILTER_SANITIZE_STRING);

        if(!empty($cmt) && !empty($name) && !empty($email) && !empty($web)){
            
            $stmt = $coon-> prepare("INSERT INTO comment(comment, name, email, id_blog)
                                        VALUES(:cmt, :name, :email, :id)");
            $stmt->execute([

                'cmt' => $cmt,
                'name' => $name,
                'email' => $email,
                'id' => $id
            ]);

            echo '<br>' . $name . '<br>';
            echo $cmt;

        }else{

            echo 'no empty'; 
        };

    }else{

        echo 'no method';
    }