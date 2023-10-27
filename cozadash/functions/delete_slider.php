<?php

    include 'database_coza.php';

    $id = isset($_GET['idslider']) && is_numeric($_GET['idslider']) ? intval($_GET['idslider']) : 0;
    
    $stmt = $coon->prepare('DELETE FROM slider where id = ?');
    $stmt->execute([$id]);

    header('Location: ../slider.php');
    exit();

