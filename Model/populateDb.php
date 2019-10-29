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
        // require_once ("connection.php");

        $bd = BD::connection(); 

        $sql = $bd->prepare("INSERT INTO usuario (idUsuario, nome, apelido, sexo, email, senha, idtipoUsuario) 
                                   VALUES (NULL, 'jogador', 'jog', 'm', 'jog@forca', '1234', '2');
                            INSERT INTO usuario (idUsuario, nome, apelido, sexo, email, senha, idtipoUsuario) 
                                   VALUES (NULL, 'administrador', 'admin', 'm', 'admin@forca', 'qwert', '1' 
                            ");

        if($sql-> execute()){
            echo 'usuarios adicionados com sucesso! <br>'; 
            return true;
        } 
        else return false;
    }

    function addTiposUsuarios(){
        // require_once ("connection.php");

        $bd = BD::connection(); 

        $sql = $bd->prepare("INSERT INTO tipousuario (idTipoUsuario, descricao) 
                                   VALUES (NULL, 'administrador');
                            INSERT INTO tipousuario (idTipoUsuario, descricao) 
                                   VALUES (NULL, 'jogador'); 
                            ");

        if($sql-> execute()){
            echo 'tipos de usuarios adicionados com sucesso! <br>'; 
            return true;
        } 
        else return false;
    }

    function addCategoria(){
        // require_once ('connection.php');

        $bd = BD::connection();
        // require ('connection.php');
        $sql = $bd->prepare("INSERT INTO categoria (idCategoria, descricao) 
                                  VALUES (NULL, 'Aves');
                            INSERT INTO categoria (idCategoria, descricao)
                                  VALUES (NULL, 'Frutas');"
            );

        if($sql-> execute()){
            echo 'categorias de palavras adicionado com sucesso! <br>'; 
            return true;
        } 
        else return false;
    }


    function addPalavra(){
        // require_once ('connection.php');

        $bd = BD::connection();
        // require ('connection.php');
        $sql = $bd->prepare("INSERT INTO palavra (idPalavra, descricao, idCategoria) 
                                  VALUES (NULL, 'aguia', 1);
                             INSERT INTO palavra (idPalavra, descricao, idCategoria) 
                                  VALUES (NULL, 'pavao', 1);
                             INSERT INTO palavra (idPalavra, descricao, idCategoria) 
                                  VALUES (NULL, 'mamao', 2);
                             INSERT INTO palavra (idPalavra, descricao, idCategoria) 
                                  VALUES (NULL, 'abacaxi', 2);"
            );

        if($sql-> execute()){
            echo 'palavras adicionadas com sucesso! <br>'; 
            return true;
        } 
        else return false;
    }
?>