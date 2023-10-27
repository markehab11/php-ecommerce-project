
<table class="table">
    <thead>
    <tr>
        <th class="header"> email </th>
        <th class="header"> Delete </th>
    </tr>
    </thead>
    <tbody>

<?php

    $stmt =$coon->prepare('SELECT * FROM subscribe');
    $stmt->execute();
    while($row = $stmt->fetch()) {;

?>

    <tr>
        <td><?php echo $row['email'] ?></td>
        <td><a href="functions/delete_subscribe.php?idsubscribe=<?php echo $row['id'] ?>" class="btn btn-danger"> <i class="far fa-delete"></i> Delete </a></td>
    </tr>
        <?php } ?>
    </tbody>
</table>