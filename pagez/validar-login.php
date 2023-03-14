<?php 
require "../connection.php";

$email = $_POST['email'];
$senha = sha1($_POST['senha']);

$rows = mysqli_query($user_db, "SELECT * FROM tabela_usuario WHERE email_db='$email' AND password_db='$senha'");
$totalrows = mysqli_num_rows($rows);

if ($totalrows > 0) {

    while ($array = mysqli_fetch_array($rows)) {
        $usuário = $array['username_db'];
        $email = $array['email_db'];
    }


    if (!isset($_SESSION)){
        session_start();
    }
    $_SESSION['usuário'] = $usuário;
    $_SESSION['email'] = $email;
    
    echo 1;
}else {
    echo 0;
}