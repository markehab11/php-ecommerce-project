<table class="table">
<thead>
    <tr>
        <th class="header"> desc_story </th>
        <th class="header"> img_Story </th>
        <th class="header"> desc_mission </th>
        <th class="header"> img_mission </th>
        <th class="header">Edit</th>
    </tr>
</thead>
<tbody>

<?php

$stmt =$coon->prepare('SELECT * FROM about');
$stmt->execute();
while($row = $stmt->fetch()) {;
?>

<tr>
    <td><?php echo $row['desc_story'] ?></td>
    <td><img src='upload/<?php echo $row['img_story']?>' width="300px" height="250px"></td>
    <td><?php echo $row['desc_mission'] ?></td>
    <td><img src='upload/<?php echo $row['img_mission']?>' width="300px" height="250px"></td>
    <td><a href="?do=edit&idabout=<?php echo $row['id']?>" class="edits"> <i class="fa fa-edit"></i> edit </a></td>
    </tr>
    <?php } ?>
</tbody>
</table>