<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="utf-8">
<meta name="generator" content="AlterVista - Editor HTML"/>
<title> CONNESSIONE_SEMANTICA </title>
<link rel="icon" type="image/png" href="https://it.altervista.org/images/favicon/favicon-16x16.png" sizes="16x16">  



<!--  avid3820725v026a586v026a1861311_app_connessione_semanticar__202305111915a  -->


<script src="LINK.js?avid3820725v026a586v026a1861311_app_connessione_semanticar__202305111915a"></script>

<script>
arg00="CONNESSIONE_SEMANTICA";
</script>

</head>
<body>

<main>
<section>
<div id="CONNESSIONE_SEMANTICA">?CONNESSIONE_SEMANTICA</div>
</section>
<!--
ini
|| SCRIPT !!
|| SCRIPT !!
\/ SCRIPT !!
-->
<script>


// function CONNESSIONE_SEMANTICA(arg00){




// rilevazione dispositivo
//
//

 DESKTOP_CHECK = 1 ;
 if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
  { DESKTOP_CHECK = 0 ; } else { DESKTOP_CHECK = 1 ; }




// rilevazione width height
//
//
function LarghezzaRem(){ let Larghezza = window.innerWidth  / 16; return Larghezza;}
function   AltezzaRem(){ let Altezza   = window.innerHeight / 16; return Altezza;}

// CREAZIONE VARIABILI GLOBALI
//
//

LarghezzaFinestra=LarghezzaRem();
CorrezioneLarghezzaFinestra = 0.985;
CorrezioneLarghezzaFinestra = 0.975;
CorrezioneLarghezzaFinestra = 0.970;

//
// Si applica la correzione
//
LarghezzaFinestra=LarghezzaFinestra * CorrezioneLarghezzaFinestra;

 
AltezzaFinestra=AltezzaRem();
CorrezioneAltezzaFinestra = 1.000;
CorrezioneAltezzaFinestra = 0.950;
// Si applica la correzione
// 
//
AltezzaFinestra = AltezzaFinestra * CorrezioneAltezzaFinestra;


// Livelli
//
//
LIV_00_y = AltezzaFinestra * 0.900;
LIV_01_y = AltezzaFinestra * 0.025;
LIV_02_y = AltezzaFinestra * 0.050;
LIV_03_y = AltezzaFinestra * 0.020;


// ADATTAMENTO PER DESKTOP
// dei Livelli
//
if(DESKTOP_CHECK===1){
// alert(DESKTOP_CHECK);
LIV_00_y = AltezzaFinestra * 0.875;
LIV_01_y = AltezzaFinestra * 0.025;
LIV_02_y = AltezzaFinestra * 0.025;
LIV_03_y = AltezzaFinestra * 0.020;


};


// 0.99 (interessa width dei livelli)
// normalizzazione scroll bar overflow
// ipotesi di lavoro
//
//
let ZeroNovantanove = 0.99 ;
let NovantanoveCent = ZeroNovantanove;
let AltezzaPannelloDiControlloNOSI = NovantanoveCent;

// Controllo se supera
//
//
LIV_TOTy = LIV_00_y+LIV_01_y+LIV_02_y+LIV_03_y;
if(LIV_TOTy> AltezzaFinestra){alert("Attenzione: = " + LIV_TOTy +">"+AltezzaFinestra)}


