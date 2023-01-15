<script>
//
//
// DQua_js.php
// 
//
// 20:23:01:14:16:35
// 
// 
// 
// 

function RiquadroBuongiorno_1673714981470(){

/* 1673714981470 */

/*    default                         */
/*    detect il tipo di dispositivo   */
DESKTOP_1673714981470 = 1 ; 
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{ DESKTOP_1673714981470 = 0 ; } else { DESKTOP_1673714981470 = 1 ; }


    let LarghezzaBody_1673714981470 = window.innerWidth   /16;
    let AltezzaBody_1673714981470   = window.innerHeight  /16;
    
    let MargineSinistra_1673714981470 = 5 ;            	// default
    let BordoToggleDevice_1673714981470 = MargineSinistra_1673714981470*0.5;
	if (DESKTOP_1673714981470==1){}						// resposive


	let LarghezzaRiquadroBuongiorno_1673714981470 = LarghezzaBody_1673714981470 - (MargineSinistra_1673714981470 * 2 ) ;
	let AltezzaRiquadroBuongiorno_1673714981470   = AltezzaBody_1673714981470 * 0.75  ;
	
	// evitare che i pulsanti toggle si
	// sovrappongano
	let LarghezzaToggle_1673714981470 = MargineSinistra_1673714981470;
	let AggiuntaDiSicurezza_1673714981470 = 0.05 ;
	let LarghezzaToggle_1673714981470Sicuro = MargineSinistra_1673714981470 + AggiuntaDiSicurezza_1673714981470 ;
	let ControlloDiSicurezza_1673714981470=( LarghezzaToggle_1673714981470Sicuro ) * 2;


if(LarghezzaRiquadroBuongiorno_1673714981470 < ControlloDiSicurezza_1673714981470)
{alert("&#9888; Attenzione dimensioni fuori intervallo!!!");}else{}


 
let Harlequin_1673714981470 =`

<style>

#RIQUADRO_POPUP_1673714981470{position:fixed;top:0rem;left:`+MargineSinistra_1673714981470+`rem;}
#RIQUADRO_POPUP_1673714981470{width:`+LarghezzaRiquadroBuongiorno_1673714981470+`rem;}
#RIQUADRO_POPUP_1673714981470{height:`+AltezzaRiquadroBuongiorno_1673714981470+`rem;}
#RIQUADRO_POPUP_1673714981470{background-color:white;color:black;}
#RIQUADRO_POPUP_1673714981470{border:dashed 0.15rem magenta;}
#RIQUADRO_POPUP_1673714981470{display:block;}
#RIQUADRO_POPUP_1673714981470{overflow:auto;}
#RIQUADRO_POPUP_1673714981470{}



#PANNELLO_TOGSINO_1673714981470{position:fixed;bottom:0rem;left:0rem;width:`+LarghezzaToggle_1673714981470Sicuro+`rem;border:solid 0.05rem lime;}

#TOGG_SI_1673714981470{float:left;			
border-top:solid     `+(BordoToggleDevice_1673714981470)+`rem red;
border-right:solid   `+(BordoToggleDevice_1673714981470)+`rem green;
border-bottom:solid  `+(BordoToggleDevice_1673714981470)+`rem blue;
border-left:solid    `+(BordoToggleDevice_1673714981470)+`rem orange;
display:inline-block; 
cursor:pointer;}

#TOGG_NO_1673714981470{float:left;			
border-top:solid     `+(BordoToggleDevice_1673714981470)+`rem blue;
border-right:solid   `+(BordoToggleDevice_1673714981470)+`rem orange;
border-bottom:solid  `+(BordoToggleDevice_1673714981470)+`rem red;
border-left:solid    `+(BordoToggleDevice_1673714981470)+`rem green;
display:inline-block;display:none;
cursor:pointer;}

</style>


<section id="RIQUADRO_POPUP_1673714981470" style="display:none;">
Questo un riquadro di tipo buongiorno! Posizionato in basso a destra.

1673714981470 "CTre_js.php"

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

<? include("PHP.php"); ?>


</section>


<article id="PANNELLO_TOGSINO_1673714981470">



<div onclick="RiquadroBuongiornoNo_1673714981470()" id="TOGG_NO_1673714981470"></div>
<div onclick="RiquadroBuongiornoSi_1673714981470()" id="TOGG_SI_1673714981470"></div>

</article>


`;



return Harlequin_1673714981470;

//
} ; // fin function RiquadroBuongiorno
//
//


function RiquadroBuongiornoSi_1673714981470() {
document.querySelector("#RIQUADRO_POPUP_1673714981470").style.display="block";
document.querySelector("#TOGG_SI_1673714981470").style.display="none";
document.querySelector("#TOGG_NO_1673714981470").style.display="block";
document.querySelector("#TOGG_NO_1673714981470").style.float="right";			// left/right
}

function RiquadroBuongiornoNo_1673714981470() {
document.querySelector("#RIQUADRO_POPUP_1673714981470").style.display="none";
document.querySelector("#TOGG_SI_1673714981470").style.display="block";
document.querySelector("#TOGG_NO_1673714981470").style.display="none";
document.querySelector("#TOGG_SI_1673714981470").style.float="right";			// left/right
}




let QuestoEstRiquadro_1673714981470 = RiquadroBuongiorno_1673714981470();

document.write(QuestoEstRiquadro_1673714981470);



</script>
