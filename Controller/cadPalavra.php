<?php
  require_once("../Model/Palavra.php");

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $model = new Palavra;

    if($_POST['op'] == 1){
      $descricao = $_POST['descricao'];
      $categoria =(int) $_POST['categoria'];

   
      $res = $model->cadastraPalavra($descricao,$categoria);
      if($res){
        header("Location: ../view/cadastroPalavra.php");
      }

    }else if($_POST['op'] == 2) {
      $idPalavra = $_POST['id'];

      $res = $model->ExcluiPalavra($idPalavra);
      if(!$res) header("Location: ../view/cadastroPalavra.php");
      // print_r($_POST);
    }
      
  }
  function buscatodas(){
      $model = new Palavra;
      return $model->buscaPalavraTodas();
  }
?>