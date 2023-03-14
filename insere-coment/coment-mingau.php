<?php require '../connection.php';
    if (!isset($_SESSION)){
        session_start();
    }

$usuário = $_SESSION['usuário'];
$comMingau = $_POST['comMingau'];
$data = $_POST['Data'];
$insere = mysqli_query($user_db,"INSERT INTO coment_mingau VALUES (NULL, '$usuário','$comMingau', '$data')");



?>