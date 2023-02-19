(function(){const e=document.createElement("link").relList;if(e&&e.supports&&e.supports("modulepreload"))return;for(const r of document.querySelectorAll('link[rel="modulepreload"]'))s(r);new MutationObserver(r=>{for(const u of r)if(u.type==="childList")for(const d of u.addedNodes)d.tagName==="LINK"&&d.rel==="modulepreload"&&s(d)}).observe(document,{childList:!0,subtree:!0});function a(r){const u={};return r.integrity&&(u.integrity=r.integrity),r.referrerpolicy&&(u.referrerPolicy=r.referrerpolicy),r.crossorigin==="use-credentials"?u.credentials="include":r.crossorigin==="anonymous"?u.credentials="omit":u.credentials="same-origin",u}function s(r){if(r.ep)return;r.ep=!0;const u=a(r);fetch(r.href,u)}})();function Oe(){}function Be(n){return n()}function ke(){return Object.create(null)}function ye(n){n.forEach(Be)}function Ue(n){return typeof n=="function"}function We(n,e){return n!=n?e==e:n!==e||n&&typeof n=="object"||typeof n=="function"}function qe(n){return Object.keys(n).length===0}function t(n,e){n.appendChild(e)}function Fe(n,e,a){n.insertBefore(e,a||null)}function Ve(n){n.parentNode&&n.parentNode.removeChild(n)}function i(n){return document.createElement(n)}function Ke(n){return document.createTextNode(n)}function m(){return Ke(" ")}function o(n,e,a){a==null?n.removeAttribute(e):n.getAttribute(e)!==a&&n.setAttribute(e,a)}function je(n){return Array.from(n.childNodes)}function Ae(n,e,a,s){a===null?n.style.removeProperty(e):n.style.setProperty(e,a,s?"important":"")}let Ze;function Ie(n){Ze=n}const ge=[],xe=[],Ne=[],Ge=[],Qe=Promise.resolve();let be=!1;function Je(){be||(be=!0,Qe.then($e))}function De(n){Ne.push(n)}const Re=new Set;let ve=0;function $e(){if(ve!==0)return;const n=Ze;do{try{for(;ve<ge.length;){const e=ge[ve];ve++,Ie(e),Xe(e.$$)}}catch(e){throw ge.length=0,ve=0,e}for(Ie(null),ge.length=0,ve=0;xe.length;)xe.pop()();for(let e=0;e<Ne.length;e+=1){const a=Ne[e];Re.has(a)||(Re.add(a),a())}Ne.length=0}while(ge.length);for(;Ge.length;)Ge.pop()();be=!1,Re.clear(),Ie(n)}function Xe(n){if(n.fragment!==null){n.update(),ye(n.before_update);const e=n.dirty;n.dirty=[-1],n.fragment&&n.fragment.p(n.ctx,e),n.after_update.forEach(De)}}const Ye=new Set;function en(n,e){n&&n.i&&(Ye.delete(n),n.i(e))}function nn(n,e,a,s){const{fragment:r,after_update:u}=n.$$;r&&r.m(e,a),s||De(()=>{const d=n.$$.on_mount.map(Be).filter(Ue);n.$$.on_destroy?n.$$.on_destroy.push(...d):ye(d),n.$$.on_mount=[]}),u.forEach(De)}function tn(n,e){const a=n.$$;a.fragment!==null&&(ye(a.on_destroy),a.fragment&&a.fragment.d(e),a.on_destroy=a.fragment=null,a.ctx=[])}function on(n,e){n.$$.dirty[0]===-1&&(ge.push(n),Je(),n.$$.dirty.fill(0)),n.$$.dirty[e/31|0]|=1<<e%31}function ln(n,e,a,s,r,u,d,Ee=[-1]){const c=Ze;Ie(n);const _=n.$$={fragment:null,ctx:[],props:u,update:Oe,not_equal:r,bound:ke(),on_mount:[],on_destroy:[],on_disconnect:[],before_update:[],after_update:[],context:new Map(e.context||(c?c.$$.context:[])),callbacks:ke(),dirty:Ee,skip_bound:!1,root:e.target||c.$$.root};d&&d(_.root);let g=!1;if(_.ctx=a?a(n,e.props||{},(p,v,...fe)=>{const l=fe.length?fe[0]:v;return _.ctx&&r(_.ctx[p],_.ctx[p]=l)&&(!_.skip_bound&&_.bound[p]&&_.bound[p](l),g&&on(n,p)),v}):[],_.update(),g=!0,ye(_.before_update),_.fragment=s?s(_.ctx):!1,e.target){if(e.hydrate){const p=je(e.target);_.fragment&&_.fragment.l(p),p.forEach(Ve)}else _.fragment&&_.fragment.c();e.intro&&en(n.$$.fragment),nn(n,e.target,e.anchor,e.customElement),$e()}Ie(c)}class an{$destroy(){tn(this,1),this.$destroy=Oe}$on(e,a){if(!Ue(a))return Oe;const s=this.$$.callbacks[e]||(this.$$.callbacks[e]=[]);return s.push(a),()=>{const r=s.indexOf(a);r!==-1&&s.splice(r,1)}}$set(e){this.$$set&&!qe(e)&&(this.$$.skip_bound=!0,this.$$set(e),this.$$.skip_bound=!1)}}function rn(n){let e,a,s,r,u,d,Ee,c,_,g,p,v,fe,l,O,f,I,E,T,P,h,N,y,z,S,A,R,b,D,Z,M,L,w,C,k,x,G,B,U,V,$,H,W,q,F,K,j,Q,J,X,Y,ee,ne,te,oe,ie,le,ae,re,_e,ue,se,de,pe,ce,me,Me,ze,Le,Te,we,Pe,Ce,he;return{c(){e=i("main"),a=i("div"),a.innerHTML=`<div id="VERSIONE_TEST_NESTED" style="margin-bottom:25rem;padding: 1rem 5rem 10rem 5rem;border:solid 0.50rem olive;">half0a0 prototype00... step:2023:02:17::18:45 <br/><br/> 


<pre style="background-color:black;color:magenta;font-size:inherit;overflow:auto;">

+----------------+---------------------
|                | BUONGIORNO_0101
|                | POMERIGGIO_0202
|APPLICAZIONE    | CONTINUA
|                |
|                |
+----------------+--------------------
|                |
| VERSIONE_TEST  |VERSIONE_TEST_NESTED
+----------------+--------------------

</pre> 
<pre style="background-color:black;color:magenta;font-size:inherit; overflow:auto; ">

⚠
<div style="background-color:white;color:black;display:inline-block;">
</div>
✔ 
✔ 
✔
</pre> 

 <br/> 
 <br/>
Nella cartella 214a dal 44 al 53(ko) invece da 54 in poi (ok) <br/> 

<br/><br/>

Dal confronto risulta che elemento applicazione <br/>
necessita della class da_mo





<hr/> 
<span><a href="https://www.rinaldo-rasa.it/00/e/extra/docu/emoji/emoji_local.html">emoji_local</a> 
</span><span> </span> 
<span><a href="https://www.rinaldo-rasa.it/00/e/extra/docu/trasponder0/trasponder0v3__full_monty.html">trasponder0v3</a> 
</span><span> </span> 
<span><a href="http://venexiatre.altervista.org/WORKOU/OGGI/20191119/testtag.html#codicicoloristandard">colori_default</a> 
</span><span> </span> 
<span><a href="https://www.rinaldo-rasa.it/WORKOU/OGGI/20191119/00/e/extra/coloris/hexacolors.html">x11_colors</a> 
</span><span> </span> 






<hr/> 
<br/> 
<span>fin step:2023:02:17::18:45</span> 
<span style="margin:0;padding:0;display:inline-block!important;" class="cursores svelte-ju2h1u"></span></div>`,s=m(),r=i("div"),u=m(),d=i("div"),d.textContent="... TEST_0101",Ee=m(),c=i("div"),c.textContent="NO",_=m(),g=i("div"),g.textContent="SI",p=m(),v=i("article"),v.innerHTML='<div><input id="INPUT_SCELTO_0101" type="range" list="LISTA_0101" step="0.10" min="0.00" max="6.00"/></div>',fe=m(),l=i("datalist"),O=i("option"),f=i("option"),I=i("option"),E=i("option"),T=i("option"),P=i("option"),h=i("option"),N=i("option"),y=i("option"),z=i("option"),S=i("option"),A=i("option"),R=i("option"),b=i("option"),D=i("option"),Z=i("option"),M=i("option"),L=i("option"),w=i("option"),C=i("option"),k=i("option"),x=i("option"),G=i("option"),B=i("option"),U=i("option"),V=i("option"),$=i("option"),H=i("option"),W=i("option"),q=i("option"),F=i("option"),K=i("option"),j=i("option"),Q=i("option"),J=i("option"),X=i("option"),Y=i("option"),ee=i("option"),ne=i("option"),te=i("option"),oe=i("option"),ie=i("option"),le=i("option"),ae=i("option"),re=i("option"),_e=i("option"),ue=i("option"),se=i("option"),de=i("option"),pe=i("option"),ce=i("option"),me=i("option"),Me=m(),ze=i("script"),ze.textContent=`// 
// welcome everybody!!!
// 
function EstNaN(){ // alert("NaN"); 
if(NaN===NaN){}else{alert("you are running a computer language that says NaN===NaN is false and if you agree everything is ok");}};
// EstNaN();






let    DESKTOP_0303 = 1 ;
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

let LarghezzaApplicazione = LarghezzaBodyRem_0303 - CorrezioneLarghezzaApplicazione;
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
background-color:transparent;


border:solid 0.00rem red;

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




<article style="text-align:center;">
<div style="display:inline-block;">
<img id="WOO_000" src="https://www.rinaldo-rasa.it/WORKOU/OGGI/20191119/immagini/Woodstoc.png" alt="Woodstoc.png" >
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
// Al momento inutilizzato
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
let LARGHEZZA_PIANOTERRA = LarghezzaApplicazione;
let ALTEZZA_PRIMOPIANO = AltezzaApplicazione;
// alert(LARGHEZZA_PIANOTERRA);
// alert(ALTEZZA_PRIMOPIANO);

let MARGINE_SINISTRA = MargineSinistraRem_0303;



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
// || 
// || 
// || 
// \\/
function sonda_Input_0101(arg0,arg1,arg2,arg3){
let TipoDiDispositivo=arg0;
// alert(TipoDiDispositivo);
let LarghezzaPianoterra=arg1;
let AltezzaPrimopiano=arg2;
let MargineSinistra =arg3;
//alert(MargineSinistra);
let MargineBottomTestNested=MargineSinistra * 2.5;



let CorrezioneFontPerDispositivo;
// Valore di default
CorrezioneFontPerDispositivo=0.75;
// Detect il dispositivo effettivo
if(TipoDiDispositivo===0){ CorrezioneFontPerDispositivo=1.00; }
if(TipoDiDispositivo===1){ CorrezioneFontPerDispositivo=0.50; }
// alert(CorrezioneFontPerDispositivo);





let StileVersioneVERSIONE_TEST_NESTED;
let ArrayStileVersioneVERSIONE_TEST_NESTED=[""];

// Valore di default
StileVersioneVERSIONE_TEST_NESTED="#VERSIONE_TEST_NESTED{overflow:auto;}";

if(TipoDiDispositivo===0){ StileVersioneVERSIONE_TEST_NESTED="#VERSIONE_TEST_NESTED{margin-bottom:10rem!important;color:#FDF5E6;font-size:1.500rem;overflow:auto;}"; }
if(TipoDiDispositivo===1){ StileVersioneVERSIONE_TEST_NESTED="#VERSIONE_TEST_NESTED{margin-bottom:10rem!important;color:#FDF5E6;font-size:0.875rem;overflow:auto;}"; }
// alert(StileVersioneVERSIONE_TEST_NESTED);










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


// 
// hack con possibile conflitto di nome
//
// (window.innerHeight  /16)
//
AltezzaPrimopiano = (window.innerHeight  /16);


document.getElementById("TEST_0101").innerHTML=\`

<style>
#APPLICAZIONE{font-size:\`+DIM_INPUT_0101+\`rem!important;}
#BUONGIORNO_0101{font-size:\`+DIM_INPUT_0101+\`rem!important;}
#POMERIGGIO_0202{font-size:\`+DIM_INPUT_0101+\`rem!important;}


img{ width:\`+DIM_IMAGE_0101+\`rem!important;max-width:100%!important;max-height:100%;!important}

#BUONGIORNO_0101{font-family:monospace;text-align:left;}

#APPLICAZIONE, #BUONGIORNO_0101, #POMERIGGIO_0202{text-align:left;overflow:auto;}

#VERSIONE_TEST{
width:\`+ LarghezzaPianoterra+\`rem;
height:\`+ AltezzaPrimopiano+\`rem;





}

\`+ StileVersioneVERSIONE_TEST_NESTED +\`


</style>


    
\`;



};
setInterval(sonda_Input_0101, 1, TIPO_DISPOSITIVO,LARGHEZZA_PIANOTERRA ,ALTEZZA_PRIMOPIANO,MARGINE_SINISTRA ) ;











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
document.querySelector("#VERSIONE_TEST_NESTED").style.display="block";
document.querySelector("#TOG_NO").style.display="none";
document.querySelector("#TOG_SI").style.display="block";

}


function Tog_Si(){
document.querySelector("#APPLICAZIONE").style.display="block";
document.querySelector("#CONTENITORE_INPUT_0101").style.display="block";
document.querySelector("#VERSIONE_TEST_NESTED").style.display="none";
document.querySelector("#TOG_NO").style.display="block";
document.querySelector("#TOG_SI").style.display="none";

}`,Le=m(),Te=i("link"),we=m(),Pe=i("link"),Ce=m(),he=i("link"),o(a,"id","VERSIONE_TEST"),o(a,"class","da_mo svelte-ju2h1u"),o(r,"id","APPLICAZIONE"),Ae(r,"display","none"),o(r,"class","da_mo svelte-ju2h1u"),o(d,"id","TEST_0101"),o(c,"id","TOG_NO"),o(c,"onclick","Tog_No()"),o(g,"id","TOG_SI"),o(g,"onclick","Tog_Si()"),o(v,"id","CONTENITORE_INPUT_0101"),Ae(v,"display","none"),Ae(v,"display","block"),o(O,"id","OPZ_00"),O.__value="0.00",O.value=O.__value,o(f,"id","OPZ_01"),f.__value="0.11",f.value=f.__value,o(I,"id","OPZ_02"),I.__value="0.22",I.value=I.__value,o(E,"id","OPZ_03"),E.__value="0.33",E.value=E.__value,o(T,"id","OPZ_04"),T.__value="0.44",T.value=T.__value,o(P,"id","OPZ_05"),P.__value="0.55",P.value=P.__value,o(h,"id","OPZ_06"),h.__value="0.66",h.value=h.__value,o(N,"id","OPZ_07"),N.__value="0.77",N.value=N.__value,o(y,"id","OPZ_08"),y.__value="0.88",y.value=y.__value,o(z,"id","OPZ_09"),z.__value="0.99",z.value=z.__value,o(S,"id","OPZ_10"),S.__value="2.00",S.value=S.__value,o(A,"id","OPZ_11"),A.__value="2.11",A.value=A.__value,o(R,"id","OPZ_12"),R.__value="2.22",R.value=R.__value,o(b,"id","OPZ_13"),b.__value="2.33",b.value=b.__value,o(D,"id","OPZ_14"),D.__value="2.44",D.value=D.__value,o(Z,"id","OPZ_15"),Z.__value="2.55",Z.value=Z.__value,o(M,"id","OPZ_16"),M.__value="2.66",M.value=M.__value,o(L,"id","OPZ_17"),L.__value="2.77",L.value=L.__value,o(w,"id","OPZ_18"),w.__value="2.88",w.value=w.__value,o(C,"id","OPZ_19"),C.__value="2.99",C.value=C.__value,o(k,"id","OPZ_20"),k.__value="3.00",k.value=k.__value,o(x,"id","OPZ_21"),x.__value="3.11",x.value=x.__value,o(G,"id","OPZ_22"),G.__value="3.22",G.value=G.__value,o(B,"id","OPZ_23"),B.__value="3.33",B.value=B.__value,o(U,"id","OPZ_24"),U.__value="3.44",U.value=U.__value,o(V,"id","OPZ_25"),V.__value="3.55",V.value=V.__value,o($,"id","OPZ_26"),$.__value="3.66",$.value=$.__value,o(H,"id","OPZ_27"),H.__value="3.77",H.value=H.__value,o(W,"id","OPZ_28"),W.__value="3.88",W.value=W.__value,o(q,"id","OPZ_29"),q.__value="3.99",q.value=q.__value,o(F,"id","OPZ_30"),F.__value="4.00",F.value=F.__value,o(K,"id","OPZ_31"),K.__value="4.11",K.value=K.__value,o(j,"id","OPZ_32"),j.__value="4.22",j.value=j.__value,o(Q,"id","OPZ_33"),Q.__value="4.33",Q.value=Q.__value,o(J,"id","OPZ_34"),J.__value="4.44",J.value=J.__value,o(X,"id","OPZ_35"),X.__value="4.55",X.value=X.__value,o(Y,"id","OPZ_36"),Y.__value="4.66",Y.value=Y.__value,o(ee,"id","OPZ_37"),ee.__value="4.77",ee.value=ee.__value,o(ne,"id","OPZ_38"),ne.__value="4.88",ne.value=ne.__value,o(te,"id","OPZ_39"),te.__value="4.99",te.value=te.__value,o(oe,"id","OPZ_40"),oe.__value="5.00",oe.value=oe.__value,o(ie,"id","OPZ_41"),ie.__value="5.00",ie.value=ie.__value,o(le,"id","OPZ_42"),le.__value="5.11",le.value=le.__value,o(ae,"id","OPZ_43"),ae.__value="5.22",ae.value=ae.__value,o(re,"id","OPZ_44"),re.__value="5.33",re.value=re.__value,o(_e,"id","OPZ_45"),_e.__value="5.44",_e.value=_e.__value,o(ue,"id","OPZ_46"),ue.__value="5.55",ue.value=ue.__value,o(se,"id","OPZ_47"),se.__value="5.66",se.value=se.__value,o(de,"id","OPZ_48"),de.__value="5.77",de.value=de.__value,o(pe,"id","OPZ_49"),pe.__value="5.88",pe.value=pe.__value,o(ce,"id","OPZ_50"),ce.__value="5.99",ce.value=ce.__value,o(me,"id","OPZ_51"),me.__value="6.00",me.value=me.__value,o(l,"id","LISTA_0101"),o(Te,"rel","preconnect"),o(Te,"href","https://fonts.gstatic.com"),o(Pe,"href","https://fonts.googleapis.com/css2?family=PT+Mono&display=swap"),o(Pe,"rel","stylesheet"),o(he,"href","https://fonts.googleapis.com/css2?family=Rasa:wght@300&display=swap"),o(he,"rel","stylesheet"),o(e,"id","MAIN"),o(e,"class","da_mo svelte-ju2h1u"),o(e,"lang","it")},m(Se,He){Fe(Se,e,He),t(e,a),t(e,s),t(e,r),t(e,u),t(e,d),t(e,Ee),t(e,c),t(e,_),t(e,g),t(e,p),t(e,v),t(e,fe),t(e,l),t(l,O),t(l,f),t(l,I),t(l,E),t(l,T),t(l,P),t(l,h),t(l,N),t(l,y),t(l,z),t(l,S),t(l,A),t(l,R),t(l,b),t(l,D),t(l,Z),t(l,M),t(l,L),t(l,w),t(l,C),t(l,k),t(l,x),t(l,G),t(l,B),t(l,U),t(l,V),t(l,$),t(l,H),t(l,W),t(l,q),t(l,F),t(l,K),t(l,j),t(l,Q),t(l,J),t(l,X),t(l,Y),t(l,ee),t(l,ne),t(l,te),t(l,oe),t(l,ie),t(l,le),t(l,ae),t(l,re),t(l,_e),t(l,ue),t(l,se),t(l,de),t(l,pe),t(l,ce),t(l,me),t(e,Me),t(e,ze),t(e,Le),t(e,Te),t(e,we),t(e,Pe),t(e,Ce),t(e,he)},p:Oe,i:Oe,o:Oe,d(Se){Se&&Ve(e)}}}class _n extends an{constructor(e){super(),ln(this,e,null,rn,We,{})}}new _n({target:document.getElementById("app")});
