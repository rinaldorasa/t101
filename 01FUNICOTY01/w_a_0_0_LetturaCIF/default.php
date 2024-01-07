<?php  

echo '';


// 
// LetturaCIF
// 
// attenzione: qua ha un alias
//

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
 function encryptCIF($w_a_0_0_plaintext, $w_a_0_0_key) {
 $method = "AES-256-CBC";
 $iv = openssl_random_pseudo_bytes(16);
 $w_a_0_0_ciphertext = openssl_encrypt($w_a_0_0_plaintext, $method, $w_a_0_0_key, OPENSSL_RAW_DATA, $iv);
 return base64_encode($iv . $w_a_0_0_ciphertext);
 };
 
 // Funzione per decifrare una stringa cifrata utilizzando AES-256-CBC
 function decryptCIF($w_a_0_0_ciphertext, $w_a_0_0_key) {
 $w_a_0_0_ciphertext = base64_decode($w_a_0_0_ciphertext);
 $iv = substr($w_a_0_0_ciphertext, 0, 16);
 $w_a_0_0_ciphertext = substr($w_a_0_0_ciphertext, 16);
 $w_a_0_0_plaintext = openssl_decrypt($w_a_0_0_ciphertext, "AES-256-CBC", $w_a_0_0_key, OPENSSL_RAW_DATA, $iv);
 return $w_a_0_0_plaintext;
 };


// echo '<h3>';
// echo 'Questo Ã¨ un test per la lettura asincrona interna';
// echo '</h3>';
// echo '<h4>w_a_0_0_post_uno= '; echo $w_a_0_0_post_uno; echo '</h4>';
// echo '<h4>w_a_0_0_post_due= '; echo $w_a_0_0_post_due; echo '</h4>';
// echo '<h4>w_a_0_0_post_tre= '; echo $w_a_0_0_post_tre; echo '</h4>';
// echo '<h4>w_a_0_0_post_qua= '; echo $w_a_0_0_ControlloValoreNumerico; echo '</h4>';

$w_a_0_0_ConcatenazioneUser=$w_a_0_0_post_uno.$w_a_0_0_post_due;

// echo '<h4>w_a_0_0_ConcatenazioneUser= '; echo $w_a_0_0_ConcatenazioneUser; echo '</h4>';

$dirDoveConfetturaCIF = "./w_a_0_0_noyek/w_a_0_0_yek/";
$PrendiFileConfettura=$dirDoveConfetturaCIF."w_a_0_0_yek.php";
if( file_exists($PrendiFileConfettura)){
// echo "<h2>Il file  esiste</h2>";

include($PrendiFileConfettura);
$w_a_0_0_ConcatenazioneConfettura_1_2=$unoa.' '.$dueb.' ';


};


if ($w_a_0_0_ConcatenazioneUser===$w_a_0_0_ConcatenazioneConfettura_1_2){
// echo "<h2>Controllo Quality OK</h2>";

$dirCIF = "./w_a_0_0_cifrato/";
$ListaFikesCIF=scandir($dirCIF);
$QuantiFikesCIF=count($ListaFikesCIF);

$DoveTrovoIlFileCIF=$dirCIF.$ListaFikesCIF[$QuantiFikesCIF-1] ;

$ContenutoDelFileCIF=file_get_contents($DoveTrovoIlFileCIF) ; 

$DecritterFileCIF=decryptCIF($ContenutoDelFileCIF, $trec);




echo '<details>';echo '<summary>';echo '</summary>';
echo '<div style="margin-left:12.5%; width:75%; text-align:left; box-shadow:6px 6px 12px teal;"  class="preverveCIF">'; echo $DecritterFileCIF ;  echo '</div>';
echo '</details>';




}else{
// echo "<h2>Controllo Quality KO</h2>";

};



echo '<h4>'; echo ''; echo '</h4>';
echo '<h4>'; echo ''; echo '</h4>';
echo '<h4>'; echo ''; echo '</h4>';
echo '<h4>'; echo ''; echo '</h4>';
echo '<h4>'; echo ''; echo '</h4>';
echo '<h4>'; echo ''; echo '</h4>';
echo '<h4>'; echo ''; echo '</h4>';
echo '<h4>'; echo ''; echo '</h4>';
echo '<h4>'; echo ''; echo '</h4>';





?>
