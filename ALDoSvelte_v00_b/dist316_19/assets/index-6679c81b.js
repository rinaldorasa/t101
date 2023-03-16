(function(){const t=document.createElement("link").relList;if(t&&t.supports&&t.supports("modulepreload"))return;for(const o of document.querySelectorAll('link[rel="modulepreload"]'))r(o);new MutationObserver(o=>{for(const a of o)if(a.type==="childList")for(const s of a.addedNodes)s.tagName==="LINK"&&s.rel==="modulepreload"&&r(s)}).observe(document,{childList:!0,subtree:!0});function e(o){const a={};return o.integrity&&(a.integrity=o.integrity),o.referrerPolicy&&(a.referrerPolicy=o.referrerPolicy),o.crossOrigin==="use-credentials"?a.credentials="include":o.crossOrigin==="anonymous"?a.credentials="omit":a.credentials="same-origin",a}function r(o){if(o.ep)return;o.ep=!0;const a=e(o);fetch(o.href,a)}})();function y(){}function H(n){return n()}function w(){return Object.create(null)}function A(n){n.forEach(H)}function K(n){return typeof n=="function"}function F(n,t){return n!=n?t==t:n!==t||n&&typeof n=="object"||typeof n=="function"}function W(n){return Object.keys(n).length===0}function i(n,t){n.appendChild(t)}function J(n,t,e){n.insertBefore(t,e||null)}function j(n){n.parentNode&&n.parentNode.removeChild(n)}function m(n){return document.createElement(n)}function Q(n){return document.createTextNode(n)}function p(){return Q(" ")}function d(n,t,e){e==null?n.removeAttribute(t):n.getAttribute(t)!==e&&n.setAttribute(t,e)}function X(n){return Array.from(n.childNodes)}function h(n,t,e,r){e===null?n.style.removeProperty(t):n.style.setProperty(t,e,r?"important":"")}let G;function N(n){G=n}const I=[],$=[];let b=[];const q=[],tt=Promise.resolve();let Z=!1;function nt(){Z||(Z=!0,tt.then(V))}function C(n){b.push(n)}const k=new Set;let f=0;function V(){if(f!==0)return;const n=G;do{try{for(;f<I.length;){const t=I[f];f++,N(t),et(t.$$)}}catch(t){throw I.length=0,f=0,t}for(N(null),I.length=0,f=0;$.length;)$.pop()();for(let t=0;t<b.length;t+=1){const e=b[t];k.has(e)||(k.add(e),e())}b.length=0}while(I.length);for(;q.length;)q.pop()();Z=!1,k.clear(),N(n)}function et(n){if(n.fragment!==null){n.update(),A(n.before_update);const t=n.dirty;n.dirty=[-1],n.fragment&&n.fragment.p(n.ctx,t),n.after_update.forEach(C)}}function ot(n){const t=[],e=[];b.forEach(r=>n.indexOf(r)===-1?t.push(r):e.push(r)),e.forEach(r=>r()),b=t}const it=new Set;function rt(n,t){n&&n.i&&(it.delete(n),n.i(t))}function lt(n,t,e,r){const{fragment:o,after_update:a}=n.$$;o&&o.m(t,e),r||C(()=>{const s=n.$$.on_mount.map(H).filter(K);n.$$.on_destroy?n.$$.on_destroy.push(...s):A(s),n.$$.on_mount=[]}),a.forEach(C)}function at(n,t){const e=n.$$;e.fragment!==null&&(ot(e.after_update),A(e.on_destroy),e.fragment&&e.fragment.d(t),e.on_destroy=e.fragment=null,e.ctx=[])}function dt(n,t){n.$$.dirty[0]===-1&&(I.push(n),nt(),n.$$.dirty.fill(0)),n.$$.dirty[t/31|0]|=1<<t%31}function st(n,t,e,r,o,a,s,v=[-1]){const g=G;N(n);const l=n.$$={fragment:null,ctx:[],props:a,update:y,not_equal:o,bound:w(),on_mount:[],on_destroy:[],on_disconnect:[],before_update:[],after_update:[],context:new Map(t.context||(g?g.$$.context:[])),callbacks:w(),dirty:v,skip_bound:!1,root:t.target||g.$$.root};s&&s(l.root);let P=!1;if(l.ctx=e?e(n,t.props||{},(c,_,...u)=>{const O=u.length?u[0]:_;return l.ctx&&o(l.ctx[c],l.ctx[c]=O)&&(!l.skip_bound&&l.bound[c]&&l.bound[c](O),P&&dt(n,c)),_}):[],l.update(),P=!0,A(l.before_update),l.fragment=r?r(l.ctx):!1,t.target){if(t.hydrate){const c=X(t.target);l.fragment&&l.fragment.l(c),c.forEach(j)}else l.fragment&&l.fragment.c();t.intro&&rt(n.$$.fragment),lt(n,t.target,t.anchor,t.customElement),V()}N(g)}class mt{$destroy(){at(this,1),this.$destroy=y}$on(t,e){if(!K(e))return y;const r=this.$$.callbacks[t]||(this.$$.callbacks[t]=[]);return r.push(e),()=>{const o=r.indexOf(e);o!==-1&&r.splice(o,1)}}$set(t){this.$$set&&!W(t)&&(this.$$.skip_bound=!0,this.$$set(t),this.$$.skip_bound=!1)}}function ct(n){let t,e,r,o,a,s,v,g,l,P,c,_,u,O,T,E,x,R,D,S,L,B,U,M;return{c(){t=m("main"),e=m("div"),e.textContent="program version 313_step130h 20:23:03:13:18:13",r=p(),o=m("div"),o.textContent="err APPLIC_AZIONE",a=p(),s=m("div"),s.textContent="⚠test",v=p(),g=m("script"),g.textContent=`let NodoText = "NodoText debugging for App313_step130h.svelte test20230316";
	
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
		\`
		\${NodoText}
		
		\` ; 


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




   let MargineSinistra_Rem = 5 ;
   if (DESKTOP_CHECK == 0){MargineSinistra_Rem = 5.0 ;}
   if (DESKTOP_CHECK == 1){MargineSinistra_Rem = 2.5 ;}
   
   let BordoToggleDevice_Rem;
   BordoToggleDevice_Rem = MargineSinistra_Rem * 0.50;
   
   let LarghezzaApplicazione_Rem = LarghezzaBody_Rem - (MargineSinistra_Rem*2.00);
   let AltezzaApplicazione_Rem   = AltezzaBody_Rem   - (MargineSinistra_Rem*1.25);
   AltezzaApplicazione_Rem   = AltezzaApplicazione_Rem  -  PaddingPOMM;  
   
   let LarghezzaPianoTerra = LarghezzaApplicazione_Rem;
   let AltezzaPianoTerra   = AltezzaApplicazione_Rem;
   
   let LarghezzaPrimoPiano = LarghezzaApplicazione_Rem;
   let AltezzaPrimoPiano   = AltezzaApplicazione_Rem;






		let PianoTerraPrimoPiano=
		\`
		<div id="PIANO_TERRA">⚠PIANO_TERRA</div>
		<div id="PRIMO_PIANO">⚠PRIMO_PIANO</div>
		
		\`;
		
		
		let Test_0101=
		\`
		<div id="TEST_0101"> ⚠TEST_0101</div>
		\`;
		
		let TogSiTogNo=
		\`
		<div id="TOG_NO" onclick="Tog_No()" style="display:none;">NO</div>
		<div id="TOG_SI" onclick="Tog_Si()" style="display:block;">SI</div>
		
		\`;







	let Pomeriggio=
	\`
	<div id="POMERIGGIO" style="padding-top:0.50rem;  display:block;">
	
	
		<button id="DARKMODO" onclick="DarkModo()"  style="position:static;top:0rem;left:0.00rem;margin:0rem;padding:0rem;color:maroon;font-size:1.25rem;border:solid 0.005rem blue;border-radius:0.5rem;cursor:pointer;"> dark mode  </button>
		<button id="LIGHTMOD" onclick="LightModo()" style="position:static;top:0rem;left:1.25rem;margin:0rem;padding:0rem;color:orange;font-size:1.25rem;border:solid 0.005rem blue;border-radius:0.5rem;cursor:pointer;"> light mode </button>
		
		<button id="SLIDERSI" onclick="SliderSi()" style="position:static;top:0rem;left:0.00rem;margin:0rem;padding:0rem;color:blue;font-size:1.25rem;border:solid 0.005rem blue;border-radius:0.5rem;cursor:pointer;"> vedi slider    </button>
		<button id="SLIDERNO" onclick="SliderNo()" style="position:static;top:0rem;left:1.25rem;margin:0rem;padding:0rem;color:magenta;font-size:1.25rem;border:solid 0.005rem blue;border-radius:0.5rem;cursor:pointer;"> nascondi slider </button>
		
		<button id="BORDERSI" onclick="BorderSi()" style="position:static;top:0rem;left:0.00rem;margin:0rem;padding:0rem;color:blue;font-size:1.25rem;border:solid 0.005rem blue;border-radius:0.5rem;cursor:pointer;"> BorderSi()    </button>
		<button id="BORDERNO" onclick="BorderNo()" style="position:static;top:0rem;left:1.25rem;margin:0rem;padding:0rem;color:magenta;font-size:1.25rem;border:solid 0.005rem blue;border-radius:0.5rem;cursor:pointer;"> BorderNo() </button>
		
		
		<button onclick="BottoneTest()">BottoneTest()</button>
	
	
	
		<div id="OGGI">
			<div style="border:solid 0.075rem rgba(252,78,5,0.5);">
			
			\`+TextoContentToDo +\`
			
			</div>
		</div>
	
	</div>
	\`;




	let Immagini=
	\`
	<article id="IMMAGINI">
	
	<!--
	<img src="https://scrivi.altervista.org/testsvelte/lib221a/svelte_code_1.jpg" alt="case_study_codice_1"><br>
	<img src="https://scrivi.altervista.org/testsvelte/lib221a/svelte_code_2.jpg" alt="case_study_codice_2"><br>
	-->
	
	
	</article>
	
	\`;



	let Buongiorno=
	\`
	<div id="BUONGIORNO" style="font-family:'Dancing Script';display:none;">
	
	305aphp 2023:03:05:10:10
	
	\${Immagini}
	
	(--immagini--)
	
	
	</div>
	\`;



	let ContenitoreInputRangeDatalist=
	\`
	<article id="CONTENITORE_INPUT_0101"  style="display:block;">
	<div>
	<input id="INPUT_SCELTO_0101" type="range" list="LISTA_0101" step="0.10" min="0.00" max="6.00" /> 
	</div>
	</article> 
	<datalist id="LISTA_0101">
	<option id="OPZ_00" value="0.00"> </option> 
	<option id="OPZ_01" value="0.11"> </option> 
	<option id="OPZ_02" value="0.22"> </option> 
	<option id="OPZ_03" value="0.33"> </option> 
	<option id="OPZ_04" value="0.44"> </option> 
	<option id="OPZ_05" value="0.55"> </option> 
	<option id="OPZ_06" value="0.66"> </option> 
	<option id="OPZ_07" value="0.77"> </option> 
	<option id="OPZ_08" value="0.88"> </option> 
	<option id="OPZ_09" value="0.99"> </option> 
	<option id="OPZ_10" value="1.00"> </option> 
	<option id="OPZ_11" value="1.11"> </option> 
	<option id="OPZ_12" value="1.22"> </option> 
	<option id="OPZ_13" value="1.33"> </option> 
	<option id="OPZ_14" value="1.44"> </option> 
	<option id="OPZ_15" value="1.55"> </option> 
	<option id="OPZ_16" value="1.66"> </option> 
	<option id="OPZ_17" value="1.77"> </option> 
	<option id="OPZ_18" value="1.88"> </option> 
	<option id="OPZ_19" value="1.99"> </option> 
	<option id="OPZ_20" value="2.00"> </option> 
	<option id="OPZ_21" value="2.11"> </option> 
	<option id="OPZ_22" value="2.22"> </option> 
	<option id="OPZ_23" value="2.33"> </option> 
	<option id="OPZ_24" value="2.44"> </option> 
	<option id="OPZ_25" value="2.55"> </option> 
	<option id="OPZ_26" value="2.66"> </option> 
	<option id="OPZ_27" value="2.77"> </option> 
	<option id="OPZ_28" value="2.88"> </option> 
	<option id="OPZ_29" value="2.99"> </option> 
	<option id="OPZ_30" value="3.00"> </option> 
	<option id="OPZ_31" value="3.11"> </option> 
	<option id="OPZ_32" value="3.22"> </option> 
	<option id="OPZ_33" value="3.33"> </option> 
	<option id="OPZ_34" value="3.44"> </option> 
	<option id="OPZ_35" value="3.55"> </option> 
	<option id="OPZ_36" value="3.66"> </option> 
	<option id="OPZ_37" value="3.77"> </option> 
	<option id="OPZ_38" value="3.88"> </option> 
	<option id="OPZ_39" value="3.99"> </option> 
	<option id="OPZ_40" value="4.00"> </option> 
	<option id="OPZ_41" value="4.11"> </option> 
	<option id="OPZ_42" value="4.22"> </option> 
	<option id="OPZ_43" value="4.33"> </option> 
	<option id="OPZ_44" value="4.44"> </option> 
	<option id="OPZ_45" value="4.55"> </option> 
	<option id="OPZ_46" value="4.66"> </option> 
	<option id="OPZ_47" value="4.77"> </option> 
	<option id="OPZ_48" value="4.88"> </option> 
	<option id="OPZ_49" value="4.99"> </option> 
	<option id="OPZ_50" value="5.00"> </option> 
	<option id="OPZ_51" value="5.11"> </option> 
	<option id="OPZ_52" value="5.22"> </option> 
	<option id="OPZ_53" value="5.33"> </option> 
	<option id="OPZ_54" value="5.44"> </option> 
	<option id="OPZ_55" value="5.55"> </option> 
	<option id="OPZ_56" value="5.66"> </option> 
	<option id="OPZ_57" value="5.77"> </option> 
	<option id="OPZ_58" value="5.88"> </option> 
	<option id="OPZ_59" value="5.99"> </option>
	<option id="OPZ_60" value="6.00"> </option> 
	</datalist> 
	
	\`;
	
	
	

	let dgebiPianoTerra =
	\`
	<style>
	#MAIN{
	position:fixed;top:0rem;left:0rem;
	width: \`+LarghezzaBody_Rem+\`rem;
	height:\`+AltezzaBody_Rem+\`rem;
	
	}
	
	
	#PIANO_TERRA{
	position:fixed;top:0rem;left:\`+MargineSinistra_Rem+\`rem;
	width: \`+LarghezzaPianoTerra+\`rem;
	height:\`+AltezzaPianoTerra+\`rem;
	
	
	
	}
	
	</style>
	
	
	\`;
	
	
	
	
	let dgebiPrimoPiano =
	\`
	<style>
	
	
	
	#PRIMO_PIANO{
	position:fixed;top:0rem;left:\`+MargineSinistra_Rem+\`rem;
	width: \`+LarghezzaPrimoPiano+\`rem;
	height:\`+AltezzaPrimoPiano+\`rem;
	
	
	}

	
	
	#BUONGIORNO,#POMERIGGIO{
	position:fixed;top:0rem;left:\`+MargineSinistra_Rem+\`rem;
	width: \`+LarghezzaPrimoPiano+\`rem;
	height:\`+AltezzaPrimoPiano+\`rem;
	text-align:left;
	overflow:auto;
	}
	
	#BUONGIORNO{
	padding:\`+PaddingBUON+\`rem;
	z-index:10000000;
	}
	
	
	
	#POMERIGGIO{
	padding:\`+PaddingPOMM+\`rem;
	z-index:initial;
	}
	
	
	
	</style>
	
	
	\`;
	
	
	
	
	
	let dgebiTogSi=
	\`
	<style>
	#TOG_SI{position:fixed;bottom:0rem;left:0rem;
	
		border-top:solid     \`+BordoToggleDevice_Rem+\`rem rgba(102,152,105,0);
		border-right:solid   \`+BordoToggleDevice_Rem+\`rem rgba(102,152,105,0);
		border-bottom:solid  \`+BordoToggleDevice_Rem+\`rem rgba(102,152,105,1);
		border-left:solid    \`+BordoToggleDevice_Rem+\`rem rgba(102,152,105,1);
		border-radius:0.5rem;
		border-radius:0.0rem;
		display:inline-block; 
		cursor:pointer;
		z-index:10000000;
	}
	</style>
	
	\`;
	
	
	
	let dgebiTogNo=
	\`
	<style>
	#TOG_NO{position:fixed;bottom:0rem;left:0rem;
	
		border-top:solid     \`+BordoToggleDevice_Rem+\`rem rgba(102,152,105,1);
		border-right:solid   \`+BordoToggleDevice_Rem+\`rem rgba(102,152,105,1);
		border-bottom:solid  \`+BordoToggleDevice_Rem+\`rem rgba(102,152,105,0);
		border-left:solid    \`+BordoToggleDevice_Rem+\`rem rgba(102,152,105,0);
		border-radius:0.5rem;
		border-radius:0.0rem;
		display:inline-block; 
		cursor:pointer;
		z-index:10000000;
	
	
	} 
	</style>
	
	
	\`;
	



	
	document.getElementById("APPLIC_AZIONE").innerHTML=
	\`
	\${PianoTerraPrimoPiano}
	
	\${Test_0101}
	
	\${ TogSiTogNo }
	
	
	\${Pomeriggio}
	
	\${Buongiorno}
	
	\${ContenitoreInputRangeDatalist}
	
	
	\`;
	
		
	
	document.getElementById("PIANO_TERRA").innerHTML=
	\`
	\${dgebiPianoTerra}
	
	\`;
	
	
	document.getElementById("PRIMO_PIANO").innerHTML=
	\`
	
	\${dgebiPrimoPiano}
	
	\`;
	
	
	
	document.getElementById("TOG_SI").innerHTML=
	\`
	\${dgebiTogSi}
	
	\`;
	
	
	document.getElementById("TOG_NO").innerHTML=
	\`
	\${dgebiTogNo}
	
	\`;
	
	



	let TIPO_DISPOSITIVO=DESKTOP_CHECK  ;
	let LARGHEZZA_PIANOTERRA = LarghezzaPianoTerra;
	let ALTEZZA_PRIMOPIANO = AltezzaPrimoPiano;
	let MARGINE_SINISTRA = MargineSinistra_Rem;




	//
	// 0=mobile 1=desktop
	//
	// alert(TIPO_DISPOSITIVO);
	//
	// || 
	// || internamente a questa funzione
	// || viene passato TIPO_DISPOSITIVO importante
	// || riconoscimento del tipo dispositivo
	// || che rende possibile responsive
	// || tramite variabili javascrit
	// || 
	// || 
	// \\/
	function sonda_Input_0101(arg0,arg1,arg2,arg3){
	
	let TipoDiDispositivo=arg0;
	let LarghezzaPianoterra=arg1;
	let AltezzaPrimopiano=arg2;
	let MargineSinistra =arg3;
	
	
	//alert("MargineSinistra= " + MargineSinistra );
	
	let   VALORE_DI_INPUT_0101=document.getElementById("INPUT_SCELTO_0101").value; 
	let   DIM_INPUT_0101 = VALORE_DI_INPUT_0101;
	
	
	if (TipoDiDispositivo===0){
	DIM_INPUT_0101 = DIM_INPUT_0101 * 0.5;
	}
	
	if (TipoDiDispositivo===1){
	DIM_INPUT_0101 = DIM_INPUT_0101 * 0.325;
	}
	
	
	
	document.getElementById("TEST_0101").innerHTML=
	\`
	<style>
	#CONTENITORE_INPUT_0101{
	position:fixed;
	bottom:0rem;left:\`+MargineSinistra+\`rem;
	
	
	width:\`+ LarghezzaPianoterra +\`rem;
	width:\`+ (LarghezzaPianoterra * 1) +\`rem;
	
	
	height:\`+MargineSinistra+\`rem;
	
	
	}
	
	input[type="range"]{
	-webkit-appearance:none;
	
	background-color:transparent;
	
	width:100%;
	width:99.0%;
	
	
	z-index:1000000!important;
	
	}
	
	
	
	#APPLICAZIONE{font-size:\`+DIM_INPUT_0101+\`rem!important;}
	#BUONGIORNO{font-size:\`+DIM_INPUT_0101+\`rem!important;}
	#POMERIGGIO{font-size:\`+DIM_INPUT_0101+\`rem!important;}
	
	
	
	img{width:\`+ (DIM_INPUT_0101 * 20) +\`rem!important;}
	
	
	
	
	#DARKMODO:hover{background-color:teal!important;color:white!important;}
	#LIGHTMOD:hover{background-color:teal!important;color:white!important;}
	
	#SLIDERSI:hover{background-color:maroon!important;color:white!important;}
	#SLIDERNO:hover{background-color:maroon!important;color:white!important;}
	
	
	
	</style>
	
	\`;
	
	
	
	} ;
	setInterval(sonda_Input_0101, 1, TIPO_DISPOSITIVO,LARGHEZZA_PIANOTERRA ,ALTEZZA_PRIMOPIANO,MARGINE_SINISTRA ) ;
	
	
	



	
	
	// 	alert("2023:03:16:09:28 debug TESTAPP ok!");
	}; // TESTAPP
	TESTAPP(NodoText);
	
	





	// toggle harlequin mode ini 
	
	function Tog_No(){
	document.querySelector("#BUONGIORNO").style.display="none";
	document.querySelector("#POMERIGGIO").style.display="block";
	document.querySelector("#TOG_NO").style.display="none";
	document.querySelector("#TOG_SI").style.display="block";
	}
	
	
	function Tog_Si(){
	document.querySelector("#BUONGIORNO").style.display="block";
	document.querySelector("#POMERIGGIO").style.display="none";
	document.querySelector("#TOG_NO").style.display="block";
	document.querySelector("#TOG_SI").style.display="none";
	}
	
	// toggle harlequin mode fin 




	// toggle dark light ini 
	
	function DarkModo() { 
	
	
	// ElementoMain = document.querySelector("#MAIN");
	// ElementoMain.style.color="orange";
	// ElementoMain.style.backgroundColor="black"; 
	// 
	// ElementoPomeriggio = document.querySelector("#POMERIGGIO");
	// ElementoPomeriggio.style.color="orange";
	// ElementoPomeriggio.style.backgroundColor="black";
	// 
	// ElementoBuongiorno = document.querySelector("#BUONGIORNO");
	// ElementoBuongiorno.style.color="orange";
	// ElementoBuongiorno.style.backgroundColor="black";
	// 
	// ElementoContenitoreInput_0101 = document.querySelector("#INPUT_SCELTO_0101");
	// ElementoContenitoreInput_0101.style.color="orange";
	// ElementoContenitoreInput_0101.style.backgroundColor="black";
	
	
	
	// eco sistema 
	ElementoMain = document.querySelector("#MAIN");
	ElementoMain.style.backgroundColor="rgb(  3, 55, 73)"; 
	ElementoMain.style.color="rgb(252, 78,  5)";
	
	ElementoPomeriggio = document.querySelector("#POMERIGGIO");
	ElementoPomeriggio.style.backgroundColor="rgb(  3, 55, 73)";
	ElementoPomeriggio.style.color="rgb(252, 78,  5)";
	
	
	ElementoBuongiorno = document.querySelector("#BUONGIORNO");
	ElementoBuongiorno.style.backgroundColor="rgb(  3, 55, 73)";
	ElementoBuongiorno.style.color="rgb(252, 78,  5)";
	
	
	ElementoContenitoreInput_0101 = document.querySelector("#INPUT_SCELTO_0101");
	ElementoContenitoreInput_0101.style.backgroundColor="rgb(  3, 55, 73)";
	ElementoContenitoreInput_0101.style.color="rgb(252, 78,  5)";
	
	
	}
	
	
	
	function LightModo() {
	
	ElementoMain = document.querySelector("#MAIN");
	ElementoMain.style.color="initial";
	ElementoMain.style.backgroundColor="initial";
	
	ElementoPomeriggio = document.querySelector("#POMERIGGIO");
	ElementoPomeriggio.style.color="initial";
	ElementoPomeriggio.style.backgroundColor="initial";
	
	ElementoBuongiorno = document.querySelector("#BUONGIORNO");
	ElementoBuongiorno.style.color="initial";
	ElementoBuongiorno.style.backgroundColor="initial";
	
	ElementoContenitoreInput_0101 = document.querySelector("#INPUT_SCELTO_0101");
	ElementoContenitoreInput_0101.style.color="initial";
	ElementoContenitoreInput_0101.style.backgroundColor="initial";
	
	
	}
	
	// toggle dark light fin 
	
	
	
	
	
	// toggle slider ini 
	
	function SliderNo() {
	ElementoSlider = document.querySelector("#CONTENITORE_INPUT_0101");
	ElementoSlider.style.display="none";
	
	}
	
	
	function SliderSi() {
	ElementoSlider = document.querySelector("#CONTENITORE_INPUT_0101");
	ElementoSlider.style.display="block";
	
	}
	
	// toggle slider fin 
	
	
	
	//  border debugging ini 
	
	function BorderSi(){
	ElementoBorder_CONTENITORE_INPUT_0101 = document.querySelector("#CONTENITORE_INPUT_0101");
	ElementoBorder_CONTENITORE_INPUT_0101.style.border="solid "+BordoRANG+"rem magenta";
	ElementoBorder_MAIN = document.querySelector("#MAIN");
	ElementoBorder_MAIN.style.border="solid "+BordoMAIN+"rem olive";
	ElementoBorder_BUONGIORNO = document.querySelector("#BUONGIORNO");
	ElementoBorder_BUONGIORNO.style.border="solid "+BordoBUON+"rem maroon";
	ElementoBorder_POMERIGGIO = document.querySelector("#POMERIGGIO");
	ElementoBorder_POMERIGGIO.style.border="solid "+BordoPOMM+"rem lime";
	
	
	}
	
	function BorderNo(){
	ElementoBorder_CONTENITORE_INPUT_0101 = document.querySelector("#CONTENITORE_INPUT_0101");
	ElementoBorder_CONTENITORE_INPUT_0101.style.border="solid 0.00rem magenta";
	ElementoBorder_MAIN = document.querySelector("#MAIN");
	ElementoBorder_MAIN.style.border="solid 0.00rem olive";
	ElementoBorder_BUONGIORNO = document.querySelector("#BUONGIORNO");
	ElementoBorder_BUONGIORNO.style.border="solid 0.00rem maroon";
	ElementoBorder_POMERIGGIO = document.querySelector("#POMERIGGIO");
	ElementoBorder_POMERIGGIO.style.border="solid 0.00rem lime";
	
	
	}
	
	
	
	//  border debugging fin 
	
	
	
	
	function BottoneTest(){alert("OK BottoneTest()")};
	
	







	
	
	// 	alert("2023:03:16:09:35 svelte compiled ok!");`,l=p(),P=m("style"),P.textContent=`main{
	
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
	
	.hack_script{display:none;}`,c=p(),_=m("div"),u=m("input"),O=m("datalist"),T=m("option"),E=m("option"),x=p(),R=m("link"),D=p(),S=m("link"),L=p(),B=m("link"),U=p(),M=m("link"),h(e,"position","fixed"),h(e,"bottom","0rem"),h(e,"left","25%"),h(e,"font-size","75%"),d(o,"id","APPLIC_AZIONE"),d(s,"id","test"),h(s,"display","none"),d(u,"type","range"),d(u,"step","1"),d(u,"min","1"),d(u,"max","2"),T.__value="1",T.value=T.__value,E.__value="2",E.value=E.__value,d(_,"class","hack_script"),d(R,"rel","preconnect"),d(R,"href","https://fonts.gstatic.com"),d(S,"href","https://fonts.googleapis.com/css2?family=PT+Mono&display=swap"),d(S,"rel","stylesheet"),d(B,"href","https://fonts.googleapis.com/css2?family=Rasa&display=swap"),d(B,"rel","stylesheet"),d(M,"href","https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap"),d(M,"rel","stylesheet"),d(t,"id","MAIN")},m(z,Y){J(z,t,Y),i(t,e),i(t,r),i(t,o),i(t,a),i(t,s),i(t,v),i(t,g),i(t,l),i(t,P),i(t,c),i(t,_),i(_,u),i(_,O),i(O,T),i(O,E),i(t,x),i(t,R),i(t,D),i(t,S),i(t,L),i(t,B),i(t,U),i(t,M)},p:y,i:y,o:y,d(z){z&&j(t)}}}class ut extends mt{constructor(t){super(),st(this,t,null,ct,F,{})}}new ut({target:document.getElementById("app")});
