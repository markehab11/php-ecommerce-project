<?php

    include 'database_coza.php';

    $id= isset($_GET['idblog']) && is_numeric($_GET['idblog']) ? intval($_GET['idblog']) : 0;

    $stmt = $coon->prepare('DELETE FROM blog where id = ?');
    $stmt->execute([$id]);

    header('Location: ../products.php');
    exit();