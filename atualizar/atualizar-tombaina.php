<?php
    require '../connection.php';

    $id = $_POST['edit_id'];
    $upTombaina = $_POST['upTombaina'];

    $update = "UPDATE coment_tombaina SET Comentário = '$upTombaina' WHERE id = '$id'";
    mysqli_query($user_db, $update);

?>