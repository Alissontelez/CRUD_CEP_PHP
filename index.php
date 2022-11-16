<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greate SAITE</title>
    <link rel="icon" href="imagez/favicon.png" type="image/png">
    <link href="style.css" rel="stylesheet">
    <!--<link rel="stylesheet" href="bootstrap.css">-->
    <!--<script src="jquery-3.6.1.min.js"></script>-->
    <!--<script src="jquery-ui.css"></script>-->
    <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">-->
    <!--<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>-->
    <!--<script src="jquery-ui.js"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="bootstrap.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <!--<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>-->

    <!-- Script Dialog -->
<script>
    $(function(){
        $("#formAbre").dialog({
            autoOpen: false,
            show: {
                effect:"blind",
                duration: 1000
            },
            hide: {
                effect:"explode",
                duration: 1000
            }
        });
        $("#bt-dailogue").on("click", function(){
            $("#formAbre").dialog("open");
        });
    });
    </script>
    <script>
    $(function(){
    $( "#formAbre" ).dialog({
	autoOpen: false,
	width: 400,
	buttons: [
		{
			text: "Ok",
			click: function() {
				$( this ).dialog( "close" );
			}
		}
        ]
    });
    });
    </script>
</head>
<body>
    <?php include 'crud-cep.php';?>
    <?php include 'function.php';?>

    <div class="Geral container">
        <div class="head-portifa row"><img src="imagez/head portfia.png"></div>
        <div class="Caixalink row">
            <div class="col">
            <button type="button" id="botao-cep" class="btn btn-toggle" data-element="#divPrincipal">CRUD CEP PHP</button>
            </div>
            <!-- <div class="col">
            <button type="button" id="botao-app2" class="btn btn-toggle" data-element="#aplicação2">Aplicativo 2</button>
            </div> -->
        </div>
    </div>

    <div class="container" id="divPrincipal">
        <div class="row Caixalink2"><div class="col">
            <button type="button" id="botao-pesquisar" class="btn btn-toggle" data-element="#pesquisarCep">PESQUISAR CEP</button>
            <button type="button" id="botao-consultar" class="btn btn-toggle" data-element="#tabelapesquisada">VER CEPs PESQUISADOS</button>
        </div></div>
    </div>
    
    <!-- Formulário CEP -->
    <div id="pesquisarCep" class="container col-7">
        <form class="needs-validatition" id="formulario" method="post" novalidate>
            <!--<input type="hidden" name="id" id="idum" value="<?php// echo $id; ?>">-->
            <div class="row justify-content-center">
                <h4 id="digite">Digite o CEP:</h4>
                <input type="text" name="insertCEP" maxlength="8" class="form-control" id="cep" placeholder="Digite apenas números">
            </div>
            <div class="container col-3"><label id="nocep">Preenchimento obrigatório</label></div>
            <div class="container col-3"><label id="invalidCep">Formato de CEP inválido</label></div>           
        </form>

        <div class="row justify-content-center rotulo4">
                <button id="enter" class="btn btn-primary" type="button" onclick="submitData('insert')">BUSCAR</button>
                <button id="bt-off" class="btn btn-primary" type="button" disabled>BUSCAR</button>
        </div>

        <div class="container col-3">
        <div class="rotolex  " id="rotulo2">
                <input class="form-check-input" type="checkBox" value="" id="check" data-element="#enter, #bt-off, #lb_check, #bt-dailogue" autocomplete="off" required>
                <label id="aceito"><h6>Aceito os termos e condições<h6></label>
        </div>
        </div>
        <div class="container col-3">
            <label id="lb_check">Você deve aceitar antes de buscar</label>
            <button id="bt-dailogue">clique aqui para ler</button>
        </div>

        <div id="formAbre" title="Termos de uso">
            <h2>Você está lendo isso em um dialog, cuja parte do código é
                essa:        div id="formAbre" title="Termos de uso">
            h2>Você está lendo isso em um dialog </h2>
        </div>
    </div>
    <!-- Tabela Pesquisada -->
                <div class="container col-7" id="tabelapesquisada">
                    <div class="row justify-content-center">
                        
                    </div>
                </div>

<!-- Script Toggle Buttons -->
    <script>
    $(function(){
        $("#botao-cep").click(function(e){
            e.preventDefault();
            $('#pesquisarCep').hide();
            $('#tabelapesquisada').hide();
            el = $(this).data('element');
            $(el).toggle();
        });
    });
    </script>

<script>
    $(function (){
        $("#botao-pesquisar").click(function(e){
            e.preventDefault();
            $('#tabelapesquisada').hide();
            el = $(this).data('element');
            $(el).toggle();
        });
    });
