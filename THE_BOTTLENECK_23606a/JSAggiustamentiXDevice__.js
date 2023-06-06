//
// JSAggiustamentiXDevice__
//


// desktop device 
// rilevazione dispositivo
// e relativi aggiustamenti
//
// 
// DESKTOP_CHECK = 1 ;
// DESKTOP_CHECK = 0 ;
// if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
// { DESKTOP_CHECK = 0 ; } else { DESKTOP_CHECK = 1 ; }
// 
// if(DESKTOP_CHECK === 0 ){HeightHeader__=(HeightHeader__*1.00);FontSizeStandard__=FontSizeStandard__*1.000; }
// if(DESKTOP_CHECK === 1 ){HeightHeader__=(HeightHeader__*0.75);FontSizeStandard__=FontSizeStandard__*0.666; }
// // work in progress
// if(DESKTOP_CHECK === 1 ){HeightHeader__=(HeightHeader__*0.75);FontSizeStandard__=FontSizeStandard__*0.500; }
// 
// 

document.getElementById("AGGIUSTAMENTI_X_DEVICE__").innerHTML=
`
<style>

q.spinmincaveat0{font-size:`+(FontSizeStandard__*1)+`rem;display:inline-block;}
q.spinmincaveat1{font-size:`+(FontSizeStandard__*1)+`rem;display:inline-block;}
q.spinmincaveat2{font-size:`+(FontSizeStandard__*1)+`rem;display:inline-block;}


#MAIN__{margin-top:`+(HeightHeader__ * 1)+`rem;margin-bottom:`+(HeightHeader__ * 1)+`rem;}

#HEADER__{height:`+(HeightHeader__ * 1)+`rem;}

#APRI_HEADER__{font-size:`+(FontSizeStandard__*1)+`rem;}
#CHIUDI_HEADER__{font-size:`+(FontSizeStandard__*1)+`rem;}

#COPY_SI__{font-size:`+(FontSizeStandard__*1.00)+`rem;}
#COPY_NO__{font-size:`+(FontSizeStandard__*1.00)+`rem;}

#QUESTION_MARK_POPUP__{font-size:`+(FontSizeStandard__*1)+`rem;}
#ALT_QUESTION_MARK_POPUP__{font-size:`+(FontSizeStandard__*1)+`rem;}


#INPUT_NOME_FILE__{font-size:`+(FontSizeStandard__*1)+`rem;}


#THELASTWALTZ_TOP__{font-size:`+(FontSizeStandard__*1.00)+`rem!important;}
#THELASTWALTZ_FIN__{font-size:`+(FontSizeStandard__*1.00)+`rem!important;}
#THELASTWALTZ_BUT__{font-size:`+(FontSizeStandard__*1.00)+`rem!important;}
#THE_HEADER_BUT0__{font-size:`+(FontSizeStandard__*1.00)+`rem!important;}
#THE_HEADER_BUT1__{font-size:`+(FontSizeStandard__*1.00)+`rem!important;}



#THELASTWALTZ_TOP_BACKDOOR__{font-size:`+(FontSizeStandard__*1.00)+`rem!important;}
#THELASTWALTZ_FIN_BACKDOOR__{font-size:`+(FontSizeStandard__*1.00)+`rem!important;}
#THELASTWALTZ_FIN_BACKDOOR_BUT__{font-size:`+(FontSizeStandard__*1.00)+`rem!important;}
#THELASTWALTZ_TOP_BACKDOOR_BUT__{font-size:`+(FontSizeStandard__*1.00)+`rem!important;}





</style>

`;

