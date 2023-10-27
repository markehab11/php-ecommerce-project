<?php

    $id = isset($_GET['idproducts']) &&  is_numeric($_GET['idproducts']) ? intval($_GET['idproducts']) : 0;

    $stmt = $coon->prepare('SELECT * FROM products WHERE id = ?');
    $stmt->execute([$id]);
    $row = $stmt->fetch();
?>
<form method="post" action="functions/edit_products.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
    <input type="hidden" name="idname" value=<?php echo $id ?>>
    <input type="hidden" name="old_img" value="<?php echo $row['product_img']?>">
        <label for="exampleInputEmail1">product name:</label>
        <input type="text" class="form-control" placeholder="Enter Product_name" name="product_name" value=<?php echo $row['product_name']?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">product Images:</label>
        <input type="file" class="form-control" name="product_img" value="<?php echo $row['product_img']?>">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">product price:</label>
        <input type="text" class="form-control" placeholder="Enter Product price" name="product_price" value=<?php echo $row['product_price']?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">product Title:</label>
        <input type="text" class="form-control" placeholder="Enter slider title" name="product_title" value=<?php echo $row['product_title']?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">product_describtion:</label>
        <input type="text" class="form-control" placeholder="Enter Product_descripion" name="product_describtion" value=<?php echo $row['product_describtion']?>>
    </div>
    <div class="form-group col-md-8">
    <label for="exampleInputEmail1">category name:</label>
        <select name="procat" class="form-control">
            <option>categories</option>
            <?php
            
                $stmtcat = $coon->prepare('SELECT * FROM categories');
                $stmtcat->execute();
                while($rowcat = $stmtcat->fetch()){

            ?>
            <option value="<?php echo $rowcat['id']?>"><?php echo $rowcat['name_cat'] ?></option>
            <?php } ?>
        </select>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> edit </button>
</form>