<?php
    require '../connection.php';

    $id = $_POST['edit_id'];
    $upSertanejo = $_POST['upSertanejo'];

    $update = "UPDATE coment_sertanejo SET Comentário = '$upSertanejo' WHERE id = '$id'";
    mysqli_query($user_db, $update);

?>