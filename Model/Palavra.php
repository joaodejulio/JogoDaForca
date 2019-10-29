    <?php
    require_once('connection.php');
    class Palavra{
        private $idPalavra;
        private $descricao;
        private $idCategoria;
        
        public function getPalavra(){
            
            $palavra['idPalavra'] = $this->idPalavra;
            $palavra['descricao'] = $this->descricao;
            $palavra['idCategoria'] = $this->idCategoria;
        
            return $palavra;
        }

        public function cadastraPalavra($descricao, $idCategoria){
                       
            $bd = BD::connection();
            $sql = $bd->prepare("INSERT INTO palavra 
                                      VALUES (NULL,:descricao,:idCategoria)");
            
            $sql->bindValue(':descricao', $descricao);
            $sql->bindValue(':idCategoria', $idCategoria);
            

            return $sql->execute();
        }   
    
    
        public function buscaPalavraTodas(){

            $bd = BD::connection();
            $sql = $bd->prepare("SELECT p.descricao AS palavra
                                      , c.descricao as categoria
                                      , p.idPalavra as id
                                   FROM palavra p
                                   JOIN categoria c ON c.idCategoria = p.idCategoria");
            
            $sql->execute();
            return $sql->fetchAll();
        }  

        public function qntPalavras(){

            $bd = BD::connection();
            $sql = $bd->prepare("SELECT COUNT(1) AS qnt FROM palavra");
            $sql->execute();
            return $sql->fetch();

        }

        public function buscaPalavra($idPalavra){
            $bd = BD::connection();

            $sql = $bd->prepare("SELECT p.descricao AS plvr
                                      , c.descricao AS cat
                                   FROM palavra p
                                   JOIN categoria c ON c.idCategoria = p.idCategoria
                                   WHERE idPalavra = :idPalavra");

            $sql->bindValue(':idPalavra', $idPalavra);      
            $sql->execute();
            return $sql->fetchObject();                         
        }

        public function ExcluiPalavra($idPalavra){
            $bd = BD::connection();

            $sql = $bd->prepare("DELETE FROM palavra WHERE idPalavra = :idPalavra");

            $sql->bindValue(':idPalavra', $idPalavra);      
            $sql->execute();
            return $sql->fetchObject();                         
        }

    }
?>