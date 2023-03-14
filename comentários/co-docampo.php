<?php require '../connection.php';
    if (!isset($_SESSION)){
        session_start();
    }
?>


<div class="container desc-geral">

<?php
$usuárioS = $_SESSION['usuário'];

$seleciona = mysqli_query($user_db, "SELECT * FROM coment_docampo ORDER BY id DESC");
$i = 1;
$total = mysqli_num_rows($seleciona);
if ($total > 0) {
?>
<?php foreach($seleciona as $sel) : ?>
<? echo $i++; ?>
<h4>Comentado por: <?php echo $sel["Usuário"]; ?></h4>
<h5><?php echo $sel["Comentário"]; ?> - <?php echo $sel["Data"];
    if ($usuárioS === $sel["Usuário"]){
        ?> <button type="button" class="btn btn-primary editCO-docampo" id="<?php echo $sel["id"]; ?>">Editar</button> 
        <button type="button" class="btn btn-danger del-docampo" id= "<?php echo $sel["id"]; ?>">Deletar</button>
    <?php }
?></h5>
<br>
<?php endforeach;}else{
?> <h4>Não há comentários</h4><?php
}
?>

</div>