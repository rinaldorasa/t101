<!doctype html>
<html lang="it">

<head>

<meta http-equiv="content-type"
content="text/html; charset=UTF-8">
<meta name="viewport"
content="width=device-width, initial-scale=1,
shrink-to-fit=no">
<meta name="generator"
content="AlterVista - Editor HTML">
<title> </title>


<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">



<script src="https://code.jquery.com/jquery-3.1.1.min.js"
integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
crossorigin="anonymous"> </script>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js">
</script>

<style>
body{
background-color:oldlace;
}
</style>


<style>


body, main, section, article, div, p,
span, header, footer { font-size:1em; overflow:visible !important; }

main{ 
margin-top:4.5em; margin-bottom:0.0em;
margin-left:3em; margin-right:3em;
border-top:solid 0em maroon;
border-bottom:solid 0em maroon;
border-left:solid 0.2em maroon !important;
border-right:solid 0.2em maroon !important;
padding:0.4em;
background-color:rgba(222,184,135,0.25); /* burlywood */
color:black; 
}


section{
margin-left:4em !important;margin-right:4em !important;
margin-top:0em; margin-bottom:0em;
font-family:monospace;}

header, footer{ margin-top:4.5em; }

img{ width:100%;}


div.testo{
text-align:left; max-height:9em;
overflow:auto !important; }

div.immagine{
text-align:left; max-height:9em;
overflow:auto !important; }

div.nerobianco{background-color:black; color:white;}



.centro{ text-align:center !important;
margin:auto !important; padding:0 !important; }

.sfondo{
background-image:url(https://ed-ora-andiamo.com/immagini/carta01x.gif);
background-repeat: repeat;
background-attachment: fixed;
background-color:rgba(253,245,230,0.5); /* old lace */
}

.bordofooter{border:solid 1px rgba(0,0,0,0);}




/*  debugging  */
.bordo{border:solid 0px lime !important;}

/*  
.bordo000{border:solid 2px black !important;}

.bordo111{border:solid 2px red !important;}
.bordo121{border:solid 2px orange !important;}
.bordo131{border:solid 2px green !important;}
  */

/*
 .bordo4{font-size:1.0em;
 border:solid 0.02em;
 font-weight:normal !important;
 gray;text-align:left;
 padding:0.4em;
 overflow:auto !important;}
 */

p#code{background-color:burlywood;}
p#effe{background-color:orange;}



</style>



<style>

section#sedicix1{display:none !important;}
section#ottox2{display:none !important;}
section#quattrox4{display:none !important;}


 .bordo4{font-size:1.0em;
 border:solid 0.02em;
 font-weight:normal !important;
 gray;text-align:left;
 padding:0.4em;
 overflow:auto !important;}
</style>

</head>

<body onload="AttendereLoading()"  
class="sfondo" style="background-color:gray;">


<section class="ui grid container centro bordo2">
	<article class="sixteen wide left aligned column bordo3">
		<div class="bordo4" style="visibility:hidden;">
		interlinea
		</div>
	</article>	
</section>


<main class="bordo1" style="">


<section id="indice00" class="ui grid container centro bordo2"
style="position:static; left:3em;top:4em;">
	<article class="sixteen wide left aligned column bordo3">
		<div class="nerobianco bordo4">
		<p style="display:none;">
		<i class=""></i>
		<span style="color:lightgrey;"></span><br>
		</p>
		<p style="display:none;"></p>
				
		<span style="visibility:show;">
		<a href="#"
		 style="position:fixed; right:0;top:30%;
		 border:solid 0.02em black;
		 border-radius:0.2em;
		 background-color:maroon;">
		<i class="chevron circle up  icon">
		</i>
		</a>
		<a href="#fine"
		 style="position:fixed; right:0;top:35%;
		 border:solid 0.02em black;
		 border-radius:0.2em;
		 background-color:maroon;">
		<i class="chevron circle down icon">
		</i>
		</a>
		
		</span>
		
		<p>
			
		<style>
		.cursore {
		  background: lime;
		  line-height: 17px;
		  margin-left: 3px;
		  -webkit-animation: blink 0.8s infinite;
		  width: 7px;
		  height: 15px;
		}
		@-webkit-keyframes blink {
		  0% {background: #222}
		  50% {background: lime}
		  100% {background: #222}
		}
		</style>
		<table>
		<tr>
		<td>
		<span style="">
		<div  style="margin:0;padding:0;" class="cursore"></div>
		</span><td><i class="map icon"></i></td>
		</li></ul>
		</td>
		<td>
		</td></tr>
		</table>
		
		



<section id="directory" class="ui grid container centro bordo2">
	<article class="sixteen wide left aligned column bordo3">
		<div class="bordo4"
		style="
		background-color:black;
		color:white;
		">
		<p>
		<i class="folder outline icon"></i> 
		<span style="font-size:1.5em;">Directory</span>
		</p>
		
		<?php
		$dir    = './';
		$files1 = scandir($dir);
		// $files2 = scandir($dir, 1);

		print_r($files1);

		// print_r($files2);
		?>
		
		</div>
	</article>
</section>	

</main> 

<?php 
  
// Set the current working directory 
$directory = getcwd()."/"; 
  
// Initialize filecount variavle 
$filecount = 0; 
  
$files2 = glob( $directory ."*" ); 
  
if( $files2 ) { 
    $filecount = count($files2); 
} 
  
echo $filecount . " files "; 
  
?> 



<blockquote style="margin-top:2rem; 
padding:0;
border:solid 0.2rem rgba(250,242,221,0);  text-align:center;">

 <div id="crediti" 
 style=" text-align:center !important;">
 <span style="color:green; font-size:large;"></span>
 </div>
 
 
 <script type="application/javascript" src="./t101/crediti.js"></script> 
 
</blockquote> 

 
  
<div id="fine"></div>  
</body>



</html>

<!--
< ?php
$actual_link = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";


$oggi_est = date("l") . " ";
$oggi_est = $oggi_est . date("Y/m/d");
$oggi_est_time = date("h:i:sa");

$fp = fopen('/membri/edoraandiamo/text.txt', 'w');
fwrite($fp, $actual_link. " " .$oggi_est. " ". $oggi_est_time);
fclose($fp);

$myfile = fopen("/membri/edoraandiamo/logs.txt", "a") or die("Unable to open file!");
// $actual_link = "cronologia";
fwrite($myfile, "\n". $actual_link. " " .$oggi_est. " ". $oggi_est_time);
fclose($myfile);

? >


-->

