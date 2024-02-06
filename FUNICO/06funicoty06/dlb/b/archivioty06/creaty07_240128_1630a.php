<!-- ?php 

$LIBRERIA_DIR_LOGIN='./dlb/a/';
$LIBRERIA_FIL_LOGIN=$LIBRERIA_DIR_LOGIN . 'login.php';

// if(is_Dir($LIBRERIA_DIR_LOGIN)){ echo 'esiste '.$LIBRERIA_DIR_LOGIN; }else{};

// if(file_exists($LIBRERIA_FIL_LOGIN)){ echo 'esiste '. $LIBRERIA_FIL_LOGIN ; }else{};


 session_start(); 
 if(!isset($_SESSION['UserData']['Username'])){
// header('location:login.php');
 
 header('location:' . $LIBRERIA_FIL_LOGIN );
 
 exit;
 }
 
? --> 


<!DOCTYPE html>

<html id="w_a_1_1_HTML">
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title>  



6%

  
  
CREATY07_240128_1315a

  </title>




<link rel="stylesheet" href="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.css">


<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>


<script src="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.js"></script>



<link href="https://fonts.googleapis.com/css2?family=PT+Mono:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rasa:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">


<style> html * {font-family:"PT Mono", monospace;} 

#COPIATURA_FUNICOTY06_IN_FUNICOTY07{
	background-color: black;
	color:orange;
	
}

</style>

</head>
<?php
 
// ECOLOGIA del programma
// usare le variabili come argomenti



echo '
<script>

// variabili da usare in script
/*

w_a_1_1_JAS_DIR_savecif  = "w_a_0_0_savecif";
w_a_1_1_JAS_FIL_savecif  = "savecif.php";
w_a_1_1_JAS_DIR_noyek    = "w_a_0_0_noyek";
w_a_1_1_JAS_DIR_platform = "w_a_0_0_platform";
w_a_1_1_JAS_FIL_platform = "index.js";

*/

w_a_1_1_JAS_DIR_savecif  = "w_a_0_0_savecif";
w_a_1_1_JAS_FIL_savecif  = "savecif.php";
w_a_1_1_JAS_DIR_noyek    = "w_a_0_0_noyek";
w_a_1_1_JAS_DIR_platform = "w_a_0_0_platform";
w_a_1_1_JAS_FIL_platform = "index.js";


</script>
';

/*


$w_a_1_1_PHP_DIR_decifra='w_a_0_0_decifra';
$w_a_1_1_PHP_DIR_cifrato='w_a_0_0_cifrato';
$w_a_1_1_PHP_DIR_noyek = 'w_a_0_0_noyek';
$w_a_1_1_PHP_FIL_wate = 'w_a_0_0_wate.php';
$w_a_1_1_PHP_DIR_yek = 'w_a_0_0_yek';
$w_a_1_1_PHP_FIL_yek = 'w_a_0_0_yek.php';


*/


$w_a_1_1_PHP_DIR_decifra='w_a_0_0_decifra';
$w_a_1_1_PHP_DIR_cifrato='w_a_0_0_cifrato';
$w_a_1_1_PHP_DIR_noyek = 'w_a_0_0_noyek';
$w_a_1_1_PHP_FIL_wate = 'w_a_0_0_wate.php';
$w_a_1_1_PHP_DIR_yek = 'w_a_0_0_yek';
$w_a_1_1_PHP_FIL_yek = 'w_a_0_0_yek.php';
$w_a_1_1_PHP_DIR_tyng = './' . $w_a_1_1_PHP_DIR_noyek . '/' . $w_a_1_1_PHP_DIR_yek . '/';
$w_a_1_1_PHP_FIL_tyng = $w_a_1_1_PHP_DIR_tyng . 'tyng.php';


$w_a_1_1_TOKEN_SALVA_CIF = 'SALVATAGGIOCIF.php';


?>


<?php 
// ***************************
// * 1. Rilevazione del server
// *
// *
// *
// *
// *
// ***************************

echo '<section id="COPIATURA_FUNICOTY06_IN_FUNICOTY07">';


