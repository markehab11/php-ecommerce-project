<?php

    include 'database_coza.php';

    $id = isset($_GET['idsubscribe']) && is_numeric($_GET['idsubscribe']) ? intval($_GET['idsubscribe']) : 0;
    
    $stmt = $coon->prepare('DELETE FROM subscribe where id = ?');
    $stmt->execute([$id]);

    header('Location: ../subscribe.php');
    exit();

