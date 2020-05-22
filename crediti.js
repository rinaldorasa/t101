
document.getElementById("crediti").innerHTML=

' '+

' <section style="margin:0 auto; '+
' width:26rem; border:solid 0.1rem orange;'+
' border-radius:0.4rem; opacity:0.4; ">	'+					


'<style>'+
'div.aforall{background-color:rgba(87,72,53,0.0);'+
'background-color:rgba(26,26,26,0.26);'+
'border-color:transparent;'+
'color:rgba(2,2,2,0.5);;text-align:left;padding:0.2em;font-size:0.8em; overflow:auto !important;}'+
'a.forall{margin-left:0.4em;margin-right:0.4em;'+
'font-size:1.2em;font-family:monospace;'+
'}'+
'span{overflow:auto !important;}'+
'</style>'+
'<div class="aforall">'+

'Altervista '+

'<span><a class="forall"  href="http://edoraandiamo.altervista.org/index.html">index</a></span>'+

'<span><a class="forall"  href="http://rinaldorasa.altervista.org/">1</a></span>'+

'<span><a class="forall"  href="http://rasarinaldo.altervista.org/">2</a></span>'+


'<span><a class="forall"  href="http://beatsupernovarasa.altervista.org/">3</a></span>'+


'<span><a class="forall"  href="http://veneziamestremarghera.altervista.org/">4</a></span>'+


'<span><a class="forall"  href="http://mestreveneziamarghera.altervista.org/">5</a></span>'+


'<span><a class="forall"  href="http://margheraveneziamestre.altervista.org/">6</a></span>'+


'<span><a class="forall"  href="http://venexia.altervista.org/">7</a></span>'+


'<span><a class="forall"  href="http://venexiadue.altervista.org/">8</a></span>'+


'<span><a class="forall"  href="http://noteapiedipagina.altervista.org/">9</a></span>'+


'<span><a class="forall"  href="http://venexiatre.altervista.org/">10</a></span>'+


'<span><a class="forall"  href="http://venexiaiv.altervista.org/">11</a></span>'+


'<span><a class="forall"  href="http://veneziav.altervista.org/">12</a></span>'+


'<span><a class="forall"  href="http://veneziavi.altervista.org/">13</a></span>'+


'<span><a class="forall"  href="http://odlanir.altervista.org/">14</a></span>'+


'</div>'+


'<div id="orarioDHMS" class="aforall"></div>'+


'<div style="text-align:right;">'+
' <span> <a class="forall"  href="https://validator.w3.org/" '+
' style="font-size:small; font-variant:small-caps;'+
' font-family:sans-serif;'+
'">'+
' '+

'Markup Validation Service</a> </span>'+
'</div>'+



' <div id="creek"'+
'        style="margin-top:2rem; '+
'        border-bottom:solid 0.2em rgba(255,100,0,1);">'+

' <span>'+

'   <a href="'+
'http://venexiatre.altervista.org/WORKOU/OGGI/20191119/20191119f_1-CREEK.html"'+
	
'        style="background-color:rgba(255,100,0, 0.9) !important;'+
'        color:black !important;'+
'        font-size:1.5em; font-variant:small-caps;'+
'        font-weight:bold;'+
'        font-family:sans-serif;'+
'        cursor:pointer;">'+

		
'		<i class="paper plane outline icon" '+
'		style="font-size:0.8em;"></i>'+
		
'		Creek'+
'   </a>'+
' </span>'+



'  <span style="font-size:small;font-style:italic;">'+
'    <span style="color:gray;">'+


'        <span '+
'         style="'+
'         background-color:black;'+
'         color:rgba(255,100,0,0.9);'+
'         font-size:small; '+
'         font-style:normal;'+
'         font-weight:bold;'+
'         ">'+
'         coding'+
'        </span> '+

'                <span>by</span>'+


'    </span>'+ 


'        italian underground software distillery'+
'  </span>'+
        
        
'        <a href="https://twitter.com/odlanir"'+
'        style="border:transparent;float:right;'+
'        visibility:hidden;'+
'"><span>'+
'        <i class="twitter icon"></i></span>'+
'        </a>'+
' </div>'+

' </section>'+

''
;

		var orario = setInterval(intervalloHMS, 1000);
		function intervalloHMS() 
		{
  	    var d = new Date();
	    document.getElementById("orarioDHMS").innerHTML = d;
	     }
	
	
