<script>
//
//
// CTre_js.php
// 
//
// 20:23:01:14:16:35
// 
// qui create le variabili
// 
// 

function RiquadroBuongiorno_1673713881806(){

/* 1673713881806 */

/*    default                         */
/*    detect il tipo di dispositivo   */
DESKTOP_1673713881806 = 1 ; 
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{ DESKTOP_1673713881806 = 0 ; } else { DESKTOP_1673713881806 = 1 ; }


    let LarghezzaBody_1673713881806 = window.innerWidth   /16;
    let AltezzaBody_1673713881806   = window.innerHeight  /16;
    
    let MargineSinistra_1673713881806 = 5 ;            	// default
    let BordoToggleDevice_1673713881806 = MargineSinistra_1673713881806*0.5;
	if (DESKTOP_1673713881806==1){}						// resposive


	let LarghezzaRiquadroBuongiorno_1673713881806 = LarghezzaBody_1673713881806 - (MargineSinistra_1673713881806 * 2 ) ;
	let AltezzaRiquadroBuongiorno_1673713881806   = AltezzaBody_1673713881806 * 0.75  ;
	
	// evitare che i pulsanti toggle si
	// sovrappongano
	let LarghezzaToggle_1673713881806 = MargineSinistra_1673713881806;
	let AggiuntaDiSicurezza_1673713881806 = 0.05 ;
	let LarghezzaToggle_1673713881806Sicuro = MargineSinistra_1673713881806 + AggiuntaDiSicurezza_1673713881806 ;
	let ControlloDiSicurezza_1673713881806=( LarghezzaToggle_1673713881806Sicuro ) * 2;


if(LarghezzaRiquadroBuongiorno_1673713881806 < ControlloDiSicurezza_1673713881806)
{alert("&#9888; Attenzione dimensioni fuori intervallo!!!");}else{}


 
let Harlequin_1673713881806 =`

<style>

#RIQUADRO_POPUP_1673713881806{position:fixed;top:0rem;left:`+MargineSinistra_1673713881806+`rem;}
#RIQUADRO_POPUP_1673713881806{width:`+LarghezzaRiquadroBuongiorno_1673713881806+`rem;}
#RIQUADRO_POPUP_1673713881806{height:`+AltezzaRiquadroBuongiorno_1673713881806+`rem;}
#RIQUADRO_POPUP_1673713881806{background-color:white;color:black;}
#RIQUADRO_POPUP_1673713881806{border:dashed 0.15rem magenta;}
#RIQUADRO_POPUP_1673713881806{display:block;}
#RIQUADRO_POPUP_1673713881806{overflow:auto;}
#RIQUADRO_POPUP_1673713881806{}



#PANNELLO_TOGSINO_1673713881806{position:fixed;bottom:0rem;right:0rem;width:`+LarghezzaToggle_1673713881806Sicuro+`rem;border:solid 0.05rem lime;}

#TOGG_SI_1673713881806{float:left;			
border-top:solid     `+(BordoToggleDevice_1673713881806)+`rem red;
border-right:solid   `+(BordoToggleDevice_1673713881806)+`rem green;
border-bottom:solid  `+(BordoToggleDevice_1673713881806)+`rem blue;
border-left:solid    `+(BordoToggleDevice_1673713881806)+`rem orange;
display:inline-block; 
cursor:pointer;}

#TOGG_NO_1673713881806{float:left;			
border-top:solid     `+(BordoToggleDevice_1673713881806)+`rem blue;
border-right:solid   `+(BordoToggleDevice_1673713881806)+`rem orange;
border-bottom:solid  `+(BordoToggleDevice_1673713881806)+`rem red;
border-left:solid    `+(BordoToggleDevice_1673713881806)+`rem green;
display:inline-block;display:none;
cursor:pointer;}

</style>


<section id="RIQUADRO_POPUP_1673713881806" style="display:none;">
Questo un riquadro di tipo buongiorno! Posizionato in basso a destra.

1673713881806 "CTre_js.php"

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


<article id="PANNELLO_TOGSINO_1673713881806">



<div onclick="RiquadroBuongiornoNo_1673713881806()" id="TOGG_NO_1673713881806"></div>
<div onclick="RiquadroBuongiornoSi_1673713881806()" id="TOGG_SI_1673713881806"></div>

</article>


`;



return Harlequin_1673713881806;

//
} ; // fin function RiquadroBuongiorno
//
//


function RiquadroBuongiornoSi_1673713881806() {
document.querySelector("#RIQUADRO_POPUP_1673713881806").style.display="block";
document.querySelector("#TOGG_SI_1673713881806").style.display="none";
document.querySelector("#TOGG_NO_1673713881806").style.display="block";
document.querySelector("#TOGG_NO_1673713881806").style.float="right";			// left/right
}

function RiquadroBuongiornoNo_1673713881806() {
document.querySelector("#RIQUADRO_POPUP_1673713881806").style.display="none";
document.querySelector("#TOGG_SI_1673713881806").style.display="block";
document.querySelector("#TOGG_NO_1673713881806").style.display="none";
document.querySelector("#TOGG_SI_1673713881806").style.float="right";			// left/right
}




let QuestoEstRiquadro_1673713881806 = RiquadroBuongiorno_1673713881806();

document.write(QuestoEstRiquadro_1673713881806);



</script>
