<script>
// function TheRollingThunderProject(){


/*

TheRollingThunderProject released 

16:43 28/07/2023




CBD_23728_0945a_vid3820725_V15__09_49_wip

*/


/* VARIABILI GLOBALI INI */
    DESKTOP_CHECK = 1 ; DESKTOP_CHECK = 0 ;
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) { DESKTOP_CHECK = 0 ; } else { DESKTOP_CHECK = 1 ; }

    function LarghezzaRem__(){let Larghezza__=window.innerWidth/16;return Larghezza__;} 
    function AltezzaRem__(){let Altezza__=window.innerHeight/16;return Altezza__;}
    
    Larghezza__=LarghezzaRem__();
    Altezza__=AltezzaRem__();

    FonteSizeStandard__=2.75*1.00; /* mobile first */
    FonteSizeStandard__=2.75*1.50; /* mobile first */ /* testing code */
/*  FonteSizeStandard__=2.75*0.50; */ /* mobile first */ /* testing for desktop */

    AppUpdated__=""; /* versione e aggiornamenti delle variabili */
    UnMilione__="1000000";
    UnMilioneUnoC__="1000100";





/* VARIABILI GLOBALI FIN */












/* DGEBI APP_UNO_DUE__ */
document.getElementById("APP_UNO_DUE__").innerHTML=
`
<style>
	.da_mo{background-color:inherit;color:inherit;}
</style>


<style>
    html * {font-size:auto;font-family:monospace;}
    ol { list-style: none; counter-reset: ColoreCounter__;}
    ol li { counter-increment: ColoreCounter__;}
    ol li::before { content: counter(ColoreCounter__) ". "; background-color:aqua;color: black;font-size:75%;border:solid 0.15rem aqua;border-radius: 100%;display:inline-block;}
    ol li::before { content: counter(ColoreCounter__) ". "; background-color:aqua;color: black;font-size:75%;border:solid 0.15rem aqua;border-radius: 20.0%;display:inline-block;}
        
    img{   margin:0 auto;  display: block;    max-width:100%;    max-height:100%;    width: auto;    height: auto;   } 
    
   
</style>


<style>
    /* UTILITIES ini */
    @keyframes spin{ 0%{transform:rotate(0deg);} 100% {transform:rotate(360deg);}}
    
    .spinner{width:48px;height:48px; width:2rem;height:2rem; border:solid 4px red; border:solid 0.25rem red; border:solid 0.25rem red; border:solid 0.25rem red; border-top:solid 4px black; border-top:solid 0.25rem transparent; background-color:transparent; border-radius:50%; overflow:none; animation: spin 1.5s linear infinite;}
    .spinmin_v0{width: 1.00rem;height:1.00rem;background-color:transparent;
    border:solid 0.175rem orange;border-top:solid 0.175rem transparent;border-radius:50%; display:inline-block;
    animation: spin 1.5s linear infinite;
    }
    .spinmin{width: 3.500rem;height:3.500rem;background-color:transparent;
    border:solid 1.75rem orange;border-top:solid 1.75rem transparent;border-radius:50%; display:inline-block;
    animation: spin 1.5s linear infinite;
    }
    
    
    @-webkit-keyframes blink { 0% {background: #222} 50% {background: lime} 100% {background: #222}}
    
    .cursore { background: lime; line-height: 17px; margin-left: 3px;
    -webkit-animation: blink 0.8s infinite; width: 7px; height: 15px;}
    
    /* UTILITIES fin */ 
    
</style>


<style>
	.configurazione_item__{
	margin-top:`+(FonteSizeStandard__*0.15)+`rem;
	margin-bottom:`+(FonteSizeStandard__*0.15)+`rem;
	}

</style>





<section>
	<article class="da_mo__"><div id="InizioDellaPagina__"></div></article>
</section>


<section id="CapopaginaBox__" class="da_mo__" style="border:solid 0.00rem maroon;display:none;">

    <article class="da_mo__" style="display:none;"><div id="COLORE_RANDOM__"></div></article>
    <article class="da_mo__" style="display:none;"><div id="VISUALIZZA_COLORE_RANDOM__"></div></article>





<!-- segnalazione se esiste setinterval -->
 <i  id="SEMAFORO_RANDOM__" onclick="TestoTxt()"  class="bi bi-stop-fill"  style=" position:fixed; top:`+(FonteSizeStandard__*0.00)+`rem; left:`+(FonteSizeStandard__*0.00)+`rem;background-color:inherit;"></i>







<!-- EDITOR opzione in primo evidenza -->
<!--
	Premendo questo bottone si attiva un editor
	di testo interattivo che scrive sul server
	caratterizzato da esecuzione di comandi html css
	php ... ESCLUDENDO JAVASCRIPT !!!
	
	In sostanza il programma principale è caratterizzato
	da una parte 
	1) default Testo.txt (gestita solamente da un editor del sistema operativo) (ROM) solo lettura
	2) editabile afile.txt (gestita dal programma) (RAM)anche scrittura
		p.s. il termine editor non rispecchia esattamente il senso di quello che
		succede al punto 2) poiché si tratta di aggiungere all inizio o alla fine
		un pezzo di testo che non può essere sottoposto a correzioni (twitter-like)
	3) Entrambi i file ROM RAM sono gestiti da INPUT_NOME_FILE__
-->

 <i  id="EDITOR_AFILE__" onclick="EditoreAppend()" class="bi bi-terminal-fill"  style=" position:fixed; top:`+(FonteSizeStandard__*0.00)+`rem; right:`+(FonteSizeStandard__*0.00)+`rem;background-color:inherit;background-color:orange; background-color:#BBE3C3; color:white;"></i>





<!-- 
EVIDENZIA UNA SERIE DI OPZIONI NASCOSTE
Il pannello definito in EvidenziaOpzioni() 
------------DEFINITO IN===================
-----------------------===================

-->

	<i  id="EVIDENZIA_OPZIONI__" onclick="EvidenziaOpzioni()" class="bi bi-gear"  style=" position:fixed; top:`+(FonteSizeStandard__*1.00)+`rem; right:`+(FonteSizeStandard__*0.00)+`rem;background-color:inherit;background-color:orange;background-color:#BBE3C3; color:white;"></i>
	<aside id="ContenitoreDelPannello__"></aside>



<!--
	RiquadroUno
-->
<aside id="RiquadroUno__" style="display:none;" class="animate__animated animate__backInDownTROUBLE">

<blockquote id="ContenutoDelRiquadroUno__">

<header onclick="ChiudiRiquadroUno()" id="HeaderContenutoDelRiquadroUno__" style="position:fixed;top:`+(FonteSizeStandard__*3)+`rem;left:`+(FonteSizeStandard__*1.75)+`rem; background-color:teal; color:white; border:solid 0.15rem aqua;">X</header>

<article>
<ol style="margin-top:`+(FonteSizeStandard__*1)+`rem;border:dotted 0.15rem red;">
<li><span style="background-color:white; color:black; font-size:`+(FonteSizeStandard__*0.25)+`rem;">CBD_23728_0945a_vid3820725_V15__09_49_wip</span></li>


</ol>


<ol>
<li><span id="VisualizzaColoreRandom__"></span></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
</ol>

</article>

</blockquote>

</aside>



<!--
	RiquadroDue
-->

<!-- -->
<aside id="RiquadroDue__" style="display:none;" class="animate__animated animate__backInDownTROUBLE">

<blockquote id="ContenutoDelRiquadroDue__">

<header onclick="ChiudiRiquadroDue()" id="HeaderContenutoDelRiquadroDue__" style="position:fixed;top:`+(FonteSizeStandard__*3)+`rem;left:`+(FonteSizeStandard__*1.75)+`rem; background-color:teal; color:white; border:solid 0.15rem aqua;">X</header>

<article>
<ol style="margin-top:`+(FonteSizeStandard__*1)+`rem;border:dotted 0.15rem red;">
<li><span style="background-color:white; color:black; font-size:`+(FonteSizeStandard__*0.25)+`rem;">CBD_23728_0945a_vid3820725_V15__09_49_wip</span></li>


</ol>

<ol>
<li><span id="VisualizzaColoreRandom__"></span></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
<li></li>
</ol>

</article>

</blockquote>

</aside>









<!-- NAVIGAZIONE INTERNA ALLA PAGINA -->
<!-- <i class="bi bi-chevron-double-up"></i>   -->
<!-- <i class="bi bi-chevron-double-down"></i> -->


<i  id="NAVIGAZIONE_INTERNA_ALLA_PAGINA_INI__" onclick="NavigazioneInternaAllaPaginaIni()" class="bi bi-chevron-double-up"  style=" position:fixed; top:`+(FonteSizeStandard__*3.00)+`rem; right:`+(FonteSizeStandard__*0.00)+`rem;background-color:inherit;background-color:#BBE3C3; color:white;"></i>
<i  id="NAVIGAZIONE_INTERNA_ALLA_PAGINA_FIN__" onclick="NavigazioneInternaAllaPaginaFin()" class="bi bi-chevron-double-down"  style=" position:fixed; top:`+(FonteSizeStandard__*4.00)+`rem; right:`+(FonteSizeStandard__*0.00)+`rem;background-color:inherit;background-color:#BBE3C3; color:white;"></i>





<article id="Inserisce_il_nome_del_file_da_cercare__">
    <input type="text" placeholder="Testo.txt" id="INPUT_NOME_FILE__" value="Testo.txt" class="centrato___ fs_standard___ no_bordi___"  style="background-color:white;color:black;font-family:monospace;border-radius:0.50rem;">
</article>

<article class="da_mo__" style="display:block; border:solid 0.00rem yellow;"><div id="RighelloInputRange__"></div>
</article> 



<article style="position:fixed;top:`+(FonteSizeStandard__*1.625)+`rem;left:0rem;border:solid 0.00rem red;">
<aside  id="StopAndGoSi__" onclick="CopySi()" >
<i class="bi bi-pause-btn-fill"></i>
</aside>
</article>

<article style="position:fixed;top:`+(FonteSizeStandard__*1.625)+`rem;left:0rem;border:solid 0.00rem red;">
<aside  id="StopAndGoNo__" onclick="CopyNo()"  style="display:none;">
<i class="bi bi-play-btn-fill"></i>
</aside>
</article>






</section>






<section id="VisualizzaCommento_01_Box__" class="da_mo__">    
    <article id="VisualizzaCommento_01__">
    
    <blockquote style="margin-top:-`+(FonteSizeStandard__*0.00)+`rem;font-size:`+(FonteSizeStandard__*1.00)+`rem;text-align:center;">
    <div class="spinmin">&nbsp;</div>
    <div id="RicercaFile__" style="font-size:`+(FonteSizeStandard__*0.25)+`rem;">RICERCA</div>
    </blockquote>
    
    </article>
</section>    




<section class="da_mo__">    
    <div id="SettaggiPerIlCommento_01__"></div>
 </section>    
    
    



<section>
    <article class="da_mo__"><div id="InAttesaDelFile__"></div></article>
    <article class="da_mo__"><div id="AppUnoDueUpdated__"></div></article>
</section>

<section>
	<article class="da_mo__"><div id="FineDellaPagina__"></div></article>
</section>


`;



