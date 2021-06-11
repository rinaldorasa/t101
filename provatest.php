<?php session_start(); 
if(!isset($_SESSION['UserData']['Username'])){
header("location:sign-in.php");
exit;
}
?>
<!doctype html>

<html>
<head>
<meta charset="utf-8">
<meta name="generator" content="AlterVista - Editor HTML"/>


<title> ^^ PROVA TEST</title>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<style>
html * {background-color:oldlace;font-size:1.15rem;font-family:"PT Mono",monospace;} 
html{margin-bottom:3rem;border:solid 0rem red;}
body{margin-bottom:3rem;border:solid 0rem orange;}
main{margin-bottom:3rem;border:solid 0rem indigo;}
table{table-layout:fixed;width:100%;}
table, td{font-size:1.5rem;}
</style>

<script>
var anno = new Date();
var anni= anno.getFullYear(); 
var annis=anni.toString();

var mese = new Date();
var mesi= mese.getMonth(); /* 0 11 */
mesi=mesi+1; /* 1 12 */
var mesis=mesi.toString();
var lmesis= mesis.length; 
if (lmesis===1){ mesis="0"+mesis; } 


var giorno = new Date();
var giorni= giorno.getDate();
var giornis=giorni.toString();
var lgiornis= giornis.length; 
if (lgiornis===1){ giornis="0"+giornis; } 

var ora = new Date();
var ore = ora.getHours();
var ores=ore.toString();
var lores= ores.length; 
if (lores===1){ ores="0"+ores; }

var minuto = new Date();
var minuti = minuto.getMinutes();
var minutis=minuti.toString();
var lminutis= minutis.length; 
if (lminutis===1){ minutis="0"+minutis; }

var secondo = new Date();
var secondi = secondo.getSeconds(); 
var secondis=secondi.toString();
var lsecondis= secondis.length; 
if (lsecondis===1){ secondis="0"+secondis; }


var oreminuseco=annis+mesis+giornis+ores+minutis+secondis;

var inizio=oreminuseco;

let incrementotimer=0; /* minuti */

let fermasessione=1; /* durata in minuti */

let chiudisessione=5; /* durata in minuti */


</script>
</head>
<body class="bg-dark">
<!--<body onLoad="JavaScript:checkRefresh();">-->


<script>
"use strict";
document.addEventListener("visibilitychange", event => {
  if (document.visibilityState == "visible") {
  } else {

 setTimeout( function(){window.location.href = "log-out.php"},10);

  }
})
</script>
<script>
/*
var visibilityChange = (function (window) {
    var inView = false;
    return function (fn) {
        window.onfocus = window.onblur = window.onpageshow = window.onpagehide = function (e) {
            if ({focus:1, pageshow:1}[e.type]) {
                if (inView) return;
                fn("visible");
                inView = true;
            } else if (inView) {
                fn("hidden");
                inView = false;
  setTimeout( function(){window.location.href = "log-out.php"},10);		
				
            }
        };
    };
}(this));

visibilityChange(function (state) {
  
});
*/

</script>





<script>if (sessionStorage.getItem('reloaded') != null) {
// 
 alert('page was reloaded');
 setTimeout( function(){window.location.href = "log-out.php"},10);
} else {
// 
 alert('page was not reloaded');
// setTimeout( function(){window.location.href = "log-out.php"},10);
}

sessionStorage.setItem('reloaded', 'yes'); // could be anything
</script>



<section class="nascondimi" style="position:fixed;top:5.25rem;right:0;text-align:center;" class="bg-light rounded-0">
<br>
<a href="file.php" style="text-decoration: none;text-align:center;" ><span style="font-size:1.75rem;background-color:white;text-align:center;">&#8617;</span></a>
<br><br>
<a href="#" style="text-decoration: none;" ><span style="font-size:1.75rem;background-color:white;">&#65087;</span></a>
<br><br>
<a href="#fine" style="text-decoration: none;" ><span style="font-size:1.75rem;background-color:white;">&#65088;</span></a>
</section>

<?php 
echo "<div style='height:2rem;background-color:orange;padding:0.5rem;opacity:0.0;'></div>";
?>



<main class="mx-5" style="padding-bottom:2.5rem;">
   <table class="table table-striped" style="margin-top:3.5rem;margin-bottom:3.5rem;margin-left:0rem;margin-right:0rem;padding:0.25rem;border:solid 0rem indigo;">
<!-- inserimento dati ini -->
   
      <tr><td></td><td></td><td></td><td></td></tr>
   
<!-- inserimento dati fin -->
   </table>
</main>



<!-- TIMER scadenza -->
<!-- javascript -->
<div class="nascondimi" id="unaltraprova"><span style="opacity:0.5;"><span style="visibility:hidden;">&nbsp;bug unaltraprova</span></span></div>

<div class="nascondimi" id="termine"><span style="opacity:0.5;"><span style="visibility:hidden;">&nbsp;bug termine</span></span></div>


<script>
"use strict";

let tempo=setInterval(unaltraprova,1000);

