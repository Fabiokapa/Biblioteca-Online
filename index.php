<?php
    include_once __DIR__ .  "/src/basededados/repositorio.php";
    include_once __DIR__ .  "/template/cabecalho.php";
?>
        <!-------- Titulo ---------->
        <title>Painel Inicial</title>

        <header>
            <div class="bo"><p>Biblioteca Online</p></div>
            <div id="header">
                    <div class="logo">
                        <h2>BO</h2>
                    </div>
        
                    <ul class="menu">
                        <li><a href="aplicacao/Painel-livros.php">Livros</a></li>
                        <ul><li><a href="aplicacao/sobre.php">Sobre</a></li></ul>
                    </ul>
            </div>
        </header>  

        <main>
            <article>
                <section>
                    <div class="painel-inicial">
                        <div id="sub-inicial">
                                <div>
                                    <h2>Quem lê um livro nunca mas será o mesmo.</h2>
                                    <span>
                                        <a href="aplicacao/Painel-livros.php" class="ver-livro">Livros</a>
                                        <a href="#recentes" class="ver-recente">Recentes</a>
                                    </span>
                                </div>

                                <div>
                                    <p>
                                        Bem vindo a BO, biblioteca online site
                                        desenvolvido com o objectivo de compartilhar 
                                        livros no formato pdf  <i class="bi bi-file-earmark-pdf-fill"></i>.
                                    </p>
                                </div>
                        </div>
                    </div>
                </section>
            </article>

            <article>
                <section id="recentes">
                        <div class="conteiner-livros-r">
                            <div id="sub-conteiner-livros">
        
                                <div>
                                    <h3>Livros disponibilizados recentemente</h3>
                                </div>

                                <div class="descricao-recent">
                                    <p>
                                        Os livros a baixo apresentados foram publicados a 
                                        pouco tempo e estão em destaque confira e compartilhe!
                                    </p>
                                </div>
                                
                                <div class="container-categoria">
                                    <div class="sub-categoria">
                                                <div class="categoria d-pessoal">
                                                    <?php
                                                        $sqlLivros_DP = mysqli_query($conexao, " SELECT *FROM livro WHERE destaque='destaque' ");
                                                        while($item = mysqli_fetch_assoc($sqlLivros_DP)){
                                                    ?>
                                                        <div class="card">
                                                            <img src="admin/<?php echo $item['caminho']?>" alt="">
                                                            <p><?php echo $item['nome']?></p>
                                                            <span>
                                                                <a href="<?php echo $item['link']?>" target="_blank">Baixar <i class="bi bi-download"></i></a>
                                                                <a href="aplicacao/detalhes.php?id_livro=<?php echo $item['id_livro']?>">Detalhes <i class="bi bi-info-circle-fill"></i></a>
                                                            </span>
                                                        </div>
                                                    <?php
                                                        }
                                                    ?>
                                                </div>
                                        </div>

                                      <div>
                                            <a href="./aplicacao/Painel-livros.php" class="ver-mais">Ver mais</a>
                                      </div>
                                </div>
                            </div>

                        </div>
                </section>
            </article>

            <footer>
                <article>
                    <div class="conteiner-rodape">
                        <p>Todos os direitos reservados <br> Biblioteca Online - <?php echo $data?> </p>
                    </div>
                </article>
            </footer>

        </main>

    <?php
        include_once __DIR__ . "/template/rodape.php";
     ?>