<?php

   require_once ("connection.php");
   try{
       $usuario = addUsuarios(); 
       $categoria = addCategoria();
       $palavra = addPalavra();
       $tUsuario = addTiposUsuarios();
       
    }catch(PDOException $e){
        die($e->getMessage());
    }
    
    
    function addUsuarios(){

        $bd = BD::connection(); 

        $sql = $bd->prepare("INSERT INTO usuario (idUsuario, nome, apelido, sexo, email, senha, idtipoUsuario) 
                                   VALUES (NULL, 'jogador', 'jogador', 'm', 'jogador@forca', '1234', '2');
                            INSERT INTO usuario (idUsuario, nome, apelido, sexo, email, senha, idtipoUsuario) 
                                   VALUES (NULL, 'administrador', 'admin', 'm', 'admin@forca', 'admin', '1' 
                            ");

        if($sql-> execute()){
            echo 'usuarios adicionados com sucesso! <br>'; 
            return true;
        } 
        else return false;
    }

    function addTiposUsuarios(){

        $bd = BD::connection(); 

        $sql = $bd->prepare("INSERT INTO tipousuario (idTipoUsuario, descricao) 
                                   VALUES (NULL, 'Administrador');
                            INSERT INTO tipousuario (idTipoUsuario, descricao) 
                                   VALUES (NULL, 'Jogador'); 
                            ");

        if($sql-> execute()){
            echo 'tipos de usuarios adicionados com sucesso! <br>'; 
            return true;
        } 
        else return false;
    }

    function addCategoria(){

        $bd = BD::connection();
        $sql = $bd->prepare("INSERT INTO categoria (idCategoria, descricao) 
                                  VALUES (NULL, 'Aves');
                            INSERT INTO categoria (idCategoria, descricao)
                                  VALUES (NULL, 'Répteis');
                            INSERT INTO categoria (idCategoria, descricao)
                                  VALUES (NULL, 'Peixes');
                            INSERT INTO categoria (idCategoria, descricao)
                                  VALUES (NULL, 'Mamiferos');
                            INSERT INTO categoria (idCategoria, descricao)
                                  VALUES (NULL, 'Anfíbios');
                                  ");

        if($sql-> execute()){
            echo 'categorias de palavras adicionado com sucesso! <br>'; 
            return true;
        } 
        else return false;
    }


    function addPalavra(){

        $bd = BD::connection();
        $sql = $bd->prepare("INSERT INTO palavra (idPalavra, descricao, idCategoria) 
                                  VALUES (NULL, 'aguia', 1);
                             INSERT INTO palavra (idPalavra, descricao, idCategoria) 
                                  VALUES (NULL, 'lagarto', 2);
                             INSERT INTO palavra (idPalavra, descricao, idCategoria) 
                                  VALUES (NULL, 'baiacu', 3);
                             INSERT INTO palavra (idPalavra, descricao, idCategoria) 
                                  VALUES (NULL, 'cachorro', 4);
                             INSERT INTO palavra (idPalavra, descricao, idCategoria) 
                                  VALUES (NULL, 'sapo', 5);
                           ");

        if($sql-> execute()){
            echo 'palavras adicionadas com sucesso! <br>'; 
            return true;
        } 
        else return false;
    }
?>