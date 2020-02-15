document.getElementById('rr-loading').innerHTML=
''+


'<style>'+
' /* vers 20200213  */ '+
'.rr-bordoloading{ position:fixed;'+
'top:0px;'+'top:4em;'+'top:50%;'+
'left:0px;'+'left:50%;'+
'margin-left:-12em;'+
'margin-top:-1em; '+
' '+
'background-color:transparent;'+
' '+
' '+
'font-family:monospace;'+
'font-variant:small-caps;'+
'border:solid 0px orange; '+
'border-radius:4px; '+
'z-index:99; }'+

'.rr-loading-stile{ '+
' background-color:black;'+
' color:white; '+
' font-size:2.05em;  '+
' font-family:sans-serif; '+
' padding:0.5em;'+
' border-radius:4px;'+
' '+
'}'+

'.rr-lampeggio'+
'{ animation: blinker 2.5s linear infinite; }'+

'@keyframes blinker { 50% { opacity: 0; } }'+

'</style>'+

'<div id="rr-AttendereLoading"'+  
' class="rr-bordoloading" '+
' style="background-color:transparent;" '+
'  >'+

'<span style="background-color:transparent;">'+

''+
'</span>'+


'<span class="ui secondary loading  massive  button ">'+
' '+
'Loading'+
'</span>'+


'<span class="ui massive  secondary   button"'+
'> Loading...'+
'<span id="rr-percento">'+
'</span>'+

'</span>'+

'</div>'+

''


function AttendereLoading()
{ if(document.all) {
document.all["rr-AttendereLoading"].style.visibility="hidden"; }
else if (document.getElementById)
{
node=
document.getElementById("rr-AttendereLoading").
style.visibility="hidden"; } }



var percento=document.getElementById("rr-percento");
var contatore=1;
var intervallo=setInterval(
function() { percento.innerHTML=contatore+"%"; contatore++;
if (contatore===101) {clearInterval(intervallo);} } , 30000)
