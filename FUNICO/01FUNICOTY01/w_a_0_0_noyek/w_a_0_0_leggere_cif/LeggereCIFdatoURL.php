<?php echo '';  echo '';

echo '<title>

●

LeggereCIF
</title>';

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



$dirCIF = "../w_a_0_0_cifrato/";
$dirDoveConfetturaCIF = "../w_a_0_0_noyek/w_a_0_0_yek/";
$PrendiFileConfettura=$dirDoveConfetturaCIF."w_a_0_0_yek.php";

if( file_exists($PrendiFileConfettura)){
// echo "Il file  esiste";

include($PrendiFileConfettura);

// echo ' '.$unoa;
// echo ' '.$dueb;
// echo ' '.$trec;
// echo ' '.$quad;

echo '';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '';
echo '';


}



if (is_dir($dirCIF)) {
 // echo "La directory esiste";
} else {
 // echo "La directory non esiste";
}

if (is_dir($dirDoveConfetturaCIF)) {
 //  echo "La directory esiste";
} else {
 //  echo "La directory non esiste";
}







$ListaFikesCIF=scandir($dirCIF);
$QuantiFikesCIF=count($ListaFikesCIF);

// echo '<div>'; echo $QuantiFikesCIF ; echo '</div>';

// echo '<div>'; echo $ListaFikesCIF[$QuantiFikesCIF-1] ; echo '</div>';

$DoveTrovoIlFileCIF=$dirCIF.$ListaFikesCIF[$QuantiFikesCIF-1] ;

// echo '<div>'; echo $DoveTrovoIlFileCIF ; echo '</div>';

$ContenutoDelFileCIF=file_get_contents($DoveTrovoIlFileCIF) ; 


// echo '<details>';echo '<summary>';echo '</summary>';
// echo '<div style="width:75%;"  class="preverveCIF">'; echo $ContenutoDelFileCIF ;  echo '</div>';
// echo '</details>';


// $DecritterFileCIF=decryptCIF($ContenutoDelFileCIF,"a b c");

$DecritterFileCIF=decryptCIF($ContenutoDelFileCIF, $trec);



echo '<details  open="true">';echo '<summary>';echo '</summary>';
echo '<div style="width:75%;"  class="preverveCIF">'; echo $DecritterFileCIF ;  echo '</div>';
echo '</details>';




echo '';
echo '';
echo '';
echo '';
echo '';




echo '';
echo '';
echo '';
echo '';
echo '';




?>