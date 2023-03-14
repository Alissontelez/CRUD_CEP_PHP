<?php require '../connection.php'; 
    if (!isset($_SESSION)){
        session_start();
    }

?>

<?php

if (isset($_POST['add_id'])){
    $add_id = $_POST['add_id'];

    $fetch = "SELECT * FROM tabela_produtos WHERE id_produto = '$add_id'";

    $result = mysqli_query($user_db, $fetch);
    while ($data = mysqli_fetch_array($result)){

        $id = $data['id_produto'];
        $nomep = $data['nome_produto'];
        $valorp = $data['valor_produto'];
        $imgp = $data['img_produto'];
        $qtde = $data['qtde'];
    }
}
?>

<input type="hidden" id="id-detalhes" name="hid-detalhes" value="<?php echo $id ?>">
<input type="hidden" id="id-nome" name="hid-nome" value="<?php echo $nomep ?>">
<input type="hidden" id="id-img" name="hid-img" value="<?php echo $imgp ?>">
<input type="hidden" id="id-preço" name="hid-preço" value="<?php echo $valorp ?>">
<input type="hidden" id="id-qtde" name="hid-qtde" value="<?php echo $qtde ?>">

<div class="container">
<div class="row">
    <div class="col-4 p-2" id="det-img">
        <img src="<?= $imgp?>">
    </div>
    <div class="col-6 p-2" id="detalhe-add">
        <div><h4 id="det-nome" class="text-info" ><?php echo $nomep?></h4></div>
        <div><h5 id="det-preço">R$ <?= number_format($valorp,2) ?></h5></div>
            <div class="row p-2">
                <div class="col" id="qtde-det-d"><h5 id="qtde-det-h">Quantidade</h5></div>
                <div class="col"><input id="qtde-det-i" name="hide-qtde" type="number" class="form-control" value="1"></div>
            </div>
            <div class="row p-2">
                <div class="col" align="right" id="frete-det-d"><h5 id="det-total-h">Total</h5></div>
                <div class="col" align="left" id="det-total2"><h5>R$ <?php echo number_format(($valorp * $qtde),2)?></h5></div>
            </div>

            <input type="submit" name="add_to_cart" class="btn btn-primary add-cart" id="" value="Adicionar ao carrinho"/>
    </div>
</div>
</div>

<!-- Cafézito -->
<div class="container desc-geral" id="desc-café1">
        <div class="row"><div class="col">
            <h4>Descrição do produto</h4>
            <h5>Aqui vai a descrição do produto. ..................... 
                este produto é o CAFÉZITO UM !
                ......................O produto é ilustrativo.......................
            cafézito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o CAFÉZITO UM !
                ......................O produto é ilustrativo.......................
            cafézito...........................
            Aqui vai a descrição do produto. ..................... 
                este produto é o CAFÉZITO UM !
                ......................O produto é ilustrativo.......................
            cafézito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o CAFÉZITO UM !
                ......................O produto é ilustrativo.......................
            cafézito...........................</h5>
        </div></div>
</div>

<div class="container desc-geral" id="desc-café2">
        <div class="row"><div class="col">
            <h4>Descrição do produto</h4>
            <h5>Aqui vai a descrição do produto. ..................... 
                este produto é o CAFÉZITO DOIS !
                ......................O produto é ilustrativo.......................
            cafézito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o CAFÉZITO DOIS !
                ......................O produto é ilustrativo.......................
            cafézito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o CAFÉZITO DOIS !
                ......................O produto é ilustrativo.......................
            cafézito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o CAFÉZITO DOIS !
                ......................O produto é ilustrativo.......................
            cafézito...........................</h5>
        </div></div>
</div>

<div class="container desc-geral" id="desc-ducafe">
        <div class="row"><div class="col">
            <h4>Descrição do produto</h4>
            <h5>Aqui vai a descrição do produto. ..................... 
                este produto é o CAFÉZITO DUCAFEZAL !
                ......................O produto é ilustrativo.......................
            cafézito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o CAFÉZITO DUCAFEZAL !
                ......................O produto é ilustrativo.......................
            cafézito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o CAFÉZITO DUCAFEZAL !
                ......................O produto é ilustrativo.......................
            cafézito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o CAFÉZITO DUCAFEZAL !
                ......................O produto é ilustrativo.......................
            cafézito...........................</h5>
        </div></div>