$CARTELLA_DEL_SERVER_HTML = $_SERVER['SERVER_NAME'];
$NOME_DEL_SERVER_HTML=$CARTELLA_DEL_SERVER_HTML;
echo '<br>';
echo 'NOME_DEL_SERVER_HTML= '.$NOME_DEL_SERVER_HTML;


$CARTELLA_CORRENTE_PHP = getcwd();
echo '<br>';
echo 'CARTELLA_CORRENTE_PHP= '.$CARTELLA_CORRENTE_PHP;


$NOME_RADICE_PHP_CON_SLASH='/membri/avid3820725/';
echo '<br>';
echo 'NOME_RADICE_PHP_CON_SLASH= '.$NOME_RADICE_PHP_CON_SLASH;


$NOME_NUOVA_CARTELLA_TY='funicoty07';
$NOME_NUOVA_CARTELLA_TY_DOVE_CON_SLASH=$NOME_RADICE_PHP_CON_SLASH.$NOME_NUOVA_CARTELLA_TY.'/';
echo '<br>';
echo 'NOME_NUOVA_CARTELLA_TY_DOVE_CON_SLASH= '.$NOME_NUOVA_CARTELLA_TY_DOVE_CON_SLASH;


if(is_Dir($NOME_NUOVA_CARTELLA_TY_DOVE_CON_SLASH)){ 
echo '<br>';
echo $NOME_NUOVA_CARTELLA_TY_DOVE_CON_SLASH . ' esiste ';
}
else
{ 
echo '<br>';
echo $NOME_NUOVA_CARTELLA_TY_DOVE_CON_SLASH . ' NON esiste ';
mkdir( $NOME_NUOVA_CARTELLA_TY_DOVE_CON_SLASH );

};



// visualizza files della directory corrente
// se presente viene copiato nella nuova cartella
// 
$VDIR='vdir.php';
if (file_exists($VDIR)){
	echo '<br>';
	echo $VDIR.' esiste come file di origine in ' . $CARTELLA_CORRENTE_PHP;

	$FILE_DI_ORIGINE_VDIR=$CARTELLA_CORRENTE_PHP.'/'.$VDIR;
	echo '<br>';
	echo 'FILE_DI_ORIGINE_VDIR=  ' . $FILE_DI_ORIGINE_VDIR;
	
	$FILE_DI_DESTINA_VDIR=$NOME_NUOVA_CARTELLA_TY_DOVE_CON_SLASH.''.$VDIR;
	echo '<br>';
	echo 'FILE_DI_DESTINA_VDIR=  ' . $FILE_DI_DESTINA_VDIR;

	// esegui copia
	copy($FILE_DI_ORIGINE_VDIR, $FILE_DI_DESTINA_VDIR);
	// controlla se fatta copia
	if( file_exists($FILE_DI_DESTINA_VDIR) ){
		echo '<br>';
		echo $FILE_DI_DESTINA_VDIR . ' copiato ';
	};

}else{
	echo '<br>';
	echo $VDIR.' non esiste ';
};






//
// definizione delle cartelle vecchia e nuova
// con eventuali sottocartelle etc.
//

$CARTELLA_VECCHIA = $NOME_RADICE_PHP_CON_SLASH.'funicoty06/';
	echo '<br>';
	echo 'CARTELLA_VECCHIA= ' . $CARTELLA_VECCHIA;

$CARTELLA_NUOVA=$NOME_NUOVA_CARTELLA_TY_DOVE_CON_SLASH;
	echo '<br>';
	echo 'CARTELLA_NUOVA= ' . $CARTELLA_NUOVA;





function CreaTy($ORIGINE, $DESTINA, $OGGETTO){

$FILE_DA_COPIARE=$ORIGINE.$OGGETTO;
	echo '<br>';
	echo 'FILE_DA_COPIARE= ' . $FILE_DA_COPIARE ;
	
$FILE_COPIATO =$DESTINA.$OGGETTO;
	echo '<br>';
	echo 'FILE_COPIATO= ' . $FILE_COPIATO ;

	if (file_exists($FILE_COPIATO)){
		echo '<br>';
		echo $FILE_COPIATO . ' esiste';		
		
	}
	else
	{
		echo '<br>';
		echo $FILE_COPIATO . ' NON esiste';
		
		copy($FILE_DA_COPIARE, $FILE_COPIATO);
		
	}
};


