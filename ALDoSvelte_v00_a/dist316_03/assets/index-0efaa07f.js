(function(){const t=document.createElement("link").relList;if(t&&t.supports&&t.supports("modulepreload"))return;for(const i of document.querySelectorAll('link[rel="modulepreload"]'))r(i);new MutationObserver(i=>{for(const a of i)if(a.type==="childList")for(const c of a.addedNodes)c.tagName==="LINK"&&c.rel==="modulepreload"&&r(c)}).observe(document,{childList:!0,subtree:!0});function n(i){const a={};return i.integrity&&(a.integrity=i.integrity),i.referrerPolicy&&(a.referrerPolicy=i.referrerPolicy),i.crossOrigin==="use-credentials"?a.credentials="include":i.crossOrigin==="anonymous"?a.credentials="omit":a.credentials="same-origin",a}function r(i){if(i.ep)return;i.ep=!0;const a=n(i);fetch(i.href,a)}})();function z(){}function Y(e){return e()}function H(){return Object.create(null)}function $(e){e.forEach(Y)}function U(e){return typeof e=="function"}function V(e,t){return e!=e?t==t:e!==t||e&&typeof e=="object"||typeof e=="function"}function W(e){return Object.keys(e).length===0}function o(e,t){e.appendChild(t)}function J(e,t,n){e.insertBefore(t,n||null)}function Z(e){e.parentNode&&e.parentNode.removeChild(e)}function d(e){return document.createElement(e)}function Q(e){return document.createTextNode(e)}function p(){return Q(" ")}function s(e,t,n){n==null?e.removeAttribute(t):e.getAttribute(t)!==n&&e.setAttribute(t,n)}function X(e){return Array.from(e.childNodes)}function T(e,t,n,r){n===null?e.style.removeProperty(t):e.style.setProperty(t,n,r?"important":"")}let M;function v(e){M=e}const P=[],j=[];let b=[];const G=[],tt=Promise.resolve();let S=!1;function et(){S||(S=!0,tt.then(q))}function C(e){b.push(e)}const B=new Set;let y=0;function q(){if(y!==0)return;const e=M;do{try{for(;y<P.length;){const t=P[y];y++,v(t),nt(t.$$)}}catch(t){throw P.length=0,y=0,t}for(v(null),P.length=0,y=0;j.length;)j.pop()();for(let t=0;t<b.length;t+=1){const n=b[t];B.has(n)||(B.add(n),n())}b.length=0}while(P.length);for(;G.length;)G.pop()();S=!1,B.clear(),v(e)}function nt(e){if(e.fragment!==null){e.update(),$(e.before_update);const t=e.dirty;e.dirty=[-1],e.fragment&&e.fragment.p(e.ctx,t),e.after_update.forEach(C)}}function it(e){const t=[],n=[];b.forEach(r=>e.indexOf(r)===-1?t.push(r):n.push(r)),n.forEach(r=>r()),b=t}const ot=new Set;function rt(e,t){e&&e.i&&(ot.delete(e),e.i(t))}function lt(e,t,n,r){const{fragment:i,after_update:a}=e.$$;i&&i.m(t,n),r||C(()=>{const c=e.$$.on_mount.map(Y).filter(U);e.$$.on_destroy?e.$$.on_destroy.push(...c):$(c),e.$$.on_mount=[]}),a.forEach(C)}function at(e,t){const n=e.$$;n.fragment!==null&&(it(n.after_update),$(n.on_destroy),n.fragment&&n.fragment.d(t),n.on_destroy=n.fragment=null,n.ctx=[])}function st(e,t){e.$$.dirty[0]===-1&&(P.push(e),et(),e.$$.dirty.fill(0)),e.$$.dirty[t/31|0]|=1<<t%31}function ct(e,t,n,r,i,a,c,k=[-1]){const g=M;v(e);const l=e.$$={fragment:null,ctx:[],props:a,update:z,not_equal:i,bound:H(),on_mount:[],on_destroy:[],on_disconnect:[],before_update:[],after_update:[],context:new Map(t.context||(g?g.$$.context:[])),callbacks:H(),dirty:k,skip_bound:!1,root:t.target||g.$$.root};c&&c(l.root);let _=!1;if(l.ctx=n?n(e,t.props||{},(u,m,...f)=>{const h=f.length?f[0]:m;return l.ctx&&i(l.ctx[u],l.ctx[u]=h)&&(!l.skip_bound&&l.bound[u]&&l.bound[u](h),_&&st(e,u)),m}):[],l.update(),_=!0,$(l.before_update),l.fragment=r?r(l.ctx):!1,t.target){if(t.hydrate){const u=X(t.target);l.fragment&&l.fragment.l(u),u.forEach(Z)}else l.fragment&&l.fragment.c();t.intro&&rt(e.$$.fragment),lt(e,t.target,t.anchor,t.customElement),q()}v(g)}class dt{$destroy(){at(this,1),this.$destroy=z}$on(t,n){if(!U(n))return z;const r=this.$$.callbacks[t]||(this.$$.callbacks[t]=[]);return r.push(n),()=>{const i=r.indexOf(n);i!==-1&&r.splice(i,1)}}$set(t){this.$$set&&!W(t)&&(this.$$.skip_bound=!0,this.$$set(t),this.$$.skip_bound=!1)}}function ut(e){let t,n,r,i,a,c,k,g,l,_,u,m,f,h,A,x,I,O,L,E,D,R,K,N;return{c(){t=d("main"),n=d("div"),n.textContent="program version 313_step130h 20:23:03:13:18:13",r=p(),i=d("div"),i.textContent="err APPLIC_AZIONE",a=p(),c=d("div"),c.textContent="⚠test",k=p(),g=d("script"),g.textContent=`let NodoText = "NodoText debugging for App313_step130h.svelte test20230316";
	
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






	
	
	// 		alert("2023:03:16:07:13 debug TESTAPP ok!");
	}; // TESTAPP
	TESTAPP(NodoText);`,l=p(),_=d("style"),_.textContent=`main{
	
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
	
	.hack_script{display:none;}`,u=p(),m=d("div"),f=d("input"),h=d("datalist"),A=d("option"),x=d("option"),I=p(),O=d("link"),L=p(),E=d("link"),D=p(),R=d("link"),K=p(),N=d("link"),T(n,"position","fixed"),T(n,"bottom","0rem"),T(n,"left","25%"),T(n,"font-size","75%"),s(i,"id","APPLIC_AZIONE"),s(c,"id","test"),T(c,"display","none"),s(f,"type","range"),s(f,"step","1"),s(f,"min","1"),s(f,"max","2"),A.__value="1",A.value=A.__value,x.__value="2",x.value=x.__value,s(m,"class","hack_script"),s(O,"rel","preconnect"),s(O,"href","https://fonts.gstatic.com"),s(E,"href","https://fonts.googleapis.com/css2?family=PT+Mono&display=swap"),s(E,"rel","stylesheet"),s(R,"href","https://fonts.googleapis.com/css2?family=Rasa&display=swap"),s(R,"rel","stylesheet"),s(N,"href","https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap"),s(N,"rel","stylesheet"),s(t,"id","MAIN")},m(w,F){J(w,t,F),o(t,n),o(t,r),o(t,i),o(t,a),o(t,c),o(t,k),o(t,g),o(t,l),o(t,_),o(t,u),o(t,m),o(m,f),o(m,h),o(h,A),o(h,x),o(t,I),o(t,O),o(t,L),o(t,E),o(t,D),o(t,R),o(t,K),o(t,N)},p:z,i:z,o:z,d(w){w&&Z(t)}}}class ft extends dt{constructor(t){super(),ct(this,t,null,ut,V,{})}}new ft({target:document.getElementById("app")});
