
  
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
<!-- 034 lettura cif -->


