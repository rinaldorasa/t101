
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/png" href="https://it.altervista.org/images/favicon/favicon-16x16.png" sizes="16x16">


<title>


•
!

3335
3336◘

♣♠♥♦


assembla10_2402116_1830a

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


<section style="width:75%; margin-left:8.75%; border:solid 0.15rem rgba(0,0,255,0.250);" class="ui placeholder segment">
<div class="ui two column very relaxed stackable grid">


    <div  style="border-right:dashed 0.15rem blue;"  class="column">
      <form class="ui form" action="assembla10.php"  method="POST">
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
		<a href="assembla10.php" style="text-transform: uppercase;" class="ui red button">exit</a>
		</article>
		
		<article style="background-color:white; color:black;" class="ui center aligned segment">
		<div style="background-color:white;" ><i class="exclamation big red triangle icon"></i></div>
		<blockquote style="font-weight:600;">
		Se non sai esattamente cosa stai facendo fai click su <q style="background-color:white; color:black; text-transform: uppercase;">&nbsp;exit&nbsp;</q>.
		</blockquote>
		</article>
		<h5 style="color:olive;" class="ui center aligned segment">assembla10_2402116_1830a</h5>

	
		<script type="module" crossorigin src="./assets/clock/index-Cn0A_onJ.js?987654321"></script>
		<link rel="stylesheet" crossorigin href="./assets/clock/index-DpF8Xlag.css?987654321">
	
		<a href="https://svelte.dev/examples/clock">
			<div id="app" style="margin-left:auto;"></div>
		</a>


	</div>


	
</div>
</section>
<?php   

//
// cosa fa ?
// prende files da ORIGINE
// e crea il file $DESTINA_FIL
// da memorizzare nella
// cartella DESTINA
//



$root = getcwd();



$ORIGINE = './wa10ins/';
$DESTINA = './composizione10/' ;
$DESTINA_FIL = 'COMPOSIZIONE10' . '_' . time()  . '.php';


echo '<br>' . '<span class="ui label">Cartella attuale: </span>' . $root ;
echo '<br>' . '<span class="ui label">Cartella compone: </span>' . $DESTINA ;
echo '<br>' . '<span class="ui label">Il file : </span>' . $DESTINA . $DESTINA_FIL ;


if(is_Dir($DESTINA)){
	
	$LISTA = scandir($DESTINA);
	$CONTA = count($LISTA);	
	
	$CANCELLA_FIL = $DESTINA . $LISTA[2];	
	
//	echo '<br>' . $CANCELLA_FIL ;
	
	
	if($CONTA>5){ unlink($CANCELLA_FIL); };	
	

	
//	echo '<br>' . $CONTA ;

		echo '<details><summary></summary>';
	foreach($LISTA as $ELEMENTO){
		
	echo '<br>';
		echo $ELEMENTO;

		
	};
		echo '</details>';
	

}
else
{
mkdir($DESTINA);
};




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

