<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saitezito</title>
    <link rel="icon" href="imagez/favicon.png" type="image/png">
    <link href="style.css" rel="stylesheet">
    <script src="bib/jquery-3.6.1.min.js"></script>
    <script src="bib/jquery-ui.css"></script>
    <script src="bib/jquery-ui.js"></script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->
    <script src="bib/bootstrap.js"></script>
    <!--<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/themes/smoothness/jquery-ui.css">-->
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>-->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">-->
    <link rel="stylesheet" href="bib/bootstrap.css">
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

    <!--Apagar DB-->
    <script>
    window.onbeforeunload = function () {
        $(function(){
            $.ajax({
                url: "dados/apagar-carrito.php",
                    success: function(){
                        
                    }       
            });
        });

    }
    </script>
</head>
<body>
<!--Início Body-->

<?php 
if(!isset($_SESSION)){
    session_start();
}

if(isset($_SESSION['usuário'])){ 
    ?>
    <script>
    $(function(){
        $.ajax({
            url: "pagez/logado.php",
                success: function(resultado2){
                    $("#autenticado").html(resultado2);
                    $("#autenticado").show();
                    $('.wrapper').show();
                    $('#pesquisar-prod').show();
                    $('#slideshow').show();
                    $(".Caixalink").hide();
                }       
        });
    });
    </script>
    <?php
}

?>
    <?php include 'connection.php';?>
    <?php include 'function.php';?>

    <div class="Geral container">
        <div class="head-portifa row"><img src="imagez/head portfia.png"></div>
        <div class="Caixalink row">
            <div class="col">
            <button type="button" id="botao-cep" class="btn btn-toggle" data-element="#divPrincipal">CRUD CEP</button>
            <button type="button" id="botao-shop" class="btn btn-toggle" data-element="#autentica">SHOPPING</button>
            </div>
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

<!-- Shopping -->
<!-- Autenticação -->
<div class="container" id="autentica">
    <div id="box">
    <h3>Autenticação</h3>
        <form id="form-login" method="POST">
            <div>
            <label id="lb-email">E-mail</label>
            <input type="text" id="email" class="form-control">
            </div>
            <div><label id="noemail">Preenchimento obrigatório</label></div>

            <div>
            <label id="lb-senha">Senha</label>
            <input type="password" name="password" id="password" class="form-control">
            </div>
            <div><label id="nosenha">Preenchimento obrigatório</label></div>

            <div id="bts-autentica">
                <button type="button" id="login" class="btn btn-primary">Entrar</button>    
                <button type="button" class="btn btn-primary" id="criarc">Crie sua conta</a>
            </div>

            <div><label id="error">Usuário ou senha incorreto</label></div>
        </form>
    </div>
</div>

<!--Autenticado-->
<div class="container" id="autenticado"></div>

<!--Painel do usuário-->
<div class="container" id="painel-usuário"></div>

<!--Cadastro-->
<div id="cadastro"></div>

<div class="container text-center">
<div class="row">
<form id="form">
    <input type="text" placeholder="Pesquisar produtos" id="pesquisar-prod" class="form-control text-center">
</form>
</div>
</div>
<br>

<div class="wrapper">
    <div class="dropdown">
        <button class="dropbtn">Bebidas</button>
        <div class="dropdown-content">
        <button type="button" class="btn btn-toggle" id="bt-cafezito" data-element=".produtos-cafezito">Cefézito</button>
        <button type="button" class="btn btn-toggle" id="bt-leite" data-element=".produtos-leite">Leite</button>
        <button type="button" class="btn btn-toggle" id="bt-refri" data-element=".produtos-refri">Refrizito</button>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn">Alimentos</button>
        <div class="dropdown-content">
        <button type="button" class="btn btn-toggle" id="bt-feijao" data-element=".produtos-feijao">Feijão</button>
        <button type="button" class="btn btn-toggle" id="bt-arroz" data-element=".produtos-arroz">Arroz</button>
        </div>
    </div>
    <div class="dropdown">
        <button class="dropbtn" id="bt-carrito" data-element="#carrito">Carrito</button>
        <div class="dropdown-content">
        </div>
        <p id="itemCount"></p>
    </div>
    <div class="dropdown">
        <button class="dropbtn" id="bt-contato" data-element="#contato">Contato</button>
        <div class="dropdown-content">
        </div>
    </div>
</div>

<!--Resultado pesquisa-->
<div id="resultado"></div>


<!--Slideshow-->
<div id="slideshow" class="carousel slide" data-bs-ride="carousel">
<div class="carousel-indicators">
    <button type="button" data-bs-target="#slideshow" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#slideshow" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#slideshow" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#slideshow" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#slideshow" data-bs-slide-to="4" aria-label="Slide 5"></button>
</div>
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="5000">
      <img src="imagez/cafezito1.png" class="d-block w-100 img-cafezito1">
      <div class="carousel-caption d-none d-md-block capz">
        <h5>Cafézitos</h5>
        <p>Confira nossos cafézitos especiais</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="imagez/leite_muuu.png" class="d-block w-100 img-leite">
      <div class="carousel-caption d-none d-md-block capz">
        <h5>Leitches</h5>
        <p>Confira nossos leitches especiais</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="imagez/tombaina.png" class="d-block w-100 img-refri">
      <div class="carousel-caption d-none d-md-block capz">
        <h5>Refrizitos</h5>
        <p>Confira nossos refrizitos especiais</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="imagez/feijaodocampo.png" class="d-block w-100 img-feijão">
      <div class="carousel-caption d-none d-md-block capz">
        <h5>Feijãozito</h5>
        <p>Confira nossos feijones especiais</p>
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="5000">
      <img src="imagez/arrozsertanejo.png" class="d-block w-100 img-arroz">
      <div class="carousel-caption d-none d-md-block capz">
        <h5>Arroizito</h5>
        <p>Confira nossos Arroizes especiais</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#slideshow" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#slideshow" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container" id="contato">
    <div id="box2">
        <h3>Formulário</h3>
        <br>
        <div>
            <label id="">E-mail</label>
            <input type="text" id="email-conta" class="form-control">
            <div><label id="noemail2">Preenchimento obrigatório</label></div>
            <div><label id="invalid2">Formato inválido</label></div>
        </div>
        <br>
        <label id="lb-email">Mensagem</label>
        <textarea type="text" id="area-conta" class="form-control"></textarea>
        <div><label id="noarea">Preenchimento obrigatório</label></div>
        <button type="button" class="btn btn-primary" id="enviar-conta">Enviar</button>
    </div>
</div>

<div class="container text-center" id="contatoOK"></div>

<!-- Mostra Produtos Início -->

<div class="container produtos-cafezito">
    <div class="row">
            <?php
            $stmt = $user_db->prepare('SELECT * FROM tabela_produtos WHERE tipo_produto = "café"');
            $stmt->execute();
            $result = $stmt->get_result();
            while ($row = $result->fetch_assoc()):
                        ?>
            <div class= "col">
                <div class="card-deck">
                <div class="card p-2 border-secondary mb-2">
                    <img src="<?= $row['img_produto'] ?>" class="card-img-top" height="250">
                    <div class="card-body p-1">
                    <h4 class="card-title text-center text-info"><?= $row['nome_produto'] ?></h4>
                    <h5 class="card-text text-center">R$ <?= number_format($row['valor_produto'],2) ?></h5>

                    </div>
                    <div class="card-footer p-1">
                    <form action="" id="form-submit">
                    </div>
                        <button class="btn btn-primary ver-cafezito" id="<?php echo $row['id_produto']; ?>">Ver detalhes</button>
                    </form>
                    </div>
                    </div>
                </div>
            <?php endwhile; ?>
    </div>
