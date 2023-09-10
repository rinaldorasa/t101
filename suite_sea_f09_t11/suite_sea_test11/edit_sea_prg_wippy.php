<!doctype html> 
<html lang="it"> 
 
<head> 
<meta charset="utf-8"> 
 
<title> 
 
R11wippy_23904
 
edit_sea_prg_php_w_11_wippy_23904_1545a 
 
</title> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> 
 
<link rel="preconnect" href="https://fonts.gstatic.com"> 
<link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet"> 
<link rel="preconnect" href="https://fonts.googleapis.com"> 
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
<link href="https://fonts.googleapis.com/css2?family=Rasa:wght@300&display=swap" rel="stylesheet"> 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" > 
 
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script> 
<script src="aes.js"></script> 
 
 
<style> 
 
html * {/* font-size:1.75rem; */} 
html * {font-family: "PT Mono",monospace;} 
html * {word-break:break-all;} 
 
 
div{text-align:center;} 
div q{font-size:37.5%;} 
 
 
 
 
.pre { 
 
inline-size: auto; 
overflow-wrap: break-word; 
 
border:solid 0.15rem green; 
} 
 
.pre { 
white-space: pre-wrap; /* css-3 */ 
white-space: -moz-pre-wrap; /* Mozilla, since 1999 */ 
white-space: -pre-wrap; /* Opera 4-6 */ 
white-space: -o-pre-wrap; /* Opera 7 */ 
word-wrap: break-word; /* Internet Explorer 5.5+ */ 
} 
 
 
 
 
.xmp { 
 
inline-size: auto; 
overflow-wrap: break-word; 
 
border:solid 0.15rem green; 
} 
 
.xmp { 
white-space: pre-wrap; /* css-3 */ 
white-space: -moz-pre-wrap; /* Mozilla, since 1999 */ 
white-space: -pre-wrap; /* Opera 4-6 */ 
white-space: -o-pre-wrap; /* Opera 7 */ 
word-wrap: break-word; /* Internet Explorer 5.5+ */ 
} 
 
 
</style> 
 
<script>FontSizeStandard__=2.75;</script> 
<script> 
// questo flag permette di selezionare una opzione molto importante 
// in quanto trasforma un testo in aes occorre poi trasferire questo 
// testo in un file dedicato il quale al momento della lettura chiede 
// una password 
 
 
FlagForAES="YES"; 
FlagForAES="NO"; 
 
// tentativo di rendere flessibili 
// i riferimenti ai file di riferimento 
 
ArchivioFiles = [""]; 
 
ArchivioFiles[0] = "edit_sea_prg_w.php"; 
ArchivioFiles[1] = "edit_sea_prg_wippy.php"; 
 
ArchivioAttivo = ArchivioFiles[1]  ; // qui un element array 
 
 
ValoreIdControlloInput1=""; 

ArchivioDaSalvare=[""];
ArchivioDaSalvare[0]="htm_wippy.txt";
ArchivioDaSalvare[1]="htm_wippy.htm";





 
</script> 
 
</head> 
 
<body> 
<?php include("X__.php"); ?> 
<script> ControlloX__ = <?php echo json_encode($X__); ?>; </script> 
 
 
 
 
<div STYLE="DISPLAY:BLOCK;"> 
<button id="REFRESH_BUTTON_AT_FIRST__" type="button" onclick="refreshFinestra()" class="btn btn-danger" style="position:static; top:0rem;left:0.5rem; display:none;"><i id="REFRESH_BUTTON_AT_FIRST_ICO__" class="bi bi-arrow-clockwise"></i></button> 
 
<q style="background-color:white; color:red; font-variant:normal;"> 
edit_sea_prg_php_w_11_wippy_23904_1545a 
</q> 
<div ID="LEGGI_DINA_INPUT_XMLHR00__"></div> <!-- modello rolling dot  --> 
<div ID="TEST_RANGE00__"></div> <!-- esempio di app style  --> 
<div id="TEST_TEXT00"></div> <!-- passaggio di style  --> 
 
</div> 
 
<script> 
 
