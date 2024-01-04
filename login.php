<?php
session_start();
include('conexao.php');

if (isset($_POST['email']) || isset($_POST['senha'])) {

    if (strlen($_POST['email']) == 0) {
        echo "Preencha seu email";
    } else if (strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {
        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['senha']);


        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if ($quantidade == 1) {
            $usuario = $sql_query->fetch_assoc();

            if (!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['user'] = $usuario['id'];
            $_SESSION['name'] = $usuario['usuario'];

            header("Location: indexlogado.php");
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
        }
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Eight Minds</title>

    <link rel="icon" href="img/logo.jpg">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <header class="headerLogin">
            <?php
            if (isset($_SESSION['msg'])) {
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
            }

            ?>
        <a class="btnvoltarLogin" href="index.php"><i class="fa-solid fa-arrow-right fa-xl"></i></a>
    </header>
    <section id="Loginsessao">

        <div class="wrapper">

            <form action="" method="post">


                <div class="form-box login">
                    <h2>Login</h2>
                    <form action="#">
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="mail"></ion-icon>
                            </span>
                            <input type="email" required name="email">
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                        <span class="icon">
                            <ion-icon id="show-passwd" name="eye-outline"></ion-icon>
                        </span>
                            <input type="password" id="password" required name="senha">
                            <label>Senha</label>
                        </div>
                        <div class="lembredemim">
                            <label><input type="checkbox">Lembre-se de mim</label>
                            <a href="esqueceusenha.html">Esqueceu a senha?</a>
                        </div>
                        <button type="submit" class="btn">Login</button>
                        <div class="linkcad">
                            <p>Ainda nao possui login?<a href="#"> Cadastrar</a></p>
                        </div>
                    </form>
                </div>

            </form>

            <div class="form-box register">
                <h2>Cadastrar</h2>
                <form action="cadastrar.php" method="POST">
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="person"></ion-icon>
                        </span>
                        <input type="text" required name="nome">
                        <label>Usuario</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon name="mail"></ion-icon>
                        </span>
                        <input type="email" required name="email">
                        <label>Email</label>
                    </div>
                    <div class="input-box">
                        <span class="icon">
                            <ion-icon id="show-passwd" name="eye-outline"></ion-icon>
                        </span>
                        <input type="password" id="password" required name="senha">
                        <label>Senha</label>
                    </div>
                    <div class="input-box">
                        <input type="password" id="confirsenha" required name="confirsenha">
                        <label>Confirmar senha</label>
                    </div>
                    <div class="lembredemimcad">
                        <label><input type="checkbox">Aceitar Termos e condicoes</label>
                    </div>
                    <button type="submit" class="btn">Cadastrar</button>
                    <div class="linklogin">
                        <p>ja possui uma conta?<a href="#"> Entrar</a></p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <footer id="footer">
        <div class="container">
            <div class="footer-links-1">
                <h2>Junte-se a nos:</h2>
                <ul class="flex">
                    <li>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitch"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                </ul>
            </div>

            <div class="footer-links-2">
                <ul class="flex">
                    <li>
                        <a href="sobre.html">Sobre</a>
                    </li>
                    <li>
                        <a href="politicas.html">Politica de privacidade</a>
                    </li>
                    <li>
                        <a href="termos.html">Termos de uso</a>
                    </li>
                    <li>
                        <a href="contato.html">Suporte</a>
                    </li>
                    <li>
                        <a href="contato.html">Duvida</a>
                    </li>
                </ul>
            </div>

            <p class="text">&copy; <a href="#">Eight minds</a>. All Rights Reserved.</p>
        </div>
    </footer>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="js/script.js"></script>


</body>

</html>