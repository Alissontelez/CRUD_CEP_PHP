<?php 
require '../connection.php';

$emailC = $_POST['emailConta'];
$areaC = $_POST['areaConta'];

$insere = mysqli_query($user_db,"INSERT INTO contato VALUES (NULL, '$emailC', '$areaC')");

?>