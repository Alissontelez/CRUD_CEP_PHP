<?php
    require '../connection.php';

    $id = $_POST['edit_id'];
    $upCafé2 = $_POST['upCafé2'];

    $update = "UPDATE coment_cafe2 SET Comentário = '$upCafé2' WHERE id = '$id'";
    mysqli_query($user_db, $update);

?>