


<?php 

$Testo="al momemto nessun post";
 
$Testo=$_POST["IMMISSIONE_TESTO_DINAMICO__"];


// $t=time(); 
// $Postfisso = date("Y_m_d",$t); 
 
// inserire il postfisso 
// nel salvataggio di backup 

$Postfisso =""; 
 
$HtmHtm =  $NomePrefisso.$Postfisso.".htm"; 
$HtmTxt =  $NomePrefisso.$Postfisso.".txt"; 
 
 
$SalvaUNO=fopen($HtmHtm,"a"); 
fwrite($SalvaUNO,$Testo); 
fclose($SalvaUNO); 
 
$SalvaUNO=fopen($HtmTxt,"a"); 
fwrite($SalvaUNO,$Testo); 
fclose($SalvaUNO); 



if( file_exists("baktxt")){}else{mkdir("baktxt");};

copy($HtmTxt, "./baktxt/".$HtmTxt);

//copy($from, $to);

 
?> 












