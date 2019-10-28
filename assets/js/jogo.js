palavras;
letra;
hp;

 function  novoJogo() {
    
   const params = {op:1}
    axios.get("../Controller/jogoController.php", {params})
    .then(function(resPalavra){
        palavras = resPalavra.data;
        var obj = JSON.parse(JSON.stringify(palavras));
        
        // document.getElementById("palavra").value = obj.plvr;
        
        // console.log(obj.plvr);
        
    });
}


function  verificaLetra(form) {
    letra = form;
    const params = {op:2, letter: letra}
    axios.get("../Controller/jogoController.php", {params})
    .then(function(resPalavra){
        
        console.log(palavras);
        // console.log(obj.plvr);
        
    });
}