</div>

    <div class="container produtos-leite">
                <div class="row">
                <?php
                        $stmt = $user_db->prepare('SELECT * FROM tabela_produtos WHERE tipo_produto = "leite"');
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()):
                                    ?>
                        <div class= "col">
                            <div class="card-deck">
                            <div class="card p-2 border-secondary mb-2">
                                <img src="<?= $row['img_produto'] ?>" class="card-img-top" height="250">
                                <div class="card-body p-1">
                                <h4 class="card-title text-center text-info"><?= $row['nome_produto'] ?></h4>
                                <h5 class="card-text text-center">R$ <?= number_format($row['valor_produto'],2) ?></h5>

                                </div>
                                <div class="card-footer p-1">
                                <form action="" id="form-submit">
                                </div>
                                    <button class="btn btn-primary ver-leite" id="<?php echo $row['id_produto']; ?>">Ver Detalhes</button>
                                </form>
                                </div>
                                </div>
                            </div>
                        <?php endwhile; ?>                    
                </div>
    </div>

    <div class="container produtos-refri">
                <div class="row">
                <?php
                        $stmt = $user_db->prepare('SELECT * FROM tabela_produtos WHERE tipo_produto = "refrigerante"');
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()):
                                    ?>
                        <div class= "col">
                            <div class="card-deck">
                            <div class="card p-2 border-secondary mb-2">
                                <img src="<?= $row['img_produto'] ?>" class="card-img-top" height="250">
                                <div class="card-body p-1">
                                <h4 class="card-title text-center text-info"><?= $row['nome_produto'] ?></h4>
                                <h5 class="card-text text-center">R$ <?= number_format($row['valor_produto'],2) ?></h5>

                                </div>
                                <div class="card-footer p-1">
                                <form action="" id="form-submit">
                                </div>
                                    <button class="btn btn-primary ver-refri" id="<?php echo $row['id_produto']; ?>">Ver Detalhes</button>
                                </form>
                                </div>
                                </div>
                            </div>
                        <?php endwhile; ?>                        
                </div>
    </div>

    <div class="container produtos-feijao">
                <div class="row">
                <?php
                        $stmt = $user_db->prepare('SELECT * FROM tabela_produtos WHERE tipo_produto = "feijão"');
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()):
                                    ?>
                        <div class= "col">
                            <div class="card-deck">
                            <div class="card p-2 border-secondary mb-2">
                                <img src="<?= $row['img_produto'] ?>" class="card-img-top" height="250">
                                <div class="card-body p-1">
                                <h4 class="card-title text-center text-info"><?= $row['nome_produto'] ?></h4>
                                <h5 class="card-text text-center">R$ <?= number_format($row['valor_produto'],2) ?></h5>

                                </div>
                                <div class="card-footer p-1">
                                <form action="" id="form-submit">
                                </div>
                                    <button class="btn btn-primary ver-feijão" id="<?php echo $row['id_produto']; ?>">Ver Detalhes</button>
                                </form>
                                </div>
                                </div>
                            </div>
                        <?php endwhile; ?>                        
                </div>
    </div>

    <div class="container produtos-arroz">
                <div class="row">
                <?php
                        $stmt = $user_db->prepare('SELECT * FROM tabela_produtos WHERE tipo_produto = "arroz"');
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($row = $result->fetch_assoc()):
                                    ?>
                        <div class= "col">
                            <div class="card-deck">
                            <div class="card p-2 border-secondary mb-2">
                                <img src="<?= $row['img_produto'] ?>" class="card-img-top" height="250">
                                <div class="card-body p-1">
                                <h4 class="card-title text-center text-info"><?= $row['nome_produto'] ?></h4>
                                <h5 class="card-text text-center">R$ <?= number_format($row['valor_produto'],2) ?></h5>

                                </div>
                                <div class="card-footer p-1">
                                <form action="" id="form-submit">
                                </div>
                                    <button class="btn btn-primary ver-arroz" id="<?php echo $row['id_produto']; ?>">Ver Detalhes</button>
                                </form>
                                </div>
                                </div>
                            </div>
                        <?php endwhile; ?>                       
                </div>
    </div>
    <!-- Mostra Produtos Fim -->

<div class="container text-center" id="carrito"></div>

<!-- Detalhes -->
<div id="detalhes"></div>

<!-- Comentários -->
<div class="container desc-geral">
<div class="row" id="enviar-café1">
    <h4>Comentários</h4>
    <h5>
        <textarea type="text" id="com-café1" class="form-control"></textarea>
        <button type="button" class="btn btn-primary" id="bt-com-café1">Enviar</button>
    </h5>
</div>

<div class="row" id="enviar-café2">
    <h4>Comentários</h4>
    <h5>
        <textarea type="text" id="com-café2" class="form-control"></textarea>
        <button type="button" class="btn btn-primary" id="bt-com-café2">Enviar</button>
    </h5>
</div>

<div class="row" id="enviar-ducafe">
    <h4>Comentários</h4>
    <h5>
        <textarea type="text" id="com-ducafe" class="form-control"></textarea>
        <button type="button" class="btn btn-primary" id="bt-com-ducafe">Enviar</button>
    </h5>
</div>

<div class="row" id="enviar-vaquita">
    <h4>Comentários</h4>
    <h5>
        <textarea type="text" id="com-vaquita" class="form-control"></textarea>
        <button type="button" class="btn btn-primary" id="bt-com-vaquita">Enviar</button>
    </h5>
</div>

<div class="row" id="enviar-muuu">
    <h4>Comentários</h4>
    <h5>
        <textarea type="text" id="com-muuu" class="form-control"></textarea>
        <button type="button" class="btn btn-primary" id="bt-com-muuu">Enviar</button>
    </h5>
</div>

<div class="row" id="enviar-tombaina">
    <h4>Comentários</h4>
    <h5>
        <textarea type="text" id="com-tombaina" class="form-control"></textarea>
        <button type="button" class="btn btn-primary" id="bt-com-tombaina">Enviar</button>
    </h5>
</div>

<div class="row" id="enviar-kuest">
    <h4>Comentários</h4>
    <h5>
        <textarea type="text" id="com-kuest" class="form-control"></textarea>
        <button type="button" class="btn btn-primary" id="bt-com-kuest">Enviar</button>
    </h5>
</div>

<div class="row" id="enviar-docampo">
    <h4>Comentários</h4>
    <h5>
        <textarea type="text" id="com-docampo" class="form-control"></textarea>
        <button type="button" class="btn btn-primary" id="bt-com-docampo">Enviar</button>
    </h5>
</div>

<div class="row" id="enviar-campeiro">
    <h4>Comentários</h4>
    <h5>
        <textarea type="text" id="com-campeiro" class="form-control"></textarea>
        <button type="button" class="btn btn-primary" id="bt-com-campeiro">Enviar</button>
    </h5>
</div>

<div class="row" id="enviar-sertanejo">
    <h4>Comentários</h4>
    <h5>
        <textarea type="text" id="com-sertanejo" class="form-control"></textarea>
        <button type="button" class="btn btn-primary" id="bt-com-sertanejo">Enviar</button>
    </h5>
</div>

<div class="row" id="enviar-mingau">
    <h4>Comentários</h4>
    <h5>
        <textarea type="text" id="com-mingau" class="form-control"></textarea>
        <button type="button" class="btn btn-primary" id="bt-com-mingau">Enviar</button>
    </h5>
</div>

<br>
<div class="col comentários" id="comentários"></div>
</div>

<!--Crud cep-->
    <script>
    $(function(){
        $("#botao-cep").click(function(e){
            e.preventDefault();
            $('#pesquisarCep').hide();
            $('#tabelapesquisada').hide();
            $('.wrapper').hide();
            $('#pesquisar-prod').hide();
            $('.produtos-cafezito').hide();
            $('.produtos-leite').hide();
            $('.produtos-refri').hide();
            $('.produtos-feijao').hide();
            $('.produtos-arroz').hide();
            $('#autentica').hide();
            $('#autenticado').hide();
            $('#cadastro').html("");
            el = $(this).data('element');
            $(el).toggle();
        });
    });
    </script>

