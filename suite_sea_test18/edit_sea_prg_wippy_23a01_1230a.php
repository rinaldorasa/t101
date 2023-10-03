<!doctype html> 
<html lang="it" id="HTML"> 
 
<head> 
<meta charset="utf-8"> 
 
<title> 


%%O - R17




edit_sea_prg_php_w_17_wippy_23a01_1230a

</title>
<?php 
 
// elenco dei file esterni 

$links_top_v15="./phpapp/links_top_v15.php"; // link CND top pagina

$links_bottom_v15="./phpapp/links_bottom_v15.php"; // link CND bottom pagina

$rolling_dot_in_front_page="./phpapp/rolling_dot_in_front_page.php"; // slider dinamico

$copia_in_clipboard="./phpapp/copia_in_clipboard.php"; // clipboard copy and past jQuery

$aespla="./phpapp/aespla.php"; // testo cifrato
 
$csrftoken="./phpapp/csrftoken.php"; // controllo quality

$post_testo_save="./phpapp/post_testo_save.php"; // salva il testo

$pop_up_splot="./phpapp/pop_up_splot.php"; // legge il testo salvato // non funziona!!!



?>







<?php include($links_top_v15); ?> <!-- bootstrap5 bootstrap icons jQuery -->

<style>
html * {font-family: "PT Mono",monospace;} 
html * {word-break:break-all;} 
 
.preserve_break{
 inline-size: auto;
    overflow-wrap: break-word;
    border:solid 0.00rem gray;
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */ 
}  
  

.preverve_break{
 inline-size: auto;
    overflow-wrap: break-word;
    border:solid 0.00rem gray;
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */ 
}  


</style>


<script>FontSizeStandard__=4.75*1.25;</script> 


<!-- detect device -->
<script>
DESKTOP=-1;
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{ //  MOBILE  MOBILE  MOBILE  MOBILE  MOBILE  MOBILE
var DESKTOP = 0 ; 
// alert("TABLET");

FontSizeStandard__=(FontSizeStandard__*1.00);

} 
else
{ // DESKTOP  DESKTOP DESKTOP DESKTOP  DESKTOP DESKTOP

var DESKTOP = 1 ;
// alert("DESKTOP");

FontSizeStandard__=(FontSizeStandard__*0.50);

};

if((DESKTOP)===(-1)){FontSizeStandard__=(FontSizeStandard__*1.00);}else{};

</script>










<script>

FlagForAES="YES";

ArchivioFiles = [""]; 
 
ArchivioFiles[0] = "edit_sea_prg_w.php"; 
ArchivioFiles[1] = "edit_sea_prg_wippy.php"; 
 
ArchivioAttivo = ArchivioFiles[1]  ; // scelto un elemento array 


ArchivioSplot=[""];
ArchivioSplot[0]="SPLOTv17.php";

ArchivioSplotAttivo=ArchivioSplot[0];


</script>

</head> 

<body id="BODY">
<!-- si converte var php in var js --> 
<?php include("X__.php"); ?> 
<script> ControlloX__ = <?php echo json_encode($X__); ?>; </script> 
<? include("Lot.php"); ?>
<script> LotX__ = <?php echo json_encode($Lot); ?>; </script>


<header id="HEADER">

<div style="position:fixed; bottom:0rem; right:0rem; font-variant:small-caps;">
edit_sea_prg_php_w_17_wippy_23a01_1230a


</div>

<!-- rolling dot della front page -->
<div ID="LEGGI_DINA_INPUT_PAGE_00__"></div> <!-- modello rolling dot  --> 
<!-- <div ID="TEST_RANGE00__"></div> --> <!-- solo esempio di app style non cambia niente --> 
<div id="ATTIVA_STILI_PAGE_00__"></div> <!-- passaggio di style  --> 
 

<!-- rolling_dot_in_front_page (slider) -->
<?php include($rolling_dot_in_front_page); ?> 

</header>


<main id="MAIN">



<article id="TEXTAREA_UNDER_ROLLING_DOT">
<div id="FORM_X_PAG_00__"></div>
</article>


<!-- variabile link file splot esterno -->
<?php $ArchivioSplotPHP="SPLOTv17.php"; ?> 


<!-- controllo csrf -->
<?php include($csrftoken); ?> 

<!-- sea -->
<?php include($aespla); ?> 


<!-- post testo e salva -->
<?php include($post_testo_save); ?>


