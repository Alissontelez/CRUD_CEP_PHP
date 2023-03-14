<?php require '../connection.php';
    if (!isset($_SESSION)){
        session_start();
    }

$usuário = $_SESSION['usuário'];
$comDocampo = $_POST['comDocampo'];
$data = $_POST['Data'];
$insere = mysqli_query($user_db,"INSERT INTO coment_docampo VALUES (NULL, '$usuário','$comDocampo', '$data')");



?>