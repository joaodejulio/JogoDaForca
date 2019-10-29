<?php
 session_start();

  if($_GET['op'] == 1){
    // $_SESSION = array();
    session_destroy();
    $destruido = true;
    echo $destruido;
  }
    

?>