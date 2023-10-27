
<table class="table">
    <thead>
    <tr>
        <th class="header"> name </th>
        <th class="header"> email </th>
        <th class="header"> id_products </th>
        <th class="header"> Edit </th>

    </tr>
    </thead>
    <tbody>

<?php

    $stmt =$coon->prepare('SELECT * FROM proudcts_reviews');
    $stmt->execute();
    while($row = $stmt->fetch()) {;

?>

    <tr>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['email'] ?></td>
        <td><?php echo $row['id_products'] ?></td>
        <td><a href="?do=edit&idproudcts_reviews=<?php echo $row['id']?>" class="edits"> <i class="fa fa-edit"></i> edit </a></td>
    </tr>
        <?php } ?>
    </tbody>
</table>