// SETTAGGI 
// inserisce la variabile id entry point 
// definita in head e definizione dei settaggi
//
//
//
document.getElementById(arg00).innerHTML=
`
<!-- connessione semantic ini -->
<style>

/* LIVELLI ini */
 
 #LIV_00_{
 width:`+( LarghezzaFinestra * NovantanoveCent )+`rem;
 height:`+( LIV_00_y * 1)+`rem;
 background-color:orange;
 background-color:initial;
 color:initial;
 overflow:auto!important;
 }
 
 #LIV_01_{
 margin:0rem;padding:0rem;
 width:`+( LarghezzaFinestra * NovantanoveCent )+`rem;
 height:`+( LIV_01_y * 1)+`rem;
 background-color:aqua;
 background-color:transparent;
 
 }
 
 #LIV_02_{
 position:relative;
 width:`+( LarghezzaFinestra * NovantanoveCent)+`rem;
 height:`+( LIV_02_y * 0.50)+`rem;
 background-color:trasparent;
 border:solid 0.00rem magenta;
 cursor:pointer;
 }
 
 #LIV_03_{
 width:`+( LarghezzaFinestra * NovantanoveCent )+`rem;
 height:`+( LIV_03_y)+`rem;
 background-color:silver;
 background-color:transparent;
 
 }
 
/* LIVELLI fin */





/* PANNELLO DI CONTROLLO togglato ini      */
/* Assimilato e normalizzato al Livello 00 */ 

 #CONTENITORE_DEL_PANNELLO_DI_CONTROLLO_{
 width:`+( LarghezzaFinestra * NovantanoveCent )+`rem;
 
 border:dotted 0.15rem maroon; 
 }

 #PANNELLO_DI_CONTROLLO_OK_{
 width:`+( LarghezzaFinestra * NovantanoveCent )+`rem;
 height:`+( LIV_00_y * 0.50)+`rem;
 height:`+( LIV_00_y * 0.65)+`rem;
 
 background-color:teal;
 border:solid 0.15rem maroon;
 display:none;
 overflow:auto;
 }
 
 #PANNELLO_DI_CONTROLLO_OK_BACKDOOR_{
 width:`+( LarghezzaFinestra * NovantanoveCent )+`rem;
 color:red;
 font-size:2.5rem;
 font-family:monospace;
 }
 #PANNELLO_DI_CONTROLLO_OK_BACKDOOR_:hover{cursor:pointer;}
 #PANNELLO_DI_CONTROLLO_OK_BACKDOOR_ span {font-variant:small-caps;}
 
 #PANNELLO_DI_CONTROLLO_NO_{ opacity: 0.50 ; border-style:none;}
 #PANNELLO_DI_CONTROLLO_SI_{ opacity: 0.75 ; border-style:none;}

  
 #PANNELLO_DI_CONTROLLO_NO_ ,  #PANNELLO_DI_CONTROLLO_SI_ {
 position:absolute;top:0rem;left:0rem;
 width:100%;
 height:`+( AltezzaPannelloDiControlloNOSI * 0.75 )+`rem; 
 background-color:olive;  
 cursor:pointer;
 }

 #PANNELLO_DI_CONTROLLO_NO_:hover ,  #PANNELLO_DI_CONTROLLO_SI_:hover { 
 background-color:green; 
 border:dashed 0.05rem transparent;border-radius:0.0rem;

 
 }
 
 
 #NO_COPY_ , #SI_COPY_ {font-size:2.5rem;border-radius:0.50rem;opacity:0.75;}
 #NO_COPY_:hover , #SI_COPY_:hover {font-size:2.5rem;border:dashed 0.05rem purple;border-radius:0.50rem;opacity:1.00;cursor:pointer;}
 
 #NO_COPY_ {background-color:green;color:white;}
 #SI_COPY_ {background-color:red;  color:white;}

 #NO_COPY_:hover {background-color:white;color:green;}
 #SI_COPY_:hover {background-color:white;  color:red;}
 
 #TIMESTAMPA_{background-color:orange;color.black;font-size:125%;font-family:monospace;} 
 
/* PANNELLO DI CONTROLLO togglato fin */





/* INPUT NOME DEL FILE ini */
 
 #CONTENITORE_INPUT_FILE_DA_CERCARE_{
 text-align:center;
 
 }
 
 #INPUT_NOME_FILE{width:`+( LarghezzaFinestra * 0.90 )+`rem;font-size:2.5rem;border-radius:0.5rem;}
 
 #INPUT_INSERITO{width:`+( LarghezzaFinestra * NovantanoveCent )+`rem;border:solid 0.05rem lime;}
 
 
 #TEST{
 border:solid 0.15rem orange; 
 overflow:auto!important; 
 }
 #CONTENITORE_TESTO_{}
 #VISUALIZZA_TESTO{
 height:`+( LIV_00_y * 1)+`rem;
 
 }
 
/* INPUT NOME DEL FILE fin */






/* INPUT RANGE SLIDER ini */
 
 input[type="range"]{-webkit-appearance:none;
 width:`+( LarghezzaFinestra * NovantanoveCent )+`rem;
 height:`+(AltezzaPannelloDiControlloNOSI * 0.75)+`rem;
 background-color:blue;
 opacity: 0.25;
 }
 
/* INPUT RANGE SLIDER ini */





/* UTILITIES GENERICHE ini */
 
 #INTERLINEA{visibility:hidden;}
 
 #fine{font-size:0.75rem;font-family:monospace;overflow:auto;}
 
 @keyframes spin{ 0%{transform:rotate(0deg);} 100% {transform:rotate(360deg);}}
 
 .spinner{width:48px;height:48px; width:2rem;height:2rem; border:solid 4px red; border:solid 0.25rem red; border:solid 0.25rem red; border:solid 0.25rem red; border-top:solid 4px black; border-top:solid 0.25rem transparent; background-color:transparent; border-radius:50%; overflow:none; animation: spin 1.5s linear infinite;}
 .spinmin
 {
 width: 1.00rem;
 height:1.00rem; 
 border:solid     0.175rem orange; 
 border-top:solid 0.175rem transparent; 
 background-color:transparent; 
 border-radius:50%; 
 animation: spin 1.5s linear infinite;
 }
 
/* UTILITIES GENERICHE fin */


</style>

<!-- inserire html ini  -->


<section id="TESTO_TEXT">





<article id="CONTENITORE_DEL_PANNELLO_DI_CONTROLLO_">
 <aside  id="PANNELLO_DI_CONTROLLO_OK_">

 <button id="PANNELLO_DI_CONTROLLO_OK_BACKDOOR_" onclick="PANNELLO_DI_CONTROLLO_NO_()">
 <span>chiudi</span>
 </button>
 <hr>
 <aside  id="CONTENITORE_INPUT_FILE_DA_CERCARE_">
 <input type="text" placeholder="Testo.txt" id="INPUT_NOME_FILE" value="Testo.txt" >
 
 <hr>
 
 
<button id="NO_COPY_" onclick="NO_COPY_()">&nbsp;NO_COPY_()</button>
<button id="SI_COPY_" onclick="SI_COPY_()">&nbsp;SI_COPY_()</button>

<hr>

<span id="TIMESTAMPA_"></span>
 
 </aside>
 </aside>
</article>










<div id="APPLICA_VALORE_RANGE"></div>

<article id="LIV_00_">
 <div id="TEST">
  <div id="CONTENITORE_TESTO_">
    <div id="VISUALIZZA_TESTO">
          <div class="spinner">
		  </div>
    </div>
  </div>
 </div>
</article>

<div id="INPUT_INSERITO"><div class="spinmin">&nbsp;</div></div>

<article>

<div id="LIV_01_">


</div>
</article>

<div>interlinea = spazio intenzionalmente vuoto</div>

<article id="LIV_02_">
<!-- toggle candidate ini -->
<button id="PANNELLO_DI_CONTROLLO_NO_" onclick="PANNELLO_DI_CONTROLLO_NO_()"></button>
<button id="PANNELLO_DI_CONTROLLO_SI_" onclick="PANNELLO_DI_CONTROLLO_SI_()"></button>

<!-- toggle candidate fin -->
</article>

<div id="LIV_03_"></div>



</section>





<!-- inserire html fin  -->
`;








