<?php

    include_once __DIR__ . "/conexao.php";

    session_start();

    if((!isset($_SESSION['nome']) == true) || (!isset($_SESSION['senha']) == true)){
         header("Location:../admin/admin.php");
    }
    
?>