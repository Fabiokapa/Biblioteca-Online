<?php

    include_once __DIR__ . "/conexao.php";

    session_start();

    unset($_SESSION['nome']);
    unset($_SESSION['senha']);
    header(" Location:");
?>