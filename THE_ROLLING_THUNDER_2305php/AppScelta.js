
function AppScelta(){


  var VALORE_INPUT = document.getElementById("INPUT_NOME_FILE").value;
  document.getElementById("INPUT_INSERITO").innerHTML=  VALORE_INPUT;   
  LaSceltaInterattivaDinamica = document.getElementById("INPUT_INSERITO").textContent;


if( LaSceltaInterattivaDinamica !== "" ){
  let DirectoryDove;   DirectoryDove="";
  let File_01; File_01=LaSceltaInterattivaDinamica;
  File_01 = DirectoryDove+File_01 + "?"+(new Date().getTime()) + (Math.random()) ;

  let Richiedo_01 = new XMLHttpRequest();  
  Richiedo_01.open("GET",File_01,false);
  Richiedo_01.onreadystatechange = function(){
  let Trovato_01 = Richiedo_01.responseText;

  TestoTrovatoDaLeggere =    Trovato_01;

  document.getElementById("VISUALIZZA_TESTO").innerHTML=`${TestoTrovatoDaLeggere}`; 

  } ; Richiedo_01.send();

}
else
{}


}; 

EsecuzioneAppScelta = setInterval(AppScelta,1000);

// 



function StopWRAPPED(){

// alert("StopWRAPPED");

  clearInterval(EsecuzioneAppScelta);
  EsecuzioneAppScelta = null;

}

function GoWRAPPED(){

EsecuzioneAppScelta=setInterval(AppScelta,1000);

}
