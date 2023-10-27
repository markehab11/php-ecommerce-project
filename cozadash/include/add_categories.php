<form method="post" action="functions/add_categories.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> name category : </label>
        <input type="text" class="form-control" name="name_cat" placeholder="name category">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> image category :</label>
        <input type="file" class="form-control" name="img_cat">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> title category :</label>
        <input type="text" class="form-control" placeholder="Enter title category" name="title_cat">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> Add </button>
</form> 