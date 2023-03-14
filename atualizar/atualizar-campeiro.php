<?php
    require '../connection.php';

    $id = $_POST['edit_id'];
    $upCampeiro = $_POST['upCampeiro'];

    $update = "UPDATE coment_campeiro SET Comentário = '$upCampeiro' WHERE id = '$id'";
    mysqli_query($user_db, $update);

?>