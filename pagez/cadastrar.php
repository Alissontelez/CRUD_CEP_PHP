<div class="container text-center" id="formCadastro">
    <h3>Cadastro</h3>
    <form method="POST" action="">
    <div class="row">
        <div>
            Usuário
            <input type="text" placeholder="Usuário" class="form-control" id="add-usuario">
        </div>
        <div><label id="noname">Preenchimento obrigatório</label></div>
        <div>
            E-mail
            <input type="text" placeholder="E-mail" class="form-control" id="add-email">
        </div>
        <div><label id="noimail">Preenchimento obrigatório</label></div>
        <div><label id="jaimail">Usuário já cadastrado</label></div>
        <div><label id="e-invalid"></label></div>
        <div>
            Senha:
            <input type="password" placeholder="Senha" class="form-control" id="add-senha">
        </div>
        <div><label id="nosinha">Preenchimento obrigatório</label></div>
        <div><label id="senhadif">Senhas diferentes</label></div>
        <div>
            Confirmar Senha:
            <input type="password" placeholder="Confirmar Senha" class="form-control" id="add-senha-c">
        </div>
        <div><label id="nosinha-c">Preenchimento obrigatório</label></div>
        <div><label id="senhadif2">Senhas diferentes</label></div>

        <div>
            <Button type="button" class="btn btn-primary" id="cadastrar">Cadastrar</button>
        </div>
    </div>
    </form>
</div>
<div class="container text-center" id="cadastroOK"></div>

<!--Verificar cadastro-->
<script>
    $(function(){
    $('#cadastrar').click(function(){
        var usuario = $("#add-usuario").val();
        var email = $("#add-email").val();
        var senha = $("#add-senha").val();
        var confirmarSenha = $("#add-senha-c").val();
        var emailFilter =/^.+@.+\..{2,}$/;
		var illegalChars = /[\(\)\<\>\,\;\:\\\/\"\[\]]/
        
        if (usuario != "" && email != "" && senha != ""){
            if(!(emailFilter.test(email))||email.match(illegalChars)){
                $("#noimail").hide();
			    $("#e-invalid").show().text('Por favor, informe um email válido.');
		    }else{
            if(senha == confirmarSenha){
                $.ajax({
                    type: "POST",
                    url: "pagez/pesquisa-cadastro.php",
                    data: {
                        usuario: usuario,
                        email: email,
                        senha: senha},
                    success: function(resultado){
                        if(resultado == 0){
                            $('#noimail').hide();
                            $('#jaimail').show();
                        }else{
                            if(resultado == 1){
                                $("#formCadastro").hide();
                                $("#cadastroOK").html('<h3>Cadastro realizado com sucesso</h3>');
                            }
                        }
                    }
                });
            }else{
                $('#nosinha').hide();
                $('#nosinha-c').hide();
                $('#senhadif').show();
                $('#senhadif2').show();
            }
        }} //fim if 1
        else {
            if (usuario == "") {
            $('#noname').show();
            $('#add-usuario').css("border-color", "rgb(160, 47, 212)");
            }

            if (email == "") {
            $('#noimail').show();
            $('#add-email').css("border-color", "rgb(160, 47, 212)");
            }

            if (senha == "") {
            $('#senhadif').hide();
            $('#nosinha').show();
            $('#add-senha').css("border-color", "rgb(160, 47, 212)");
            }

            if (confirmarSenha == "") {
            $('#senhadif2').hide();
            $('#nosinha-c').show();
            $('#add-senha-c').css("border-color", "rgb(160, 47, 212)");
            }
            
        }
    });
});
</script>