palavras;

function sayHello() {
    // alert(JSON.stringify(palavras));
 }

 function  novoJogo() {
    const param={op:1};
    axios.get("../Controller/jogoController.php", {param})
    .then(function(resPalavra){
        palavras = resPalavra.data;
        var obj = JSON.parse(JSON.stringify(palavras));
        
        document.getElementById("palavra").value = obj.plvr;
        
        // console.log(obj.plvr);
        
    });
}


function  sayHello() {
    axios.get("../Controller/jogoController.php")
    .then(function(resPalavra){
        
        
        // console.log(obj.plvr);
        
    });
}
