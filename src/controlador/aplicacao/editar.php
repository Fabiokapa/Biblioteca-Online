<?php

        include_once __DIR__ . "/../../basededados/conexao.php";

        echo "ddd";

        if(isset($_POST['Actualizar']) && (isset($_POST['titulo']))){


            $titulo = $_POST['titulo'];
            $autor = $_POST['autor'];
            $pag = $_POST['pag'];
    
            $link = $_POST['link'];
            $destaque = $_POST['destaque'];
            $catg = $_POST['categoria'];
            $id = $_POST['id_livro'];  

                $sqlActualizar = (" UPDATE livro SET nome='$titulo', autor='$autor', pag='$pag', link='$link',categoria='$catg' WHERE id_livro='$id' ");

                var_dump($sqlActualizar);

                $result = mysqli_query($conexao, $sqlActualizar);

                header("Location:../../../admin/lista.php");
        }

?>