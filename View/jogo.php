<?php
   session_start();
   if($_SESSION["logado"] != "true") {
       header("Location: ../view/index.php");
       session_destroy();
   }
   
   

?>