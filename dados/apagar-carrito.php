<?php
require '../connection.php';

$deletar = "DELETE FROM carrito WHERE 1";
mysqli_query($user_db, $deletar);

?>