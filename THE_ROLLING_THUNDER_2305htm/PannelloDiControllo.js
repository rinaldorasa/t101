
function PannelloDiControllo(arg0){

let AdattamentoFontDispositivoInUso, DESKTOP_CHECK ;


document.getElementById(arg0).innerHTML=
`
<style>

input, button, div{font-size:1.5rem;font-family:monospace;}

#HEADER{
width:100%;
background-color:white;
border:solid 0.00rem lime;
overflow:auto;
opacity: 1.0 ;
}

</style>

<section id="HEADER" style="display:none;">


<article id="STOP_AND_GO" style="position:static;text-align:center;">

<button onclick="LOWEST()"  style="width:0.5rem;height:1.0rem;font-size:2.5rem;"></button>
<button onclick="NORMAL()"  style="width:0.5rem;height:1.5rem;font-size:2.5rem;"></button>
<button onclick="BIG0()"    style="width:0.5rem;height:2.0rem;font-size:2.5rem;"></button>  
<button onclick="BIG1()"    style="width:0.5rem;height:2.5rem;font-size:2.5rem;"></button>  
<button onclick="BIG2()"    style="width:0.5rem;height:3.0rem;font-size:2.5rem;"></button>  

<input type="text" placeholder="Testo.txt" id="INPUT_NOME_FILE" value="Testo.txt"  style="border-radius:0.5rem;">


<button id="GoWRAPPED" onclick="GoWRAPPED()" style="
background-color:green;color:green;
font-size:2.5rem;border-radius:0.50rem;opacity:0.25;">
&nbsp;
</button>

<button id="StopWRAPPED" onclick="StopWRAPPED()" style="
background-color:red;color:red;
font-size:2.5rem;border-radius:0.50rem;opacity:0.25;">
&nbsp;
</button>


<span id="TIMESTAMPA" style="font-family:monospace;"></span>

</article>
</section>

`;

// 
// 
// 
// 
// 
// adattamento per desktop
// 
// 
// 
// 
// 

//
// PER DESKTOP
//


if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
  { DESKTOP_CHECK = 0 ; } else { DESKTOP_CHECK = 1 ; }

if(DESKTOP_CHECK===0)
{
	// alert("Mobile")
	}else{
	//alert("Desktop")

AdattamentoFontDispositivoInUso = 1.00;

document.getElementById(arg0).innerHTML=
`
<style>

input, button, div{font-size:1.5rem;font-family:monospace;}

#HEADER{
width:100%;
background-color:white;
border:solid 0.00rem lime;
overflow:auto;
opacity: 1.0 ;
}

</style>

<section id="HEADER">


<article id="STOP_AND_GO" style="position:static;text-align:center;">


<input type="text" placeholder="Testo.txt" id="INPUT_NOME_FILE" value="Testo.txt"  style="font-size:`+AdattamentoFontDispositivoInUso+`rem;border-radius:0.5rem;">


<button id="GoWRAPPED" onclick="GoWRAPPED()" style="
background-color:green;color:green;
font-size:`+AdattamentoFontDispositivoInUso+`rem;border-radius:0.50rem;opacity:0.25;">
&nbsp;
</button>

<button id="StopWRAPPED" onclick="StopWRAPPED()" style="
background-color:red;color:red;
font-size:`+AdattamentoFontDispositivoInUso+`rem;border-radius:0.50rem;opacity:0.25;">
&nbsp;
</button>


<span id="TIMESTAMPA" style="font-size:`+AdattamentoFontDispositivoInUso+`rem;font-family:monospace;"></span>

</article>
</section>

`;




	

}



(function timestampa(){let timestampa=(new Date().getTime());document.getElementById("TIMESTAMPA").innerHTML=timestampa;})();


 
} ;


