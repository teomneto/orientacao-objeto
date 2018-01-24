<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cliente </title>
  </head>
  <body>

<?php
  $servidor="localhost";
  $usuario = "root";
  $senha = "senha";
  $banco = "verao";


  $conexao = new mysqli($servidor, $usuario, $senha, $banco)
or die("Erro de conexao: $conexao->connect_error");
  //check connection
  //if($conexao->connect_error) {
  //}
//.
//.
//.
//.
//.
//.

echo 'connectio successfully'
?>
  </body>
</html>
