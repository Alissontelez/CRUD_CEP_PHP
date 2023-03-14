<?php require '../connection.php';

$nome = $_POST['nome'];
$img = $_POST['img'];
$preço = $_POST['preço'];
$qtde = $_POST['qtde'];
$p_total = $_POST['p_total'];

$rows = mysqli_query($user_db, "SELECT * FROM carrito WHERE nome='$nome'");
$totalrows = mysqli_num_rows($rows);
if ($totalrows > 0) { // Retornar item já inserido
    echo 0;
}else{ // Inserir item
$insere = mysqli_query($user_db,"INSERT INTO carrito VALUES ('$nome','$preço', '$img', '$qtde', '$p_total')");
    echo 1;
}
?>
