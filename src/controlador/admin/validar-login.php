<?php

    include_once  __DIR__ . "/../../basededados/conexao.php";
    session_start();

        if(isset($_POST['admin'])){

            #Dados
            $nome =  trim($_POST['nome']);
            $senha = trim($_POST['senha']);

            $sqlLogin = (" SELECT *FROM admin WHERE nome = '$nome' AND senha = '$senha' ");
            $resultLogin = mysqli_query($conexao, $sqlLogin);

            if(mysqli_num_rows($resultLogin) != 0){
                $_SESSION['nome'] = $nome;
                $_SESSION['senha'] = $senha;
                header("Location:../../../admin/Painel.php");
            } else {
                
                unset($_SESSION['nome']);
                unset($_SESSION['senha']);

                header("Location:http:../../../admin/admin.php");
            }
            
        }

?>