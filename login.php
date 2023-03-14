<?php
require 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$select = "SELECT * FROM tabela_usuario WHERE username = '$username' AND password='$password'";
$result = mysqli_query($user_db, $select);
$num_row = mysqli_num_row($result);
if($num_row > 0)
    {
        echo "<script>$('.wrapper').show();</script>";
    }else{
        echo "<script>$('#autentica').show();</script>";
        echo 'Nome de usuário ou senha inválido';
    }

?>
