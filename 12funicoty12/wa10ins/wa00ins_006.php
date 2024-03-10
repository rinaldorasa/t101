
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
<!-- 006 ecologia -->


