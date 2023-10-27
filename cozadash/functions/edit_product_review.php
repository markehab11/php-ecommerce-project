<?php

    include 'database_coza.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $id = $_POST['idname'];
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $id_products = filter_var($_POST['id_products'], FILTER_SANITIZE_STRING);

    }
    if(!empty($name) && !empty($email) && !empty($id_products)){

            $stmt = $coon->prepare("UPDATE proudcts_reviews SET name = ?, email = ?, id_products = ? WHERE id = ?");
            $stmt->execute([$name, $email, $id_products, $id]);

    }

    header('Location: ../admins.php');
    exit();

