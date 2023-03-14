<?php
require '../connection.php';

$nome = $_POST['nome'];

$deletar = "DELETE FROM carrito where '$nome' = nome";
mysqli_query($user_db, $deletar);

?>