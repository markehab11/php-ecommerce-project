<?php

    $id = isset($_GET['idblog']) && is_numeric($_GET['idblog']) ? intval($_GET['idblog']) : 0; 

    $stmt = $coon -> prepare('SELECT * FROM blog WHERE id = ?');
    $stmt->execute([$id]);
    $row = $stmt->fetch();

?>

<form method="post" action="functions/edit_blog.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> blog Images: </label>
        <input type="file" class="form-control" name="blog_img" value=<?php echo $row['blog_img'] ?>>
        <input type="hidden" name="idname" value=<?php echo $id ?>>
        <input type="hidden" name="old_img" value="<?php echo $row['blog_img']?>">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> blog date: </label>
        <input type="date" class="form-control" placeholder="Enter blog date" name="blog_date" value=<?php echo $row['blog_date'] ?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> blog describtion:</label>
        <input type="text" class="form-control" placeholder="Enter blog describtion" name="blog_desc" value=<?php echo $row['blog_desc'] ?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> blog categories:</label>
        <input type="text" class="form-control" placeholder="Enter blog categories" name="blog_cat"value=<?php echo $row['blog_cat'] ?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> blog name:</label>
        <input type="text" class="form-control" placeholder="Enter blog name" name="blog_name" value=<?php echo $row['blog_name'] ?>>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> Edit </button>
</form>