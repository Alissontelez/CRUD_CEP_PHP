<?php
    require '../connection.php';

    $id = $_POST['edit_id'];
    $upVaquita = $_POST['upVaquita'];

    $update = "UPDATE coment_vaquita SET Comentário = '$upVaquita' WHERE id = '$id'";
    mysqli_query($user_db, $update);

?>