/* FUNZIONI JS */
/* Quirk id="InAttesaDelFile__ NON ha document */ 
/* 
la FUNZIONE sostiuisce lo spinner in qualche modo 
element CapopaginaBox__ appare con uno spinner 
per un tempo di circa 3 secondi

*/
function InAttesaDelFile(){document.querySelector("#CapopaginaBox__").style.display="block";}; 
setTimeout(InAttesaDelFile, 3100)






/*  FUNZIONE JAVASCRIPT */
function CambiaColoreOgniSetInterval(){
    var LettereColoreRandom__ = '0123456789ABCDEF';
    var CreaColoreRandom__ = '#';
    var IColoreRandom__;
    for (IColoreRandom__ = 0; IColoreRandom__ < 6; IColoreRandom__++ ) {
    CreaColoreRandom__ = CreaColoreRandom__+LettereColoreRandom__[Math.round(Math.random() * 15)];
    };
    
/* esporta i valori */
    document.getElementById("COLORE_RANDOM__").innerHTML=
    `
<style>
    #SEMAFORO_RANDOM__{color:`+ CreaColoreRandom__ +`;}
    #VisualizzaColoreRandom__{color:`+ CreaColoreRandom__ +`;}
	
</style>

    `;
	
	document.getElementById("VisualizzaColoreRandom__").innerHTML=`<span>`+CreaColoreRandom__+`</span>`;
};









