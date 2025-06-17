<?php
require_once "funcoes.php";

if(isset($_POST['nome'])){
    if(logarUsuario($_POST['nome'], $_POST['senha'])){
        header("Location: principal.php");
    } else {
        echo "Usuário ou senha incorretos!";
    }
}
?>

<form method="POST">
    Nome: <input type="text" name="nome" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Login</button>
</form>
<a href="cadastrar.php">Cadastrar novo</a>
<link rel="stylesheet" href="estilo.css">
