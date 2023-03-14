<?php
    require '../connection.php';

    $id = $_POST['id'];


    if ($upUsuário = $_POST['upUsuário'])
    {
    $update = "UPDATE tabela_usuario SET username_db = '$upUsuário' WHERE id = '$id'";
    mysqli_query($user_db, $update);
    }

    if ($upEmail = $_POST['upEmail'])
    {
    $update2 = "UPDATE tabela_usuario SET email_db = '$upEmail' WHERE id = '$id'";
    mysqli_query($user_db, $update2);
    }

    if ($Nsenha = sha1($_POST['Nsenha']))
    {
    $update3 = "UPDATE tabela_usuario SET password_db = '$Nsenha' WHERE id = '$id'";
    mysqli_query($user_db, $update3);
    }
?>