</main>


<footer id="FOOTER">

<div id="SETTAGGI__"></div>
<script>
Larghezza_Finestra = (window.innerWidth/16 ); 
Altezza_Finestra = (window.innerHeight/16);

document.getElementById("SETTAGGI__").innerHTML= 
` 
<style>
#HEADER{}


#SUBMIT_PER_TESTO_DINAMICO__{ 
position:fixed;
top:0%; 
right:0rem; 

background-color:green; 
color:white; 
border-radius:0.50rem;

z-index:2000;
}


#LEGGI_DINA_INPUT_PAGE_00__{
position:fixed; 
top:${FontSizeStandard__*1.50}rem;
left:0rem;
width:100%;
background-color:transparent;

}


#Contenitore_TEXTAREA_INIZIALE__{ 
margin-left:`+(Larghezza_Finestra*0.0000)+`rem; 
padding-top:${FontSizeStandard__*1.25}rem; 
padding-top:${FontSizeStandard__*1.75}rem; // aumentato per lasciare posto a rooling dot

width:`+(Larghezza_Finestra*0.95)+`rem; 
height:`+(Altezza_Finestra*0.750)+`rem; } 
 
#Scrivere_in_TEXTAREA_INIZIALE__{ 
margin-left:`+(Larghezza_Finestra*0.0250)+`rem; 
padding-top:0.50rem; width:`+(Larghezza_Finestra*0.95)+`rem; 
height:`+(Altezza_Finestra*0.750)+`rem; } 
 
#Scrivere_in_TEXTAREA_INIZIALE__{ } 
 
#Scrivere_in_TEXTAREA_INIZIALE__{ 

border-radius:0.50rem;
overflow:auto; 

border:solid 0.15rem navy; 

} 
 


#RSPLOTV_A__{
position:fixed;
top:0rem;
left:0rem;
background-color:white; 
color:blue; 

font-size:${FontSizeStandard__}rem;

border-radius:0.00rem;

z-index:2000;


}

#SPLOTEX_A__{
position:fixed;
top:0rem;
left:${FontSizeStandard__*1.5}rem;
background-color:white; 
color:blue; 

font-size:${FontSizeStandard__}rem;

border-radius:0.00rem;

z-index:2000;


}


/* ancoraggi inizio fine file */
#SPLOT_INI:hover{background-color:blue; color:white;}
#SPLOT_FIN:hover{background-color:blue; color:white;}


#ID_DISPLAY_ONLY_PLAIN_WORDS{padding-left:${FontSizeStandard__}rem; padding-right:${FontSizeStandard__}rem;}



/* shield */

#ICO_APPROVE_A__{position:static; top:0rem; left:50%; color:green; font-size:${FontSizeStandard__*0.25}rem; display:block;}
#ICO_REJECT_A__{position:fixed; top:0rem; left:50%; color:red; font-size:${FontSizeStandard__}rem;}



#CONTENITORE_GO_STOP_SPLOT__{
position:static; top:0rem; right:0rem;


#STOP_SPLOT{background-color:white;}
#STOP_SPLOT_ICO{background-color:white;}


}


</style>

`;




function QuestoFormPag00(){
document.getElementById("FORM_X_PAG_00__").innerHTML= 
`
<form action="${ArchivioAttivo}" method="POST" style="border:solid 0.00rem aqua;">

<article  id="Contenitore_TEXTAREA_INIZIALE__"> 
<textarea id="Scrivere_in_TEXTAREA_INIZIALE__" name="IMMISSIONE_TESTO_DINAMICO__"></textarea> 
<textarea id="RILETTO_VALORE" name="IMMISSIONE_TESTO_DINAMICO__"></textarea>

</article> 

<input type="hidden" name="csrfToken" value="<?php echo $_COOKIE['csrfToken']; ?>">

<button  onclick="refreshPage()" id="SUBMIT_PER_TESTO_DINAMICO__" type="submit"> <i style="font-size:${FontSizeStandard__}rem;" class="bi bi-chat-left-text"></i></button>  
</form>
`;

}; 
QuestoFormPag00();


function Leggi_Testo_TEXTAREA_INIZIALE__(){ 
Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__ = 
document.getElementById("Scrivere_in_TEXTAREA_INIZIALE__").value; 
 
return Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__; 
}; 
// callback 
Esegui_setInterval_Leggi_Testo_TEXTAREA_INIZIALE__ = setInterval(Leggi_Testo_TEXTAREA_INIZIALE__,1); 

