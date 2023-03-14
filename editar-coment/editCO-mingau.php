<?php
    require '../connection.php';

        if (isset($_POST['edit_id'])){
            $id = $_POST['edit_id'];

            $fetch = "SELECT * FROM coment_mingau WHERE id = '$id'";
            $result = mysqli_query($user_db, $fetch);
            while ($data = mysqli_fetch_array($result)){

                $id = $data['id'];
                $coment = $data['Comentário'];
            }
        }
?>

<input type="hidden" id="id-mingau" value="<?php echo $id ?>">
<h5>
    <textarea type="text" id="upCo-mingau" class="form-control"><?php echo $coment ?></textarea>
    <button type="button" class="btn btn-primary" id="update-mingau">Atualizar</button>
    <button type="button" class="btn btn-default" id="fechar-mingau">Cancelar</button>
</h5>
<br>