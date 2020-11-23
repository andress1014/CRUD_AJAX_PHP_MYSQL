<?php
include 'model.php';

$read_id = $_POST['read_id'];

$model = new Model();

$row = $model->read($read_id);

if (!empty($row)) { ?>

    <p>Title - <?php echo $row['title']; ?></p>

    <p>Description - <?php echo $row['description']; ?></p>

   
  <?php
}

    ?>