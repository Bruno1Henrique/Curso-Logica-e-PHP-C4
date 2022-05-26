<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Resposta</title>
</head>
<body>
<?php

require_once('conexao.php');

$usuario = $_POST['usuario'];

$email = $_POST['email'];

$senha = $_POST['senha'];

$BancoDados = new db();

$link = $BancoDados->conecta_mysql();

$sql = "insert into usuarios (usuario, email, senha) values ('$usuario', '$email', '$senha')";

mysqli_query($link, $sql);

?>
<h1>Cadastro Realizadods com Sucesso</h1><br>
<h3>Site seguro</h3><br><br><br>

<a href="index.php">Voltar para página inicial</a>
</body>
</html>