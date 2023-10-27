<?php

    include 'database_coza.php';

    $id = isset($_GET['idcomment']) && is_numeric($_GET['idcomment']) ? intval($_GET['idcomment']) : 0;
    
    $stmt = $coon->prepare('DELETE FROM comment where id = ?');
    $stmt->execute([$id]);

    header('Location: ../comment.php');
    exit();

