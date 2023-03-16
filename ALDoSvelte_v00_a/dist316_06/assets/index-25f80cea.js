(function(){const t=document.createElement("link").relList;if(t&&t.supports&&t.supports("modulepreload"))return;for(const i of document.querySelectorAll('link[rel="modulepreload"]'))r(i);new MutationObserver(i=>{for(const a of i)if(a.type==="childList")for(const d of a.addedNodes)d.tagName==="LINK"&&d.rel==="modulepreload"&&r(d)}).observe(document,{childList:!0,subtree:!0});function n(i){const a={};return i.integrity&&(a.integrity=i.integrity),i.referrerPolicy&&(a.referrerPolicy=i.referrerPolicy),i.crossOrigin==="use-credentials"?a.credentials="include":i.crossOrigin==="anonymous"?a.credentials="omit":a.credentials="same-origin",a}function r(i){if(i.ep)return;i.ep=!0;const a=n(i);fetch(i.href,a)}})();function v(){}function U(e){return e()}function G(){return Object.create(null)}function B(e){e.forEach(U)}function Y(e){return typeof e=="function"}function V(e,t){return e!=e?t==t:e!==t||e&&typeof e=="object"||typeof e=="function"}function W(e){return Object.keys(e).length===0}function o(e,t){e.appendChild(t)}function J(e,t,n){e.insertBefore(t,n||null)}function Z(e){e.parentNode&&e.parentNode.removeChild(e)}function c(e){return document.createElement(e)}function Q(e){return document.createTextNode(e)}function f(){return Q(" ")}function s(e,t,n){n==null?e.removeAttribute(t):e.getAttribute(t)!==n&&e.setAttribute(t,n)}function X(e){return Array.from(e.childNodes)}function A(e,t,n,r){n===null?e.style.removeProperty(t):e.style.setProperty(t,n,r?"important":"")}let w;function k(e){w=e}const y=[],H=[];let z=[];const j=[],tt=Promise.resolve();let $=!1;function et(){$||($=!0,tt.then(q))}function M(e){z.push(e)}const I=new Set;let b=0;function q(){if(b!==0)return;const e=w;do{try{for(;b<y.length;){const t=y[b];b++,k(t),nt(t.$$)}}catch(t){throw y.length=0,b=0,t}for(k(null),y.length=0,b=0;H.length;)H.pop()();for(let t=0;t<z.length;t+=1){const n=z[t];I.has(n)||(I.add(n),n())}z.length=0}while(y.length);for(;j.length;)j.pop()();$=!1,I.clear(),k(e)}function nt(e){if(e.fragment!==null){e.update(),B(e.before_update);const t=e.dirty;e.dirty=[-1],e.fragment&&e.fragment.p(e.ctx,t),e.after_update.forEach(M)}}function it(e){const t=[],n=[];z.forEach(r=>e.indexOf(r)===-1?t.push(r):n.push(r)),n.forEach(r=>r()),z=t}const ot=new Set;function rt(e,t){e&&e.i&&(ot.delete(e),e.i(t))}function lt(e,t,n,r){const{fragment:i,after_update:a}=e.$$;i&&i.m(t,n),r||M(()=>{const d=e.$$.on_mount.map(U).filter(Y);e.$$.on_destroy?e.$$.on_destroy.push(...d):B(d),e.$$.on_mount=[]}),a.forEach(M)}function at(e,t){const n=e.$$;n.fragment!==null&&(it(n.after_update),B(n.on_destroy),n.fragment&&n.fragment.d(t),n.on_destroy=n.fragment=null,n.ctx=[])}function st(e,t){e.$$.dirty[0]===-1&&(y.push(e),et(),e.$$.dirty.fill(0)),e.$$.dirty[t/31|0]|=1<<t%31}function dt(e,t,n,r,i,a,d,T=[-1]){const p=w;k(e);const l=e.$$={fragment:null,ctx:[],props:a,update:v,not_equal:i,bound:G(),on_mount:[],on_destroy:[],on_disconnect:[],before_update:[],after_update:[],context:new Map(t.context||(p?p.$$.context:[])),callbacks:G(),dirty:T,skip_bound:!1,root:t.target||p.$$.root};d&&d(l.root);let _=!1;if(l.ctx=n?n(e,t.props||{},(u,g,...m)=>{const h=m.length?m[0]:g;return l.ctx&&i(l.ctx[u],l.ctx[u]=h)&&(!l.skip_bound&&l.bound[u]&&l.bound[u](h),_&&st(e,u)),g}):[],l.update(),_=!0,B(l.before_update),l.fragment=r?r(l.ctx):!1,t.target){if(t.hydrate){const u=X(t.target);l.fragment&&l.fragment.l(u),u.forEach(Z)}else l.fragment&&l.fragment.c();t.intro&&rt(e.$$.fragment),lt(e,t.target,t.anchor,t.customElement),q()}k(p)}class ct{$destroy(){at(this,1),this.$destroy=v}$on(t,n){if(!Y(n))return v;const r=this.$$.callbacks[t]||(this.$$.callbacks[t]=[]);return r.push(n),()=>{const i=r.indexOf(n);i!==-1&&r.splice(i,1)}}$set(t){this.$$set&&!W(t)&&(this.$$.skip_bound=!0,this.$$set(t),this.$$.skip_bound=!1)}}function ut(e){let t,n,r,i,a,d,T,p,l,_,u,g,m,h,P,O,C,x,D,R,L,E,K,N;return{c(){t=c("main"),n=c("div"),n.textContent="program version 313_step130h 20:23:03:13:18:13",r=f(),i=c("div"),i.textContent="err APPLIC_AZIONE",a=f(),d=c("div"),d.textContent="⚠test",T=f(),p=c("script"),p.textContent=`let NodoText = "NodoText debugging for App313_step130h.svelte test20230316";
	
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


	
	
	// 		
	alert("2023:03:16:08:59 debug TESTAPP ok!");
	}; // TESTAPP
	TESTAPP(NodoText);`,l=f(),_=c("style"),_.textContent=`main{
	
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
	
	.hack_script{display:none;}`,u=f(),g=c("div"),m=c("input"),h=c("datalist"),P=c("option"),O=c("option"),C=f(),x=c("link"),D=f(),R=c("link"),L=f(),E=c("link"),K=f(),N=c("link"),A(n,"position","fixed"),A(n,"bottom","0rem"),A(n,"left","25%"),A(n,"font-size","75%"),s(i,"id","APPLIC_AZIONE"),s(d,"id","test"),A(d,"display","none"),s(m,"type","range"),s(m,"step","1"),s(m,"min","1"),s(m,"max","2"),P.__value="1",P.value=P.__value,O.__value="2",O.value=O.__value,s(g,"class","hack_script"),s(x,"rel","preconnect"),s(x,"href","https://fonts.gstatic.com"),s(R,"href","https://fonts.googleapis.com/css2?family=PT+Mono&display=swap"),s(R,"rel","stylesheet"),s(E,"href","https://fonts.googleapis.com/css2?family=Rasa&display=swap"),s(E,"rel","stylesheet"),s(N,"href","https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap"),s(N,"rel","stylesheet"),s(t,"id","MAIN")},m(S,F){J(S,t,F),o(t,n),o(t,r),o(t,i),o(t,a),o(t,d),o(t,T),o(t,p),o(t,l),o(t,_),o(t,u),o(t,g),o(g,m),o(g,h),o(h,P),o(h,O),o(t,C),o(t,x),o(t,D),o(t,R),o(t,L),o(t,E),o(t,K),o(t,N)},p:v,i:v,o:v,d(S){S&&Z(t)}}}class mt extends ct{constructor(t){super(),dt(this,t,null,ut,V,{})}}new mt({target:document.getElementById("app")});
