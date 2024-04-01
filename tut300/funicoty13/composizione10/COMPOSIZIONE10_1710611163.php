<?php 

//  000

$LIBRERIA_DIR_LOGIN='./dlb/a/';
$LIBRERIA_FIL_LOGIN=$LIBRERIA_DIR_LOGIN . 'login.php';


/* */
 session_start(); 
 if(!isset($_SESSION['UserData']['Username'])){
 
 header('location:' . $LIBRERIA_FIL_LOGIN );
 
 exit;
 }
 
 
 
 
?> 

<!-- 



FUNICOTY13_240316_0730a 

-->

<!-- FIN 000 -->


<?php  

// 001

echo '<!DOCTYPE html>'; ?> 
<!-- FIN 001 doctype HTML -->
<?php  

//  002

echo '<html id="w_a_1_1_HTML">'; ?> 
<!-- FIN 002 HTML ini -->

<?php  

// 003

echo '<head>'; ?> 

<!--
apertura elemento head

-->
<!-- FIN 003 head  -->


<?php  

// 004

echo '
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/png" href="https://it.altervista.org/images/favicon/favicon-16x16.png" sizes="16x16">
';
?> 
<!--
caratteristiche 
di intero documento
-->
<!-- fin 004 meta -->


<?php  

// 005

echo '
<title>  

£

13%
 
  
FUNICOTY13_240316_0730a

</title>

';
?> 
<!-- fin 005 title -->



<?php

// 006

// 
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







// controlla se eccedenza numero file
// esegue cancellazione file superflui
//
function CancellaFileCifEccedenti($w_a_1_1_PHP_DIR_cifrato){
    
$Directory=$w_a_1_1_PHP_DIR_cifrato;

$DirectoryLista=scandir($Directory);

$DirectoryConta=count($DirectoryLista);

$MaxFiles = 7;

$NumeroFileDaCancellare=$DirectoryConta - $MaxFiles ;




if($DirectoryConta>$MaxFiles){


$UnsetFilesDotOne=      './' . $Directory . '/' . $DirectoryLista[0];
$UnsetFilesDotTwo=      './' . $Directory . '/' . $DirectoryLista[1];
$UnsetFilesCountMinus1= './' . $Directory . '/' . $DirectoryLista[$DirectoryConta-1];
$UnsetFilesCountMinus2= './' . $Directory . '/' . $DirectoryLista[$DirectoryConta-2];
$UnsetFilesCountMinus3= './' . $Directory . '/' . $DirectoryLista[$DirectoryConta-3];
$UnsetFilesCountMinus4= './' . $Directory . '/' . $DirectoryLista[$DirectoryConta-4];
$UnsetFilesCountMinus5= './' . $Directory . '/' . $DirectoryLista[$DirectoryConta-5];


unset($UnsetFilesDotOne);
unset($UnsetFilesDotTwo);

unset($UnsetFilesCountMinus1);
unset($UnsetFilesCountMinus2);
unset($UnsetFilesCountMinus3);
unset($UnsetFilesCountMinus4);
unset($UnsetFilesCountMinus5);


$DaCancellareMeno6='./' . $Directory . '/' . $DirectoryLista[$DirectoryConta-6];


unlink($DaCancellareMeno6);


}else{  };


};
CancellaFileCifEccedenti($w_a_1_1_PHP_DIR_cifrato);


function CreaTokenSalvaCif($w_a_1_1_TOKEN_SALVA_CIF){
    $w_a_1_1_DEF_Postfisso = time();
    $w_a_1_1_handle = fopen($w_a_1_1_TOKEN_SALVA_CIF, "w+");
    fwrite($w_a_1_1_handle, $w_a_1_1_DEF_Postfisso);
    fclose($w_a_1_1_handle);
};  
CreaTokenSalvaCif($w_a_1_1_TOKEN_SALVA_CIF);






function CreaNoyekYek($w_a_1_1_PHP_DIR_noyek, $w_a_1_1_PHP_DIR_yek){
    
    $w_a_1_1_directory =  $w_a_1_1_PHP_DIR_noyek;
    if (is_dir($w_a_1_1_directory)) {}else{
    mkdir($w_a_1_1_directory);
    };
    
    $w_a_1_1_directory = $w_a_1_1_directory.'/'. $w_a_1_1_PHP_DIR_yek ;
    if (is_dir($w_a_1_1_directory)) {}else{
    mkdir($w_a_1_1_directory);
    };
    
};
CreaNoyekYek($w_a_1_1_PHP_DIR_noyek, $w_a_1_1_PHP_DIR_yek);




function CreaDeciCifr($w_a_1_1_PHP_DIR_decifra, $w_a_1_1_PHP_DIR_cifrato){
 $w_a_1_1_DEF_DirectoryCorrente = getcwd();
 
 $w_a_1_1_DEF_DirectorySalvaTxt =  $w_a_1_1_PHP_DIR_decifra ;
 $w_a_1_1_DEF_DirectorySalvaTxtQUICK = $w_a_1_1_PHP_DIR_cifrato;

 $w_a_1_1_DEF_t=time(); 
 $w_a_1_1_DEF_Percorso=$w_a_1_1_DEF_DirectoryCorrente; 
 $w_a_1_1_DEF_Prefisso = date("Y_m_d",$w_a_1_1_DEF_t); 
 $w_a_1_1_DEF_Postfisso = time(); 
 $w_a_1_1_DEF_Postfisso = $w_a_1_1_DEF_Postfisso . "_".rand(0, 10000000);

 $w_a_1_1_DEF_Estensione = $w_a_1_1_PHP_DIR_decifra;
 $w_a_1_1_DEF_NomeFile = $w_a_1_1_DEF_Percorso.'/'.$w_a_1_1_DEF_DirectorySalvaTxt.'/'.$w_a_1_1_DEF_Prefisso."_".$w_a_1_1_DEF_Postfisso.".".$w_a_1_1_DEF_Estensione;
 $w_a_1_1_DEF_directory= $w_a_1_1_DEF_Percorso.'/'.$w_a_1_1_DEF_DirectorySalvaTxt.'/';

 $w_a_1_1_DEF_EstensioneQUICK = $w_a_1_1_PHP_DIR_cifrato;
 $w_a_1_1_DEF_NomeFile_QUICK_CIF= $w_a_1_1_DEF_Percorso.'/'.$w_a_1_1_DEF_DirectorySalvaTxtQUICK.'/'.$w_a_1_1_DEF_Prefisso."_".$w_a_1_1_DEF_Postfisso.".". $w_a_1_1_DEF_EstensioneQUICK;
 $w_a_1_1_DEF_directory_QUICK_CIF= $w_a_1_1_DEF_Percorso.'/'.$w_a_1_1_DEF_DirectorySalvaTxtQUICK.'/';

  $w_a_1_1_directory = $w_a_1_1_DEF_directory;
  if (is_dir($w_a_1_1_directory)) {} else {
  mkdir($w_a_1_1_directory);
  $w_a_1_1_handle = fopen($w_a_1_1_DEF_NomeFile, "w+");
  fwrite($w_a_1_1_handle, $w_a_1_1_DEF_t);
  fclose($w_a_1_1_handle);
  }; // if


  $w_a_1_1_directory = $w_a_1_1_DEF_directory_QUICK_CIF;
  if (is_dir($w_a_1_1_directory)) {} else {
  mkdir($w_a_1_1_directory);
  $w_a_1_1_handle = fopen($w_a_1_1_DEF_NomeFile_QUICK_CIF, "w+");
  fwrite($w_a_1_1_handle, $w_a_1_1_DEF_t);
  fclose($w_a_1_1_handle);
  }; // if

 echo ''."";
 
};   
CreaDeciCifr( $w_a_1_1_PHP_DIR_decifra, $w_a_1_1_PHP_DIR_cifrato );



if(is_Dir($w_a_1_1_PHP_DIR_noyek)){
// $w_a_1_1_PHP_DIR_noyek ;

  $w_a_1_1_handle = fopen($w_a_1_1_PHP_DIR_noyek.'/'.$w_a_1_1_PHP_FIL_wate, "w+");
  fwrite($w_a_1_1_handle, '');
  fclose($w_a_1_1_handle);
 
}else{};





// *************************
// NON  FUNZIONE
// *************************
//
// check sillabario
//
// *************************

