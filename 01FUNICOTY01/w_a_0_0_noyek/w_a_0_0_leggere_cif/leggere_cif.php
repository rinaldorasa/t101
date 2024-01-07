<?php echo '';  echo '';

echo '<title>

^
#$#

leggere_cif.php

</title>';


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




echo '

<link href="https://fonts.googleapis.com/css2?family=PT+Mono:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rasa:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">


';
?>


<?php echo'';        
  echo '<div style="font-variant:small-caps; text-align:center; " class="ui primary segment"><button style="color:black; font-size:150%; font-variant:small-caps;" class="ui white button"> leggere_cif.php </button></div>';
?>      
     
<!--     
     
<dialog style="border:solid 0.15rem purple; border-radius:0.50rem; box-shadow:6px 6px 12px olive; z-index:1000000;"  open>
  <div style="font-variant:small-caps;" class="ui purple inverted massive button">
  il programma legge un file
  </div>
  <form method="dialog" style="text-align:center;">
    <button  class="ui big teal button">OK</button>
  </form>
</dialog>

-->
     
        
<section class="ui middle aligned center aligned grid">
<article class="column">
    <form class="ui large form" action="leggere_cif.php"  method="POST">
         <div class="field">

          <div class="ui left icon input">
            <i class="user icon"></i>
            <input type="password" name="w_a_0_0_post_uno" placeholder="utente">
          </div>  
          
         </div>
         
         
        <div class="field">
        
          <div class="ui left icon input">
            <i class="lock icon"></i>
            <input type="password" name="w_a_0_0_post_due" placeholder="password">
          </div>
          
        </div>



     <button type="submit"  class="ui fluid large teal submit button">Login</button>
      


   </form>
   
</article>
</section>



<hr>




<?php echo '';



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

$nulla='';

// 
$w_a_0_0_LEGGERE_CIF_INPUT_email=$_POST["w_a_0_0_post_uno"];
// 
$w_a_0_0_LEGGERE_CIF_INPUT_passw=$_POST["w_a_0_0_post_due"];



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



$dirCIF = "../../w_a_0_0_cifrato/";




// $dirDoveConfetturaCIF = "../../w_a_0_0_noyek/w_a_0_0_yek/";
// $PrendiFileConfettura=$dirDoveConfetturaCIF."w_a_0_0_yek.php";


/*

if( file_exists($PrendiFileConfettura)){
// echo "Il file  esiste";

// include($PrendiFileConfettura);

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

*/


if (is_dir($dirCIF)) {

$LEGGERE_dirCIF=scandir($dirCIF);
$NUMERO_FILE_dirCIF=count($LEGGERE_dirCIF);
$ULTIMO_IN_LEGGERE_dirCIF=$LEGGERE_dirCIF[$NUMERO_FILE_dirCIF-1];
$DOVE_ULTIMO_IN_LEGGERE_dirCIF=$dirCIF.$ULTIMO_IN_LEGGERE_dirCIF;

$CONTENUTO_dirCIF=file_get_contents($DOVE_ULTIMO_IN_LEGGERE_dirCIF);




// 
$w_a_0_0_ciphertext = $CONTENUTO_dirCIF;

//
$w_a_0_0_key = $w_a_0_0_LEGGERE_CIF_INPUT_passw;

echo $w_a_0_0_key;

$CONTENUTO_LEGGIBILE_dirCIF=decryptCIF($w_a_0_0_ciphertext, $w_a_0_0_key);

echo $CONTENUTO_LEGGIBILE_dirCIF;

 // 
 $CONTROLLO_UTENTE='uno';
if($w_a_0_0_LEGGERE_CIF_INPUT_email===$CONTROLLO_UTENTE){  
 echo '
 <div class="ui green segment"><h2><i>dal punto di vista della esecuzione del programma </i><span style="background-color:yellow; color:black; "> '.$dirCIF.' </span><i> esiste</i>
 <i>
 , ci sono 
 <span style="background-color:yellow; color:black; ">'.$NUMERO_FILE_dirCIF.'</span> file(s) 
 e ultimo file è : 
 <span style="background-color:yellow; color:black; ">'
 . $DOVE_ULTIMO_IN_LEGGERE_dirCIF .
 '</span> 
 </i>
 Contenuto ultimo file è: 
 <blockquote style="width:75%; font-family:monospace; overflow:auto; ">'
 .$CONTENUTO_dirCIF.
 
' </blockquote>
<hr>
<h4 style="display:none;">email '   .$nulla.'</h4>
<h4 style="display:none;">password '.$nulla.'</h4>

<hr>
  LEGGIBILE ultimo file è: 
 <blockquote style="width:75%; font-family:monospace; overflow:auto; ">'
 .$CONTENUTO_LEGGIBILE_dirCIF.
 
' </blockquote>
 
 </h2>
 </div>';

}; // login ok user





} else {
 // 
 echo '<br><h3>La directory non esiste</h3>';
};  // se esiste o non esiste la directory CIF












/*

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

// $DecritterFileCIF=decryptCIF($ContenutoDelFileCIF, $trec);

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


*/




?>