<?php
    require 'crud-cep.php';

    $id = $_POST['id'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];

    $update = "UPDATE table_one SET cep = '$cep', rua = '$rua', bairro = '$bairro', cidade = '$cidade', uf = '$uf' WHERE id = '$id'";
    mysqli_query($mysqli, $update);

?>