/*  FUNZIONE JAVASCRIPT */
function RighelloInputRange(){
    /* 20230701_1915a */

    DESKTOP_CHECK = 1 ; 
    DESKTOP_CHECK = 0 ;
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) { DESKTOP_CHECK = 0 ; } else { DESKTOP_CHECK = 1 ; }

    StileDiInputRange=`<div id="LIVELLO_RANGE_01__" style="margin-top:`+(FonteSizeStandard__*1.000*0.150)+`rem; border:solid 0.00rem yellow;"></div>`;
    
    if(DESKTOP_CHECK===1){StileDiInputRange=`<div id="LIVELLO_RANGE_01__" style="margin-top:`+(FonteSizeStandard__*0.250)+`rem;"></div>`;}else{}

    document.getElementById("RighelloInputRange__").innerHTML=`${StileDiInputRange}`;
    
        function RangeDot_Dinamico_Input(){
        
        ValoreInizialeRange__=25;   
        if(DESKTOP_CHECK===1){ValoreInizialeRange__=(ValoreInizialeRange__*0.500);}else{}

/*  ProprietaInput__=`id="RANGER__" type="range" value="`+ValoreInizialeRange__+`" step="1" min="1" max="99"  class="centrato___" style="margin-left:12.5%;width:75%; border:solid 0.00rem yellow;"`;  */

          ProprietaInput__=`id="RANGER__" type="range" value="`+ValoreInizialeRange__+`" step="1" min="0" max="99"  class="centrato___" style="margin-left:12.5%;width:75%; border:solid 0.00rem yellow;"`;
        

        document.getElementById("LIVELLO_RANGE_01__").innerHTML=`<input ${ProprietaInput__}  >   `;
        
        }; 
        RangeDot_Dinamico_Input();
    
};
RighelloInputRange();

