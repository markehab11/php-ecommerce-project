<?php

    $id = isset($_GET['idproudcts_reviews']) && is_numeric($_GET['idproudcts_reviews']) ? intval($_GET['idproudcts_reviews']) : 0; 

    $stmt = $coon -> prepare('SELECT * FROM proudcts_reviews WHERE id = ?');
    $stmt->execute([$id]);
    $row = $stmt->fetch();

?>

<form method="post" action="functions/edit_product_review.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <input type="hidden" name="idname" value=<?php echo $id ?>>
        <label for="exampleInputEmail1"> name :</label>
        <input type="text" class="form-control" placeholder="Enter name " name="name" value=<?php echo $row['name']?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">email :</label>
        <input type="text" class="form-control" placeholder="Enter email" name="email" value=<?php echo $row['email']?>>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1">id_products :</label>
        <input type="text" class="form-control" placeholder="Enter id_products" name="id_products" value=<?php echo $row['id_products']?>>
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> Edit </button>
</form>