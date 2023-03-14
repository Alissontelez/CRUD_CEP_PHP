<?php
    require 'connection.php';

        if (isset($_POST['edit_id'])){
            $edit_id = $_POST['edit_id'];

            $fetch = "SELECT * FROM table_one WHERE id = '$edit_id'";
            $result = mysqli_query($mysqli, $fetch);
            while ($data = mysqli_fetch_array($result)){

                $id = $data['id'];
                $cep = $data['cep'];
                $rua = $data['rua'];
                $bairro = $data['bairro'];
                $cidade = $data['cidade'];
                $uf = $data['uf'];
            }
        }
?>

<div class="row justify-content-center">
    <input type="hidden" name="edit_id" maxlength="8" class="form-control" id="edit_id" value="<?php echo $edit_id ?>">
</div>
<div class="row justify-content-center">
    <h4 id="digite">Digite o CEP:</h4>
    <input type="text" name="insertCEP" maxlength="8" class="form-control" id="cepup" value="<?php echo $cep ?>">
</div>
<div class="container col-4"><label id="nocepup">Preenchimento obrigatório</label></div>
<div class="container col-4"><label id="invalidCepup">Formatado de CEP inválido</label></div>
<!-- Teste campos -->
<div class="rotulorua row justify-content-center">
    <h4 id="digiterua">Digite a rua</h4>
    <input type="text" name="insertrua" maxlength="70" class="form-control" id="ruaup" value="<?php echo $rua ?>">
</div>
<div class="row justify-content-center rotulobairro">
    <h4 id="digitebairro">Digite o bairro</label></h4>
    <input type="text" name="insertbairro" maxlength="70" class="form-control" id="bairroup" value="<?php echo $bairro ?>">
</div>
<div class="row justify-content-center rotulocidade">
    <h4 id="digitecidade">Digite a cidade</label></h4>
    <input type="text" name="insertcidade" maxlength="70" class="form-control" id="cidadeup" value="<?php echo $cidade ?>">
</div>
<div class="row justify-content-center rotulouf">
    <h4 id="digiteestado">Digite o estado</label></h4>
    <input type="text" name="insertuf" maxlength="70" class="form-control" id="ufup" value="<?php echo $uf ?>">
</div>

<script>
$('#cepup').keyup(function() {
        $(this).val(this.value.replace(/\D/g, ''));
    });
</script>