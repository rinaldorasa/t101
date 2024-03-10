

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
<!--  033 salva file nucleo core del programma   -->

