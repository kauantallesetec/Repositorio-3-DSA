<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro de Cliente </title>
  </head>
  <body>
 
  <?php require "index.php" ?>
  <div class="container">
  
  
    <h3> Cadastro de cliente </h3>
	
	<form action="cadastra_cliente.php" method="POST">
     <div class="form-group">
      <label for="nome"> Nome </label>
      <input type="text"  name="nome" class="form-control" >
	 	 </div>

     <div class="form-group">
      <label for="rg"> RG </label>
      <input type="text"  name="rg" class="form-control">
	 </div>

     <div class="form-group">
	  <label for="cpf"> CPF </label>
      <input type="text"  name="cpf" class="form-control">
      </div>
	  
      <div class="form-group">
	   <label for="email"> Email </label>
       <input type="email" name="email" class="form-control">
	  </div> 
	     <input type="submit" value="Cadastrar" class="btn btn-outline-secondary">

   </form>
  
  </div>
  
  

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>