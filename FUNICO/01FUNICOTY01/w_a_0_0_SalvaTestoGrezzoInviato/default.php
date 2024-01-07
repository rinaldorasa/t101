


<!-- ext candidate ini -->
<!-- salva file ini -->
<?php  


echo '';  // salva file ini



$w_a_0_0_TestoGrezzoInviato = $_POST["w_a_0_0_questo_est_un_testo"];


// $w_a_0_0_TestoGrezzoInviato= filter_input(INPUT_POST, 'w_a_0_0_questo_est_un_testo',  FILTER_SANITIZE_STRING, FILTER_FLAG_NO_STRIP_SPACES);
 



if ($w_a_0_0_TestoGrezzoInviato==="")
{ echo '';
}
else 
{
/* Esiste un testo da memorizzare */


/* Sanitizzazione della string */

 $w_a_0_0_STRINGA_NUOVA = str_replace("<", "&#5176;", $w_a_0_0_TestoGrezzoInviato);
 $w_a_0_0_Testo0= $w_a_0_0_STRINGA_NUOVA;
 $w_a_0_0_STRINGA_NUOVA = str_replace(">", "&#5171;", $w_a_0_0_Testo0); 
 $w_a_0_0_Testo1= $w_a_0_0_STRINGA_NUOVA;
 $w_a_0_0_STRINGA_NUOVA = str_replace('\'', "&#10076;", $w_a_0_0_Testo1); 
 $w_a_0_0_Testo2= $w_a_0_0_STRINGA_NUOVA;
 $w_a_0_0_STRINGA_NUOVA = str_replace("\"", "&#10078;", $w_a_0_0_Testo2);
 
  $w_a_0_0_TestoInviatoSanitizzato= $w_a_0_0_STRINGA_NUOVA;


 // 
 // il file qui sotto diventa un argomento per la funzione php
 //
 $w_a_0_0_SALVA_IL_FILE_SANITIZZATO_DA_INPUT=$w_a_0_0_TestoInviatoSanitizzato;


 // 
 // Fare molta attenzione alle funzioni che devono
 // passare i parametri
 // 
 // 

 function w_a_0_0_Salva_FILE_SANITIZZATO_DA_INPUT($w_a_0_0_SALVA_IL_FILE_SANITIZZATO_DA_INPUT, $w_a_0_0_cedx, $w_a_0_0_cedy, $w_a_0_0_yek){



    // alias
    $w_a_0_0_TestoInviatoSanitizzato = $w_a_0_0_SALVA_IL_FILE_SANITIZZATO_DA_INPUT;
    
    $w_a_0_0_DirectoryCorrente = getcwd();
    $w_a_0_0_DirectorySalvaTxt = "w_a_0_0_decifra";

    $w_a_0_0_DirectorySalvaTxtQUICK = "w_a_0_0_cifrato";




 // se la cartella non esiste viene creata
 if(!file_exists($w_a_0_0_DirectorySalvaTxt)){ mkdir($w_a_0_0_DirectorySalvaTxt); } // !file_exists($w_a_0_0_DirectorySalvaTxt)


 $w_a_0_0_t=time(); 
 
 $w_a_0_0_Percorso=$w_a_0_0_DirectoryCorrente; 
 
 $w_a_0_0_Prefisso = date("Y_m_d",$w_a_0_0_t); 


 $w_a_0_0_Postfisso = time(); 
 $w_a_0_0_Postfisso = $w_a_0_0_Postfisso . "_".rand(0, 10000000);


 $w_a_0_0_Estensione = "w_a_0_0_decifra";

 $w_a_0_0_EstensioneQUICK = "w_a_0_0_cifrato";
 
 

 $w_a_0_0_NomeFile = $w_a_0_0_Percorso.'/'.$w_a_0_0_DirectorySalvaTxt.'/'.$w_a_0_0_Prefisso."_".$w_a_0_0_Postfisso.".".$w_a_0_0_Estensione;

 $w_a_0_0_directory= $w_a_0_0_Percorso.'/'.$w_a_0_0_DirectorySalvaTxt.'/';



//
// PERCORSO QUICK CIF unused
//

$Percorso_QUICK_CIF= $w_a_0_0_Percorso.'/'.$w_a_0_0_DirectorySalvaTxtQUICK.'/'.$w_a_0_0_Prefisso."_".$w_a_0_0_Postfisso.".". $w_a_0_0_EstensioneQUICK;





 // esegue il conteggio dei file nella directory
 $w_a_0_0_files = glob($w_a_0_0_directory . '/*.' . $w_a_0_0_Estensione);
 $w_a_0_0_n = count($w_a_0_0_files);



 // qui lettura ultimo file registrato
 if( $w_a_0_0_n > 0){
     
 $w_a_0_0_Pre=$w_a_0_0_n-1;

 
 $w_a_0_0_PreTesto=file_get_contents($w_a_0_0_files[$w_a_0_0_Pre]);


 // visualizza istantanea ultimo file registrato 
 // 
 
 echo '<div style="color:yellow; display:none;">';
 

 
 echo '</div>';




    // si fa la concatenazione tra pre e aggiunta
    
    $w_a_0_0_TestoInviatoSanitizzato=$w_a_0_0_PreTesto.$w_a_0_0_TestoInviatoSanitizzato;

    // visualizza il testo pronto per la
    // nuova registrazione
    // echo $w_a_0_0_TestoInviatoSanitizzato;
    
    // cercare di stabilizzare proliferazione files
    // cancellando la eccedenza di un (1) file
    // stabilizzazione di situazione quo ante
    // i file nella cartella sono ordinati in
    // modo alfanumerico

    if( $w_a_0_0_n > 4 ){ 
   // unlink( $w_a_0_0_files[3] ); // bug
   
	$w_a_0_0_ListaPossibiliFileDaCancellare=scandir( $w_a_0_0_directory );
	//occorre aggiungere il percorso iniziale
	$FileDaSALVAGUARDARE_0=$w_a_0_0_DirectorySalvaTxt.'/'.$w_a_0_0_ListaPossibiliFileDaCancellare[0];
	$FileDaSALVAGUARDARE_1=$w_a_0_0_DirectorySalvaTxt.'/'.$w_a_0_0_ListaPossibiliFileDaCancellare[1];
	
	$FileDaCancellare = $w_a_0_0_DirectorySalvaTxt.'/'.$w_a_0_0_ListaPossibiliFileDaCancellare[2];
 


//
unset( $FileDaSALVAGUARDARE_0);
//
unset( $FileDaSALVAGUARDARE_1);
//
unlink($FileDaCancellare);

    
    };  // ( $w_a_0_0_n > 4 ) ? y
  


    //
    // se il nome del file non esiste 
    // si crea il file
    
    if (!file_exists($w_a_0_0_NomeFile)) 
    {
    $w_a_0_0_SalvaFile=fopen($w_a_0_0_NomeFile, "w");
    fclose($w_a_0_0_SalvaFile);
    };  //  (!file_exists($w_a_0_0_NomeFile)) ?
    
    
    
    // viene aggiornato il file
    if (file_exists($w_a_0_0_NomeFile)) 
    {


    $w_a_0_0_SalvaFile=fopen($w_a_0_0_NomeFile, "a");
    fwrite($w_a_0_0_SalvaFile, $w_a_0_0_TestoInviatoSanitizzato);
    fclose($w_a_0_0_SalvaFile);
    
//   
echo '<div style="text-align:center; box-shadow:6px 6px 12px pink;" class="ui pink segment"><button class="ui pink big button">Aggiunto file!</button></div>';


    
    
    };  //  (file_exists($w_a_0_0_NomeFile) ?











// la prossima sezione va
// assolutamente riletta

 $w_a_0_0_XMR_directory='./w_a_0_0_decifra';
 $w_a_0_0_XMR_files = glob($w_a_0_0_XMR_directory . '/*.*');
 $w_a_0_0_XMR_n = count($w_a_0_0_XMR_files);

 

 
 $w_a_0_0_XMR_NomeFile=$w_a_0_0_XMR_files[$w_a_0_0_XMR_n-1];
 
 
 $w_a_0_0_FLAG_TEXTAREA_XMR_NomeFile= 0 ;
 if ($w_a_0_0_FLAG_TEXTAREA_XMR_NomeFile===1){
 echo '  <textarea id="XHR_LETTURA_FILE">ERR XHR_LETTURA_FILE</textarea> ';
 }
 else{
 echo '<div style="color:yellow; display:none;">';
 echo '  <div id="XHR_LETTURA_FILE">ERR XHR_LETTURA_FILE</div> ';
 echo '</div>';
 }; // if $w_a_0_0_FLAG_TEXTAREA_XMR_NomeFile


    
    echo '
    
    
    <script>
    
    function LetturaXMR_Messaggio(){
    
    w_a_0_0_XMR_Messaggio="'.$w_a_0_0_XMR_NomeFile.'";
    
    
    w_a_0_0_XMR_LeggiMessaggio=new XMLHttpRequest();
    w_a_0_0_XMR_LeggiMessaggio.open("GET",w_a_0_0_XMR_Messaggio,false);
    w_a_0_0_XMR_LeggiMessaggio.onreadystatechange= function (){
    
        w_a_0_0_XMR_EseguitoLeggiMessaggio=w_a_0_0_XMR_LeggiMessaggio.responseText;
    
        document.getElementById("XHR_LETTURA_FILE").innerHTML=`${w_a_0_0_XMR_EseguitoLeggiMessaggio}`;
    
        document.querySelector("#XHR_LETTURA_FILE").style.fontFamily="monospace";
        
        };
    w_a_0_0_XMR_LeggiMessaggio.send();
    
    
    }; // LetturaXMR_Messaggio()
    
    LetturaXMR_Messaggio();
    
    
    </script>
    
    ';
    

 };  // if( $w_a_0_0_n > 0) ?
 
 
 };  w_a_0_0_Salva_FILE_SANITIZZATO_DA_INPUT($w_a_0_0_SALVA_IL_FILE_SANITIZZATO_DA_INPUT, $w_a_0_0_cedx, $w_a_0_0_cedy, $w_a_0_0_yek );  // function
 
 

// fin qui memorizzato il file leggibile da un essere umano
// il programma prosegue con la opzione aes che eseguita in
// ambiente php non richiede cdn, in assoluto tutta la
// ecologia server ha php giÃ  installato di default 

// textarea incrementale contiene un testo sottoposto
// a sanitizzazione e diventa disponibile per
// memorizzazione aes tenere presente che la
// cronologia decaffe risulta la sola completa
//
// la cronologia caffe invece ha una caratteristica
// potenzialmente limitata





}; // if $w_a_0_0_TestoGrezzoInviato==="" ? y n

