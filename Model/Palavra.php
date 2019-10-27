    <?php

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

        function cadastraPalavra($descricao, $idCategoria){
            require_once('connection.php');
        
            $bd = BD::connection();
            $sql = $bd->prepare("INSERT INTO palavra 
                                      VALUES (NULL,:descricao,:idCategoria)");
            
            $sql->bindValue(':descricao', $descricao);
            $sql->bindValue(':idCategoria', $idCategoria);
            

            return $sql->execute();
            // if($sql->execute()) echo 'cadastro feito com sucesso'; // header("Location: ../view/cadastroUsuario.html");
            // else echo 'Erro no cadastro!';
        }   
    
    
        function buscaPalavraTodas(){
            require_once('connection.php');
            $bd = BD::connection();
            $sql = $bd->prepare("SELECT p.descricao AS palavra
                                      , c.descricao as categoria
                                   FROM palavra p
                                   JOIN categoria c ON c.idCategoria = p.idCategoria");
            
            $sql->execute();
            // $palavras = $sql->fetchAll();
            return $sql->fetchAll();
        }  


    }
?>