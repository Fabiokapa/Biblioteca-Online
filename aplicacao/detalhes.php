<?php
    include_once __DIR__ . "/../src/basededados/repositorio.php";
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Detalhes</title>

    <link rel="stylesheet" href="../CSS/Reset.css">
    <link rel="stylesheet" href="../CSS/descricao.css">
</head>
<body>

    <header>
        <div class="bo"><p>Biblioteca Online | Descricão</p></div>
        <div id="header">
                <div class="logo">
                    <h2><a href="/index.php">BO</a></h2>
                </div>
    
                <ul class="menu">
                    <li><a href="../aplicacao/Painel-livros.php">Livros</a></li>
                    <ul><li><a href="../aplicacao/sobre.php">Sobre</a></li></ul>
                </ul>
        </div>
    </header>  

    <main>
        <article>
            <section>

                <div class="container-inicial">
                    <div class="img-livro">
                        <figure>
                            <img src="../admin/<?php echo $caminho?>" alt="">
                        </figure>
                    </div>

                    <div class="descricao">
                            <span>
                                 <h2>Titulo: <b><?php echo $nome ?></b></h2>
                                 <p><b>Autor: </b> <cite><?php echo $autor?></cite></p>
                                 <p><b>Categotria: </b><?php echo $categoria?></p>
                                 <p><b>Pag: </b> <?php echo $pag?></p>
                                 <p><b>Descrição: </b> <?php echo $descricao ?></p>
                            </span>
                            
                            <div class="baixar">
                                <a href="#"><a href="#">Baixar</a></a>
                                <i class=""></i>
                            </div>
                    </div>
                </div>

            </section>
        </article>
    </main>

    <footer>
        <article>
            <div class="conteiner-rodape">
                <p>Todos os direitos reservados <br> Biblioteca Online.</p>
            </div>
        </article>
    </footer>

</body>
</html>