<?php
    require '../connection.php';

        if (isset($_POST['edit_id'])){
            $id = $_POST['edit_id'];

            $fetch = "SELECT * FROM coment_kuest WHERE id = '$id'";
            $result = mysqli_query($user_db, $fetch);
            while ($data = mysqli_fetch_array($result)){

                $id = $data['id'];
                $coment = $data['Comentário'];
            }
        }
?>

<input type="hidden" id="id-kuest" value="<?php echo $id ?>">
<h5>
    <textarea type="text" id="upCo-kuest" class="form-control"><?php echo $coment ?></textarea>
    <button type="button" class="btn btn-primary" id="update-kuest">Atualizar</button>
    <button type="button" class="btn btn-default" id="fechar-kuest">Cancelar</button>
</h5>
<br>