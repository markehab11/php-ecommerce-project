<?php

    include 'database_coza.php';

    $id= isset($_GET['idproducts']) && is_numeric($_GET['idproducts']) ? intval($_GET['idproducts']) : 0;

    $stmt = $coon->prepare('DELETE FROM products where id = ?');
    $stmt->execute([$id]);

    header('Location: ../products.php');
    exit();