$w_a_1_1_CHECK_ESSENZIALE=$w_a_1_1_PHP_DIR_noyek . '/' . $w_a_1_1_PHP_DIR_yek . '/' . $w_a_1_1_PHP_FIL_yek;
// ||
// ||
// ||
// \/
if(file_exists($w_a_1_1_CHECK_ESSENZIALE))
{
include ( $w_a_1_1_CHECK_ESSENZIALE ) ;

$w_a_1_1_key = $trec ;

$w_a_1_1_CHECK_ESSENZIALE_LISTA = scandir ( $w_a_1_1_PHP_DIR_decifra  ) ;
$w_a_1_1_CHECK_ESSENZIALE_CONTA = count ( $w_a_1_1_CHECK_ESSENZIALE_LISTA ) ;
$w_a_1_1_CHECK_ESSENZIALE_LASTF = $w_a_1_1_CHECK_ESSENZIALE_LISTA[$w_a_1_1_CHECK_ESSENZIALE_CONTA-1];
$w_a_1_1_CHECK_ESSENZIALE_PATHF = './' .  $w_a_1_1_PHP_DIR_decifra . '/'  . $w_a_1_1_CHECK_ESSENZIALE_LASTF ;


 
 $w_a_1_1_CHECK_ESSENZIALE_DECIF = file_get_contents ( $w_a_1_1_CHECK_ESSENZIALE_PATHF ) ;
 

 
 $w_a_1_1_plaintext = $w_a_1_1_CHECK_ESSENZIALE_DECIF ;

 
 
 // Funzione per cifrare una stringa utilizzando AES-256-CBC
 function encryptESSENZIALE($w_a_1_1_plaintext, $w_a_1_1_key) {
 $method = "AES-256-CBC";
 $iv = openssl_random_pseudo_bytes(16);
 $w_a_1_1_ciphertext = openssl_encrypt($w_a_1_1_plaintext, $method, $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
 return base64_encode($iv . $w_a_1_1_ciphertext);
 };
 
 // Funzione per decifrare una stringa cifrata utilizzando AES-256-CBC
 function decryptESSENZIALE($w_a_1_1_ciphertext, $w_a_1_1_key) {
 $w_a_1_1_ciphertext = base64_decode($w_a_1_1_ciphertext);
 $iv = substr($w_a_1_1_ciphertext, 0, 16);
 $w_a_1_1_ciphertext = substr($w_a_1_1_ciphertext, 16);
 $w_a_1_1_plaintext = openssl_decrypt($w_a_1_1_ciphertext, "AES-256-CBC", $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
 return $w_a_1_1_plaintext;
 };




 $w_a_1_1_CHECK_ESSENZIALE_CIFRA   = encryptESSENZIALE($w_a_1_1_plaintext, $w_a_1_1_key) ;
// /\
// ||
// ||
// ||
// ||
// ||

$w_a_1_1_CHECK_ESSENZIALE_LISTA_CIF = scandir ( $w_a_1_1_PHP_DIR_cifrato  ) ;
$w_a_1_1_CHECK_ESSENZIALE_CONTA_CIF = count ( $w_a_1_1_CHECK_ESSENZIALE_LISTA_CIF ) ;
$w_a_1_1_CHECK_ESSENZIALE_LASTF_CIF = $w_a_1_1_CHECK_ESSENZIALE_LISTA_CIF[$w_a_1_1_CHECK_ESSENZIALE_CONTA_CIF-1];
$w_a_1_1_CHECK_ESSENZIALE_PATHF_CIF = './' .  $w_a_1_1_PHP_DIR_cifrato . '/'  . $w_a_1_1_CHECK_ESSENZIALE_LASTF_CIF ;


$stringa = $w_a_1_1_CHECK_ESSENZIALE_PATHF ;
 
$stringa_sostituta = str_replace($w_a_1_1_PHP_DIR_decifra, $w_a_1_1_PHP_DIR_cifrato, $stringa);


  $w_a_1_1_handle = fopen($stringa_sostituta, "w+");
  fwrite($w_a_1_1_handle, $w_a_1_1_CHECK_ESSENZIALE_CIFRA);
  fclose($w_a_1_1_handle);



}
else
{


    echo '<div style="background-color:red; color:white; font-family:monospace; font-weight:bold; text-align:center;">FILE ESSENZIALE NON TROVATO, IL PROGRAMMA RISULTA PARZIALMENTE COMPROMESSO!</div>';

    
};




?> 
<!-- fin 006 ecologia -->



<?php 

// 007

//
// esaminare una serie di condizioni per semantic-ui
//

$SEMANTIC_UI_CSS = '../'.'semantic'.'/'.'Semantic-UI-master'.'/'.'dist'.'/'.'semantic.min.css' ;
$SEMANTIC_UI_JAS = '../'.'semantic'.'/'.'Semantic-UI-master'.'/'.'dist'.'/'.'semantic.min.js' ;
if(file_exists($SEMANTIC_UI_CSS)){}else{};
if(file_exists($SEMANTIC_UI_JAS)){}else{};



echo '
<link rel="stylesheet" href="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.css">


<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>


<script src="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.js"></script>

';



echo '
<link rel="stylesheet" href="http://avid3820725.altervista.org/semantic/Semantic-UI-master/dist/semantic.min.css">


<script src="http://avid3820725.altervista.org/semantic/Semantic-UI-master/dist/semantic.min.js"></script>

';

 
// fonts di sistema

echo '

<link href="https://fonts.googleapis.com/css2?family=PT+Mono:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rasa:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

';

?> 
<!--
framework cross browser
google font
-->
<!-- fin 007 semantic-->



<?php 

//  008

// stili_css
echo '
<style>
button{background-color:transparent;border-color:transparent;}

 #w_a_1_1_HTML{}
 #w_a_1_1_BODY{border:solid 0.15rem transparent;}
 
 #w_a_1_1_DETAILS_TESTO_DINAMICO{border:solid 0.00rem olive;}
 #w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO{color:olive; font-size:5rem; font-family:monospace;border-bottom:solid 0.00rem green; border-radius:0.50rem; visibility:visible; display:none;}
 #w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO_SVG{width:48px; height:48px; color:green;}
 
 #w_a_1_1_MAIN{}
 
 #w_a_1_1_TRASH_PUNTINI_ETC{text-align:center; border:dashed 0.00rem olive;}
 #w_a_1_1_TRASH_CAN{display:initial; display:initial; display:none;}
 #w_a_1_1_TRASH_CAN_SVG{display:none;}
 #w_a_1_1_TRASH_CAN_SEMANTIC_SVG{color:orange; font-size:5.95rem;}
 #w_a_1_1_TRASH_CAN_SEMANTIC_SVG:hover{cursor:pointer;}
 #w_a_1_1_TRE_PUNTINI{}
 #w_a_1_1_TRE_PUNTINI_TEXT{font-size:5rem; display:none;}
 #w_a_1_1_TRE_PUNTINI_TRIANGLE_SVG{display:none;}
 #w_a_1_1_TRE_PUNTINI_TRIANGLE_SEMANTIC_SVG{margin-left:2.50rem;font-size:5rem;}

 #w_a_1_1_DARKMODE{display:inline-block;}
 #w_a_1_1_DARKMODE_SVG{width:80px; height:80px;}
 #w_a_1_1_LIGHTMODE{display:inline-block;}
 #w_a_1_1_LIGHTMODE_SVG{width:80px; height:80px;}
 
 #w_a_1_1_BACKDOOR_FORM_SI{}
 #w_a_1_1_BACKDOOR_FORM_SI{display:inline-block;}
 #w_a_1_1_BACKDOOR_FORM_SI_SVG{width:80px; height:80px;}
 
 #w_a_1_1_BACKDOOR_FORM_NO{}
 #w_a_1_1_BACKDOOR_FORM_NO{display:inline-block;}
 #w_a_1_1_BACKDOOR_FORM_NO_SVG{width:80px; height:80px;}
 
 
 
 
 
 #w_a_1_1_SALVATAGGIO_DI_TIPO_CIF{position:fixed; bottom:0rem; left:0rem; display:inline-block;}
 #w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SVG{width:80px; height:80px; display:inline-block;} 
 #w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SUMMARY{background-color:orange; color:orange;  display:inline-block;}
 #w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SUMMARY:hover{cursor:pointer;}
 
 
  
 #w_a_1_1_UP_DOWN_NELLA_PAGINA{position:fixed; top:9.00rem;  top:25%;  left:0%; width:auto; height:auto;}
 #w_a_1_1_UP_DOWN_NELLA_PAGINA{display:block; z-index:999;}

 #w_a_1_1_UP_NELLA_PAGINA{display:block; border:solid 0.00rem green;}
 #w_a_1_1_UP_NELLA_PAGINA_SVG{  width:60px; height:60px; display:block;}
 
 #w_a_1_1_DOWN_NELLA_PAGINA{display:block; border:solid 0.00rem red;} 
 #w_a_1_1_DOWN_NELLA_PAGINA_SVG{width:60px; height:60px; display:block;}




 
 
 #w_a_1_1_FORM_X_INVIA__{border:dotted 0.00rem olive;}
 #w_a_1_1_FORM_X_INVIA_AES__{border:solid 0.00rem olive;}


 #w_a_1_1_DIGITAL_IDENTITY_FREE_READING{} 
 
 #w_a_1_1_SSAP__{text-align:center; border:solid 0.00rem olive;}
 #w_a_1_1_post_uno__{width:20%; font-size:2.5rem; background-color:transparent; color:transparent; font-family:monospace; opacity:0.75;} 
 #w_a_1_1_post_due__{width:20%; font-size:2.5rem; background-color:transparent; color:transparent; font-family:monospace; opacity:0.75;}
 #w_a_1_1_post_tre__{width:20%; font-size:2.5rem; background-color:transparent; color:transparent; font-family:monospace; opacity:0.75;}
 #w_a_1_1_post_qua__{width:20%; font-size:2.5rem; background-color:transparent; color:transparent; font-family:monospace; opacity:0.75;}

 
 #w_a_1_1_area_immissione_testo_invia_container__{text-align:center; border:solid 0.00rem lime;}
 #w_a_1_1_area_immissione_testo__{width:90%; height:48rem; font-size:5rem; font-family:monospace;}
 #w_a_1_1_invia_testo_container__{text-align:center;}
 #w_a_1_1_invia_testo_button__{width:50%; font-size:5rem; font-family:"PT Mono",monospace; text-transform:uppercase;}
 #w_a_1_1_INDEX_WRAP{position:fixed; top:1.00rem; right:0rem;}
 #w_a_1_1_INDEX_CLICK{}
 #w_a_1_1_INDEX_CLICK_SVG{width:80px; height:80px; box-shadow:6px 6px 12px black; border-radius:0.50rem;}
 #w_a_1_1_INDEX_CLICK_SVG:hover{width:80px; height:80px; background-color:white; color:red; box-shadow:6px 6px 12px black; border-radius:0.50rem; cursor:pointer;}
 #w_a_1_1_SEMAFORO_GREEN{ margin-left:80px; background-color:green; color:green; font-size:2.5rem; border-radius:100%; opacity:1; opacity:0;}
 #w_a_1_1_SEMAFORO_RED{   margin-left:80px; background-color:red; color:red; font-size:2.5rem; border-radius:100%;     opacity:1; opacity:0;}





 #w_a_1_1_CONTENUTO_DENCRIPTED{padding:0.50rem; background-color:navy; color:white; font-size:125%; font-family:monospace; overflow:auto;}

 #w_a_1_1_CONTENUTO_DENCRIPTED{padding:1.250rem; background-color:white; color:black; font-size:125%; font-family:"PT Mono", monospace; overflow:auto;}

 #w_a_1_1_CONTENUTO_DENCRIPTED{box-shadow:6px 6px 12px gray;}





 #w_a_1_1_AVVISO_MOBILE,  #w_a_1_1_AVVISO_DESKTOP{ font-family:monospace; font-variant:small-caps; text-align:center; display:none; }
 #w_a_1_1_rilevato_sistema_operativo_e_browser{font-family:monospace; font-variant:small-caps; text-align:center; }

 #w_a_1_1_GIORNO_TIME{margin-top:0.5rem; margin-bottom:0.5rem; font-family:"PT Mono", monospace; font-variant:small-caps; text-align:center;}


 #w_a_1_1_CONTENITORE_DETTAGLI_SLIDERS{position:fixed; top:9.00rem; top:25%; right:0.0rem;  background-color:transparent; background-color:yellow; background-color:rgba(255, 215, 0, 0.125); border:solid 0.00rem red; border-radius:0.35rem;}
 #w_a_1_1_DETTAGLI_SLIDERS{  text-align:center; background-color:transparent; border-width:0rem;}
 #w_a_1_1_SUMMARY_SLIDERS{ background-color:rgba(255, 215, 0, 0.50); border-width:0rem;} 
 #w_a_1_1_SLIDERS_SVG{width:60px; height:60px; color:purple; display:none;}

/* experimental */
/* || */
/* || */
/* || */
/* \/ */

 #w_a_1_1_CONTENITORE_DETTAGLI_SLIDERS{position:fixed; top:9.00rem; top:25%; top:25%; right:0.0rem;  background-color:transparent; background-color:yellow; background-color:rgba(255, 215, 0, 0.125); border:solid 0.00rem red; border-radius:0.35rem;}
 #w_a_1_1_DETTAGLI_SLIDERS{  padding-top:1.50rem; background-color:transparent; text-align:center; border-width:0rem;}
 #w_a_1_1_SUMMARY_SLIDERS{ background-color:rgba(255, 215, 0, 0.50); border-width:0rem;} 
 #w_a_1_1_SLIDERS_SVG{width:60px; height:60px; color:purple; display:none;}





</style>



<style>

.preverve{
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




echo '

<style>
.cursore {
 background: lime;
 line-height: 17px;
 margin-left: 3px;
 -webkit-animation: blink 0.8s infinite;
 width: 7px;
 height: 15px;
}

.cursore_freeTest{ line-height: 17px;  margin-left: 3px;  -webkit-animation: blink 0.8s infinite; }

.cursore_freeX{   width: 16px;  height: 16px;  -webkit-animation: blink 0.8s infinite;}
@-webkit-keyframes blink { 0% {background: #222}  50% {background: lime}  100% {background: #222} }

.cursore_free{   width: 16px;  height: 16px;  -webkit-animation: blink 1.8s infinite;}
@-webkit-keyframes blink { 0% {background: yellow}  50% {background: purple}  100% {background: #222} }


</style>
';


echo '

<style>

input[type=range] {
    -webkit-appearance: none;
    background-color: orange;
    background-color: rgba(255, 255, 255, 0.75);

    width: 100%;
    height:20px;
	
	border-radius: 0.25rem;
}



input[type=❞range❞]::-webkit-slider-thumb {
    -webkit-appearance: none;
    background-color: #666;
    opacity: 0.5;
    width: 10px; 
    height: 25px;
}



</style>

';


echo  '

<style>

ol {  list-style: none;  
counter-reset: CONTATORE_OLLI;}
ol li {  counter-increment: CONTATORE_OLLI;}
ol li::before {  
content: counter(CONTATORE_OLLI) ". ";  
background-color:aqua;
color: black;
font-size:75%;
border:solid 0.15rem aqua;border-radius: 100%;
display:inline-block;}	

</style>

';



?>  
<!--
gran parte degli style usati
nel programma

-->

<!-- fin 008 stili css -->



<?php  

// 009

echo '</head>'; ?> 
<!--
qui il tag di chiusura
di elemento head
-->
<!-- fin 009 /head  -->




<?php  

// 010

echo '<body id="w_a_1_1_BODY">'; ?> 
<!-- 
apertura elemento body

-->
<!-- fin 010 body  -->



<?php  

//  011
  
// RESPONSIVITY DESKTOP per alcuni elementi
echo '
<div id="w_a_1_1_RESPONSIVITY_EXTRA"></div> <!--  w_a_1_1_RESPONSIVITY_EXTRA  -->
<script>

if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{

}
else
{
document.getElementById("w_a_1_1_RESPONSIVITY_EXTRA").innerHTML=

`
<style>
 #w_a_1_1_INDEX_CLICK_SVG{width:40px; height:40px; box-shadow:6px 6px 12px black; border-radius:0.50rem;}
 #w_a_1_1_SLIDERS_SVG{width:20px; height:20px; color:purple;}
</style>
`;
};

</script>

'; ?> 
<!--
modo desktop necessita
trattamento speciale
-->
<!-- fin 011 responsivity desktop -->




<?php   

// 012

echo '<main id="w_a_1_1_MAIN">'; ?>
<!--
apertura elemento body

-->
<!-- fin 012 main ini -->


<?php   

// 013

echo '<details id="w_a_1_1_DETAILS_TESTO_DINAMICO" class="ui  segment">'; ?>

<!--
apertura details
T dinamico

-->
<!-- fin 013 details T dinamico -->


<?php   

// 014 


?>
<!-- fin 014 empty -->

<?php  

// 015

// w_a_1_0_2_5_0_SUMMARY_TESTO_DINAMICO

echo '

<summary id="w_a_1_1_SUMMARY_TESTO_DINAMICO" class="fluid ui button segment"  style="width:85%; background-color:initial; color:initial; font-variant:small-caps;">

<span id="w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO" >testo dinamico</span><span>&nbsp;</span>


<svg id="w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO_SVG"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-textarea-t" viewBox="0 0 16 16">
  <path d="M1.5 2.5A1.5 1.5 0 0 1 3 1h10a1.5 1.5 0 0 1 1.5 1.5v3.563a2 2 0 0 1 0 3.874V13.5A1.5 1.5 0 0 1 13 15H3a1.5 1.5 0 0 1-1.5-1.5V9.937a2 2 0 0 1 0-3.874zm1 3.563a2 2 0 0 1 0 3.874V13.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V9.937a2 2 0 0 1 0-3.874V2.5A.5.5 0 0 0 13 2H3a.5.5 0 0 0-.5.5v3.563M2 7a1 1 0 1 0 0 2 1 1 0 0 0 0-2m12 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
  <path d="M11.434 4H4.566L4.5 5.994h.386c.21-1.252.612-1.446 2.173-1.495l.343-.011v6.343c0 .537-.116.665-1.049.748V12h3.294v-.421c-.938-.083-1.054-.21-1.054-.748V4.488l.348.01c1.56.05 1.963.244 2.173 1.496h.386z"/>
</svg>

</summary> <!-- w_a_1_1_SUMMARY_TESTO_DINAMICO -->

';

?>
<!-- 
summary aggiunto a T details

-->

<!-- fin 015 summary t dinamico --> 



<?php  

// 016

echo '<section id="w_a_1_1_TRASH_PUNTINI_ETC">'; ?>
<!--  
apertura section

-->

<!-- fin 016 trash tre puntini -->




<?php  

// 017

// w_a_1_0_3_0_0_TRASH_CAN
echo '
<button id="w_a_1_1_TRASH_CAN" onclick="w_a_1_1_TRASH()">
    <svg id="w_a_1_1_TRASH_CAN_SVG" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="rgba(255,0,0,0.25)" class="bi bi-trash" viewBox="0 0 16 16">
    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
    </svg>
    <i id="w_a_1_1_TRASH_CAN_SEMANTIC_SVG" class="trash alternate outline icon"></i>
</button> <!-- w_a_1_1_TRASH_CAN -->
';
?> 
<!-- 
button associato a
function javascript
lasciato per back
compatability

-->
<!-- fin 017 trash can -->




<?php 

//  018

// w_a_1_0_3_5_0_TRE_PUNTINI
echo '
<article id="w_a_1_1_TRE_PUNTINI" style="display:inline-block;">
 <span id="w_a_1_1_TRE_PUNTINI_TEXT">...</span>
 <aside class="ui left pointing red basic label">
 <svg id="w_a_1_1_TRE_PUNTINI_TRIANGLE_SVG" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="red" class="bi bi-exclamation-triangle" viewBox="0 0 16 16">
   <path d="M7.938 2.016A.13.13 0 0 1 8.002 2a.13.13 0 0 1 .063.016.146.146 0 0 1 .054.057l6.857 11.667c.036.06.035.124.002.183a.163.163 0 0 1-.054.06.116.116 0 0 1-.066.017H1.146a.115.115 0 0 1-.066-.017.163.163 0 0 1-.054-.06.176.176 0 0 1 .002-.183L7.884 2.073a.147.147 0 0 1 .054-.057zm1.044-.45a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566z"/>
   <path d="M7.002 12a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 5.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0z"/>
 </svg> 
 <i  id="w_a_1_1_TRE_PUNTINI_TRIANGLE_SEMANTIC_SVG" class="exclamation triangle icon"></i> <!-- w_a_1_1_TRE_PUNTINI_TRIANGLE_SEMANTIC_SVG -->
 </aside> 
</article> <!-- w_a_1_1_TRE_PUNTINI -->
';
?> 
<!--  
elemento lasciato per
back compatibility

-->
<!-- fin 018  tre puntini -->


<?php  

// 019

// w_a_1_0_4_0_0_DARKMODE
echo '
<article id="w_a_1_1_DARKMODE" onclick="w_a_1_1_DARKMODE()" style="display:inline-block;">
  <svg id="w_a_1_1_DARKMODE_SVG" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="rgba(128, 128, 128, 0.5)" class="bi bi-ban-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M2.71 12.584c.218.252.454.488.706.707l9.875-9.875a7.034 7.034 0 0 0-.707-.707l-9.875 9.875Z"/>
</svg>
</article> <!-- w_a_1_1_DARKMODE -->
';
?> 
<!--
attiva funzione javascript

 -->
<!--fin  019 darkmode  -->



<?php   

// 020

// w_a_1_0_4_5_0_LIGHTMODE
echo '
<article id="w_a_1_1_LIGHTMODE"  onclick="w_a_1_1_LIGHTMODE()" style="display:none;">
 <svg id="w_a_1_1_LIGHTMODE_SVG" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="rgba(128, 128, 128, 0.5)" class="bi bi-ban" viewBox="0 0 16 16">
  <path d="M15 8a6.973 6.973 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
</svg>
</article> <!-- w_a_1_1_LIGHTMODE -->
';
?> 
<!-- 
attiva funzione javascript

-->
<!-- fin 020 lightmode -->




<?php     

//  021

// w_a_1_0_5_0_0_BACKDOOR_FORM_SI
echo '
<article id="w_a_1_1_BACKDOOR_FORM_SI" onclick="w_a_1_1_BACKDOOR_FORM_SI()">
<svg id="w_a_1_1_BACKDOOR_FORM_SI_SVG" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgba(255, 215, 0, 1)" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
  <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1m9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1m0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0z"/>
</svg>
</article> <!-- w_a_1_1_BACKDOOR_FORM_SI -->
';
?> 
<!--
attiva funzione javascript
form si
-->
<!-- fin 021 backdoor form si -->



<?php   

//  022

// w_a_1_0_5_5_0_BACKDOOR_FORM_NO
echo '
<article id="w_a_1_1_BACKDOOR_FORM_NO"  onclick="w_a_1_1_BACKDOOR_FORM_NO()" style="display:none;">
<svg id="w_a_1_1_BACKDOOR_FORM_NO_SVG" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgba(173, 216, 230, 1)" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
  <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1m9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1m0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0z"/>
</svg>
</article> <!-- w_a_1_1_BACKDOOR_FORM_NO -->
';
?>
<!--
attiva funzione javascript form no
--> 
<!-- fin 022 backdoor form no  -->



<?php   

// 023

// w_a_1_0_6_0_0_SALVATAGGIO_DI_TIPO_CIF
echo '

<details id="w_a_1_1_SALVATAGGIO_DI_TIPO_CIF" onclick="w_a_1_1_SALVATAGGIO_CIF()" STYLE="DISPLAY:INITIAL;">
<summary id="w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SUMMARY">x</summary>

<svg  id="w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SVG" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-database-add" viewBox="0 0 16 16">
  <path d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m.5-5v1h1a.5.5 0 0 1 0 1h-1v1a.5.5 0 0 1-1 0v-1h-1a.5.5 0 0 1 0-1h1v-1a.5.5 0 0 1 1 0"/>
  <path d="M12.096 6.223A4.92 4.92 0 0 0 13 5.698V7c0 .289-.213.654-.753 1.007a4.493 4.493 0 0 1 1.753.25V4c0-1.007-.875-1.755-1.904-2.223C11.022 1.289 9.573 1 8 1s-3.022.289-4.096.777C2.875 2.245 2 2.993 2 4v9c0 1.007.875 1.755 1.904 2.223C4.978 15.71 6.427 16 8 16c.536 0 1.058-.034 1.555-.097a4.525 4.525 0 0 1-.813-.927C8.5 14.992 8.252 15 8 15c-1.464 0-2.766-.27-3.682-.687C3.356 13.875 3 13.373 3 13v-1.302c.271.202.58.378.904.525C4.978 12.71 6.427 13 8 13h.027a4.552 4.552 0 0 1 0-1H8c-1.464 0-2.766-.27-3.682-.687C3.356 10.875 3 10.373 3 10V8.698c.271.202.58.378.904.525C4.978 9.71 6.427 10 8 10c.262 0 .52-.008.774-.024a4.525 4.525 0 0 1 1.102-1.132C9.298 8.944 8.666 9 8 9c-1.464 0-2.766-.27-3.682-.687C3.356 7.875 3 7.373 3 7V5.698c.271.202.58.378.904.525C4.978 6.711 6.427 7 8 7s3.022-.289 4.096-.777M3 4c0-.374.356-.875 1.318-1.313C5.234 2.271 6.536 2 8 2s2.766.27 3.682.687C12.644 3.125 13 3.627 13 4c0 .374-.356.875-1.318 1.313C10.766 5.729 9.464 6 8 6s-2.766-.27-3.682-.687C3.356 4.875 3 4.373 3 4"/>
</svg>
<!-- w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SVG -->

</details> <!-- w_a_1_1_SALVATAGGIO_DI_TIPO_CIF -->

';

?> 
<!--
funzione javscript (obsoleta)
-->
<!-- fin 023 salvataggio tipo cif  -->





<?php    


//  024


// w_a_1_0_6_5_0_UP_DOWN_NELLA_PAGINA
echo '
<details id="w_a_1_1_UP_DOWN_NELLA_PAGINA"> 
<summary></summary>
<a id="w_a_1_1_UP_NELLA_PAGINA" href="#">
<svg id="w_a_1_1_UP_NELLA_PAGINA_SVG" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
  <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
</svg> <!-- w_a_1_1_UP_NELLA_PAGINA_SVG -->
</a> <!-- w_a_1_1_UP_NELLA_PAGINA -->
<br>
<a id="w_a_1_1_DOWN_NELLA_PAGINA"  href="#fine">
<svg id="w_a_1_1_DOWN_NELLA_PAGINA_SVG"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
  <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
</svg> <!-- w_a_1_1_DOWN_NELLA_PAGINA_SVG -->
</a> <!-- w_a_1_1_DOWN_NELLA_PAGINA -->
</details> <!-- w_a_1_1_UP_DOWN_NELLA_PAGINA -->
';
?>
<!--
navigazione interna pagina up down

-->
<!-- fin 024 up down pagina -->





<?php   

//  025
  
// w_a_1_0_7_0_0_DARK_LIGHT_ETC_JS
echo '

<!-- funzioni javascript ini -->
<script>
 function w_a_1_1_DARKMODE(){
    // alert("w_a_1_1_DARKMODE");
    document.querySelector("#w_a_1_1_DARKMODE").style.display="none";
    document.querySelector("#w_a_1_1_LIGHTMODE").style.display="inline-block";    

    document.querySelector("#w_a_1_1_area_immissione_testo__").style.backgroundColor="navy";    
    document.querySelector("#w_a_1_1_area_immissione_testo__").style.backgroundColor="rgba(0, 20, 60, 1)";
    document.querySelector("#w_a_1_1_area_immissione_testo__").style.color="white";

     }
     
  function w_a_1_1_LIGHTMODE(){
    // alert("w_a_1_1_LIGHTMODE");
    document.querySelector("#w_a_1_1_DARKMODE").style.display="inline-block";
    document.querySelector("#w_a_1_1_LIGHTMODE").style.display="none";    
    
    document.querySelector("#w_a_1_1_area_immissione_testo__").style.backgroundColor="initial";
    document.querySelector("#w_a_1_1_area_immissione_testo__").style.color="initial";
     
     }

function w_a_1_1_BACKDOOR_FORM_SI(){
// alert("w_a_1_1_BACKDOOR_FORM_SI");

document.querySelector("#w_a_1_1_BACKDOOR_FORM_SI").style.display="none";
document.querySelector("#w_a_1_1_BACKDOOR_FORM_NO").style.display="inline-block";

document.querySelector("#w_a_1_1_SSAP__").style.display="block";
document.querySelector("#w_a_1_1_SSAP__").style.border="solid 0.00rem purple";

document.querySelector("#w_a_1_1_post_uno__").style.width="90%";
document.querySelector("#w_a_1_1_post_due__").style.width="90%";
document.querySelector("#w_a_1_1_post_tre__").style.width="90%";
document.querySelector("#w_a_1_1_post_qua__").style.width="90%";

document.querySelector("#w_a_1_1_post_uno__").style.marginTop="1.00rem";
document.querySelector("#w_a_1_1_post_due__").style.marginTop="1.00rem";
document.querySelector("#w_a_1_1_post_tre__").style.marginTop="1.00rem";
document.querySelector("#w_a_1_1_post_qua__").style.marginTop="1.00rem";
document.querySelector("#w_a_1_1_post_uno__").style.marginBottom="1.00rem";
document.querySelector("#w_a_1_1_post_due__").style.marginBottom="1.00rem";
document.querySelector("#w_a_1_1_post_tre__").style.marginBottom="1.00rem";
document.querySelector("#w_a_1_1_post_qua__").style.marginBottom="1.00rem";



};

function w_a_1_1_BACKDOOR_FORM_NO(){
//alert("w_a_1_1_BACKDOOR_FORM_NO");

document.querySelector("#w_a_1_1_BACKDOOR_FORM_SI").style.display="inline-block";
document.querySelector("#w_a_1_1_BACKDOOR_FORM_NO").style.display="none";

document.querySelector("#w_a_1_1_SSAP__").style.display="none";
document.querySelector("#w_a_1_1_SSAP__").style.display="block";


document.querySelector("#w_a_1_1_post_uno__").style.width="20%";
document.querySelector("#w_a_1_1_post_due__").style.width="20%";
document.querySelector("#w_a_1_1_post_tre__").style.width="20%";
document.querySelector("#w_a_1_1_post_qua__").style.width="20%";



};


function GO_UP(){
alert("GO_UP()");

};

function GO_DOWN(){
alert("GO_DOWN()");


};


function w_a_1_1_INDEX(){};


</script>
<!-- funzioni javascript fin -->
';
?> 
<!-- 
set di
funzioni javascript
per backdoor 
 -->
<!-- fin 025  dark light fn js  -->



<?php   

//  026


echo '
<script>
function w_a_1_1_SALVATAGGIO_CIF(){

    document.location.replace(w_a_1_1_JAS_DIR_noyek+"/"+w_a_1_1_JAS_DIR_savecif+"/"+w_a_1_1_JAS_FIL_savecif);
    
    };
</script>
';
?>
<!--
funzione javascript (obsoleta)
-->
<!-- fin 026 salvataggio cif fn js -->




<?php    

//  027

// w_a_1_0_8_0_0_PRENDI_CONFETTURA
 $w_a_1_1_dirDoveConfetturaCIF = './'.$w_a_1_1_PHP_DIR_noyek.'/'.$w_a_1_1_PHP_DIR_yek.'/';
 $w_a_1_1_PrendiFileConfettura=$w_a_1_1_dirDoveConfetturaCIF . $w_a_1_1_PHP_FIL_yek ;

 $w_a_1_1_InclusaConfettura=0;
 if( file_exists($w_a_1_1_PrendiFileConfettura)){
 // The Mad Yak
 include($w_a_1_1_PrendiFileConfettura);
 $w_a_1_1_InclusaConfettura=1; 
 } else{};

?> 
<!-- 
configurazione per
backdoor 
-->
<!-- fin 027  confettura  -->





<?php   

//  028

// w_a_1_0_8_5_0_TRASH_JS
echo'
<script>
    //
    // unused
    //
function w_a_1_1_TRASH(){
    //  alert("./w_a_0_0_noyek/w_a_0_0_trash.php");
    //  document.location.replace("./w_a_0_0_noyek/w_a_0_0_trash.php");
    //  alert("w_a_0_0_trash");
    //     
    };
</script>
';

?> 
<!--
funzione javascript (obsoleta)
-->
<!-- fin 028 trash fn js unused -->



<?php   

// 029

echo '</section>'; ?> 
<!-- chiusura elemento section -->
<!-- fin 029 section -->


<?php  

//  030 

echo '<section id="w_a_1_1_FORM_X_INVIA__"  class="ui  segment"></section>'; ?> 
<!--
questa section  dgebi
riceve da javascript elementi
costruttivi del form principale
di gestione dei dati in ingresso

-->

<!-- fin 030 form_x_invia inin fin -->




<?php 

// 031


// w_a_1_0_9_0_0_FORM_X_INVIA___JS/

echo '
<script>
function w_a_1_1_FORM_X_INVIA(){
document.getElementById("w_a_1_1_FORM_X_INVIA__").innerHTML=`'; // apertura back tick
echo '<form id="w_a_1_1_FORM_X_INVIA_AES__" action="funicoty13.php" method="POST">';



// qui immissione dati e ctrl like
    echo '
    
        <article id="w_a_1_1_SSAP__">
        <input id="w_a_1_1_post_uno__" type="password" name="w_a_1_1_post_uno" placeholder="uno">
        <input id="w_a_1_1_post_due__" type="password" name="w_a_1_1_post_due" placeholder="due">
        <input id="w_a_1_1_post_tre__" type="password" name="w_a_1_1_post_tre" placeholder="tre">
        <input id="w_a_1_1_post_qua__" type="password" name="w_a_1_1_post_qua" placeholder="qua">
    
        </article>
    
    ';
    



echo '<section id="w_a_1_1_area_immissione_testo_invia_container__">';


// qui viene inserito il testo
    echo '
    
        <textarea id="w_a_1_1_area_immissione_testo__" name="w_a_1_1_questo_est_un_testo" placeholder="Inserisci il tuo testo qui" rows="" cols=""  ></textarea> <!-- w_a_1_1_area_immissione_testo__ -->    
    
    
    ';



echo '<article id="w_a_1_1_invia_testo_container__" class="">';




// ATTENZIONE : classing seguente id
// per adesso styling
// ||
// ||
// ||
// \/
echo '<input id="w_a_1_1_invia_testo_button__" type="submit" value="invia"  style="width:100%; background-color:white; color:green; border-color:transparent; overflow:auto!important;">';
// /\
// ||
// ||
// ||

// echo '</button> <!-- w_a_1_1_invia_testo_button__ -->';

echo '</article> <!-- w_a_1_1_invia_testo_container__ -->';

echo '</section> <!-- w_a_1_1_area_immissione_testo_invia_container__ -->';


echo '<article id="w_a_1_1_INDEX_WRAP">';

echo '<button id="w_a_1_1_INDEX_CLICK" onclick="w_a_1_1_INDEX()">';


echo '

    <svg id="w_a_1_1_INDEX_CLICK_SVG" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
    <path d="M11 2H9v3h2z"/>
    <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
    </svg> 

';


echo '</button> <!-- w_a_1_1_INDEX_CLICK -->';

echo '</article> <!-- w_a_1_1_INDEX_WRAP -->';

echo '</form> <!-- w_a_1_1_FORM_X_INVIA_AES__ -->`;'; // chiusura back tick molto importante

echo '
 }; 
w_a_1_1_FORM_X_INVIA(); // function call back
</script>
';

?> 
<!--
funzione javascript
costruzione del form
per invio dati per il
trattamento

-->
<!--  fin 031 FORM_X_INVIA___JS -->



<?php 

//  032


// w_a_1_0_9_5_0_DIGITAL_IDENTITY
// valori specchietto default
 $w_a_1_1_yek ='a b c';
 $w_a_1_1_cedx='rinaldo rasa';
 $w_a_1_1_cedy='rasa rinaldo';

if($w_a_1_1_InclusaConfettura===1){
 

 $w_a_1_1_cedx=$unoa;
 $w_a_1_1_cedy=$dueb;
 $w_a_1_1_yek= $trec;
 $quad=$quad;
 
}
else
{

 $w_a_1_1_yek ='a b c';
 $w_a_1_1_cedx='rinaldo rasa';
 $w_a_1_1_cedy='rasa rinaldo';
 $quad='1234';

};






 $w_a_1_1_ESISTE_WATE='./'.$w_a_1_1_PHP_DIR_noyek.'/'.$w_a_1_1_PHP_FIL_wate;


// i dati ctrl like
 $w_a_1_1_post_uno= filter_input(INPUT_POST, 'w_a_1_1_post_uno',  FILTER_SANITIZE_STRING, FILTER_FLAG_NO_STRIP_SPACES);
 $w_a_1_1_post_due= filter_input(INPUT_POST, 'w_a_1_1_post_due',  FILTER_SANITIZE_STRING, FILTER_FLAG_NO_STRIP_SPACES);
 $w_a_1_1_post_tre= filter_input(INPUT_POST, 'w_a_1_1_post_tre',  FILTER_SANITIZE_STRING, FILTER_FLAG_NO_STRIP_SPACES);




// ???
$w_a_1_1_FLAG_DI_LETTURA_FREE=0;
if( ($w_a_1_1_post_uno==="") and ($w_a_1_1_post_due==="") and ($w_a_1_1_post_tre==="") ){

$w_a_1_1_FLAG_DI_LETTURA_FREE=1;
} else{
$w_a_1_1_FLAG_DI_LETTURA_FREE=0;

}; // if



// controllo wate
 if ( ($w_a_1_1_post_tre===$w_a_1_1_yek) )
 {
 $w_a_1_1_trash=fopen('./'.$w_a_1_1_PHP_DIR_noyek.'/'.$w_a_1_1_PHP_FIL_wate,"w"); fclose($w_a_1_1_trash);
 } else  { };


    if(file_exists($w_a_1_1_ESISTE_WATE))
    {

    echo '<div id="w_a_1_1_SEMAFORO_GREEN" class="ui mini  empty circular label">&nbsp;</div>';       
    echo '<script>document.querySelector("#w_a_1_1_SSAP__").style.display="none";</script>';
    echo '<script>document.querySelector("#w_a_1_1_INDEX_CLICK").style.color="green";</script>';
    echo '<script>document.querySelector("#w_a_1_1_TRE_PUNTINI").style.color="green";</script>';
    echo '<script>document.querySelector("#w_a_1_1_TRE_PUNTINI aside").style.display="none";</script>';
    $w_a_1_1_SEMAFORO=1;

    }
    else
    {

    echo '<div id="w_a_1_1_SEMAFORO_RED" class="ui mini  empty circular label">&nbsp;</div>';
    echo '<script>document.querySelector("#w_a_1_1_SSAP__").style.display="block";</script>'; 
    echo '<script>document.querySelector("#w_a_1_1_INDEX_CLICK").style.color="red";</script>';
    echo '<script>document.querySelector("#w_a_1_1_TRE_PUNTINI").style.color="red";</script>';
    $w_a_1_1_SEMAFORO=0;


    }; // if

?> 
<!--
elementi per accreditamento
e recupero informazioni
-->
<!--  fin 032 digital identity -->





<?php   

//  033

// salva file ini

$w_a_1_1_TestoGrezzoInviato = $_POST["w_a_1_1_questo_est_un_testo"];



if ($w_a_1_1_TestoGrezzoInviato===""){}
else 
{
/* Esiste un testo da memorizzare */
/* Sanitizzazione della string */

/*
 $w_a_1_1_STRINGA_NUOVA = str_replace("<", "&#5176;", $w_a_1_1_TestoGrezzoInviato);
 $w_a_1_1_Testo0= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace(">", "&#5171;", $w_a_1_1_Testo0); 
 $w_a_1_1_Testo1= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace('\'', "&#10076;", $w_a_1_1_Testo1); 
 $w_a_1_1_Testo2= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace("\"", "&#10078;", $w_a_1_1_Testo2);
 
  $w_a_1_1_TestoInviatoSanitizzato= $w_a_1_1_STRINGA_NUOVA;

*/



 $w_a_1_1_STRINGA_NUOVA = str_replace("<", "&#5176;", $w_a_1_1_TestoGrezzoInviato);
 $w_a_1_1_Testo0= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace(">", "&#5171;", $w_a_1_1_Testo0); 
 $w_a_1_1_Testo1= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace('\'', "&#10076;", $w_a_1_1_Testo1); 
 $w_a_1_1_Testo2= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace("\"", "&#10078;", $w_a_1_1_Testo2);
 
 $w_a_1_1_TestoInviatoSanitizzato= $w_a_1_1_STRINGA_NUOVA;


// il file qui sotto diventa un argomento per la funzione php
 $w_a_1_1_SALVA_IL_FILE_SANITIZZATO_DA_INPUT=$w_a_1_1_TestoInviatoSanitizzato;





// il file va salvato assolutamente
// la mega funzione con molti if nested
// possibile fonte di bug insidiosi
 function w_a_1_1_Salva_FILE_SANITIZZATO_DA_INPUT(
 $w_a_1_1_SALVA_IL_FILE_SANITIZZATO_DA_INPUT, 
 $w_a_1_1_cedx, 
 $w_a_1_1_cedy, 
 $w_a_1_1_yek, 
 $w_a_1_1_PHP_DIR_decifra, 
 $w_a_1_1_PHP_DIR_cifrato){


// check argomenti

// alias
 $w_a_1_1_TestoInviatoSanitizzato = $w_a_1_1_SALVA_IL_FILE_SANITIZZATO_DA_INPUT;


    $w_a_1_1_DirectoryCorrente = getcwd();
    
    $w_a_1_1_DirectorySalvaTxt = $w_a_1_1_PHP_DIR_decifra;

    $w_a_1_1_DirectorySalvaTxtQUICK = $w_a_1_1_PHP_DIR_cifrato;



 // se la cartella non esiste viene creata
 if(!file_exists($w_a_1_1_DirectorySalvaTxt)){ mkdir($w_a_1_1_DirectorySalvaTxt); } // !file_exists($w_a_1_1_DirectorySalvaTxt)

 $w_a_1_1_t=time(); 
 
 $w_a_1_1_Percorso=$w_a_1_1_DirectoryCorrente; 
 
 $w_a_1_1_Prefisso = date("Y_m_d",$w_a_1_1_t); 


 $w_a_1_1_Postfisso = time(); 
 $w_a_1_1_Postfisso = $w_a_1_1_Postfisso . "_".rand(0, 10000000);


 $w_a_1_1_Estensione = $w_a_1_1_DirectorySalvaTxt;




 $w_a_1_1_EstensioneQUICK = $w_a_1_1_DirectorySalvaTxtQUICK;
 




 $w_a_1_1_NomeFile = $w_a_1_1_Percorso.'/'.$w_a_1_1_DirectorySalvaTxt.'/'.$w_a_1_1_Prefisso."_".$w_a_1_1_Postfisso.".".$w_a_1_1_Estensione;


 $w_a_1_1_directory= $w_a_1_1_Percorso.'/'.$w_a_1_1_DirectorySalvaTxt.'/';



//
// PERCORSO QUICK CIF unused
//
$Percorso_QUICK_CIF= $w_a_1_1_Percorso.'/'.$w_a_1_1_DirectorySalvaTxtQUICK.'/'.$w_a_1_1_Prefisso."_".$w_a_1_1_Postfisso.".". $w_a_1_1_EstensioneQUICK;



 // esegue il conteggio dei file nella directory
 $w_a_1_1_files = glob($w_a_1_1_directory . '/*.' . $w_a_1_1_Estensione);
 $w_a_1_1_n = count($w_a_1_1_files);
 
  
  // lettura ultimo file registrato
if( $w_a_1_1_n > 0){

 $w_a_1_1_Pre=$w_a_1_1_n-1;

 $w_a_1_1_PreTesto=file_get_contents($w_a_1_1_files[$w_a_1_1_Pre]);


// concatenazione tra pre e aggiunta
$w_a_1_1_TestoInviatoSanitizzato=$w_a_1_1_PreTesto.$w_a_1_1_TestoInviatoSanitizzato;







    // stoppare la proliferazione
    if( $w_a_1_1_n > 4 ){ 

    $w_a_1_1_ListaPossibiliFileDaCancellare=scandir( $w_a_1_1_directory );
    //occorre aggiungere il percorso iniziale
    $w_a_1_1_FileDaSALVAGUARDARE_0=$w_a_1_1_DirectorySalvaTxt.'/'.$w_a_1_1_ListaPossibiliFileDaCancellare[0];
    $w_a_1_1_FileDaSALVAGUARDARE_1=$w_a_1_1_DirectorySalvaTxt.'/'.$w_a_1_1_ListaPossibiliFileDaCancellare[1];
    
    $w_a_1_1_FileDaCancellare = $w_a_1_1_DirectorySalvaTxt.'/'.$w_a_1_1_ListaPossibiliFileDaCancellare[2];

    //
    unset( $w_a_1_1_FileDaSALVAGUARDARE_0);
    //
    unset( $w_a_1_1_FileDaSALVAGUARDARE_1);
    //
    unlink($w_a_1_1_FileDaCancellare);

    } else {};  // if $w_a_1_1_n > 4








// superfluous
    if (!file_exists($w_a_1_1_NomeFile)) 
    {
    $w_a_1_1_SalvaFile=fopen($w_a_1_1_NomeFile, "w");
    fclose($w_a_1_1_SalvaFile);
    };  //  (!file_exists($w_a_1_1_NomeFile)) ?







    // viene aggiornato il file
    if (file_exists($w_a_1_1_NomeFile)) 
    {


    $w_a_1_1_SalvaFile=fopen($w_a_1_1_NomeFile, "a");
    fwrite($w_a_1_1_SalvaFile, $w_a_1_1_TestoInviatoSanitizzato);
    fclose($w_a_1_1_SalvaFile);

    echo '<div style="text-align:center; box-shadow:6px 6px 12px pink;" class="ui pink segment">
    <button class="ui pink big button">Aggiunto file!</button></div>';
   
    
    };  //  file_exists($w_a_1_1_NomeFile)





};  // if $w_a_1_1_n > 0



 };  
 w_a_1_1_Salva_FILE_SANITIZZATO_DA_INPUT(
 $w_a_1_1_SALVA_IL_FILE_SANITIZZATO_DA_INPUT, 
 $w_a_1_1_cedx, 
 $w_a_1_1_cedy, 
 $w_a_1_1_yek ,
 $w_a_1_1_PHP_DIR_decifra,
 $w_a_1_1_PHP_DIR_cifrato
 );  // w_a_1_1_Salva_FILE_SANITIZZATO_DA_INPUT function call back



}; // if $w_a_1_1_TestoGrezzoInviato



// inizia lettura free, dopoche si salva decifrato
// si stabilisce un modo per leggerlo
// precondizione uno due tre empty

if ($w_a_1_1_FLAG_DI_LETTURA_FREE===1){


// linea unica dgebi unused
echo '<div id="w_a_1_1_DIGITAL_IDENTITY_FREE_READING" style="display:none;"></div> <!-- w_a_1_1_DIGITAL_IDENTITY_FREE_READING -->';
echo '<script>';
echo 'document.querySelector("#w_a_1_1_DIGITAL_IDENTITY_FREE_READING").style.position="fixed";';
echo 'document.querySelector("#w_a_1_1_DIGITAL_IDENTITY_FREE_READING").style.top="0.050rem";';
echo 'document.querySelector("#w_a_1_1_DIGITAL_IDENTITY_FREE_READING").style.left="0.00rem";';
echo 'document.querySelector("#w_a_1_1_DIGITAL_IDENTITY_FREE_READING").style.fontSize="2.75rem";';
echo 'document.querySelector("#w_a_1_1_DIGITAL_IDENTITY_FREE_READING").style.display="block";';
echo 'document.querySelector("#w_a_1_1_DIGITAL_IDENTITY_FREE_READING").style.color="rgba(135, 206, 235, 1)";';
echo 'document.querySelector("#w_a_1_1_DIGITAL_IDENTITY_FREE_READING").style.zIndex="10000000";';
echo '';
echo '';
echo '</script>';



$w_a_1_1_DecaffeinatedDirectoryTextarea = $w_a_1_1_PHP_DIR_decifra;




$w_a_1_1_ElencaFileDecaffeinatedDirectoryTextarea = scandir($w_a_1_1_DecaffeinatedDirectoryTextarea);

$w_a_1_1_ContaFileDecaffeinatedDirectoryTextarea = count($w_a_1_1_ElencaFileDecaffeinatedDirectoryTextarea);


$w_a_1_1_NomeUltimoFileDecaffeinatedDirectoryTextarea = $w_a_1_1_ElencaFileDecaffeinatedDirectoryTextarea[$w_a_1_1_ContaFileDecaffeinatedDirectoryTextarea-1];


$w_a_1_1_DoveNomeUltimoFileDecaffeinatedDirectoryTextarea='./'.$w_a_1_1_DecaffeinatedDirectoryTextarea.'/'.$w_a_1_1_NomeUltimoFileDecaffeinatedDirectoryTextarea;



$w_a_1_1_ContenutoNomeUltimoFileDecaffeinatedDirectoryTextarea = file_get_contents($w_a_1_1_DoveNomeUltimoFileDecaffeinatedDirectoryTextarea);






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






// si prende il valore della casella ctrl like
$w_a_1_1_ControlloValoreNumerico = filter_input(INPUT_POST, 'w_a_1_1_post_qua', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_STRIP_SPACES);

/* || */
/* || */
/* || */
/* || */
/* || */
/* || */
/* || */
/* || */
/* \/ */
/***********************************************/
/***     quad                                ***/
/***     CONTROLLO                           ***/
/***     VALORE NUMERICO                     ***/
/***                                         ***/
// si controlla il valore della casella ctrl like
if ($w_a_1_1_ControlloValoreNumerico===$quad){

echo '<script> document.querySelector("#w_a_1_1_DIGITAL_IDENTITY_FREE_READING").classList.add("cursore_free"); </script>';


$w_a_1_1_AES_256_CBC_INDIRIZZO_CARTELLA_FILE_DECIFRATO = './'.$w_a_1_1_PHP_DIR_decifra.'/';




$w_a_1_1_AES_256_CBC_ELENCO_DEI_FILE = scandir($w_a_1_1_AES_256_CBC_INDIRIZZO_CARTELLA_FILE_DECIFRATO);
$w_a_1_1_AES_256_CBC_CONTATORE_FILES =count($w_a_1_1_AES_256_CBC_ELENCO_DEI_FILE);
$w_a_1_1_AES_256_CBC_NOME_ULTIMO_FILE=$w_a_1_1_AES_256_CBC_ELENCO_DEI_FILE[$w_a_1_1_AES_256_CBC_CONTATORE_FILES-1];



$w_a_1_1_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO = $w_a_1_1_AES_256_CBC_INDIRIZZO_CARTELLA_FILE_DECIFRATO . $w_a_1_1_AES_256_CBC_NOME_ULTIMO_FILE ;



$w_a_1_1_AES_256_CBC_CONTENUTO_DEL_FILE_DECIFRATO = file_get_contents($w_a_1_1_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO);



$w_a_1_1_AES_256_CBC_plaintext = $w_a_1_1_AES_256_CBC_CONTENUTO_DEL_FILE_DECIFRATO ;




$w_a_1_1_AES_256_CBC_key = $w_a_1_1_yek;




 // questo toolbox AES clonato
 // fa parte della dotazione standard
 // di PHP e non richiede CDN
 
 // Funzione per cifrare una stringa utilizzando AES-256-CBC
 function w_a_1_1_AES_256_CBC_encrypt($w_a_1_1_AES_256_CBC_plaintext, $w_a_1_1_AES_256_CBC_key) {
 $method = "AES-256-CBC";
 $iv = openssl_random_pseudo_bytes(16);
 $w_a_1_1_AES_256_CBC_ciphertext = openssl_encrypt($w_a_1_1_AES_256_CBC_plaintext, $method, $w_a_1_1_AES_256_CBC_key, OPENSSL_RAW_DATA, $iv);
 return base64_encode($iv . $w_a_1_1_AES_256_CBC_ciphertext);
 };
 
 // Funzione per decifrare una stringa cifrata utilizzando AES-256-CBC
 function w_a_1_1_AES_256_CBC_decrypt($w_a_1_1_AES_256_CBC_ciphertext, $w_a_1_1_AES_256_CBC_key) {
 $w_a_1_1_AES_256_CBC_ciphertext = base64_decode($w_a_1_1_AES_256_CBC_ciphertext);
 $iv = substr($w_a_1_1_AES_256_CBC_ciphertext, 0, 16);
 $w_a_1_1_AES_256_CBC_ciphertext = substr($w_a_1_1_AES_256_CBC_ciphertext, 16);
 $w_a_1_1_AES_256_CBC_plaintext = openssl_decrypt($w_a_1_1_AES_256_CBC_ciphertext, "AES-256-CBC", $w_a_1_1_AES_256_CBC_key, OPENSSL_RAW_DATA, $iv);
 return $w_a_1_1_AES_256_CBC_plaintext;
 };
 



 // pezzo di codice convalidante enc dec
 // encrypt
 $w_a_1_1_AES_256_CBC_ENCRIPTED=w_a_1_1_AES_256_CBC_encrypt($w_a_1_1_AES_256_CBC_plaintext, $w_a_1_1_AES_256_CBC_key);

 // decrypted
 $w_a_1_1_AES_256_CBC_DENCRIPTED=w_a_1_1_AES_256_CBC_decrypt($w_a_1_1_AES_256_CBC_ENCRIPTED, $w_a_1_1_AES_256_CBC_key);




/*******************************/
/*** output lettura free     ***/
/***                         ***/
/*******************************/

 echo '<div id="w_a_1_1_CONTENUTO_DENCRIPTED" class="preverve">';
 echo     $w_a_1_1_AES_256_CBC_DENCRIPTED;
 echo '</div>';

 $w_a_1_1_LunghezzaDelFile = filesize($w_a_1_1_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO);
 echo '<div style="margin-top:2.5rem;">';
 echo ''.$w_a_1_1_LunghezzaDelFile.' Bytes';
 echo '</div>';



// sezione caffeina extra strong ini
if(   (file_exists('./'.$w_a_1_1_PHP_DIR_noyek.'/'.$w_a_1_1_PHP_FIL_wate)) or ($w_a_1_1_post_uno===$w_a_1_1_cedx) or ($w_a_1_1_post_due===$w_a_1_1_cedy)   ){ 

// asterisco verde sotto dim file
echo '<div style="color:green;">*</div>';



$w_a_1_1_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO_X_CIFRATO = $w_a_1_1_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO;



// esegue conversione del nome cartella file 
$w_a_1_1_AES_256_CBC_INDIRIZZO_FILE_CIFRATO = str_replace($w_a_1_1_PHP_DIR_decifra, $w_a_1_1_PHP_DIR_cifrato, $w_a_1_1_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO_X_CIFRATO);












    //  save caffeina
    $w_a_1_1_SALVA_IL_CONTENUTO_ENCRIPTED=fopen($w_a_1_1_AES_256_CBC_INDIRIZZO_FILE_CIFRATO,"w");
    fwrite($w_a_1_1_SALVA_IL_CONTENUTO_ENCRIPTED, $w_a_1_1_AES_256_CBC_ENCRIPTED);
    fclose($w_a_1_1_SALVA_IL_CONTENUTO_ENCRIPTED);


    $w_a_1_1_LaDirectoryDeiFileCriptati='./' . w_a_1_1_PHP_DIR_cifrato;
    $w_a_1_1_ListaDeiFileCriptati=scandir($w_a_1_1_LaDirectoryDeiFileCriptati);    
    $w_a_1_1_QuantiSonoIFileCriptati=count($w_a_1_1_ListaDeiFileCriptati);

    $w_a_1_1_FileDaCancellare = $w_a_1_1_LaDirectoryDeiFileCriptati."/".$w_a_1_1_ListaDeiFileCriptati[2];

    // controllo proliferazione

    if($w_a_1_1_QuantiSonoIFileCriptati>7){ 
    // cancella se supera
    unlink($w_a_1_1_FileDaCancellare);
    }else{};  // if w_a_1_1_QuantiSonoIFileCriptati


}else{}; // if wate or uno or due


// sezione caffeina extra strong fin


}else{};  //  if $w_a_1_1_ControlloValoreNumerico

// echo '<br>';
// echo 'w_a_1_1_FLAG_DI_LETTURA_FREE= ' . $w_a_1_1_FLAG_DI_LETTURA_FREE;




echo '';


}else{
    
// echo 'w_a_1_1_FLAG_DI_LETTURA_FREE= ' . $w_a_1_1_FLAG_DI_LETTURA_FREE;

};  // if $w_a_1_1_FLAG_DI_LETTURA_FREE


// salva file fin
?> 
<!--
CORE DEL PROGRAMMA
qui sono elementi
fondamentali per
gestione dati sanitizzazione
salvataggio

-->
<!--  fin 033 salva file nucleo core del programma   -->



  
<?php 

// 034

// w_a_1_1_5_0_0_LetturaCIF

// il pezzo di codice precedente
// ha  salvato caffeina ora si
// tratta di leggere il file

// LetturaCIF
// attenzione: qua ha un alias

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
 function encryptCIF($w_a_1_1_plaintext, $w_a_1_1_key) {
 $method = "AES-256-CBC";
 $iv = openssl_random_pseudo_bytes(16);
 $w_a_1_1_ciphertext = openssl_encrypt($w_a_1_1_plaintext, $method, $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
 return base64_encode($iv . $w_a_1_1_ciphertext);
 };
 
 // Funzione per decifrare una stringa cifrata utilizzando AES-256-CBC
 function decryptCIF($w_a_1_1_ciphertext, $w_a_1_1_key) {
 $w_a_1_1_ciphertext = base64_decode($w_a_1_1_ciphertext);
 $iv = substr($w_a_1_1_ciphertext, 0, 16);
 $w_a_1_1_ciphertext = substr($w_a_1_1_ciphertext, 16);
 $w_a_1_1_plaintext = openssl_decrypt($w_a_1_1_ciphertext, "AES-256-CBC", $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
 return $w_a_1_1_plaintext;
 };



// check caselle uno due
$w_a_1_1_ConcatenazioneUser=$w_a_1_1_post_uno.$w_a_1_1_post_due;







$w_a_1_1_dirDoveConfetturaCIF = './' . $w_a_1_1_PHP_DIR_noyek . '/'. $w_a_1_1_PHP_DIR_yek.'/';


$w_a_1_1_PrendiFileConfettura=$w_a_1_1_dirDoveConfetturaCIF . $w_a_1_1_PHP_FIL_yek;



if( file_exists($w_a_1_1_PrendiFileConfettura)){
include($w_a_1_1_PrendiFileConfettura);
$w_a_1_1_ConcatenazioneConfettura_1_2=$unoa.' '.$dueb.' ';
}; // if w_a_1_1_PrendiFileConfettura





if ($w_a_1_1_ConcatenazioneUser===$w_a_1_1_ConcatenazioneConfettura_1_2){
    

$w_a_1_1_dirCIF = './' . $w_a_1_1_PHP_DIR_cifrato . '/';
$w_a_1_1_ListaFikesCIF=scandir($w_a_1_1_dirCIF);
$w_a_1_1_QuantiFikesCIF=count($w_a_1_1_ListaFikesCIF);

$w_a_1_1_DoveTrovoIlFileCIF=$w_a_1_1_dirCIF.$w_a_1_1_ListaFikesCIF[$w_a_1_1_QuantiFikesCIF-1] ;

$w_a_1_1_ContenutoDelFileCIF=file_get_contents($w_a_1_1_DoveTrovoIlFileCIF) ; 

$w_a_1_1_DecritterFileCIF=decryptCIF($w_a_1_1_ContenutoDelFileCIF, $trec);



echo '<details>';echo '<summary>';echo '</summary>';
echo '<div style="margin-left:12.5%; width:75%; text-align:left; box-shadow:6px 6px 12px teal;"  class="preverveCIF">'; echo $w_a_1_1_DecritterFileCIF ;  echo '</div>';

$filename = $w_a_1_1_DoveTrovoIlFileCIF;
$filesize = filesize($filename);

echo '<div style="font-family:monospace;">';
echo ' Lunghezza del file : <span style="font-weight:700;">' . $filesize . '</span>bytes';
echo '</div>';
echo '<hr>';

echo '</details>';


}else{}; // if w_a_1_1_ConcatenazioneUser



echo '<br>'; 

echo '<br>';
echo '';


?> 
<!--
modulo interno per la lettura 
del file da cripto a chiaro

-->
<!-- fin 034 lettura cif -->





<?php 

//  035

// modale ui
echo '

<style>
  .modal-backdrop {
    background-color: olive;
    opacity: 0.5;
  }
</style>

    <div id="MODALE" style="overflow:auto;"  class="ui container">
        <div  style="width:99.5%; height:99.5%; background-color:transparent; color:black;"  class="ui basic modal">
            <article class="ui header">
            
            <blockquote class="ui segment">
            
            <a href="./dlb/a/logout.php" class="ui red inverted button">LOGOUT</a>   
            
            </blockquote>
            
         
           <blockquote class="ui segment">
           
            <a href="assembla10.php" style="text-decoration: none; text-decoration-thickness: 0px;" class="ui red inverted button">ASSEMBLA</a>
     
            <a href="backup13.php" style="text-decoration: none; text-decoration-thickness: 0px;"  class="ui primary inverted button">B<span style="opacity:0.25;">ACKUP</span>13 </a>
			
            <a href="breaty12.php" style="text-decoration: none; text-decoration-thickness: 0px;"  class="ui primary inverted button">BACKUP</a>

 
            <a href="LeggiCIF.php" class="ui primary inverted button">LeggiCIF</a>


            <a href="./w_a_0_0_commenti/w_a_0_0_RESTAYLING.html" class="ui primary inverted button">commenti</a>


            <a href="./w_a_0_0_commenti/make_new_ynn.htm" class="ui primary inverted button">howto new ynn</a>

            
            </blockquote>            
            
            <div>
            <a href="http://avid3820725.altervista.org/pdfjs/web/viewer.html?file=http://avid3820725.altervista.org/funicoty07/w_a_0_0_gitm/test.pdf">PDFJS</a>
            </div>
            <div>            
            <div>
            <a href="https://animate.style/">https://animate.style/</a>
            </div>
            <div>
            <a href="https://releases.jquery.com/jquery/">https://releases.jquery.com/jquery/</a>
            </div>
            </article>
            

            <div class="actions">
                <div class="ui negative button">
                    <!-- Chiudi -->
                    <i class="window close outline icon"></i>
                    
                </div>
                <div class="ui positive button">
                    
                    <i class="window close outline icon"></i>
                </div>
            </div>

            
        </div>
        <button class="ui massive green inverted button"
                onclick="openModal()">
        <!-- Click --> 
        <i class="list icon"></i>
        </button>
    </div>

    <script>
    
    
    const openModal = () => {
    
    document.querySelector("#w_a_1_1_UP_DOWN_NELLA_PAGINA").style.display="block";
    
                $(".ui.modal").modal("setting",
                    "transition", "horizontal flip").modal("setBackdrop").css("background-color", "white").modal("show").css("background-color", "white");
    
    
    
            };


    </script>
    
    
    

';

?> 
<!--
modale da semantic ui
con attivazione javascript
molto importante dal
punto di vista didattico
-->
<!-- fin 035 modal ui -->



<?php   

// 036

echo '<div class="ui  center aligned segment">';
echo '<a href="https://www.rinaldo-rasa.it/funicoty13/index.html" class="ui red inverted button">https</a>';

// echo '<a href="./dlb/a/logout.php" class="ui red inverted button">LOGOUT</a>';

echo '<a href="breaty12.php" style="text-decoration: none; text-decoration-thickness: 0px;" class="ui red inverted button">BACKUP</a>';


// echo '<a href="assembla10.php" style="text-decoration: none; text-decoration-thickness: 0px;" class="ui red inverted button">ASSEMBLA</a>';


echo '</div>';
?> 
<!--
passa da http a https (se possibile)
-->
<!-- fin 036 https backup  -->




<?php  

// 037

 echo '</details>'; ?> 
 
 <!--
 chiusura dettagli
 -->
 <!-- fin 037 -->
 
 
 
 
<?php  

//  038

echo '</main>'; ?>
<!-- fin 038 /main  -->




<?php   

// 039

//
// w_a_1_1_6_0_0_checkDetailsStatus_JS
//

echo '

 <script>

 function w_a_1_1_checkDetailsStatus() {
 const w_a_1_1_DetailsStatus_w_a_1_1_DETAILS_TESTO_DINAMICO = document.getElementById("w_a_1_1_DETAILS_TESTO_DINAMICO");
 
 if (w_a_1_1_DetailsStatus_w_a_1_1_DETAILS_TESTO_DINAMICO.open) {
 document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO").style.width="85%";
 }
 else
 {
 document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO").style.width="95%";
 }; // if
  
 }; // function w_a_1_1_checkDetailsStatus

 w_a_1_1_Esegui_checkDetailsStatus = setInterval(w_a_1_1_checkDetailsStatus, 500);

 </script>


 <script>
 // READONLY readonly blues
 // document.querySelector("#w_a_1_1_area_immissione_testo__").setAttribute("readonly", true);
 // document.querySelector("#w_a_1_1_area_immissione_testo__").removeAttribute("readonly", true);
 </script>


';

?> 
<!-- 
alcune funzioni javascript importanti
da analizzare attentamente
-->
<!-- fin 039 checkDetailsStatus_JS -->





<?php   

// 040

// w_a_1_1_RilevaDispositivo

   
// necessario?
echo '<hr>';

echo '<div id="w_a_1_1_AVVISO_MOBILE" >rilevato dispositivo mobile</div>';
echo '<div id="w_a_1_1_AVVISO_DESKTOP">rilevato dispositivo desktop</div>';

function w_a_1_1_RilevaDispositivo(){
// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
// PHP
// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ 
// essenziale per responsivity
// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ 


    
echo '<div id="w_a_1_1_RilevaDispositivo" style="text-align:center;">
<script> 

//
// definizione delle variabili js icone svg 
// da utilizzare
//

w_a_1_1_DESKTOP_ICO=`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/></svg>`; 
w_a_1_1_PHONE_ICO=`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-phone" viewBox="0 0 16 16"> <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>`;  
w_a_1_1_WINDOWS_MS_ICO=`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-microsoft" viewBox="0 0 16 16"> <path d="M7.462 0H0v7.19h7.462V0zM16 0H8.538v7.19H16V0zM7.462 8.211H0V16h7.462V8.211zm8.538 0H8.538V16H16V8.211z"/></svg>`; 
w_a_1_1_CHROME_ICO=`<br>`+`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-browser-chrome" viewBox="0 0 16 16">  <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/></svg>`;  
w_a_1_1_ANDROID_ICO2=`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-android2" viewBox="0 0 16 16">  <path d="m10.213 1.471.691-1.26c.046-.083.03-.147-.048-.192-.085-.038-.15-.019-.195.058l-.7 1.27A4.832 4.832 0 0 0 8.005.941c-.688 0-1.34.135-1.956.404l-.7-1.27C5.303 0 5.239-.018 5.154.02c-.078.046-.094.11-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.697 3.697 0 0 0 3.5 5.02h9c0-.75-.208-1.44-.623-2.072a4.266 4.266 0 0 0-1.664-1.476ZM6.22 3.303a.367.367 0 0 1-.267.11.35.35 0 0 1-.263-.11.366.366 0 0 1-.107-.264.37.37 0 0 1 .107-.265.351.351 0 0 1 .263-.11c.103 0 .193.037.267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264Zm4.101 0a.351.351 0 0 1-.262.11.366.366 0 0 1-.268-.11.358.358 0 0 1-.112-.264c0-.103.037-.191.112-.265a.367.367 0 0 1 .268-.11c.104 0 .19.037.262.11a.367.367 0 0 1 .107.265c0 .102-.035.19-.107.264ZM3.5 11.77c0 .294.104.544.311.75.208.204.46.307.76.307h.758l.01 2.182c0 .276.097.51.292.703a.961.961 0 0 0 .7.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182c0 .276.097.51.292.703a.972.972 0 0 0 .71.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76c.291 0 .54-.103.749-.308.207-.205.311-.455.311-.75V5.365h-9v6.404Zm10.495-6.587a.983.983 0 0 0-.702.278.91.91 0 0 0-.293.685v4.063c0 .271.098.501.293.69a.97.97 0 0 0 .702.284c.28 0 .517-.095.712-.284a.924.924 0 0 0 .293-.69V6.146a.91.91 0 0 0-.293-.685.995.995 0 0 0-.712-.278Zm-12.702.283a.985.985 0 0 1 .712-.283c.273 0 .507.094.702.283a.913.913 0 0 1 .293.68v4.063a.932.932 0 0 1-.288.69.97.97 0 0 1-.707.284.986.986 0 0 1-.712-.284.924.924 0 0 1-.293-.69V6.146c0-.264.098-.491.293-.68Z"/></svg>`;


w_a_1_1_MOBILE_DEVICE=1;

if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{

w_a_1_1_MOBILE_DEVICE=1;
document.getElementById("w_a_1_1_RilevaDispositivo").innerHTML=w_a_1_1_PHONE_ICO;

}
else{

w_a_1_1_MOBILE_DEVICE=0;
document.getElementById("w_a_1_1_RilevaDispositivo").innerHTML=
`
<style>
#w_a_1_1_DESKTOP_ICO_SVG_WH{border:solid 0.00rem green;}
#w_a_1_1_DESKTOP_ICO_SVG_WH svg{width:40px; height:40px; border:solid 0.00rem fuchsia;}
</style>



<div id="w_a_1_1_DESKTOP_ICO_SVG_WH">
<svg  xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/></svg>

</div>

`
;

}; // dgebi w_a_1_1_RilevaDispositivo


//
// already controllato se
// mobile o desktop

if(w_a_1_1_MOBILE_DEVICE===1){
// alert("MOBILE_DEVICE");

document.querySelector("#w_a_1_1_AVVISO_MOBILE").style.display="block";

}

else

{
//alert("DESKTOP_DEVICE");
document.querySelector("#w_a_1_1_AVVISO_DESKTOP").style.display="block";

 
//
// RESPONSIVITY CONDIZIONATA
//

w_a_1_1_AttivaResponsivity = 1 ;
if (w_a_1_1_AttivaResponsivity===1){

//
// responsivity ini
//
//
// RESPONSIVITY
// adattamenti responsive per desktop PER DISPOSITIVO DESKTOP
// --------------------------------------====================

document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO").style.fontSize="1.75rem";
document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO_SVG").style.width="40px";
document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO_SVG").style.height="40px";


document.querySelector("#w_a_1_1_TRASH_CAN_SEMANTIC_SVG").style.fontSize="1.75rem";

document.querySelector("#w_a_1_1_DARKMODE_SVG").style.width="20px";
document.querySelector("#w_a_1_1_DARKMODE_SVG").style.height="20px";
document.querySelector("#w_a_1_1_LIGHTMODE_SVG").style.width="20px";
document.querySelector("#w_a_1_1_LIGHTMODE_SVG").style.height="20px";

document.querySelector("#w_a_1_1_BACKDOOR_FORM_SI_SVG").style.width="20px";
document.querySelector("#w_a_1_1_BACKDOOR_FORM_SI_SVG").style.height="20px";
document.querySelector("#w_a_1_1_BACKDOOR_FORM_NO_SVG").style.width="20px";
document.querySelector("#w_a_1_1_BACKDOOR_FORM_NO_SVG").style.height="20px";

document.querySelector("#w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SVG").style.width="20px";
document.querySelector("#w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SVG").style.height="20px";


document.querySelector("#w_a_1_1_UP_NELLA_PAGINA_SVG").style.width= "20px";
document.querySelector("#w_a_1_1_UP_NELLA_PAGINA_SVG").style.height="20px";

document.querySelector("#w_a_1_1_DOWN_NELLA_PAGINA_SVG").style.width= "20px";
document.querySelector("#w_a_1_1_DOWN_NELLA_PAGINA_SVG").style.height="20px";


// document.querySelector("#w_a_1_1_area_immissione_testo__").style.fontSize="1.275rem";


document.querySelector("#w_a_1_1_invia_testo_button__").style.fontSize="2.750rem";
document.querySelector("#w_a_1_1_invia_testo_button__").style.fontFamily="PT Mono";
document.querySelector("#w_a_1_1_invia_testo_button__").style.fontVariant="small-caps";
document.querySelector("#w_a_1_1_invia_testo_button__").style.fontWeight="bold";


document.querySelector("#w_a_1_1_SEMAFORO_GREEN").style.fontSize="1.275rem";
document.querySelector("#w_a_1_1_SEMAFORO_RED").style.fontSize="1.275rem";


//
// responsivity fin
//
}; // attiva disattiva responsivity


};  //  i.test(navigator.userAgent) ? mobile o desktop 


</script>
</div>
';  // echo


}; // w_a_1_1_RilevaDispositivo funzione php
 
w_a_1_1_RilevaDispositivo();

// ^^^^^^^^^^^^^^^^^^^^^^^^^

?> 
<!--
mix di funzioni php ^^^^^
e javascript per gestire
la rilevazione di dispositivo
se desk o mobi
-->
<!-- fin 040 rileva dispositivo -->





<?php   

// 041

// w_a_1_1_7_0_0_detectWH

function w_a_1_1_detectWH(){
// ^^^^^^^^^^^^^^^^^^^^^^^^
echo '<div style="font-family:monospace; text-align:center;">
<span id="w_a_1_1_result" style="font-size:100%;font-variant:small-caps;"></span>
<script>"use strict"; function w_a_1_1_displayWindowSize(){ var w = document.documentElement.clientWidth;var h = document.documentElement.clientHeight;var wFinestraWIDTH = document.documentElement.clientWidth;var hFinestraHEIGHT = document.documentElement.clientHeight;document.getElementById("w_a_1_1_result").innerHTML = " " + wFinestraWIDTH + "x" + hFinestraHEIGHT +" <span style=`font-size:medium;`>"+(wFinestraWIDTH/16)+"rem "+" x "+(hFinestraHEIGHT/16)+"rem </span>";}window.addEventListener("resize", w_a_1_1_displayWindowSize);w_a_1_1_displayWindowSize();+" "</script>

</div>
';

};
// 
w_a_1_1_detectWH();
// ^^^^^^^^^^^^^^^^
?> 

<!--
larghezza altezza
mix funzioni php e javascript
-->
<!-- fin 041 detectWH  -->







<?php  

// 042

// w_a_1_1_7_5_0_CheckPiattaforma

// occorre che esista app platform.js

$w_a_1_1_CheckPiattaforma = "./w_a_0_0_noyek/w_a_0_0_platform/index.js";
if(file_exists($w_a_1_1_CheckPiattaforma)){
        
    echo '
    <script src="./w_a_0_0_noyek/w_a_0_0_platform/index.js"></script>
    <div id="w_a_1_1_rilevato_sistema_operativo_e_browser"></div>
    <script>
    document.getElementById("w_a_1_1_rilevato_sistema_operativo_e_browser").innerHTML=""
    +"<div>"
    +" "
    +""+platform.name 
    +" v"
    +""+platform.version
    +""
    +" "+platform.os
    +" "
    +""
    +""
    +"</div>"
    
    +"";
    
    
    </script>
    ';

}
else
{}; // if php platform.js 

?> 
<!--
sistema operativo e browser
-->
<!-- fin 042 CheckPiattaforma  -->



<?php   
// 043

// w_a_1_1_8_0_0_fulldatevisu
// orario del momento
$w_a_1_1_fulldatevisu=0;
if($w_a_1_1_fulldatevisu===1){
echo '<div id="w_a_1_1_GIORNO_TIME">';
echo date("l d M Y H:i:s");
echo '</div>';
}
else
{
echo '<div id="w_a_1_1_GIORNO_TIME">';
echo date("l d M Y").' '.'ultimo aggiornamento della pagina alle ore:'.' '.date("H:i:s");
echo '</div>';

}; // $w_a_1_1_fulldatevisu 

?> 
<!--
gestisce php tempo orario
-->
<!-- fin 043 fulldatevisu -->





<?php

// 044

// rolling dot


echo '';

echo '<!-- gli sliders rolling dots ini -->';
    ///////////////////////////
    // ROLLING DOT
    ///////////////////////////
    
    
    echo '
    <script>
    function w_a_1_1_AppRD(arg1, arg2, arg3){
    // Application Rolling Dot
    
    // definizione di unvalue standard
    // diverso per dispositivo mobile o desktop
    //
    // per MOBILE
    
    w_a_1_1_ValoreStandard=3.5;
    
    // per DESKTOP
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
    {}
    else
    {
    w_a_1_1_ValoreStandard=1.500;  // vecchio default
    
    w_a_1_1_ValoreStandard=1.125;  // nuovo default 
    
    };

    
    document.getElementById(arg2).innerHTML=
    `
 <!--
 old style
    <input id="w_a_1_1_SETYINGS_INPUT" style="width:30%;" type="range" value="${w_a_1_1_ValoreStandard}" step="0.125"  min="0" max="5">
-->


<!-- 
 new style
 -->
    <input id="w_a_1_1_SETYINGS_INPUT"  type="range" value="${w_a_1_1_ValoreStandard}" step="0.125"  min="0" max="5">
    
    
    
    <div id="w_a_1_1_SETYINGS_VALORE_DINAMICO_INPUT" style="font-family:monospace; display:inline-block;"></div>
    <div id="w_a_1_1_SETYINGS"></div>
    
    `;
    
    function w_a_1_1_RollingDot(){
    
    // questa funzioni incapsulata 
    // visualizza in rem la dim
    // del font-size
        function w_a_1_1_LETTURA_RANGE(){
        w_a_1_1_FonteVariabile=document.getElementById("w_a_1_1_SETYINGS_INPUT").value;
        document.getElementById("w_a_1_1_SETYINGS_VALORE_DINAMICO_INPUT").innerHTML=`<span style="font-weight:bold; color:purple; display:inline-block;">${w_a_1_1_FonteVariabile}rem</span>`;
        return w_a_1_1_FonteVariabile;
        }; w_a_1_1_LETTURA_RANGE();
    
    
    
    w_a_1_1_FonteVariabileDinamica=w_a_1_1_LETTURA_RANGE();
    document.getElementById("w_a_1_1_SETYINGS").innerHTML=
    `
    <style>
    
    #${arg1}{padding-left:${w_a_1_1_FonteVariabileDinamica*0.75}rem}
    #${arg1}{font-size:${w_a_1_1_FonteVariabileDinamica}rem}

    #${arg3}{padding-left:${w_a_1_1_FonteVariabileDinamica*0.75}rem}
    #${arg3}{font-size:${w_a_1_1_FonteVariabileDinamica}rem}
    #${arg3}{margin-top:${w_a_1_1_FonteVariabileDinamica}rem}
    #${arg3}{line-height:${w_a_1_1_FonteVariabileDinamica}rem}

    
    </style>
    `
    ;
    
    
    
    
    }; w_a_1_1_EseguiRollingDot=setInterval(w_a_1_1_RollingDot, 1)
    
    }; // w_a_1_1_AppRD(arg1, arg2)
    </script>
    ';  //  echo



    echo '<section  id="w_a_1_1_CONTENITORE_DETTAGLI_SLIDERS">';
    echo '<details  id="w_a_1_1_DETTAGLI_SLIDERS">';
    echo '<summary  id="w_a_1_1_SUMMARY_SLIDERS">';
    echo '';
    echo '
    <svg id="w_a_1_1_SLIDERS_SVG" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
    </svg>
    ';
    echo '';
    echo '</summary>';
    echo '';
    echo '<article style="width:auto; text-align:center;">';
        echo '<div id="w_a_1_1_area_immissione_testo__RD"></div> <!-- w_a_1_1_area_immissione_testo__RD -->';
        echo '<script>w_a_1_1_AppRD("w_a_1_1_area_immissione_testo__", "w_a_1_1_area_immissione_testo__RD","w_a_1_1_CONTENUTO_DENCRIPTED")</script>';
    echo '';
    echo '</article>';
    echo '</details>';
    
    echo '</section>';
    echo '';


    echo '<!-- gli sliders rolling dots fin -->';

?> 
<!-- sliders -->

<!-- fin 044  rolling dot -->





<?php 

// 045

// thefamouslastwords

echo '';

echo '<section id="BIG_LAST_WORDS" style="text-align:center; border:solid 0.00rem teal;">';

echo '
<style>#thefamouslastwords{font-family:"PT Mono",monospace;}</style>
<blockquote id="thefamouslastwords" style="margin-top:0.5rem; margin-bottom:0.5rem; text-align:center; border:dotted 0.15rem fuchsia; border-radius:0.50rem; box-shadow:6px 6px 12px transparent;">
<q style="margin-top:0.125rem; margin-bottom:0.125rem; padding:0.125rem; background-color:white; color:navy; font-size:100%;  font-weight:normal; font-variant:small-caps; border:solid 0.00rem aqua; border-radius:0.50rem;">
release FUNICOTY13_240316_0730a   : verde, nook, sparrow, sixties
 &copy; 2024
</q>

<p style="font-family:Rasa;">
The Mad Yak 
by beat Gregory Corso
</p>
</blockquote>

';

//
// examples svelte clock adattato 
// by rinaldo rasa (c) 2024
// ||
// ||
// ||
// \/
echo '

<!-- -->
<!-- stylato inline -->
<details><summary style="background-color:rgba(255, 215, 0, 0.150);"></summary>

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

</details> <!-- svelte clock -->

<!-- -->

';




echo '</section"> <!-- BIG_LAST_WORDS -->';

 
echo '';
echo '';


?> 

<!-- et mahler 03620    -->  
<!-- notepad blackboard -->
<!--  045 thefamouslastwords -->
<!-- FIN 045  -->



<?php  
// 046




echo '<div id="fine"></div>'; 

?> 
<!--
elemento importante per la
navigazione interna
-->
<!-- FIN 046  id fine -->



<?php  
// 047

echo '</body>'; ?> 
<!-- fin 047  /body  -->





<?php  
// 048

?>
<!-- fin 048 -->


<?php  
// 049
echo '</html>'; 

?> 
<!-- FIN 049 html  -->



<?php  /* echo '<br>' . phpinfo();  */ ?>
<!-- 050 empty -->
<!-- 
n  modulo
=========

1  002 w_a_1_1_HTML
2  010 w_a_1_1_BODY
3  011 w_a_1_1_RESPONSIVITY_EXTRA
4  012 w_a_1_1_MAIN
5  013 w_a_1_1_DETAILS_TESTO_DINAMICO
6  015 w_a_1_1_SUMMARY_TESTO_DINAMICO
7  015 w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO
8  015 w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO_SVG
9  016 w_a_1_1_TRASH_PUNTINI_ETC
10 017 w_a_1_1_TRASH_CAN
11 017 w_a_1_1_TRASH_CAN_SVG
12 017 w_a_1_1_TRASH_CAN_SEMANTIC_SVG
13 018 w_a_1_1_TRE_PUNTINI 
14 018 w_a_1_1_TRE_PUNTINI_TEXT
15 018 w_a_1_1_TRE_PUNTINI_TRIANGLE_SVG
16 018 w_a_1_1_TRE_PUNTINI_TRIANGLE_SEMANTIC_SVG
17 019 w_a_1_1_DARKMODE
18 019 w_a_1_1_DARKMODE_SVG
19 020 w_a_1_1_LIGHTMODE
20 020 w_a_1_1_LIGHTMODE_SVG
21 021 w_a_1_1_BACKDOOR_FORM_SI
22 021 w_a_1_1_BACKDOOR_FORM_SI_SVG
23 022 w_a_1_1_BACKDOOR_FORM_NO
24 022 w_a_1_1_BACKDOOR_FORM_NO_SVG
25 023 w_a_1_1_SALVATAGGIO_DI_TIPO_CIF
26 023 w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SUMMARY
27 023 w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SVG
28 024 w_a_1_1_UP_DOWN_NELLA_PAGINA
29 024 w_a_1_1_UP_NELLA_PAGINA
30 024 w_a_1_1_UP_NELLA_PAGINA_SVG
31 024 w_a_1_1_DOWN_NELLA_PAGINA
32 024 w_a_1_1_DOWN_NELLA_PAGINA_SVG
33 030 w_a_1_1_FORM_X_INVIA__
34 031 w_a_1_1_FORM_X_INVIA_AES__
35 031 w_a_1_1_SSAP__
36 031 w_a_1_1_post_uno__
37 031 w_a_1_1_post_due__
38 031 w_a_1_1_post_tre__
39 031 w_a_1_1_post_qua__
40 031 w_a_1_1_area_immissione_testo_invia_container__
41 031 w_a_1_1_area_immissione_testo__
42 031 w_a_1_1_invia_testo_container__
43 031 w_a_1_1_invia_testo_button__
44 031 w_a_1_1_invia_testo_button__
45 031 w_a_1_1_INDEX_WRAP
46 031 w_a_1_1_INDEX_CLICK
47 032 w_a_1_1_SEMAFORO_GREEN
48 032 w_a_1_1_SEMAFORO_RED
49 033 w_a_1_1_DIGITAL_IDENTITY_FREE_READING
50 033 w_a_1_1_CONTENUTO_DENCRIPTED
51 035 MODALE
52 040 w_a_1_1_AVVISO_MOBILE
53 040 w_a_1_1_AVVISO_DESKTOP
54 040 w_a_1_1_RilevaDispositivo
55 040 w_a_1_1_DESKTOP_ICO_SVG_WH
56 041 w_a_1_1_result
57 042 w_a_1_1_rilevato_sistema_operativo_e_browser
58 043 w_a_1_1_GIORNO_TIME
59 043 w_a_1_1_GIORNO_TIME
60 044 w_a_1_1_SETYINGS_INPUT
61 044 w_a_1_1_SETYINGS_VALORE_DINAMICO_INPUT
62 044 w_a_1_1_SETYINGS
63 044 w_a_1_1_CONTENITORE_DETTAGLI_SLIDERS
64 044 w_a_1_1_DETTAGLI_SLIDERS
65 044 w_a_1_1_SUMMARY_SLIDERS
66 044 w_a_1_1_SLIDERS_SVG
67 044 w_a_1_1_area_immissione_testo__RD
68 045 BIG_LAST_WORDS
69 045 thefamouslastwords
70 046 fine
-->

<!-- 
<blockquote style="font-family:'PT Mono',monospace;" id="ENGINE"></blockquote>
<script>
document.getElementById("ENGINE").innerHTML=navigator.userAgent;
</script>
-->
<!-- FIN 050  -->
