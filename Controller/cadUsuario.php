<?php
  require_once("../Model/Usuario.php");
  $apelido = $_POST['apelido'];
  $sexo = $_POST['sexo'];
  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $idTipoUsuario = $_POST['tipoCad'];

  if(!$_POST['nome']) $nome = 'PADRAO';
  else $nome = $_POST['nome'];
  
  if(!$_POST['email']) $email = '';
  else $email = $_POST['email'];
  
  if(!$_POST['senha']) $senha = '1234';
  else $senha = $_POST['senha'];
  
  $objUsuario =  new Usuario;


  if($_POST['op'] == 1)
    $res = $objUsuario->cadastraUsuario($nome, $apelido,$sexo,$email,$senha,$idTipoUsuario);
    if ($res) header("Location: ../view/index.php");
    else header("Location: ../view/cadastroUsuario.php");

?>