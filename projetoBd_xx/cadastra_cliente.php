<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro de Cliente</title>
  </head>
  
  <body>
  <?php require "index.php" ?>
    <div class="container">
     <?php
      /*1- realizando a conexao com o banco de dados (local, usuario,senha,nomeBanco)*/
      $conn = mysqli_connect("localhost", "root", "", "bd_projeto_xx");

      /*2- pegando os dados vindos do formulario e armazenando em variaveis */
      $nome = $_POST["nome"];
      $rg = $_POST["rg"];
      $cpf = $_POST["cpf"];
      $email = $_POST["email"];

      /*3- criando o comando sql para insercao do registro */
      $comandoSql = "insert into tb_cliente_xx (nome_cliente, rg_cliente, cpf_cliente, email_cliente) values ('$nome', '$rg', '$cpf', '$email')";

      /*4- executando o comando sql */
      $resultado = mysqli_query($conn, $comandoSql);

      /*5- verificando se o comando sql foi executado*/
      if ($resultado == true) {
        echo "Cadastrado com sucesso!";
      } else {
        echo "Erro ao cadastrar";
      }

   ?>
  </div>
    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>