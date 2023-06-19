
DESKTOP_CHECK = 1 ; DESKTOP_CHECK = 0 ; if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) { DESKTOP_CHECK = 0 ; } else { DESKTOP_CHECK = 1 ; } 
/* if(DESKTOP_CHECK === 0){alert("mobile");} if(DESKTOP_CHECK === 1){alert("desktop");}*/

/* mobile first */
FonteSizeStandard__=3.95*1.00;


if(DESKTOP_CHECK === 1){FonteSizeStandard__=3.95*0.75;}

// rilevazione width height
// i valori possono variare
// a seconda del tipo di
// dispositivo
// 
function LarghezzaRem__(){let Larghezza__=window.innerWidth/16;return Larghezza__;} function AltezzaRem__(){let Altezza__=window.innerHeight/16;return Altezza__;}

Larghezza__=LarghezzaRem__();Altezza__=AltezzaRem__();


HeightCapoPagina__=(FonteSizeStandard__*6.125);
if(DESKTOP_CHECK === 1){HeightCapoPagina__=(HeightCapoPagina__*0.75);}


FonteDinamica__=2.5;



FonteSizeXChiudiCapoPagina__=(FonteSizeStandard__*1);
FonteSizeXApriCapoPagina__= (FonteSizeXChiudiCapoPagina__*1);


FonteSizeXQuestionMarkPopUp__=FonteSizeXChiudiCapoPagina__;
LarghezzaXQuestionMarkPopUp__=(Larghezza__*1)-(FonteSizeXChiudiCapoPagina__*6);


AltezzaXQuestionMarkPopUp__=(Altezza__*1.00)-(HeightCapoPagina__*1.00);



 