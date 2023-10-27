
<table class="table">
    <thead>
    <tr>
        <th class="header"> message </th>
        <th class="header"> email </th>
        <th class="header"> Delete </th>
    </tr>
    </thead>
    <tbody>

<?php

    $stmt =$coon->prepare('SELECT * FROM contact');
    $stmt->execute();
    while($row = $stmt->fetch()) {;

?>

    <tr>
        <td><?php echo $row['con_message'] ?></td>
        <td><?php echo $row['con_email'] ?></td>
        <td><a href="functions/delete_contact.php?idcontact=<?php echo $row['id'] ?>" class="btn btn-danger"> <i class="far fa-delete"></i> Delete </a></td>
    </tr>
        <?php } ?>
    </tbody>
</table>