<!--Shopping-->
<script>
    $(function(){
        $("#botao-shop").click(function(e){
            e.preventDefault();
            $('#cadastro').html("");
            $('#pesquisarCep').hide();
            $('#tabelapesquisada').hide();
            $('#divPrincipal').hide();
            $('.wrapper').hide();
            $('#pesquisar-prod').hide();
            el = $(this).data('element');
            $(el).toggle();
        });
    });
</script>

    <!--Bts produtos início-->
    <script>
    $(function(){
        $("#bt-cafezito").click(function(e){
            e.preventDefault();

            $('#enviar-café1').hide();
            $('#enviar-café2').hide();
            $('#enviar-ducafe').hide();
            $('#enviar-vaquita').hide();
            $('#enviar-muuu').hide();
            $('#enviar-tombaina').hide();
            $('#enviar-kuest').hide();
            $('#enviar-docampo').hide();
            $('#enviar-campeiro').hide();
            $('#enviar-sertanejo').hide();
            $('#enviar-mingau').hide();

            $("#contato").hide();
            $("#contatoOK").hide();
            $('#slideshow').hide();
            $('.produtos-leite').hide();
            $('.produtos-refri').hide();
            $('.produtos-feijao').hide();
            $('.produtos-arroz').hide();
            $('#detalhes').html("");
            $('#comentários').html("");
            $('#resultado').html("");
            el = $(this).data('element');
            $(el).toggle();
        });
    });
    </script>
    <script>
    $(function(){
        $("#bt-leite").click(function(e){
            e.preventDefault();

            $('#enviar-café1').hide();
            $('#enviar-café2').hide();
            $('#enviar-ducafe').hide();
            $('#enviar-vaquita').hide();
            $('#enviar-muuu').hide();
            $('#enviar-tombaina').hide();
            $('#enviar-kuest').hide();
            $('#enviar-docampo').hide();
            $('#enviar-campeiro').hide();
            $('#enviar-sertanejo').hide();
            $('#enviar-mingau').hide();

            $("#contato").hide();
            $("#contatoOK").hide();
            $('#slideshow').hide();
            $('.produtos-cafezito').hide();
            $('.produtos-refri').hide();
            $('.produtos-leite').hide();
            $('.produtos-feijao').hide();
            $('.produtos-arroz').hide();
            $('#detalhes').html("");
            $('#comentários').html("");
            $('#resultado').html("");
            el = $(this).data('element');
            $(el).toggle();
        });
    });
    </script>
    <script>
    $(function(){
        $("#bt-refri").click(function(e){
            e.preventDefault();

            $('#enviar-café1').hide();
            $('#enviar-café2').hide();
            $('#enviar-ducafe').hide();
            $('#enviar-vaquita').hide();
            $('#enviar-muuu').hide();
            $('#enviar-tombaina').hide();
            $('#enviar-kuest').hide();
            $('#enviar-docampo').hide();
            $('#enviar-campeiro').hide();
            $('#enviar-sertanejo').hide();
            $('#enviar-mingau').hide();

            $("#contato").hide();
            $("#contatoOK").hide();
            $('#slideshow').hide();
            $('.produtos-refri').hide();
            $('.produtos-cafezito').hide();
            $('.produtos-leite').hide();
            $('.produtos-feijao').hide();
            $('.produtos-arroz').hide();
            $('#detalhes').html("");
            $('#comentários').html("");
            $('#resultado').html("");
            el = $(this).data('element');
            $(el).toggle();
        });
    });
    </script>
    <script>
    $(function(){
        $("#bt-feijao").click(function(e){
            e.preventDefault();

            $('#enviar-café1').hide();
            $('#enviar-café2').hide();
            $('#enviar-ducafe').hide();
            $('#enviar-vaquita').hide();
            $('#enviar-muuu').hide();
            $('#enviar-tombaina').hide();
            $('#enviar-kuest').hide();
            $('#enviar-docampo').hide();
            $('#enviar-campeiro').hide();
            $('#enviar-sertanejo').hide();
            $('#enviar-mingau').hide();

            $("#contato").hide();
            $("#contatoOK").hide();
            $('#slideshow').hide();
            $('.produtos-refri').hide();
            $('.produtos-cafezito').hide();
            $('.produtos-leite').hide();
            $('.produtos-arroz').hide();
            $('#detalhes').html("");
            $('#comentários').html("");
            $('#resultado').html("");
            el = $(this).data('element');
            $(el).toggle();
        });
    });
    </script>
    <script>
    $(function(){
        $("#bt-arroz").click(function(e){
            e.preventDefault();

            $('#enviar-café1').hide();
            $('#enviar-café2').hide();
            $('#enviar-ducafe').hide();
            $('#enviar-vaquita').hide();
            $('#enviar-muuu').hide();
            $('#enviar-tombaina').hide();
            $('#enviar-kuest').hide();
            $('#enviar-docampo').hide();
            $('#enviar-campeiro').hide();
            $('#enviar-sertanejo').hide();
            $('#enviar-mingau').hide();

            $("#contato").hide();
            $("#contatoOK").hide();
            $('#slideshow').hide();
            $('.produtos-refri').hide();
            $('.produtos-cafezito').hide();
            $('.produtos-leite').hide();
            $('.produtos-feijao').hide();
            $('#detalhes').html("");
            $('#comentários').html("");
            $('#resultado').html("");
            el = $(this).data('element');
            $(el).toggle();
        });
    });
    </script>
    <!--Bts produtos fim-->

<!--Login-->
<script>
$(function(){
    $('#login').click(function(){
        var email = $('#email').val();
        var password = $('#password').val();

        if (email != "" && password != ""){
            $.ajax({
                url: "pagez/validar-login.php",
                type: "POST",
                data:{
                    email: email,
                    senha: password
                },
                success:function(resultado){
                    if(resultado == 0){
                    $("#error").show();
                    }else{
                        $(function(){
                            $.ajax({
                                url: "pagez/logado.php",
                                success: function(resultado2){
                                    $("#autentica").hide();
                                    $("#autenticado").html(resultado2);
                                    $("#autenticado").show();
                                    $('.wrapper').show();
                                    $('#pesquisar-prod').show();
                                    $('#slideshow').show();
                                    $(".Caixalink").html("");
                                }
                            });
                        });
                    }
                }
            });
        }else {
            if (email == ""){
            $('#noemail').show();
            $('#email').css("border-color", "rgb(160, 47, 212)");
            }

            if (password == ""){
            $('#nosenha').show();
            $('#password').css("border-color", "rgb(160, 47, 212)");
            }
        }
    });
});
</script>

<!--Painel do usuário-->
<script>
$(document).on("click", "#bt-painel", function(e) {
    e.preventDefault();
    $.ajax({
        url: "pagez/painel-usuario.php",
        success: function(ok){
            $("#painel-usuário").html(ok);
            $("#painel-usuário").show();
            $("#autenticado").hide();
            $(".wrapper").hide();
            $('#pesquisar-prod').hide();
            $("#slideshow").hide();
            $('.produtos-feijao').hide();
            $('.produtos-cafezito').hide();
            $('.produtos-refri').hide();
            $('.produtos-arroz').hide();
            $('.produtos-leite').hide();
            $('#carrito').hide();
            $('#contato').hide();
            $("#contatoOK").hide();
            $('#detalhes').html("");
            $('#comentários').html("");
            $('#resultado').html("");

            $('#enviar-café1').hide();
            $('#enviar-café2').hide();
            $('#enviar-ducafe').hide();
            $('#enviar-vaquita').hide();
            $('#enviar-muuu').hide();
            $('#enviar-tombaina').hide();
            $('#enviar-kuest').hide();
            $('#enviar-docampo').hide();
            $('#enviar-campeiro').hide();
            $('#enviar-sertanejo').hide();
            $('#enviar-mingau').hide();
        }
    });
});
</script>

<!--Vai-shop-->
<script>
$(document).on("click", "#vai-shop", function(e) {
    e.preventDefault();
    $.ajax({
        url: "pagez/logado.php",
            success: function(resultado2){
                $("#autenticado").html(resultado2);
                $("#autenticado").show();
                $('.wrapper').show();
                $('#pesquisar-prod').show();
                $("#painel-usuário").hide();
                $('#slideshow').show();
            }       
    });
});
</script>

