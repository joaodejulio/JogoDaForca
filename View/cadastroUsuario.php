<!DOCTYPE html>
<html lang="pt-br">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">     -->

    <title>Forca | Cadastro de Usuario</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/img/favicon2.ico" type="image/x-icon">

    <!-- Theme color -->
    <link id="switcher" href="../assets/css/cores.css" rel="stylesheet">    

	<!-- Bootstrap -->
    <link href="../assets/css/bootstrap.css" rel="stylesheet"> 
    <!-- Main style sheet -->
    <!-- <link href="style.css" rel="stylesheet"> -->

     <!-- <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.min.js"></script> -->
 	 <!-- <script type="text/javascript" src="localstorage.js"></script> -->

  </head>


<body>

<form id="frmCadastro" action="../Controller/cadUsuario.php" method="post">
	<h1>Cadastro do Usuário</h1>
			<input type="hidden" id="tipoCad" name="tipoCad" value="2"> 
			<input type="hidden" id="op" name="op" value="1"> 
		<div class="form-group">
			<label class="control-label" for="nome" >Nome Completo:</label>
			<input class="form-control form-control-sm" type="text" name="nome" id="nome" required>
		</div>
		<div class="form-group">
			<label class="control-label" for="sobrenome" >Apelido:</label>
			<input class="form-control" type="text" name="apelido" id="apelido" required>
		</div>
	
	<div class="form-check-inline" >
        <label class="form-check-label">Sexo: </label>
        <label class="form-check-label" for="masculino">
    	    <input class="form-check-input " type="radio" name="sexo" id="masculino" value="masculino"> Masculino
        </label>
        <label class="form-check-label" for="feminino">
	        <input class="form-check-input " type="radio" id="feminino" name="sexo" value="feminino"> Feminino
        </label>
    </div>

    <div class="form-group">
        <label class="control-label" for="email">E-mail</label>
        <input class="form-control" type="email" name="email" id="email" placeholder="exemplo@hotmail.com" required>
    </div>

	<div class="form-group">
		<label class="control-label" for="senha">Senha:</label>
		<input class="form-control" type="password" name="senha" id="senha" pattern=".{6,}" title="A senha deve conter pelo menos 6 (seis) caracteres." placeholder="(min. 6 caracteres)" required>		
	</div>


	<br>
	

    <button type="submit" class="btn btn-primary" name="salvar" id="btSalvar">Enviar</button>
	
	<a href="index.php"><button class="btn btn-warning" type="button" name="voltar">Voltar</button></a>



</body>
</html>