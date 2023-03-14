<?php require '../connection.php';
    if (!isset($_SESSION)){
        session_start();
    }

$usuário = $_SESSION['usuário'];
$comTombaina = $_POST['comTombaina'];
$data = $_POST['Data'];
$insere = mysqli_query($user_db,"INSERT INTO coment_tombaina VALUES (NULL, '$usuário','$comTombaina', '$data')");



?>