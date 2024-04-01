

<!doctype html>
<html>
<title>
•
☆
×
</title>
<link href="https://fonts.googleapis.com/css2?family=PT+Mono:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"> <link href="https://fonts.googleapis.com/css2?family=Rasa:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<style>  
 html * {font-size:auto; font-family:"PT Mono", monospace;}
 a{background-color:green; color:white; border:solid 0.15rem white;} 
 a:hover{background-color:white; color:green; font-size:125%; font-weight:800;}
 </style> 
<header style="
background-color:rgba(0,255,0,0.125); 
color:rgba(0,0,255,1); 
font-variant:small-caps; text-align:center;
">



backup13 vers.2024_03_22_1945a

<blockquote id="NAVIGAZIONE_PAGINA_BACKUP13" style="position:fixed; top:0rem; right:0rem; background-color:green; color:orange; border:solid 0.15rem white; border-radius:0.50rem;">
<a href="#" style="background-color:rgba(0,255,0,0.5); color:white; ">/\</a><br>
<a href="#fine"  style="background-color:rgba(0,255,0,0.5); color:white; ">\/</a><br>
<button onclick="ReSTART()" class="ui basic button">R</button><br>
<script>
function ReSTART(){
document.location.replace('backup13.php'); 
};
</script>
<br>
<button onclick="ReSTARThttps()" class="ui basic button">H</button>
<script>
function ReSTARThttps(){
document.location.replace('https://www.rinaldo-rasa.it/funicoty13/backup13.php'); 
};
</script>
<hr style="color:white;">
<a href="index.html" class="ui button" style="background-color:green; border:none;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
</svg></a><br>

</blockquote>

</header>
<hr>



<?php 

//
// Attenzione:
// origine e destinazione
// sono cartelle e DEVONO
// essere presenti
//


function COPIA($origine, $destinazione){

	echo '
	<style> 
	i, p{font-family:monospace; display:inline-block;} 
	p{margin-left:0.5rem;}
	
	i{background-color:teal; color:white;}
	</style>';
	
	echo '<p style="background-color:yellow; font-weight:700;">'. $origine .'</p>';
	echo '<p style="background-color:yellow; font-weight:700;">'. $destinazione .'</p>';

	if(is_Dir($destinazione)){ echo '<i>'.$destinazione.' esiste</i>';}
	else{'<i>'.$destinazione.' non esiste.</i>'; mkdir($destinazione);};

	$ListaFiles = scandir($origine );
	$ContaFiles = count($ListaFiles);
	
	
	
	
	
	foreach($ListaFiles as $file)
	{

	if (copy($origine . $file, $destinazione . $file)) {

		echo '<p style="background-color:green; color:white;">File copiato correttamente.</p>';  

	}
	else
	{
		echo '<p style="background-color:red; color:white;">Errore durante la copia del file.</p>';
		
	};


	  
  };

  };



$ToCartellaBackup = 'BACKUP14a';
$ToCartellaBackup = 'BACKUP_FIRST';

COPIA('./', '../'.$ToCartellaBackup .'/');


COPIA('./assets/', '../'.$ToCartellaBackup .'/assets/');
COPIA('./assets/clock/', '../'.$ToCartellaBackup .'/assets/clock/');


COPIA('./composizione10/', '../'.$ToCartellaBackup .'/composizione10/');


COPIA('./dlb/'  , '../'.$ToCartellaBackup .'/dlb/'  );
COPIA('./dlb/a/', '../'.$ToCartellaBackup .'/dlb/a/');
COPIA('./dlb/b/', '../'.$ToCartellaBackup .'/dlb/b/');
COPIA('./dlb/c/', '../'.$ToCartellaBackup .'/dlb/c/');


COPIA('./w_a_0_0_cifrato/'  , '../'.$ToCartellaBackup .'/w_a_0_0_cifrato/'  );


COPIA('./w_a_0_0_commenti/'  , '../'.$ToCartellaBackup .'/w_a_0_0_commenti/'  );


COPIA('./w_a_0_0_decifra/'  , '../'.$ToCartellaBackup .'/w_a_0_0_decifra/'  );