function RengDot00(){ 
  ValoreInizialeRange00__=25; 
  ProprietaInput00__=`id="RANGER00__" type="range" value="`+ValoreInizialeRange00__+`" step="1" min="0" max="99"  class="centrato___" style="margin-left:12.5%;width:75%; border:solid 0.00rem yellow;"`; 
  document.getElementById("LEGGI_DINA_INPUT_XMLHR00__").innerHTML=`<input ${ProprietaInput00__}  >   `; 
}; 
RengDot00(); 
 
 
function LeggiRengDot00(){ 
  LetturaRange00__=document.getElementById("RANGER00__").value; 
 
  FonteDinamica00__=(LetturaRange00__*0.075).toFixed(2); 
 
 
 //   document.getElementById("TEST_RANGE00__").innerHTML=FonteDinamica00__+'rem'; 
 
    document.getElementById("TEST_TEXT00").innerHTML='<style>#Scrivere_in_TEXTAREA_INIZIALE__, #ID_Testo {font-size:'+FonteDinamica00__+'rem;}'+'</style>'; 
 
 
 
}; setInterval(LeggiRengDot00,1); 
 
 
</script> 
 
 
 
<article STYLE="TEXT-ALIGN:CENTER;"> 
<input id="ID_CONTROLLO_INPUT1" type="text" value="" placeholder="?" style="visibility:hidden;"> 
<input id="ID_CONTROLLO_INPUT2" type="submit" value="?" 
onclick="ControlloValoreInput1()"  style="visibility:hidden;"> 
</article> 
<script> 
function ControlloValoreInput1(){ 
ValoreIdControlloInput1=document.getElementById("ID_CONTROLLO_INPUT1").value; 
 
if( ValoreIdControlloInput1===ControlloX__ ){ 
document.querySelector("#Contenitore_TEXTAREA_INIZIALE__").style.visibility="visible"; 
}else 
{ 
document.querySelector("#Contenitore_TEXTAREA_INIZIALE__").style.visibility="hidden"; 
 
} 
 
alert(ValoreIdControlloInput1); 
 
return ValoreIdControlloInput1; 
 
} 
 
</script> 
 
 
 
 
 
<main> 
 
 
 
<section id="SECTION_TEXTAREA__"> 
<article id="Contenitore_TEXTAREA_INIZIALE__"> 
<textarea id="Scrivere_in_TEXTAREA_INIZIALE__" ></textarea> 
</article> 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
<hr style="color:red; border-width:0.25rem;"> 
 
<div id="DGEBI_INPUT_DINAMICO__"></div> 
<script> 
document.getElementById("DGEBI_INPUT_DINAMICO__").innerHTML= 
` 
<article> 
<form id="FORM_PER_INVIARE_TESTO_DINAMICO__" action="`+ArchivioAttivo+`" method="POST"> 
<div id="VISUALIZZA_TESTO_DINAMICO__"></div> 
<blockquote style="text-align:center;"> 
 
 
 
 
<!-- scegliere tra aes o plain ini --> 
<!-- span left IMPORTANTISSIMO NON RIMUOVERE!!! INI --> 
<span style="float:left; BORDER:DOTTED 0.15REM MAGENTA;"> 
<!-- <span> --> 
 
<button id="ID_BUTTON_AES" type="button" onclick="AES()" style="font-size:${FontSizeStandard__*0.75}rem;" >AES</button> 
 
<button id="ID_BUTTON_PLA" type="button" onclick="PLA()" style="font-size:${FontSizeStandard__*0.75}rem;" >PLA</button> 
 
</span> <!-- span left IMPORTANTISSIMO NON RIMUOVERE!!! FIN --> 
 
 
 
 
<aside STYLE="TEXT-ALIGN:RIGHT; BORDER:DASHED 0.15REM FUCHSIA;"> 

<button id="SUBMIT_PER_TESTO_DINAMICO__" type="submit"> 
<span><i style="font-size:${FontSizeStandard__*1.25}rem;" class="bi bi-chat-left-text"></i></span><span STYLE="FONT-SIZE:0.75REM; DISPLAY:NONE;"> 
(( edit_sea_prg_php_w_11_wippy_23904_1545a )) 
</span></button> 
 
 
<!-- visualizza modal --> 
<button id="BUTTON_BS_MODAL__" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#BS_MODAL__"> 
<i style="font-size:${FontSizeStandard__*0.75}rem;" class="bi bi-card-list"></i> 
</button> 

</aside> 
 
</blockquote> 
 
</form> 
 
<!-- 
<article STYLE="TEXT-ALIGN:CENTER; DISPLAY:INLINE-BLOCK;"> 
<button id="BUTTON_BS_MODAL__" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#BS_MODAL__"> 
<i class="bi bi-card-list"></i> 
</button> 
</article> 
 
--> 
 
</article> 
`; 
</script> 
 
