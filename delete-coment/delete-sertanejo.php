<?php
require '../connection.php';

$id = $_POST['id'];
$deletar = "DELETE FROM coment_sertanejo where id = '$id'";
mysqli_query($user_db, $deletar);

?>