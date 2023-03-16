	
	<!-- parte compiled ini -->
	<main id="MAIN">
	
	<div style="position:fixed;bottom:0rem;left:25%;font-size:75%;"> 
	program version 313_step130h 20:23:03:13:18:13
	</div>
	
	<div  id="APPLIC_AZIONE" > err APPLIC_AZIONE</div>
	
	<div id="test" style="display:none;">⚠test</div>
	<!-- script ini -->
	
	
	<script>
	let NodoText = "NodoText debugging for App313_step130h.svelte test20230316";
	
	function TESTAPP(NodoText){
		// 
		// verdescuro rgb(  3, 55, 73);
		// 
		// verdemedio rgb( 33, 78, 94);
		// 
		// verdelight rgb(128,153,163);
		// 
		// clementina rgb(252, 78,  5);
		// 
		// alert("RILEVATO INTERNO text da file esterno: "+NodoText);

		let TextoContentToDo = 
		`
		${NodoText}
		
		` ; 


   let    DESKTOP_CHECK = 1 ;
   if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
    { DESKTOP_CHECK = 0 ; } else { DESKTOP_CHECK = 1 ; }
   
   let LarghezzaBody_Rem = window.innerWidth   /16;
   let AltezzaBody_Rem   = window.innerHeight  /16;  
	


		let BordoBODY = 0.05; 
		let BordoMAIN = 0.05;
		let BordoBUON = 0.05;
		let BordoPOMM = 0.05;
		let BordoRANG = 0.05;
		
		let PaddingBODY = 0.00; 
		let PaddingMAIN = 0.00;
		let PaddingBUON = 0.00;
		let PaddingPOMM = 0.00;
		let PaddingRANG = 0.00;

		let CompensazioneEventualiBordi = BordoBODY;
		LarghezzaBody_Rem  =  LarghezzaBody_Rem - CompensazioneEventualiBordi;
		AltezzaBody_Rem    =  AltezzaBody_Rem   - CompensazioneEventualiBordi;



	
	
	// alert("TESTAPP ok!");
	}; // TESTAPP
	TESTAPP(NodoText);
	
	
	
	
	
	</script>
	
	<!-- script fin -->
	<style>
	
	main{
	
	background-color:inherit;color:inherit;
	font-family:"PT Mono", monospace;
	
	}
	
	
	img{  
	margin-left: auto;
	margin-right: auto;
	display: block;
	max-width:100%;
	max-height:100%;
	width: auto;
	width: 50%;
	height: auto;
	text-align:center!important;
	}
	
	
	
	.darkmode {
	background-color: black;
	color: orange;
	}
	
	
	.cursore {
	background: lime;
	line-height: 17px;
	margin-left: 3px;
	-webkit-animation: blink 0.8s infinite;
	width: 7px;
	height: 15px;
	}
	
	.cursores {
	background: lime;
	line-height: 17px;
	margin-left: 3px;
	-webkit-animation: blink 0.8s infinite;
	width: 7px;   width:  16px;
	height: 15px; height: 32px;
	}
	
	@-webkit-keyframes blink {
	0% {background: #222}
	50% {background: lime}
	100% {background: #222}
	}
	
	.hack_script{display:none;}
	
	</style>
	
	
	
	<div class="hack_script"><input type="range" step="1" min="1" max="2"><datalist><option value="1"></option><option value="2"></option></datalist></div>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Rasa&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
	
	</main>
	
	<!-- parte compiled fin -->