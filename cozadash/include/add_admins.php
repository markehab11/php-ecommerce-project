<form method="post" action="functions/add_admins.php" enctype="multipart/form-data">
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> email: </label>
        <input type="text" class="form-control" placeholder="email" name="email">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> username: </label>
        <input type="text" class="form-control" name="username" placeholder="username">
    </div>
    <div class="form-group col-md-8">
        <label class="exampleInputEmail1"> Gender </label>
        <br>
        <label class="radio-container m-r-45">Male
        <input type="radio" name="gender" value="male">
        <span class="checkmark"></span>
        </label>
        <label class="radio-container">Female
        <input type="radio" name="gender" value="female">
        <span class="checkmark"></span>
        </label>
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> password: </label>
        <input type="password" class="form-control" placeholder="password" name="password">
    </div>
    <div class="form-group col-md-8">
        <label for="exampleInputEmail1"> phone: </label>
        <input type="text" class="form-control" placeholder="phone" name="phone">
    </div>
    <br>
    <br>
    <button type="submit" class="btn btn-primary" style="display: block;"> <i class="fa fa-plus"></i> Add </button>
</form>