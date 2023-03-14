<?php
require "../connection.php";

//$pesquisa = "%{$_POST['pesquisa']}%";
$campo = "%{$_POST['dados']}%";

$sql=$user_db->prepare('SELECT * FROM tabela_produtos WHERE nome_produto LIKE ?');
$sql->bind_param("s", $campo);
$sql->execute();
$sql->bind_result($id_produto, $nome_produto, $valor_produto, $img_produto, $tipo_produto, $qtde);


while ($sql->fetch())
{
    echo "<div class='container text-center' id='container-busca'>
    <div class='row'>
    <div class='col'>
    <div class='card-deck'>
    <div class='card p-2 border-secondary mb-2'>
        <img src=' $img_produto' class='card-img-top' height='250'>
        <div class='card-body p-1'>
        <h4 class='card-title text-center text-info'>$nome_produto </h4>
        <h5 class='card-text text-center'>R$ $valor_produto.00</h5>

        </div>
        <div class='card-footer p-1'>
        <form action='' id='form-submit'>
        </div>
            <button class='btn btn-primary' id='$id_produto'>Ver Detalhes</button>
        </form>
        </div>
        </div>
    </div></div></div>
    <script>$('#no-corresp').hide();</script>";

}

if (!$sql->fetch()){
    echo "<h3 align='center' id='no-corresp'>Nenhuma correspondência</h3>";
}
?>

<!--Ver detalhes-->
<script>
    $(function(){
    $('.btn').click(function(e){
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
                $("#resultado").html("");

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
                $("#resultado").html("");

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
                $("#resultado").html("");

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

        if (id == "4"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-leite").hide();
                $("#resultado").html("");

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
                $("#resultado").html("");

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

        if (id == "6"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-refri").hide();
                $("#resultado").html("");

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
                $("#resultado").html("");

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

        if (id == "8"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-feijao").hide();
                $("#resultado").html("");

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
                $("#resultado").html("");

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

        if (id == "10"){
        $.ajax({
            url: "pagez/detalhes.php",
            type: "POST",
            data:{add_id:id},
            success:function(resurtz){
                $("#detalhes").html(resurtz);
                $(".produtos-arroz").hide();
                $("#resultado").html("");

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
                $("#resultado").html("");

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