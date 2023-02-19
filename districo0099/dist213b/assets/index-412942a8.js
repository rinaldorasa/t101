(function(){const e=document.createElement("link").relList;if(e&&e.supports&&e.supports("modulepreload"))return;for(const r of document.querySelectorAll('link[rel="modulepreload"]'))d(r);new MutationObserver(r=>{for(const u of r)if(u.type==="childList")for(const s of u.addedNodes)s.tagName==="LINK"&&s.rel==="modulepreload"&&d(s)}).observe(document,{childList:!0,subtree:!0});function a(r){const u={};return r.integrity&&(u.integrity=r.integrity),r.referrerpolicy&&(u.referrerPolicy=r.referrerpolicy),r.crossorigin==="use-credentials"?u.credentials="include":r.crossorigin==="anonymous"?u.credentials="omit":u.credentials="same-origin",u}function d(r){if(r.ep)return;r.ep=!0;const u=a(r);fetch(r.href,u)}})();function fe(){}function $e(n){return n()}function ke(){return Object.create(null)}function Ne(n){n.forEach($e)}function we(n){return typeof n=="function"}function Fe(n,e){return n!=n?e==e:n!==e||n&&typeof n=="object"||typeof n=="function"}function Ve(n){return Object.keys(n).length===0}function t(n,e){n.appendChild(e)}function je(n,e,a){n.insertBefore(e,a||null)}function We(n){n.parentNode&&n.parentNode.removeChild(n)}function i(n){return document.createElement(n)}function He(n){return document.createTextNode(n)}function v(){return He(" ")}function o(n,e,a){a==null?n.removeAttribute(e):n.getAttribute(e)!==a&&n.setAttribute(e,a)}function Qe(n){return Array.from(n.childNodes)}function be(n,e,a,d){a===null?n.style.removeProperty(e):n.style.setProperty(e,a,d?"important":"")}let Se;function Ie(n){Se=n}const ge=[],Ge=[],ze=[],Ue=[],Je=Promise.resolve();let De=!1;function Xe(){De||(De=!0,Je.then(qe))}function Re(n){ze.push(n)}const Ze=new Set;let me=0;function qe(){if(me!==0)return;const n=Se;do{try{for(;me<ge.length;){const e=ge[me];me++,Ie(e),Ye(e.$$)}}catch(e){throw ge.length=0,me=0,e}for(Ie(null),ge.length=0,me=0;Ge.length;)Ge.pop()();for(let e=0;e<ze.length;e+=1){const a=ze[e];Ze.has(a)||(Ze.add(a),a())}ze.length=0}while(ge.length);for(;Ue.length;)Ue.pop()();De=!1,Ze.clear(),Ie(n)}function Ye(n){if(n.fragment!==null){n.update(),Ne(n.before_update);const e=n.dirty;n.dirty=[-1],n.fragment&&n.fragment.p(n.ctx,e),n.after_update.forEach(Re)}}const en=new Set;function nn(n,e){n&&n.i&&(en.delete(n),n.i(e))}function tn(n,e,a,d){const{fragment:r,after_update:u}=n.$$;r&&r.m(e,a),d||Re(()=>{const s=n.$$.on_mount.map($e).filter(we);n.$$.on_destroy?n.$$.on_destroy.push(...s):Ne(s),n.$$.on_mount=[]}),u.forEach(Re)}function on(n,e){const a=n.$$;a.fragment!==null&&(Ne(a.on_destroy),a.fragment&&a.fragment.d(e),a.on_destroy=a.fragment=null,a.ctx=[])}function ln(n,e){n.$$.dirty[0]===-1&&(ge.push(n),Xe(),n.$$.dirty.fill(0)),n.$$.dirty[e/31|0]|=1<<e%31}function an(n,e,a,d,r,u,s,Pe=[-1]){const c=Se;Ie(n);const _=n.$$={fragment:null,ctx:[],props:u,update:fe,not_equal:r,bound:ke(),on_mount:[],on_destroy:[],on_disconnect:[],before_update:[],after_update:[],context:new Map(e.context||(c?c.$$.context:[])),callbacks:ke(),dirty:Pe,skip_bound:!1,root:e.target||c.$$.root};s&&s(_.root);let g=!1;if(_.ctx=a?a(n,e.props||{},(p,m,...Oe)=>{const l=Oe.length?Oe[0]:m;return _.ctx&&r(_.ctx[p],_.ctx[p]=l)&&(!_.skip_bound&&_.bound[p]&&_.bound[p](l),g&&ln(n,p)),m}):[],_.update(),g=!0,Ne(_.before_update),_.fragment=d?d(_.ctx):!1,e.target){if(e.hydrate){const p=Qe(e.target);_.fragment&&_.fragment.l(p),p.forEach(We)}else _.fragment&&_.fragment.c();e.intro&&nn(n.$$.fragment),tn(n,e.target,e.anchor,e.customElement),qe()}Ie(c)}class rn{$destroy(){on(this,1),this.$destroy=fe}$on(e,a){if(!we(a))return fe;const d=this.$$.callbacks[e]||(this.$$.callbacks[e]=[]);return d.push(a),()=>{const r=d.indexOf(a);r!==-1&&d.splice(r,1)}}$set(e){this.$$set&&!Ve(e)&&(this.$$.skip_bound=!0,this.$$set(e),this.$$.skip_bound=!1)}}function _n(n){let e,a,d,r,u,s,Pe,c,_,g,p,m,Oe,l,f,O,I,P,y,h,T,z,N,E,A,b,Z,D,R,S,C,L,M,B,x,k,G,U,$,w,W,H,q,K,F,V,j,Q,J,X,Y,ee,ne,te,oe,ie,le,ae,re,_e,ue,de,se,pe,ce,ve,Ce,Le,Ee,Me,ye,Be,he,xe,Te;return{c(){e=i("main"),a=i("div"),a.textContent="half0a0 prototype00... versione:2023:02:13::19:34",d=v(),r=i("div"),u=v(),s=i("div"),s.textContent="... TEST_0101",Pe=v(),c=i("div"),c.textContent="NO",_=v(),g=i("div"),g.textContent="SI",p=v(),m=i("article"),m.innerHTML='<div><input id="INPUT_SCELTO_0101" type="range" list="LISTA_0101" step="0.10" min="0.00" max="6.00"/></div>',Oe=v(),l=i("datalist"),f=i("option"),O=i("option"),I=i("option"),P=i("option"),y=i("option"),h=i("option"),T=i("option"),z=i("option"),N=i("option"),E=i("option"),A=i("option"),b=i("option"),Z=i("option"),D=i("option"),R=i("option"),S=i("option"),C=i("option"),L=i("option"),M=i("option"),B=i("option"),x=i("option"),k=i("option"),G=i("option"),U=i("option"),$=i("option"),w=i("option"),W=i("option"),H=i("option"),q=i("option"),K=i("option"),F=i("option"),V=i("option"),j=i("option"),Q=i("option"),J=i("option"),X=i("option"),Y=i("option"),ee=i("option"),ne=i("option"),te=i("option"),oe=i("option"),ie=i("option"),le=i("option"),ae=i("option"),re=i("option"),_e=i("option"),ue=i("option"),de=i("option"),se=i("option"),pe=i("option"),ce=i("option"),ve=i("option"),Ce=He(` 
-->`),Le=v(),Ee=i("script"),Ee.textContent=`let    DESKTOP_0303 = 1 ;
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
    { DESKTOP_0303 = 0 ; } else { DESKTOP_0303 = 1 ; }

// alert("DESKTOP_0303= "+DESKTOP_0303);

let LarghezzaBodyRem_0303 = window.innerWidth   /16;
let AltezzaBodyRem_0303   = window.innerHeight  /16;
let CompensazioneEventualiBordi=0.5;

// alert(CompensazioneEventualiBordi);

LarghezzaBodyRem_0303 = LarghezzaBodyRem_0303 - CompensazioneEventualiBordi;
AltezzaBodyRem_0303   = AltezzaBodyRem_0303 - CompensazioneEventualiBordi;
// alert(LarghezzaBodyRem_0303);
// alert(AltezzaBodyRem_0303);


let MargineSinistraRem_0303 = 5 ;
 if (DESKTOP_0303==0){MargineSinistraRem_0303 = 5.0 ;}
 if (DESKTOP_0303==1){MargineSinistraRem_0303 = 2.5 ;}
//alert(MargineSinistraRem_0303);


let BordoToggleDeviceRem_0303;
BordoToggleDeviceRem_0303 = MargineSinistraRem_0303 * 0.50;


let CorrezioneLarghezzaApplicazione = 0;
let CorrezioneAltezzaApplicazione = MargineSinistraRem_0303;

let LarghezzaApplicazione = LarghezzaBodyRem_0303 + CorrezioneLarghezzaApplicazione;
let AltezzaApplicazione   = AltezzaBodyRem_0303 - CorrezioneAltezzaApplicazione;

// alert(LarghezzaApplicazione);
// alert(AltezzaApplicazione);


let PosizioneLeftContenitoreInput = MargineSinistraRem_0303;
let LarghezzaContenitoreInput     = LarghezzaApplicazione - MargineSinistraRem_0303;
let AltezzaContenitoreInput       = MargineSinistraRem_0303;

// alert(PosizioneLeftContenitoreInput );
// alert(LarghezzaContenitoreInput     );
// alert(AltezzaContenitoreInput       );










//
// La parte APPLICAZIONE viene visualizzata o nascosta
// mediante il toggle
//
// Elementi coinvolti:
// input[type="range"] ( !!! leggi caveat !!! )
//  
// 
// Id coinvolti:
// APPLICAZIONE
// CONTENITORE_INPUT_0101 (
// caveat contiene un possibile duplicato
// input[type="range"]
// )
// 
// 
// 


document.getElementById("APPLICAZIONE").innerHTML=
\`
<style>

#APPLICAZIONE{
position:fixed;
top:0rem;left:0rem;

width:\`+LarghezzaBodyRem_0303+\`rem;
height:\`+AltezzaApplicazione+\`rem;

border:solid 0.15rem green;
overflow:auto;
z-index:10000000;
}


#CONTENITORE_INPUT_0101{

position:fixed;
bottom:0rem;left:\`+PosizioneLeftContenitoreInput+\`rem;

width:\`+LarghezzaContenitoreInput+\`rem;
height:\`+AltezzaContenitoreInput+\`rem;

background-color:gray;
background-color:rgb(102,152,105);


border:solid 0.15rem red;
    z-index:10000000;
}


input[type="range"]{
-webkit-appearance:none;

background-color:rgba(25,225,37,0.25);
background-color:rgb(102,152,105);

width:100%;

z-index:1000000!important;

}
    
</style>



<article id="BUONGIORNO_0101">
...BUONGIORNO_0101
</article>



<article id="POMERIGGIO_0202">
...POMERIGGIO_0202
</article>


<article>
<img id="WOO_000" src="http://avid3820725.altervista.org/WORKOU/OGGI/20191119/immagini/Woodstoc.png" alt="Woodstoc.png" >
</article>


<article id="CONTINUA">
...CONTINUA
</article>



\`;



//
// Detect dimensioni originarie immagine
//

function dimolarem(){
let Immagine = document.querySelector("#WOO_000");
let ImmagineWidth     = Immagine.naturalWidth;
let ImmagineHeight    = Immagine.naturalHeight;
let ImmagineWidthRem  = Immagine.naturalWidth/16;
let ImmagineHeightRem = Immagine.naturalHeight/16;

alert("#WOO_000 Width originale=" + ImmagineWidthRem + "rem , " + "#WOO_000 Height originale=" + ImmagineHeightRem+"rem");

};
dimolarem();




//
// FUNZIONE di
// Lettura input[range]
// 
// 
// 
// 

let TIPO_DISPOSITIVO=DESKTOP_0303  ;
// alert(TIPO_DISPOSITIVO);
// ||
// ||
// \\/
function sonda_Input_0101(arg0){
let TipoDiDispositivo=arg0;
// alert(TipoDiDispositivo);




let CorrezioneFontPerDispositivo;
// Valore di default
CorrezioneFontPerDispositivo=0.75;
// Detect il dispositivo effettivo
if(TipoDiDispositivo===0){ CorrezioneFontPerDispositivo=1.00; }
if(TipoDiDispositivo===1){ CorrezioneFontPerDispositivo=0.50; }
// alert(CorrezioneFontPerDispositivo);




// Leggere il valore di input[range]
let   VALORE_DI_INPUT_0101=document.getElementById("INPUT_SCELTO_0101").value; 
// alert(VALORE_DI_INPUT_0101);


let   DIM_INPUT_0101 = VALORE_DI_INPUT_0101;
// alert("DIM_INPUT_0101= "+DIM_INPUT_0101);
// 
// Qui DIM_INPUT_0101 viene corretto
// 
DIM_INPUT_0101= DIM_INPUT_0101 * CorrezioneFontPerDispositivo;
// alert("DIM_INPUT_0101= "+DIM_INPUT_0101);




let   DIM_IMAGE_0101 = DIM_INPUT_0101 * 10; 
// Quanto + - img ?
DIM_IMAGE_0101 = DIM_INPUT_0101 * 20; 
// alert("DIM_IMAGE_0101 = "+DIM_IMAGE_0101);





document.getElementById("TEST_0101").innerHTML=\`

<style>
#APPLICAZIONE{font-size:\`+DIM_INPUT_0101+\`rem!important;}
#BUONGIORNO_0101{font-size:\`+DIM_INPUT_0101+\`rem!important;}
#POMERIGGIO_0202{font-size:\`+DIM_INPUT_0101+\`rem!important;}


img{ width:\`+DIM_IMAGE_0101+\`rem!important;max-width:100%!important;max-height:100%;!important}


#BUONGIORNO_0101{font-family:monospace;text-align:left;}

#APPLICAZIONE, #BUONGIORNO_0101, #POMERIGGIO_0202{text-align:left;overflow:auto;}

#APPLICAZIONE #BUONGIORNO_0101{background-color:black;color:orange;}


</style>


    
\`;



};
setInterval(sonda_Input_0101, 1, TIPO_DISPOSITIVO) ;











//
// DGEBI dedicato al toggle
// e relative funzioni.
//
// Id coinvolti:
// APPLICAZIONE
// CONTENITORE_INPUT_0101
// TOG_NO
// TOG_SI
// 
// 


document.getElementById("TOG_SI").innerHTML=
\`
<style>
#TOG_SI{position:fixed;bottom:0rem;left:0rem;

    border-top:solid     \`+BordoToggleDeviceRem_0303+\`rem rgb(102,152,105);
    border-right:solid   \`+BordoToggleDeviceRem_0303+\`rem rgb(102,152,105);
    border-bottom:solid  \`+BordoToggleDeviceRem_0303+\`rem green;
    border-left:solid    \`+BordoToggleDeviceRem_0303+\`rem green;
    border-radius:0.5rem;
    display:inline-block; 
    cursor:pointer;
    z-index:10000000;
}
</style>
\`;


document.getElementById("TOG_NO").innerHTML=
\`
<style>
#TOG_NO{position:fixed;bottom:0rem;left:0rem;

    border-top:solid     \`+BordoToggleDeviceRem_0303+\`rem orange;
    border-right:solid   \`+BordoToggleDeviceRem_0303+\`rem orange;
    border-bottom:solid  \`+BordoToggleDeviceRem_0303+\`rem orange;
    border-left:solid    \`+BordoToggleDeviceRem_0303+\`rem orange;
    border-radius:0.5rem;
    display:inline-block; 
    cursor:pointer;
    z-index:10000000;


} 
</style>

\`;



function Tog_No(){
document.querySelector("#APPLICAZIONE").style.display="none";
document.querySelector("#CONTENITORE_INPUT_0101").style.display="none";
document.querySelector("#TOG_NO").style.display="none";
document.querySelector("#TOG_SI").style.display="block";

}


function Tog_Si(){
document.querySelector("#APPLICAZIONE").style.display="block";
document.querySelector("#CONTENITORE_INPUT_0101").style.display="block";
document.querySelector("#TOG_NO").style.display="block";
document.querySelector("#TOG_SI").style.display="none";

}`,Me=v(),ye=i("link"),Be=v(),he=i("link"),xe=v(),Te=i("link"),o(a,"id","VERS_TEST"),o(a,"class","svelte-d4bjzu"),o(r,"id","APPLICAZIONE"),be(r,"display","none"),o(r,"class","damo svelte-d4bjzu"),o(s,"id","TEST_0101"),o(c,"id","TOG_NO"),o(c,"onclick","Tog_No()"),o(g,"id","TOG_SI"),o(g,"onclick","Tog_Si()"),o(m,"id","CONTENITORE_INPUT_0101"),be(m,"display","none"),be(m,"display","block"),o(f,"id","OPZ_00"),f.__value="0.00",f.value=f.__value,o(O,"id","OPZ_01"),O.__value="0.11",O.value=O.__value,o(I,"id","OPZ_02"),I.__value="0.22",I.value=I.__value,o(P,"id","OPZ_03"),P.__value="0.33",P.value=P.__value,o(y,"id","OPZ_04"),y.__value="0.44",y.value=y.__value,o(h,"id","OPZ_05"),h.__value="0.55",h.value=h.__value,o(T,"id","OPZ_06"),T.__value="0.66",T.value=T.__value,o(z,"id","OPZ_07"),z.__value="0.77",z.value=z.__value,o(N,"id","OPZ_08"),N.__value="0.88",N.value=N.__value,o(E,"id","OPZ_09"),E.__value="0.99",E.value=E.__value,o(A,"id","OPZ_10"),A.__value="2.00",A.value=A.__value,o(b,"id","OPZ_11"),b.__value="2.11",b.value=b.__value,o(Z,"id","OPZ_12"),Z.__value="2.22",Z.value=Z.__value,o(D,"id","OPZ_13"),D.__value="2.33",D.value=D.__value,o(R,"id","OPZ_14"),R.__value="2.44",R.value=R.__value,o(S,"id","OPZ_15"),S.__value="2.55",S.value=S.__value,o(C,"id","OPZ_16"),C.__value="2.66",C.value=C.__value,o(L,"id","OPZ_17"),L.__value="2.77",L.value=L.__value,o(M,"id","OPZ_18"),M.__value="2.88",M.value=M.__value,o(B,"id","OPZ_19"),B.__value="2.99",B.value=B.__value,o(x,"id","OPZ_20"),x.__value="3.00",x.value=x.__value,o(k,"id","OPZ_21"),k.__value="3.11",k.value=k.__value,o(G,"id","OPZ_22"),G.__value="3.22",G.value=G.__value,o(U,"id","OPZ_23"),U.__value="3.33",U.value=U.__value,o($,"id","OPZ_24"),$.__value="3.44",$.value=$.__value,o(w,"id","OPZ_25"),w.__value="3.55",w.value=w.__value,o(W,"id","OPZ_26"),W.__value="3.66",W.value=W.__value,o(H,"id","OPZ_27"),H.__value="3.77",H.value=H.__value,o(q,"id","OPZ_28"),q.__value="3.88",q.value=q.__value,o(K,"id","OPZ_29"),K.__value="3.99",K.value=K.__value,o(F,"id","OPZ_30"),F.__value="4.00",F.value=F.__value,o(V,"id","OPZ_31"),V.__value="4.11",V.value=V.__value,o(j,"id","OPZ_32"),j.__value="4.22",j.value=j.__value,o(Q,"id","OPZ_33"),Q.__value="4.33",Q.value=Q.__value,o(J,"id","OPZ_34"),J.__value="4.44",J.value=J.__value,o(X,"id","OPZ_35"),X.__value="4.55",X.value=X.__value,o(Y,"id","OPZ_36"),Y.__value="4.66",Y.value=Y.__value,o(ee,"id","OPZ_37"),ee.__value="4.77",ee.value=ee.__value,o(ne,"id","OPZ_38"),ne.__value="4.88",ne.value=ne.__value,o(te,"id","OPZ_39"),te.__value="4.99",te.value=te.__value,o(oe,"id","OPZ_40"),oe.__value="5.00",oe.value=oe.__value,o(ie,"id","OPZ_41"),ie.__value="5.00",ie.value=ie.__value,o(le,"id","OPZ_42"),le.__value="5.11",le.value=le.__value,o(ae,"id","OPZ_43"),ae.__value="5.22",ae.value=ae.__value,o(re,"id","OPZ_44"),re.__value="5.33",re.value=re.__value,o(_e,"id","OPZ_45"),_e.__value="5.44",_e.value=_e.__value,o(ue,"id","OPZ_46"),ue.__value="5.55",ue.value=ue.__value,o(de,"id","OPZ_47"),de.__value="5.66",de.value=de.__value,o(se,"id","OPZ_48"),se.__value="5.77",se.value=se.__value,o(pe,"id","OPZ_49"),pe.__value="5.88",pe.value=pe.__value,o(ce,"id","OPZ_50"),ce.__value="5.99",ce.value=ce.__value,o(ve,"id","OPZ_51"),ve.__value="6.00",ve.value=ve.__value,o(l,"id","LISTA_0101"),o(ye,"rel","preconnect"),o(ye,"href","https://fonts.gstatic.com"),o(he,"href","https://fonts.googleapis.com/css2?family=PT+Mono&display=swap"),o(he,"rel","stylesheet"),o(Te,"href","https://fonts.googleapis.com/css2?family=Rasa:wght@300&display=swap"),o(Te,"rel","stylesheet"),o(e,"lang","it"),o(e,"class","svelte-d4bjzu")},m(Ae,Ke){je(Ae,e,Ke),t(e,a),t(e,d),t(e,r),t(e,u),t(e,s),t(e,Pe),t(e,c),t(e,_),t(e,g),t(e,p),t(e,m),t(e,Oe),t(e,l),t(l,f),t(l,O),t(l,I),t(l,P),t(l,y),t(l,h),t(l,T),t(l,z),t(l,N),t(l,E),t(l,A),t(l,b),t(l,Z),t(l,D),t(l,R),t(l,S),t(l,C),t(l,L),t(l,M),t(l,B),t(l,x),t(l,k),t(l,G),t(l,U),t(l,$),t(l,w),t(l,W),t(l,H),t(l,q),t(l,K),t(l,F),t(l,V),t(l,j),t(l,Q),t(l,J),t(l,X),t(l,Y),t(l,ee),t(l,ne),t(l,te),t(l,oe),t(l,ie),t(l,le),t(l,ae),t(l,re),t(l,_e),t(l,ue),t(l,de),t(l,se),t(l,pe),t(l,ce),t(l,ve),t(l,Ce),t(e,Le),t(e,Ee),t(e,Me),t(e,ye),t(e,Be),t(e,he),t(e,xe),t(e,Te)},p:fe,i:fe,o:fe,d(Ae){Ae&&We(e)}}}class un extends rn{constructor(e){super(),an(this,e,null,_n,Fe,{})}}new un({target:document.getElementById("app")});