<script> 
function AES(){ alert("AES registra il testo in formato hta. Per annullare OK e PLA."); 
FlagForAES="YES"; 
document.querySelector("#ID_BUTTON_AES").style.visibility="hidden"; 
document.querySelector("#ID_BUTTON_PLA").style.visibility="visible"; 
 
document.querySelector("#ID_CONTROLLO_INPUT1").style.visibility="visible"; 
document.querySelector("#ID_CONTROLLO_INPUT2").style.visibility="visible"; 
 
document.querySelector("#Contenitore_TEXTAREA_INIZIALE__").style.visibility="hidden"; 
 
}; 
function PLA(){ alert("PLA"); FlagForAES="NO"; 
document.querySelector("#ID_BUTTON_PLA").style.visibility="hidden"; 
document.querySelector("#ID_BUTTON_AES").style.visibility="visible"; 
 
document.querySelector("#ID_CONTROLLO_INPUT1").style.visibility="hidden"; 
document.querySelector("#ID_CONTROLLO_INPUT2").style.visibility="hidden"; 
 
document.querySelector("#Contenitore_TEXTAREA_INIZIALE__").style.visibility="visible"; 
 
}; 
</script> 
<script> 
//alert( "test= " + FlagForAES ); 
</script> 
<script> 
LarghezzaButton__ = document.getElementById("SUBMIT_PER_TESTO_DINAMICO__"); 
LarghezzaButton__ = LarghezzaButton__.offsetWidth; 
LarghezzaButton__ = (LarghezzaButton__ / 16) ; 
// alert("il bottone INVIA misura "+LarghezzaButton__+"rem"); 
LARGHEZZA_BOTTONE_INVIA = LarghezzaButton__ ; 
</script> 
 
<hr style="color:red; border-width:0.25rem;"> 
 
 
<?php 
 
 
$Testo=$_POST["IMMISSIONE_TESTO_DINAMICO__"]; 

 
// elenco nomi 
 
$NomeFileBak_01=""; 
$NomeFileBak_02="htm_wippy"; 
 
$NomePrefisso=$NomeFileBak_02; 
 
// $t=time(); 
// $Postfisso = date("Y_m_d",$t); 
 
// inserire il postfisso 
// nel salvataggio di backup 
 
$Postfisso =""; 
 
$HtmHtm =  $NomePrefisso.$Postfisso.".htm"; 
$HtmTxt =  $NomePrefisso.$Postfisso.".txt"; 
 
 
$SalvaUNO=fopen($HtmHtm,"a"); 
fwrite($SalvaUNO,$Testo); 
fclose($SalvaUNO); 
 
$SalvaUNO=fopen($HtmTxt,"a"); 
fwrite($SalvaUNO,$Testo); 
fclose($SalvaUNO); 
 
?> 
 
 
 
 
 
 
 
<!-- <hr style="color:blue; border-width:0.25rem;"> -->
 
 
 
 
<!-- MyStringaASCII --> 
<!-- 
potrebbe essere usato 
come indicatore di valore 
codice unicode ascii di 
un determinato carattere 
--> 
 
<!-- da spostare in modal 
<span onclick="CopiaInClipboard('#MY_STRINGA_ASCII__')"> 
<i id="COPY_MY_STRINGA_ASCII__" class="bi bi-clipboard-check"></i> 
 
--> 
<!-- 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16"> 
<path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/> 
<path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/> 
<path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/> 
</svg> 
--> 
<!-- 
</span> 
 
--> 
<!-- 
<div id="TEXTAREA_INIZIALE_ASCII__"></div> 
 
--> 
 
