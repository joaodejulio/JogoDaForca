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

    $palavra = "batata";
    $tamanho = strlen($palavra);
    $categoria = "AVES";
    $hp = 6;
    
    ?>

</head>

<body type="text/html">

    <h1>Jogo da Forca</h1>
    <p> <img src="../assets/img/forca.gif" alt="Forca" id="forca"> </p>                
    <h2>Como jogar?</h2>
    <br>
    <p>
        O jogador deve acertar a palavra sorteada, tendo como dica o número de letras e a categoria da palavra.
        <br>
        O jogador possuí 6 chances de errar a letra que compõe a palavra.
        <br>
        O jogo acaba com o acerto da palavra ou com o término das chances do jogador.
        <br>
        Clique em Novo jogo para iniciar.
        <br><br>
        Boa sorte!
        <br>
    </p>
    
    <form action="jogo.php">
        
        <main>


            <div>
                <p>Palavra: </p>
                <?php
                    for($i = 1; $i <= $tamanho; $i++){
                    ?>     
                        <ul id="palavra">

                            <?php

                                echo "<li> <h2> _ </h2> </li>";
                        
                            ?> 

                        </ul>
                    <?php
                    }
                ?>
                <br><small><?= $categoria ?></small>      
            </div>

            <div>

                <label id="label_letra">Letra:</label>
                <input type="text" class="form-control form-control mx-sm-3" id="input_letra">
                <button type="button" class="btn btn-primary" onclick="verificaLetra(this.form.input_letra.value)" id="button_letra">Enviar</button>
                <br>

            </div>
   
            <div>
                <?php for($i = 1; $i <= $hp; $i++){ ?>     
                    <ul id="palavra">

                        <?php

                            echo "<li> <img src='../assets/img/hp.png' alt='chances' id='hp'> </li>";
                    
                        ?> 

                    </ul>
                <?php } ?>
            </div>

            <div class="btn-group" role="group">
               
                <button type="button" class="btn btn-outline-primary" onclick="novoJogo()" id="novo_jogo">Novo jogo</button>
                <button type="button" class="btn btn-danger"  id="sair" >Sair</button>
            </div>

        </main>  

    </form>

</body>

</html>