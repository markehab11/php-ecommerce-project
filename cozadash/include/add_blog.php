<form method="post" action="functions/add_blog.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> blog Images: </label>
        <input type="file" class="form-control" name="blog_img">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> blog date: </label>
        <input type="date" class="form-control" placeholder="Enter blog date" name="blog_date">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> blog describtion:</label>
        <input type="text" class="form-control" placeholder="Enter blog describtion" name="blog_desc">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> blog categories:</label>
        <input type="text" class="form-control" placeholder="Enter blog categories" name="blog_cat">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> blog name:</label>
        <input type="text" class="form-control" placeholder="Enter blog name" name="blog_name">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> Add </button>
</form>