<script> 
function Leggi_Testo_TEXTAREA_INIZIALE__(ARGO_){ 
Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__ = 
document.getElementById("Scrivere_in_TEXTAREA_INIZIALE__").value; 
 
// alert( "test= " + FlagForAES ); 
 
MyStringa = Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__; 
MyStringaASCII = ""; 
NumCar=0; 
for(NumCar=0; NumCar<MyStringa.length; NumCar++) 
{ MyStringaASCII = MyStringaASCII + "&#38;&#35;"+MyStringa.charCodeAt(NumCar)+"&#59;" ; } 
 
 
document.getElementById("TEXTAREA_INIZIALE_ASCII__").innerHTML= 
` 
<article> 
<div id="MY_STRINGA_ASCII__"><span style="FONT-SIZE:50%;">${MyStringaASCII}</span></div> 
</article> 
 
`; 
 
 
 
 
// se flag settato sul NO 
// non avviene la cifratura 
// 
 
if(FlagForAES==="YES"){ 
 
// alert( "test interno a if(FlagForAES = " + FlagForAES ); 
// sezione di cifratura ini 
 
// Encrypt 
var ciphertext = CryptoJS.AES.encrypt(Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__, 'a b c'); 
 
// in alternativa al valore originario 
testocifrato__=ciphertext; 
 
// alert( "testocifrato__= "+ testocifrato__); 
 
 
if(ValoreIdControlloInput1===ControlloX__){  }else{  } 
 
// PASSWORD__='a b c'; 
 
PASSWORD__= ValoreIdControlloInput1 ; 
 
 
// Decrypt 
var bytes = CryptoJS.AES.decrypt(testocifrato__.toString(), PASSWORD__); 
 
var plaintext = bytes.toString(CryptoJS.enc.Utf8); 
 
testodecifrato__ = plaintext; 
 
// alert("testodecifrato__ = ini "+testodecifrato__+" fin"); 
// alert("stop2"); 
 
Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__ = testocifrato__; 
 
 
// alert("Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__= si dovrebbe vedere cifrato "+ Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__); 
 
}; // FlagForAES yes no 
 
 
return Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__; 
}; 
// callback 
Esegui_setInterval_Leggi_Testo_TEXTAREA_INIZIALE__ = setInterval(Leggi_Testo_TEXTAREA_INIZIALE__,1); 
 
 
function CopiaInClipboard(element){ 
 
// richiede jQuery 
 
var $temp = $("<input>"); 
$("body").append($temp); 
$temp.val($(element).text()).select(); 
document.execCommand("copy"); 
$temp.remove(); 
 
 
} 
 
</script> 
 
<script> 
function Visualizza_Testo_Dinamico_TEXTAREA_INIZIALE__(){ 
 
 
// main page 
 
Testo_Dinamico_TEXTAREA_INIZIALE__ = Leggi_Testo_TEXTAREA_INIZIALE__(); 
 
document.getElementById("VISUALIZZA_TESTO_DINAMICO__").innerHTML='' 
+ '' 
+ '<textarea id="ID_IMMISSIONE_TESTO_DINAMICO__" name="IMMISSIONE_TESTO_DINAMICO__" >' 
+ '' 
+ '' 
+ Testo_Dinamico_TEXTAREA_INIZIALE__ 
+ '' 
+ '' 
+ '</textarea>' 
+ '' 
 
+ '' 
; 
 
 
 
// modal 
 
Testo_Dinamico_TEXTAREA_INIZIALE__ = Leggi_Testo_TEXTAREA_INIZIALE__(); 
 
document.getElementById("TESTO_MODAL_TEXTAREA__").innerHTML='' 
+ '' 
+ '<div STYLE="text-align:left;">' 
+ '' 
+ '' 
+ Testo_Dinamico_TEXTAREA_INIZIALE__ 
+ '' 
+ '' 
+ '</div>' 
+ '' 
 
+ '' 
; 
 
 
 
 
}; 
// Visualizza_Testo_Dinamico_TEXTAREA_INIZIALE__(); 
Esegui_setInterval_Visualizza_Testo_Dinamico_TEXTAREA_INIZIALE__=setInterval(Visualizza_Testo_Dinamico_TEXTAREA_INIZIALE__); 
 
 
</script> 
 
 
 
 
 
<!-- <hr style="color:blue; border-width:0.25rem;"> -->
 
 
 
<!-- Utilizzo del framework bootstrap --> 
 
<!-- 
<article STYLE="TEXT-ALIGN:CENTER;"> 
<button id="BUTTON_BS_MODAL__" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#BS_MODAL__"> 
<i class="bi bi-card-list"></i> 
</button> 
</article> 
 
--> 
 <div class="modal fade" id="BS_MODAL__"> 
     <div class="modal-dialog modal-fullscreen"> 
         <div class="modal-content"> 
             <div class="modal-header"> 

<button id="REFRESH_MODAL_BUTTON___" type="button" onclick="refreshFinestra()" class="btn btn-secondary"><i id="REFRESH_MODAL_BUTTON_ICO__" class="bi bi-arrow-clockwise"></i></button> 
 


                 <h5 class="modal-title" STYLE="font-size:50%;"> 
                   edit_sea_prg_php_w_11_wippy_23904_1545a 
                 </h5> 



              <!--   <button type="button" class="btn-close"  --> 
          
             <button type="button" data-bs-dismiss="modal" 
             class="btn btn-light btn-lg"  STYLE="font-size:75%;"> 
                  CHIUDI 
             </button> 
             </div> 
             <div class="modal-body" STYLE="border:solid 0.25rem orange;"> 
      
      
      
      
      
            <button class="btn btn-light btn-lg border border-danger" type="button" onclick="EseguiBACKUP()" STYLE="FONT-SIZE:75%;"  >BACKUP</button> 
             <script> function EseguiBACKUP(){window.location.replace("baktxh.php");} </script> 
 
 
             <div id="TIMESTAMP" STYLE="display:inline-block;"></div> 
      
      
             <hr> 
 

