<?php
require_once("../Model/Palavra.php");

$jogo = new jogoController;
$teste = $jogo->sorteiaPalavra();

    class jogoController{
        private $palavra;
    
        public function sorteiaPalavra(){
            $res = new Palavra;
            
            $max = $res->qntPalavras();
            $sorteada = rand(1,$max['qnt']);
            
            $resPalavra = $res->buscaPalavra($sorteada);
            $tamanho['tam'] = strlen($resPalavra->plvr);
            header('Content-Type: text/json');
        
            $resposta = (object) array_merge((array) $resPalavra, $tamanho);
            $this->palavra = $resposta->plvr;
            echo json_encode($resposta);
        }
    
        function verificaLetra(){

        }
    
    }
    


?>