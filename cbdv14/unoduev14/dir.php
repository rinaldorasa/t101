<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title></title>
<meta name="description" content="">
<meta name="author" content="Rinaldo Rasa">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style>

	@media only screen and (min-width: 768px) 
	{ 
	section { background-color: transparent; }
 	} 
	
	@media only screen and (max-width: 768px) 
	{ 
	main 
	{ background-color: rgba(178, 34, 34, 1); 
		background-color: rgba(70, 5, 10, 1);
	} 
	
	section 
	{ background-color: rgba(178, 34, 34, 1); 
		background-color: rgba(70, 5, 10, 1);
	} 
	
	} 
	
	body {  padding:0px; margin:0px; background-color: rgba(100, 30, 30, 1); color:rgba(220,220,220,1); font-size:14px; font-family:monospace;  }

main { width:672px; margin-top:28px; margin-bottom:28px; margin-left:0px; margin-right:0px; padding:0px; }

main { border-left:solid 10px rgba(0,0,255,0.1);  border-right:solid 10px rgba(0,0,255,0.1); }
</style>

</head>



<body>

<center/><main style="background-color:black;color:silver;">


<svg height="30" width="600">
  <text x="0" y="15" fill="gray" transform="rotate(0 20,40)">~php~</text>

</svg>


<style>
@keyframes spin{0%{transform:rotate(0deg);}100%{transform:rotate(360deg);}}
</style>

<div style='width:0px;height:0px;border:solid  12px rgba(50,160,120,1.0);border-top:solid 12px rgba(80,50,160,1.0);border-radius:50%;animation: spin 1.5s linear infinite;'></div>

<div id="Percento"></div>
<script>
var xi=0;if (xi==0) {xi=1;var elem=document.getElementById("Percento");var percento=0; var tic=setInterval(stacco,30.000);function stacco(){if(percento>=100){clearInterval(tic);xi=0;}else{percento++; elem.innerHTML="<div style='width:144px;height:24px;margin:0px;padding:0px;background-color:rgba(0,0,0,1.0);color:rgba(192,192,192,1.0);font-size:16px;font-family:monospace;'>&nbsp;"+percento+'%'+'&nbsp;</div>'}}}
</script>


<p style="text-align:center"><u>scandir directory corrente</u></p>




<?php
$dir    = './';
$files1 = scandir($dir);
// $files2 = scandir($dir, 1);

print_r($files1);

// print_r($files2);
?>





</main>


<div id="senzastilemaconclasse" style="text-align:left;"></div>
<script>
document.getElementById('senzastilemaconclasse').innerHTML="<div style='width:144px;margin-top:6px; margin-bottom:6px;border:solid 1px rgba(190,70,10,0.4);border-radius:4px'><p style='text-align:right;'><p style='font-size:10px; text-align: center;color:gray;'>Senza stile  <i>ma con classe</i></p></div>"
</script>

</body>
</html>