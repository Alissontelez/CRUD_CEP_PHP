<?php require '../connection.php';
    if (!isset($_SESSION)){
        session_start();
    }

$usuário = $_SESSION['usuário'];
$comCampeiro = $_POST['comCampeiro'];
$data = $_POST['Data'];
$insere = mysqli_query($user_db,"INSERT INTO coment_campeiro VALUES (NULL, '$usuário','$comCampeiro', '$data')");



?>