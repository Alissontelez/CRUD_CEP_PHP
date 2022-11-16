<?php
require 'crud-cep.php';

$id = $_POST['id'];
$deletar = "DELETE FROM table_one where id = '".$id."'";
mysqli_query($mysqli, $deletar);

?>