/*  FUNZIONE JAVASCRIPT */
function LeggiRangeDot_Dinamico_Input(){
LetturaRange__=document.getElementById("RANGER__").value;
FonteDinamica__=(LetturaRange__*0.075).toFixed(2);





AggiornareVisualizzaTesto_01__=`<style>#VisualizzaCommento_01__{font-size:`+(FonteDinamica__*1.00)+`rem!important; border:solid 0.00rem red;} #VisualizzaCommento_01__ > xmp{/* inline-size: auto; overflow-wrap: break-word;  white-space: pre-wrap;  white-space: -moz-pre-wrap;  white-space: -pre-wrap;  white-space: -o-pre-wrap;  word-wrap: break-word;  */} #area_immissione_testo__{height:`+(FonteDinamica__*5.00)+`rem!important;} </style>`;




document.getElementById("SettaggiPerIlCommento_01__").innerHTML=
`
${AggiornareVisualizzaTesto_01__}

`;

};
setInterval(LeggiRangeDot_Dinamico_Input,1);










/*    *******************************************
    *******************************************
    Richiede il file da leggere il cui nome
    dipende da input text INPUT_NOME_FILE__
    
    Questo richiesta Ã¨ il nucleo del programma
    
*/
/*  FUNZIONE JAVASCRIPT */
function PrendeNomeFileDaInput_01(){



NomeDelFileDaInput__=document.getElementById("INPUT_NOME_FILE__").value;


CambiaColoreOgniSetInterval();

/*
document.getElementById("VisualizzaNomeDelFile__").innerHTML=`${NomeDelFileDaInput__}`;

*/


if(NomeDelFileDaInput__!==""){


DirectoryDove_File_01__="";
File_01__=NomeDelFileDaInput__;
UltimoAggiornamento__=new Date();

File_01__ = DirectoryDove_File_01__+File_01__ + "?"+(new Date().getTime()) + (Math.random()) ; 
Richiedo_01__ = new XMLHttpRequest();

Richiedo_01__.open("GET",File_01__,false);
Richiedo_01__.onreadystatechange = function(){
Trovato_01__ = Richiedo_01__.responseText;


/* la faccina ascii art */
SpinnerVirtuale__="<div><div style='background-color:orange;color:black;font-size:1.500rem!important; display:inline-block;  border-radius:50%; '>&#58;&#41;</div></div>";
document.getElementById("VisualizzaCommento_01__").innerHTML=
`

${Trovato_01__}

${SpinnerVirtuale__}

`;

} ; Richiedo_01__.send();



} else { 
/*
 alert("Nome del file vuoto!");
*/
  }






};
EsegueIntervalPrendeNomeFileDaInput_01__ = setInterval(PrendeNomeFileDaInput_01, 3000);

function CopySi(){
clearInterval(EsegueIntervalPrendeNomeFileDaInput_01__);EsegueIntervalPrendeNomeFileDaInput_01__=null;

document.querySelector("#StopAndGoSi__").style.display="none";
document.querySelector("#StopAndGoNo__").style.display="block";
/* alert("CopySi()"); */
}

