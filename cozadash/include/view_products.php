<a href="?do=add" class="btn btn-primary"> <i class="fa fa-plus"></i> Add New Products</a>
<table class="table">
<thead>
    <tr>
        <th class="header">products Name</th>
        <th class="header">images</th>
        <th class="header">products Price</th>
        <th class="header">products Title</th>
        <th class="header">products describtion</th>
        <th class="header">category</th>
        <th class="header">Edit</th>
        <th class="header">Delete</th>
    </tr>
</thead>
<tbody>

<?php

$stmt =$coon->prepare('SELECT * FROM products');
$stmt->execute();
while($row = $stmt->fetch()) {;
?>

<tr>
    <td><?php echo $row['product_name'] ?></td>
    <td><img src='upload/<?php echo $row['product_img']?>' width="300px" height="250px"></td>
    <td>$<?php echo $row['product_price'] ?></td>
    <td><?php echo $row['product_title'] ?></td>
    <td><?php echo $row['product_describtion'] ?></td>
    <?php 
        $cat_id = $row['cat_id'];
    
        $stmtcat = $coon->prepare('SELECT * FROM categories WHERE id = ?');
        $stmtcat->execute([$cat_id]);
        $rowcat = $stmtcat->fetch()

    ?>
    <td><?php echo $rowcat['name_cat'] ?></td>
    <td><a href="?do=edit&idproducts=<?php echo $row['id']?>" class="edits"> <i class="fa fa-edit"></i> edit </a></td>
    <td> <a href="functions/delete_products.php?idproducts=<?php echo $row['id'] ?>" class="btn btn-danger"> <i class="far fa-trash-alt"></i> delete </a></td>
    </tr>
    <?php } ?>
</tbody>
</table>