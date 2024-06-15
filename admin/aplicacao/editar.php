<?php
    include_once __DIR__ . "../../../src/basededados/repositorio.php";
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Livro</title>
    <link rel="stylesheet" href="../../CSS/Reset.css">
    <link rel="stylesheet" href="../../CSS/painel.css">
    <link rel="stylesheet" href="../../fontawesome/css/all.css">
</head>
<body>
    
    <header>
         <div class="logo">
            <h1>Painel <b>BO</b></h1>
         </div>

         <nav>
            <ul class="menu">
                <li><a href="./../lista.php">Lista</a></li>
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
                                 <p id="novo">Editar</p>
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

                        <form action="../../src/controlador/aplicacao/editar.php" method="post" enctype="multipart/form-data">
                            <div class="itensCampo">

                                    <input type="hidden" name="id_livro" value="<?php echo $idL?>">

                                    <label for="">
                                        <input type="text" name="titulo" value="<?php echo $nome ?>">
                                    </label>

                                    <label for="">
                                        <input type="text" name="autor" value="<?php echo $autor?>">
                                    </label>

                                    <label for="">
                                        <input type="number" name="pag" value="<?php echo $pag ?>">
                                    </label>
                                    
                                    <label for="">
                                        <input type="text" name="link" value="<?php echo $link?>">
                                    </label>

                                    <label for="">
                                        <select name="categoria" id="">
                                            <option value="Catégoria do Livro">Catégoria do Livro</option>
                                            <option value="Auto Ajuda">Auto Ajuda</option>
                                            <option value="Inteligência Artificial">Inteligência Artificial</option>
                                            <option value="Desenvolvimento Pessoal">Desenvolvimento Pessoal</option>
                                            <option value="Auto Ajuda">Auto Ajuda</option>
                                        </select>
                                    </label>

                                    <label for="">
                                        <input type="hidden" name="caminho" value="<?php echo $caminho?>">
                                    </label>
                                    
                                    <label for="" id="ida">
                                        <input type="hidden" name="ida" value="<?php echo $ida?>">
                                    </label>
                                
                            </div>

                            <div class="add">
                                <input type="submit" name="Actualizar" value="Actualizar">
                            </div>

                        </form>
                        
                    </div>
                </div>
        </section>
    </footer>

    <script src="../../JS/biblioteca.js"></script>

</body>
</html>