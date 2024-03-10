

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
<!--  032 digital identity -->



