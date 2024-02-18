<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/png" href="https://it.altervista.org/images/favicon/favicon-16x16.png" sizes="16x16">


<title>



%



LeggiCIF_240208_1645a

</title>

<link rel="stylesheet" href="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.css">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.js"></script>

<link rel="stylesheet" href="http://avid3820725.altervista.org/semantic/Semantic-UI-master/dist/semantic.min.css">

<script src="http://avid3820725.altervista.org/semantic/Semantic-UI-master/dist/semantic.min.js"></script>




<link href="https://fonts.googleapis.com/css2?family=PT+Mono:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rasa:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">


<style>

html * { font-family:'PT Mono', monospace; }
</style>

</head>
<body>

<section style="position:fixed; top:1.25rem; right:1.000rem; z-index:1000000">
<a href="#" class="ui mini button">/\</a>
<br>
<a href="#fine" class="ui mini button">\/</a>
</section>


<section style="width:75%; margin-left:8.75%; border:solid 0.15rem rgba(0,255,0,0.125);" class="ui placeholder segment">
<div class="ui two column very relaxed stackable grid">


    <div  style="border-right:dashed 0.15rem green;"  class="column">
      <form class="ui form" action="LeggiCIF.php"  method="POST">
			<div class="field">
				<label>Username</label>
				<div class="ui left icon input">
					<input id="UTENTE" name="UTENTE"type="password" placeholder="">
					<i class="user icon"></i>
				</div>
			</div>
		
			<div class="field">
				<label>Password</label>
				<div class="ui left icon input">
					<input id="PASSWORD" name="PASSWORD" type="password">
					<i class="lock icon"></i>
				</div>
			</div>
			<input class="ui blue submit button" type="submit" value="Login">  
		
      </form>
    </div>
	
    <div class="column">	
		<article class="ui center aligned segment">
		<a href="LeggiCIF.php" style="text-transform: uppercase;" class="ui red button">exit</a>
		</article>
		
		<article style="background-color:white; color:black;" class="ui center aligned segment">
		<div style="background-color:white;" ><i class="exclamation big red triangle icon"></i></div>
		<blockquote style="font-weight:600;">
		Se non sai esattamente cosa stai facendo fai click su <q style="background-color:white; color:black; text-transform: uppercase;">&nbsp;exit&nbsp;</q>.
		</blockquote>
		</article>
		<h5 style="color:olive;" class="ui center aligned segment">LeggiCIF_240208_1645a</h5>

	</div>


	
</div>
</section>




<?php 


$root = getcwd();
echo '<br>' . '<span class="ui label">Cartella attuale: </span>' . $root ;



include('./w_a_0_0_noyek/w_a_0_0_yek/w_a_0_0_stello.php');


$VAI=0;

$UTENTE_NOW = $_POST["UTENTE"];
$PASSWORD_NOW = $_POST["PASSWORD"];

$CONTROLLO_NOW = $_POST["CONTROLLO"];


$THE_BIG_CODE=1;


if( ($UTENTE_NOW===$UTENTE)  and ($PASSWORD_NOW===$PASSWORD) )
{
	echo '';
	
	$VAI=1;
	
}else{
	
	echo '';
	
	$VAI=0;
};


if($VAI===1){



echo '<meta charset="utf-8">';
echo '';

echo '<style></style>';

echo '<style>div, textarea{font-size:125%;}
textarea{padding-right:5rem; width:95%; height:75%; border:solid 0.5rem rgba(0,0,255,0.25);   overflow:auto;}
</style>';



// echo 'Leggere Ultimo File';
echo '';
echo '';

echo '<div>';
echo '</div>';



$w_a_1_1_PHP_CIF = './w_a_0_0_cifrato/';

if( is_Dir($w_a_1_1_PHP_CIF)) {

// echo ' EsisteCIF= '.$w_a_1_1_PHP_CIF  ;

$RaccogliereLista=scandir($w_a_1_1_PHP_CIF);
$QuantiFile=count($RaccogliereLista);
$UltimoFile=$w_a_1_1_PHP_CIF.$RaccogliereLista[$QuantiFile-1];

//
$ContenutoUltimoFile = file_get_contents($UltimoFile);

$w_a_1_1_PHP_DIR_decifra='w_a_0_0_decifra';
$w_a_1_1_PHP_DIR_cifrato='w_a_0_0_cifrato';
$w_a_1_1_PHP_DIR_noyek = 'w_a_0_0_noyek';
$w_a_1_1_PHP_FIL_wate = 'w_a_0_0_wate.php';
$w_a_1_1_PHP_DIR_yek = 'w_a_0_0_yek';
$w_a_1_1_PHP_FIL_yek = 'w_a_0_0_yek.php';
$w_a_1_1_PHP_FIL_stello='w_a_0_0_stello.php';
$w_a_1_1_PHP_DIR_tyng = './' . $w_a_1_1_PHP_DIR_noyek . '/' . $w_a_1_1_PHP_DIR_yek . '/';
$w_a_1_1_PHP_FIL_tyng = $w_a_1_1_PHP_DIR_tyng . 'tyng.php';




// 
include('./' . $w_a_1_1_PHP_DIR_noyek . '/'.  $w_a_1_1_PHP_DIR_yek . '/'. $w_a_1_1_PHP_FIL_stello );
// 
include('./' . $w_a_1_1_PHP_DIR_noyek . '/'.  $w_a_1_1_PHP_DIR_yek . '/'. $w_a_1_1_PHP_FIL_yek );

// echo 'stello' .  $stello ;
// echo 'trec= ' .  $trec ;


IF($stello===$trec){

$Stello=$stello;


echo '<div>';
echo '</div>';

echo '<div>';
// echo 'QuantiFile= '.$QuantiFile;
echo '</div>';

echo '<div>';
// echo 'UltimoFile= '.$UltimoFile;
echo '</div>';

echo '<div>';

echo '</div>';




$TrovaUltimoFile='';



}else{};





// questo toolbox AES
 // fa parte della dotazione standard
 // di PHP e non richiede CDN

 // Funzione per cifrare una stringa utilizzando AES-256-CBC
 function encrypt($w_a_1_1_plaintext, $w_a_1_1_key) {
 $method = "AES-256-CBC";
 $iv = openssl_random_pseudo_bytes(16);
 $w_a_1_1_ciphertext = openssl_encrypt($w_a_1_1_plaintext, $method, $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
 return base64_encode($iv . $w_a_1_1_ciphertext);
 };
 
 // Funzione per decifrare una stringa cifrata utilizzando AES-256-CBC
 function decrypt($w_a_1_1_ciphertext, $w_a_1_1_key) {
 $w_a_1_1_ciphertext = base64_decode($w_a_1_1_ciphertext);
 $iv = substr($w_a_1_1_ciphertext, 0, 16);
 $w_a_1_1_ciphertext = substr($w_a_1_1_ciphertext, 16);
 $w_a_1_1_plaintext = openssl_decrypt($w_a_1_1_ciphertext, "AES-256-CBC", $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
 return $w_a_1_1_plaintext;
 };


//
$VisualizzaCIF = decrypt($ContenutoUltimoFile, $Stello);

echo '<textarea style="height:50rem;"  readonly>';
echo $VisualizzaCIF;
echo '</textarea>';

}
ELSE
{

echo '<div>';
echo ' Qualcosa NON ha funzionato. ';
echo '</div>';

}; // IF stallo trec 




};  // if VAI 0 1


?>




<div id="fine"></div>
</body>
</html>

