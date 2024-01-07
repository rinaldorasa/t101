
<?php echo '';


// $SALVATAGGIOCIF="1";

if( file_exists("SALVATAGGIOCIF.php") ){
$SALVATAGGIOCIF="1";
// echo 'trovato file';
}
else
{
$SALVATAGGIOCIF="0";
// echo 'NON trovato file';
};


// 
// qui va estesa la condizione , la funzione viene eseguita
// solo se esiste una particolare condizione vale a dire
// esiste in directory un particolare file, in questo caso
// SALVATAGGIOCIF.php
// 

if($SALVATAGGIOCIF==="1"){

echo '

<script>
 document.querySelector("#w_a_0_0_SALVATAGGIO_DI_TIPO_CIF_SVG").style.color="green";

function w_a_0_0_SALVATAGGIO_CIF(){
// 
alert("opzione attivata");

// 

document.location.replace("./w_a_0_0_noyek/w_a_0_0_savecif/savecif.php");


};

</script>

';
}
else
{
// echo '<h1>Indefinito'.'[ '.$SALVATAGGIOCIF.' ] </h1>';

echo '<script> 

 document.querySelector("#w_a_0_0_SALVATAGGIO_DI_TIPO_CIF_SVG").style.color="red";


function w_a_0_0_SALVATAGGIO_CIF(){ 
alert("opzione disattivata RIAVVIARE 2 VOLTE IL PROGRAMMA"); 
// document.querySelector("#w_a_0_0_SALVATAGGIO_DI_TIPO_CIF_SVG").style.color="red";

};
</script>';

};

?>








