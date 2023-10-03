

<script>
function PopUpSplot(){

// read file 
CercaALFA="htm_wippy.txt"+"?"+Math.random();
TrovaALFA=new XMLHttpRequest();
TrovaALFA.open("GET",CercaALFA,false);
TrovaALFA.onreadystatechange=function(){
TROVATO_ALFA__= TrovaALFA.responseText;
document.getElementById("VISUALIZZA_TROVATO_ALFA__").innerHTML=TROVATO_ALFA__; 
}; TrovaALFA.send();



// menu 
document.getElementById("SPLOT_INNER_").innerHTML=
`
<style>
#BODY{visibility:hidden;}
#SPLOT_INNER_{visibility:visible;}

#LEGGI_DINA_INPUT_PAGE_00__{top:${FontSizeStandard__*3.00}rem; visibility:visible;}

#BOTTOM_BUG{margin-top:-10rem;background-color:white!important;color:black!important;visibility:visible!important;}

#READ_INPUT_DINAMICO_LotX{margin-top:-10rem;background-color:white!important;color:white!important;}

#BYE_SPLOT_ICO, #SPLOT_INI, #SPLOT_FIN, #GO_SPLOT_ICO, #STOP_SPLOT_ICO{font-size:${FontSizeStandard__}rem;}

#VISUALIZZA_TROVATO_ALFA__{margin-top:${FontSizeStandard__*0.00}rem; border:solid 0.15rem fuchsia;}

</style>

<article STYLE="POSITION:FIXED; TOP:0REM; RIGHT:0REM; WIDTH:100%; BACKGROUND-COLOR:WHITE; COLOR:BLACK; border-bottom:solid 0.15rem blue; VISIBILITY:VISIBLE;"> 
<div style="text-align:center;">
<a href="index.html"><i  id="BYE_SPLOT_ICO" style="margin-right:${FontSizeStandard__*0.75}rem" class="bi bi-box-arrow-in-left"></i></a> 

<a id="SPLOT_INI" href="#">&#5123;</a>
<a id="SPLOT_FIN" href="#fine">&#5121;</a> 
<span>

<button id="STOP_SPLOT" onclick="STOP_SPLOT()" style="background-color:transparent; border:solid 0.00rem transparent;"><i  id="STOP_SPLOT_ICO" class="bi bi-sign-stop" style="color:red;"></i></button>


<a id="SPLOTEX_INNER__" href="${ArchivioSplotAttivo}" style="margin-left:${FontSizeStandard__*0.75}rem; border-width:0rem;"><i style="font-size:${FontSizeStandard__}rem;" class="bi bi-book"></i></a>


<aside>
<input id="INPUT_DINAMICO_LotX" type="password" style="background-color:transparent; color:transparent; font-size:${FontSizeStandard__*0.5}rem; border:solid 0.25rem blue;">
</aside>
</span>
</div>
<div id="DEPOSITATO_ValoreLotX" style="background-color:transparent; color:transparent;"></div>
<div id="SETTAGGI_SPLOT__"></div>
</article>



`;


// quality control
function LeggiInput_LotX(){
	
ValoreLotX=document.getElementById("INPUT_DINAMICO_LotX").value;

document.getElementById("DEPOSITATO_ValoreLotX").innerHTML=ValoreLotX;


// decifrazione testo:
// per la lettura usare
// il pulsante STOP

if(ValoreLotX===LotX__){  
document.getElementById("SETTAGGI_SPLOT__").innerHTML=
`
<style>
#INPUT_DINAMICO_LotX{display:none;}
#LEGGI_DINA_INPUT_PAGE_00__{top:${FontSizeStandard__*1.50}rem; visibility:visible; z-index:3000;}

</style>
`;



// decifrazione del testo


//
// ALFA is il documento cifrato
// SEPA is il separatore
// 

ALFA = document.getElementById("VISUALIZZA_TROVATO_ALFA__").textContent;

SEPA='U2FsdGVkX1';

//
// esegue lo split
//
SPLITWORDS = ALFA.split(SEPA);

LENGTH_SPLITWORDS__ = SPLITWORDS.length;

document.getElementById("VEDI_LO_SPLITWORDS").innerHTML=`Lunghezza SPLITWORDS= ${LENGTH_SPLITWORDS__}  ${SPLITWORDS[0]}`;




LENGTH_SPLITWORDS__ = SPLITWORDS.length;

RESTORE_SPLIT_WORDS=[""];

  for(n=0; n<LENGTH_SPLITWORDS__; n++){
		
    RESTORE_SPLIT_WORDS[n]=SEPA+SPLITWORDS[n];
    
};

document.getElementById("ID_RESTORE_SPLIT_WORDS").innerHTML=
RESTORE_SPLIT_WORDS;

PASSWORD__=ControlloX__; 

/* */

DEC_RESTORE_SPLIT_WORDS=[""];

PLAINTEXT=[""];

for(n=0; n<RESTORE_SPLIT_WORDS.length; n++){
cifrato=RESTORE_SPLIT_WORDS[n];
decifrato = CryptoJS.AES.decrypt(cifrato.toString(), PASSWORD__);
plaintext = decifrato.toString(CryptoJS.enc.Utf8);
PLAINTEXT[n]=plaintext;
 };
RISULTATO=[""];	 
for(n=1;n<(PLAINTEXT.length); n++){
RISULTATO[n]=PLAINTEXT[n].trim()+" ";
};
TextIs="";
for(conta=1;conta<RISULTATO.length;conta++)
{  TextIs =  TextIs + RISULTATO[conta].toString();}


document.getElementById("ID_DISPLAY_ONLY_PLAIN_WORDS").innerHTML=
`
${TextIs}

`;





 }; // if



};
EseguiLeggiInput_LotX=setInterval(LeggiInput_LotX,250);






}; // da eseguire once

function STOP_SPLOT(){
// alert("STOP_SPLOT");

clearInterval(EseguiLeggiInput_LotX);

};



function GO_SPLOT(){
// alert("GO_SPLOT");

};


</script>



