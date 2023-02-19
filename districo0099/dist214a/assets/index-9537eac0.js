(function(){const e=document.createElement("link").relList;if(e&&e.supports&&e.supports("modulepreload"))return;for(const r of document.querySelectorAll('link[rel="modulepreload"]'))d(r);new MutationObserver(r=>{for(const u of r)if(u.type==="childList")for(const p of u.addedNodes)p.tagName==="LINK"&&p.rel==="modulepreload"&&d(p)}).observe(document,{childList:!0,subtree:!0});function a(r){const u={};return r.integrity&&(u.integrity=r.integrity),r.referrerpolicy&&(u.referrerPolicy=r.referrerpolicy),r.crossorigin==="use-credentials"?u.credentials="include":r.crossorigin==="anonymous"?u.credentials="omit":u.credentials="same-origin",u}function d(r){if(r.ep)return;r.ep=!0;const u=a(r);fetch(r.href,u)}})();function fe(){}function $e(n){return n()}function Ue(){return Object.create(null)}function Ne(n){n.forEach($e)}function we(n){return typeof n=="function"}function Ke(n,e){return n!=n?e==e:n!==e||n&&typeof n=="object"||typeof n=="function"}function Fe(n){return Object.keys(n).length===0}function t(n,e){n.appendChild(e)}function je(n,e,a){n.insertBefore(e,a||null)}function Ve(n){n.parentNode&&n.parentNode.removeChild(n)}function i(n){return document.createElement(n)}function He(n){return document.createTextNode(n)}function v(){return He(" ")}function o(n,e,a){a==null?n.removeAttribute(e):n.getAttribute(e)!==a&&n.setAttribute(e,a)}function Qe(n){return Array.from(n.childNodes)}function Ze(n,e,a,d){a===null?n.style.removeProperty(e):n.style.setProperty(e,a,d?"important":"")}let Re;function Ie(n){Re=n}const ge=[],ke=[],Te=[],Ge=[],Je=Promise.resolve();let be=!1;function Xe(){be||(be=!0,Je.then(We))}function Le(n){Te.push(n)}const Se=new Set;let me=0;function We(){if(me!==0)return;const n=Re;do{try{for(;me<ge.length;){const e=ge[me];me++,Ie(e),Ye(e.$$)}}catch(e){throw ge.length=0,me=0,e}for(Ie(null),ge.length=0,me=0;ke.length;)ke.pop()();for(let e=0;e<Te.length;e+=1){const a=Te[e];Se.has(a)||(Se.add(a),a())}Te.length=0}while(ge.length);for(;Ge.length;)Ge.pop()();be=!1,Se.clear(),Ie(n)}function Ye(n){if(n.fragment!==null){n.update(),Ne(n.before_update);const e=n.dirty;n.dirty=[-1],n.fragment&&n.fragment.p(n.ctx,e),n.after_update.forEach(Le)}}const en=new Set;function nn(n,e){n&&n.i&&(en.delete(n),n.i(e))}function tn(n,e,a,d){const{fragment:r,after_update:u}=n.$$;r&&r.m(e,a),d||Le(()=>{const p=n.$$.on_mount.map($e).filter(we);n.$$.on_destroy?n.$$.on_destroy.push(...p):Ne(p),n.$$.on_mount=[]}),u.forEach(Le)}function on(n,e){const a=n.$$;a.fragment!==null&&(Ne(a.on_destroy),a.fragment&&a.fragment.d(e),a.on_destroy=a.fragment=null,a.ctx=[])}function ln(n,e){n.$$.dirty[0]===-1&&(ge.push(n),Xe(),n.$$.dirty.fill(0)),n.$$.dirty[e/31|0]|=1<<e%31}function an(n,e,a,d,r,u,p,Pe=[-1]){const c=Re;Ie(n);const _=n.$$={fragment:null,ctx:[],props:u,update:fe,not_equal:r,bound:Ue(),on_mount:[],on_destroy:[],on_disconnect:[],before_update:[],after_update:[],context:new Map(e.context||(c?c.$$.context:[])),callbacks:Ue(),dirty:Pe,skip_bound:!1,root:e.target||c.$$.root};p&&p(_.root);let g=!1;if(_.ctx=a?a(n,e.props||{},(s,m,...Oe)=>{const l=Oe.length?Oe[0]:m;return _.ctx&&r(_.ctx[s],_.ctx[s]=l)&&(!_.skip_bound&&_.bound[s]&&_.bound[s](l),g&&ln(n,s)),m}):[],_.update(),g=!0,Ne(_.before_update),_.fragment=d?d(_.ctx):!1,e.target){if(e.hydrate){const s=Qe(e.target);_.fragment&&_.fragment.l(s),s.forEach(Ve)}else _.fragment&&_.fragment.c();e.intro&&nn(n.$$.fragment),tn(n,e.target,e.anchor,e.customElement),We()}Ie(c)}class rn{$destroy(){on(this,1),this.$destroy=fe}$on(e,a){if(!we(a))return fe;const d=this.$$.callbacks[e]||(this.$$.callbacks[e]=[]);return d.push(a),()=>{const r=d.indexOf(a);r!==-1&&d.splice(r,1)}}$set(e){this.$$set&&!Fe(e)&&(this.$$.skip_bound=!0,this.$$set(e),this.$$.skip_bound=!1)}}function _n(n){let e,a,d,r,u,p,Pe,c,_,g,s,m,Oe,l,f,O,I,P,y,h,z,T,N,A,E,Z,S,b,L,R,D,M,C,B,x,U,k,G,$,w,V,H,W,q,K,F,j,Q,J,X,Y,ee,ne,te,oe,ie,le,ae,re,_e,ue,de,pe,se,ce,ve,De,Me,Ae,Ce,ye,Be,he,xe,ze;return{c(){e=i("main"),a=i("div"),a.innerHTML=`half0a0 prototype00... versione:2023:02:14::19:40 <br/> 
<button id="VISUALIZZAZIONE_PER_LA_STAMPA" onclick="VisualizzazionePerLaStampa()" class="svelte-1a8xp3o">🌗</button>`,d=v(),r=i("div"),u=v(),p=i("div"),p.textContent="... TEST_0101",Pe=v(),c=i("div"),c.textContent="NO",_=v(),g=i("div"),g.textContent="SI",s=v(),m=i("article"),m.innerHTML='<div><input id="INPUT_SCELTO_0101" type="range" list="LISTA_0101" step="0.10" min="0.00" max="6.00"/></div>',Oe=v(),l=i("datalist"),f=i("option"),O=i("option"),I=i("option"),P=i("option"),y=i("option"),h=i("option"),z=i("option"),T=i("option"),N=i("option"),A=i("option"),E=i("option"),Z=i("option"),S=i("option"),b=i("option"),L=i("option"),R=i("option"),D=i("option"),M=i("option"),C=i("option"),B=i("option"),x=i("option"),U=i("option"),k=i("option"),G=i("option"),$=i("option"),w=i("option"),V=i("option"),H=i("option"),W=i("option"),q=i("option"),K=i("option"),F=i("option"),j=i("option"),Q=i("option"),J=i("option"),X=i("option"),Y=i("option"),ee=i("option"),ne=i("option"),te=i("option"),oe=i("option"),ie=i("option"),le=i("option"),ae=i("option"),re=i("option"),_e=i("option"),ue=i("option"),de=i("option"),pe=i("option"),se=i("option"),ce=i("option"),ve=i("option"),De=He(` 
-->`),Me=v(),Ae=i("script"),Ae.textContent=`let    DESKTOP_0303 = 1 ;
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

#MAIN{
position:fixed;
top:0rem;left:0rem;

width:\`+LarghezzaBodyRem_0303+\`rem;
height:\`+AltezzaApplicazione+\`rem;

font-family:"PT Mono", monospace;

overflow:auto;
z-index:10000000;
}



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


background-color:rgb(102,152,105);


border:solid 0.15rem red;
    z-index:10000000;
}


input[type="range"]{
-webkit-appearance:none;

background-color:rgb(102,152,105);

width:100%;

z-index:1000000!important;

}
    
</style>



<article style="text-align:center;">
<div style="display:inline-block;">
<img id="WOO_000" src="http://avid3820725.altervista.org/WORKOU/OGGI/20191119/immagini/Woodstoc.png" alt="Woodstoc.png" >
</div>
</article>




<article id="BUONGIORNO_0101">
...BUONGIORNO_0101
</article>


<article id="POMERIGGIO_0202">
...POMERIGGIO_0202
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

}; //dimolarem();




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

#APPLICAZIONE #BUONGIORNO_0101{}


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

}



function VisualizzazionePerLaStampa(){
// alert("VisualizzazionePerLaStampa()");

let VisualizzaLaPaginaPerLaStampa = document.getElementById("VISUALIZZAZIONE_PER_LA_STAMPA").innerHTML=
\`
<style>

#MAIN{background-color:black!important;color:orange!important;}

#VISUALIZZAZIONE_PER_LA_STAMPA{display:none;}

</style>


\`;




}`,Ce=v(),ye=i("link"),Be=v(),he=i("link"),xe=v(),ze=i("link"),o(a,"id","VERS_TEST"),o(a,"class","svelte-1a8xp3o"),o(r,"id","APPLICAZIONE"),Ze(r,"display","none"),o(p,"id","TEST_0101"),o(c,"id","TOG_NO"),o(c,"onclick","Tog_No()"),o(g,"id","TOG_SI"),o(g,"onclick","Tog_Si()"),o(m,"id","CONTENITORE_INPUT_0101"),Ze(m,"display","none"),Ze(m,"display","block"),o(f,"id","OPZ_00"),f.__value="0.00",f.value=f.__value,o(O,"id","OPZ_01"),O.__value="0.11",O.value=O.__value,o(I,"id","OPZ_02"),I.__value="0.22",I.value=I.__value,o(P,"id","OPZ_03"),P.__value="0.33",P.value=P.__value,o(y,"id","OPZ_04"),y.__value="0.44",y.value=y.__value,o(h,"id","OPZ_05"),h.__value="0.55",h.value=h.__value,o(z,"id","OPZ_06"),z.__value="0.66",z.value=z.__value,o(T,"id","OPZ_07"),T.__value="0.77",T.value=T.__value,o(N,"id","OPZ_08"),N.__value="0.88",N.value=N.__value,o(A,"id","OPZ_09"),A.__value="0.99",A.value=A.__value,o(E,"id","OPZ_10"),E.__value="2.00",E.value=E.__value,o(Z,"id","OPZ_11"),Z.__value="2.11",Z.value=Z.__value,o(S,"id","OPZ_12"),S.__value="2.22",S.value=S.__value,o(b,"id","OPZ_13"),b.__value="2.33",b.value=b.__value,o(L,"id","OPZ_14"),L.__value="2.44",L.value=L.__value,o(R,"id","OPZ_15"),R.__value="2.55",R.value=R.__value,o(D,"id","OPZ_16"),D.__value="2.66",D.value=D.__value,o(M,"id","OPZ_17"),M.__value="2.77",M.value=M.__value,o(C,"id","OPZ_18"),C.__value="2.88",C.value=C.__value,o(B,"id","OPZ_19"),B.__value="2.99",B.value=B.__value,o(x,"id","OPZ_20"),x.__value="3.00",x.value=x.__value,o(U,"id","OPZ_21"),U.__value="3.11",U.value=U.__value,o(k,"id","OPZ_22"),k.__value="3.22",k.value=k.__value,o(G,"id","OPZ_23"),G.__value="3.33",G.value=G.__value,o($,"id","OPZ_24"),$.__value="3.44",$.value=$.__value,o(w,"id","OPZ_25"),w.__value="3.55",w.value=w.__value,o(V,"id","OPZ_26"),V.__value="3.66",V.value=V.__value,o(H,"id","OPZ_27"),H.__value="3.77",H.value=H.__value,o(W,"id","OPZ_28"),W.__value="3.88",W.value=W.__value,o(q,"id","OPZ_29"),q.__value="3.99",q.value=q.__value,o(K,"id","OPZ_30"),K.__value="4.00",K.value=K.__value,o(F,"id","OPZ_31"),F.__value="4.11",F.value=F.__value,o(j,"id","OPZ_32"),j.__value="4.22",j.value=j.__value,o(Q,"id","OPZ_33"),Q.__value="4.33",Q.value=Q.__value,o(J,"id","OPZ_34"),J.__value="4.44",J.value=J.__value,o(X,"id","OPZ_35"),X.__value="4.55",X.value=X.__value,o(Y,"id","OPZ_36"),Y.__value="4.66",Y.value=Y.__value,o(ee,"id","OPZ_37"),ee.__value="4.77",ee.value=ee.__value,o(ne,"id","OPZ_38"),ne.__value="4.88",ne.value=ne.__value,o(te,"id","OPZ_39"),te.__value="4.99",te.value=te.__value,o(oe,"id","OPZ_40"),oe.__value="5.00",oe.value=oe.__value,o(ie,"id","OPZ_41"),ie.__value="5.00",ie.value=ie.__value,o(le,"id","OPZ_42"),le.__value="5.11",le.value=le.__value,o(ae,"id","OPZ_43"),ae.__value="5.22",ae.value=ae.__value,o(re,"id","OPZ_44"),re.__value="5.33",re.value=re.__value,o(_e,"id","OPZ_45"),_e.__value="5.44",_e.value=_e.__value,o(ue,"id","OPZ_46"),ue.__value="5.55",ue.value=ue.__value,o(de,"id","OPZ_47"),de.__value="5.66",de.value=de.__value,o(pe,"id","OPZ_48"),pe.__value="5.77",pe.value=pe.__value,o(se,"id","OPZ_49"),se.__value="5.88",se.value=se.__value,o(ce,"id","OPZ_50"),ce.__value="5.99",ce.value=ce.__value,o(ve,"id","OPZ_51"),ve.__value="6.00",ve.value=ve.__value,o(l,"id","LISTA_0101"),o(ye,"rel","preconnect"),o(ye,"href","https://fonts.gstatic.com"),o(he,"href","https://fonts.googleapis.com/css2?family=PT+Mono&display=swap"),o(he,"rel","stylesheet"),o(ze,"href","https://fonts.googleapis.com/css2?family=Rasa:wght@300&display=swap"),o(ze,"rel","stylesheet"),o(e,"id","MAIN"),o(e,"lang","it"),o(e,"class","svelte-1a8xp3o")},m(Ee,qe){je(Ee,e,qe),t(e,a),t(e,d),t(e,r),t(e,u),t(e,p),t(e,Pe),t(e,c),t(e,_),t(e,g),t(e,s),t(e,m),t(e,Oe),t(e,l),t(l,f),t(l,O),t(l,I),t(l,P),t(l,y),t(l,h),t(l,z),t(l,T),t(l,N),t(l,A),t(l,E),t(l,Z),t(l,S),t(l,b),t(l,L),t(l,R),t(l,D),t(l,M),t(l,C),t(l,B),t(l,x),t(l,U),t(l,k),t(l,G),t(l,$),t(l,w),t(l,V),t(l,H),t(l,W),t(l,q),t(l,K),t(l,F),t(l,j),t(l,Q),t(l,J),t(l,X),t(l,Y),t(l,ee),t(l,ne),t(l,te),t(l,oe),t(l,ie),t(l,le),t(l,ae),t(l,re),t(l,_e),t(l,ue),t(l,de),t(l,pe),t(l,se),t(l,ce),t(l,ve),t(l,De),t(e,Me),t(e,Ae),t(e,Ce),t(e,ye),t(e,Be),t(e,he),t(e,xe),t(e,ze)},p:fe,i:fe,o:fe,d(Ee){Ee&&Ve(e)}}}class un extends rn{constructor(e){super(),an(this,e,null,_n,Ke,{})}}new un({target:document.getElementById("app")});
