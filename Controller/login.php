<?php
  require_once("../Model/Login.php");

 
  if($_POST['username']=='' || $_POST['pw'] =='')  header("Location: ../view/index.php");
  else 
  {
      $username = $_POST['username'] ?? null;
      $password = $_POST['pw'] ?? null;
  }


  // if(!$_POST['op']){
  //   header("Location: ../view/index.php");
  // }
  session_start();

  if($_POST['op'] == 1)
    $objUsuario =  new Login;
    $res = $objUsuario->realizaLogin($username,$password);
    if($res){
      $_SESSION['logado'] = "true";
      $_SESSION['usuario'] = $res->apelido;
      $_SESSION['id'] = $res->idUsuario;
      $_SESSION['idtipo'] = $res->idtipousuario;

      if($res->idtipousuario == 1){
        header("Location: ../view/cadastroPalavra.php");
      }else if($res->idtipousuario == 2) header("Location: ../view/jogo.php");

    }else header("Location: ../view/index.php");

?>