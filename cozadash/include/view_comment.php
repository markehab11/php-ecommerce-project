
<table class="table">
    <thead>
    <tr>
        <th class="header"> Comment </th>
        <th class="header"> name </th>
        <th class="header"> email </th>
        <th class="header"> phone </th>
        <th class="header"> id blog </th>
        <th class="header"> Delete </th>
    </tr>
    </thead>
    <tbody>

<?php

    $stmt =$coon->prepare('SELECT * FROM comment');
    $stmt->execute();
    while($row = $stmt->fetch()) {;

?>

    <tr>
        <td><?php echo $row['comment'] ?></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['phone'] ?></td>
        <td><?php echo $row['id_blog'] ?></td>
        <td><a href="functions/delete_comment.php?idcomment=<?php echo $row['id'] ?>" class="btn btn-danger"> <i class="far fa-delete"></i> Delete </a></td>
    </tr>
        <?php } ?>
    </tbody>
</table>