function RiLettoValore_(){
// inizializzazione
RiLettoValore=Leggi_Testo_TEXTAREA_INIZIALE__(); 




// controlla se textarea vuota
// se vuota non fare cifratura
// 

if(RiLettoValore===""){  }else{

Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__=RiLettoValore;



// eseguire un controllo per < > " ' `
// con relative sostituzioni dei caratteri
// originali con simili unicode (hacking)

let textLESS = Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__;
// let resultLESS = textLESS.replace(/</gi, "ᐸ"); // 5176
let resultLESS = textLESS.replace(/</gi, "&#5176;"); // 5176
Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__=resultLESS;

let textGREATER = Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__;
// let resultGREATER = textGREATER.replace(/>/gi, "ᐳ"); // 5171
let resultGREATER = textGREATER.replace(/>/gi, "&#5171;"); // 5171
Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__=resultGREATER;
 
let text_VIRGOLETTE_DOPPIE = Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__;
// let result_VIRGOLETTE_DOPPIE = text_VIRGOLETTE_DOPPIE.replace(/"/gi, "❞"); // ❞ &#10078; // 10078
let result_VIRGOLETTE_DOPPIE = text_VIRGOLETTE_DOPPIE.replace(/"/gi, "&#10078;"); // ❞ &#10078; // 10078
Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__=result_VIRGOLETTE_DOPPIE;
 
let text_VIRGOLETTE_SINGOLE = Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__;
// let result_VIRGOLETTE_SINGOLE = text_VIRGOLETTE_SINGOLE.replace(/'/gi, "❜"); // ❜ &#10076; // 10076
let result_VIRGOLETTE_SINGOLE = text_VIRGOLETTE_SINGOLE.replace(/'/gi, "&#10076;"); // ❜ &#10076; // 10076
Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__=result_VIRGOLETTE_SINGOLE;








if (FlagForAES==="YES"){
	
	// Encrypt 
	var ciphertext = CryptoJS.AES.encrypt(Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__, ControlloX__); 
	testocifrato__=ciphertext; 
	
	// Decrypt 
	var bytes = CryptoJS.AES.decrypt(testocifrato__.toString(), ControlloX__); 
	var plaintext = bytes.toString(CryptoJS.enc.Utf8); 
	testodecifrato__ = plaintext; 
	
	RiLettoValore=testocifrato__;
	
}else{


// // Encrypt 
// var ciphertext = CryptoJS.AES.encrypt(Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__, ControlloX__); 
// testocifrato__=ciphertext; 
//  
// // Decrypt 
// var bytes = CryptoJS.AES.decrypt(testocifrato__.toString(), ControlloX__); 
// var plaintext = bytes.toString(CryptoJS.enc.Utf8); 
// testodecifrato__ = plaintext; 
//  
// RiLettoValore=testocifrato__;


}; // if FlagForAES


// 
}; // if textarea vuota o cifrata





// alla fine di questi if condizionali
// viene passata una variabile vuota
// oppure una variabile cifrata




document.getElementById("RILETTO_VALORE").innerHTML=RiLettoValore;
}; EseguiRiLettoValore_=setInterval(RiLettoValore_);


</script>




<script>
// refresh pagina senza ritrasmetti
function refreshPage() {
  window.location.replace(ArchivioAttivo);

}
</script>


<!-- TECHNICALITIES -->
<!-- SPLOT TECHNICALITIES -->

<div id="SPLOT_INNER_" style="visibility:hidden;"></div>

<div id="READ_INPUT_DINAMICO_LotX" style="background-color:transparent;color:transparent;"></div>


<div id="ID_DISPLAY_ONLY_PLAIN_WORDS" class="preserve_break" style="visibility:visible;"></div>


<div id="VEDI_LO_SPLITWORDS" style="color:red; display:none;">Loading... VEDI_LO_SPLITWORDS</div>

<div id="ID_RESTORE_SPLIT_WORDS" style="display:none;">Loading... ID_RESTORE_SPLIT_WORDS</div>

<div id="VISUALIZZA_TROVATO_ALFA__" style="display:none;"></div>

<!-- pop_up_splot.php -->
<?php include($pop_up_splot); ?>



<div id="fine"></div>

</footer>

<?php include($links_bottom_v15); ?>
 
  
</body> 
</html> 
