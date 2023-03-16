(function(){const t=document.createElement("link").relList;if(t&&t.supports&&t.supports("modulepreload"))return;for(const o of document.querySelectorAll('link[rel="modulepreload"]'))r(o);new MutationObserver(o=>{for(const l of o)if(l.type==="childList")for(const s of l.addedNodes)s.tagName==="LINK"&&s.rel==="modulepreload"&&r(s)}).observe(document,{childList:!0,subtree:!0});function e(o){const l={};return o.integrity&&(l.integrity=o.integrity),o.referrerPolicy&&(l.referrerPolicy=o.referrerPolicy),o.crossOrigin==="use-credentials"?l.credentials="include":o.crossOrigin==="anonymous"?l.credentials="omit":l.credentials="same-origin",l}function r(o){if(o.ep)return;o.ep=!0;const l=e(o);fetch(o.href,l)}})();function v(){}function K(n){return n()}function C(){return Object.create(null)}function Z(n){n.forEach(K)}function q(n){return typeof n=="function"}function F(n,t){return n!=n?t==t:n!==t||n&&typeof n=="object"||typeof n=="function"}function W(n){return Object.keys(n).length===0}function i(n,t){n.appendChild(t)}function J(n,t,e){n.insertBefore(t,e||null)}function j(n){n.parentNode&&n.parentNode.removeChild(n)}function p(n){return document.createElement(n)}function Q(n){return document.createTextNode(n)}function m(){return Q(" ")}function d(n,t,e){e==null?n.removeAttribute(t):n.getAttribute(t)!==e&&n.setAttribute(t,e)}function X(n){return Array.from(n.childNodes)}function T(n,t,e,r){e===null?n.style.removeProperty(t):n.style.setProperty(t,e,r?"important":"")}let D;function z(n){D=n}const h=[],U=[];let b=[];const H=[],tt=Promise.resolve();let x=!1;function nt(){x||(x=!0,tt.then(V))}function B(n){b.push(n)}const k=new Set;let P=0;function V(){if(P!==0)return;const n=D;do{try{for(;P<h.length;){const t=h[P];P++,z(t),et(t.$$)}}catch(t){throw h.length=0,P=0,t}for(z(null),h.length=0,P=0;U.length;)U.pop()();for(let t=0;t<b.length;t+=1){const e=b[t];k.has(e)||(k.add(e),e())}b.length=0}while(h.length);for(;H.length;)H.pop()();x=!1,k.clear(),z(n)}function et(n){if(n.fragment!==null){n.update(),Z(n.before_update);const t=n.dirty;n.dirty=[-1],n.fragment&&n.fragment.p(n.ctx,t),n.after_update.forEach(B)}}function ot(n){const t=[],e=[];b.forEach(r=>n.indexOf(r)===-1?t.push(r):e.push(r)),e.forEach(r=>r()),b=t}const it=new Set;function rt(n,t){n&&n.i&&(it.delete(n),n.i(t))}function at(n,t,e,r){const{fragment:o,after_update:l}=n.$$;o&&o.m(t,e),r||B(()=>{const s=n.$$.on_mount.map(K).filter(q);n.$$.on_destroy?n.$$.on_destroy.push(...s):Z(s),n.$$.on_mount=[]}),l.forEach(B)}function lt(n,t){const e=n.$$;e.fragment!==null&&(ot(e.after_update),Z(e.on_destroy),e.fragment&&e.fragment.d(t),e.on_destroy=e.fragment=null,e.ctx=[])}function dt(n,t){n.$$.dirty[0]===-1&&(h.push(n),nt(),n.$$.dirty.fill(0)),n.$$.dirty[t/31|0]|=1<<t%31}function st(n,t,e,r,o,l,s,R=[-1]){const _=D;z(n);const a=n.$$={fragment:null,ctx:[],props:l,update:v,not_equal:o,bound:C(),on_mount:[],on_destroy:[],on_disconnect:[],before_update:[],after_update:[],context:new Map(t.context||(_?_.$$.context:[])),callbacks:C(),dirty:R,skip_bound:!1,root:t.target||_.$$.root};s&&s(a.root);let O=!1;if(a.ctx=e?e(n,t.props||{},(c,g,...u)=>{const f=u.length?u[0]:g;return a.ctx&&o(a.ctx[c],a.ctx[c]=f)&&(!a.skip_bound&&a.bound[c]&&a.bound[c](f),O&&dt(n,c)),g}):[],a.update(),O=!0,Z(a.before_update),a.fragment=r?r(a.ctx):!1,t.target){if(t.hydrate){const c=X(t.target);a.fragment&&a.fragment.l(c),c.forEach(j)}else a.fragment&&a.fragment.c();t.intro&&rt(n.$$.fragment),at(n,t.target,t.anchor,t.customElement),V()}z(_)}class pt{$destroy(){lt(this,1),this.$destroy=v}$on(t,e){if(!q(e))return v;const r=this.$$.callbacks[t]||(this.$$.callbacks[t]=[]);return r.push(e),()=>{const o=r.indexOf(e);o!==-1&&r.splice(o,1)}}$set(t){this.$$set&&!W(t)&&(this.$$.skip_bound=!0,this.$$set(t),this.$$.skip_bound=!1)}}function ct(n){let t,e,r,o,l,s,R,_,a,O,c,g,u,f,I,y,L,N,w,A,$,S,G,E;return{c(){t=p("main"),e=p("div"),e.textContent="program version 313_step130h 20:23:03:13:18:13",r=m(),o=p("div"),o.textContent="err APPLIC_AZIONE",l=m(),s=p("div"),s.textContent="⚠test",R=m(),_=p("script"),_.textContent=`let NodoText = "NodoText debugging for App313_step130h.svelte test20230316";
	
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



	
	
	// 	alert("2023:03:16:09:31 svelte compiled ok!");`,a=m(),O=p("style"),O.textContent=`main{
	
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
	
	.hack_script{display:none;}`,c=m(),g=p("div"),u=p("input"),f=p("datalist"),I=p("option"),y=p("option"),L=m(),N=p("link"),w=m(),A=p("link"),$=m(),S=p("link"),G=m(),E=p("link"),T(e,"position","fixed"),T(e,"bottom","0rem"),T(e,"left","25%"),T(e,"font-size","75%"),d(o,"id","APPLIC_AZIONE"),d(s,"id","test"),T(s,"display","none"),d(u,"type","range"),d(u,"step","1"),d(u,"min","1"),d(u,"max","2"),I.__value="1",I.value=I.__value,y.__value="2",y.value=y.__value,d(g,"class","hack_script"),d(N,"rel","preconnect"),d(N,"href","https://fonts.gstatic.com"),d(A,"href","https://fonts.googleapis.com/css2?family=PT+Mono&display=swap"),d(A,"rel","stylesheet"),d(S,"href","https://fonts.googleapis.com/css2?family=Rasa&display=swap"),d(S,"rel","stylesheet"),d(E,"href","https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap"),d(E,"rel","stylesheet"),d(t,"id","MAIN")},m(M,Y){J(M,t,Y),i(t,e),i(t,r),i(t,o),i(t,l),i(t,s),i(t,R),i(t,_),i(t,a),i(t,O),i(t,c),i(t,g),i(g,u),i(g,f),i(f,I),i(f,y),i(t,L),i(t,N),i(t,w),i(t,A),i(t,$),i(t,S),i(t,G),i(t,E)},p:v,i:v,o:v,d(M){M&&j(t)}}}class ut extends pt{constructor(t){super(),st(this,t,null,ct,F,{})}}new ut({target:document.getElementById("app")});
