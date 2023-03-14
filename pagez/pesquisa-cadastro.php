<?php 
require "../connection.php";

$usuario = $_POST['usuario'];
$email = $_POST['email'];
$senha = sha1($_POST['senha']);


$rows = mysqli_query($user_db, "SELECT * FROM tabela_usuario WHERE email_db='$email' AND username_db='$usuario'");
$totalrows = mysqli_num_rows($rows);
if ($totalrows > 0) { // Retornar usuário já cadastrado
    echo 0;
}else{ // Realizar cadastro
    mysqli_query($user_db,"INSERT INTO tabela_usuario VALUES (NULL,'$usuario', '$email', '$senha')");
    echo 1;
}
?>