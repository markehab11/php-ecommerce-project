<a href="?do=add" class="btn btn-primary"> <i class="fa fa-plus"></i> Add New Blog</a>
<table class="table">
<thead>
    <tr>
        <th class="header">	blog_img </th>
        <th class="header"> blog_name </th>
        <th class="header"> blog_date </th>
        <th class="header"> blog_desc </th>
        <th class="header"> blog_cat </th>
        <th class="header">Edit</th>
        <th class="header">Delete</th>
    </tr>
</thead>
<tbody>


<?php

$stmt =$coon->prepare('SELECT * FROM blog');
$stmt->execute();
while($row = $stmt->fetch()) {;
?>

<tr>
    <td><img src='upload/<?php echo $row['blog_img']?>' width="300px" height="250px"></td>
    <td><?php echo $row['blog_name'] ?></td>
    <td><?php echo $row['blog_date'] ?></td>
    <td><?php echo $row['blog_desc'] ?></td>
    <td><?php echo $row['blog_cat'] ?></td>
    <td><a href="?do=edit&idblog=<?php echo $row['id']?>" class="edits"> <i class="fa fa-edit"></i> edit </a></td>
    <td> <a href="functions/delete_products.php?idproducts=<?php echo $row['id'] ?>" class="btn btn-danger"> <i class="far fa-trash-alt"></i> delete </a></td>
    </tr>
    <?php } ?> 
</tbody>
</table>