</script>

<script>
    $(function(){
        $("#botao-consultar").click(function(e){
            e.preventDefault();
            $('#pesquisarCep').hide();
            el = $(this).data('element');
            $(el).toggle();

            $.ajax({
                url: "load.php",
                success: function(result){
                    $("#tabelapesquisada").html(result);
                }
            });
        });
    });
</script>
    
<script>
    $(function(){
        $("#check").click(function(){
            el = $(this).data('element');
            $(el).toggle();
        });
    });
</script>

<!-- Buscar -->
<script>
        $('#cep').keyup(function() {
          $(this).val(this.value.replace(/\D/g, ''));
        });

        function submitData(action){

            var cep = $("#cep").val();

            if (cep == "") {
                $('#nocep').show();
                $('#invalidCep').hide();
                $('#cep').css("border-color", "red");
                return;
            }
            else if (cep != "") {
                var validacep = /^[0-9]{8}$/;
                if(validacep.test(cep)) {

                    var cep = $("#cep").val();
                    var url = "https://viacep.com.br/ws/"+ cep +"/json";

                    $.getJSON(url, function(dadoz){
                        if (!("erro" in dadoz)) {

                            $('#cepAtual').html(cep);
                            $("#ruaAtual").html(dadoz.logradouro);
                            $("#bairroAtual").html(dadoz.bairro);
                            $("#cidadeAtual").html(dadoz.localidade);
                            $("#ufAtual").html(dadoz.uf);

                    var data = {
                        action: action,
                        cep: cep,
                        //cep: $("#cep").val(),
                        rua: dadoz.logradouro,
                        bairro: dadoz.bairro,
                        cidade: dadoz.localidade,
                        uf: dadoz.uf,
                    };

                    $.ajax({
                        url:'function.php',
                        type: 'POST',
                        data: data,
                        success:function(response){
                            $("#modalAtual").modal('show');
                            $("#cep").val("");
                            $('#nocep').hide();
                            $('#invalidCep').hide();
                            $('#cep').css("border-color", "#ced4da"); 
                        }
                    });
                }
                else {
                        $("#cep").val("");
                        alert("CEP não encontrado.");
                        return;
                    }
                    });
                }//fecham. if(validacep.test(cep)) 
            } //(cep != "")
            else {
                $('#invalidCep').show();
                $('#cep').css("border-color", "red");
                $("#cep").val("");
                $('#nocep').hide();
            }
            }//fecham. Submit
    </script>

</body>
</html>

<!-- Modal Atual -->
<div class="modal fade modalAtual" id="modalAtual">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content" id="idAtual">
            <div class="modal-header">
                <h5 class="modal-title" id="tituloModal">CEP Pesquisado</h5>
                    <button type="button" class="btn-close" id="dismiz" data-bs-dismiss="modal" aria-label="Close"></button>                        
            </div>
            <div class="modal-body body_atual" id="body_atual">
                <div id="divAtual">
                    <table class="table" id="tb1">
                        <thead>
                            <tr>
                                <th>CEP</th>
                                <th>Rua</th>
                                <th>Bairro</th>
                                <th>Cidade</th>
                                <th>Estado</th>
                            </tr>
                        </thead>
                            <tr>
                                <td id="cepAtual"></td>
                                <td id="ruaAtual"></td>
                                <td id="bairroAtual"></td>
                                <td id="cidadeAtual"></td>
                                <td id="ufAtual"></td>
                            </tr>
                    </table>
                </div>
                
                <div id="dados_edit">

                </div>

                </div>
            <div class="modal-footer">
            <a type="button" class="btn btn-toggle editarAtual" data-element=".cancelarAtual">Editar</a>
            <a type="button" class="btn btn-toggle cancelarAtual" data-element=".editarAtual">Cancelar</a>
            <button type="button" class="btn btn-default" id="klose" data-bs-dismiss="modal">Fechar</button>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal editar tabela pesquisada -->
<div class="modal fade" id="modalPesquisada">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="" method="post" id="atualizarForm">
                <div class="modal-header">
                <h4 class="modal-title" id="tituloModal">Atualizar</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </div>
                <div class="modal-body" id="body_pesquisada">
                
                </div>   
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="updatePesquisada">Atualizar</button>
                    <button type="button" class="btn btn-default" id="fecharpesquisada" data-bs-dismiss="modal">Fechar</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal deletar-->
<div class="modal fade" id="modalDeletar" tabindex="-1">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Deletar Dados</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Tem certeza que quer deletar?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-primary .deletarM">Deletar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Confirm Atualização Atual-->
<div class="modal fade" id="confirmUP">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
                <div class="modal-header">
                <h4 class="modal-title" id="tituloModalUP"></h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </div>
                <div class="modal-body" id="body-up">
                    <h4>Dados atualizados com sucesso!</h4>
                </div>   
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" id="fecharUP" data-bs-dismiss="modal">OK</button>
                </div>
        </div>
    </div>
