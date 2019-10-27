<?php
  require_once("../Model/Categoria.php");
  
  
  
  class cadCategoriaController{

    public static function CategoriasSelect(){

      $categorias = new categoria;
      
      return $categorias->buscaCategoriaTodas();
      // return $categorias->buscaCategoriaTodas();
      // header('Content-Type: text/json');
      // echo json_encode($categorias);
    }
    
  }

?>