function  comoJogar() {
    alert('O jogador deve acertar a palavra sorteada, tendo como dica o número de letras e a categoria da palavra. \n O jogador possuí 6 chances de errar a letra que compõe a palavra.\n O jogo acaba com o acerto da palavra ou com o término das chances do jogador.\n Clique em Novo jogo para iniciar.\n Boa sorte!');
}

function  logout() {
    const params = {op:1}
     axios.get("../Controller/logout.php", {params})
     .then(function(login){
         
        reslogout = login.data;
        console.log(reslogout);
        window.location.replace("../View/index.php");
     });
}

function  novoJogo() {
    
    const params = {op:1}
     axios.get("../Controller/jogoController.php", {params})
     .then(function(resPalavra){
         palavras = resPalavra.data;
         
         var obj = JSON.parse(JSON.stringify(palavras));
         hp = parseInt(obj[1]);
         
         var word = obj[0].split(".");
         word = word.join('');
         
         
         document.getElementById("palavra").value = obj.plvr;
         document.getElementById("hidden_hp").value = hp;
         document.getElementById("div_Word").innerHTML = "<input id='h_word' value=' " +word+"' readonly='true'>" ;
         
         document.getElementById("cat").innerHTML = "<small><strong> " +obj.cat+"</strong></small>" ;
         
         for(i=1; i<=hp;i++){
             document.getElementById("div_hp"+i).innerHTML = " <img src='../assets/img/hp.jpg' style='width:25px;'>" ;
         }
         
         
         
 
     });
 }


function  verificaLetra(form, form2, form3, form4) {
    letra = form;
    plvrcerta = form2;
    word = form3;
    hp =  form4;
    // console.log(hp);
    const params = {op:2, letter: letra, plvrCerta: plvrcerta, word: word, hp: hp }
    

    
    axios.get("../Controller/jogoController.php", {params})
    .then(function(resPalavra){
        palavras = resPalavra.data;
        var obj = JSON.parse(JSON.stringify(palavras));
        hp = parseInt(obj[2]);
        palavra=obj[0];
        word=obj[1];

        document.getElementById("div_Word").innerHTML = "<input id='h_word' value=' " +word+"' readonly='true'>" ;
        document.getElementById("hidden_hp").value = hp;

        for(i=1; i<=6;i++){
            
            document.getElementById("div_hp"+i).innerHTML = " " ;
        }
    
        for(i=1; i<=hp;i++){
            
            document.getElementById("div_hp"+i).innerHTML = " <img src='../assets/img/hp.jpg' style='width:25px;'>" ;
        }
        

        if (word == palavra){
            alert('Parabens, você é um VENCEDOR(A)!\nA palavra certa era: '+palavra);
            window.location.replace("../View/jogo.php");
        }    
        else if (hp <= 0) {
            alert('Que pena, você perdeu ;(');
            window.location.replace("../View/jogo.php");
        }


        // console.log(obj.plvr);
        
    });
}

