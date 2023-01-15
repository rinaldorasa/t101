<!--
RIQUADRO_POPUP_1673714981470
-->

<div id="BUONGIORNO_1673714981470"> Test sottoposto a test! </div>

<div id="TEST_1673714981470"></div>


<script>

/* 
LineDotDeltaHarlequinFULL_00b.php

20:23:01:15:12:01

_1673714981470

*/

/*    detect il tipo di dispositivo   */
DESKTOP_1673714981470 = 1 ; 
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{ DESKTOP_1673714981470 = 0 ; } else { DESKTOP_1673714981470 = 1 ; }

    let LarghezzaBody_1673714981470 = window.innerWidth   /16;
    let AltezzaBody_1673714981470   = window.innerHeight  /16;
    
    let MargineSinistra_1673714981470 = 5 ;            	// default
    let BordoToggleDevice_1673714981470 = MargineSinistra_1673714981470*0.5;
	if (DESKTOP_1673714981470==1){}						// resposive


	let LarghezzaRiquadroBuongiorno_1673714981470 = LarghezzaBody_1673714981470 - (MargineSinistra_1673714981470 * 2 ) ;
	let AltezzaRiquadroBuongiorno_1673714981470   = AltezzaBody_1673714981470 * 0.75  ;
	
	// evitare che i pulsanti toggle si
	// sovrappongano
	let LarghezzaToggle_1673714981470 = MargineSinistra_1673714981470;
	let AggiuntaDiSicurezza_1673714981470 = 0.05 ;
	let LarghezzaToggleSicuro_1673714981470 = MargineSinistra_1673714981470 + AggiuntaDiSicurezza_1673714981470 ;
	let ControlloDiSicurezza_1673714981470=( LarghezzaToggleSicuro_1673714981470 ) * 2;


	if(LarghezzaRiquadroBuongiorno_1673714981470 < ControlloDiSicurezza_1673714981470)
	{alert("⚠ Attenzione dimensioni fuori intervallo!!!");}else{}




delta_1673714981470=()=>{ /* alert("delta_1673714981470"); */


document.write(`

<article id="CONTENITORE_INPUT_1673714981470"><div>
<input id="INPUT_SCELTO_1673714981470" type="range" list="LISTA_1673714981470" step="0.1" min="0.00" max="5.00" />
</div></article>
<datalist id="LISTA_1673714981470">

<option value="0.00"> </option>
<option value="0.25"> </option>
<option value="0.50"> </option>
<option value="0.75"> </option>
<option value="1.00"> </option>
<option value="1.25"> </option>
<option value="1.50"> </option>
<option value="1.75"> </option>
<option value="2.00"> </option>
<option value="2.25"> </option>
<option value="2.50"> </option>
<option value="2.75"> </option>
<option value="3.00"> </option>
<option value="3.25"> </option>
<option value="3.50"> </option>
<option value="3.75"> </option>
<option value="4.00"> </option>
<option value="4.25"> </option>
<option value="4.50"> </option>
<option value="4.75"> </option>
<option value="5.00"> </option>



</datalist>

<div id="VALORE_DI_INPUT_1673714981470"><q>err</q>VALORE_DI_INPUT_1673714981470</div>
<div id="WIDTH_1673714981470"><q>err</q>WIDTH_1673714981470</div>

`);



sonda_Width_1673714981470=(POSIZIONE_1673714981470)=>{
WIDTH_1673714981470 = window.innerWidth;
WIDTH_1673714981470_REM=WIDTH_1673714981470/16;

document.getElementById("WIDTH_1673714981470").innerHTML=``
+``
+``
+`<style>`
+`input[type="range"]`
+`{`
	+``
	+`-webkit-appearance: none;`
	+`width:95%;` /* per evitare overflow */
	+``
	+``
	+`background-color: orange;`                /* per debugging */
	+`background-color: rgba(25,225,37,0.25);`  /* production    */
	+``

+`}`
+``
+`article#CONTENITORE_INPUT_1673714981470`
+`{`
	+`position: fixed;`
	+`bottom: `+POSIZIONE_1673714981470+`rem;`
	+`left: 5rem;`
	+`width: `+(WIDTH_1673714981470_REM-10)+`rem;`
	+``
	+`text-align:center;`
	+``
	+`border: solid 0.00rem green;`
	+``
+`}`
+``

+`</style>`
+``
+``

+``;
} ; setInterval(sonda_Width_1673714981470, 1, 1.5) ;


sonda_Input_1673714981470=()=>{
	
VALORE_DI_INPUT_1673714981470=document.getElementById("INPUT_SCELTO_1673714981470").value;

DIM_INPUT_1673714981470 = VALORE_DI_INPUT_1673714981470; /* valore del resize element */
DIM_IMAGE_1673714981470 = DIM_INPUT_1673714981470 * 10;

document.getElementById("VALORE_DI_INPUT_1673714981470").innerHTML=``
/* +DIM_INPUT_1673714981470 */ /* per debug */ 
/* +` `       */
/* +DIM_IMAGE_1673714981470 */ /* per debug */ 

;

document.getElementById("TEST_1673714981470").innerHTML=``
+`<style>`
+`div#BUONGIORNO_1673714981470{font-size: `+(DIM_INPUT_1673714981470)+`rem!important;}`

+`#RIQUADRO_POPUP_1673714981470{font-size: `+(DIM_INPUT_1673714981470)+`rem!important;}`

+``
+`img{ width: `+DIM_IMAGE_1673714981470+`rem!important; }`
+``
+`</style> `
+``

+``
;


} ;  setInterval(sonda_Input_1673714981470, 1) ;





} ; delta_1673714981470(); 



</script>


<? include("DQua_js.php"); ?>

