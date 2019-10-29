<?php

session_start();
if($_SESSION["logado"] == "true" && $_SESSION["idtipo"] == 2) header("Location: ../view/jogo.php"); 
if($_SESSION["logado"] != "true") {
	header("Location: ../view/index.php");
	session_destroy();
} 

// require_once("../Controller/cadCategoria.php");

// header('Content-Type: text/html');
?>

<!DOCTYPE html>
<html lang="pt-br">
 <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">     -->

    <title>Forca | Cadastro de Palavra</title>

	<script type="text/javascript" src="../assets/js/jogo.js"></script>
	<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    
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
<!-- <button type="submit" class="btn btn-success btn-block">Deslogar</button> -->
<form id="frmCadastro" action="../Controller/cadPalavra.php" method="post" >
	<h1>Cadastro de Palavras</h1>
			<input type="hidden" id="op" name="op" value="1"> 
		<div class="form-group">
			<label class="control-label" for="descricao" >Descricao:</label>
			<input class="form-control form-control-sm" type="text" name="descricao" id="descricao" required>
		</div>
		<div class="form-group">
			<label class="control-label" for="categoria" >Categoria:</label>
			<!-- <select class="form-control" type="text" name="categoria" id="categoria" required> -->
			
			<select name="categoria" id='categoria'>
				<?php
					include_once("../Controller/cadCategoria.php");
					 $cat = new cadCategoriaController;
					 $categorias = $cat->CategoriasSelect();
					
					foreach ($categorias as $categoria) {
						echo '<option value=" '
						.$categoria["idCategoria"]. ' ">'
						.$categoria["descricao"]. '</option>';
					}
				?>
				</select>
		</div>

	<br>
	<div class="form-check">
	    <label type= "hidden" class="form-check-label">
	        <input type= "hidden" > 
	         </label>
	</div>	

    <button type="submit" class="btn btn-primary" name="salvar" id="btSalvar">Enviar</button>
	
	<button class="btn btn-danger" type="button" name="voltar" onclick="logout()">Sair</button>
</form>

<form id="frmCadastro" action="../Controller/cadPalavra.php" method="post">
	<input type="hidden" id="op" name="op" value="2"> 	
	<table>
		<tr>
			<th>Palavra</th>
			<th style="padding-right: 15px;">Categoria </th>
		</tr>
		
		
			<?php
				require_once("../Controller/cadPalavra.php");
				// $palavra = new Palavra;
				$resPalavra = buscatodas();
				foreach ($resPalavra as $palavra) {
					echo '<tr>';
					echo "<td style='padding-right: 15px;'> <input readonly='true' name= 'id' id='id' value= '" . $palavra['id']. "'> </td>";
					echo "<td style='padding-right: 15px;'> <input readonly='true' name= 'palavra' id='palavra' value= '" . $palavra['palavra']. "'> </td>";
					echo "<td style='padding-right: 15px;'> <input readonly='true' name= 'cat' id='cat' value= '" . $palavra['categoria']. "'> </td>";
					echo "<td><button type='submit' class='btn btn-danger'> X </button></td>";
					echo '<br>';
					echo '</tr>';	 						
				}
			?>
		
	</table>
</form >

</body>
</html>