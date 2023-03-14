<?php
    require '../connection.php';

        if (isset($_POST['edit_id'])){
            $id = $_POST['edit_id'];

            $fetch = "SELECT * FROM coment_campeiro WHERE id = '$id'";
            $result = mysqli_query($user_db, $fetch);
            while ($data = mysqli_fetch_array($result)){

                $id = $data['id'];
                $coment = $data['Comentário'];
            }
        }
?>

<input type="hidden" id="id-campeiro" value="<?php echo $id ?>">
<h5>
    <textarea type="text" id="upCo-campeiro" class="form-control"><?php echo $coment ?></textarea>
    <button type="button" class="btn btn-primary" id="update-campeiro">Atualizar</button>
    <button type="button" class="btn btn-default" id="fechar-campeiro">Cancelar</button>
</h5>
<br>