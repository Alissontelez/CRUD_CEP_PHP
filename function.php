<?php
require 'crud-cep.php';

if(isset($_POST["action"])){
    if($_POST["action"] == "insert"){
        buscar();
    }
}

function buscar(){
    global $mysqli;

    $cep = $_POST["cep"];
    $rua = $_POST["rua"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];

    $query = "INSERT INTO table_one VALUES('', '$cep', '$rua', '$bairro', '$cidade', '$uf')";

    mysqli_query($mysqli, $query);

}


?>