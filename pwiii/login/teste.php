<?php
require 'Usuario.class.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = trim($_POST["nome"]);
    $email = trim($_POST["email"]);
    $senha = trim($_POST["senha"]);

    if (!empty($nome) && !empty($email) && !empty($senha)) {
        $usuario = new Usuario();
        $resultado = $usuario->cadastrar($nome, $email, $senha);

        if ($resultado) {
            echo "Usuário cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar usuário!";
        }
    } else {
        echo "Todos os campos são obrigatórios!";
    }
} else {
    echo "Requisição inválida!";
}
?>
