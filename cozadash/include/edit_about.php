<?php

    $id = isset($_GET['idabout']) && is_numeric($_GET['idabout']) ? intval($_GET['idabout']) : 0;

    $stmt = $coon->prepare('SELECT * FROM about WHERE id = ?');
    $stmt->execute([$id]);
    $row = $stmt->fetch();
?>

<form method="post" action="functions/edit_about.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <input type="hidden" name="idname" value="<?php echo $id; ?>">
        <label for="exampleInputEmail1"> desc_story :</label>
        <input type="text" class="form-control" placeholder="Enter desc_story" name="desc_story" value=<?php echo $row['desc_story']?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> img_story:</label>
        <input type="file" class="form-control" name="image" value="<?php echo $row['img_story']?>">
        <input type="hidden" name="old_img" value="<?php echo $row['img_story']?>">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> desc_mission :</label>
        <input type="text" class="form-control" placeholder="Enter desc_mission" name="desc_mission" value=<?php echo $row['desc_mission']?>>
    </div>
    <div class="form-group col-md-8">

        <label for="exampleInputEmail1"> img_mission:</label>
        <input type="file" class="form-control" name="img_mission" value="<?php echo $row['img_mission']?>">
        <input type="hidden" name="img_old" value="<?php echo $row['img_mission']?>">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i>edit </button>
</form>