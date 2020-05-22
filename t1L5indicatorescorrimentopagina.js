document.getElementById('L5indicatorescorrimentopagina').innerHTML=
' '+

'  <cite class="indicatore-container">  '+  
'  <p class="indicatore-bar" id="indicatore">  '+  
'  </p>  '+  
'  </cite>   '+   


'<style>  '+ 

'.indicatore-container {   '+
'  position:fixed;top:0;left:0; '+
'  width: 100%;   '+ 
'  height: 0.21em;   '+ 
'  background: burlywood;   '+ 
'}   '+ 

'.indicatore-bar {   '+ 
'  height: 0.21em;   '+ 
'  background: maroon;   '+ 
'  width: 0%;   '+ 
'}   '+ 

'</style>   '+ 

' '
;

window.onscroll = function() {indicatore()};

function indicatore() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("indicatore").style.width = scrolled + "%";
}
