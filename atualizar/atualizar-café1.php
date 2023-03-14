<?php
    require '../connection.php';

    $id = $_POST['edit_id'];
    $upCafé1 = $_POST['upCafé1'];

    $update = "UPDATE coment_cafe1 SET Comentário = '$upCafé1' WHERE id = '$id'";
    mysqli_query($user_db, $update);

?>