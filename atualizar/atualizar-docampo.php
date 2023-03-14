<?php
    require '../connection.php';

    $id = $_POST['edit_id'];
    $upDocampo = $_POST['upDocampo'];

    $update = "UPDATE coment_docampo SET Comentário = '$upDocampo' WHERE id = '$id'";
    mysqli_query($user_db, $update);

?>