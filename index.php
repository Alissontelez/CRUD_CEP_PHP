<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greate SAITE</title>
    <link rel="icon" href="imagez/favicon.png" type="image/png">
    <link href="style.css" rel="stylesheet">
    <script src="jquery-3.6.1.min.js"></script>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script> -->
</head>
<body>
    <?php require_once 'crud-cep.php';
    ?>
    
    <div class="Geral container">
        <div class="head-portifa row"><img src="imagez/head portfia.png"></div>
        <div class="Caixalink row">
            <div class="col">
            <button type="button" id="botao-cep" class="btn btn-toggle" data-element="#minhaDiv">CRUD CEP PHP</button>
            </div>
            <!-- <div class="col">
            <button type="button" id="botao-app2" class="btn btn-toggle" data-element="#minhaDiv2">Aplicativo 2</button>
            </div> -->
          
        </div>
    </div>
   
    <div id="minhaDiv">
        <form action="" class="needs validatition" novalidate>
            <div class="rotulo">
                <label for="validation01" class="form-label">Digite o CEP ou Localização</label>
                <input type="text" name="insertCEP" class="form-control" id="validation01" required>
                <div class="valid-feedback">Muito Bem!</div>
            </div>
            <div class="rotulo2">
                <label for="validation02" class="form-label">Tipo Do CEP</label>
                <select class="form-select" id="validation02" required>
                    <option selected disable value= "">Escolha</option>
                    <option>Escolha 01</option>
                    <option></option>
                </select>
                <div class="invalid-feedback">Por favor, escolha um tipo</div>
            </div>
            <div class="rotulo3">
                <div class="form-check">
                    <input class="form-check-input" type="checkBox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Aceito os termos e condições
                    </label>
                    <div class="invalid-feedback">Você deve aceitar antes de buscar</div>
                </div>
            </div>
            <div class="rotulo4">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </form>
    </div>
    <!-- <div id="minhaDiv2">Aplicativo 2</div> -->

  
    <script>
    $(function(){
        $("#botao-cep").click(function(e){
            e.preventDefault();
            // $('#minhaDiv2').hide();
            el = $(this).data('element');
            $(el).toggle();
        });
    });
    </script>
    <!-- <script>
    $(function(){
        $("#botao-app2").click(function(e){
            e.preventDefault();
            $('#minhaDiv').hide();
            el = $(this).data('element');
            $(el).toggle();
        });
    });
    </script> -->

</body>
</html>