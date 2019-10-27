<?php
    class BD {
        public static function connection(){
            try{
                return new PDO('mysql:host=localhost;dbname=forca2', 'root', '');
                // echo 'sucesso';
            }catch(PDOException $e ){
                die($e->getMessage());
            }
        }
    }

?>