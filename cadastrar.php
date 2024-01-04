<?php
session_start();
include_once "conexao.php";

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$nome = $_POST['nome'];
$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO usuario (email, nome , senha) VALUES ('$email', '$nome' , '$senha')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if (mysqli_insert_id($conn)) {
    $_SESSION['msg'] = "<p style='color:green;'>Usuário cadastrado com sucesso</p>";
    header("Location: login.php");

}else{
    $_SESSION['msg'] = "<p style='color:red;'>Usuário não foi cadastrado com sucesso</p>";
    header("Location: login.php");

}
?>