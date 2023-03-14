<?php
require '../connection.php';
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col">
            <div class="table-responsive" id="tb-carrito">
                <table class="table table-bordered table-striped text-center">
                    <thead>
                        <tr>
                            <td colspan="7">
                                <h4 class="text-center text-info m-0">Produtos no carrito</h4>
                            </td>
                        </tr>
                        <tr>
                            <th>#</th>
                            <th colspan="2">Produto</th>
                            <th>Preço</th>
                            <th>Quantidade</th>
                            <th>Total</th>
                            <th><a class="btn btn-danger limpar-cart">Limpar carrito</a></th>
                        </tr>
                    </thead>
                    <?php
                        $rows = mysqli_query($user_db, "SELECT * FROM carrito");
                        $i = 1;
                        $totalrows = mysqli_num_rows($rows);
                        if ($totalrows > 0){
                    ?>
                    <?php
                    $total = 0;
                    foreach($rows as $row) : 
                    $valorr = $row["preço"];
                    $ptotal = $row["preço_total"];
                    $nome = $row["nome"];
                    ?>
                        <tr>
                            <td><?php echo $i++; ?></td>
                            <td><img id="img-car" src="<?php echo $row["imagem"]; ?>"></td>
                            <td><?php echo $row["nome"]; ?></td>
                            <td>R$ <?= number_format($valorr,2) ?></td>
                            <td><input type="number" value="<?php echo $row["qtde"]; ?>" class="form-control" id="input-car" disabled></td>
                            <td>R$ <?= number_format($ptotal,2) ?></td>
                            <td>
                                <a class="btn btn-danger delete-item" id="<?php echo $row['nome']; ?>">Excluir</a>
                            </td>
                        </tr>
                    <?php 
                        $total = $total + $row["preço_total"];
                    endforeach;}else{
                        echo "<script>$('#tb-carrito').hide();</script>";
                        echo '<script>$("#car-vazio").show();</script>';
                        echo '<script>$("#cont-compras2").show();</script>';
                    }

                    ?> 
                    <tr>
                        <td colspan="5" align="right" id="total-pagar">Total a pagar</td>
                        <td align="right" id="valor-pagar">R$ <?php echo number_format($total, 2); ?></td>
                        <td></td>
                    </tr>
                    <tbody>
                        <tr>
                            <td colspan="3"><button class="btn btn-success" id="cont-compras">Continuar compras</button></td>
                            <td colspan="4"><button type="button" id="finalizar-c" class="btn btn-info">Finalizar Compra</button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="container" id="endereço">
    <h4>Endereço de entrega</h4>
    <div>
        <div class="col"><h5>Rua: </h5></div>
        <div class="col"><input id="end-rua" type="text" class="form-control"></div>
        <h5 id="sem-rua">Preenchimento obrigatório<h5>
    </div>
    <div>
        <div class="col"><h5>Número: </h5></div>
        <div class="col"><input id="end-núm" type="text" class="form-control"></div>
        <h5 id="sem-número">Preenchimento obrigatório<h5>
    </div>
    <div>
        <div class="col"><h5>Bairro: </h5></div>
        <div class="col"><input id="end-bairro" type="text" class="form-control"></div>
        <h5 id="sem-bairro">Preenchimento obrigatório<h5>
    </div>
    <div>
        <div class="col"><h5>Cidade: </h5></div>
        <div class="col"><input id="end-cidade" type="text" class="form-control"></div>
        <h5 id="sem-cidade">Preenchimento obrigatório<h5>
    </div>
    <div>
        <div class="col"><h5>Estado: </h5></div>
        <div class="col"><input id="end-estado" type="text" class="form-control"></div>
        <h5 id="sem-estado">Preenchimento obrigatório<h5>
    </div>

    <div>
        <button class="btn btn-info" id="finalizar">Finalizar</button>
    </div>
</div>

<br>
<div class="container text-center" id="car-vazio"><h3>carrito vazio</h3></div>
<br>
<button class="btn btn-success" id="cont-compras2">Continuar compras</button>

<div class="container text-center" id="venda">
    <h3>Agradecemos a compra!</h3>
    <h3>O pagamento será realizado na entrega</h3>
</div>
<br>
<button class="btn btn-success" id="cont-compras3">Voltar ao shopping</button>

<script>
    $(document).on("click", "#finalizar-c", function() {
        $("#endereço").show();
        $("#tb-carrito").hide();
    });
</script>

<script>
    $(document).on("click", "#finalizar", function() {
        var rua = $("#end-rua").val();
        var número = $("#end-núm").val();
        var bairro = $("#end-bairro").val();
        var cidade = $("#end-cidade").val();
        var estado = $("#end-estado").val();

        if(rua != "" && número != "" && bairro != "" && cidade != "" && estado != ""){
            $.ajax({
                    //type: "POST",
                    //url: "pagez/pesquisa-cadastro.php",
                    success: function(){
                        $('#venda').show();
                        $('#cont-compras3').show();
                        $('#endereço').hide();
                    }
                });

            $.ajax({
                url: "dados/apagar-carrito.php",
                    success: function(){
                        
                    }       
            });
        }else{
            if (rua == "") {
            $('#sem-rua').show();
            $('#end-rua').css("border-color", "rgb(160, 47, 212)");
            }

            if (número == "") {
            $('#sem-número').show();
            $('#end-núm').css("border-color", "rgb(160, 47, 212)");
            }

            if (bairro == "") {
            $('#sem-bairro').show();
            $('#end-bairro').css("border-color", "rgb(160, 47, 212)");
            }
            
            if (cidade == "") {
            $('#sem-cidade').show();
            $('#end-cidade').css("border-color", "rgb(160, 47, 212)");
            }

            if (estado == "") {
            $('#sem-estado').show();
            $('#end-estado').css("border-color", "rgb(160, 47, 212)");
            }
        }
    });
</script>