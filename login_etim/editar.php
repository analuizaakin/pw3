<?php
require_once "funcoes.php";

$id = $_GET['id'];

if(isset($_POST['nome'])){
    alterarUsuario($id, $_POST['nome'], $_POST['senha']);
    header("Location: usuarios.php");
}

$usuarios = listarUsuarios();
$usuario = array_filter($usuarios, fn($u) => $u['id'] == $id);
$usuario = array_values($usuario)[0];
?>

<form method="POST">
    Nome: <input type="text" name="nome" value="<?= $usuario['nome'] ?>" required><br>
    Senha: <input type="password" name="senha" required><br>
    <button type="submit">Salvar Alterações</button>
</form>
<a href="usuarios.php">Voltar</a>
<link rel="stylesheet" href="estilo.css">
