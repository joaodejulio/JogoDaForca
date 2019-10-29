<?php
require_once("../Model/Palavra.php");

    $jogo = new jogoController;
    
    switch ($_GET['op']) {
        case '1':
            $jogo->sorteiaPalavra();
            break;
        case '2':
            $jogo->verificaLetra();
      
    }


    class jogoController{
        private $palavra;
        
        public function sorteiaPalavra(){
            $res = new Palavra;    
            $hp = 6;
            
            $max = $res->qntPalavras();
            $sorteada = rand(1,$max['qnt']);
            
            $resPalavra = $res->buscaPalavra($sorteada);
            header('Content-Type: text/json');
            
            for($i=0; $i<strlen($resPalavra->plvr); $i++){
                $word[$i] = '.-';
            }
            $strWord = implode($word); 
            
            $resposta = (object) array_merge((array) $resPalavra,(array) $strWord, (array) $hp);
            
            echo json_encode($resposta);
        }
    
        function verificaLetra(){
            
            $acerto = false;
            $letra= strtolower( $_GET['letter']);
            $palavra= $_GET['plvrCerta'];
            $word= $_GET['word'];
            $hp= (int)$_GET['hp'];
        //    var_dump($hp);
            
            $word = explode(" ",$word);
            $word = implode("", $word);

            for ($i=0; $i<strlen($palavra); $i++){
                if($letra == $palavra[$i]){ 
                    $word[$i] = $letra;
                    $acerto = true;
                }

            }  

            if (!$acerto){
                $hp--;
            }
            
            $resposta = (object) array_merge((array) $palavra,(array) $word, (array) $hp);
            echo json_encode($resposta);

            
            

        }
    
    }
    


?>