<span onclick="CopiaInClipboard('#MY_STRINGA_ASCII__')"> 
<i id="COPY_MY_STRINGA_ASCII__" class="bi bi-clipboard-check"></i> 
<!-- 
<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16"> 
<path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/> 
<path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/> 
<path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/> 
</svg> 
--> 
</span> 
<div id="TEXTAREA_INIZIALE_ASCII__"></div> 







 
            
             <div id="TESTO_MODAL_TEXTAREA__" STYLE="text-align:left; border:solid 0.25rem magenta;"></div> 




<?php

echo "<blockquote style='background-color:initial; color:initial;'>";

echo '<details STYLE="DISPLAY:INLINE-BLOCK;"><summary class="bi bi-info-square" style="background-color:initial;color:red; display:inline-block;"></summary>';
echo "<div id='ID_Testo'>".$Testo."</div>"; echo "";
echo "</details>";

echo '<details STYLE="DISPLAY:INLINE-BLOCK;"><summary class="bi bi-info-square" style="background-color:initial;color:green;display:inline-block;"></summary>';
echo '<span id="SALVA_TEXTAREA_INIZIALE__"></span>'; echo "";
echo '</details>';
echo "</blockquote>"; 

?>











 
             <div id="ARGO__"></div> 
 
             <div id="VISUALIZZA_CIFRATO_TEXTAREA_INIZIALE__" STYLE="text-align:left; border:solid 0.25rem orange;"></div> 
      
             <div id="VISUALIZZA_DECIFRATO_TEXTAREA_INIZIALE__" STYLE="text-align:left; border:solid 0.25rem blue;"></div> 
 
 
<article id="CONTENITORE_XMLHR__"> 
 
 
<input id="INPUT_RICHIEDO_UN_FILE_PER_XMLHR__" type="text" value="vdir.php" placeholder=""> 
<button id="INVIA_RICHIEDO_UN_FILE_PER_XMLHR__" onclick="IntervalloPerInputXMLHR()"> invia richiesta file</button> 
 
<textarea id="XMLHR__"></textarea> 
</article> 
 
<div ID="LEGGI_DINA_INPUT_XMLHR__"></div> <!-- modello rolling dot  --> 
<div ID="TEST_RANGE__"></div> <!-- esempio di app style  --> 
<div id="TEST_TEXT"></div> <!-- passaggio di style  --> 
 
 
 
 
<script> 
 
 
function IntervalloPerInputXMLHR(){ 
 
NomeRichiedoUnFile = "htm_wippy.txt"; 
NomeRichiedoUnFile = "vdir.php"; 
 
NomeRichiedoUnFile = document.getElementById("INPUT_RICHIEDO_UN_FILE_PER_XMLHR__").value; 
 
 
FilePerXMLHR = NomeRichiedoUnFile; 
 
 
CercaFileHtm__=new XMLHttpRequest(); 
 
CercaFileHtm__.open("GET", FilePerXMLHR, false); 
 
CercaFileHtm__.onreadystatechange = function (){ 
 
TrovatoFileHtm__ = CercaFileHtm__.responseText; 
 
document.getElementById("XMLHR__").innerHTML=TrovatoFileHtm__; 
 
}; CercaFileHtm__.send(); 
 
 
}; 
 
// AttivaIntervalloPerInputXMLHR = setInterval(IntervalloPerInputXMLHR,3000); 
 
 
function RengDot(){ 
  ValoreInizialeRange__=25; 
  ValoreInizialeRange__=15;
  
  ProprietaInput__=`id="RANGER__" type="range" value="`+ValoreInizialeRange__+`" step="1" min="0" max="99"  class="centrato___" style="margin-left:12.5%;width:75%; border:solid 0.00rem yellow;"`; 
  document.getElementById("LEGGI_DINA_INPUT_XMLHR__").innerHTML=`<input ${ProprietaInput__}  >   `; 
}; 
RengDot(); 
 
function LeggiRengDot(){ 
  LetturaRange__=document.getElementById("RANGER__").value; 
 
  FonteDinamica__=(LetturaRange__*0.075).toFixed(2); 
    document.getElementById("TEST_RANGE__").innerHTML=FonteDinamica__+'rem'; 
    document.getElementById("TEST_TEXT").innerHTML='<style>#XMLHR__{font-size:'+FonteDinamica__+'rem;}'+'</style>'; 
 
}; setInterval(LeggiRengDot,1); 
 
 
 
 
 
