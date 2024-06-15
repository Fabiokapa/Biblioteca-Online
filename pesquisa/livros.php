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
                            <a href="<?php echo $dados['link']?>">Baixar</a>
                        </div>
                    
            <?php }
            } else {
                echo "<p id='sem-result'>
                                 Sem resultado encontrado!...
                             </p>";
            }
            ?>
</div>
