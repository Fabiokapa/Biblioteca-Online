<?php

    include_once __DIR__ . "/conexao.php";

    #Data

    $data = date('Y');

    # Seleção do id admin
    $sqlAdmin =mysqli_query ($conexao, "SELECT *FROM admin");
    while($dado = mysqli_fetch_assoc($sqlAdmin)){
        $ida = $dado['ida'];
    }

    # Seleção de todos os livros
    $sqlLivros = (" SELECT *FROM livro");
    $resultLivros = mysqli_query($conexao, $sqlLivros);

    # Seleção dos  livros da categoria destaque
    $sqlLivrosDestaque = (" SELECT *FROM livro WHERE destaque = 'destaque' ");
    $resultDestaque = mysqli_query($conexao, $sqlLivrosDestaque);

    #Seleção livro por id
    if(isset($_GET['idEditar'])){

        $id = $_GET['idEditar'];

        $sqlLivro = (" SELECT *FROM livro WHERE id_livro= '$id' ");
        $resultLivro = mysqli_query($conexao, $sqlLivro);

        while($dados = mysqli_fetch_assoc($resultLivro)){
            $idL = $dados['id_livro'];
            $nome = $dados['nome'];
            $arquivo = $dados['arquivo'];
            $autor = $dados['autor'];
            $pag = $dados['pag'];
            $link = $dados['link'];
            $destaque = $dados['destaque'];
            $categoria = $dados['categoria'];
            $caminho = $dados['caminho'];
        }

    }


    #Eliminar livro por id
    if(isset($_GET['idEliminar'])){

        $id = $_GET['idEliminar'];

        $sqlLivro = (" DELETE FROM livro WHERE id_livro= '$id' ");
        $resultLivro = mysqli_query($conexao, $sqlLivro);

        header("Location:../../admin/lista.php");
        
    }

    #Seleção dos detalhes do livro por ID
    if(isset($_GET['id_livro'])){

        $id = $_GET['id_livro'];

        $sqlSelecionar = (" SELECT *FROM livro WHERE id_livro = '$id' ");
        $resultado = mysqli_query($conexao, $sqlSelecionar);

        while($dados = mysqli_fetch_assoc($resultado)){
            $nome = $dados['nome'];
            $arquivo = $dados['arquivo'];
            $autor = $dados['autor'];
            $pag = $dados['pag'];
            $link = $dados['link'];
            $descricao = $dados['descricao'];
            $categoria = $dados['categoria'];
            $caminho = $dados['caminho'];
        }

    }
    
?>