<?php

    include 'database_coza.php';

    $id = isset($_GET['idcategories']) && is_numeric($_GET['idcategories']) ? intval($_GET['idcategories']) : 0;
    
    $stmt = $coon->prepare('DELETE FROM categories where id = ?');
    $stmt->execute([$id]);

    header('Location: ../categories.php');
    exit();

