<table class="table">
<thead>
    <tr>
        <th class="header">	product_id </th>
        <th class="header"> id_user </th>
    </tr>
</thead>
<tbody>

<?php

$stmt =$coon->prepare('SELECT * FROM cart');
$stmt->execute();
while($row = $stmt->fetch()) {;
?>

<tr>
    <td><?php echo $row['product_id'] ?></td>
    <td><?php echo $row['id_user'] ?></td>
    <?php } ?>
</tbody>
</table>