// RACCOLTA FUNCTION(s)
// 
// 

// Gestione toggle
//
//
function PANNELLO_DI_CONTROLLO_NO_(){ // alert("PANNELLO_DI_CONTROLLO_NO_");
 document.querySelector("#PANNELLO_DI_CONTROLLO_OK_").style.display="none";
 document.querySelector("#PANNELLO_DI_CONTROLLO_NO_").style.display="none";
 document.querySelector("#PANNELLO_DI_CONTROLLO_SI_").style.display="block";
 
}
function PANNELLO_DI_CONTROLLO_SI_(){ // alert("PANNELLO_DI_CONTROLLO_SI_");
 document.querySelector("#PANNELLO_DI_CONTROLLO_OK_").style.display="block";
 document.querySelector("#PANNELLO_DI_CONTROLLO_NO_").style.display="block";
 document.querySelector("#PANNELLO_DI_CONTROLLO_SI_").style.display="none";
 var Capopagina = document.getElementById("CONNESSIONE_SEMANTICA").offsetTop; 
 window.scrollTo(0, Capopagina);
}







// Definizione input range min max
//
//
function RangeDot_Dinamico_Input(){
 document.getElementById("LIV_01_").innerHTML=
 `
 <input id="RANGER" type="range" step="1" min="1" max="99">
 
 `;
}; 
RangeDot_Dinamico_Input() ;