<!--Hitórico-->
<script>
$(document).on("click", "#histórico", function() {
        $("#dados").hide();
        $('#editar-usuário').hide();
        $('#editar-email').hide();
        $('#editar-senha').hide();
        el = $(this).data('element');
        $(el).toggle();
    });
</script>

<!--Dados-->
<script>
$(document).on("click", "#bt-dados", function() {
        $("#tb_compra").hide();
        $('#editar-usuário').hide();
        $('#editar-email').hide();
        $('#editar-senha').hide();
        el = $(this).data('element');
        $(el).toggle();
    });
</script>

<!--Fechar Dados-->
<script>
    $(document).on("click", "#fechar-usuário", function() {
        $("#editar-usuário").hide();
        $("#dados").show();
    });
</script>
<script>
    $(document).on("click", "#fechar-email", function() {
        $("#editar-email").hide();
        $("#dados").show();
    });
</script>
<script>
    $(document).on("click", "#fechar-senha", function() {
        $("#editar-senha").hide();
        $("#dados").show();
    });
</script>

<!--Editar Dados-->
<script>
$(document).on("click", "#edit-usuário", function() {
        $("#dados").hide();
        el = $(this).data('element');
        $(el).toggle();
    });
</script>
<script>
$(document).on("click", "#edit-email", function() {
        $("#dados").hide();
        el = $(this).data('element');
        $(el).toggle();
    });
</script>
<script>
$(document).on("click", "#edit-senha", function() {
        $("#dados").hide();
        $('#editar-usuário').hide();
        $('#editar-email').hide();
        el = $(this).data('element');
        $(el).toggle();
    });
</script>

<!--Atualizar Dados-->
<script>
$(document).on("click", ".update-usuário", function() {
    var upUsuário = $("#up-usuário").val();
    
    if (upUsuário != ""){
		$.ajax({
			url: "dados/up-usuário.php",
			type: "POST",
			data:{
                id: $("#id-atualizar").val(),
				upUsuário: $("#up-usuário").val()
			},
            success:function(){
                alert("Usuário atualizado com sucesso");
                window.location = 'pagez/logout.php';   
            }
		});
        }else{
            $("#no-user").show();
            $('#up-usuário').css("border-color", "rgb(160, 47, 212)");
        }
    });
</script>
<script>
$(document).on("click", "#update-email", function() {
        var emailFilter =/^.+@.+\..{2,}$/;
		var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/
        var upEmail = $("#up-email").val();
        
        if (upEmail != ""){
            if(!(emailFilter.test(upEmail))||upEmail.match(illegalChars)){
                $("#e-invalidy").show().text('Por favor, informe um email válido');
            }else{
                $.ajax({
                    url: "dados/up-usuário.php",
                    type: "POST",
                    data:{
                        id: $("#id-atualizar").val(),
                        upEmail: $("#up-email").val()
                    },
                    success:function(){
                        alert("E-mail atualizado com sucesso");
                        window.location = 'pagez/logout.php';
                    }
                });
        }}else{
            $("#sem-email").show();
            $('#up-email').css("border-color", "rgb(160, 47, 212)");
        }
    });
</script>
<script>
$(document).on("click", "#update-senha", function() {
    var Nsenha = $("#nova-senha").val();
    var NsenhaC = $("#nova-senha-c").val();
    
    if (Nsenha != "" && NsenhaC != ""){
        if(Nsenha == NsenhaC){
            $.ajax({
                url: "dados/up-usuário.php",
                type: "POST",
                data:{
                    id: $("#id-atualizar").val(),
                    Nsenha: Nsenha,
                    NsenhaC: NsenhaC
                },
                success:function(){
                    alert("Senha atualizada com sucesso");
                    window.location = 'pagez/logout.php';   
                }
            });
            }else{
                $("#nop-senha").hide();
                $("#difere-senha").show();
                $('#nova-senha').css("border-color", "rgb(160, 47, 212)");
                $('#nova-senha-c').css("border-color", "rgb(160, 47, 212)");
            }
        
        }else{
            $("#difere-senha").hide();
            $("#nop-senha").show();
            $('#nova-senha').css("border-color", "rgb(160, 47, 212)");
            $('#nova-senha-c').css("border-color", "rgb(160, 47, 212)");
        }
    });
</script>

<!--Deletar usuário-->
<script>
$(document).on("click", "#del-conta", function() {
    var confirmalert = confirm("Tem certeza que quer exluir a conta?");
    if (confirmalert){
    $.ajax({
        url: "dados/delete-usuário.php",
        type: "POST",
        data:{
            id: $("#id-atualizar").val(),
        },
        success:function(){
            alert("Conta excluída com sucesso");
            window.location = 'pagez/logout.php';  
        }
    });
    }
});

</script>

<!--Cadastrar usuário-->
<script>
    $(function(){
    $('#criarc').click(function(e){
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "pagez/cadastrar.php",
            success:function(resurtz){
                $("#autentica").hide();
                $("#cadastro").html(resurtz);
            }
        });
        });
    });
</script>

<!--Ver detalhes-->
<script>
    $(function(){
    $('.ver-cafezito').click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');

        if (id == "1"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-cafezito").hide();

                $.ajax({
                    url: "comentários/co-café1.php",
                    success:function(resurt2){
                        $("#comentários").html(resurt2);
                        $("#comentários").show();
                        $("#enviar-café1").show();
                    }
                });
            }
        });
        } //fim if

        if (id == "2"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-cafezito").hide();

                $.ajax({
                    url: "comentários/co-café2.php",
                    success:function(resurt2){
                        $(".comentários").html(resurt2);
                        $("#enviar-café2").show();
                    }
                });
            }
        });
        } //fim if

        if (id == "3"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-cafezito").hide();

                $.ajax({
                    url: "comentários/co-ducafé.php",
                    success:function(resurt2){
                        $(".comentários").html(resurt2);
                        $("#enviar-ducafe").show();
                    }
                });
            }
        });
        } //fim if

        });
    });
</script>
<script>
    $(function(){
    $('.ver-leite').click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');

        if (id == "4"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-leite").hide();

                $.ajax({
                    url: "comentários/co-vaquita.php",
                    success:function(resurt2){
                        $(".comentários").html(resurt2);
                        $("#enviar-vaquita").show();
                    }
                });
            }
        });
        } //fim if

        if (id == "5"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-leite").hide();

                $.ajax({
                    url: "comentários/co-muuu.php",
                    success:function(resurt2){
                        $(".comentários").html(resurt2);
                        $("#enviar-muuu").show();
                    }
                });
            }
        });
        } //fim if

        });
    });
</script>
<script>
    $(function(){
    $('.ver-refri').click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');

        if (id == "6"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-refri").hide();

                $.ajax({
                    url: "comentários/co-tombaina.php",
                    success:function(resurt2){
                        $(".comentários").html(resurt2);
                        $("#enviar-tombaina").show();
                    }
                });
            }
        });
        } //fim if

        if (id == "7"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-refri").hide();

                $.ajax({
                    url: "comentários/co-kuest.php",
                    success:function(resurt2){
                        $(".comentários").html(resurt2);
                        $("#enviar-kuest").show();
                    }
                });
            }
        });
        } //fim if

        });
    });
</script>
<script>
    $(function(){
    $('.ver-feijão').click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');

        if (id == "8"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-feijao").hide();

                $.ajax({
                    url: "comentários/co-docampo.php",
                    success:function(resurt2){
                        $(".comentários").html(resurt2);
                        $("#enviar-docampo").show();
                    }
                });
            }
        });
        } //fim if

        if (id == "9"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-feijao").hide();

                $.ajax({
                    url: "comentários/co-campeiro.php",
                    success:function(resurt2){
                        $(".comentários").html(resurt2);
                        $("#enviar-campeiro").show();
                    }
                });
            }
        });
        } //fim if
        });
    });
