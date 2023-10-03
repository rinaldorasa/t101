
<script> 
function AES(){ /* alert("AES registra il testo in formato hta. Per annullare OK e PLA."); */
FlagForAES="YES"; 
document.querySelector("#ID_BUTTON_AES").style.visibility="hidden"; 
document.querySelector("#ID_BUTTON_PLA").style.visibility="visible"; 
 
document.querySelector("#ID_CONTROLLO_INPUT1").style.visibility="visible"; 
document.querySelector("#ID_CONTROLLO_INPUT2").style.visibility="visible"; 
 
document.querySelector("#Contenitore_TEXTAREA_INIZIALE__").style.visibility="hidden"; 
 
}; 
function PLA(){ /* alert("PLA"); */ FlagForAES="NO"; 
document.querySelector("#ID_BUTTON_PLA").style.visibility="hidden"; 
document.querySelector("#ID_BUTTON_AES").style.visibility="visible"; 
 
document.querySelector("#ID_CONTROLLO_INPUT1").style.visibility="hidden"; 
document.querySelector("#ID_CONTROLLO_INPUT2").style.visibility="hidden"; 
 
document.querySelector("#Contenitore_TEXTAREA_INIZIALE__").style.visibility="visible"; 
 
}; 
</script> 

