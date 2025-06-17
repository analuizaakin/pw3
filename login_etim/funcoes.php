<?php
require_once "conexao.php";

function cadastrarUsuario($nome, $senha) {
    global $pdo;
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE nome = ?");
    $sql->execute([$nome]);
    if($sql->rowCount() > 0){
        return "Usuário já cadastrado";
    }
    $sql = $pdo->prepare("INSERT INTO usuarios (nome, senha) VALUES (?, ?)");
    $sql->execute([$nome, $senha]);
    return "Cadastro realizado com sucesso!";
}

function logarUsuario($nome, $senha) {
    global $pdo;
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE nome = ? AND senha = ?");
    $sql->execute([$nome, $senha]);
    return $sql->rowCount() > 0;
}

function listarUsuarios() {
    global $pdo;
    $sql = $pdo->query("SELECT * FROM usuarios");
    return $sql->fetchAll(PDO::FETCH_ASSOC);
}

function apagarUsuario($id) {
    global $pdo;
    $sql = $pdo->prepare("DELETE FROM usuarios WHERE id = ?");
    $sql->execute([$id]);
}

function alterarUsuario($id, $nome, $senha) {
    global $pdo;
    $sql = $pdo->prepare("UPDATE usuarios SET nome = ?, senha = ? WHERE id = ?");
    $sql->execute([$nome, $senha, $id]);
}
?>
