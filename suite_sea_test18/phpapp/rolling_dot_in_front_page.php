 
<script> 
// rolling_dot_in_front_page (slider)

function RengDot_Page_00__(){ 
  ValoreInizialeRange_Page_00__=25; 
  ProprietaInput_Page_00__=`id="RANGER_Page_00__" type="range" value="`+ValoreInizialeRange_Page_00__+`" step="1" min="0" max="99"  class="centrato___" style=" margin-left:0%;  width:50%; border:solid 0.00rem yellow;"`; 
  document.getElementById("LEGGI_DINA_INPUT_PAGE_00__").innerHTML=`<input ${ProprietaInput_Page_00__}  >   `; 
}; 
RengDot_Page_00__(); 
 
 
function LeggiRengDot_Page_00__(){ 
  LetturaRange_Page_00__=document.getElementById("RANGER_Page_00__").value; 
 
  FonteDinamica_Page_00__=(LetturaRange_Page_00__*0.075).toFixed(2); 


  if(DESKTOP===1){ FonteDinamica_Page_00__=FonteDinamica_Page_00__*(0.50)}else{};


// trasferisce il valore del font tramite style a textarea 
  document.getElementById("ATTIVA_STILI_PAGE_00__").innerHTML='<style>#Scrivere_in_TEXTAREA_INIZIALE__, #ID_Testo, #ID_DISPLAY_ONLY_PLAIN_WORDS{font-size:'+FonteDinamica_Page_00__+'rem;}'+'</style> <style>#LEGGI_DINA_INPUT_PAGE_00__{text-align:center;} #LEGGI_DINA_INPUT_PAGE_00__:hover{border:dotted 0.000rem teal;}</style>'; 
 
 
 
}; setInterval(LeggiRengDot_Page_00__,1); 
 
 
</script> 

