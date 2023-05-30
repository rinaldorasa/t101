<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title> ROLLING_DOT_APPJS</title>
<link rel="icon" type="image/png" href="https://it.altervista.org/images/favicon/favicon-16x16.png" sizes="16x16">  
  
  
  
  <!-- avid3820725v026a586v026a1861311_rolling_dot__202305061945a -->  
  
<script src="AppScelta.js?avid3820725v026a586v026a1861311_rolling_dot__202305061945a"></script>

  
  
</head>
<body>

<!-- connessione ini -->
<section id="TEST">

    <ul>
    <li style="display:none"><div id="INPUT_INSERITO">Inserire una scelta.</div></li>
    <li>
    <div id="VISUALIZZA_TESTO"> <style> @keyframes spin{ 0%{transform:rotate(0deg);} 100% {transform:rotate(360deg);}} </style> <div style=" width:48px;height:48px; width:2rem;height:2rem; border:solid 4px red; border:solid 0.25rem red; border:solid 0.25rem red; border:solid 0.25rem red; border-top:solid 4px black; border-top:solid 0.25rem transparent; background-color:transparent; border-radius:50%; animation: spin 1.5s linear infinite;"> </div> </div>
    </li>
    
    </ul>

    <article>
   Fine documento.
    </article>
 
  
</section>
<!-- connessione fin -->




<div id="APPLICAZIONE_">?APPLICAZIONE_</div>

<div id="NOSIHEADER_1683356463151" style="text-align:center;">?NOSIHEADER</div>
<div style="text-align:center;">

<button id="NOHEADER_1683356463151" onclick="NoHeader()" style="color:red;opacity:0.75;">
-
</button>

<span style="font-size:0.75rem;font-family:monospace;">
fine avid3820725v026a586v026a1861311_rolling_dot__202305061945a
</span>

<button id="SIHEADER_1683356463151" onclick="SiHeader()" style="color:green;opacity:0.75;">
+
</button>

</div>



<!-- Pannello di controllo ini -->
	<script src="PannelloDiControllo.js?avid3820725v026a586v026a1861311_rolling_dot__202305061945a"></script> 
	<script src="LowBig.js?avid3820725v026a586v026a1861311_rolling_dot__202305061945a"></script>
	
	<div id="HEADER_1683304628537"></div>
	<script>PannelloDiControllo("HEADER_1683304628537");</script>

<!-- Pannello di controllo fin -->


<!-- Rolling dot ini -->
	<script src="RollingDot.js?avid3820725v026a586v026a1861311_rolling_dot__202305061945a"></script>
	<script>
	RollingDot("TEST","APPLICAZIONE_");
	</script>

<!-- Rolling dot fin -->








  <script>
  function NoHeader() {
  document.querySelector("#HEADER").style.display="none";
  }
  function SiHeader() {
  document.querySelector("#HEADER").style.display="block";  
  
  var Bottom = document.getElementById("fine").offsetTop; 
  window.scrollTo(0, Bottom);
  }


	let DESKTOP_CHECK_1683356463151;
	if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
	{ DESKTOP_CHECK_1683356463151 = 0 ; } else { DESKTOP_CHECK_1683356463151 = 1 ; }
	
	if(DESKTOP_CHECK_1683356463151===0){
	document.getElementById("NOSIHEADER_1683356463151").innerHTML=
	`
	<style>
	#NOHEADER_1683356463151, #SIHEADER_1683356463151 {font-size:5rem;}
	</style>
	`;
	}
	else
	{
	document.getElementById("NOSIHEADER_1683356463151").innerHTML=
	`
	<style>

	</style>
	`;
	}
 
  </script>
  


 
<div id="fine" style="font-size:0.75rem;font-family:monospace;text-align:center;border-top:solid 0.05rem maroon;border-bottom:solid 0.05rem maroon;">
</div>

</body>
</html>






