<!DOCTYPE html>
<html lang="pt-pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin BO</title>
    <link rel="stylesheet" href="../CSS/Reset.css">
    <link rel="stylesheet" href="../CSS/admin.css">
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap">
</head>
<body>

            <div id="conteiner-inicial">
                <br>
                <section>
                    <div class="conteiner-entrar">
                            <div>
                                <h1>Entrar</h1>
                            </div>
                            
                            <form action="../src/controlador/admin/validar-login.php" method="post">
                                    <div>
                                        <input type="text" name="nome" placeholder="Nome Utilizador">
                                    </div>

                                    <div>
                                        <input type="password" name="senha" placeholder="Senha Utilizador">
                                    </div>

                                    <div id="entrar">
                                        <input type="submit" name="admin" value="Entrar">
                                        <i class="fas fa-check-circle"></i>
                                    </div>
                            </form>
                    </div>
                </section>
            </div>

</body>
</html>