// Lettura e applicazione del valore range
// 
// 
function LeggiRangeDot_Dinamico_Input(){
 let LetturaRange = document.getElementById("RANGER").value;


// ValorePerRange definisce un coefficente
// specifico a seconda del dispositivo
// Per default rappresenta device mobile
//
//
 let ValorePerRange = 0.050;
 let ValorePadding = ValorePerRange * 125;
 
 if(DESKTOP_CHECK===1){
 ValorePerRange=0.025;
 ValorePadding = ValorePerRange * 250;
 ValorePadding = ValorePerRange * 150;
 
 }
 
 
 
 
 document.getElementById("APPLICA_VALORE_RANGE").innerHTML=
 `
 <style>
 #CONTENITORE_TESTO_ * {
 padding:0rem;
 font-size:`+( LetturaRange * ValorePerRange )+`rem;
 }
 
 #VISUALIZZA_TESTO{
 padding-left:5rem!important;padding-right:5rem!important;
 padding-left:`+( ValorePadding * 1.5 )+`rem!important;padding-right:`+( ValorePadding * 0.0 )+`rem!important; 
 }
 </style>
 
 `;
 
};
// LeggiRangeDot_Dinamico_Input();
setInterval(LeggiRangeDot_Dinamico_Input,1);













// Inserimento dei dati (Testo.txt) tramite input
//
//
function PrendeNomeFileDaInput(){

	NomeDelFileDaInput=document.getElementById("INPUT_NOME_FILE").value;

if(NomeDelFileDaInput!==""){	
	document.getElementById("INPUT_INSERITO").innerHTML=`File richiesto: `+`<b>`+NomeDelFileDaInput+`</b>`;


// Viene recuperato il file richiesto
//
//
	LaSceltaInterattivaDinamica = NomeDelFileDaInput;
	let DirectoryDove;   DirectoryDove="";
	let File_01; File_01=LaSceltaInterattivaDinamica;

// Viene aggiornato il file richiesto
//
//
	File_01 = DirectoryDove+File_01 + "?"+(new Date().getTime()) + (Math.random()) ;

// Il file richiesto viene passato
//
//
	let Richiedo_01 = new XMLHttpRequest(); 

Richiedo_01.open("GET",File_01,false);
Richiedo_01.onreadystatechange = function(){
let Trovato_01 = Richiedo_01.responseText;

TestoTrovatoDaLeggere =    Trovato_01;

document.getElementById("VISUALIZZA_TESTO").innerHTML=`${TestoTrovatoDaLeggere}`; 

} ; Richiedo_01.send();



	
}else{document.getElementById("INPUT_INSERITO").innerHTML=``};	
	
	

};
// PrendeNomeFileDaInput();

// setInterval(PrendeNomeFileDaInput, 1000);

EsegueIntervalPrendeNomeFileDaInput = setInterval(PrendeNomeFileDaInput, 3000);




// possibile selezione copia del testo
// bloccando interval si procede alla copia
function SI_COPY_(){
clearInterval(EsegueIntervalPrendeNomeFileDaInput);
EsegueIntervalPrendeNomeFileDaInput = null;

}
// si riattiva 
function NO_COPY_(){
EsegueIntervalPrendeNomeFileDaInput=setInterval(PrendeNomeFileDaInput,1000);

}

// esecuzione in automatico function timestampa
(function timestampa(){let timestampa=(new Date().getTime());document.getElementById("TIMESTAMPA_").innerHTML=timestampa;})();






// debug
//
//
/*
alert(" "
+" LarghezzaFinestra= "+   LarghezzaFinestra +" "
+" AltezzaFinestra  = "+   AltezzaFinestra   +" "

);

*/







// }; CONNESSIONE_SEMANTICA(arg00);

</script>
<!--
/\ SCRIPT !!
|| SCRIPT !!
|| SCRIPT !!
fin
-->

</main>

<div id="fine">crossorigin:avid3820725v026a586v026a1861311_app_connessione_semanticar__202305111915a</div>
</body>
</html>


