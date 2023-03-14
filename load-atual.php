<?php require 'connection.php';
?>

<?php

if (isset($_POST['clicado'])){
    $clicado = $_POST['clicado'];

    $fetch = "SELECT * FROM table_one ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($mysqli, $fetch);
    while ($data = mysqli_fetch_array($result)){

        $edit_id_atual = $data['id'];
        $cep = $data['cep'];
        $rua = $data['rua'];
        $bairro = $data['bairro'];
        $cidade = $data['cidade'];
        $uf = $data['uf'];
    }
}
?>    

<div class="row justify-content-center">
    <input type="hidden" name="edit_id" maxlength="8" class="form-control" id="edit_id_atual" value="<?php echo $edit_id_atual ?>">
</div>
<div class="row justify-content-center">
    <h4 id="digite">Digite o CEP:</h4>
    <input type="text" name="insertCEP" maxlength="8" class="form-control" id="cep2" value="<?php echo $cep ?>">
    </div>
    <div class="container col-3"><label id="nocep2">Preenchimento obrigatório</label></div>
    <div class="container col-3"><label id="invalidCep2">Formato de CEP inválido</label></div>
    <!-- Teste campos -->
    <div class="rotulorua row justify-content-center">
        <h4 id="digiterua">Digite a rua</h4>
        <input type="text" name="insertrua" maxlength="70" class="form-control" id="rua2" value="<?php echo $rua ?>">
    </div>
    <div class="row justify-content-center rotulobairro">
        <h4 id="digitebairro">Digite o bairro</label></h4>
        <input type="text" name="insertbairro" maxlength="70" class="form-control" id="bairro2" value="<?php echo $bairro ?>">
    </div>
    <div class="row justify-content-center rotulocidade">
        <h4 id="digitecidade">Digite a cidade</label></h4>
        <input type="text" name="insertcidade" maxlength="70" class="form-control" id="cidade2" value="<?php echo $cidade ?>">
    </div>
    <div class="row justify-content-center rotulouf">
        <h4 id="digiteestado">Digite o estado</label></h4>
        <input type="text" name="insertuf" maxlength="70" class="form-control" id="uf2" value="<?php echo $uf ?>">
    </div>
    <div class="row justify-content-center">
    <button type="button" class="btn btn-primary" id="atualizar" >Atualizar</button>
    </div>

<script>
$('#cep2').keyup(function() {
        $(this).val(this.value.replace(/\D/g, ''));
    });
</script>