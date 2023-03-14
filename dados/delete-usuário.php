<?php
require '../connection.php';

$id = $_POST['id'];
$deletar = "DELETE FROM tabela_usuario where id = '$id'";
mysqli_query($user_db, $deletar);

?>