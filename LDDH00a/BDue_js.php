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

function RiquadroBuongiorno_1673712686136(){

/* 1673712686136 */

/*    default                         */
/*    detect il tipo di dispositivo   */
DESKTOP_1673712686136 = 1 ; 
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{ DESKTOP_1673712686136 = 0 ; } else { DESKTOP_1673712686136 = 1 ; }


    let LarghezzaBody_1673712686136 = window.innerWidth   /16;
    let AltezzaBody_1673712686136   = window.innerHeight  /16;
    
    let MargineSinistra_1673712686136 = 5 ;            	// default
    let BordoToggleDevice_1673712686136 = MargineSinistra_1673712686136*0.5;
	if (DESKTOP_1673712686136==1){}						// resposive


	let LarghezzaRiquadroBuongiorno_1673712686136 = LarghezzaBody_1673712686136 - (MargineSinistra_1673712686136 * 2 ) ;
	let AltezzaRiquadroBuongiorno_1673712686136   = AltezzaBody_1673712686136 * 0.75  ;
	
	// evitare che i pulsanti toggle si
	// sovrappongano
	let LarghezzaToggle_1673712686136 = MargineSinistra_1673712686136;
	let AggiuntaDiSicurezza_1673712686136 = 0.05 ;
	let LarghezzaToggle_1673712686136Sicuro = MargineSinistra_1673712686136 + AggiuntaDiSicurezza_1673712686136 ;
	let ControlloDiSicurezza_1673712686136=( LarghezzaToggle_1673712686136Sicuro ) * 2;


if(LarghezzaRiquadroBuongiorno_1673712686136 < ControlloDiSicurezza_1673712686136)
{alert("&#9888; Attenzione dimensioni fuori intervallo!!!");}else{}


 
let Harlequin_1673712686136 =`

<style>

#RIQUADRO_POPUP_1673712686136{position:fixed;top:0rem;left:`+MargineSinistra_1673712686136+`rem;}
#RIQUADRO_POPUP_1673712686136{width:`+LarghezzaRiquadroBuongiorno_1673712686136+`rem;}
#RIQUADRO_POPUP_1673712686136{height:`+AltezzaRiquadroBuongiorno_1673712686136+`rem;}
#RIQUADRO_POPUP_1673712686136{background-color:white;color:black;}
#RIQUADRO_POPUP_1673712686136{border:dashed 0.15rem magenta;}
#RIQUADRO_POPUP_1673712686136{display:block;}
#RIQUADRO_POPUP_1673712686136{overflow:auto;}
#RIQUADRO_POPUP_1673712686136{}



#PANNELLO_TOGSINO_1673712686136{position:fixed;top:0rem;right:0rem;width:`+LarghezzaToggle_1673712686136Sicuro+`rem;border:solid 0.05rem lime;}

#TOGG_SI_1673712686136{float:left;			
border-top:solid     `+(BordoToggleDevice_1673712686136)+`rem red;
border-right:solid   `+(BordoToggleDevice_1673712686136)+`rem green;
border-bottom:solid  `+(BordoToggleDevice_1673712686136)+`rem blue;
border-left:solid    `+(BordoToggleDevice_1673712686136)+`rem orange;
display:inline-block; 
cursor:pointer;}

#TOGG_NO_1673712686136{float:left;			
border-top:solid     `+(BordoToggleDevice_1673712686136)+`rem blue;
border-right:solid   `+(BordoToggleDevice_1673712686136)+`rem orange;
border-bottom:solid  `+(BordoToggleDevice_1673712686136)+`rem red;
border-left:solid    `+(BordoToggleDevice_1673712686136)+`rem green;
display:inline-block;display:none;
cursor:pointer;}

</style>


<section id="RIQUADRO_POPUP_1673712686136" style="display:none;">
Questo un riquadro di tipo buongiorno! Posizionato in alto a destra.

1673712686136 "BDue_js.php"

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


<article id="PANNELLO_TOGSINO_1673712686136">



<div onclick="RiquadroBuongiornoNo_1673712686136()" id="TOGG_NO_1673712686136"></div>
<div onclick="RiquadroBuongiornoSi_1673712686136()" id="TOGG_SI_1673712686136"></div>

</article>


`;



return Harlequin_1673712686136;

//
} ; // fin function RiquadroBuongiorno
//
//


function RiquadroBuongiornoSi_1673712686136() {
document.querySelector("#RIQUADRO_POPUP_1673712686136").style.display="block";
document.querySelector("#TOGG_SI_1673712686136").style.display="none";
document.querySelector("#TOGG_NO_1673712686136").style.display="block";
document.querySelector("#TOGG_NO_1673712686136").style.float="right";			// left/right
}

function RiquadroBuongiornoNo_1673712686136() {
document.querySelector("#RIQUADRO_POPUP_1673712686136").style.display="none";
document.querySelector("#TOGG_SI_1673712686136").style.display="block";
document.querySelector("#TOGG_NO_1673712686136").style.display="none";
document.querySelector("#TOGG_SI_1673712686136").style.float="right";			// left/right
}




let QuestoEstRiquadro_1673712686136 = RiquadroBuongiorno_1673712686136();

document.write(QuestoEstRiquadro_1673712686136);



</script>
