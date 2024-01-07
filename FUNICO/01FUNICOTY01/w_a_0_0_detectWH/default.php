
<?php 




// ///////////////////////////////////////////
// detectWH
// ///////////////////////////////////////////
function detectWH(){

echo '<div style="font-family:monospace; text-align:center;">
<span id="result" style="font-size:100%;font-variant:small-caps;"></span>
<script>"use strict"; function displayWindowSize(){ var w = document.documentElement.clientWidth;var h = document.documentElement.clientHeight;var wFinestraWIDTH = document.documentElement.clientWidth;var hFinestraHEIGHT = document.documentElement.clientHeight;document.getElementById("result").innerHTML = " " + wFinestraWIDTH + "x" + hFinestraHEIGHT +" <span style=`font-size:medium;`>"+(wFinestraWIDTH/16)+"rem "+" x "+(hFinestraHEIGHT/16)+"rem </span>";}window.addEventListener("resize", displayWindowSize);displayWindowSize();+" "</script>

</div>
';

};
// 
detectWH();







?>


