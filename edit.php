<?php

include 'model.php';

$edit_id = $_POST['edit_id'];

$model = new Model();

$row = $model->edit($edit_id);

if (!empty($row)) { ?>

    <form id="form" action="post">
        <div>
            <input type="hidden" id="edit_id" value="<?php echo $row['id'] ?>">
        </div>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" id="edit_title" class="form-control" value="<?php echo $row['title']; ?>">
        </div>
        <div class="form-group">
            <label for="">Descripcion</label>
            <textarea name="description" id="edit_description" cols="" rows="3" class="form-control" ><?php echo $row['description']; ?></textarea>
        </div>
    </form>

<?php

}

?>