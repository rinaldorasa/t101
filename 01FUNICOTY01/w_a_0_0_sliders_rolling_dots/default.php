 

<?php  

echo '';

echo '<!-- gli sliders rolling dots ini -->';
    ///////////////////////////
    // ROLLING DOT
    ///////////////////////////
    
    
    echo '
    <script>
    function w_a_0_0_AppRD(arg1, arg2, arg3){
    // Application Rolling Dot
    
    // definizione di unvalue standard
    // diverso per dispositivo mobile o desktop
    //
    // per MOBILE
    
    ValoreStandard=3.5;
    
    // per DESKTOP
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
    {}
    else
    {
    ValoreStandard=1.5;
    };

    
    document.getElementById(arg2).innerHTML=
    `
    <input id="SETYINGS_INPUT" style="width:30%;" type="range" value="${ValoreStandard}" step="0.125"  min="0" max="5">
    <div id="SETYINGS_VALORE_DINAMICO_INPUT" style="font-family:monospace; display:inline-block;"></div>
    <div id="SETYINGS"></div>
    
    `;
    
    function w_a_0_0_RollingDot(){
        function LETTURA_RANGE(){
        FonteVariabile=document.getElementById("SETYINGS_INPUT").value;
        document.getElementById("SETYINGS_VALORE_DINAMICO_INPUT").innerHTML=`${FonteVariabile}rem`;
        return FonteVariabile;
        }; LETTURA_RANGE();
    
    
    
    FonteVariabileDinamica=LETTURA_RANGE();
    document.getElementById("SETYINGS").innerHTML=
    `
    <style>
    
    #${arg1}{padding-left:${FonteVariabileDinamica*0.75}rem}
    #${arg1}{font-size:${FonteVariabileDinamica}rem}

    #${arg3}{padding-left:${FonteVariabileDinamica*0.75}rem}
    #${arg3}{font-size:${FonteVariabileDinamica}rem}
    #${arg3}{margin-top:${FonteVariabileDinamica}rem}
    #${arg3}{line-height:${FonteVariabileDinamica}rem}

    
    </style>
    `
    ;
    
    
    
    
    }; w_a_0_0_EseguiRollingDot=setInterval(w_a_0_0_RollingDot, 1)
    
    }; // w_a_0_0_AppRD(arg1, arg2)
    </script>
    ';  //  echo





echo '<section  id="w_a_0_0_CONTENITORE_DETTAGLI_SLIDERS">';
echo '<details  id="w_a_0_0_DETTAGLI_SLIDERS">';
echo '<summary  id="w_a_0_0_SUMMARY_SLIDERS">';
echo '';
echo '
<svg id="w_a_0_0_SLIDERS_SVG" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
</svg>
';
echo '';
echo '</summary>';
echo '';
echo '<article style="width:auto; text-align:center;">';
    echo '<div id="w_a_0_0_area_immissione_testo__RD"></div> <!-- w_a_0_0_area_immissione_testo__RD -->';
    echo '<script>w_a_0_0_AppRD("w_a_0_0_area_immissione_testo__", "w_a_0_0_area_immissione_testo__RD","w_a_0_0_CONTENUTO_DENCRIPTED")</script>';
echo '';
echo '</article>';
echo '</details>';

echo '</section>';
echo '';












/*
echo '';
echo '<details  id="w_a_0_0_DETTAGLI_SLIDERS" class="ui segment">';
echo '<summary  id="w_a_0_0_SUMMARY_SLIDERS">';
echo '';
echo '
<svg id="w_a_0_0_SLIDERS_SVG" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
</svg>
';
echo '';
echo '</summary>';
echo '';
echo '<article class="ui segment" style="width:auto; text-align:center;">';
    echo '<div id="w_a_0_0_area_immissione_testo__RD"></div> <!-- w_a_0_0_area_immissione_testo__RD -->';
    echo '<script>w_a_0_0_AppRD("w_a_0_0_area_immissione_testo__", "w_a_0_0_area_immissione_testo__RD","w_a_0_0_CONTENUTO_DENCRIPTED")</script>';
echo '';
echo '</article>';
echo '</details>';

*/

echo '<!-- gli sliders rolling dots fin -->';






?>
