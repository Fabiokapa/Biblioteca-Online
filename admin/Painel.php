<?php
    include_once __DIR__ . "/../src/basededados/conexao.php";
    include_once __DIR__ . "/../src/basededados/repositorio.php";
    include_once __DIR__ . "/../src/basededados/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin BO</title>
    <link rel="stylesheet" href="../CSS/Reset.css">
    <link rel="stylesheet" href="../CSS/painel.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
</head>
<body>
    
    <header>
         <div class="logo">
            <h1>Painel <b>BO</b></h1>
         </div>

         <nav>
            <ul class="menu">
                <li><a href="lista.php">Livros</a></li>
                <li><a href="#"><i class="fas fa-sign-out-alt"></i></a></li>
            </ul>
         </nav>
    </header>

    <main>
        <article>
            <section>
                    <div class="conteiner-principal">

                            <div class="conteiner-titulo">
                                <h2>Painel de controle <b>BO</b></h2>
                            </div>
                            
                            <div class="conteiner-novo">
                                 <p id="novo">Novo</p>
                            </div>

                    </div>
            </section>
        </article>
    </main>

    <footer>
        <section>
                <div class="conteiner-modal">
                    <div id="modal">

                        <i class="fas fa-times" id="fechar"></i>

                        <form action="./controlador-registro.php" method="post" enctype="multipart/form-data">
                            <div class="itensCampo">

                                    <label for="">
                                        <input type="text" name="titulo" placeholder="Breve descrição do livro">
                                    </label>

                                    <label for="">
                                        <input type="text" name="autor" placeholder="Autor do livro">
                                    </label>

                                    <label for="">
                                        <input type="number" name="pag" placeholder="Numero de páginas">
                                    </label>

                                    <label for="">
                                        <input type="file" name="capa">
                                    </label>
                                    
                                    <label for="">
                                        <input type="text" name="link" placeholder="Link para dowload">
                                    </label>

                                    <label for="">
                                        <textarea name="descricao" id="">

                                        </textarea>
                                    </label>

                                    <label for="" id="status">
                                        Destaque
                                        <input type="radio" name="destaque" value="destaque">
                                        Normal
                                        <input type="radio" name="destaque" value="normal">
                                    </label>

                                    <label for="">
                                        <select name="categoria" id="">
                                            <option value="Catégoria do Livro">Catégoria do Livro</option>
                                            <option value="Auto Ajuda">Auto Ajuda</option>
                                            <option value="Inteligência Artificial">Inteligência Artificial</option>
                                            <option value="Desenvolvimento Pessoal">Desenvolvimento Pessoal</option>
                                            <option value="Auto Ajuda">Auto Ajuda</option>
                                            <option value="Tecnolgia">Tecnolgia</option>
                                            <option value="Programação">Programação</option>
                                            <option value="Romance">Romance</option>
                                            <option value="Ficção Cientifica">Ficção Cientifica</option>
                                            <option value="Finanças">Finanças</option>
                                            <option value="Drama">Drama</option>
                                            <option value="Drama">História</option>
                                            <option value="Negôcios">Negôcios</option>
                                            <option value="Educação Financeira">Educação Financeira</option>
                                            <option value="Educação">Educação</option>
                                        </select>
                                    </label>
                                    
                                    <label for="" id="ida">
                                        <input type="hidden" name="ida" value="<?php echo $ida?>">
                                    </label>
                                
                            </div>

                            <div class="add">
                                <input type="submit" name="Adicionar" value="Adicionar">
                            </div>
                        </form>
                        
                    </div>
                </div>
        </section>
    </footer>

    <script src="../JS/biblioteca.js"></script>
    <script src="../JS/painel.js"></script>

</body>
</html>