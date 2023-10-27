<a href="?do=add" class="btn btn-primary"> <i class="fa fa-plus"></i> Add New Slider</a>
<table class="table">
  <thead>
    <tr>
      <th class="header">Images</th>
      <th class="header">Slider Name</th>
      <th class="header">Slider Title</th>
      <th class="header">Edit</th>
      <th class="header">Delete</th>
    </tr>
  </thead>
  <tbody>
<?php

  $stmt =$coon->prepare('SELECT * FROM slider');
  $stmt->execute();
  while($row = $stmt->fetch()) {;
    ?>

    <tr>
      <td><img src='upload/<?php echo $row['img']?>' width="300px" height="250px"></td>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['title'] ?></td>
      <td><a href="?do=edit&idslider=<?php echo $row['id']?>" class="edits"> <i class="fa fa-edit"></i> edit </a></td>
      <td><a href="functions/delete_slider.php?idslider=<?php echo $row['id'] ?>" class="btn btn-danger"> <i class="far fa-delete"></i> Delete </a></td>
    </tr>
    <?php } ?>
  </tbody>
</table>