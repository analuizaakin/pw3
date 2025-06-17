<?php
require_once "funcoes.php";

if(isset($_GET['apagar'])){
    apagarUsuario($_GET['apagar']);
    header("Location: usuarios.php");
}

$usuarios = listarUsuarios();
?>

<h2>Usuários Cadastrados</h2>
<table>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Ações</th>
    </tr>
    <?php foreach($usuarios as $usuario): ?>
    <tr>
        <td><?= $usuario['id'] ?></td>
        <td><?= $usuario['nome'] ?></td>
        <td>
            <a href="editar.php?id=<?= $usuario['id'] ?>">Editar</a>
            <a href="usuarios.php?apagar=<?= $usuario['id'] ?>" onclick="return confirm('Tem certeza?')">Apagar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<br>
<a href="cadastrar.php">Inserir novo usuário</a>
<link rel="stylesheet" href="estilo.css">
