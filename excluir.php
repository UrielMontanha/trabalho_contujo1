<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>
<form method="GET">
        <label>ID:</label>
        <input type="text" name="id" size="100">
        <br>
        <br>
        <input type="submit" value="Cadastrar">
    </form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // verifica se o formulário foi enviado

    if (isset($_GET["id"])){
        $id = $_GET['id'];
            $sql = "DELETE FROM `produtos` WHERE id=$id";
    }


include("conecta.php");


mysqli_query($conexao, $sql);
}
?>