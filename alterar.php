<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar</title>
</head>
<body>
<form method="post">
        ID do Produto a ser alterado:<label>id:</label>
        <input type="text" name="id" size="100">
        <br>
        <br>
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

    if (isset($_POST["Nome"]) && isset($_POST["Quantidade"])&& isset($_POST["id"])){
        $Nome = $_POST['Nome'];
        $Quantidade = $_POST['Quantidade'];
        $id =$_POST['id'];
    $sql = "UPDATE `produtos` SET `Nome`='$Nome',`Quantidade`='$Quantidade' WHERE id='$id'";
    }


include("conecta.php");


mysqli_query($conexao, $sql);
}
?>