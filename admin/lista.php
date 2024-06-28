<?php
    include_once __DIR__ . "/../src/basededados/repositorio.php";
    include_once __DIR__ . "/../src/basededados/sessao.php";
?>
<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Livros BO</title>
    <link rel="stylesheet" href="../CSS/Reset.css">
    <link rel="stylesheet" href="../CSS/lista.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
</head>
<body>

    <header>
        <div class="logo">
           <h1>Painel <b>BO</b></h1>
        </div>

        <nav>
           <ul class="menu">
               <li><a href="./Painel.php">Inicio</a></li>
               <li><a href="#"><i class="fas fa-sign-out-alt"></i></a></li>
           </ul>
        </nav>
   </header>

    <main>
        <article>
            <section>
                <div class="conteiner-principal">
                       <div class="conteiner-titulo">
                            <h2>Lista de Livros</h2>
                       </div>

                       <div class="conteiner-livros">
                            <div class="sub-livros">
                                <div class="livros">
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Titulo Livro</th> <th>Pag</th> <th>Opc</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php  
                                                    while($item = mysqli_fetch_assoc($resultLivros)){
                                                        echo "<tr>";
                                                            echo "<td>" . $item['nome'] . "</td>"; 
                                                            echo "<td>" . $item['pag'] . "</td>"; 
                                                            echo "<td id='opc' colspan='3'>";
                                                                echo "<a href='aplicacao/editar.php?idEditar=$item[id_livro]'><i class='fas fa-pen-square'></i></a>";
                                                                echo "<a href='aplicacao/editar.php?idEliminar=$item[id_livro]'><i class='fas fa-trash'></i></a>";
                                                            echo "</td>";
                                                        echo "</tr>";
                                                    }
                                                ?>
                                            </tbody>
                                        </table>     
                                </div>
                            </div>
                       </div>
                </div>
            </section>
        </article>
    </main>

</body>
</html>