COPIA('./w_a_0_0_noyek/'  , '../'.$ToCartellaBackup .'/w_a_0_0_noyek/'  );
COPIA('./w_a_0_0_noyek/w_a_0_0_platform/'  , '../'.$ToCartellaBackup .'/w_a_0_0_noyek/w_a_0_0_platform/'  );
COPIA('./w_a_0_0_noyek/w_a_0_0_savecif/'  , '../'.$ToCartellaBackup .'/w_a_0_0_noyek/w_a_0_0_savecif/'  );
COPIA('./w_a_0_0_noyek/w_a_0_0_yek/'  , '../'.$ToCartellaBackup .'/w_a_0_0_noyek/w_a_0_0_yek/'  );


COPIA('./wa10ins/'  , '../'.$ToCartellaBackup .'/wa10ins/'  );

COPIA('./magazen/'  , '../'.$ToCartellaBackup .'/magazen/'  );






?>













<hr style="opacity:0.5;">
<!-- svelte clock -->
<!-- <details><summary></summary> -->

<section class="ui segment" style="position:static!important; display:inline-block; border:solid 0.00rem transparent;">

<section style="border:solid 0.00rem fuchsia;">
<!--
<blockquote style="font-family:monospace; border:solid 0.00rem blue; opacity:0.25;">

<a href="https://svelte.dev/examples/clock">examples svelte clock</a> 
 <br>
 adattato by 
 <br>
 rinaldo rasa (c) 2024

</blockquote>

-->
<br>
<section style="width:auto; height:auto; border:solid 0.00rem aqua;">

<article style="position:static; top:0rem; left:0rem; width:25%; width:93.5%; height:25%; height:93.5%; text-align:center; border:dotted 0.00rem red;">
<!--
    <script type="module" crossorigin src="./assets00/index-Cn0A_onJ.js?98765432"></script>
    <link rel="stylesheet" crossorigin href="./assets00/index-DpF8Xlag.css?98765432">
-->

    <script type="module" crossorigin src="./assets/clock/index-Cn0A_onJ.js?987654321"></script>
    <link rel="stylesheet" crossorigin href="./assets/clock/index-DpF8Xlag.css?987654321">

    <a href="https://svelte.dev/examples/clock">
        <div id="app" style="margin-left:auto;"></div>
    </a>
   
</article>


<blockquote style="font-family:monospace; border:solid 0.00rem blue; opacity:0.00;">

<a href="https://svelte.dev/examples/clock">examples svelte clock</a> 
 <br>
 adattato by 
 <br>
 rinaldo rasa (c) 2024

</blockquote>


</section>

</section>

<!-- </details> --> <!-- svelte clock -->
<?php /* echo time(); */  ?>









<script>
  let PRECE_SCROLL=0; // posizione numero precedente
  let ADESS_SCROLL;   // posizione attuale
  // definizione di variabili
  // interessate per controllo
  // se esiste un movimento
  // della pagina

function SCROLL(){ 
  currentScrollY = window.scrollY; // rileva pos attuale
  ADESS_SCROLL= currentScrollY;    // in alias 

    // il condizionale esegue un
    // confronto
    // se uguale vuol dire NO scroll
    // se differente SI scroll pagina
    if(ADESS_SCROLL===PRECE_SCROLL){
    document.querySelector("#NAVIGAZIONE_PAGINA_BACKUP13").style.visibility="visible";
    }else
    {  
    document.querySelector("#NAVIGAZIONE_PAGINA_BACKUP13").style.visibility="hidden";
    };

    PRECE_SCROLL=currentScrollY; // memorizza valore attuale

  }; // chiusura della funzione

SCROLL_SETINT=setInterval(SCROLL, 1000);

//                         /\
//                         ||
//                         ||
// funzione che sottopone sotto controllo
// ogni 1sec la posizione dello scroll
// di pagina
//


  function STOP_SCROLL(){
  alert("clearInterval");
  clearInterval( SCROLL_SETINT );
  };
//
// attivato da apposito button onclick
//


</script>





<div style="font-variant:small-caps!important;">backup13 vers.2024_03_22_1945a</div>

<div id="fine"></div>
</html>

