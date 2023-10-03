
<!-- post testo e salva -->
<?php 

$Testo="al momemto nessun post";
 
$Testo=$_POST["IMMISSIONE_TESTO_DINAMICO__"];

// elenco nomi 
 
$NomeFileBak_01=""; 
$NomeFileBak_02="htm_wippy"; 
$NomeFileBak_02="AFORM"; 
$NomeFileBak_02="htm_wippy"; 



 
$NomePrefisso=$NomeFileBak_02; 

// $t=time(); 
// $Postfisso = date("Y_m_d",$t); 
 
// inserire il postfisso 
// nel salvataggio di backup 

$Postfisso =""; 
 
// 
$HtmTxt =  $NomePrefisso.$Postfisso.".txt"; 
 
$SalvaUNO=fopen($HtmTxt,"a"); 
fwrite($SalvaUNO,$Testo); 
fclose($SalvaUNO); 

if( file_exists("baktxt")){}else{mkdir("baktxt");};

copy($HtmTxt, "./baktxt/".$HtmTxt);

//copy($from, $to);
 
?> 