</script> 
 
 
 
 
<button class="btn btn-light btn-lg border border-danger" type="button" onclick="NewTEXTAREA()" STYLE="FONT-SIZE:75%;"  >NEW</button> 
             <script> function NewTEXTAREA(){window.location.replace("newhtm.php");} </script> 
 
     
             </div> 
         </div> 
     </div> 
 </div> 
 
 
<script> 
function modale(){ 
Testo_Dinamico_Modal_TEXTAREA_INIZIALE__ = Leggi_Testo_TEXTAREA_INIZIALE__(); 
document.getElementById("TESTO_MODAL_TEXTAREA__").innerHTML=Testo_Dinamico_Modal_TEXTAREA_INIZIALE__; 
}; setInterval(modale,1); 
</script> 
 
 
<!-- timestamp in modal bs ini --> 
<script> 
TimeStamp=new Date().getTime(); 
// alert(TimeStamp); 
document.getElementById("TIMESTAMP").innerHTML=`${TimeStamp}`; 
</script> 
<!-- timestamp in modal bs fin --> 
 
 
 
 
 
<script> 
function Salva_TEXTAREA_INIZIALE__(){ 
// il dgebi si trova in modal bs

document.getElementById("SALVA_TEXTAREA_INIZIALE__").innerHTML= 
` 
 
<span>&nbsp;</span> <a id="SALVA_UNO__" href="`+ArchivioDaSalvare[0]+`" class="btn btn-info">txt</a><span>&nbsp;</span> 
<span>&nbsp;</span> <a id="SALVA_HTM__" href="`+ArchivioDaSalvare[1]+`" class="btn btn-info">htm</a><span>&nbsp;</span> 

 
`; 
}; 
Salva_TEXTAREA_INIZIALE__(); 
</script> 
 
  
<!-- <hr style="color:blue; border-width:0.25rem;"> -->
 
</section> 
 
 
 
 
<section ID="SECTION_BET__"> 
 
 
<!-- 
<button id="REFRESH_AFTER_BUTTON_BET__" type="button" onclick="refreshFinestra()" class="btn btn-secondary"><i id="REFRESH_AT_MODAL_ICO2__" class="bi bi-arrow-clockwise"></i></button> 
 
--> 
 
 
<div id="CONTENITORE_BET_ESTERNO">Loading...  CONTENITORE_BET_ESTERNO</div> 
 
<article STYLE="TEXT-ALIGN:RIGHT; BORDER:DASHED 0.15REM OLIVE; DISPLAY:BLOCK;"> 

<button id="REFRESH_AFTER_BUTTON_BET__" type="button" onclick="refreshFinestra()" class="btn btn-secondary" STYLE="FLOAT:LEFT;"><i id="REFRESH_AT_MODAL_ICO2__" class="bi bi-arrow-clockwise"></i></button> 
 

<input id="ID_CONTROLLO_INPUT1_01__" type="text" value="" placeholder="?" style="visibility:visible;"> 
<input id="ID_CONTROLLO_INPUT2_01__" type="submit" value="?" 
onclick="ControlloValoreInput1_01__()"  style="visibility:visible;"> 
</article> 
<script> 
function ControlloValoreInput1_01__(){ 
ValoreIdControlloInput1_01__=document.getElementById("ID_CONTROLLO_INPUT1_01__").value; 
 
 
// alert("ValoreIdControlloInput1_01__= " + ValoreIdControlloInput1_01__); 
 
 
if( ValoreIdControlloInput1_01__===ControlloX__ ){ 
	alert("ok"); 
	BET(ValoreIdControlloInput1_01__); 
 
}else 
{ 
		alert("ko"); 
 
 
} 
 
 
} 
 
</script> 
 
