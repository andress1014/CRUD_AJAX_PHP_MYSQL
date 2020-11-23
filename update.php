<?php 

include "model.php";

if (isset($_POST['update'])) {

    if (isset($_POST['edit_title']) && isset($_POST['edit_description']) && isset($_POST['edit_id'])) {

        if (!empty($_POST['edit_title']) && !empty($_POST['edit_description']) && !empty($_POST['edit_id'])) {
            
            $data['edit_id'] = $_POST['edit_id'];
            $data['edit_title'] = $_POST['edit_title'];
            $data['edit_description'] = $_POST['edit_description'];
            
            $model = new Model();

            $update = $model->update($data);
            
           
        } else {
            echo "
            <script>alert('empty fields')</script>
            ";
        }
    }
}