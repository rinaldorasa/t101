<!doctype html>
<html id="HTML" lang="it">


<head>
<meta charset="utf-8">
<meta name="generator" content="AlterVista - Editor HTML"/>



<title>

1835 23522 = hide_crusca_00_01_02

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





<!--
<script>
document.getElementById("HEADER").innerHTML=
`
<section id="UPDOWN">
<article>
<a      id="UP_"href="#">    &#47;&#92;</a><br>
<a      id="DW_"href="#fine">&#92;&#47;</a><br>
<button id="NOC_"onclick="NOC()">&#47;&#47;</button><br>
<button id="SIC_"onclick="SIC()">&#124;&#124;</button><br>
</article>
</section>


<section id="INSERISCE_il_nome_del_file_da_cercare">
  <input type="text" placeholder="Testo.txt" id="INPUT_NOME_FILE" value="Testo.txt" >
 
 <div id="INPUT_INSERITO">
 <div class="spinmin">&nbsp;</div>
 <div class="spinner">&nbsp;</div>
 </div>

</section>

`;


</script>
-->



<main id="MAIN">

<div id="VISUALIZZA_TESTO_00"></div>



</main>





<footer id="FOOTER">

<!-- PANNELLO_00 INI -->
<script>
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





<div id="TESTO_STILE_TOOLBOX"></div>



<script>
//
// Compattare 
//
//
document.getElementById("TESTO_STILE_TOOLBOX").innerHTML=
`
  <div id="TESTO_"></div>

  <div id="LIV_01_"></div>

  <div id="STILE_"></div>

  <div id="TOOLBOX_" >
    <button id="TOOLBOX_NO" onclick="TOOLBOX_NO()" style="position:fixed;bottom:0rem;right:0rem;color:red;  font-size:3.50rem;font-weight:bold;cursor:pointer;">!</button>
    <button id="TOOLBOX_SI" onclick="TOOLBOX_SI()" style="position:fixed;bottom:0rem;right:0rem;color:green;font-size:3.50rem;font-weight:bold;cursor:pointer;">!</button>
  </div>

  <header id="HEADER"></header>

`;

document.getElementById("HEADER").innerHTML=
`
<section id="UPDOWN">
<article>
<a      id="UP_"href="#">    &#47;&#92;</a><br>
<a      id="DW_"href="#fine">&#92;&#47;</a><br>
<button id="NOC_"onclick="NOC()">&#47;&#47;</button><br>
<button id="SIC_"onclick="SIC()">&#124;&#124;</button><br>
</article>
</section>


<section id="INSERISCE_il_nome_del_file_da_cercare">
  <input type="text" placeholder="Testo.txt" id="INPUT_NOME_FILE" value="Testo.txt" >
 
 <div id="INPUT_INSERITO">
 <div class="spinmin">&nbsp;</div>
 <div class="spinner">&nbsp;</div>
 </div>

</section>

`;




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
 let LetturaRange = document.getElementById("RANGER").value;
// Si adatta la lettura
// al dispositivo
//
Fonte=LetturaRange*0.05;
FontePerEsclamativo = LetturaRange*0.50;
//
// Il valore viene esportato
//
//
document.getElementById("STILE_").innerHTML=
 `
<style>

#LIV_01_{
position:fixed;
bottom:2rem;
left:0rem;

width:100%;
height:5rem;

border:solid 0.00rem red;

}



#TESTO_{
font-size:`+Fonte+`rem;
}


#RANGER{
width:100%;

display:none;
}

#VISUALIZZA_TESTO_00{
padding-left:`+( Fonte * 1.5 )+`rem;
padding-right:2.5rem;

font-size:`+Fonte+`rem;
}

#INPUT_NOME_FILE{
font-size:`+Fonte+`rem;

}



#UPDOWN  {
position:fixed;
top:0rem;right:0rem;
font-size:`+Fonte+`rem;
display:none;
}



#TOOLBOX_ {
position:fixed;
bottom:0rem; right:0rem;
font-size:2.25rem;
font-size:`+Fonte+`rem;

cursor:pointer;

}

#TOOLBOX_NO{font-size:`+FontePerEsclamativo+`rem;border:solid 0.15rem orange;}
#TOOLBOX_SI{font-size:`+FontePerEsclamativo+`rem;border:solid 0.15rem orange;}

#NOC_ , #SIC_ {font-size:`+Fonte+`rem;}

</style>
 
 `;


 
};
// LeggiRangeDot_Dinamico_Input();
setInterval(LeggiRangeDot_Dinamico_Input,1);


// Toolbox
// 
// 

function TOOLBOX_SI(){
document.querySelector("#UPDOWN").style.display="block";
document.querySelector("#RANGER").style.display="block";
document.getElementById("TOOLBOX_NO").style.display="block";
document.getElementById("TOOLBOX_SI").style.display="none";

};

function TOOLBOX_NO(){
document.querySelector("#UPDOWN").style.display="none";
document.querySelector("#RANGER").style.display="none";
document.getElementById("TOOLBOX_NO").style.display="none";
document.getElementById("TOOLBOX_SI").style.display="block";

};



</script>
<div id="fine"></div>
</footer>



</body>
</html>