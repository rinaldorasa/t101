
function RollingDot(arg00, arg01){


ID_ELEMENTO_DINAMICO = arg00;
// alert(ID_ELEMENTO_DINAMICO);
ID_ELEMENTO_APP_ROLLING_DOT = arg01;


	document.getElementById(ID_ELEMENTO_APP_ROLLING_DOT).innerHTML=
	`
		<div id="SETTAGGI"> ?SETTAGGI</div>
		<div id="RANGE_DOT">?RANGE_DOT</div>
		<div id="APP_RANGE">?APP_RANGE</div>
	
	`;
	
	
	function LarghezzaRem(){ let Larghezza = window.innerWidth  / 16; return Larghezza;}
	function   AltezzaRem(){ let Altezza   = window.innerHeight / 16; return Altezza;}
	
	
	function RangeDot_Dinamico_Input(){
	
			document.getElementById("RANGE_DOT").innerHTML=
			`
				<div id="CONTENITORE_RANGE">
				<input id="RANGER" type="range" step="1" min="1" max="99">
				<datalist>
				<option value="1"> </option> <option value="2"> </option> <option value="3"> </option> <option value="4"> </option> <option value="5"> </option> <option value="6"> </option> <option value="7"> </option> <option value="8"> </option> <option value="9"> </option> <option value="10 "></option> <option value="11 "></option> <option value="12 "></option> <option value="13 "></option> <option value="14 "></option> <option value="15 "></option> <option value="16 "></option> <option value="17 "></option> <option value="18 "></option> <option value="19 "></option> <option value="20 "></option> <option value="21 "></option> <option value="22 "></option> <option value="23 "></option> <option value="24 "></option> <option value="25 "></option> <option value="26 "></option> <option value="27 "></option> <option value="28 "></option> <option value="29 "></option> <option value="30 "></option> <option value="31 "></option> <option value="32 "></option> <option value="33 "></option> <option value="34 "></option> <option value="35 "></option> <option value="36 "></option> <option value="37 "></option> <option value="38 "></option> <option value="39 "></option> <option value="40 "></option> <option value="41 "></option> <option value="42 "></option> <option value="43 "></option> <option value="44 "></option> <option value="45 "></option> <option value="46 "></option> <option value="47 "></option> <option value="48 "></option> <option value="49 "></option> <option value="50 "></option> <option value="51 "></option> <option value="52 "></option> <option value="53 "></option> <option value="54 "></option> <option value="55 "></option> <option value="56 "></option> <option value="57 "></option> <option value="58 "></option> <option value="59 "></option> <option value="60 "></option> <option value="61 "></option> <option value="62 "></option> <option value="63 "></option> <option value="64 "></option> <option value="65 "></option> <option value="66 "></option> <option value="67 "></option> <option value="68 "></option> <option value="69 "></option> <option value="70 "></option> <option value="71 "></option> <option value="72 "></option> <option value="73 "></option> <option value="74 "></option> <option value="75 "></option> <option value="76 "></option> <option value="77 "></option> <option value="78 "></option> <option value="79 "></option> <option value="80 "></option> <option value="81 "></option> <option value="82 "></option> <option value="83 "></option> <option value="84 "></option> <option value="85 "></option> <option value="86 "></option> <option value="87 "></option> <option value="88 "></option> <option value="89 "></option> <option value="90 "></option> <option value="91 "></option> <option value="92 "></option> <option value="93 "></option> <option value="94 "></option> <option value="95 "></option> <option value="96 "></option> <option value="97 "></option> <option value="98 "></option> <option value="99 "></option> 
				</datalist>
				
				</div>
			
			`;
	
	} ;  RangeDot_Dinamico_Input() ;
	
	
	function LeggiRangeDot_Dinamico_Input(){
			let LetturaRange = document.getElementById("RANGER").value;
		
			document.getElementById("APP_RANGE").innerHTML=
			` 
			<style>
		
			#`+ID_ELEMENTO_DINAMICO+` * {
			background-color:white;color:black;
			font-size:`+(LetturaRange*0.100)+`rem!important;
			font-size:`+(LetturaRange*0.050)+`rem!important;
			font-size:`+(LetturaRange*0.025)+`rem!important;

			font-family:monospace;
			}
			</style>
			`;
		
	};
	setInterval(LeggiRangeDot_Dinamico_Input,1);
	
	
	
	// 
	//
	// PARTE COSTANTE
	//
	document.getElementById("SETTAGGI").innerHTML=
	`
	<style>
	
	#`+ID_ELEMENTO_DINAMICO+`{
        
	width:`+(LarghezzaRem()*0.950)+`rem;
    width:`+(LarghezzaRem()*0.975)+`rem;
    height:`+(AltezzaRem() *0.850)+`rem;
	
	background-color:white;color:black;
	
	border-top:solid 0.25rem magenta;
	border-bottom:solid 0.25rem purple;
	
	overflow:auto;
	
	}
	
	input[type="range"]{-webkit-appearance:none;
	width:100%;
	background-color:yellow;
	background-color:transparent;
	
	background-color:yellow;
	
	
	</style>
	`;

	
	
	
}; // RollingDot fin


