<?php 
if(!isset($_SESSION)){
    session_start();
}
if(!isset($_SESSION['usuário'])){
    header("Location: ../index.php");
}
?>

<div class="container text-center">
    <h4>Bem vindo <?php echo $_SESSION['usuário'] ?></h4>

    <button type="button" class="btn btn-primary" id="bt-painel">Painel</button>

    <button type="button" class="btn btn-danger" id="sair" onClick="window.location = 'pagez/logout.php';">Sair</button>
</div>