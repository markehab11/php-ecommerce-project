<?php

    $id = isset($_GET['idwebsite_info']) &&  is_numeric($_GET['idwebsite_info']) ? intval($_GET['idwebsite_info']) : 0;

    $stmt = $coon->prepare('SELECT * FROM website_info WHERE id = ?');
    $stmt->execute([$id]);
    $row = $stmt->fetch();
?>
<form method="post" action="functions/edit_website_info.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
    <input type="hidden" name="idname" value=<?php echo $id ?>>
        <label for="exampleInputEmail1"> address: </label>
        <input type="text" class="form-control" placeholder="address" name="address" value=<?php echo $row['address']?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> phone:</label>
        <input type="text" class="form-control" name="phone" value="<?php echo $row['phone']?>">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> email:</label>
        <input type="text" class="form-control" placeholder="email" name="email" value=<?php echo $row['email']?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> facebook: </label>
        <input type="text" class="form-control" placeholder="facebook" name="facebook" value=<?php echo $row['facebook']?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> instgram: </label>
        <input type="text" class="form-control" placeholder="instgram" name="instgram" value=<?php echo $row['instgram']?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> pinterest: </label>
        <input type="text" class="form-control" placeholder="pinterest" name="pinterest" value=<?php echo $row['pinterest']?>>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> edit </button>
</form>