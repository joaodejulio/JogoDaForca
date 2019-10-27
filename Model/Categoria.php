<?php
class categoria{
    private $idCategoria;
    private $descricao;

    
    
    public function buscaCategoriaTodas(){
        require_once('connection.php');

        $bd = BD::connection();
        
        $sql = $bd->prepare("SELECT * 
                            FROM categoria");
        $sql->execute();
        $result = $sql->fetchAll();
        
        return $result;
  }   

    public function getDescricao()
    {
        return $this->descricao;
    }

    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }
 
    public function getIdCategoria()
    {
        return $this->idCategoria;
    }
 
    
}

?>