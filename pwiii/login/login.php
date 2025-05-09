<?php
require 'Usuario.class.php';

$sucesso = $usuario = new Usuario();

if( $sucesso ){ 

}else{
    echo "<h1>Banco indisponivel. Tente mais tarde";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <div class="container">
        <div class="box">
            <h1>Cadastro</h1>
            <form action="teste.php" method="post">
                <input type="text" name="nome" placeholder="Digite um Nome" required>
                <input type="email" name="email" placeholder="Digite um Email" required>
                <input type="password" name="senha" placeholder="Digite uma Senha" required>
                <button type="submit">Cadastrar</button>
            </form>
        </div>
    </div>
</body>
</html>
