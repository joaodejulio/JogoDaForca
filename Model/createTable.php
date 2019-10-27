<?php
    require_once ('connection.php');
    
    $bd = BD::connection(); 
    try{

        $sql = $bd->prepare("CREATE TABLE IF NOT EXISTS  tipoUsuario (
                             idTipoUsuario int AUTO_INCREMENT not null,
                             descricao varchar(50),
                             PRIMARY KEY (idTipoUsuario)
                            )"
        );

       if($sql-> execute()) echo 'tabela tipoUsuario criada com sucesso! <br>'; 
       
       $sql = $bd->prepare("CREATE TABLE IF NOT EXISTS  usuario (
                             idUsuario int AUTO_INCREMENT not null,
                             nome varchar(50),
                             apelido varchar(40) ,
                             sexo varchar(40) ,
                             email varchar(40) not null,
                             senha varchar (40) not null,
                             idtipoUsuario int not null references tipoUsuario (idTipoUsuario),
                             PRIMARY KEY (idUsuario)
                            )"
        );

        if($sql-> execute()) echo 'tabela usuario criada com sucesso!<br>' ;

        $sql = $bd->prepare("CREATE TABLE IF NOT EXISTS  categoria (
                            idCategoria int AUTO_INCREMENT not null,
                            descricao varchar(50),
                            PRIMARY KEY (idCategoria)
                            )"
        );


        if($sql-> execute()) echo 'tabela categoria criada com sucesso!<br>';

        $sql = $bd->prepare("CREATE TABLE IF NOT EXISTS  palavra (
                            idPalavra int AUTO_INCREMENT not null,
                            descricao varchar(50),
                            idCategoria int not null references categoria(idCategoria),
                            PRIMARY KEY (idPalavra)
                            )"
            );

            if($sql-> execute()) echo 'tabela palavra criada com sucesso!<br>';

        $sql = $bd->prepare("CREATE TABLE IF NOT EXISTS  partida (
                            idPartida int AUTO_INCREMENT not null,
                            idPalavra int not null references palavra(idPalavra),
                            chances int not null,
                            palavraFinal varchar(50) not null,
                            idUsuario int not null references usuario(idUsuario),
                            iniPartida datetime not null default CURRENT_TIMESTAMP,
                            fimPartida datetime not null default CURRENT_TIMESTAMP,
                            PRIMARY KEY (idPartida)
                            )"
            );

            if($sql-> execute()) echo 'tabela partida criada com sucesso!<br>';


        
    }catch(PDOException $e){
        die($e->getMessage());
    }



?>