function CopyNo(){
EsegueIntervalPrendeNomeFileDaInput_01__ = setInterval(PrendeNomeFileDaInput_01, 3000);

document.querySelector("#StopAndGoSi__").style.display="block";
document.querySelector("#StopAndGoNo__").style.display="none";
/* alert("CopyNo()"); */
}



function TestoTxt(){ 
document.querySelector("#INPUT_NOME_FILE__").value="Testo.txt";

}

function EditoreAppend(){ /* alert("Invia_Textarea.php"); */
document.querySelector("#INPUT_NOME_FILE__").value="Invia_Textarea.php";

}





function EvidenziaOpzioni(){  /* alert("EvidenziaOpzioni");  */
/* document.querySelector("#ContenitoreDelPannello__").value="Invia_Textarea.php"; */

document.getElementById("ContenitoreDelPannello__").innerHTML=
`
<i id="InterruttoreUno__" onclick="ApriRiquadroUno()" class="bi bi-1-square"></i><br>
<i id="InterruttoreDue__" onclick="ApriRiquadroDue()" class="bi bi-2-square"></i><br>

<!--
<i class="bi bi-3-square"></i><br>
<i class="bi bi-4-square"></i><br>
-->

<i id="InterruttoreSpegniTutto__" onclick="SpegniTutto()" class="bi bi-tools"></i><br>


`;



}

/* ----------- */
/* RiquadroUno */
function ApriRiquadroUno(){
document.querySelector("#RiquadroUno__").style.display="block";
document.querySelector("#InterruttoreUno__").style.backgroundColor="initial";
document.querySelector("#InterruttoreUno__").style.color="green";

/* chiudi Due */
document.querySelector("#RiquadroDue__").style.display="none";
document.querySelector("#InterruttoreDue__").style.backgroundColor="initial";
document.querySelector("#InterruttoreDue__").style.color="initial";


}

function ChiudiRiquadroUno(){
document.querySelector("#RiquadroUno__").style.display="none";
document.querySelector("#InterruttoreUno__").style.backgroundColor="initial";
document.querySelector("#InterruttoreUno__").style.color="initial";

}


/* ----------- */
/* RiquadroDue */
function ApriRiquadroDue(){
document.querySelector("#RiquadroDue__").style.display="block";
document.querySelector("#InterruttoreDue__").style.backgroundColor="initial";
document.querySelector("#InterruttoreDue__").style.color="green";

/* chiudi Uno */
document.querySelector("#RiquadroUno__").style.display="none";
document.querySelector("#InterruttoreUno__").style.backgroundColor="initial";
document.querySelector("#InterruttoreUno__").style.color="initial";


}

function ChiudiRiquadroDue(){
document.querySelector("#RiquadroDue__").style.display="none";
document.querySelector("#InterruttoreDue__").style.backgroundColor="initial";
document.querySelector("#InterruttoreDue__").style.color="initial";


}

function SpegniTutto(){
/* InterruttoreSpegniTutto__ */
document.querySelector("#InterruttoreUno__").style.display="none";
document.querySelector("#InterruttoreDue__").style.display="none";
document.querySelector("#RiquadroUno__").style.display="none";
document.querySelector("#RiquadroDue__").style.display="none";
document.querySelector("#InterruttoreSpegniTutto__").style.display="none";



}




function NavigazioneInternaAllaPaginaIni(){  
/* alert("NavigazioneInternaAllaPaginaIni");  */
/*
document.querySelector("#INPUT_NOME_FILE__").value="Invia_Textarea.php";
*/
 VaInizio__ = document.getElementById("InizioDellaPagina__").offsetTop; window.scrollTo(0, VaInizio__);

}

function scrollToBottom() {
  window.scrollTo(0, document.documentElement.scrollHeight);
}

function NavigazioneInternaAllaPaginaFin(){  
/* alert("NavigazioneInternaAllaPaginaFin");  */

window.scrollTo(0, document.documentElement.scrollHeight);

}

function FullPaginaSi(){
/* alert("FullPaginaSi"); */
document.querySelector("#CapopaginaBox__").style.display="block";
}

function FullPaginaNo(){
/* alert("FullPaginaNo"); */
document.querySelector("#CapopaginaBox__").style.display="none";
}




