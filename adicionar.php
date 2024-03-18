<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produtos</title>
</head>
<body>
<form method="post">
        <label>Nome:</label>
        <input type="text" name="Nome" size="100">
        <br>
        <br>
        <label>Quantidade:</label>
        <input type="text" name="Quantidade" size="100">
        <br>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // verifica se o formulário foi enviado

    if (isset($_POST["Nome"]) && isset($_POST["Quantidade"])){
        $Nome = $_POST['Nome'];
        $Quantidade = $_POST['Quantidade'];
    $sql = "INSERT INTO produtos(Nome, Quantidade) VALUES ('$Nome','$Quantidade')";
    }


include("conecta.php");


mysqli_query($conexao, $sql);
}
?>