</div>

<!--Fechar Modal Atual-->
<script>
    let template = null;
    $('.modalAtual').on('show.bs.modal', function() {
      template = $(this).html();
    });

    $('.modalAtual').on('hidden.bs.modal', function() {
      $(this).html(template);
    });
</script>

<!--Cancelar Atual-->
<script>
    $(function(){
        $(document).on('click', '.cancelarAtual', function(){
            $("#dados_edit").hide();
            $(".cancelarAtual").hide();
            $("#divAtual").show();
            el = $(this).data('element');
            $(el).toggle();
        });
    });
</script>

<!--Edit Atual-->
<script>
$(document).on('click', '.editarAtual', function(){
    $(".editarAtual").hide();
    $("#divAtual").hide();
    $("#dados_edit").show();
    el = $(this).data('element');
    $(el).toggle();

    var edit_id_atual = $(this).attr('class');
    $.ajax({
        url:"load-atual.php",
        type: "POST",
        data:{clicado:edit_id_atual},
        success:function(data){
            $("#dados_edit").html(data);
        }
    });
});
</script>

<!--Update Modal Atual-->
<script>
    $(document).on('click', '#atualizar', function(){
       
    var cep = $("#cep2").val();

    if (cep == "") {
        $('#nocep2').show();
        $('#invalidCep2').hide();
        $('#cep2').css("border-color", "red");
        return;
    }
    else if (cep != "") {
        var validacep = /^[0-9]{8}$/;
        if(validacep.test(cep)) {

            $.ajax({
			url: "atualizar.php",
			type: "POST",
			//cache: false,
			data:{
				id: $('#edit_id_atual').val(),
				cep: $('#cep2').val(),
				rua: $('#rua2').val(),
				bairro: $('#bairro2').val(),
				cidade: $('#cidade2').val(),
                uf: $('#uf2').val(),
			},
			success: function(res){
                $('#confirmUP').modal('show');
                $(function(){
                        $.ajax({
                        url: "load.php",
                        success: function(result){
                            $("#tabelapesquisada").html(result);
                            },
                        }); 
                        $('#modalAtual').modal('toggle');
                }); 
			}
        });
        }else{
            $('#invalidCep2').show();
            $('#nocep2').hide();
            $('#cep2').css("border-color", "red");
        }}
    });
</script>

<!--Edit Tabela Pesquisada-->
<script>
$(document).on('click', '.edit_data', function(){
    var edit_id = $(this).attr('id');
    $.ajax({
        url:"editar.php",
        type: "POST",
        data:{edit_id:edit_id},
        success:function(data){
            $("#body_pesquisada").html(data);
            $("#modalPesquisada").modal('show');
        }
    });
});
</script>

<!--Update Tabela Pesquisada-->
<script>
$(document).on("click", "#updatePesquisada", function() {
    var cep = $("#cepup").val();

    if (cep == "") {
        $('#nocepup').show();
        $('#invalidCepup').hide();
        $('#cepup').css("border-color", "red");
        return;
    }
    else if (cep != "") {
        var validacep = /^[0-9]{8}$/;
        if(validacep.test(cep)) {
    
		$.ajax({
			url: "atualizar.php",
			type: "POST",
			//cache: false,
			data:{
				id: $('#edit_id').val(),
				cep: $('#cepup').val(),
				rua: $('#ruaup').val(),
				bairro: $('#bairroup').val(),
				cidade: $('#cidadeup').val(),
                uf: $('#ufup').val(),
			},
			success: function(result){
                $.ajax({
                url: "load.php",
                success: function(result){
                    $("#tabelapesquisada").html(result);
                }
            });
            $('#modalPesquisada').modal().hide();
            $("#modalPesquisada").modal("dispose");
			}
		});
    }else{
        $('#invalidCepup').show();
        $('#nocepup').hide();
        $('#cepup').css("border-color", "red");
        }}
    });
</script>

<!--Deletar-->
<script>
    $(document).on('click', '.deletarid', function(){   
        var idd = $(this).attr('id');
            
            var confirmalert = confirm("Tem certeza que quer deletar?");
            if (confirmalert) {
            
            $.ajax({
            url: 'deletar.php',
            type: 'POST',
            data: { id:idd },
            success: function(data){

                $.ajax({
                url: "load.php",
                success: function(result){
                    $("#tabelapesquisada").html(result);
                }
                });
            }
            });
            }
        });
</script>