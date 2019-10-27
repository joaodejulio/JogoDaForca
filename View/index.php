<?php
    session_start();
    if($_SESSION){
        if($_SESSION["logado"] == "true" && $_SESSION["idtipo"] == 2) header("Location: ../view/jogo.php"); 
        if($_SESSION["logado"] == "true" && $_SESSION["idtipo"] == 1) header("Location: ../view/cadastroPalavra.php"); 
    }

    // if($_SESSION["logado"] != "true") {
	//     header("Location: ../view/index.php");
	//     // session_destroy();
    // }
?>


<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1">     -->

    <title>Forca Marmota</title>

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
    <div class="row">
        <div class="col-xs-6">
            <div class="well">
            <!--action="/login/"-->
            <form id="loginForm" method="POST" action = "../Controller/login.php"  novalidate="novalidate">
            <div class="form-group">
                        <input type="hidden" id="op" name="op" value="1">  
                        <label for="username" class="control-label">Nome de Usuário</label>
                        <input type="text" class="form-control" id="username" name="username" value="" required="" title="Insira seu nome de usuário" placeholder="example@gmail.com">
                        <span class="help-block"></span>
                    </div>
                    <div class="form-group">
                        <label for="pw" class="control-label">Senha</label>
                        <input type="password" class="form-control" id="pw" name="pw" value="" required title="Digite sua senha">
                        <span class="help-block"></span>
                    </div>
                    <div id="loginErrorMsg" class="alert alert-error hide">Nome de usuário ou senha incorretos!</div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="remember" id="remember">Lembrar
                        </label>
                        <p class="help-block">(Apenas em computadores privativos)</p>
                    </div>
                    <!--onClick="logar()" no botao entrar-->
                    <button type="submit" class="btn btn-success btn-block">Entrar</button>
                    <a href="/forgot/" class="btn btn-default btn-block">Esqueceu a senha?</a>
                </form>
            </div>
        </div>
        <div class="col-xs-6">
            <p class="lead">Registre-se e <span class="text-success">Faça seu pedido agora!</span></p>
            <ul class="list-unstyled" style="line-height: 2">
                <li><span class="fa fa-check text-success"></span> Compre online!</li>
                <li><span class="fa fa-check text-success"></span> Pague com seu cartão de crédito ou débito!</li>
            </ul>
            <button href="*" class="mu-send-btn" ></span>Registrar-se</button>

        </div>
    </div>
</body>

</html>