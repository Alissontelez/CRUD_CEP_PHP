    <?php 
    require "../connection.php";
    
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['usuário'])){
        header("Location: ../index.php");
    }
   
    $email = $_SESSION['email'];
    $rows = mysqli_query($user_db, "SELECT * FROM tabela_usuario WHERE email_db='$email'");
    $totalrows = mysqli_num_rows($rows);

    if ($totalrows > 0) {

    while ($array = mysqli_fetch_array($rows)) {
        $id = $array['id'];
        }
    }
    ?>

    <div class="container text-center" id="painel">
        <h4>Bem vindo <?php echo $_SESSION['usuário'] ?></h4>
        <button type="button" class="btn btn-primary" id="vai-shop">Shopping</button>
        <button type="button" class="btn btn-primary" id="bt-dados" data-element="#dados">Dados</button>
        <button type="button" class="btn btn-danger" id="sair" onClick="window.location = 'pagez/logout.php';">Sair</button>
    </div>
    <br>

<div class="container text-center" id="dados">
    <h4>Usuário: <?php echo $_SESSION['usuário'] ?>  <button type="button" class="btn btn-primary" id="edit-usuário" data-element="#editar-usuário">Editar</button></h4>
    <br>
    <h4>E-mail: <?php echo $_SESSION['email'] ?>  <button type="button" class="btn btn-primary" id="edit-email" data-element="#editar-email">Editar</button></h4>
    <br>
    <h4>Senha: *******  <button type="button" class="btn btn-primary" id="edit-senha" data-element="#editar-senha">Editar</button></h4>
    <br>
    <h4>Deletar conta: <button type="button" class="btn btn-danger" id="del-conta">Deletar</button></h4>
</div>

<input type="hidden" id="id-atualizar" value="<?php echo $id ?>">
<div class="container text-center" id="editar-usuário">
    <h4><input type="text" value="<?php echo $_SESSION['usuário'] ?>" id="up-usuário" class="form-control"></h4>
    <h4 id="no-user">Preenchimento obrigatório</h4>
    <button type="button" class="btn btn-primary update-usuário" id="">Atualizar</button>
    <button type="button" class="btn btn-default" id="fechar-usuário">Cancelar</button>
</div>

<div class="container text-center" id="editar-email">
<h4><input type="text" value="<?php echo $_SESSION['email'] ?>" id="up-email"class="form-control"></h4>
<h4 id="sem-email">Preenchimento obrigatório</h4>
<h4 id="e-invalidy"></h4>
    <button type="button" class="btn btn-primary" id="update-email">Atualizar</button>
    <button type="button" class="btn btn-default" id="fechar-email">Cancelar</button>
</div>

<div class="container text-center" id="editar-senha">
<h4><input type="password" placeholder="Nova Senha" id="nova-senha" class="form-control"></h4>
<h4><input type="password" placeholder="Confirmar Senha" id="nova-senha-c" class="form-control"></h4>
<h4 id="nop-senha">Preenchimento obrigatório</h4>
<h4 id="difere-senha">Senhas diferentes</h4>
    <button type="button" class="btn btn-primary" id="update-senha">Atualizar</button>
    <button type="button" class="btn btn-default" id="fechar-senha">Cancelar</button>
</div>

