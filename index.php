<?php

require "vendor/autoload.php";
use Carbon\Carbon;
echo Carbon::now();



$navString = $_SERVER['REQUEST_URI']; // Returns "/Mod_rewrite/edit/1/"
$parts = explode('/', $navString); // Break into an array
// Lets look at the array of items we have:
print_r($parts);




//rotas
$rotas = [

    "/" => "index.php",
    "/home" => "/controller/login.php",
    "/jogo" => "/view/jogo.php"

];

//URL que o usuário esta tentando acessar
$url = $_SERVER["REQUEST_URI"];

//carregar o controller correspondente a rota
if(array_key_exists($url, $rotas)){
    require($rotas[$url]);
}
else{
    echo "Error 404! Página nao existe D:";
}



?>