function GoTop(){ VaInizio__ = document.getElementById("InizioDellaPagina__").offsetTop; window.scrollTo(0, VaInizio__) }; GoTop();  

function AppUpdated(arg0__){ 
							/*

							variabili
							=========
							
							DESKTOP_CHECK
							Larghezza__
							Altezza__
							FonteSizeStandard__
							FonteAppUpdated__
							AltezzaCapopaginaBox__
							MargineDestroVisualizza_01_Box__
							MargineSinistroVisualizza_01_Box__
							AppUpdated__
							UnMilione__
							
							
							
							id
							=========
							BODY__
							APP_UNO_DUE__
							fine__
							
							AppUnoDueUpdated__
							CapopaginaBox__
							VisualizzaNomeDelFile__
							VISUALIZZA_COLORE_RANDOM__
							VisualizzaCommento_01_Box__
							VisualizzaCommento_01__
							area_immissione_testo__
							
							

							COLORE_RANDOM__
							VISUALIZZA_COLORE_RANDOM__
							VisualizzaColoreRandom__
							
							INPUT_NOME_FILE__
							RighelloInputRange__

StopAndGoSi__
StopAndGoNo__
SEMAFORO_RANDOM__
Inserisce_il_nome_del_file_da_cercare__
EDITOR_AFILE__
EVIDENZIA_OPZIONI__



ContenitoreDelPannello__
InterruttoreUno__
InterruttoreDue__
InterruttoreSpegniTutto__

RiquadroUno__
ContenutoDelRiquadroUno__
HeaderContenutoDelRiquadroUno__

RiquadroDue__
ContenutoDelRiquadroDue__
HeaderContenutoDelRiquadroDue__




InizioDellaPagina__
  FineDellaPagina__
  
 FullPaginaSi__
 FullPaginaNo__

							*/







    /* alert(DESKTOP_CHECK+" "+FonteSizeStandard__); */
    
    FonteAppUpdated__=(FonteSizeStandard__*0.50);

    AltezzaCapopaginaBox__=(FonteSizeStandard__*(2.50+0.25)); /* DEFAULT */
    AltezzaCapopaginaBox__=(FonteSizeStandard__*(3.50+0.25)); /* revised 2023071920 */

    AltezzaCapopaginaBox__=(FonteSizeStandard__*(2.50+0.25)); /* DEFAULT */



    MargineDestroVisualizza_01_Box__=(FonteSizeStandard__*1.50);
    MargineSinistroVisualizza_01_Box__=(FonteSizeStandard__*1.50);
    
    
    /* alert("FonteAppUpdated__ = "+FonteAppUpdated__); */
    
    if(DESKTOP_CHECK===1){FonteAppUpdated__=FonteAppUpdated__*0.500;}else{FonteAppUpdated__=FonteAppUpdated__*0.950;}
    
    
    AppUpdated__=`
    <style>
	#BODY__{border:dashed 0.00rem rgba(253,72,0,0.25);}
	#fine__{background-color:#BBE3C3; color:#FFFFFF; font-size:`+FonteAppUpdated__+`rem;border:solid 0.00rem purple;}</style>

<div id="FullPaginaSi__" onclick="FullPaginaSi()"  style="background-color:#BBE3C3;color:#FFFFFF;font-size:`+FonteAppUpdated__+`rem;">&#61;CBD_23728_0945a_vid3820725_V15__09_49_wip&#61;
	</div>
<div id="FullPaginaNo__" onclick="FullPaginaNo()"  style="background-color:#BBE3C3;color:#BBE3C3;font-size:`+FonteAppUpdated__+`rem;opacity:0.25;">&#61;CBD_23728_0945a_vid3820725_V15__09_49_wip&#61;
	</div>


    `; 




/* DGEBI AppUnoDueUpdated__ */

    document.getElementById("AppUnoDueUpdated__").innerHTML=
`

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" >



<style>    

html * {font-family: "PT Mono",monospace;}
html * {word-break:break-all;}


button{font-size:`+(FonteSizeStandard__*0.50)+`rem; border-radius:0.50rem;}


.pre {

    inline-size: auto;
    overflow-wrap: break-word;
    
    border:solid 0.15rem green;
}

.pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
}







xmp {

	inline-size: auto; inline-size: auto;
    overflow-wrap: break-word;
    
    border:solid 0.00rem magenta;

 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
}









#CapopaginaBox__{
position:fixed;
top:0rem; left:0rem;


width:100%;
height:`+AltezzaCapopaginaBox__+`rem;

background-color:white!important;
color:black!important;


font-size:`+(FonteSizeStandard__)+`rem;

border-bottom:solid 0.15rem maroon!important;

z-index:`+UnMilione__+`;
}

#VisualizzaNomeDelFile__{
font-size:`+(FonteSizeStandard__)+`rem;

}

#VISUALIZZA_COLORE_RANDOM__{
font-size:`+(FonteSizeStandard__*0.50)+`rem;
visibility:hidden;
}



#VisualizzaCommento_01_Box__{

margin-top:`+(AltezzaCapopaginaBox__*1.50)+`rem;
margin-right:`+(MargineDestroVisualizza_01_Box__)+`rem;
margin-bottom:`+(AltezzaCapopaginaBox__*1.00)+`rem;
margin-left:`+(MargineSinistroVisualizza_01_Box__)+`rem;


border:solid 0.000rem fuchsia;
border-top:solid 0.015rem fuchsia;

overflow:auto!important;
}


#VisualizzaCommento_01__{

}

#Inserisce_il_nome_del_file_da_cercare__{

}


#INPUT_NOME_FILE__{
margin-left:12.25%;
width:75%;
background-color:white!important;color:black!important;
font-size:`+(FonteSizeStandard__*1.00)+`rem;
font-family:"PT Mono", monospace!important;
}

#StopAndGoSi__, #StopAndGoNo__{font-size:`+(FonteSizeStandard__*1.00)+`rem;}
#StopAndGoSi__{color:red; }
#StopAndGoNo__{color:green;}}

#SEMAFORO_RANDOM__{
}

#EDITOR_AFILE__{}
#area_immissione_testo__{}




#EVIDENZIA_OPZIONI__{}

#ContenitoreDelPannello__{
position:fixed; 
top:`+(FonteSizeStandard__*3)+`rem; 
left:0; 

border:solid 0.15rem red;
border:solid 0.00rem red;

}


#RiquadroUno__{
position:fixed;
top:`+(FonteSizeStandard__*3.00)+`rem;
left:`+(FonteSizeStandard__*1.5)+`rem;

/* width:`+(FonteSizeStandard__*8)+`rem; */
width:`+( (Larghezza__) - (FonteSizeStandard__*3.125) )+`rem;
height:`+(FonteSizeStandard__*4)+`rem; 
height:`+( (Altezza__*0.75) - (FonteSizeStandard__*3.25) )+`rem;


background-color:white;
color:black;

 font-size:`+(FonteSizeStandard__*0.50)+`rem;  

border:dashed 0.00rem yellow;

box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;

/*
inline-size: auto; inline-size: auto;
    overflow-wrap: break-word;
*/

overflow:auto!important;

}

#ContenutoDelRiquadroUno__{
	inline-size: auto; inline-size: auto;
    overflow-wrap: break-word;
	
}

#HeaderContenutoDelRiquadroUno__{}



#RiquadroDue__{
position:fixed;
top:`+(FonteSizeStandard__*3.00)+`rem;
left:`+(FonteSizeStandard__*1.5)+`rem;

/* width:`+(FonteSizeStandard__*8)+`rem; */
width:`+( (Larghezza__) - (FonteSizeStandard__*3.125) )+`rem;
height:`+(FonteSizeStandard__*4)+`rem; 
height:`+( (Altezza__*0.75) - (FonteSizeStandard__*3.25) )+`rem;


background-color:white;
color:black;

 font-size:`+(FonteSizeStandard__*0.50)+`rem;  

border:dashed 0.00rem yellow;

box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;


/*
inline-size: auto; inline-size: auto;
    overflow-wrap: break-word;
*/

overflow:auto!important;

}

#ContenutoDelRiquadroDue__{
	inline-size: auto; inline-size: auto;
    overflow-wrap: break-word;
	
}

#HeaderContenutoDelRiquadroDue__{}


#InterruttoreSpegniTutto__{
background-color:orange;
background-color:#BBE3C3;

color:purple;
color:white;

font-size:`+(FonteSizeStandard__ * 0.75)+`rem;
font-size:`+(FonteSizeStandard__ * 1.00)+`rem;


border-radius:`+ (FonteSizeStandard__ * 0.00) +`rem;

}




</style>    


${AppUpdated__}`;
    
    
}; AppUpdated("AppUpdated(arg0__)");





// }; TheRollingThunderProject();
</script>
