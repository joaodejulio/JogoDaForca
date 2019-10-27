<?php

class Jogo{
    public $idJogo;
    public $idPalavra;
    public $chances;
    public $palavraFinal;
    public $idUsuario;
    public $iniJogo;
    public $fimJogo;

    public function getJogo(){
        $jogo['id'] = $this->idJogo;
        $jogo['idpalavra'] = $this->idPalavra;
        $jogo['chances'] = $this->chances;
        $jogo['palavraFinal'] = $this->palavraFinal;
        $jogo['idUsuario'] = $this->idUsuario;
        $jogo['inicio'] = $this->iniJogo;
        $jogo['fim'] = $this->fimJogo;

        return $jogo;
    }

    


}
?>