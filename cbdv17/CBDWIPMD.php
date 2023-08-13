<!doctype html>
<html id="HTML__" lang="it">


<head>
<meta charset="utf-8">
<meta name="generator" content="AlterVista - Editor HTML">

<title>

#++#

CBDWIPMD_23805_0000a PRIMO MOTORE !!

</title>

<link rel="icon" type="image/png" href="https://it.altervista.org/images/favicon/favicon-16x16.png" sizes="16x16"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

<!-- 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
-->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<style>

:root {
  --red-v15: #E9172E;
  --green-v15: #BBE3C3;
  --blue-v15: #5151A2;
  --orange-v15: #F76717;
  --yellow-v15: #F8FEAF;
  
  --indigo-v15: #B51FFC;
  
  
}


body{background-color:var(--green-v15); font-size:initial;font-family:monospace;}

</style>

<style>
button{
margin-top:2.75rem;
background-color:var(--green-v15); color:var(--blue-v15); 
font-size:5.25rem;
border:solid 0.15rem var(--red-v15);
}
</style>


</head>

<body style="border:solid 0.15rem var(--indigo-v15); border-radius: 1.5%;">

<!--


CBDwipmd_.php

CBDwipdesk_.php

CBDwipmobi_.php


-->


<section style="text-align:center;">

<article>
<button style="width:100%" onclick="DESK()">DESK<i class="bi bi-pc-display-horizontal"></i></button>
<button style="width:100%" onclick="MOBI()">MOBI<i class="bi bi-tablet"></i></button>

</article>

<article id="incremento"  style="text-align:left;"></article>


<article style="font-size:75%;">CBDWIPMD_23805_0000a</article>

</section>


<script>
function DESK(){

document.location.replace("CBDwipdesk_.php");

/*
function Richiedo_File_V15(){
File_V15__="PhpCBDUnoDueV15_wip.txt";

Richiedo_V15__ = new XMLHttpRequest();

Richiedo_V15__.open("GET",File_V15__,false);
Richiedo_V15__.onreadystatechange = function(){
Trovato_V15__ = Richiedo_V15__.responseText;

alert(Trovato_V15__);


} ; Richiedo_V15__.send();

}; Richiedo_File_V15();
*/

// document.location.replace("DESK.php");


// alert("DESK()");

}

function MOBI(){

document.location.replace("CBDwipmobi_.php");

//alert("MOBI()");
}

setTimeout(MOBI, 6000);

var elem = document.getElementById("incremento");
 var numero = 0;
 var X="<span style='background-color:var(--orange-v15);color:var(--orange-v15); font-size:2.75rem; font-family:monospace;'>&nbsp;&nbsp;&nbsp;</span>";
 var Y="";
 var intervallo = setInterval(contatore, 1000);
 function contatore() {
 numero=numero+1;
 Y=Y+X;
 elem.innerHTML = Y+"<span style='color:var(--indigo-v15); font-size:2.75rem;'>"+ (6-numero)+"</span>";
 
 if (numero==5 || numero>5 ) {
 
 //alert(numero);
 clearInterval(contatore);
 
 }
 }
 
 
 

</script>





</body>
</html>



