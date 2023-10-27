<a href="?do=add" class="btn btn-primary"> <i class="fa fa-plus"></i> Add New categorie </a>
<table class="table">
<thead>
    <tr>
        <th class="header">	name category </th>
        <th class="header">	image category </th>
        <th class="header">	title category </th>
        <th class="header">Edit</th>
        <th class="header">Delete</th>
    </tr>
</thead>
<tbody>

<?php

$stmt =$coon->prepare('SELECT * FROM categories');
$stmt->execute();
while($row = $stmt->fetch()) {;
?>

<tr>
    <td><?php echo $row['name_cat'] ?></td>
    <td><img src='upload/<?php echo $row['img_cat']?>' width="300px" height="250px"></td>
    <td><?php echo $row['title_cat'] ?></td>
    <td><a href="?do=edit&idcategories=<?php echo $row['id']?>" class="edits"> <i class="fa fa-edit"></i> edit </a></td>
    <td><a href="functions/delete_categories.php?idcategories=<?php echo $row['id'] ?>" class="btn btn-danger"> <i class="far fa-trash-alt"></i> Delete </a></td>
    </tr>
    <?php } ?>
</tbody>
</table>