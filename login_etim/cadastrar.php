<?php
require_once "funcoes.php";

if(isset($_POST['nome'])){
    $resultado = cadastrarUsuario($_POST['nome'], $_POST['senha']);
    echo $resultado;
}
?>

<form method="POST">
    Nome: <input type="text" name="nome" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Cadastrar</button>
</form>
<a href="login.php">Ir para Login</a>
<link rel="stylesheet" href="estilo.css">
