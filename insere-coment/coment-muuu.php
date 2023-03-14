<?php require '../connection.php';
    if (!isset($_SESSION)){
        session_start();
    }

$usuário = $_SESSION['usuário'];
$comMuuu = $_POST['comMuuu'];
$data = $_POST['Data'];
$insere = mysqli_query($user_db,"INSERT INTO coment_muuu VALUES (NULL, '$usuário','$comMuuu', '$data')");



?>