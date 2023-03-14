<?php require '../connection.php';
    if (!isset($_SESSION)){
        session_start();
    }

$usuário = $_SESSION['usuário'];
$comSertanejo = $_POST['comSertanejo'];
$data = $_POST['Data'];
$insere = mysqli_query($user_db,"INSERT INTO coment_sertanejo VALUES (NULL, '$usuário','$comSertanejo', '$data')");



?>