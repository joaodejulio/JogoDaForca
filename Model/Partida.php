<?php

class Partida{
    public $idPartida;
    public $idPalavra;
    public $chances;
    public $palavraFinal;
    public $idUsuario;
    public $iniPartida;
    public $fimPartida;

    public function getPartida(){
        $partida['id'] = $this->idPartida;
        $partida['idpalavra'] = $this->idPalavra;
        $partida['chances'] = $this->chances;
        $partida['palavraFinal'] = $this->palavraFinal;
        $partida['idUsuario'] = $this->idUsuario;
        $partida['inicio'] = $this->iniPartida;
        $partida['fim'] = $this->fimPartida;

        return $partida;
    }

    


}
?>