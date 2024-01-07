
<?php     echo '';


echo '';


echo '<hr>';

echo '<div id="w_a_0_0_AVVISO_MOBILE" >rilevato dispositivo mobile</div>';
echo '<div id="w_a_0_0_AVVISO_DESKTOP">rilevato dispositivo desktop</div>';

// ///////////////////////////////////////////
// w_a_0_0_RilevaDispositivo
// ///////////////////////////////////////////

// <script>


function w_a_0_0_RilevaDispositivo(){
echo '<div id="w_a_0_0_RilevaDispositivo" style="text-align:center;">
<script> 

//
// definizione delle variabili js icone svg 
// da utilizzare
//

w_a_0_0_DESKTOP_ICO=`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/></svg>`; 
w_a_0_0_PHONE_ICO=`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-phone" viewBox="0 0 16 16"> <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>`;  
w_a_0_0_WINDOWS_MS_ICO=`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-microsoft" viewBox="0 0 16 16"> <path d="M7.462 0H0v7.19h7.462V0zM16 0H8.538v7.19H16V0zM7.462 8.211H0V16h7.462V8.211zm8.538 0H8.538V16H16V8.211z"/></svg>`; 
w_a_0_0_CHROME_ICO=`<br>`+`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-browser-chrome" viewBox="0 0 16 16">  <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/></svg>`;  
w_a_0_0_ANDROID_ICO2=`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-android2" viewBox="0 0 16 16">  <path d="m10.213 1.471.691-1.26c.046-.083.03-.147-.048-.192-.085-.038-.15-.019-.195.058l-.7 1.27A4.832 4.832 0 0 0 8.005.941c-.688 0-1.34.135-1.956.404l-.7-1.27C5.303 0 5.239-.018 5.154.02c-.078.046-.094.11-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.697 3.697 0 0 0 3.5 5.02h9c0-.75-.208-1.44-.623-2.072a4.266 4.266 0 0 0-1.664-1.476ZM6.22 3.303a.367.367 0 0 1-.267.11.35.35 0 0 1-.263-.11.366.366 0 0 1-.107-.264.37.37 0 0 1 .107-.265.351.351 0 0 1 .263-.11c.103 0 .193.037.267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264Zm4.101 0a.351.351 0 0 1-.262.11.366.366 0 0 1-.268-.11.358.358 0 0 1-.112-.264c0-.103.037-.191.112-.265a.367.367 0 0 1 .268-.11c.104 0 .19.037.262.11a.367.367 0 0 1 .107.265c0 .102-.035.19-.107.264ZM3.5 11.77c0 .294.104.544.311.75.208.204.46.307.76.307h.758l.01 2.182c0 .276.097.51.292.703a.961.961 0 0 0 .7.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182c0 .276.097.51.292.703a.972.972 0 0 0 .71.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76c.291 0 .54-.103.749-.308.207-.205.311-.455.311-.75V5.365h-9v6.404Zm10.495-6.587a.983.983 0 0 0-.702.278.91.91 0 0 0-.293.685v4.063c0 .271.098.501.293.69a.97.97 0 0 0 .702.284c.28 0 .517-.095.712-.284a.924.924 0 0 0 .293-.69V6.146a.91.91 0 0 0-.293-.685.995.995 0 0 0-.712-.278Zm-12.702.283a.985.985 0 0 1 .712-.283c.273 0 .507.094.702.283a.913.913 0 0 1 .293.68v4.063a.932.932 0 0 1-.288.69.97.97 0 0 1-.707.284.986.986 0 0 1-.712-.284.924.924 0 0 1-.293-.69V6.146c0-.264.098-.491.293-.68Z"/></svg>`;




w_a_0_0_MOBILE_DEVICE=1;

if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{
/* true  mobile device */ 
w_a_0_0_MOBILE_DEVICE=1;
document.getElementById("w_a_0_0_RilevaDispositivo").innerHTML=w_a_0_0_PHONE_ICO;

}
else{
/* false  mobile device */ 

w_a_0_0_MOBILE_DEVICE=0;
document.getElementById("w_a_0_0_RilevaDispositivo").innerHTML=
`
<style>
#w_a_0_0_DESKTOP_ICO_SVG_WH{border:solid 0.00rem green;}
#w_a_0_0_DESKTOP_ICO_SVG_WH svg{width:40px; height:40px; border:solid 0.00rem fuchsia;}
</style>



<div id="w_a_0_0_DESKTOP_ICO_SVG_WH">
<svg  xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/></svg>

</div>



`
;

}; // dgebi w_a_0_0_RilevaDispositivo


//
// already controllato se
// mobile o desktop

if(w_a_0_0_MOBILE_DEVICE===1){
// alert("MOBILE_DEVICE");


document.querySelector("#w_a_0_0_AVVISO_MOBILE").style.display="block";

}

else

{
//alert("DESKTOP_DEVICE");
document.querySelector("#w_a_0_0_AVVISO_DESKTOP").style.display="block";

 
//
// RESPONSIVITY CONDIZIONATA
//

w_a_0_0_AttivaResponsivity = 1 ;
if (w_a_0_0_AttivaResponsivity===1){

//
// responsivity ini
//
//
// RESPONSIVITY
// adattamenti responsive per desktop PER DISPOSITIVO DESKTOP
// --------------------------------------====================

document.querySelector("#w_a_0_0_SUMMARY_TESTO_DINAMICO_TITOLO").style.fontSize="1.75rem";
document.querySelector("#w_a_0_0_SUMMARY_TESTO_DINAMICO_TITOLO_SVG").style.width="40px";
document.querySelector("#w_a_0_0_SUMMARY_TESTO_DINAMICO_TITOLO_SVG").style.height="40px";



document.querySelector("#w_a_0_0_TRASH_CAN_SEMANTIC_SVG").style.fontSize="1.75rem";

document.querySelector("#w_a_0_0_DARKMODE_SVG").style.width="20px";
document.querySelector("#w_a_0_0_DARKMODE_SVG").style.height="20px";
document.querySelector("#w_a_0_0_LIGHTMODE_SVG").style.width="20px";
document.querySelector("#w_a_0_0_LIGHTMODE_SVG").style.height="20px";

document.querySelector("#w_a_0_0_BACKDOOR_FORM_SI_SVG").style.width="20px";
document.querySelector("#w_a_0_0_BACKDOOR_FORM_SI_SVG").style.height="20px";
document.querySelector("#w_a_0_0_BACKDOOR_FORM_NO_SVG").style.width="20px";
document.querySelector("#w_a_0_0_BACKDOOR_FORM_NO_SVG").style.height="20px";

document.querySelector("#w_a_0_0_SALVATAGGIO_DI_TIPO_CIF_SVG").style.width="20px";
document.querySelector("#w_a_0_0_SALVATAGGIO_DI_TIPO_CIF_SVG").style.height="20px";



document.querySelector("#w_a_0_0_UP_NELLA_PAGINA_SVG").style.width= "20px";
document.querySelector("#w_a_0_0_UP_NELLA_PAGINA_SVG").style.height="20px";

document.querySelector("#w_a_0_0_DOWN_NELLA_PAGINA_SVG").style.width= "20px";
document.querySelector("#w_a_0_0_DOWN_NELLA_PAGINA_SVG").style.height="20px";





// document.querySelector("#w_a_0_0_area_immissione_testo__").style.fontSize="1.275rem";



document.querySelector("#w_a_0_0_invia_testo_button__").style.fontSize="2.750rem";
document.querySelector("#w_a_0_0_invia_testo_button__").style.fontFamily="PT Mono";
document.querySelector("#w_a_0_0_invia_testo_button__").style.fontVariant="small-caps";
document.querySelector("#w_a_0_0_invia_testo_button__").style.fontWeight="bold";



document.querySelector("#w_a_0_0_SEMAFORO_GREEN").style.fontSize="1.275rem";
document.querySelector("#w_a_0_0_SEMAFORO_RED").style.fontSize="1.275rem";






//
// responsivity fin
//
}; // attiva disattiva responsivity


};  //  i.test(navigator.userAgent) ? mobile o desktop 



</script>
</div>
';  // echo


} // w_a_0_0_RilevaDispositivo
// 
w_a_0_0_RilevaDispositivo();



?>


