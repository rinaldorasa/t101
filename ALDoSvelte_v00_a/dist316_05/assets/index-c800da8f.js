(function(){const t=document.createElement("link").relList;if(t&&t.supports&&t.supports("modulepreload"))return;for(const o of document.querySelectorAll('link[rel="modulepreload"]'))r(o);new MutationObserver(o=>{for(const a of o)if(a.type==="childList")for(const s of a.addedNodes)s.tagName==="LINK"&&s.rel==="modulepreload"&&r(s)}).observe(document,{childList:!0,subtree:!0});function n(o){const a={};return o.integrity&&(a.integrity=o.integrity),o.referrerPolicy&&(a.referrerPolicy=o.referrerPolicy),o.crossOrigin==="use-credentials"?a.credentials="include":o.crossOrigin==="anonymous"?a.credentials="omit":a.credentials="same-origin",a}function r(o){if(o.ep)return;o.ep=!0;const a=n(o);fetch(o.href,a)}})();function z(){}function Y(e){return e()}function G(){return Object.create(null)}function B(e){e.forEach(Y)}function U(e){return typeof e=="function"}function V(e,t){return e!=e?t==t:e!==t||e&&typeof e=="object"||typeof e=="function"}function W(e){return Object.keys(e).length===0}function i(e,t){e.appendChild(t)}function J(e,t,n){e.insertBefore(t,n||null)}function Z(e){e.parentNode&&e.parentNode.removeChild(e)}function c(e){return document.createElement(e)}function Q(e){return document.createTextNode(e)}function m(){return Q(" ")}function d(e,t,n){n==null?e.removeAttribute(t):e.getAttribute(t)!==n&&e.setAttribute(t,n)}function X(e){return Array.from(e.childNodes)}function A(e,t,n,r){n===null?e.style.removeProperty(t):e.style.setProperty(t,n,r?"important":"")}let M;function O(e){M=e}const y=[],H=[];let P=[];const j=[],tt=Promise.resolve();let w=!1;function et(){w||(w=!0,tt.then(q))}function I(e){P.push(e)}const $=new Set;let b=0;function q(){if(b!==0)return;const e=M;do{try{for(;b<y.length;){const t=y[b];b++,O(t),nt(t.$$)}}catch(t){throw y.length=0,b=0,t}for(O(null),y.length=0,b=0;H.length;)H.pop()();for(let t=0;t<P.length;t+=1){const n=P[t];$.has(n)||($.add(n),n())}P.length=0}while(y.length);for(;j.length;)j.pop()();w=!1,$.clear(),O(e)}function nt(e){if(e.fragment!==null){e.update(),B(e.before_update);const t=e.dirty;e.dirty=[-1],e.fragment&&e.fragment.p(e.ctx,t),e.after_update.forEach(I)}}function ot(e){const t=[],n=[];P.forEach(r=>e.indexOf(r)===-1?t.push(r):n.push(r)),n.forEach(r=>r()),P=t}const it=new Set;function rt(e,t){e&&e.i&&(it.delete(e),e.i(t))}function lt(e,t,n,r){const{fragment:o,after_update:a}=e.$$;o&&o.m(t,n),r||I(()=>{const s=e.$$.on_mount.map(Y).filter(U);e.$$.on_destroy?e.$$.on_destroy.push(...s):B(s),e.$$.on_mount=[]}),a.forEach(I)}function at(e,t){const n=e.$$;n.fragment!==null&&(ot(n.after_update),B(n.on_destroy),n.fragment&&n.fragment.d(t),n.on_destroy=n.fragment=null,n.ctx=[])}function dt(e,t){e.$$.dirty[0]===-1&&(y.push(e),et(),e.$$.dirty.fill(0)),e.$$.dirty[t/31|0]|=1<<t%31}function st(e,t,n,r,o,a,s,T=[-1]){const p=M;O(e);const l=e.$$={fragment:null,ctx:[],props:a,update:z,not_equal:o,bound:G(),on_mount:[],on_destroy:[],on_disconnect:[],before_update:[],after_update:[],context:new Map(t.context||(p?p.$$.context:[])),callbacks:G(),dirty:T,skip_bound:!1,root:t.target||p.$$.root};s&&s(l.root);let _=!1;if(l.ctx=n?n(e,t.props||{},(u,g,...f)=>{const h=f.length?f[0]:g;return l.ctx&&o(l.ctx[u],l.ctx[u]=h)&&(!l.skip_bound&&l.bound[u]&&l.bound[u](h),_&&dt(e,u)),g}):[],l.update(),_=!0,B(l.before_update),l.fragment=r?r(l.ctx):!1,t.target){if(t.hydrate){const u=X(t.target);l.fragment&&l.fragment.l(u),u.forEach(Z)}else l.fragment&&l.fragment.c();t.intro&&rt(e.$$.fragment),lt(e,t.target,t.anchor,t.customElement),q()}O(p)}class ct{$destroy(){at(this,1),this.$destroy=z}$on(t,n){if(!U(n))return z;const r=this.$$.callbacks[t]||(this.$$.callbacks[t]=[]);return r.push(n),()=>{const o=r.indexOf(n);o!==-1&&r.splice(o,1)}}$set(t){this.$$set&&!W(t)&&(this.$$.skip_bound=!0,this.$$set(t),this.$$.skip_bound=!1)}}function ut(e){let t,n,r,o,a,s,T,p,l,_,u,g,f,h,k,v,C,x,D,R,L,E,K,N;return{c(){t=c("main"),n=c("div"),n.textContent="program version 313_step130h 20:23:03:13:18:13",r=m(),o=c("div"),o.textContent="err APPLIC_AZIONE",a=m(),s=c("div"),s.textContent="⚠test",T=m(),p=c("script"),p.textContent=`let NodoText = "NodoText debugging for App313_step130h.svelte test20230316";
	
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





	
	
	// 		alert("2023:03:16:07:16 debug TESTAPP ok!");
	}; // TESTAPP
	TESTAPP(NodoText);`,l=m(),_=c("style"),_.textContent=`main{
	
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
	
	.hack_script{display:none;}`,u=m(),g=c("div"),f=c("input"),h=c("datalist"),k=c("option"),v=c("option"),C=m(),x=c("link"),D=m(),R=c("link"),L=m(),E=c("link"),K=m(),N=c("link"),A(n,"position","fixed"),A(n,"bottom","0rem"),A(n,"left","25%"),A(n,"font-size","75%"),d(o,"id","APPLIC_AZIONE"),d(s,"id","test"),A(s,"display","none"),d(f,"type","range"),d(f,"step","1"),d(f,"min","1"),d(f,"max","2"),k.__value="1",k.value=k.__value,v.__value="2",v.value=v.__value,d(g,"class","hack_script"),d(x,"rel","preconnect"),d(x,"href","https://fonts.gstatic.com"),d(R,"href","https://fonts.googleapis.com/css2?family=PT+Mono&display=swap"),d(R,"rel","stylesheet"),d(E,"href","https://fonts.googleapis.com/css2?family=Rasa&display=swap"),d(E,"rel","stylesheet"),d(N,"href","https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap"),d(N,"rel","stylesheet"),d(t,"id","MAIN")},m(S,F){J(S,t,F),i(t,n),i(t,r),i(t,o),i(t,a),i(t,s),i(t,T),i(t,p),i(t,l),i(t,_),i(t,u),i(t,g),i(g,f),i(g,h),i(h,k),i(h,v),i(t,C),i(t,x),i(t,D),i(t,R),i(t,L),i(t,E),i(t,K),i(t,N)},p:z,i:z,o:z,d(S){S&&Z(t)}}}class ft extends ct{constructor(t){super(),st(this,t,null,ut,V,{})}}new ft({target:document.getElementById("app")});
