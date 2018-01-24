<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cliente</title>
  </head>
  <body>
    <?php
      require 'Cliente.php';

      $servidor = "localhost";
      $usuario = "root";
      $senha = "senha";
      $banco = "verao";


      $conexao = new mysqli($servidor, $usuario, $senha, $banco)
        or die("Erro de conexao: $conexao->connect_error");

      $cliente = new Cliente();
      $cliente->nome = $_POST['nome'];
      $cliente->email = $_POST['email'];

      $sql = "INSERT INTO clientes (nome, email) values
              ('$cliente->nome', '$cliente->email')";

      $saida = $conexao->query($sql);
    ?>

    <h1>Cliente</h1>

    <?php if($saida === true) { ?>
      <h3>Cliente salvo com sucesso</h3>
    <?php } else {
      //var_dump($conexao);
      ?>
    <h3>Erro: <?= $conexao->error ?> </h3>
    <?php }
      $conexao->close();
     ?>
  </body>
</html>
