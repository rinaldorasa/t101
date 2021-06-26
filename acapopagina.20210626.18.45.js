/************************************/
/*         acapopagina              */

"use strict";


let aggiuntaB=new Date().getTime().toString();
let nome_fileB="20210626-finestre.js"+"?"+aggiuntaB;
let nome_scriptAB;
nome_scriptAB=document.createElement("script");
nome_scriptAB.src=nome_fileB;
document.getElementsByTagName("head")[0].appendChild(nome_scriptAB);



let CHEVRON_UP;
CHEVRON_UP='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-up" viewBox="0 0 16 16">'+
'<path fill-rule="evenodd" d="M7.776 5.553a.5.5 0 0 1 .448 0l6 3a.5.5 0 1 1-.448.894L8 6.56 2.224 9.447a.5.5 0 1 1-.448-.894l6-3z"/>'+
'</svg>';
let CHEVRON_DOWN;
CHEVRON_DOWN='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-compact-down" viewBox="0 0 16 16">'+
'<path fill-rule="evenodd" d="M1.553 6.776a.5.5 0 0 1 .67-.223L8 9.44l5.776-2.888a.5.5 0 1 1 .448.894l-6 3a.5.5 0 0 1-.448 0l-6-3a.5.5 0 0 1-.223-.67z"/>'+
'</svg>';
let HOUSE;
HOUSE='<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">'+
'<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>'+
'<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>'+
'</svg>';

 /* detect width height window */ 
 /* per adattare l\'elemento */ 
 /*    
 let wFinestraA = window.innerWidth; 
 let hFinestraA = window.innerHeight; 
 
 let w75percentA,w85percentA,w95percentA; 
 let w75percentremA,w85percentremA,w95percentremA; 
 
 let dimMainA, dimmainA;
 
 w75percentA=wFinestraA*0.75; w75percentremA=w75percentA/16;
 w85percentA=wFinestraA*0.85; w85percentremA=w85percentA/16;
 w95percentA=wFinestraA*0.95; w95percentremA=w95percentA/16;
 
 dimMainA=w95percentremA;
 dimmainA=dimMainA;



let dimmain_stringA=dimmainA.toString();

let dimmain_centratoA;
dimmain_centratoA=dimmainA*0.5;

let dimmain_centrato_stringA=dimmain_centratoA.toString();
*/



document.getElementById("acapopagina").innerHTML=
'<section class="ACAPOPAGINA border border-success">'+
'<article style="position:relative;">'+
'<a href="#" style="margin-left:1rem;margin-right:1rem;font-variant:small-caps;font-weight:bold;">'+CHEVRON_UP+'</a>'+dimMain+
'<a href="#fine" style="margin-left:1rem;margin-right:1rem;font-variant:small-caps;font-weight:bold;">'+CHEVRON_DOWN+'</a>'+
'<a href="http://venexiatre.altervista.org/WORKOU/OGGI/20191119/20191119f_1-CREEK.html" style="position:absolute;top:0;right:0;margin-left:1rem;margin-right:1rem;font-variant:small-caps;font-weight:bold;">'+HOUSE+'</a>'+
'</article>'+
'</section>'+
'';

