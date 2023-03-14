<?php require '../connection.php';
    if (!isset($_SESSION)){
        session_start();
    }

$usuário = $_SESSION['usuário'];
$comVaquita = $_POST['comVaquita'];
$data = $_POST['Data'];
$insere = mysqli_query($user_db,"INSERT INTO coment_vaquita VALUES (NULL, '$usuário','$comVaquita', '$data')");



?>