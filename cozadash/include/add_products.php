<form method="post" action="functions/add_products.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">product name:</label>
        <input type="text" class="form-control" placeholder="Enter Product_name" name="product_name">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">product Images:</label>
        <input type="file" class="form-control" name="product_img">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">product price:</label>
        <input type="text" class="form-control" placeholder="Enter Product price" name="product_price">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">product Title:</label>
        <input type="text" class="form-control" placeholder="Enter slider title" name="product_title">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">product_describtion:</label>
        <input type="text" class="form-control" placeholder="Enter Product_descripion" name="product_describtion">
    </div>
    <div class="form-group col-md-8">
    <label for="exampleInputEmail1">categoy name:</label>
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
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> Add </button>
</form>