</script>
<script>
    $(function(){
    $('.ver-arroz').click(function(e){
        e.preventDefault();
        var id = $(this).attr('id');

        if (id == "10"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-arroz").hide();

                $.ajax({
                    url: "comentários/co-sertanejo.php",
                    success:function(resurt2){
                        $(".comentários").html(resurt2);
                        $("#enviar-sertanejo").show();
                    }
                });
            }
        });
        } //fim if

        if (id == "11"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-arroz").hide();

                $.ajax({
                    url: "comentários/co-mingau.php",
                    success:function(resurt2){
                        $(".comentários").html(resurt2);
                        $("#enviar-mingau").show();
                    }
                });
            }
        });
        } //fim if

        });
    });
</script>
<!-- Fim ver detalhes -->

<!-- Botões Comentários -->
<script>
$(function(){
    $('#bt-com-café1').click(function(e){
        e.preventDefault();
        var comCafé1 = $('#com-café1').val();
        var d = new Date();
        var Data = d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear();

        $.ajax ({
            url: "insere-coment/coment-café1.php",
            type: "POST",
            data: {
                comCafé1:comCafé1,
                Data: Data},
            success:function(resurts){
                $("#com-café1").val("");

                $.ajax({
                    url: "comentários/co-café1.php",
                    success:function(resurt3){
                        $("#comentários").html(resurt3);
                    }
                });
            }
        });
    });
});
</script>
<script>
$(function(){
    $('#bt-com-café2').click(function(e){
        e.preventDefault();
        var comCafé2 = $('#com-café2').val();
        var d = new Date();
        var Data = d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear();

        $.ajax ({
            url: "insere-coment/coment-café2.php",
            type: "POST",
            data: {
                comCafé2:comCafé2,
                Data: Data},
                success:function(resurts){
                $("#com-café2").val("");

                $.ajax({
                    url: "comentários/co-café2.php",
                    success:function(resurt3){
                        $("#comentários").html(resurt3);
                    }
                });
            }
        });
    });
});
</script>
<script>
$(function(){
    $('#bt-com-ducafe').click(function(e){
        e.preventDefault();
        var comDucafe = $('#com-ducafe').val();
        var d = new Date();
        var Data = d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear();

        $.ajax ({
            url: "insere-coment/coment-ducafe.php",
            type: "POST",
            data: {
                comDucafe:comDucafe,
                Data: Data},
                success:function(resurts){
                $("#com-ducafe").val("");

                $.ajax({
                    url: "comentários/co-ducafé.php",
                    success:function(resurt3){
                        $("#comentários").html(resurt3);
                    }
                });
            }
        });
    });
});
</script>
<script>
$(function(){
    $('#bt-com-muuu').click(function(e){
        e.preventDefault();
        var comMuuu = $('#com-muuu').val();
        var d = new Date();
        var Data = d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear();

        $.ajax ({
            url: "insere-coment/coment-muuu.php",
            type: "POST",
            data: {
                comMuuu:comMuuu,
                Data: Data},
                success:function(resurts){
                $("#com-muuu").val("");

                $.ajax({
                    url: "comentários/co-muuu.php",
                    success:function(resurt3){
                        $("#comentários").html(resurt3);
                    }
                });
            }
        });
    });
});
</script>
<script>
$(function(){
    $('#bt-com-vaquita').click(function(e){
        e.preventDefault();
        var comVaquita = $('#com-vaquita').val();
        var d = new Date();
        var Data = d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear();

        $.ajax ({
            url: "insere-coment/coment-vaquita.php",
            type: "POST",
            data: {
                comVaquita:comVaquita,
                Data: Data},
                success:function(resurts){
                $("#com-vaquita").val("");

                $.ajax({
                    url: "comentários/co-vaquita.php",
                    success:function(resurt3){
                        $("#comentários").html(resurt3);
                    }
                });
            }
        });
    });
});
</script>
<script>
$(function(){
    $('#bt-com-tombaina').click(function(e){
        e.preventDefault();
        var comTombaina = $('#com-tombaina').val();
        var d = new Date();
        var Data = d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear();

        $.ajax ({
            url: "insere-coment/coment-tombaina.php",
            type: "POST",
            data: {
                comTombaina:comTombaina,
                Data: Data},
                success:function(resurts){
                $("#com-tombaina").val("");

                $.ajax({
                    url: "comentários/co-tombaina.php",
                    success:function(resurt3){
                        $("#comentários").html(resurt3);
                    }
                });
            }
        });
    });
});
</script>
<script>
$(function(){
    $('#bt-com-kuest').click(function(e){
        e.preventDefault();
        var comKuest = $('#com-kuest').val();
        var d = new Date();
        var Data = d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear();

        $.ajax ({
            url: "insere-coment/coment-kuest.php",
            type: "POST",
            data: {
                comKuest:comKuest,
                Data: Data},
                success:function(resurts){
                $("#com-kuest").val("");

                $.ajax({
                    url: "comentários/co-kuest.php",
                    success:function(resurt3){
                        $("#comentários").html(resurt3);
                    }
                });
            }
        });
    });
});
</script>
<script>
$(function(){
    $('#bt-com-docampo').click(function(e){
        e.preventDefault();
        var comDocampo = $('#com-docampo').val();
        var d = new Date();
        var Data = d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear();

        $.ajax ({
            url: "insere-coment/coment-docampo.php",
            type: "POST",
            data: {
                comDocampo:comDocampo,
                Data: Data},
                success:function(resurts){
                $("#com-docampo").val("");

                $.ajax({
                    url: "comentários/co-docampo.php",
                    success:function(resurt3){
                        $("#comentários").html(resurt3);
                    }
                });
            }
        });
    });
});
</script>
<script>
$(function(){
    $('#bt-com-campeiro').click(function(e){
        e.preventDefault();
        var comCampeiro = $('#com-campeiro').val();
        var d = new Date();
        var Data = d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear();

        $.ajax ({
            url: "insere-coment/coment-campeiro.php",
            type: "POST",
            data: {
                comCampeiro:comCampeiro,
                Data: Data},
                success:function(resurts){
                $("#com-campeiro").val("");

                $.ajax({
                    url: "comentários/co-campeiro.php",
                    success:function(resurt3){
                        $("#comentários").html(resurt3);
                    }
                });
            }
        });
    });
});
</script>
<script>
$(function(){
    $('#bt-com-sertanejo').click(function(e){
        e.preventDefault();
        var comSertanejo = $('#com-sertanejo').val();
        var d = new Date();
        var Data = d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear();

        $.ajax ({
            url: "insere-coment/coment-sertanejo.php",
            type: "POST",
            data: {
                comSertanejo:comSertanejo,
                Data: Data},
                success:function(resurts){
                $("#com-sertanejo").val("");

                $.ajax({
                    url: "comentários/co-sertanejo.php",
                    success:function(resurt3){
                        $("#comentários").html(resurt3);
                    }
                });
            }
        });
    });
});
</script>
<script>
$(function(){
    $('#bt-com-mingau').click(function(e){
        e.preventDefault();
        var comMingau = $('#com-mingau').val();
        var d = new Date();
        var Data = d.getDate()  + "/" + (d.getMonth()+1) + "/" + d.getFullYear();

        $.ajax ({
            url: "insere-coment/coment-mingau.php",
            type: "POST",
            data: {
                comMingau:comMingau,
                Data: Data},
                success:function(resurts){
                $("#com-mingau").val("");

                $.ajax({
                    url: "comentários/co-mingau.php",
                    success:function(resurt3){
                        $("#comentários").html(resurt3);
                    }
                });
            }
        });
    });
});
</script>

