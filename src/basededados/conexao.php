<?php

    $host = "localhost";
    $name = "root";
    $pass = "";
    $db = "bo";

    $conexao = new mysqli($host, $name, $pass, $db);

    if($conexao->error){
        die(" Falha ma conexão" . $conexao->error);
    }

?>