(function(){const t=document.createElement("link").relList;if(t&&t.supports&&t.supports("modulepreload"))return;for(const o of document.querySelectorAll('link[rel="modulepreload"]'))r(o);new MutationObserver(o=>{for(const s of o)if(s.type==="childList")for(const c of s.addedNodes)c.tagName==="LINK"&&c.rel==="modulepreload"&&r(c)}).observe(document,{childList:!0,subtree:!0});function n(o){const s={};return o.integrity&&(s.integrity=o.integrity),o.referrerPolicy&&(s.referrerPolicy=o.referrerPolicy),o.crossOrigin==="use-credentials"?s.credentials="include":o.crossOrigin==="anonymous"?s.credentials="omit":s.credentials="same-origin",s}function r(o){if(o.ep)return;o.ep=!0;const s=n(o);fetch(o.href,s)}})();function x(){}function G(e){return e()}function j(){return Object.create(null)}function T(e){e.forEach(G)}function U(e){return typeof e=="function"}function V(e,t){return e!=e?t==t:e!==t||e&&typeof e=="object"||typeof e=="function"}function W(e){return Object.keys(e).length===0}function i(e,t){e.appendChild(t)}function J(e,t,n){e.insertBefore(t,n||null)}function Z(e){e.parentNode&&e.parentNode.removeChild(e)}function d(e){return document.createElement(e)}function Q(e){return document.createTextNode(e)}function p(){return Q(" ")}function a(e,t,n){n==null?e.removeAttribute(t):e.getAttribute(t)!==n&&e.setAttribute(t,n)}function X(e){return Array.from(e.childNodes)}function v(e,t,n,r){n===null?e.style.removeProperty(t):e.style.setProperty(t,n,r?"important":"")}let I;function w(e){I=e}const b=[],H=[];let k=[];const Y=[],tt=Promise.resolve();let M=!1;function et(){M||(M=!0,tt.then(q))}function S(e){k.push(e)}const z=new Set;let y=0;function q(){if(y!==0)return;const e=I;do{try{for(;y<b.length;){const t=b[y];y++,w(t),nt(t.$$)}}catch(t){throw b.length=0,y=0,t}for(w(null),b.length=0,y=0;H.length;)H.pop()();for(let t=0;t<k.length;t+=1){const n=k[t];z.has(n)||(z.add(n),n())}k.length=0}while(b.length);for(;Y.length;)Y.pop()();M=!1,z.clear(),w(e)}function nt(e){if(e.fragment!==null){e.update(),T(e.before_update);const t=e.dirty;e.dirty=[-1],e.fragment&&e.fragment.p(e.ctx,t),e.after_update.forEach(S)}}function ot(e){const t=[],n=[];k.forEach(r=>e.indexOf(r)===-1?t.push(r):n.push(r)),n.forEach(r=>r()),k=t}const it=new Set;function rt(e,t){e&&e.i&&(it.delete(e),e.i(t))}function lt(e,t,n,r){const{fragment:o,after_update:s}=e.$$;o&&o.m(t,n),r||S(()=>{const c=e.$$.on_mount.map(G).filter(U);e.$$.on_destroy?e.$$.on_destroy.push(...c):T(c),e.$$.on_mount=[]}),s.forEach(S)}function st(e,t){const n=e.$$;n.fragment!==null&&(ot(n.after_update),T(n.on_destroy),n.fragment&&n.fragment.d(t),n.on_destroy=n.fragment=null,n.ctx=[])}function at(e,t){e.$$.dirty[0]===-1&&(b.push(e),et(),e.$$.dirty.fill(0)),e.$$.dirty[t/31|0]|=1<<t%31}function ct(e,t,n,r,o,s,c,E=[-1]){const h=I;w(e);const l=e.$$={fragment:null,ctx:[],props:s,update:x,not_equal:o,bound:j(),on_mount:[],on_destroy:[],on_disconnect:[],before_update:[],after_update:[],context:new Map(t.context||(h?h.$$.context:[])),callbacks:j(),dirty:E,skip_bound:!1,root:t.target||h.$$.root};c&&c(l.root);let _=!1;if(l.ctx=n?n(e,t.props||{},(u,g,...f)=>{const m=f.length?f[0]:g;return l.ctx&&o(l.ctx[u],l.ctx[u]=m)&&(!l.skip_bound&&l.bound[u]&&l.bound[u](m),_&&at(e,u)),g}):[],l.update(),_=!0,T(l.before_update),l.fragment=r?r(l.ctx):!1,t.target){if(t.hydrate){const u=X(t.target);l.fragment&&l.fragment.l(u),u.forEach(Z)}else l.fragment&&l.fragment.c();t.intro&&rt(e.$$.fragment),lt(e,t.target,t.anchor,t.customElement),q()}w(h)}class dt{$destroy(){st(this,1),this.$destroy=x}$on(t,n){if(!U(n))return x;const r=this.$$.callbacks[t]||(this.$$.callbacks[t]=[]);return r.push(n),()=>{const o=r.indexOf(n);o!==-1&&r.splice(o,1)}}$set(t){this.$$set&&!W(t)&&(this.$$.skip_bound=!0,this.$$set(t),this.$$.skip_bound=!1)}}function ut(e){let t,n,r,o,s,c,E,h,l,_,u,g,f,m,P,$,L,A,R,O,D,B,K,N;return{c(){t=d("main"),n=d("div"),n.textContent="program version 313_step130h 20:23:03:13:18:13",r=p(),o=d("div"),o.textContent="err APPLIC_AZIONE",s=p(),c=d("div"),c.textContent="⚠test",E=p(),h=d("script"),h.textContent=`let NodoText = "NodoText debugging for App313_step130h.svelte test20230316";
	
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



	
	
	// alert("TESTAPP ok!");
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
	
	.hack_script{display:none;}`,u=p(),g=d("div"),f=d("input"),m=d("datalist"),P=d("option"),$=d("option"),L=p(),A=d("link"),R=p(),O=d("link"),D=p(),B=d("link"),K=p(),N=d("link"),v(n,"position","fixed"),v(n,"bottom","0rem"),v(n,"left","25%"),v(n,"font-size","75%"),a(o,"id","APPLIC_AZIONE"),a(c,"id","test"),v(c,"display","none"),a(f,"type","range"),a(f,"step","1"),a(f,"min","1"),a(f,"max","2"),P.__value="1",P.value=P.__value,$.__value="2",$.value=$.__value,a(g,"class","hack_script"),a(A,"rel","preconnect"),a(A,"href","https://fonts.gstatic.com"),a(O,"href","https://fonts.googleapis.com/css2?family=PT+Mono&display=swap"),a(O,"rel","stylesheet"),a(B,"href","https://fonts.googleapis.com/css2?family=Rasa&display=swap"),a(B,"rel","stylesheet"),a(N,"href","https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap"),a(N,"rel","stylesheet"),a(t,"id","MAIN")},m(C,F){J(C,t,F),i(t,n),i(t,r),i(t,o),i(t,s),i(t,c),i(t,E),i(t,h),i(t,l),i(t,_),i(t,u),i(t,g),i(g,f),i(g,m),i(m,P),i(m,$),i(t,L),i(t,A),i(t,R),i(t,O),i(t,D),i(t,B),i(t,K),i(t,N)},p:x,i:x,o:x,d(C){C&&Z(t)}}}class ft extends dt{constructor(t){super(),ct(this,t,null,ut,V,{})}}new ft({target:document.getElementById("app")});
