<?php
    include_once __DIR__ . "/../src/basededados/conexao.php";

    $nome = $_POST['nomeLivro'];
    $sql = "SELECT * FROM livro WHERE nome LIKE '%$nome%' ";
    $result = mysqli_query($conexao, $sql);
?>

<div>
        <?php
            if ($result->num_rows > 0) {
                while ($dados = mysqli_fetch_assoc($result)) {
                    ?>
                        
                        <div class="card">
                            <img src="../admin/<?php echo $dados['caminho']?>" alt="">
                            <p><?php echo $dados['nome']?></p>
                            <span>
                                <a href="<?php echo $dados['link']?>" target="_blank"><i class="bi bi-download"></i>Baixar</a>
                                <a href="../aplicacao/detalhes.php?id_livro=<?php echo $dados['id_livro']?>"><i class="bi bi-info-circle-fill"></i>Detalhes</a>
                            </span>
                        </div>
                    
            <?php }
            } else {
                echo "<p id='sem-result'>
                                 Sem resultado encontrado!...
                             </p>";
            }
            ?>
</div>