$WA00INS_000 =  $ORIGINE  .'wa00ins_000.php';
$WA00INS_001 =  $ORIGINE  .'wa00ins_001.php';
$WA00INS_002 =  $ORIGINE  .'wa00ins_002.php';
$WA00INS_003 =  $ORIGINE  .'wa00ins_003.php';
$WA00INS_004 =  $ORIGINE  .'wa00ins_004.php';
$WA00INS_005 =  $ORIGINE  .'wa00ins_005.php';
$WA00INS_006 =  $ORIGINE  .'wa00ins_006.php';
$WA00INS_007 =  $ORIGINE  .'wa00ins_007.php';
$WA00INS_008 =  $ORIGINE  .'wa00ins_008.php';
$WA00INS_009 =  $ORIGINE  .'wa00ins_009.php';
$WA00INS_010 =  $ORIGINE  .'wa00ins_010.php';
$WA00INS_011 =  $ORIGINE  .'wa00ins_011.php';
$WA00INS_012 =  $ORIGINE  .'wa00ins_012.php';
$WA00INS_013 =  $ORIGINE  .'wa00ins_013.php';
$WA00INS_014 =  $ORIGINE  .'wa00ins_014.php';
$WA00INS_015 =  $ORIGINE  .'wa00ins_015.php';
$WA00INS_016 =  $ORIGINE  .'wa00ins_016.php';
$WA00INS_017 =  $ORIGINE  .'wa00ins_017.php';
$WA00INS_018 =  $ORIGINE  .'wa00ins_018.php';
$WA00INS_019 =  $ORIGINE  .'wa00ins_019.php';
$WA00INS_020 =  $ORIGINE  .'wa00ins_020.php';
$WA00INS_021 =  $ORIGINE  .'wa00ins_021.php';
$WA00INS_022 =  $ORIGINE  .'wa00ins_022.php';
$WA00INS_023 =  $ORIGINE  .'wa00ins_023.php';
$WA00INS_024 =  $ORIGINE  .'wa00ins_024.php';
$WA00INS_025 =  $ORIGINE  .'wa00ins_025.php';
$WA00INS_026 =  $ORIGINE  .'wa00ins_026.php';
$WA00INS_027 =  $ORIGINE  .'wa00ins_027.php';
$WA00INS_028 =  $ORIGINE  .'wa00ins_028.php';
$WA00INS_029 =  $ORIGINE  .'wa00ins_029.php';
$WA00INS_030 =  $ORIGINE  .'wa00ins_030.php';
$WA00INS_031 =  $ORIGINE  .'wa00ins_031.php';
$WA00INS_032 =  $ORIGINE  .'wa00ins_032.php';
$WA00INS_033 =  $ORIGINE  .'wa00ins_033.php';
$WA00INS_034 =  $ORIGINE  .'wa00ins_034.php';
$WA00INS_035 =  $ORIGINE  .'wa00ins_035.php';
$WA00INS_036 =  $ORIGINE  .'wa00ins_036.php';
$WA00INS_037 =  $ORIGINE  .'wa00ins_037.php';
$WA00INS_038 =  $ORIGINE  .'wa00ins_038.php';
$WA00INS_039 =  $ORIGINE  .'wa00ins_039.php';
$WA00INS_040 =  $ORIGINE  .'wa00ins_040.php';
$WA00INS_041 =  $ORIGINE  .'wa00ins_041.php';
$WA00INS_042 =  $ORIGINE  .'wa00ins_042.php';
$WA00INS_043 =  $ORIGINE  .'wa00ins_043.php';
$WA00INS_044 =  $ORIGINE  .'wa00ins_044.php';
$WA00INS_045 =  $ORIGINE  .'wa00ins_045.php';
$WA00INS_046 =  $ORIGINE  .'wa00ins_046.php';
$WA00INS_047 =  $ORIGINE  .'wa00ins_047.php';
$WA00INS_048 =  $ORIGINE  .'wa00ins_048.php';
$WA00INS_049 =  $ORIGINE  .'wa00ins_049.php';
$WA00INS_050 =  $ORIGINE  .'wa00ins_050.php';





// ------------------------
// ||
// || inizializza la string
// || 
// \/

$COMPOSIZIONE = '';

//
//
//
//
// esegue una concatenazione di tutti i file
// da 000 a 050
// ||
// ||
// ||
// \/

$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_000);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_001);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_002);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_003);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_004);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_005);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_006);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_007);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_008);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_009);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_010);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_011);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_012);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_013);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_014);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_015);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_016);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_017);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_018);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_019);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_020);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_021);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_022);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_023);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_024);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_025);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_026);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_027);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_028);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_029);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_030);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_031);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_032);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_033);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_034);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_035);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_036);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_037);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_038);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_039);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_040);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_041);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_042);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_043);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_044);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_045);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_046);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_047);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_048);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_049);
$COMPOSIZIONE = $COMPOSIZIONE . file_get_contents($WA00INS_050);





// 
file_put_contents($DESTINA . $DESTINA_FIL , $COMPOSIZIONE);



};  // if VAI 0 1


?>


<div id="fine"></div>
</body>
</html>







