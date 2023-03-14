<?php
    require '../connection.php';

    $id = $_POST['edit_id'];
    $upKuest = $_POST['upKuest'];

    $update = "UPDATE coment_kuest SET Comentário = '$upKuest' WHERE id = '$id'";
    mysqli_query($user_db, $update);

?>