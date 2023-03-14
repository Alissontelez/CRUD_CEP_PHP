<?php
    require '../connection.php';

    $id = $_POST['edit_id'];
    $upMingau = $_POST['upMingau'];

    $update = "UPDATE coment_mingau SET Comentário = '$upMingau' WHERE id = '$id'";
    mysqli_query($user_db, $update);

?>