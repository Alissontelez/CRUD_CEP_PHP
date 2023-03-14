<?php
require '../connection.php';

$deletar = "DELETE FROM carrito where 1";
mysqli_query($user_db, $deletar);

?>