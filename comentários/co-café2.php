<?php require '../connection.php'; 
    if (!isset($_SESSION)){
        session_start();
    }
?>


<div class="container desc-geral">

<?php
$usuárioS = $_SESSION['usuário'];

$seleciona2 = mysqli_query($user_db, "SELECT * FROM coment_cafe2 ORDER BY id DESC");
$i = 1;
$total2 = mysqli_num_rows($seleciona2);
if ($total2 > 0) {
?>
<?php foreach($seleciona2 as $sel) : ?>
<? echo $i++; ?>
<h4>Comentado por: <?php echo $sel["Usuário"]; ?></h4>
<h5><?php echo $sel["Comentário"]; ?> - <?php echo $sel["Data"];
    if ($usuárioS === $sel["Usuário"]){
        ?> <button type="button" class="btn btn-primary editCO-café2" id="<?php echo $sel["id"]; ?>">Editar</button> 
        <button type="button" class="btn btn-danger del-café2" id= "<?php echo $sel["id"]; ?>">Deletar</button>
    <?php }
?></h5>
<br>
<?php endforeach;}else{
?> <h4>Não há comentários</h4><?php
}
?>

</div>