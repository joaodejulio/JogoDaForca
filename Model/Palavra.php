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
            
            $this->$descricao = $descricao;
            $this->$idCategoria = $idCategoria;
            
            $bd = BD::connection();
            $sql = $bd->prepare("INSERT INTO palavra 
                                      VALUES (NULL,:descricao,:idCategoria)");
            
            $sql->bindValue(':descricao', $this->descricao);
            $sql->bindValue(':idCategoria', $this->idCategoria);
            

            return $sql->execute();
            // if($sql->execute()) echo 'cadastro feito com sucesso'; // header("Location: ../view/cadastroUsuario.html");
            // else echo 'Erro no cadastro!';
        }   
    
    
        public function buscaPalavraTodas(){
            // require_once('connection.php');
            $bd = BD::connection();
            $sql = $bd->prepare("SELECT p.descricao AS palavra
                                      , c.descricao as categoria
                                   FROM palavra p
                                   JOIN categoria c ON c.idCategoria = p.idCategoria");
            
            $sql->execute();
            // $palavras = $sql->fetchAll();
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

    }
?>