<!DOCTYPE html>

<html>

<head>

    <title>Jogo da Forca</title>

    <!-- Escala o site de acordo com o tamanho da tela do dispositivo -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="initial-scale=1.0, width=device-width, user-scalable=no" />
    
    <!-- Google -->
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex, nofollow">

    <!-- importação js -->
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script type="text/javascript" src="../assets/js/jogo.js"></script>

    <!-- bootstrap 5 -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/css/jogo.style.css">

    <?php

    session_start();
    if($_SESSION["logado"] != "true") {
        header("Location: ../view/index.php");
        session_destroy();
    }

    ?>

</head>

<body type="text/html">

    <h1>Jogo da Forca</h1>
    <p> <img src="../assets/img/forca.gif" alt="Forca" id="forca"></p>
    <p><button type="button" class="btn btn-outline-primary" onclick="comoJogar()" id="novo_jogo">Como jogar?</button>
    </p>
    
    <form action="jogo.php">
    
        <main>

        <input type="hidden" id="palavra">
        <input type="hidden" id="hidden_hp">
            <div>
                <p>Palavra: </p>
                <div id = "div_Word">
                    <label> Pressione 'Novo jogo'</label>
                </div>
                
                
                <br><div id="cat"><small><strong>Categoria</strong></small></div>      
            </div>

            <div>

                <label id="label_letra">Letra:</label>
                <input type="text" class="form-control form-control mx-sm-3" id="input_letra">
                <button type="button" class="btn btn-primary" onclick="verificaLetra(this.form.input_letra.value, this.form.palavra.value, this.form.h_word.value, this.form.hidden_hp.value)" id="button_letra">Enviar</button>
                <br>

            </div>
            
            <div>
                <div style="display:inline-block;" id="div_hp1"></div>
                <div style="display:inline-block;" id="div_hp2"></div>
                <div style="display:inline-block;" id="div_hp3"></div>
                <div style="display:inline-block;" id="div_hp4"></div>
                <div style="display:inline-block;" id="div_hp5"></div>
                <div style="display:inline-block;" id="div_hp6"></div>
            </div>
            
            <div class="btn-group" role="group">
               
                <button type="button" class="btn btn-outline-primary" onclick="novoJogo()" id="novo_jogo">Novo jogo</button>
                <button type="button" class="btn btn-danger" onclick="logout()" id="sair" >Sair</button>
            </div>

        </main>  

    </form>

</body>

</html>