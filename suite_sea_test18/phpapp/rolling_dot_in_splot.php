


<!-- rolling_dot_in_splot -->
<div ID="LEGGI_DINA_INPUT_SPLOT_v14__"></div> <!-- modello rolling dot  --> 
<div id="ATTIVA_STILI_SPLOT_v14__"></div> <!-- passaggio di style  --> 
 
</div> 
 
<script> 
 
function RengDot_Splot_v14__(){ 
  ValoreInizialeRange_Splot_v14__=25; 
  ProprietaInput_Splot_v14__=`id="RANGER_Splot_v14__" type="range" value="`+ValoreInizialeRange_Splot_v14__+`" step="1" min="0" max="99"  class="centrato___" style=" margin-left:0%;  width:50%; border:solid 0.00rem yellow;"`; 
  document.getElementById("LEGGI_DINA_INPUT_SPLOT_v14__").innerHTML=`<input ${ProprietaInput_Splot_v14__}  >   `; 
}; 
RengDot_Splot_v14__(); 
 
 
function LeggiRengDot_Splot_v14__(){ 
  LetturaRange_Splot_v14__=document.getElementById("RANGER_Splot_v14__").value; 
 
  FonteDinamica_Splot_v14__=(LetturaRange_Splot_v14__*0.075).toFixed(2); 

// trasferisce il valore del font tramite style a textarea 
  document.getElementById("ATTIVA_STILI_SPLOT_v14__").innerHTML=
  '<style>#ID_DISPLAY_ONLY_PLAIN_WORDS{font-size:'+FonteDinamica_Splot_v14__+'rem;}'+'</style>'
  +' <style></style>'; 
 
 
 
}; setInterval(LeggiRengDot_Splot_v14__,1); 
 
 
</script> 
 