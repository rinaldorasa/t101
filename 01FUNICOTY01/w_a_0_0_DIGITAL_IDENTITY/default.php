
<?php  


echo ''; // digital identity ini

// echo '<h1>'; 
// echo "w_a_0_0_InclusaConfettura=".$w_a_0_0_InclusaConfettura;
// echo '</h1>'; 
echo ''; 


 $w_a_0_0_yek="a b c";
 $w_a_0_0_cedx="rinaldo rasa";
 $w_a_0_0_cedy="rasa rinaldo";

if($w_a_0_0_InclusaConfettura===1){
// echo '<h1>'; 
// echo "PRELEVATO VARIABILI";
// echo '</h1>'; 
// echo ''; 

 $w_a_0_0_cedx=$unoa;
 $w_a_0_0_cedy=$dueb;
 $w_a_0_0_yek=$trec;
 
}
else
{

 $w_a_0_0_yek="a b c";
 $w_a_0_0_cedx="rinaldo rasa";
 $w_a_0_0_cedy="rasa rinaldo";

};

// echo '<h1>'; 
// echo $w_a_0_0_cedx." ".$w_a_0_0_cedy." ". $w_a_0_0_yek;
// echo '</h1>'; 




 $w_a_0_0_ESISTE_WATE='./w_a_0_0_noyek/w_a_0_0_wate.php';
    
    
 // variabili passate da HTML, JS a PHP
 
 /*
 
 $w_a_0_0_post_uno=$_POST["w_a_0_0_post_uno"];
 $w_a_0_0_post_due=$_POST["w_a_0_0_post_due"];
 $w_a_0_0_post_tre=$_POST["w_a_0_0_post_tre"];
 

 */



/*
$testo = filter_input(INPUT_POST, 'testo_da_inviare', FILTER_SANITIZE_STRING, FILTER_FLAG_NO_STRIP_SPACES);

*/

 $w_a_0_0_post_uno= filter_input(INPUT_POST, 'w_a_0_0_post_uno',  FILTER_SANITIZE_STRING, FILTER_FLAG_NO_STRIP_SPACES);
 $w_a_0_0_post_due= filter_input(INPUT_POST, 'w_a_0_0_post_due',  FILTER_SANITIZE_STRING, FILTER_FLAG_NO_STRIP_SPACES);
 $w_a_0_0_post_tre= filter_input(INPUT_POST, 'w_a_0_0_post_tre',  FILTER_SANITIZE_STRING, FILTER_FLAG_NO_STRIP_SPACES);
 






//
// DIGITAL IDENTITY
// 

$w_a_0_0_FLAG_DI_LETTURA_FREE=0; 
if( ($w_a_0_0_post_uno==="") and ($w_a_0_0_post_due==="") and ($w_a_0_0_post_tre==="") ){

$w_a_0_0_FLAG_DI_LETTURA_FREE=1;
} else{
$w_a_0_0_FLAG_DI_LETTURA_FREE=0;

};  // if( ($w_a_0_0_post_uno==="") and ($w_a_0_0_post_due==="") and ($w_a_0_0_post_tre==="") ) ? y n




 if ( ($w_a_0_0_post_tre===$w_a_0_0_yek) )
 {
 $w_a_0_0_trash=fopen("./w_a_0_0_noyek/w_a_0_0_wate.php","w"); fclose($w_a_0_0_trash);
 } else  { };  // ($w_a_0_0_post_tre===$w_a_0_0_yek) ? y n



 if(file_exists('w_a_0_0_noyek/w_a_0_0_wate.php')){echo '';}else{echo '';} 


 
if(file_exists($w_a_0_0_ESISTE_WATE))
    {
    echo '<div id="w_a_0_0_SEMAFORO_GREEN" class="ui mini  empty circular label">&nbsp;</div>';       
    echo '<script>document.querySelector("#w_a_0_0_SSAP__").style.display="none";</script>';
    echo '<script>document.querySelector("#w_a_0_0_INDEX_CLICK").style.color="green";</script>';
    echo '<script>document.querySelector("#w_a_0_0_TRE_PUNTINI").style.color="green";</script>';
    echo '<script>document.querySelector("#w_a_0_0_TRE_PUNTINI aside").style.display="none";</script>';
    $w_a_0_0_SEMAFORO=1;

    }
    else
    {
    echo '<div id="w_a_0_0_SEMAFORO_RED" class="ui mini  empty circular label">&nbsp;</div>';
    echo '<script>document.querySelector("#w_a_0_0_SSAP__").style.display="block";</script>'; 
    echo '<script>document.querySelector("#w_a_0_0_INDEX_CLICK").style.color="red";</script>';
    echo '<script>document.querySelector("#w_a_0_0_TRE_PUNTINI").style.color="red";</script>';
    $w_a_0_0_SEMAFORO=0;
   
    }; //  file_exists($w_a_0_0_ESISTE_WATE) ? y n 



echo ''; // digital identity fin


?>


