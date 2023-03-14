<?php
    require '../connection.php';

    $id = $_POST['edit_id'];
    $upDucafé = $_POST['upDucafé'];

    $update = "UPDATE coment_ducafe SET Comentário = '$upDucafé' WHERE id = '$id'";
    mysqli_query($user_db, $update);

?>