<!--Carrito-->
<script>
    $(function(){
        $("#bt-carrito").click(function(e){
            e.preventDefault();
            $('#slideshow').hide();
            $("#contato").hide();
            $("#contatoOK").hide();
            $('.wrapper').hide();
            $('#pesquisar-prod').hide();
            $('#detalhes').html("");
            $('#comentários').html("");
            $('#resultado').html("");

            $('.produtos-feijao').hide();
            $('.produtos-cafezito').hide();
            $('.produtos-refri').hide();
            $('.produtos-arroz').hide();
            $('.produtos-leite').hide();
            $('#enviar-café1').hide();
            $('#enviar-café2').hide();
            $('#enviar-ducafe').hide();
            $('#enviar-vaquita').hide();
            $('#enviar-muuu').hide();
            $('#enviar-tombaina').hide();
            $('#enviar-kuest').hide();
            $('#enviar-docampo').hide();
            $('#enviar-campeiro').hide();
            $('#enviar-sertanejo').hide();
            $('#enviar-mingau').hide();
            el = $(this).data('element');
            $(el).toggle();

            $.ajax({
                    url: "dados/carrito.php",
                    success:function(resurt3){
                        $("#carrito").html(resurt3);
                    }
                });
        });
    });
</script>

<!--Cont Compras-->
<script>
    $(document).on("click", "#cont-compras, #cont-compras2, #cont-compras3", function() {
            $('#slideshow').show();
            $('.wrapper').show();
            $('#pesquisar-prod').show();
            $('#carrito').hide();
        });
</script>


<!--Pesquisar cep-->
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

<!--Ver ceps pesquisados-->
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

<!--Check-->
<script>
    $(function(){
        $("#check").click(function(){
            el = $(this).data('element');
            $(el).toggle();
        });
    });
</script>

<!--Buscar-->
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

<!--Modal Atual-->
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

<!--Modal editar tabela pesquisada-->
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

<!--Modal deletar-->
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

<!--Modal Confirm Atualização Atual-->
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

<!--Modal editar Comentários-->
<div class="modal fade" id="modalCO-café1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="" method="post">
                <div class="modal-header">
                <h4 class="modal-title" id="titulo-M-café1">Atualizar</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                </div>
                <div class="modal-body" id="body-café1">
                
                </div>   
                <div class="modal-footer">
                    
                </div>
            </form>
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
                            }
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
            url: "deletar.php",
            type: "POST",
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

<!--Deletar Comentários-->
<script>
    $(document).on('click', '.del-café1', function(){
        var id = $(this).attr('id');

        $.ajax({
            url: "delete-coment/delete-café1.php",
            type: "POST",
            data: {id:id},
            success:function(x){
                $.ajax({
                    url: "comentários/co-café1.php",
                    success: function(datez){
                        $("#comentários").html(datez);
                    }
                });
            }
        });

    });
</script>
<script>
    $(document).on('click', '.del-café2', function(){
        var id = $(this).attr('id');

        $.ajax({
            url: "delete-coment/delete-café2.php",
            type: "POST",
            data: {id:id},
            success:function(x){
                $.ajax({
                    url: "comentários/co-café2.php",
                    success: function(datez){
                        $("#comentários").html(datez);
                    }
                });
            }
        });

    });
</script>
<script>
    $(document).on('click', '.del-ducafé', function(){
        var id = $(this).attr('id');

        $.ajax({
            url: "delete-coment/delete-ducafé.php",
            type: "POST",
            data: {id:id},
            success:function(x){
                $.ajax({
                    url: "comentários/co-ducafé.php",
                    success: function(datez){
                        $("#comentários").html(datez);
                    }
                });
            }
        });

    });
</script>
<script>
    $(document).on('click', '.del-vaquita', function(){
        var id = $(this).attr('id');

        $.ajax({
            url: "delete-coment/delete-vaquita.php",
            type: "POST",
            data: {id:id},
            success:function(x){
                $.ajax({
                    url: "comentários/co-vaquita.php",
                    success: function(datez){
                        $("#comentários").html(datez);
                    }
                });
            }
        });

    });
</script>
<script>
    $(document).on('click', '.del-muuu', function(){
        var id = $(this).attr('id');

        $.ajax({
            url: "delete-coment/delete-muuu.php",
            type: "POST",
            data: {id:id},
            success:function(x){
                $.ajax({
                    url: "comentários/co-muuu.php",
                    success: function(datez){
                        $("#comentários").html(datez);
                    }
                });
            }
        });

    });
</script>
<script>
    $(document).on('click', '.del-tombaina', function(){
        var id = $(this).attr('id');

        $.ajax({
            url: "delete-coment/delete-tombaina.php",
            type: "POST",
            data: {id:id},
            success:function(x){
                $.ajax({
                    url: "comentários/co-tombaina.php",
                    success: function(datez){
                        $("#comentários").html(datez);
                    }
                });
            }
        });

    });
</script>
<script>
    $(document).on('click', '.del-kuest', function(){
        var id = $(this).attr('id');

        $.ajax({
            url: "delete-coment/delete-kuest.php",
            type: "POST",
            data: {id:id},
            success:function(x){
                $.ajax({
                    url: "comentários/co-kuest.php",
                    success: function(datez){
                        $("#comentários").html(datez);
                    }
                });
            }
        });

    });
</script>
<script>
    $(document).on('click', '.del-docampo', function(){
        var id = $(this).attr('id');

        $.ajax({
            url: "delete-coment/delete-docampo.php",
            type: "POST",
            data: {id:id},
            success:function(x){
                $.ajax({
                    url: "comentários/co-docampo.php",
                    success: function(datez){
                        $("#comentários").html(datez);
                    }
                });
            }
        });

    });
</script>
<script>
    $(document).on('click', '.del-campeiro', function(){
        var id = $(this).attr('id');

        $.ajax({
            url: "delete-coment/delete-campeiro.php",
            type: "POST",
            data: {id:id},
            success:function(x){
                $.ajax({
                    url: "comentários/co-campeiro.php",
                    success: function(datez){
                        $("#comentários").html(datez);
                    }
                });
            }
        });

    });
</script>
<script>
    $(document).on('click', '.del-sertanejo', function(){
        var id = $(this).attr('id');

        $.ajax({
            url: "delete-coment/delete-sertanejo.php",
            type: "POST",
            data: {id:id},
            success:function(x){
                $.ajax({
                    url: "comentários/co-sertanejo.php",
                    success: function(datez){
                        $("#comentários").html(datez);
                    }
                });
            }
        });

    });
</script>
<script>
    $(document).on('click', '.del-mingau', function(){
        var id = $(this).attr('id');

        $.ajax({
            url: "delete-coment/delete-mingau.php",
            type: "POST",
            data: {id:id},
            success:function(x){
                $.ajax({
                    url: "comentários/co-mingau.php",
                    success: function(datez){
                        $("#comentários").html(datez);
                    }
                });
            }
        });

    });
</script>

