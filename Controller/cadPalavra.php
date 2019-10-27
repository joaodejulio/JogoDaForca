<?php
  require_once("../Model/Palavra.php");

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $model = new Palavra;

    if($_POST['op'] == 1){
      $descricao = $_POST['descricao'];
      $categoria =(int) $_POST['categoria'];

      $res = $model->cadastraPalavra($descricao,$categoria);
      echo '<pre>';
      var_dump($res);
    }else {
      // $res = $model->buscaPalavraTodas();
      // return $res; 
      // print_r($res);
    }
      
  }
  function buscatodas(){
      $model = new Palavra;
      return $model->buscaPalavraTodas();
  }
?>