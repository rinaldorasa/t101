<script>
//
//
// Uno_js.php
// 
//
// 20:23:01:14:16:35
// 
// qui create le variabili
// 
// 

function RiquadroBuongiorno_1673710889672(){

/* 1673710889672 */

/*    default                         */
/*    detect il tipo di dispositivo   */
DESKTOP_1673710889672 = 1 ; 
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{ DESKTOP_1673710889672 = 0 ; } else { DESKTOP_1673710889672 = 1 ; }


    let LarghezzaBody_1673710889672 = window.innerWidth   /16;
    let AltezzaBody_1673710889672   = window.innerHeight  /16;
    
    let MargineSinistra_1673710889672 = 5 ;            	// default
    let BordoToggleDevice_1673710889672 = MargineSinistra_1673710889672*0.5;
	if (DESKTOP_1673710889672==1){}						// resposive


let LarghezzaRiquadroBuongiorno_1673710889672 = LarghezzaBody_1673710889672 - (MargineSinistra_1673710889672 * 2 ) ;
let AltezzaRiquadroBuongiorno_1673710889672   = AltezzaBody_1673710889672 * 0.75  ;

// evitare che i pulsanti toggle si
// sovrappongano
let LarghezzaToggle_1673710889672 = MargineSinistra_1673710889672;
let AggiuntaDiSicurezza_1673710889672 = 0.05 ;
let LarghezzaToggle_1673710889672Sicuro = MargineSinistra_1673710889672 + AggiuntaDiSicurezza_1673710889672 ;
let ControlloDiSicurezza_1673710889672=( LarghezzaToggle_1673710889672Sicuro ) * 2;


if(LarghezzaRiquadroBuongiorno_1673710889672 < ControlloDiSicurezza_1673710889672)
{alert("&#9888; Attenzione dimensioni fuori intervallo!!!");}else{}


 
let Harlequin_1673710889672 =`

<style>

#RIQUADRO_POPUP_1673710889672{position:fixed;top:0rem;left:`+MargineSinistra_1673710889672+`rem;}
#RIQUADRO_POPUP_1673710889672{width:`+LarghezzaRiquadroBuongiorno_1673710889672+`rem;}
#RIQUADRO_POPUP_1673710889672{height:`+AltezzaRiquadroBuongiorno_1673710889672+`rem;}
#RIQUADRO_POPUP_1673710889672{background-color:white;color:black;}
#RIQUADRO_POPUP_1673710889672{border:dashed 0.15rem magenta;}
#RIQUADRO_POPUP_1673710889672{display:block;}
#RIQUADRO_POPUP_1673710889672{overflow:auto;}
#RIQUADRO_POPUP_1673710889672{}



#PANNELLO_TOGSINO_1673710889672{position:fixed;top:0rem;left:0rem;width:`+LarghezzaToggle_1673710889672Sicuro+`rem;border:solid 0.05rem lime;}

#TOGG_SI_1673710889672{float:left;			
border-top:solid     `+(BordoToggleDevice_1673710889672)+`rem red;
border-right:solid   `+(BordoToggleDevice_1673710889672)+`rem green;
border-bottom:solid  `+(BordoToggleDevice_1673710889672)+`rem blue;
border-left:solid    `+(BordoToggleDevice_1673710889672)+`rem orange;
display:inline-block; 
cursor:pointer;}

#TOGG_NO_1673710889672{float:left;			
border-top:solid     `+(BordoToggleDevice_1673710889672)+`rem blue;
border-right:solid   `+(BordoToggleDevice_1673710889672)+`rem orange;
border-bottom:solid  `+(BordoToggleDevice_1673710889672)+`rem red;
border-left:solid    `+(BordoToggleDevice_1673710889672)+`rem green;
display:inline-block;display:none;
cursor:pointer;}

</style>


<section id="RIQUADRO_POPUP_1673710889672" style="display:none;">
Questo un riquadro di tipo buongiorno! Posizionato in alto a sinistra.

1673710889672 AUno

<pre>
Uno Due

Qua Tre

</pre>
<pre>
Uno Due

Qua Tre

</pre>
<pre>
Uno Due

Qua Tre

</pre>
<pre>
Uno Due

Qua Tre

</pre>
<pre>
Uno Due

Qua Tre

</pre>
<pre>
Uno Due

Qua Tre

</pre>
<pre>
Uno Due

Qua Tre

</pre>
<pre>
Uno Due

Qua Tre

</pre>
<pre>
Uno Due

Qua Tre

</pre>

<? include("buongiornoOUT.php"); ?>


</section>


<article id="PANNELLO_TOGSINO_1673710889672">



<div onclick="RiquadroBuongiornoNo_1673710889672()" id="TOGG_NO_1673710889672"></div>
<div onclick="RiquadroBuongiornoSi_1673710889672()" id="TOGG_SI_1673710889672"></div>

</article>


`;



return Harlequin_1673710889672;

//
} ; // fin function RiquadroBuongiorno
//
//


function RiquadroBuongiornoSi_1673710889672() {
document.querySelector("#RIQUADRO_POPUP_1673710889672").style.display="block";
document.querySelector("#TOGG_SI_1673710889672").style.display="none";
document.querySelector("#TOGG_NO_1673710889672").style.display="block";
document.querySelector("#TOGG_NO_1673710889672").style.float="right";			// left/right
}

function RiquadroBuongiornoNo_1673710889672() {
document.querySelector("#RIQUADRO_POPUP_1673710889672").style.display="none";
document.querySelector("#TOGG_SI_1673710889672").style.display="block";
document.querySelector("#TOGG_NO_1673710889672").style.display="none";
document.querySelector("#TOGG_SI_1673710889672").style.float="right";			// left/right
}




let QuestoEstRiquadro_1673710889672 = RiquadroBuongiorno_1673710889672();

document.write(QuestoEstRiquadro_1673710889672);



</script>
