<?php

    $id = isset($_GET['idadmins']) && is_numeric($_GET['idadmins']) ? intval($_GET['idadmins']) : 0; 

    $stmt = $coon -> prepare('SELECT * FROM admins WHERE id = ?');
    $stmt->execute([$id]);
    $row = $stmt->fetch();

?>
<form method="post" action="functions/edit_admins.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <input type="hidden" name="idname" value=<?php echo $id ?>>
        <label for="exampleInputEmail1"> email: </label>
        <input type="text" class="form-control" placeholder="email" name="email" value=<?php echo $row['email'] ?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> username: </label>
        <input type="text" class="form-control" name="username" placeholder="username" value=<?php echo $row['username'] ?>>
    </div>
    <div class="form-group col-md-8">
        <label class="exampleInputEmail1"> Gender </label>
        <br>

<?php

    $usergender = $row['gender'];

    if($usergender === 'male'){

?>
        <label class="radio-container m-r-45">Male
        <input type="radio" checked="checked" name="gender" value="male">
        <span class="checkmark"></span>
        </label>
        <label class="radio-container">Female
        <input type="radio" name="gender" value="female">
        <span class="checkmark"></span>
        </label>
    </div>

<?php }else{ ?>

    <label class="radio-container m-r-45">Male
        <input type="radio"  name="gender" value="male">
        <span class="checkmark"></span>
        </label>
        <label class="radio-container">Female
        <input type="radio" checked="checked" name="gender" value="female">
        <span class="checkmark"></span>
        </label>
    </div>

    <?php } ?>

    <div class="form-group col-md-8">
        <input type="hidden" name="old_pass" value="<?php echo $row['password']?>">
        <label for="exampleInputEmail1"> password: </label>
        <input type="password" class="form-control" placeholder="password" name="password" >
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> phone: </label>
        <input type="text" class="form-control" placeholder="phone" name="phone" value=<?php echo $row['phone'] ?>>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> Edit </button>
</form>