<?php echo '';


/*



 revisionato 202312251845a


*/

echo '
<link rel="stylesheet" href="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.css">
<script src="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.css"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

';



echo '
<link rel="stylesheet" href="http://avid3820725.altervista.org/semantic/Semantic-UI-master/dist/semantic.min.css">
<script src="http://avid3820725.altervista.org/semantic/Semantic-UI-master/dist/semantic.min.css"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

';

?>

<style>

.w_a_0_0_savecifspinner {
  position: relative;
  width: 40px;
  height: 40px;
  
  font-size:2.5rem;
  
  border: 3px solid rgba(0, 0, 0, 0.2);
  border-radius: 50%;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

</style>


<article style="text-align:center;"  class="ui blue  segment">
<!--
<button class="w_a_0_0_savecifspinner">*</button>

-->
<button class="ui primary big loading button">Loading</button>

</article>

<?php

//		$dir    = './';
//		$files1 = scandir($dir);

echo '
<style>

.preverveCIF{
inline-size: auto;
    overflow-wrap: break-word;
    border:solid 0.00rem gray;
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */ 
 
 font-family:monospace;
 
};


.preverveAUX{
inline-size: auto;
    overflow-wrap: break-word;
    border:solid 0.00rem gray;
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */ 
  
};








</style>
';

// Funzione per cifrare una stringa utilizzando AES-256-CBC
 function encrypt($w_a_0_0_plaintext, $w_a_0_0_key) {
 $method = "AES-256-CBC";
 $iv = openssl_random_pseudo_bytes(16);
 $w_a_0_0_ciphertext = openssl_encrypt($w_a_0_0_plaintext, $method, $w_a_0_0_key, OPENSSL_RAW_DATA, $iv);
 return base64_encode($iv . $w_a_0_0_ciphertext);
 };
 
 // Funzione per decifrare una stringa cifrata utilizzando AES-256-CBC
 function decrypt($w_a_0_0_ciphertext, $w_a_0_0_key) {
 $w_a_0_0_ciphertext = base64_decode($w_a_0_0_ciphertext);
 $iv = substr($w_a_0_0_ciphertext, 0, 16);
 $w_a_0_0_ciphertext = substr($w_a_0_0_ciphertext, 16);
 $w_a_0_0_plaintext = openssl_decrypt($w_a_0_0_ciphertext, "AES-256-CBC", $w_a_0_0_key, OPENSSL_RAW_DATA, $iv);
 return $w_a_0_0_plaintext;
 };



$w_a_0_0_savecifPercorsoDEC="../../w_a_0_0_decifra/";

echo '<h4>';
echo '</h4>';


$w_a_0_0_savecifPercorsoCIF="../../w_a_0_0_cifrato/";
$w_a_0_0_savecifPercorsoKEY="../../w_a_0_0_noyek/w_a_0_0_yek/";
$w_a_0_0_savecifPercorsoKEY=$w_a_0_0_savecifPercorsoKEY."w_a_0_0_yek.php";

echo '<h3>';

include($w_a_0_0_savecifPercorsoKEY);

$w_a_0_0_savecifKEY = $trec;

echo '<h1></h1>';

echo '</h3>';



$w_a_0_0_savecifCHECK_PercorsoDEC=is_dir($w_a_0_0_savecifPercorsoDEC);
$w_a_0_0_savecifCHECK_PercorsoCIF=is_dir($w_a_0_0_savecifPercorsoCIF);
$w_a_0_0_savecifCHECK_PercorsoKEY=is_dir($w_a_0_0_savecifPercorsoKEY);



if($w_a_0_0_savecifCHECK_PercorsoDEC){ 


$w_a_0_0_savecifLISTA_FILES=scandir($w_a_0_0_savecifPercorsoDEC);
$w_a_0_0_savecifLISTA_FILES_CONTA=count($w_a_0_0_savecifLISTA_FILES);
$w_a_0_0_savecifULTIMO_FILE=$w_a_0_0_savecifLISTA_FILES[$w_a_0_0_savecifLISTA_FILES_CONTA-1];
$w_a_0_0_savecifULTIMO_FILE_PERCORSO_COMPLETO=$w_a_0_0_savecifPercorsoDEC.$w_a_0_0_savecifULTIMO_FILE;


$w_a_0_0_savecifCONTENUTO_ULTIMO_FILE=file_get_contents($w_a_0_0_savecifULTIMO_FILE_PERCORSO_COMPLETO);

// contenuto del file cry
$w_a_0_0_savecifCONTENUTO_CRYPTATO_ULTIMO_FILE = encrypt($w_a_0_0_savecifCONTENUTO_ULTIMO_FILE,$w_a_0_0_savecifKEY);



echo '<h3 style="inline-size:auto; overflow-wrap: break-word; white-space: pre-wrap; font-family:monospace; ">';
echo '</h3>';


 $w_a_0_0_savecif_time=time(); 
 $w_a_0_0_savecifPrefisso = date("Y_m_d"); 
 $w_a_0_0_savecifPrefisso = $w_a_0_0_savecifPrefisso.'_'. $w_a_0_0_savecif_time;
 
 
 $w_a_0_0_savecifPostfisso = "_".rand(0, 10000000);
 $w_a_0_0_savecifEstensione = "w_a_0_0_cifrato";
 $w_a_0_0_savecifNomeDelFileCIF= $w_a_0_0_savecifPrefisso .  $w_a_0_0_savecifPostfisso .'.'.$w_a_0_0_savecifEstensione;
// dove copiare il file cry
 $LocazioneFileCIF= $w_a_0_0_savecifPercorsoCIF . $w_a_0_0_savecifNomeDelFileCIF ;
 
 echo '<h3>'; 
 echo '</h3>';
 

$w_a_0_0_savecifSALVA_CIF_NEL_SERVER=fopen($LocazioneFileCIF,"w");
fwrite($w_a_0_0_savecifSALVA_CIF_NEL_SERVER, $w_a_0_0_savecifCONTENUTO_CRYPTATO_ULTIMO_FILE);
fclose($w_a_0_0_savecifSALVA_CIF_NEL_SERVER);



echo '';
echo '';
echo '';
echo '';
echo '';
echo '';



};
if($w_a_0_0_savecifCHECK_PercorsoCIF){ 


};


$a_w_0_0_LISTA_NoProliferazioneScanDir= scandir( $w_a_0_0_savecifPercorsoCIF);


$a_w_0_0_LISTA_NoProliferazioneScanDirQuantiFile=count($a_w_0_0_LISTA_NoProliferazioneScanDir);



echo '';
echo '<h3>';
echo '</h3>';
echo '';

$MAXFiles=5;
if($a_w_0_0_LISTA_NoProliferazioneScanDirQuantiFile>$MAXFiles){

echo '<h3>';
echo '</h3>';

echo '<h3>';
echo 'versione ' . '202312251845a';
echo '</h3>';

echo '
<article style="text-align:center;"  class="ui red  segment">
<!--
<button class="w_a_0_0_savecifspinner">*</button>

-->
<button class="ui red big loading button">Loading</button>

</article>

';


	$FILE_ZER=$w_a_0_0_savecifPercorsoCIF.$a_w_0_0_LISTA_NoProliferazioneScanDir[0];
	$FILE_UNO=$w_a_0_0_savecifPercorsoCIF.$a_w_0_0_LISTA_NoProliferazioneScanDir[1];


	// Rimuovi i file "." e ".."
	unset($FILE_ZER, $FILE_UNO);
	
	$FILE_DA_CANCELLARE = $w_a_0_0_savecifPercorsoCIF.$a_w_0_0_LISTA_NoProliferazioneScanDir[2];
	
	
//		
	unlink($FILE_DA_CANCELLARE);
	




};




echo '';
echo '<h3>';
echo '';
echo '</h3>';
echo '';


echo '';
echo '';
echo '';
echo '';





echo '
<script>

function Temporizza(){

document.location.replace("../../index.html");

}; setTimeout(Temporizza, 5000);



</script>
';

?>
		