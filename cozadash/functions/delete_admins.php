<?php

    include 'database_coza.php';

    $id = isset($_GET['idadmins']) && is_numeric($_GET['idadmins']) ? intval($_GET['idadmins']) : 0;
    
    $stmt = $coon->prepare('DELETE FROM admins where id = ?');
    $stmt->execute([$id]);

    header('Location: ../admins.php');
    exit();