</div>

<!-- Leite -->
<div class="container desc-geral" id="desc-vaquita">
        <div class="row"><div class="col">
            <h4>Descrição do produto</h4>
            <h5>Aqui vai a descrição do produto. ..................... 
                este produto é o LEITE VAQUITA !
                ......................O produto é ilustrativo.......................
                leitche...........................Aqui vai a descrição do produto. ..................... 
                este produto é o LEITE VAQUITA !
                ......................O produto é ilustrativo.......................
                leitche...........................Aqui vai a descrição do produto. ..................... 
                este produto é o LEITE VAQUITA !
                ......................O produto é ilustrativo.......................
                leitche...........................Aqui vai a descrição do produto. ..................... 
                este produto é o LEITE VAQUITA !
                ......................O produto é ilustrativo.......................
                leitche...........................</h5>
        </div></div>
</div>
<div class="container desc-geral" id="desc-muuu">
        <div class="row"><div class="col">
            <h4>Descrição do produto</h4>
            <h5>Aqui vai a descrição do produto. ..................... 
                este produto é o LEITE MUUU !
                ......................O produto é ilustrativo.......................
                leitche...........................Aqui vai a descrição do produto. ..................... 
                este produto é o LEITE MUUU !
                ......................O produto é ilustrativo.......................
                leitche...........................Aqui vai a descrição do produto. ..................... 
                este produto é o LEITE MUUU !
                ......................O produto é ilustrativo.......................
                leitche...........................Aqui vai a descrição do produto. ..................... 
                este produto é o LEITE MUUU !
                ......................O produto é ilustrativo.......................
            leitche...........................</h5>
        </div></div>
</div>

<!-- Refri -->
<div class="container desc-geral" id="desc-tomba">
        <div class="row"><div class="col">
            <h4>Descrição do produto</h4>
            <h5>Aqui vai a descrição do produto. ..................... 
                este produto é o REFRIGERANTE TOMBAINA !
                ......................O produto é ilustrativo.......................
                refrizito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o REFRIGERANTE TOMBAINA !
                ......................O produto é ilustrativo.......................
                refrizito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o REFRIGERANTE TOMBAINA !
                ......................O produto é ilustrativo.......................
                refrizito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o REFRIGERANTE TOMBAINA !
                ......................O produto é ilustrativo.......................
                refrizito...........................</h5>
        </div></div>
</div>
<div class="container desc-geral" id="desc-kuest">
        <div class="row"><div class="col">
            <h4>Descrição do produto</h4>
            <h5>Aqui vai a descrição do produto. ..................... 
                este produto é o REFRIGERANTE KUEST !
                ......................O produto é ilustrativo.......................
            refrizito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o REFRIGERANTE KUEST !
                ......................O produto é ilustrativo.......................
                refrizito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o REFRIGERANTE KUEST !
                ......................O produto é ilustrativo.......................
                refrizito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o REFRIGERANTE KUEST !
                ......................O produto é ilustrativo.......................
                refrizito...........................</h5>
        </div></div>
</div>

<!-- Feijão -->
<div class="container desc-geral" id="desc-campo">
        <div class="row"><div class="col">
            <h4>Descrição do produto</h4>
            <h5>Aqui vai a descrição do produto. ..................... 
                este produto é o FEIJÃO DO CAMPO !
                ......................O produto é ilustrativo.......................
            feijãozito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o FEIJÃO DO CAMPO !
                ......................O produto é ilustrativo.......................
                feijãozito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o FEIJÃO DO CAMPO !
                ......................O produto é ilustrativo.......................
                feijãozito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o FEIJÃO DO CAMPO !
                ......................O produto é ilustrativo.......................
                feijãozito...........................</h5>
        </div></div>
