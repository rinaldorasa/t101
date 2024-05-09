<?php 


$w_a_1_1_TestoGrezzoInviato = " < = >  ' \"    ";

//
// si esegue la sanitizzazione
//

//  <  <
//  >  >

// $w_a_1_1_STRINGA_NUOVA = str_replace("<", "&#5176;", $w_a_1_1_TestoGrezzoInviato);
// $w_a_1_1_Testo0= $w_a_1_1_STRINGA_NUOVA;
// $w_a_1_1_STRINGA_NUOVA = str_replace(">", "&#5171;", $w_a_1_1_Testo0); 
// $w_a_1_1_Testo1= $w_a_1_1_STRINGA_NUOVA;
// $w_a_1_1_STRINGA_NUOVA = str_replace('\'', "&#10076;", $w_a_1_1_Testo1); 
// $w_a_1_1_Testo2= $w_a_1_1_STRINGA_NUOVA;
// $w_a_1_1_STRINGA_NUOVA = str_replace("\"", "&#10078;", $w_a_1_1_Testo2);


// $w_a_1_1_STRINGA_NUOVA = str_replace("&#60;", "&#5176;", $w_a_1_1_TestoGrezzoInviato);
// $w_a_1_1_Testo0= $w_a_1_1_STRINGA_NUOVA;
// $w_a_1_1_STRINGA_NUOVA = str_replace("&#62;", "&#5171;", $w_a_1_1_Testo0); 
// $w_a_1_1_Testo1= $w_a_1_1_STRINGA_NUOVA;
// $w_a_1_1_STRINGA_NUOVA = str_replace('\'', "&#10076;", $w_a_1_1_Testo1); 
// $w_a_1_1_Testo2= $w_a_1_1_STRINGA_NUOVA;
// $w_a_1_1_STRINGA_NUOVA = str_replace("\"", "&#10078;", $w_a_1_1_Testo2);


// 34 "  quotation mark
// 39 '  apostrophe


 $w_a_1_1_STRINGA_NUOVA = str_replace("&#60;", "&#5176;", $w_a_1_1_TestoGrezzoInviato);
 $w_a_1_1_Testo0= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace("&#62;", "&#5171;", $w_a_1_1_Testo0); 
 $w_a_1_1_Testo1= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace('\'', "&#10076;", $w_a_1_1_Testo1); 
 $w_a_1_1_Testo2= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace("\"", "&#10078;", $w_a_1_1_Testo2);

 $w_a_1_1_Testo3= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace("=", "&#12307;", $w_a_1_1_Testo3);
 

//
// effettuata sanitizzazione
//
	$w_a_1_1_TestoInviatoSanitizzato = $w_a_1_1_STRINGA_NUOVA;


echo '<div style="color:maroon; font-size:125%; font-family:monospace;">' . $w_a_1_1_TestoInviatoSanitizzato .'<div>' ;


?>