function unaltraprova(){

let inquestomomento=Date();
/* */

var milli=Date.now();

var anno = new Date();
var anni= anno.getFullYear(); 
var annis=anni.toString();

var mese = new Date();
var mesi= mese.getMonth(); /* 0 11 */
mesi=mesi+1; /* 1 12 */
var mesis=mesi.toString();
var lmesis= mesis.length; 
if (lmesis===1){ mesis="0"+mesis; } 


var giorno = new Date();
var giorni= giorno.getDate();
var giornis=giorni.toString();
var lgiornis= giornis.length; 
if (lgiornis===1){ giornis="0"+giornis; } 

var ora = new Date();
var ore = ora.getHours();
var ores=ore.toString();
var lores= ores.length; 
if (lores===1){ ores="0"+ores; }

var minuto = new Date();
var minuti = minuto.getMinutes();
var minutis=minuti.toString();
var lminutis= minutis.length; 
if (lminutis===1){ minutis="0"+minutis; }

var secondo = new Date();
var secondi = secondo.getSeconds(); 
var secondis=secondi.toString();
var lsecondis= secondis.length; 
if (lsecondis===1){ secondis="0"+secondis; }


var minuseco=annis+mesis+giornis+ores+minutis+secondis;

var minuseconum=parseInt(minuseco, 10);

var differenza=minuseconum-inizio;

if (secondi===0){differenza=differenza;}


/* effettivo timer in minuti datosi durata sessione */ 
/* minore di una ora non richiede correzione */
if (secondi===0){ incrementotimer=incrementotimer+1;}

/* chiude definitivamente */
if (incrementotimer===chiudisessione){setTimeout( function(){window.location.href = "log-out.php"},10);}
if (incrementotimer>chiudisessione){setTimeout( function(){window.location.href = "log-out.php"},10);}


/* avvertimento */
if (incrementotimer<fermasessione){
/* alert("SESSIONE TERMINATA!"); 

setTimeout( function(){window.location.href = "log-out.php"},10);
*/

/* */
document.getElementById("termine").innerHTML=
''+ '<style>'+ 'html {}'+ '</style>'+ ''+
'<div class="nascondimi" style="position:fixed;bottom:0;top:0;left:0;width:100%;height:2rem;background-color:gray;">'+
''+ ''+ '<a href="log-out.php">'+
''+ '<span style="background-color:green;color:white;">Log Out</span>'+ '</a>'+ 
''+ '<span style="background-color:orange;color:black;">'+ ''+ '</span>'+ 
''+ ''+ ''+ ''+ 
''+ ''+ ''+ ''+ 
'</div>'+
''+
'';

} 



if (incrementotimer===fermasessione){
/* alert("SESSIONE TERMINATA!"); 

setTimeout( function(){window.location.href = "sign-in.php"},10);
*/

/* */
document.getElementById("termine").innerHTML=
''+ '<style>'+ 'html {}'+ '</style>'+ ''+
'<div class="nascondimi" style="position:fixed;bottom:0;left:0;width:100%;height:2rem;background-color:gray;">'+
''+ ''+ '<a href="log-out.php">'+
''+ '<span style="background-color:green;color:white;">Log Out</span>'+ '</a>'+ 
''+ '<span style="background-color:orange;color:black;">'+ ''+ 
''+ ''+ ''+ ''+ 
''+ ''+ ''+ ''+ 
'</div>'+
''+
'';

} 

if (incrementotimer>fermasessione){
/* alert("SESSIONE TERMINATA!"); 

setTimeout( function(){window.location.href = "sign-in.php"},10);
*/

/* */
document.getElementById("termine").innerHTML=
''+ '<style>'+ 'html {}'+ '</style>'+ ''+
'<div class="nascondimi" style="position:fixed;bottom:0;top:0;left:0;width:100%;height:2rem;background-color:magenta;">'+
''+ ''+ '<a href="log-out.php">'+
''+ '<span style="background-color:green;color:white;">Log Out</span>'+ '</a>'+ 
''+ '<span style="background-color:magenta;color:white;">'+ 'superato il limite'+ '</span>'+ 
''+ '<span>'+milli +''+ '</span>'+ 
''+ ''+ ''+ ''+ 
'</div>'+
''+
'';

} 





document.getElementById("unaltraprova").innerHTML=
' '+
' <div style="display:none;"> '+
' '+
''+inquestomomento+'<br>'+
''+


''+minuseco+'-<br>'+ 
''+
''+

''+inizio+'= '+ 
''+ 

''+ 
'<span style="background-color:orange;">'+differenza+'</span>'+''+''+'<== indice contatore approssimato<br>'+
''+
''+milli+'<br>'+
''+
''+

''+''+'<br>'+incrementotimer+' '+'minuti'+''+'<br>'+''+
''+ giornis+ '<== giorno <br>'+
''+mesis+ '<== mese <br>'+
''+annis+ '<== anno <br>'+
''+
'</div>'+
''+
''+


'<?php echo "" ?>'+
''+
''+
''+

''+
''+
''+
''+
''+

'';


}



</script>



 <div class="bg-dark" style="position:fixed;top:0;right:0;padding:0;"> 
 <span onclick="nascondimi()" id="nascondimi" style="margin:0;padding:0;background-color:green;font-size:1.15rem;border-radius:0.25rem 0 0 0.25rem;opacity:0.5;">&nbsp;&nbsp;</span>
 <span onclick="vedimi()" id="vedimi" style="margin-left:-0.55rem;padding:0;background-color:red;font-size:1.15rem;border-radius: 0 0.25rem 0.25rem 0 ;opacity:0.5;">&nbsp;&nbsp;</span> 
 </div>
 
 
 
 <script>
 function nascondimi() {
 var xx, ii;
 xx = document.querySelectorAll(".nascondimi");
 for (ii = 0; ii < xx.length; ii++) {
 xx[ii].style.visibility = "visible";
 }
 }
 </script>




 <script>
 function vedimi() {
 var xx, ii;
 xx = document.querySelectorAll(".nascondimi");
 for (ii = 0; ii < xx.length; ii++) {
 xx[ii].style.visibility = "hidden";
 }
 }
 </script>






<style></style>
<div></div>
<script></script>

<div id="fine"></div>
</body>

</html>