<script> 
document.getElementById("CONTENITORE_BET_ESTERNO").innerHTML='<div id="CONTENITORE_BET"></div>'; 
 
 
function BET(arg0){ 
 
document.getElementById("CONTENITORE_BET").innerHTML= 
` 
<div id="CONTENUTO_BET" style="position:static; top:0rem; left:0rem; border:solid 0.15rem purple;"> 
<div style="text-align:left;"> 
</div> 
 
<div id="TROVATO_UN_FILE__" style="text-align:left;"></div> 
 
</div> 
 
`; 
 
 
		 
	 
QuestoFile__ = "bet.txt"+"?"+Math.random(); 
 
RichiedoUnFile__ = new XMLHttpRequest(); 
RichiedoUnFile__.open("GET", QuestoFile__ , false); 
 
RichiedoUnFile__.onreadystatechange = function (){ 
 
TrovatoUnFile__ = RichiedoUnFile__.responseText; 
 
// decifrare 
ALFA = TrovatoUnFile__; 
SEPA='U2FsdGVkX1'; 
 
 
PASSWORD__ = arg0; 
 
 
SPLITWORDS = ALFA.split(SEPA); 
LENGTH_SPLITWORDS__ = SPLITWORDS.length; 
RESTORE_SPLIT_WORDS=[""]; 
 
for(n=0; n<LENGTH_SPLITWORDS__; n++){RESTORE_SPLIT_WORDS[n]=SEPA+SPLITWORDS[n];}; 
 
DEC_RESTORE_SPLIT_WORDS=[""]; // decifrare 
PLAINTEXT=[""]; // contenitore del decifrato 
for(n=0; n<RESTORE_SPLIT_WORDS.length; n++){ 
cifrato=RESTORE_SPLIT_WORDS[n]; 
 
decifrato = CryptoJS.AES.decrypt(cifrato.toString(), PASSWORD__); 
 
plaintext = decifrato.toString(CryptoJS.enc.Utf8); 
 
PLAINTEXT[n]=plaintext; 
	 
}; 
 
RISULTATO=[""];	 
for(n=1;n<(PLAINTEXT.length); n++){ 
 
RISULTATO[n]=PLAINTEXT[n].trim()+" "; 
 
}	 
 
TextIs=""; 
 
for(conta=1;conta<RISULTATO.length;conta++) 
{  TextIs =  TextIs + RISULTATO[conta].toString();} 
 
 
 
 
 
 
document.getElementById("TROVATO_UN_FILE__").innerHTML= 
` 
<textarea id="ID_XMLHR_TEXTAREA__" name="XMLHR_TEXTAREA__"> 
 
${TextIs} 
 
</textarea> 
`; 
 
}; RichiedoUnFile__.send();	 
	 
 
 
}; 
 
 
 
</script> 
 
 
</section> 
 
 
 
 
 
 
 
</main> 
 
<div id="SETTAGGI__"></div> 
 
 
 
 
 
 
<script> function refreshFinestra(){window.location.replace(ArchivioAttivo);}</script> 
 
<script> 
 
 
Larghezza_Finestra = (window.innerWidth/16 ); 
Altezza_Finestra = (window.innerHeight/16); 
 
 
// Larghezza_TEXTAREA_INIZIALE_ASCII__ = document.getElementById("TEXTAREA_INIZIALE_ASCII__"); 
// Larghezza_TEXTAREA_INIZIALE_ASCII__ = Larghezza_TEXTAREA_INIZIALE_ASCII__.offsetWidth; 
// Larghezza_TEXTAREA_INIZIALE_ASCII__ = Larghezza_TEXTAREA_INIZIALE_ASCII__/16; 
// alert("Larghezza_Finestra= "+Larghezza_Finestra+"rem"+" "+"Larghezza_TEXTAREA_INIZIALE_ASCII__= "+Larghezza_TEXTAREA_INIZIALE_ASCII__+"rem"); 
 
 
 
 
 
 
 