<!--Editar Comentários -->
<script>
$(document).on('click', '.editCO-café1', function(){
    var edit_id = $(this).attr('id');
    $.ajax({
        url:"editar-coment/editCO-café1.php",
        type: "POST",
        data:{edit_id:edit_id},
        success:function(data){
            $("#comentários").html(data);
        }
    });
});
</script>
<script>
$(document).on('click', '.editCO-café2', function(){
    var edit_id = $(this).attr('id');
    $.ajax({
        url:"editar-coment/editCO-café2.php",
        type: "POST",
        data:{edit_id:edit_id},
        success:function(data){
            $("#comentários").html(data);
        }
    });
});
</script>
<script>
$(document).on('click', '.editCO-ducafé', function(){
    var edit_id = $(this).attr('id');
    $.ajax({
        url:"editar-coment/editCO-ducafé.php",
        type: "POST",
        data:{edit_id:edit_id},
        success:function(data){
            $("#comentários").html(data);
        }
    });
});
</script>
<script>
$(document).on('click', '.editCO-vaquita', function(){
    var edit_id = $(this).attr('id');
    $.ajax({
        url:"editar-coment/editCO-vaquita.php",
        type: "POST",
        data:{edit_id:edit_id},
        success:function(data){
            $("#comentários").html(data);
        }
    });
});
</script>
<script>
$(document).on('click', '.editCO-muuu', function(){
    var edit_id = $(this).attr('id');
    $.ajax({
        url:"editar-coment/editCO-muuu.php",
        type: "POST",
        data:{edit_id:edit_id},
        success:function(data){
            $("#comentários").html(data);
        }
    });
});
</script>
<script>
$(document).on('click', '.editCO-tombaina', function(){
    var edit_id = $(this).attr('id');
    $.ajax({
        url:"editar-coment/editCO-tombaina.php",
        type: "POST",
        data:{edit_id:edit_id},
        success:function(data){
            $("#comentários").html(data);
        }
    });
});
</script>
<script>
$(document).on('click', '.editCO-kuest', function(){
    var edit_id = $(this).attr('id');
    $.ajax({
        url:"editar-coment/editCO-kuest.php",
        type: "POST",
        data:{edit_id:edit_id},
        success:function(data){
            $("#comentários").html(data);
        }
    });
});
</script>
<script>
$(document).on('click', '.editCO-docampo', function(){
    var edit_id = $(this).attr('id');
    $.ajax({
        url:"editar-coment/editCO-docampo.php",
        type: "POST",
        data:{edit_id:edit_id},
        success:function(data){
            $("#comentários").html(data);
        }
    });
});
</script>
<script>
$(document).on('click', '.editCO-campeiro', function(){
    var edit_id = $(this).attr('id');
    $.ajax({
        url:"editar-coment/editCO-campeiro.php",
        type: "POST",
        data:{edit_id:edit_id},
        success:function(data){
            $("#comentários").html(data);
        }
    });
});
</script>
<script>
$(document).on('click', '.editCO-sertanejo', function(){
    var edit_id = $(this).attr('id');
    $.ajax({
        url:"editar-coment/editCO-sertanejo.php",
        type: "POST",
        data:{edit_id:edit_id},
        success:function(data){
            $("#comentários").html(data);
        }
    });
});
</script>
<script>
$(document).on('click', '.editCO-mingau', function(){
    var edit_id = $(this).attr('id');
    $.ajax({
        url:"editar-coment/editCO-mingau.php",
        type: "POST",
        data:{edit_id:edit_id},
        success:function(data){
            $("#comentários").html(data);
        }
    });
});
</script>

<!--Update Comentários-->
<script>
$(document).on("click", "#update-café1", function() {
    
		$.ajax({
			url: "atualizar/atualizar-café1.php",
			type: "POST",
			data:{
                edit_id: $("#id-café1").val(),
				upCafé1: $("#upCo-café1").val()
			},
			success: function(result){
                $.ajax({
                url: "comentários/co-café1.php",
                success: function(result){
                    $("#comentários").html(result);
                }
            });
			}
		});

    });
</script>
<script>
$(document).on("click", "#fechar-café1", function() {
    $.ajax({
        url: "comentários/co-café1.php",
        success: function(result){
            $("#comentários").html(result);
        }
    });
});
</script>

<script>
$(document).on("click", "#update-café2", function() {
    
		$.ajax({
			url: "atualizar/atualizar-café2.php",
			type: "POST",
			data:{
                edit_id: $("#id-café2").val(),
				upCafé2: $("#upCo-café2").val()
			},
			success: function(result){
                $.ajax({
                url: "comentários/co-café2.php",
                success: function(result){
                    $("#comentários").html(result);
                }
            });
			}
		});

    });
</script>
<script>
$(document).on("click", "#fechar-café2", function() {
    $.ajax({
        url: "comentários/co-café2.php",
        success: function(result){
            $("#comentários").html(result);
        }
    });
});
</script>

<script>
$(document).on("click", "#update-ducafé", function() {
    
		$.ajax({
			url: "atualizar/atualizar-ducafé.php",
			type: "POST",
			data:{
                edit_id: $("#id-ducafé").val(),
				upDucafé: $("#upCo-ducafé").val()
			},
			success: function(result){
                $.ajax({
                url: "comentários/co-ducafé.php",
                success: function(result){
                    $("#comentários").html(result);
                }
            });
			}
		});

    });
</script>
<script>
$(document).on("click", "#fechar-ducafé", function() {
    $.ajax({
        url: "comentários/co-ducafé.php",
        success: function(result){
            $("#comentários").html(result);
        }
    });
});
</script>

<script>
$(document).on("click", "#update-vaquita", function() {
    
		$.ajax({
			url: "atualizar/atualizar-vaquita.php",
			type: "POST",
			data:{
                edit_id: $("#id-vaquita").val(),
				upVaquita: $("#upCo-vaquita").val()
			},
			success: function(result){
                $.ajax({
                url: "comentários/co-vaquita.php",
                success: function(result){
                    $("#comentários").html(result);
                }
            });
			}
		});

    });
</script>
<script>
$(document).on("click", "#fechar-vaquita", function() {
    $.ajax({
        url: "comentários/co-vaquita.php",
        success: function(result){
            $("#comentários").html(result);
        }
    });
});
</script>

<script>
$(document).on("click", "#update-muuu", function() {
    
		$.ajax({
			url: "atualizar/atualizar-muuu.php",
			type: "POST",
			data:{
                edit_id: $("#id-muuu").val(),
				upMuuu: $("#upCo-muuu").val()
			},
			success: function(result){
                $.ajax({
                url: "comentários/co-muuu.php",
                success: function(result){
                    $("#comentários").html(result);
                }
            });
			}
		});

    });
</script>
<script>
$(document).on("click", "#fechar-muuu", function() {
    $.ajax({
        url: "comentários/co-muuu.php",
        success: function(result){
            $("#comentários").html(result);
        }
    });
});
</script>

<script>
$(document).on("click", "#update-tombaina", function() {
    
		$.ajax({
			url: "atualizar/atualizar-tombaina.php",
			type: "POST",
			data:{
                edit_id: $("#id-tombaina").val(),
				upTombaina: $("#upCo-tombaina").val()
			},
			success: function(result){
                $.ajax({
                url: "comentários/co-tombaina.php",
                success: function(result){
                    $("#comentários").html(result);
                }
            });
			}
		});

    });
</script>
<script>
$(document).on("click", "#fechar-tombaina", function() {
    $.ajax({
        url: "comentários/co-tombaina.php",
        success: function(result){
            $("#comentários").html(result);
        }
    });
});
</script>

<script>
$(document).on("click", "#update-kuest", function() {
    
		$.ajax({
			url: "atualizar/atualizar-kuest.php",
			type: "POST",
			data:{
                edit_id: $("#id-kuest").val(),
				upKuest: $("#upCo-kuest").val()
			},
			success: function(result){
                $.ajax({
                url: "comentários/co-kuest.php",
                success: function(result){
                    $("#comentários").html(result);
                }
            });
			}
		});

    });
</script>
<script>
$(document).on("click", "#fechar-kuest", function() {
    $.ajax({
        url: "comentários/co-kuest.php",
        success: function(result){
            $("#comentários").html(result);
        }
    });
});
</script>

<script>
$(document).on("click", "#update-docampo", function() {
    
		$.ajax({
			url: "atualizar/atualizar-docampo.php",
			type: "POST",
			data:{
                edit_id: $("#id-docampo").val(),
				upDocampo: $("#upCo-docampo").val()
			},
			success: function(result){
                $.ajax({
                url: "comentários/co-docampo.php",
                success: function(result){
                    $("#comentários").html(result);
                }
            });
			}
		});

    });
</script>
<script>
$(document).on("click", "#fechar-docampo", function() {
    $.ajax({
        url: "comentários/co-docampo.php",
        success: function(result){
            $("#comentários").html(result);
        }
    });
});
</script>

<script>
$(document).on("click", "#update-campeiro", function() {
    
		$.ajax({
			url: "atualizar/atualizar-campeiro.php",
			type: "POST",
			data:{
                edit_id: $("#id-campeiro").val(),
				upCampeiro: $("#upCo-campeiro").val()
			},
			success: function(result){
                $.ajax({
                url: "comentários/co-campeiro.php",
                success: function(result){
                    $("#comentários").html(result);
                }
            });
			}
		});

    });
