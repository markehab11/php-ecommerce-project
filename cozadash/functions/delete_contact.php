<?php

    include 'database_coza.php';

    $id = isset($_GET['idcontact']) && is_numeric($_GET['idcontact']) ? intval($_GET['idcontact']) : 0;
    
    $stmt = $coon->prepare('DELETE FROM contact where id = ?');
    $stmt->execute([$id]);

    header('Location: ../contact.php');
    exit();
