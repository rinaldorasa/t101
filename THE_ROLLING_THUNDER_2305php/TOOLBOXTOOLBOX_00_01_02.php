<!doctype html>
<html id="HTML" lang="it">


<head>
<meta charset="utf-8">
<meta name="generator" content="AlterVista - Editor HTML"/>



<title>

1952 TT 23522 = TOOLBOXTOOLBOX_00_01_02

</title>
<link rel="icon" type="image/png" href="https://it.altervista.org/images/favicon/favicon-16x16.png" sizes="16x16"> 
<link    rel="stylesheet"    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"  />



<style>
html * {font-family:monospace;}



/* UTILITIES ini */
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

/* UTILITIES fin */

</style>



<script>
// rilevazione dispositivo
//
//

 DESKTOP_CHECK = 1 ;
 if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
 { DESKTOP_CHECK = 0 ; } else { DESKTOP_CHECK = 1 ; }

// rilevazione width height
// i valori possono variare
// a seconda del tipo di
// dispositivo
// 
 function LarghezzaRem(){ let Larghezza = window.innerWidth  / 16; return Larghezza;}
 function   AltezzaRem(){ let Altezza   = window.innerHeight / 16; return Altezza;}

Larghezza=LarghezzaRem();
Altezza  =AltezzaRem();

if(DESKTOP_CHECK === 0 ){

}
if(DESKTOP_CHECK === 1 ){

}


</script>

</head>

<body id="BODY">




<header id="HEADER">

<div id="FORM_per_inserimento_nome_file"><div class="spinmin" style="display:inline-block;">&nbsp;</div><span>FORM_per_inserimento_nome_file Attendere...</span></div>


<!-- PANNELLO_00 INI -->
<script>
document.getElementById("FORM_per_inserimento_nome_file").innerHTML=
`
<style>#FORM_per_inserimento_nome_file{position:static;top:0rem;left:0rem;}</style>
<section id="INSERISCE_il_nome_del_file_da_cercare">
  <input type="text" placeholder="Testo.txt" id="INPUT_NOME_FILE" value="Testo.txt" >
 
 <div id="INPUT_INSERITO">
 <div class="spinmin">&nbsp;</div>
 <div class="spinner">&nbsp;</div>
 </div>

</section>

`;




// Inserimento dei dati (Testo.txt) tramite input
//
//
function PrendeNomeFileDaInput_00(){

	NomeDelFileDaInput=document.getElementById("INPUT_NOME_FILE").value;
	


if(NomeDelFileDaInput!==""){	
	document.getElementById("INPUT_INSERITO").innerHTML=`File richiesto: `+`<b>`+NomeDelFileDaInput+`</b>`;


// Viene recuperato il file richiesto
//
//
	LaSceltaInterattivaDinamica = NomeDelFileDaInput;
	let DirectoryDove;   DirectoryDove="";
	let File_00; File_00=LaSceltaInterattivaDinamica;

// Viene aggiornato il file richiesto
//
//
	File_00 = DirectoryDove+File_00 + "?"+(new Date().getTime()) + (Math.random()) ;

// Il file richiesto viene passato
//
//
	let Richiedo_00 = new XMLHttpRequest(); 

Richiedo_00.open("GET",File_00,false);
Richiedo_00.onreadystatechange = function(){
let Trovato_00 = Richiedo_00.responseText;

TestoTrovatoDaLeggere =    Trovato_00;

document.getElementById("VISUALIZZA_TESTO_00").innerHTML=`${TestoTrovatoDaLeggere}`; 

} ; Richiedo_00.send();



	
}else{document.getElementById("INPUT_INSERITO").innerHTML=``};	
	
	

};
// PrendeNomeFileDaInput_00();

// setInterval(PrendeNomeFileDaInput_00, 1000);

EsegueIntervalPrendeNomeFileDaInput_00 = setInterval(PrendeNomeFileDaInput_00, 3000);

</script>
<!-- PANNELLO_00 FIN -->





<div id="LIV_01_"></div>
<div id="VALORE_di_FonteDinamica"></div>
<div id="APPLICAZIONE_del_range"></div>

<script>
// Definisce il range valori di input
// 
// 
function RangeDot_Dinamico_Input(){
 document.getElementById("LIV_01_").innerHTML=
 `

 <input id="RANGER" type="range" value="50" step="1" min="1" max="99">

 `;
}; 
RangeDot_Dinamico_Input() ;

// Legge i valori del range
// 
// 

function LeggiRangeDot_Dinamico_Input(){
// Prende il valore dal range
// 
// 
 let LetturaRange  = document.getElementById("RANGER").value;
 let FonteDinamica = (LetturaRange * 0.075) ;
 document.getElementById("VALORE_di_FonteDinamica").innerHTML=FonteDinamica;
 document.getElementById("APPLICAZIONE_del_range").innerHTML=
 `
 <style>
 #VISUALIZZA_TESTO_00{font-size:`+FonteDinamica+`rem;}
 </style>
 `;
};
// LeggiRangeDot_Dinamico_Input();
setInterval(LeggiRangeDot_Dinamico_Input,1);

</script>

</header>



<main id="MAIN">

<div id="VISUALIZZA_TESTO_00"><div class="spinmin" style="display:inline-block;">&nbsp;</div><span>VISUALIZZA_TESTO_00 Attendere...</span></div>

</main>





<footer>
<div id="fine"></div>
</footer>

</body>
</html>

