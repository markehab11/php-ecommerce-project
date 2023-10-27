<?php

    $id = isset($_GET['idslider']) && is_numeric($_GET['idslider']) ? intval($_GET['idslider']) : 0;

    $stmt = $coon->prepare('SELECT * FROM slider WHERE id = ?');
    $stmt->execute([$id]);
    $row = $stmt->fetch();
?>

<form method="post" action="functions/edit_slider.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <input type="hidden" name="idname" value="<?php echo $id; ?>" >
        <label for="exampleInputEmail1">Slider Images:</label>
        <input type="file" class="form-control" name="image" value="<?php echo $row['img']?>">
        <input type="hidden" name="old_img" value="<?php echo $row['img']?>">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Slider Name:</label>
        <input type="text" class="form-control" placeholder="Enter slider name" name="slider_name" value=<?php echo $row['name']?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">Slider Title:</label>
        <input type="text" class="form-control" placeholder="Enter slider title" name="slider_title" value=<?php echo $row['title']?>>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i>edit </button>
</form>