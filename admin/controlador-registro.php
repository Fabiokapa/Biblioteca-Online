<?php

    include_once __DIR__ . "/../src/basededados/conexao.php";

        if(isset($_POST['Adicionar']) && isset($_FILES['capa'])){

            $capa = $_FILES['capa'];

            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $pag = $_POST['pag'];
    
            $link = $_POST['link'];
            $decricao = $_POST['descricao'];
            $destaque = $_POST['destaque'];
            $catg = $_POST['categoria'];
            $id = $_POST['ida'];


            #Tamanho do arquivo
            /*if($capa['size'] > 4096){
                echo "aquivo muito pessado";
            }*/

            $pasta = "capas/";
            $nome = $capa['name'];
            $nome_novo = uniqid();
            $extensao = strtolower(pathinfo($nome, PATHINFO_EXTENSION));

            if($extensao != "jpg" && $extensao != "png" && $extensao != "jpeg"){
                echo " O arquivo não pode ser enviado";
            } else {
                
                $caminho = $pasta . $nome_novo . "." . $extensao;
                $carregado = move_uploaded_file($capa["tmp_name"], $caminho);

                if($carregado){

                    $sqlRegistrar = (" INSERT INTO livro (nome, arquivo, autor, pag, link, descricao, destaque, categoria, caminho, ida) VALUES  ('$titulo', '$nome_novo', '$autor', '$pag', '$link', '$decricao', '$destaque', '$catg', '$caminho', '$id') "); 
                    $resultRegistro = mysqli_query($conexao, $sqlRegistrar);
                    header("Location:./Painel.php");

                }
            }

        }

?>