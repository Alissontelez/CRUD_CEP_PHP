<?php require '../connection.php';
    if (!isset($_SESSION)){
        session_start();
    }

$usuário = $_SESSION['usuário'];
$comCafé1 = $_POST['comCafé1'];
$data = $_POST['Data'];
$insere = mysqli_query($user_db,"INSERT INTO coment_cafe1 VALUES (NULL, '$usuário','$comCafé1', '$data')");

