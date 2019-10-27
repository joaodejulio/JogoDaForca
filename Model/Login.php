<?php
    class Login{
        private $username;
        private $password;

        public function realizaLogin($username, $password){
            require_once('connection.php'); 
            // $user = strtoupper ($username);

            $bd = BD::connection();

            $sql = $bd->prepare("SELECT idUsuario, apelido, idtipousuario 
                                 FROM usuario
                                 WHERE apelido LIKE :username AND senha LIKE :senha" );

            $sql->bindParam(':username', $username);
            $sql->bindParam(':senha', $password);
            $sql->execute();
            return $sql->fetchObject();
        }
    }
?>