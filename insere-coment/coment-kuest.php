<?php require '../connection.php';
    if (!isset($_SESSION)){
        session_start();
    }

$usuário = $_SESSION['usuário'];
$comKuest = $_POST['comKuest'];
$data = $_POST['Data'];
$insere = mysqli_query($user_db,"INSERT INTO coment_kuest VALUES (NULL, '$usuário','$comKuest', '$data')");



?>