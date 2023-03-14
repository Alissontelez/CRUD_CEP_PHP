<?php require '../connection.php';
    if (!isset($_SESSION)){
        session_start();
    }

$usuário = $_SESSION['usuário'];
$comCafé2 = $_POST['comCafé2'];
$data = $_POST['Data'];
$insere2 = mysqli_query($user_db,"INSERT INTO coment_cafe2 VALUES (NULL, '$usuário','$comCafé2', '$data')");



?>