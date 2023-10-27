<table class="table">
<thead>
    <tr>
        <th class="header"> address </th>
        <th class="header"> phone </th>
        <th class="header"> email </th>
        <th class="header"> facebook </th>
        <th class="header"> instgram </th>
        <th class="header"> pinterest </th>
        <th class="header"> Edit </th>
    </tr>
</thead>
<tbody>

<?php

$stmt =$coon->prepare('SELECT * FROM website_info');
$stmt->execute();
while($row = $stmt->fetch()) {;
?>

<tr>
    <td><?php echo $row['address'] ?></td>
    <td><?php echo $row['phone'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['facebook'] ?></td>
    <td><?php echo $row['instgram'] ?></td>
    <td><?php echo $row['pinterest'] ?></td>
    <td><a href="?do=edit&idwebsite_info=<?php echo $row['id']?>" class="edits"> <i class="fa fa-edit"></i> edit </a></td>
    </tr>
    <?php } ?>
</tbody>
</table>