document.getElementById("SETTAGGI__").innerHTML= 
` 
<style> 
html * { font-size:`+( FontSizeStandard__ )+`rem; } 
 
 
 
 
#ID_BUTTON_AES{color:red; border-radius:0.5rem; visibility:visible;} 
#ID_BUTTON_PLA{color:green; border-radius:0.5rem; visibility:hidden; } 
 
#Contenitore_TEXTAREA_INIZIALE__{text-align:center; } 
#Scrivere_in_TEXTAREA_INIZIALE__{ width:100%; text-align:left; border:solid 0.15rem olive; } 
#VISUALIZZA_TESTO_DINAMICO__{text-align:left; } 
#ID_IMMISSIONE_TESTO_DINAMICO__{text-align:left; } 
 
 
 
 
 
#SECTION_TEXTAREA__{border:solid 0.15rem aqua;} 
 
#SECTION_BET__{border:solid 0.15rem olive;} 
 
 
 
#ID_BUTTON_BET{border-radius:0.500rem;} 
#ID_BUTTON_BET:hover{background-color:black; color:orange; border-radius:0.250rem;} 
#CONTENITORE_BET{ } 
 
#CONTENUTO_BET 
{ 
width:`+(Larghezza_Finestra * 0.9750)+`rem; 
height:`+(Altezza_Finestra * 0.750)+`rem; 
 
background-color:white; color:black; 
text-align:left; 
overflow.auto; 
z-index:1000; 
} 
 
#ID_XMLHR_TEXTAREA__ 
{ 
width:100%; 
height:`+(Altezza_Finestra * 0.750)+`rem; 
 
text-align:left; 
} 
 
 
 
 
 
 
 
#Contenitore_TEXTAREA_INIZIALE__{ margin-left:`+(Larghezza_Finestra*0.0000)+`rem; width:`+(Larghezza_Finestra*0.95)+`rem; height:`+(Altezza_Finestra*0.50)+`rem; } 
#Scrivere_in_TEXTAREA_INIZIALE__{ margin-left:`+(Larghezza_Finestra*0.0125)+`rem; width:`+(Larghezza_Finestra*0.95)+`rem; height:`+(Altezza_Finestra*0.50)+`rem; } 
#Scrivere_in_TEXTAREA_INIZIALE__{ margin-left:`+(Larghezza_Finestra*0.0250)+`rem; width:`+(Larghezza_Finestra*0.95)+`rem; height:`+(Altezza_Finestra*0.50)+`rem; } 
#Scrivere_in_TEXTAREA_INIZIALE__{ border-radius:0.50rem; } 
 
 
 
 
#TEXTAREA_INIZIALE_ASCII__{ display:inline-block; } 
#MY_STRINGA_ASCII__{ } 
 
#MY_STRINGA_ASCII__ 
{ 
 
margin-left:`+( Larghezza_Finestra * 0.0125 * 0.0000 )+`rem; 
margin-left:`+( (Larghezza_Finestra * 0.9500) * 0.0550 )+`rem; 
 
width:`+( Larghezza_Finestra * 0.9500 )+`rem; 
width:`+( Larghezza_Finestra * 0.7500 )+`rem; 
 
 
height:`+( FontSizeStandard__* 1.7500 )+`rem; 
 
background-color:white; color:black; 
 
font-weight:bold; 
 
text-align:left; overflow:auto; 
 
BORDER:dashed 0.075REM PURPLE; 
 
cursor:pointer; 
 
} 
 
#MY_STRINGA_ASCII__:hover{font-size:`+( FontSizeStandard__ * 1.00 )+`rem; } 
#COPY_MY_STRINGA_ASCII__{font-size:`+( FontSizeStandard__ * 1.25 )+`rem; } 
 
 
 
 
#VISUALIZZA_TESTO_DINAMICO__{ font-size:`+( FontSizeStandard__ * 0.50 )+`rem; } 
#ID_IMMISSIONE_TESTO_DINAMICO__{ font-size:`+( FontSizeStandard__ * 0.50 )+`rem; display:none; overflow:auto;} 
 
 
 
 
 
 
 
 
 
#BUTTON_BS_MODAL__{ font-size:`+( FontSizeStandard__ * 0.75 )+`rem; } 
 
#CONTENITORE_XMLHR__{ 
border:solid 0.15rem fuchsia; 
overflow:auto;} 
 
#XMLHR__{ 
width:`+( Larghezza_Finestra * 0.75 )+`rem; 
height:`+( Altezza_Finestra * 0.75 )+`rem; 
 
} 
 
 
#FORM_PER_INVIARE_TESTO_DINAMICO__{} 
#SUBMIT_PER_TESTO_DINAMICO__{background-color:green; color:white; border-radius:0.50rem;} 
#SUBMIT_PER_TESTO_DINAMICO__:hover{background-color:white; color:green; border-radius:0.50rem;} 
#SUBMIT_PER_TESTO_DINAMICO__{} 
 
 
#SALVA_UNO__{ font-size:`+( FontSizeStandard__*0.75 )+`rem; font-variant:small-caps; } 
#SALVA_HTM__{ font-size:`+( FontSizeStandard__*0.75 )+`rem; font-variant:small-caps; } 
#SALVA_UNO__:hover{font-style: italic;} 
#SALVA_HTM__:hover{font-style: italic;} 
 
 
 
#INVIA_RICHIEDO_UN_FILE_PER_XMLHR__{ background-color:green; color:white; } 
#INPUT_RICHIEDO_UN_FILE_PER_XMLHR__{ background-color:oldlace; color:black; border-radius:0.50rem; border:solid 0.15rem orange; } 
 
 
#REFRESH_BUTTON_AT_FIRST_ICO__{ font-size:`+( FontSizeStandard__*0.25 )+`rem; } 
 
 
 
</style> 
 
`; 
 
</script> 
 
 
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script> 
</body> 
</html> 
 
 
 
