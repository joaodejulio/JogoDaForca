<?php

   require_once ("connection.php");
   try{
       $tUsuario = addUsuarios(); 
       // $categoria = addCategoria();
       
    }catch(PDOException $e){
        die($e->getMessage());
    }
    
    
    function addUsuarios(){
        require_once ("connection.php");

        $bd = BD::connection(); 

        $sql = $bd->prepare("INSERT INTO usuario (idUsuario, nome, apelido, sexo, email, senha, idtipoUsuario) 
                                   VALUES (NULL, 'jogador', 'jog', 'm', 'jog@forca', '1234', '2');
                            INSERT INTO usuario (idUsuario, nome, apelido, sexo, email, senha, idtipoUsuario) 
                                   VALUES (NULL, 'administrador', 'admin', 'm', 'admin@forca', 'qwert', '1' 
                            ");

        if($sql-> execute()){
            echo 'tipos de usuarios adicionado com sucesso! <br>'; 
            return true;
        } 
        else return false;
    }
    function addCategoria(){
        require_once ('connection.php');

        $bd = BD::connection();
        require ('connection.php');
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

?>