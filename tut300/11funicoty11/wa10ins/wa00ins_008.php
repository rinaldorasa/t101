
<?php 

//  008

// stili_css
echo '
<style>
button{background-color:transparent;border-color:transparent;}

 #w_a_1_1_HTML{}
 #w_a_1_1_BODY{border:solid 0.15rem transparent;}
 
 #w_a_1_1_DETAILS_TESTO_DINAMICO{border:solid 0.00rem olive;}
 #w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO{color:olive; font-size:5rem; font-family:monospace;border-bottom:solid 0.00rem green; border-radius:0.50rem; visibility:visible; display:none;}
 #w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO_SVG{width:48px; height:48px; color:green;}
 
 #w_a_1_1_MAIN{}
 
 #w_a_1_1_TRASH_PUNTINI_ETC{text-align:center; border:dashed 0.00rem olive;}
 #w_a_1_1_TRASH_CAN{display:initial; display:initial; display:none;}
 #w_a_1_1_TRASH_CAN_SVG{display:none;}
 #w_a_1_1_TRASH_CAN_SEMANTIC_SVG{color:orange; font-size:5.95rem;}
 #w_a_1_1_TRASH_CAN_SEMANTIC_SVG:hover{cursor:pointer;}
 #w_a_1_1_TRE_PUNTINI{}
 #w_a_1_1_TRE_PUNTINI_TEXT{font-size:5rem; display:none;}
 #w_a_1_1_TRE_PUNTINI_TRIANGLE_SVG{display:none;}
 #w_a_1_1_TRE_PUNTINI_TRIANGLE_SEMANTIC_SVG{margin-left:2.50rem;font-size:5rem;}

 #w_a_1_1_DARKMODE{display:inline-block;}
 #w_a_1_1_DARKMODE_SVG{width:80px; height:80px;}
 #w_a_1_1_LIGHTMODE{display:inline-block;}
 #w_a_1_1_LIGHTMODE_SVG{width:80px; height:80px;}
 
 #w_a_1_1_BACKDOOR_FORM_SI{}
 #w_a_1_1_BACKDOOR_FORM_SI{display:inline-block;}
 #w_a_1_1_BACKDOOR_FORM_SI_SVG{width:80px; height:80px;}
 
 #w_a_1_1_BACKDOOR_FORM_NO{}
 #w_a_1_1_BACKDOOR_FORM_NO{display:inline-block;}
 #w_a_1_1_BACKDOOR_FORM_NO_SVG{width:80px; height:80px;}
 
 
 
 
 
 #w_a_1_1_SALVATAGGIO_DI_TIPO_CIF{position:fixed; bottom:0rem; left:0rem; display:inline-block;}
 #w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SVG{width:80px; height:80px; display:inline-block;} 
 #w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SUMMARY{background-color:orange; color:orange;  display:inline-block;}
 #w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SUMMARY:hover{cursor:pointer;}
 
 
  
 #w_a_1_1_UP_DOWN_NELLA_PAGINA{position:fixed; top:9.00rem;  top:25%;  left:0%; width:auto; height:auto;}
 #w_a_1_1_UP_DOWN_NELLA_PAGINA{display:block; z-index:999;}

 #w_a_1_1_UP_NELLA_PAGINA{display:block; border:solid 0.00rem green;}
 #w_a_1_1_UP_NELLA_PAGINA_SVG{  width:60px; height:60px; display:block;}
 
 #w_a_1_1_DOWN_NELLA_PAGINA{display:block; border:solid 0.00rem red;} 
 #w_a_1_1_DOWN_NELLA_PAGINA_SVG{width:60px; height:60px; display:block;}




 
 
 #w_a_1_1_FORM_X_INVIA__{border:dotted 0.00rem olive;}
 #w_a_1_1_FORM_X_INVIA_AES__{border:solid 0.00rem olive;}


 #w_a_1_1_DIGITAL_IDENTITY_FREE_READING{} 
 
 #w_a_1_1_SSAP__{text-align:center; border:solid 0.00rem olive;}
 #w_a_1_1_post_uno__{width:20%; font-size:2.5rem; background-color:transparent; color:transparent; font-family:monospace; opacity:0.75;} 
 #w_a_1_1_post_due__{width:20%; font-size:2.5rem; background-color:transparent; color:transparent; font-family:monospace; opacity:0.75;}
 #w_a_1_1_post_tre__{width:20%; font-size:2.5rem; background-color:transparent; color:transparent; font-family:monospace; opacity:0.75;}
 #w_a_1_1_post_qua__{width:20%; font-size:2.5rem; background-color:transparent; color:transparent; font-family:monospace; opacity:0.75;}

 
 #w_a_1_1_area_immissione_testo_invia_container__{text-align:center; border:solid 0.00rem lime;}
 #w_a_1_1_area_immissione_testo__{width:90%; height:48rem; font-size:5rem; font-family:monospace;}
 #w_a_1_1_invia_testo_container__{text-align:center;}
 #w_a_1_1_invia_testo_button__{width:50%; font-size:5rem; font-family:"PT Mono",monospace; text-transform:uppercase;}
 #w_a_1_1_INDEX_WRAP{position:fixed; top:1.00rem; right:0rem;}
 #w_a_1_1_INDEX_CLICK{}
 #w_a_1_1_INDEX_CLICK_SVG{width:80px; height:80px; box-shadow:6px 6px 12px black; border-radius:0.50rem;}
 #w_a_1_1_INDEX_CLICK_SVG:hover{width:80px; height:80px; background-color:white; color:red; box-shadow:6px 6px 12px black; border-radius:0.50rem; cursor:pointer;}
 #w_a_1_1_SEMAFORO_GREEN{ margin-left:80px; background-color:green; color:green; font-size:2.5rem; border-radius:100%; opacity:1; opacity:0;}
 #w_a_1_1_SEMAFORO_RED{   margin-left:80px; background-color:red; color:red; font-size:2.5rem; border-radius:100%;     opacity:1; opacity:0;}





 #w_a_1_1_CONTENUTO_DENCRIPTED{padding:0.50rem; background-color:navy; color:white; font-size:125%; font-family:monospace; overflow:auto;}

 #w_a_1_1_CONTENUTO_DENCRIPTED{padding:1.250rem; background-color:white; color:black; font-size:125%; font-family:"PT Mono", monospace; overflow:auto;}

 #w_a_1_1_CONTENUTO_DENCRIPTED{box-shadow:6px 6px 12px gray;}





 #w_a_1_1_AVVISO_MOBILE,  #w_a_1_1_AVVISO_DESKTOP{ font-family:monospace; font-variant:small-caps; text-align:center; display:none; }
 #w_a_1_1_rilevato_sistema_operativo_e_browser{font-family:monospace; font-variant:small-caps; text-align:center; }

 #w_a_1_1_GIORNO_TIME{margin-top:0.5rem; margin-bottom:0.5rem; font-family:"PT Mono", monospace; font-variant:small-caps; text-align:center;}


 #w_a_1_1_CONTENITORE_DETTAGLI_SLIDERS{position:fixed; top:9.00rem; top:25%; right:0.0rem;  background-color:transparent; background-color:yellow; background-color:rgba(255, 215, 0, 0.125); border:solid 0.00rem red; border-radius:0.35rem;}
 #w_a_1_1_DETTAGLI_SLIDERS{  text-align:center; background-color:transparent; border-width:0rem;}
 #w_a_1_1_SUMMARY_SLIDERS{ background-color:rgba(255, 215, 0, 0.50); border-width:0rem;} 
 #w_a_1_1_SLIDERS_SVG{width:60px; height:60px; color:purple; display:none;}



</style>



<style>

.preverve{
inline-size: auto;
    overflow-wrap: break-word;
    border:solid 0.00rem gray;
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */ 
  
};

</style>

';




echo '

<style>
.cursore {
 background: lime;
 line-height: 17px;
 margin-left: 3px;
 -webkit-animation: blink 0.8s infinite;
 width: 7px;
 height: 15px;
}

.cursore_freeTest{ line-height: 17px;  margin-left: 3px;  -webkit-animation: blink 0.8s infinite; }

.cursore_freeX{   width: 16px;  height: 16px;  -webkit-animation: blink 0.8s infinite;}
@-webkit-keyframes blink { 0% {background: #222}  50% {background: lime}  100% {background: #222} }

.cursore_free{   width: 16px;  height: 16px;  -webkit-animation: blink 1.8s infinite;}
@-webkit-keyframes blink { 0% {background: yellow}  50% {background: purple}  100% {background: #222} }


</style>
';

?>  
<!--  008 stili css -->


