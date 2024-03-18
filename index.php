<?php
include("conecta.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <fieldset><legend><h1>Lista de Produtos</h1></legend>

<table>
  <tr>
    <th> Produtos </th>
    <th> Quantidade </th>
    <th> Excluir </th>
    <th> Alterar </th>
  </tr>
  
  
  
  
  
  <tr>
      <td><?php
    $sql = "SELECT Nome FROM produtos WHERE id=1000";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['Nome'].'';
  ?>
  </td>
    <td><?php
    $sql = "SELECT Quantidade FROM produtos WHERE id=1000";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['Quantidade'].'';
  ?></td>

  </tr>

  


  <tr>
    <td><?php
    $sql = "SELECT Nome FROM produtos WHERE id=1001";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['Nome'].'';
  ?></td>
    <td><?php
    $sql = "SELECT Quantidade FROM produtos WHERE id=1001";
  $resultado = mysqli_query($conexao, $sql);
  $dados = mysqli_fetch_assoc($resultado);

  echo ''.$dados['Quantidade'].'';
  ?></td>
  </tr>

  <tr>
    <td><a href="excluir.php"></a></td>
  </tr>

  <tr>
    <td><a href="alterar.php"></a></td>
  </tr>


</table>
  </fieldset>

</body>
</html>