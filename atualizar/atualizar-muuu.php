<?php
    require '../connection.php';

    $id = $_POST['edit_id'];
    $upMuuu = $_POST['upMuuu'];

    $update = "UPDATE coment_muuu SET Comentário = '$upMuuu' WHERE id = '$id'";
    mysqli_query($user_db, $update);

?>