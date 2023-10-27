<a href="?do=add" class="btn btn-primary"> <i class="fa fa-plus"></i> Add New Admins</a>
<table class="table">
<thead>
    <tr>
        <th class="header"> email </th>
        <th class="header"> username </th>
        <th class="header"> gender </th>
        <th class="header"> phone </th>
        <th class="header">Edit</th>
        <th class="header">Delete</th>
    </tr>
</thead>
<tbody>

<?php

$stmt =$coon->prepare('SELECT * FROM admins');
$stmt->execute();
while($row = $stmt->fetch()) {;
?>

<tr>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['username'] ?></td>
    <td><?php echo $row['gender'] ?></td>
    <td><?php echo $row['phone'] ?></td>
    <td><a href="?do=edit&idadmins=<?php echo $row['id']?>" class="edits"> <i class="fa fa-edit"></i> edit </a></td>
    <td> <a href="functions/delete_admins.php?idadmins=<?php echo $row['id'] ?>" class="btn btn-danger"> <i class="far fa-trash-alt"></i> delete </a></td>
    </tr>
    <?php } ?>
</tbody>
</table>