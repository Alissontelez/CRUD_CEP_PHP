<?php
    require '../connection.php';

        if (isset($_POST['edit_id'])){
            $id = $_POST['edit_id'];

            $fetch = "SELECT * FROM coment_cafe2 WHERE id = '$id'";
            $result = mysqli_query($user_db, $fetch);
            while ($data = mysqli_fetch_array($result)){

                $id = $data['id'];
                $coment = $data['Comentário'];
            }
        }
?>

<input type="hidden" id="id-café2" value="<?php echo $id ?>">
<h5>
    <textarea type="text" id="upCo-café2" class="form-control"><?php echo $coment ?></textarea>
    <button type="button" class="btn btn-primary" id="update-café2">Atualizar</button>
    <button type="button" class="btn btn-default" id="fechar-café2">Cancelar</button>
</h5>
<br>