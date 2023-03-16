(function(){const t=document.createElement("link").relList;if(t&&t.supports&&t.supports("modulepreload"))return;for(const r of document.querySelectorAll('link[rel="modulepreload"]'))i(r);new MutationObserver(r=>{for(const s of r)if(s.type==="childList")for(const a of s.addedNodes)a.tagName==="LINK"&&a.rel==="modulepreload"&&i(a)}).observe(document,{childList:!0,subtree:!0});function n(r){const s={};return r.integrity&&(s.integrity=r.integrity),r.referrerPolicy&&(s.referrerPolicy=r.referrerPolicy),r.crossOrigin==="use-credentials"?s.credentials="include":r.crossOrigin==="anonymous"?s.credentials="omit":s.credentials="same-origin",s}function i(r){if(r.ep)return;r.ep=!0;const s=n(r);fetch(r.href,s)}})();function b(){}function K(e){return e()}function q(){return Object.create(null)}function C(e){e.forEach(K)}function V(e){return typeof e=="function"}function Q(e,t){return e!=e?t==t:e!==t||e&&typeof e=="object"||typeof e=="function"}function U(e){return Object.keys(e).length===0}function o(e,t){e.appendChild(t)}function W(e,t,n){e.insertBefore(t,n||null)}function G(e){e.parentNode&&e.parentNode.removeChild(e)}function f(e){return document.createElement(e)}function X(e){return document.createTextNode(e)}function p(){return X(" ")}function c(e,t,n){n==null?e.removeAttribute(t):e.getAttribute(t)!==n&&e.setAttribute(t,n)}function Y(e){return Array.from(e.childNodes)}function w(e,t,n,i){n===null?e.style.removeProperty(t):e.style.setProperty(t,n,i?"important":"")}let j;function P(e){j=e}const x=[],z=[];let k=[];const F=[],tt=Promise.resolve();let S=!1;function et(){S||(S=!0,tt.then(H))}function M(e){k.push(e)}const L=new Set;let y=0;function H(){if(y!==0)return;const e=j;do{try{for(;y<x.length;){const t=x[y];y++,P(t),nt(t.$$)}}catch(t){throw x.length=0,y=0,t}for(P(null),x.length=0,y=0;z.length;)z.pop()();for(let t=0;t<k.length;t+=1){const n=k[t];L.has(n)||(L.add(n),n())}k.length=0}while(x.length);for(;F.length;)F.pop()();S=!1,L.clear(),P(e)}function nt(e){if(e.fragment!==null){e.update(),C(e.before_update);const t=e.dirty;e.dirty=[-1],e.fragment&&e.fragment.p(e.ctx,t),e.after_update.forEach(M)}}function rt(e){const t=[],n=[];k.forEach(i=>e.indexOf(i)===-1?t.push(i):n.push(i)),n.forEach(i=>i()),k=t}const ot=new Set;function it(e,t){e&&e.i&&(ot.delete(e),e.i(t))}function lt(e,t,n,i){const{fragment:r,after_update:s}=e.$$;r&&r.m(t,n),i||M(()=>{const a=e.$$.on_mount.map(K).filter(V);e.$$.on_destroy?e.$$.on_destroy.push(...a):C(a),e.$$.on_mount=[]}),s.forEach(M)}function st(e,t){const n=e.$$;n.fragment!==null&&(rt(n.after_update),C(n.on_destroy),n.fragment&&n.fragment.d(t),n.on_destroy=n.fragment=null,n.ctx=[])}function ct(e,t){e.$$.dirty[0]===-1&&(x.push(e),et(),e.$$.dirty.fill(0)),e.$$.dirty[t/31|0]|=1<<t%31}function at(e,t,n,i,r,s,a,T=[-1]){const h=j;P(e);const l=e.$$={fragment:null,ctx:[],props:s,update:b,not_equal:r,bound:q(),on_mount:[],on_destroy:[],on_disconnect:[],before_update:[],after_update:[],context:new Map(t.context||(h?h.$$.context:[])),callbacks:q(),dirty:T,skip_bound:!1,root:t.target||h.$$.root};a&&a(l.root);let _=!1;if(l.ctx=n?n(e,t.props||{},(u,g,...d)=>{const m=d.length?d[0]:g;return l.ctx&&r(l.ctx[u],l.ctx[u]=m)&&(!l.skip_bound&&l.bound[u]&&l.bound[u](m),_&&ct(e,u)),g}):[],l.update(),_=!0,C(l.before_update),l.fragment=i?i(l.ctx):!1,t.target){if(t.hydrate){const u=Y(t.target);l.fragment&&l.fragment.l(u),u.forEach(G)}else l.fragment&&l.fragment.c();t.intro&&it(e.$$.fragment),lt(e,t.target,t.anchor,t.customElement),H()}P(h)}class ft{$destroy(){st(this,1),this.$destroy=b}$on(t,n){if(!V(n))return b;const i=this.$$.callbacks[t]||(this.$$.callbacks[t]=[]);return i.push(n),()=>{const r=i.indexOf(n);r!==-1&&i.splice(r,1)}}$set(t){this.$$set&&!U(t)&&(this.$$.skip_bound=!0,this.$$set(t),this.$$.skip_bound=!1)}}function ut(e){let t,n,i,r,s,a,T,h,l,_,u,g,d,m,$,v,R,N,B,E,D,A,Z,O;return{c(){t=f("main"),n=f("div"),n.textContent="program version 313_step130h 20:23:03:13:18:13",i=p(),r=f("div"),r.textContent="err APPLIC_AZIONE",s=p(),a=f("div"),a.textContent="⚠test",T=p(),h=f("script"),h.textContent=`let NodoText = "NodoText debugging for App313_step130h.svelte test20230316";
	
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
		// 
		alert("RILEVATO INTERNO text da file esterno: "+NodoText);
		let TextoContentToDo = 
		\`
		\${NodoText}
		
		\` ; 
	
	
	
	}; // TESTAPP
	TESTAPP(NodoText);`,l=p(),_=f("style"),_.textContent=`main{
	
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
	
	.hack_script{display:none;}`,u=p(),g=f("div"),d=f("input"),m=f("datalist"),$=f("option"),v=f("option"),R=p(),N=f("link"),B=p(),E=f("link"),D=p(),A=f("link"),Z=p(),O=f("link"),w(n,"position","fixed"),w(n,"bottom","0rem"),w(n,"left","25%"),w(n,"font-size","75%"),c(r,"id","APPLIC_AZIONE"),c(a,"id","test"),w(a,"display","none"),c(d,"type","range"),c(d,"step","1"),c(d,"min","1"),c(d,"max","2"),$.__value="1",$.value=$.__value,v.__value="2",v.value=v.__value,c(g,"class","hack_script"),c(N,"rel","preconnect"),c(N,"href","https://fonts.gstatic.com"),c(E,"href","https://fonts.googleapis.com/css2?family=PT+Mono&display=swap"),c(E,"rel","stylesheet"),c(A,"href","https://fonts.googleapis.com/css2?family=Rasa&display=swap"),c(A,"rel","stylesheet"),c(O,"href","https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap"),c(O,"rel","stylesheet"),c(t,"id","MAIN")},m(I,J){W(I,t,J),o(t,n),o(t,i),o(t,r),o(t,s),o(t,a),o(t,T),o(t,h),o(t,l),o(t,_),o(t,u),o(t,g),o(g,d),o(g,m),o(m,$),o(m,v),o(t,R),o(t,N),o(t,B),o(t,E),o(t,D),o(t,A),o(t,Z),o(t,O)},p:b,i:b,o:b,d(I){I&&G(t)}}}class dt extends ft{constructor(t){super(),at(this,t,null,ut,Q,{})}}new dt({target:document.getElementById("app")});