</div>
<div class="container desc-geral" id="desc-campeiro">
        <div class="row"><div class="col">
            <h4>Descrição do produto</h4>
            <h5>Aqui vai a descrição do produto. ..................... 
                este produto é o FEIJÃO CAMPEIRO !
                ......................O produto é ilustrativo.......................
                feijãozito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o FEIJÃO CAMPEIRO !
                ......................O produto é ilustrativo.......................
                feijãozito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o FEIJÃO CAMPEIRO !
                ......................O produto é ilustrativo.......................
                feijãozito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o FEIJÃO CAMPEIRO !
                ......................O produto é ilustrativo.......................
                feijãozito...........................</h5>
        </div></div>
</div>

<!-- Arroz -->
<div class="container desc-geral" id="desc-sertanejo">
        <div class="row"><div class="col">
            <h4>Descrição do produto</h4>
            <h5>Aqui vai a descrição do produto. ..................... 
                este produto é o ARROZ SERTANEJO !
                ......................O produto é ilustrativo.......................
            arroizito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o ARROZ SERTANEJO !
                ......................O produto é ilustrativo.......................
                arroizito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o ARROZ SERTANEJO !
                ......................O produto é ilustrativo.......................
                arroizito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o ARROZ SERTANEJO !
                ......................O produto é ilustrativo.......................
                arroizito...........................</h5>
        </div></div>
</div>
<div class="container desc-geral" id="desc-mingau">
        <div class="row"><div class="col">
            <h4>Descrição do produto</h4>
            <h5>Aqui vai a descrição do produto. ..................... 
                este produto é o ARROZ MINGAU !
                ......................O produto é ilustrativo.......................
                arroizito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o ARROZ MINGAU !
                ......................O produto é ilustrativo.......................
                arroizito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o ARROZ MINGAU !
                ......................O produto é ilustrativo.......................
                arroizito...........................Aqui vai a descrição do produto. ..................... 
                este produto é o ARROZ MINGAU !
                ......................O produto é ilustrativo.......................
                arroizito...........................</h5>
        </div></div>
</div>

<!-- Cafézito -->
<script>
$(function(){
    var nomito = $("#det-nome").html();

    if (nomito == "Cafézito Um"){
        $("#desc-café1").show();
    }
      
    if (nomito == "Cafézito Dois"){
        $("#desc-café2").show();
    }

    if (nomito == "Cafézito duCafezal"){
        $("#desc-ducafe").show();
    }
});
</script>

<!-- Leite -->
<script>
$(function(){
    var nomito = $("#det-nome").html();

    if (nomito == "Leite Vaquita"){
        $("#desc-vaquita").show();
    }
      
    if (nomito == "Leite Muuu"){
        $("#desc-muuu").show();
    }
});
</script>

<!-- Refri -->
<script>
$(function(){
    var nomito = $("#det-nome").html();

    if (nomito == "Refri Tombaina"){
        $("#desc-tomba").show();
    }
      
    if (nomito == "Refri Kuest"){
        $("#desc-kuest").show();
    }
});
</script>

<!-- Feijão -->
<script>
$(function(){
    var nomito = $("#det-nome").html();

    if (nomito == "Feijão Do Campo"){
        $("#desc-campo").show();
    }
      
    if (nomito == "Feijão Campeiro"){
        $("#desc-campeiro").show();
    }
});
</script>

<!-- Arroz -->
<script>
$(function(){
    var nomito = $("#det-nome").html();

    if (nomito == "Arroz Sertanejo"){
        $("#desc-sertanejo").show();
    }
      
    if (nomito == "Arroz Mingau"){
        $("#desc-mingau").show();
    }
});
</script>

<!--Blur input det-->
<script>
    $(document).ready(function() {
        $("#qtde-det-i").blur(function() {
            var preço = $("#id-preço").val();
            var qtde = $("#qtde-det-i").val();
            var frete = $("#resurtzes").val();
            var total = (preço * qtde);
            
            if (qtde > 0) {
                $("#det-total2").html('<h5>R$ ' + total + '.00</h5>');
            }else{
                alert("Quantidade inválida");
        }
        });
    });
</script>