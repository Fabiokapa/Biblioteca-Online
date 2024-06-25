<?php
    include_once __DIR__ . "/../src/basededados/repositorio.php";
    include_once __DIR__ . "/Template/cabecalho.php";
?>

    <header id="topoo">
        <div class="bo"><p>Biblioteca Online</p></div>
        <div id="header">
                <div class="logo">
                    <h2><a href="/index.php">BO</a></h2>
                </div>

                <ul class="menu">
                    <li><a href="../index.php">Inicial</a></li>
                    <li><a href="./sobre.php">Sobre</a></li>
                </ul>
        </div>
    </header>  

    <main>
        <article>
                <section>
                    <div class="conteiner-cards-l">
                        <!--Campo de buscar livros  -->
                        <div id="procurar"> 
                            <div>
                                <ul class="item-categoria">
                                    <li><a href="">Desenvolvimento pessoal</a></li>
                                    <li><a href="#auto-ajuda">Auto Ajuda</a></li>
                                    <li><a href="#auto-ajuda">Programação</a></li>
                                    <li><a href="">Econonia</a></li>
                                    <li><a href="">Inteligencia Artificial</a></li>
                                    <li><a href="">Designer</a></li>
                                </ul>
                            </div>

                            <form action="" method="post">
                                <div>
                                    <input type="search" name="" id="nome-livro" value="" placeholder="Livro | Autor | Categória">
                                    <button type="submit" id="buscar"><i class="bi bi-search"></i></button>
                                </div>
                            </form>
                        </div>
                        
                        <!--Resultado da pesquisa livro -->
                        <div id="resultado_livro"></div>
                        
                        <!---- Categoria Desenvolvimento pessoal  ---->
                        <div class="container-categoria" id="d-pessoal">
                            <div class="sub-categoria">
                                    <div class="titulo-categoria">
                                        <h2>Desenvolvimento Pessoal</h2>
                                    </div>

                                    <div class="categoria">
                                        <?php
                                             $sqlLivros_DP = mysqli_query($conexao, " SELECT *FROM livro WHERE categoria='Desenvolvimento Pessoal' ");
                                            while($item = mysqli_fetch_assoc($sqlLivros_DP)){
                                        ?>

                                            <div class="card">
                                                <img src="../admin/<?php echo $item['caminho']?>" alt="">
                                                <p><?php echo $item['nome']?></p>
                                                <span>
                                                    <a href="<?php echo $item['link']?>" target="_blank"><i class="bi bi-download"></i>Baixar</a>
                                                    <a href="../aplicacao/detalhes.php?id_livro=<?php echo $item['id_livro']?>"><i class="bi bi-info-circle-fill"></i>Detalhes</a>
                                                </span>
                                            </div>

                                        <?php
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        
                        <!---- Categoria Auto Ajuda  ---->
                        <div class="container-categoria" id="auto-ajuda">
                            <div class="sub-categoria">
                                    <div class="titulo-categoria">
                                        <h2>Auto Ajuda</h2>
                                    </div>

                                    <div class="categoria d-pessoal">
                                        <?php
                                            $sqlLivros_DP = mysqli_query($conexao, " SELECT *FROM livro WHERE categoria='Auto Ajuda' ");
                                            while($item = mysqli_fetch_assoc($sqlLivros_DP)){
                                        ?>
                                            <div class="card">
                                                <img src="../admin/<?php echo $item['caminho']?>" alt="">
                                                <p><?php echo $item['nome']?></p>
                                                <span>
                                                    <a href="<?php echo $item['link']?>" target="_blank"><i class="bi bi-download"></i> Baixar</a>
                                                    <a href="../aplicacao/detalhes.php?id_livro=<?php echo $item['id_livro']?>"><i class="bi bi-info-circle-fill"></i>Detalhes</a>
                                                </span>
                                            </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>
                        
                        <!---- Categoria Programação ---->
                        <div class="container-categoria">
                            <div class="sub-categoria">
                                    <div class="titulo-categoria">
                                        <h2>Programação</h2>
                                    </div>

                                    <div class="categoria d-pessoal">
                                        <?php
                                            $sqlLivros_DP = mysqli_query($conexao, " SELECT *FROM livro WHERE categoria='Programacao' ");
                                            while($item = mysqli_fetch_assoc($sqlLivros_DP)){
                                        ?>
                                            <div class="card">
                                                <img src="../admin/<?php echo $item['caminho']?>" alt="">
                                                <p><?php echo $item['nome']?></p>
                                                <span>
                                                    <a href="<?php echo $item['link']?>" target="_blank"><i class="bi bi-download"></i> Baixar</a>
                                                    <a href="../aplicacao/detalhes.php?id_livro=<?php echo $item['id_livro']?>"><i class="bi bi-info-circle-fill"></i>Detalhes</a>
                                                </span>
                                            </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>

                        <!---- Categoria IA ---->
                        <div class="container-categoria">
                            <div class="sub-categoria">
                                    <div class="titulo-categoria">
                                        <h2>Inteligencia Artificial</h2>
                                    </div>

                                    <div class="categoria d-pessoal">
                                        <?php
                                            $sqlLivros_DP = mysqli_query($conexao, " SELECT *FROM livro WHERE categoria='Inteligencia Artificial' ");
                                            while($item = mysqli_fetch_assoc($sqlLivros_DP)){
                                        ?>
                                            <div class="card">
                                                <img src="../admin/<?php echo $item['caminho']?>" alt="">
                                                <p><?php echo $item['nome']?></p>
                                                <span>
                                                    <a href="<?php echo $item['link']?>" target="_blank"><i class="bi bi-download"></i> Baixar</a>
                                                    <a href="../aplicacao/detalhes.php?id_livro=<?php echo $item['id_livro']?>"><i class="bi bi-info-circle-fill"></i>Detalhes</a>
                                                </span>
                                            </div>
                                        <?php
                                            }
                                        ?>
                                    </div>
                            </div>
                        </div>

                    </div>
                </section>
        </article>

        <footer>
            <article>
                 <div class="conteiner-rodape">
                    <p>Todos os direitos reservados <br> Biblioteca Online - <?php echo $data?></p>
                 </div>
            </article>
        </footer>

        <div id="topo">
            <p><a href="#topoo"><i class="bi bi-chevron-up"></i></a></p>
        </div>
        
    </main>

<?php
    include_once __DIR__ . "/Template/rodape.php";
?>