// con un condizionale flag cerca nella cartella
// decaffeinata il file e lo caffeinizza e lo
// deposita nella cartella caffe pronto ad essere
// consumato dopo il controllo di quality
// questa fase di produzione necessita quindi di
// un controllo 
// 

if ($w_a_0_0_FLAG_DI_LETTURA_FREE===1){
    


echo ' 
<div id="DIGITAL_IDENTITY_FREE_READING" style="display:none;"></div> <!-- DIGITAL_IDENTITY_FREE_READING -->
<script>
// alert("digital identity checked"); 

document.querySelector("#DIGITAL_IDENTITY_FREE_READING").style.position="fixed";
document.querySelector("#DIGITAL_IDENTITY_FREE_READING").style.top="0.050rem";
document.querySelector("#DIGITAL_IDENTITY_FREE_READING").style.left="0.00rem";

document.querySelector("#DIGITAL_IDENTITY_FREE_READING").style.fontSize="2.75rem";

document.querySelector("#DIGITAL_IDENTITY_FREE_READING").style.display="block";
document.querySelector("#DIGITAL_IDENTITY_FREE_READING").style.color="rgba(135, 206, 235, 1)";
document.querySelector("#DIGITAL_IDENTITY_FREE_READING").style.zIndex="10000000";

</script>

'; 




 
$w_a_0_0_DecaffeinatedDirectoryTextarea = "w_a_0_0_decifra";
 


$w_a_0_0_ElencaFileDecaffeinatedDirectoryTextarea = scandir($w_a_0_0_DecaffeinatedDirectoryTextarea);

$w_a_0_0_ContaFileDecaffeinatedDirectoryTextarea = count($w_a_0_0_ElencaFileDecaffeinatedDirectoryTextarea);


$w_a_0_0_NomeUltimoFileDecaffeinatedDirectoryTextarea = $w_a_0_0_ElencaFileDecaffeinatedDirectoryTextarea[$w_a_0_0_ContaFileDecaffeinatedDirectoryTextarea-1];


$w_a_0_0_DoveNomeUltimoFileDecaffeinatedDirectoryTextarea='./'.$w_a_0_0_DecaffeinatedDirectoryTextarea.'/'.$w_a_0_0_NomeUltimoFileDecaffeinatedDirectoryTextarea;



$w_a_0_0_ContenutoNomeUltimoFileDecaffeinatedDirectoryTextarea = file_get_contents($w_a_0_0_DoveNomeUltimoFileDecaffeinatedDirectoryTextarea);




function visualizzaDir($w_a_0_0_DecaffeinatedDirectoryTextarea) {
    // $dir = './';
    $dir = $w_a_0_0_DecaffeinatedDirectoryTextarea;

    $files = scandir($dir);

    echo '<ol>';
    
    foreach ($files as $file) {
    
//        echo '<div style="color:yellow; display:none;">';
//            echo '<li>' . $file . '</li>';
//        echo '</div>';
    
    }; // foreach ($files as $file)
    
    echo '</ol>';
};  // visualizzaDir($w_a_0_0_DecaffeinatedDirectoryTextarea)


visualizzaDir($w_a_0_0_DecaffeinatedDirectoryTextarea);


visualizzaDir("w_a_0_0_cifrato");


 // questo toolbox AES
 // fa parte della dotazione standard
 // di PHP e non richiede CDN

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







// $w_a_0_0_ControlloValoreNumerico = $_POST["w_a_0_0_post_qua"];

$w_a_0_0_ControlloValoreNumerico = filter_input(INPUT_POST, 'w_a_0_0_post_qua', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_STRIP_SPACES);



echo '';



// if ($w_a_0_0_ControlloValoreNumerico==="1234"){

if ($w_a_0_0_ControlloValoreNumerico===$quad){

// echo '<script>alert("ok");</script>';

// questo script cosa fa?
echo '
<script>
document.querySelector("#DIGITAL_IDENTITY_FREE_READING").classList.add("cursore_free");

</script>
';


echo '<br><div style="color:yellow; display:none;">';
echo $w_a_0_0_yek;    
echo '</div><br>';


$w_a_0_0_AES_256_CBC_INDIRIZZO_CARTELLA_FILE_DECIFRATO = "./w_a_0_0_decifra/";

$w_a_0_0_AES_256_CBC_ELENCO_DEI_FILE = scandir($w_a_0_0_AES_256_CBC_INDIRIZZO_CARTELLA_FILE_DECIFRATO);
$w_a_0_0_AES_256_CBC_CONTATORE_FILES =count($w_a_0_0_AES_256_CBC_ELENCO_DEI_FILE);
$w_a_0_0_AES_256_CBC_NOME_ULTIMO_FILE=$w_a_0_0_AES_256_CBC_ELENCO_DEI_FILE[$w_a_0_0_AES_256_CBC_CONTATORE_FILES-1];



$w_a_0_0_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO = $w_a_0_0_AES_256_CBC_INDIRIZZO_CARTELLA_FILE_DECIFRATO . $w_a_0_0_AES_256_CBC_NOME_ULTIMO_FILE ;

// 
// echo '<div style="color:yellow; display:none;">';
// echo $w_a_0_0_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO;
// echo '</div>';
// 


$w_a_0_0_AES_256_CBC_CONTENUTO_DEL_FILE_DECIFRATO = file_get_contents($w_a_0_0_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO);



$w_a_0_0_AES_256_CBC_plaintext = $w_a_0_0_AES_256_CBC_CONTENUTO_DEL_FILE_DECIFRATO ;






$w_a_0_0_AES_256_CBC_key = $w_a_0_0_yek;


// questo toolbox AES
 // fa parte della dotazione standard
 // di PHP e non richiede CDN

 // Funzione per cifrare una stringa utilizzando AES-256-CBC
 function w_a_0_0_AES_256_CBC_encrypt($w_a_0_0_AES_256_CBC_plaintext, $w_a_0_0_AES_256_CBC_key) {
 $method = "AES-256-CBC";
 $iv = openssl_random_pseudo_bytes(16);
 $w_a_0_0_AES_256_CBC_ciphertext = openssl_encrypt($w_a_0_0_AES_256_CBC_plaintext, $method, $w_a_0_0_AES_256_CBC_key, OPENSSL_RAW_DATA, $iv);
 return base64_encode($iv . $w_a_0_0_AES_256_CBC_ciphertext);
 };
 
 // Funzione per decifrare una stringa cifrata utilizzando AES-256-CBC
 function w_a_0_0_AES_256_CBC_decrypt($w_a_0_0_AES_256_CBC_ciphertext, $w_a_0_0_AES_256_CBC_key) {
 $w_a_0_0_AES_256_CBC_ciphertext = base64_decode($w_a_0_0_AES_256_CBC_ciphertext);
 $iv = substr($w_a_0_0_AES_256_CBC_ciphertext, 0, 16);
 $w_a_0_0_AES_256_CBC_ciphertext = substr($w_a_0_0_AES_256_CBC_ciphertext, 16);
 $w_a_0_0_AES_256_CBC_plaintext = openssl_decrypt($w_a_0_0_AES_256_CBC_ciphertext, "AES-256-CBC", $w_a_0_0_AES_256_CBC_key, OPENSSL_RAW_DATA, $iv);
 return $w_a_0_0_AES_256_CBC_plaintext;
 };
 // 
 //
 //


$w_a_0_0_AES_256_CBC_ENCRIPTED=w_a_0_0_AES_256_CBC_encrypt($w_a_0_0_AES_256_CBC_plaintext, $w_a_0_0_AES_256_CBC_key);




echo "<br>";

$w_a_0_0_AES_256_CBC_DENCRIPTED=w_a_0_0_AES_256_CBC_decrypt($w_a_0_0_AES_256_CBC_ENCRIPTED, $w_a_0_0_AES_256_CBC_key);

// echo '<div style="padding:0.50rem; background-color:purple; color:white; font-size:125%; font-family:monospace; overflow:auto;"  class="preverve">';
// echo     $w_a_0_0_AES_256_CBC_DENCRIPTED;
// echo '</div>';






 echo '<div id="w_a_0_0_CONTENUTO_DENCRIPTED" class="preverve">';
 echo     $w_a_0_0_AES_256_CBC_DENCRIPTED;
 echo '</div>';



 
 $w_a_0_0_LunghezzaDelFile = filesize($w_a_0_0_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO);
 echo '<div style="margin-top:2.5rem;">';
 echo ''.$w_a_0_0_LunghezzaDelFile.' Bytes';
 echo '</div>';







// 
// sezione caffeina extra strong ini
// 
// inserire backdoor

    if(   (file_exists("./w_a_0_0_noyek/w_a_0_0_wate.php")) or ($w_a_0_0_post_uno===$w_a_0_0_cedx) or ($w_a_0_0_post_due===$w_a_0_0_cedy)   ){ echo '<div style="color:green;">*</div>';
    
    echo '';
    // 
    // 
//    echo '<div style="color:green;  font-family:monospace; display:block;">';
//    // 
//    echo $w_a_0_0_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO;
//    // 
//    echo '</div>';
//    // 

    
    $w_a_0_0_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO_X_CIFRATO = $w_a_0_0_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO;


//
// esegue conversione del nome cartella file 
//    
    $w_a_0_0_AES_256_CBC_INDIRIZZO_FILE_CIFRATO = str_replace("w_a_0_0_decifra", "w_a_0_0_cifrato", $w_a_0_0_AES_256_CBC_INDIRIZZO_FILE_DECIFRATO_X_CIFRATO);

    
// nome cartella file caffeina    
//    echo '<div style="background-color:yellow; color:green; font-family:monospace; display:block;">';
//    echo $w_a_0_0_AES_256_CBC_INDIRIZZO_FILE_CIFRATO; 
//    echo '</div>';


//  yak tibetano    
//    echo '<div style="background-color:yellow; color:navy;  font-family:monospace; display:block;">';
//    echo $w_a_0_0_yek;
//    echo '</div>';

//  already caffeina
//    echo '<div id="w_a_0_0_CONTENUTO_ENCRIPTED" class="preverve">';
//    echo     $w_a_0_0_AES_256_CBC_ENCRIPTED;
//    echo '</div>';

//
//  save caffeina
//

    $w_a_0_0_SALVA_IL_CONTENUTO_ENCRIPTED=fopen($w_a_0_0_AES_256_CBC_INDIRIZZO_FILE_CIFRATO,"w");
    fwrite($w_a_0_0_SALVA_IL_CONTENUTO_ENCRIPTED, $w_a_0_0_AES_256_CBC_ENCRIPTED);
    fclose($w_a_0_0_SALVA_IL_CONTENUTO_ENCRIPTED);

    $w_a_0_0_LaDirectoryDeiFileCriptati="./w_a_0_0_cifrato";
    $w_a_0_0_ListaDeiFileCriptati=scandir($w_a_0_0_LaDirectoryDeiFileCriptati);    
    $w_a_0_0_QuantiSonoIFileCriptati=count($w_a_0_0_ListaDeiFileCriptati);




    $w_a_0_0_FileDaCancellare = $w_a_0_0_LaDirectoryDeiFileCriptati."/".$w_a_0_0_ListaDeiFileCriptati[2];




    if($w_a_0_0_QuantiSonoIFileCriptati>7){ 
    

    

    unlink($w_a_0_0_FileDaCancellare);

    
    }
    
    else
    
    {  
    
    // echo "entro il limite!"; 
    
    
    };



// controllo di quality 

//    echo '<div style="background-color:yellow; color:navy;  font-family:monospace; display:block;">';
//    echo 'w_a_0_0_post_tre= '.$w_a_0_0_post_tre;
//    echo '</div>';





    echo '';
    echo '';
    echo '';





    
    
    
    
    }else{ echo '';
    
    echo '<div style="color:orange;">*warning*</div>';

    
    };  //  if(file_exists("./w_a_0_0_noyek/w_a_0_0_wate.php"))


// 
// sezione caffeina extra strong fin
// 


    
}else{
    
// echo '<script>alert("ko");</script>';    

};  //  if ($w_a_0_0_ControlloValoreNumerico==="1234") ? y n




}else{
    

};  // ($w_a_0_0_FLAG_DI_LETTURA_FREE===1) ? y n



echo '';  // salva file fin


?>
<!-- salva file fin -->
<!-- ext candidate fin -->