$ORIGINE= $CARTELLA_VECCHIA;
$DESTINA= $CARTELLA_NUOVA;
$OGGETTO= 'LeggiCIF.php';
CreaTy($ORIGINE, $DESTINA, $OGGETTO);


$ORIGINE= $CARTELLA_VECCHIA;
$DESTINA= $CARTELLA_NUOVA;
$OGGETTO= 'funicoty06.php';
CreaTy($ORIGINE, $DESTINA, $OGGETTO);


$ORIGINE= $CARTELLA_VECCHIA;
$DESTINA= $CARTELLA_NUOVA;
$OGGETTO= 'SALVATAGGIOCIF.php';
CreaTy($ORIGINE, $DESTINA, $OGGETTO);


echo '<hr>';

$ORIGINE_w_a_1_1_PHP_DIR_noyek= $CARTELLA_VECCHIA.$w_a_1_1_PHP_DIR_noyek.'/';
$DESTINA_w_a_1_1_PHP_DIR_noyek= $CARTELLA_NUOVA.$w_a_1_1_PHP_DIR_noyek.'/';

// occorre provare che esiste
if(is_Dir($DESTINA_w_a_1_1_PHP_DIR_noyek)){ echo '<br>'.$DESTINA_w_a_1_1_PHP_DIR_noyek.' esiste ';}else{ echo '<br>'.$DESTINA_w_a_1_1_PHP_DIR_noyek.' NON esiste '; mkdir($DESTINA_w_a_1_1_PHP_DIR_noyek); };

		echo '<br>';
		echo 'ORIGINE_w_a_1_1_PHP_DIR_noyek= '.$ORIGINE_w_a_1_1_PHP_DIR_noyek;
		echo '<br>';
		echo 'DESTINA_w_a_1_1_PHP_DIR_noyek= '.$DESTINA_w_a_1_1_PHP_DIR_noyek;

$ORIGINE= $ORIGINE_w_a_1_1_PHP_DIR_noyek;
$DESTINA= $DESTINA_w_a_1_1_PHP_DIR_noyek;
$OGGETTO= 'w_a_0_0_wate.php';
CreaTy($ORIGINE, $DESTINA, $OGGETTO);

echo '<br>';

$ORIGINE= $CARTELLA_VECCHIA.$w_a_1_1_PHP_DIR_noyek.'/'.$w_a_1_1_PHP_DIR_yek.'/';
$DESTINA= $CARTELLA_NUOVA.$w_a_1_1_PHP_DIR_noyek.'/'.$w_a_1_1_PHP_DIR_yek.'/';
// occorre provare che esiste
if(is_Dir($DESTINA)){ echo '<br>'.$DESTINA.' esiste ';}else{ echo '<br>'.$DESTINA.' NON esiste '; mkdir($DESTINA); };

		echo '<br>';
		echo 'ORIGINE= '.$ORIGINE;
		echo '<br>';
		echo 'DESTINA= '.$DESTINA;

$ORIGINE= $ORIGINE; $DESTINA= $DESTINA;
$OGGETTO= 'w_a_0_0_yek.php';
CreaTy($ORIGINE, $DESTINA, $OGGETTO);


echo '<hr>';








echo '</section>';

?>





<hr>
<blockquote id="thefamouslastwords" style="margin-top:0.5rem; margin-bottom:0.5rem; text-align:center; border:dotted 0.15rem fuchsia; border-radius:0.50rem; box-shadow:6px 6px 12px transparent;">
<q style="margin-top:0.125rem; margin-bottom:0.125rem; padding:0.125rem; background-color:white; color:navy; font-size:100%; font-family:'PT Mono',monospace; font-weight:normal; font-variant:small-caps; border:solid 0.00rem aqua; border-radius:0.50rem;">
release CREATY07_240128_1315a   : verde, nook, sparrow, sixties
 &copy; 2024
</q>

<p style="font-family:Rasa; display:none;">
The Mad Yak 
by beat Gregory Corso
</p>
<p style="font-family:Rasa;">utility</p>
</blockquote>


<!-- et mahler 03620    -->  
<!-- notepad blackboard -->

<div id="fine"></div>

</body>
</html>  
  
  
  