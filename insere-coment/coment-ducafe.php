<?php require '../connection.php';
    if (!isset($_SESSION)){
        session_start();
    }

$usuário = $_SESSION['usuário'];
$comDucafe = $_POST['comDucafe'];
$data = $_POST['Data'];
$insere2 = mysqli_query($user_db,"INSERT INTO coment_ducafe VALUES (NULL, '$usuário','$comDucafe', '$data')");



?>