</script>
<script>
$(document).on("click", "#fechar-campeiro", function() {
    $.ajax({
        url: "comentários/co-campeiro.php",
        success: function(result){
            $("#comentários").html(result);
        }
    });
});
</script>

<script>
$(document).on("click", "#update-sertanejo", function() {
    
		$.ajax({
			url: "atualizar/atualizar-sertanejo.php",
			type: "POST",
			data:{
                edit_id: $("#id-sertanejo").val(),
				upSertanejo: $("#upCo-sertanejo").val()
			},
			success: function(result){
                $.ajax({
                url: "comentários/co-sertanejo.php",
                success: function(result){
                    $("#comentários").html(result);
                }
            });
			}
		});

    });
</script>
<script>
$(document).on("click", "#fechar-sertanejo", function() {
    $.ajax({
        url: "comentários/co-campeiro.php",
        success: function(result){
            $("#comentários").html(result);
        }
    });
});
</script>

<script>
$(document).on("click", "#update-mingau", function() {
    
		$.ajax({
			url: "atualizar/atualizar-mingau.php",
			type: "POST",
			data:{
                edit_id: $("#id-mingau").val(),
				upMingau: $("#upCo-mingau").val()
			},
			success: function(result){
                $.ajax({
                url: "comentários/co-mingau.php",
                success: function(result){
                    $("#comentários").html(result);
                }
            });
			}
		});

    });
</script>
<script>
$(document).on("click", "#fechar-mingau", function() {
    $.ajax({
        url: "comentários/co-mingau.php",
        success: function(result){
            $("#comentários").html(result);
        }
    });
});
</script>

<!--Redirect slideshow-->
<script>
    $(".img-cafezito1").mousedown(function(){
        $('#slideshow').hide();
        $(".produtos-cafezito").show();
    });
</script>
<script>
    $(".img-leite").mousedown(function(){
        $('#slideshow').hide();
        $(".produtos-leite").show();
    });
</script>
<script>
    $(".img-refri").mousedown(function(){
        $('#slideshow').hide();
        $(".produtos-refri").show();
    });
</script>
<script>
    $(".img-feijão").mousedown(function(){
        $('#slideshow').hide();
        $(".produtos-feijao").show();
    });
</script>
<script>
    $(".img-arroz").mousedown(function(){
        $('#slideshow').hide();
        $(".produtos-arroz").show();
    });
</script>

<script>
    $(document).on("click", "#enviar-conta", function() {
        var emailFilter =/^.+@.+\..{2,}$/;
		var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/
        var emailConta = $("#email-conta").val();
        var areaConta = $("#area-conta").val();
        
        if (emailConta != "" && areaConta != ""){
            if(!(emailFilter.test(emailConta))||emailConta.match(illegalChars)){
                $("#invalid2").show().text('Por favor, informe um email válido');
            }else{
                $.ajax({
                    url: "dados/contato.php",
                    type: "POST",
                    data: {
                        emailConta: emailConta,
                        areaConta: areaConta
                    },
                    success:function(){
                        $("#contato").hide();
                        $("#email-conta").val("");
                        $("#area-conta").val("");
                        $("#contatoOK").show().text('Mensagem enviada com sucesso');
                    }
        });
        }}else{
            if (emailConta == ""){
            $("#noemail2").show();
            $('#email-conta').css("border-color", "rgb(160, 47, 212)");
            }

            if (areaConta == ""){
            $("#noarea").show();
            $('#area-conta').css("border-color", "rgb(160, 47, 212)");
            }
        }
    });
</script>

<!--Contato-->
<script>
    $(document).on("click", "#bt-contato", function(e) {
        e.preventDefault();
        $('#slideshow').hide();
        $('#detalhes').html("");
        $('#comentários').html("");
        $('#resultado').html("");
        $("#contatoOK").hide();
        $('.produtos-feijao').hide();
        $('.produtos-cafezito').hide();
        $('.produtos-refri').hide();
        $('.produtos-arroz').hide();
        $('.produtos-leite').hide();
        $('#enviar-café1').hide();
        $('#enviar-café2').hide();
        $('#enviar-ducafe').hide();
        $('#enviar-vaquita').hide();
        $('#enviar-muuu').hide();
        $('#enviar-tombaina').hide();
        $('#enviar-kuest').hide();
        $('#enviar-docampo').hide();
        $('#enviar-campeiro').hide();
        $('#enviar-sertanejo').hide();
        $('#enviar-mingau').hide();
        el = $(this).data('element');
        $(el).toggle();
    });
</script>

<!--Add cart-->
<script>
    $(document).on("click", ".add-cart", function(e) {
        e.preventDefault();
        var nome = $("#id-nome").val();
        var img = $("#id-img").val();
        var preço = $("#id-preço").val();
        var qtde = $("#qtde-det-i").val();
        var p_total = preço * qtde;

        if (qtde > 0) {
        $.ajax({
            url: "dados/add-carrito.php",
            type: "POST",
            data: {
                nome: nome,
                img: img,
                preço: preço,
                qtde: qtde,
                p_total: p_total
            },
            success:function(resultado){
            if(resultado == 0){
                alert("Item já adicionado ao carrito");
            }else{
                if(resultado == 1){
                    alert("Item adicionado ao carrito");
                }
            }
        }
        });        
        }else{
            alert("Quantidade inválida");
        }
    });
</script>

<!--Limpar carrito-->
<script>
    $(document).on("click", ".limpar-cart", function(e) {
        e.preventDefault();

        $.ajax({
            url: "dados/limpa-carrito.php",
            type: "POST",
            success:function(){
                $.ajax({
                    url: "dados/carrito.php",
                    success:function(resurt3){
                        $("#carrito").html(resurt3);
                    }
                });
            }
        });
    });
</script>

<!--Delete carrito-->
<script>
    $(document).on("click", ".delete-item", function(e) {
        e.preventDefault();

        var id = $(this).attr('id');        

        $.ajax({
            url: "dados/delete-carrito.php",
            type: "POST",
            data: {nome: id},
            success:function(){
                $.ajax({
                    url: "dados/carrito.php",
                    success:function(resurt3){
                        $("#carrito").html(resurt3);
                    }
                });
            }
        });
    });
</script>

<!--Pesquisar produtos-->
<script>
$(document).ready(function(){
    $("#pesquisar-prod").keyup(function(){
        $("#form").submit(function(){
            var dados = $("#pesquisar-prod").val();

            $.ajax({
            url: "dados/pesquisa.php",
            type: "POST",
            dataType: "html",
            data: {dados:dados},
            success:function(data){
                $("#resultado").html(data);
                $("#slideshow").hide();
                $("#detalhes").html("");
                $('#comentários').html("");
                $('#enviar-café1').hide();
                $('#enviar-café2').hide();
                $('#enviar-ducafe').hide();
                $('#enviar-vaquita').hide();
                $('#enviar-muuu').hide();
                $('#enviar-tombaina').hide();
                $('#enviar-kuest').hide();
                $('#enviar-docampo').hide();
                $('#enviar-campeiro').hide();
                $('#enviar-sertanejo').hide();
                $('#enviar-mingau').hide();
                $('#contato').hide();

                $('.produtos-cafezito').hide();
                $('.produtos-leite').hide();
                $('.produtos-refri').hide();
                $('.produtos-feijao').hide();
                $('.produtos-arroz').hide();
            }
        });
        return false;
        });
        $("#form").trigger('submit');
    });
});
</script>

<!--Pegar frete-->
<script>
$(document).ready(function() {
    $("#det-frete-i").blur(function() {

    var valorFrete = $("#input-hidden").val();

    $.ajax({
        url: "dados/frete.php",
        type: "POST",
        data:{valorFrete:valorFrete},
        success:function(){
            alert("valorFrete");
        }
    });
    });
});
</script>


