<?php

    $id = isset($_GET['idcategories']) && is_numeric($_GET['idcategories']) ? intval($_GET['idcategories']) : 0; 

    $stmt = $coon -> prepare('SELECT * FROM categories WHERE id = ?');
    $stmt->execute([$id]);
    $row = $stmt->fetch();

?>  

<form method="post" action="functions/edit_categories.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <input type="hidden" name="idname" value=<?php echo $id ?>>
        <label for="exampleInputEmail1">name category:</label>
        <input type="text" class="form-control" placeholder="Enter name category" name="name_cat" value=<?php echo $row['name_cat']?>>
    </div>    
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> image category :</label>
        <input type="hidden" name="old_img" value="<?php echo $row['img_cat']?>">
        <input type="file" class="form-control" name="img_cat" value=<?php echo $row['img_cat']?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> title category :</label>
        <input type="text" class="form-control" placeholder="Enter title category" name="title_cat" value=<?php echo $row['title_cat']?>>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> edit </button>
</form>