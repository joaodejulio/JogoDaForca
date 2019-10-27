    <?php

    class Usuario{
        private $idUsuario;
        private $nome;
        private $apelido;
        private $sexo;
        private $email;
        private $senha;
        private $idTipoUsuario;

        public function getUsuario(){
            $usuario['nome'] = $this->nome;
            $usuario['apelido'] = $this->apelido;
            $usuario['sexo'] = $this->sexo;
            $usuario['email'] = $this->email;
            $usuario['idTipoUsuario'] = $this->idTipoUsuario;

            return $usuario;
        }

        public function cadastraUsuario($nome, $apelido, $sexo, $email, $senha, $idTipoUsuario){
            require_once('connection.php');
            session_start();
            session_destroy();
            $bd = BD::connection();

            $sql = $bd->prepare("INSERT INTO usuario 
                                      VALUES (NULL,:nome,:apelido,:sexo,:email,:senha,:idtipoUsuario)");
            
            $sql->bindValue(':nome', $nome);
            $sql->bindValue(':apelido', $apelido);
            $sql->bindValue(':sexo', $sexo);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':senha', $senha);
            $sql->bindValue(':idtipoUsuario', $idTipoUsuario);
            
            return $sql->execute();
        }   


    }
?>