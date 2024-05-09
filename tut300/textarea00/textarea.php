


<?php 

//  modu_isset_session.php

$LIBRERIA_DIR_LOGIN='./dlb/a/';
$LIBRERIA_FIL_LOGIN=$LIBRERIA_DIR_LOGIN . 'login.php';


 session_start(); 
 if(!isset($_SESSION['UserData']['Username'])){
 
 header('location:' . $LIBRERIA_FIL_LOGIN );
 
 exit;
 }
 
//  modu_isset_session.php 
 
?> 

<?php  
//  
// 
// 
// 		textarea_240508_1945a  
// 
// 
// 

// qui si decide
// se usare moduli
// 
$INCLUSIONE_MODULI = 0; 
$w_a_1_1_PHP_DIR_modu_META = 'w_a_0_0_modu' ;

?>


<?php  
// ad inizio occorre definire una configurazione 
// per un riferimento modulare prima di tutto
// se includere i moduli che si trovano nella
// in una apposita cartella vedere inghippo
// 
// 
?>


<?php
// modu_doctype_html_head_apertura.php
 echo '<!DOCTYPE html>'; 
 echo '<html id="w_a_1_1_HTML">';  
 echo '<head>'; 
// modu_doctype_html_head_apertura.php  
?> 



<?php   
// modu_inclusione_modu_meta.php

if($INCLUSIONE_MODULI===1){
include('./'.$w_a_1_1_PHP_DIR_modu_META.'/'.'modu_meta.php');
// modu_inclusione_modu_meta.php
}
else
{

echo '
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/png" href="https://it.altervista.org/images/favicon/favicon-16x16.png" sizes="16x16">
';
	
};
?> 




<?php  
// modu_title.php

echo '
<title>  

လ

textarea_240508_1945a   

#4124

</title>

';
// modu_title.php
?> 





<?php

// modu_variabili_di_sistema.php

//
// VARIABILI DI SISTEMA
//

$FUNICOTY_RUNNING='textarea.php';


$w_a_1_1_PHP_DIR_decifra   = 'w_a_0_0_decifra' ;
$w_a_1_1_PHP_DIR_cifrato   = 'w_a_0_0_cifrato' ;
$w_a_1_1_PHP_DIR_noyek 	   = 'w_a_0_0_noyek'   ;
$w_a_1_1_PHP_FIL_wate 	   = 'w_a_0_0_wate.php';
$w_a_1_1_PHP_DIR_yek 	   = 'w_a_0_0_yek'     ;
$w_a_1_1_PHP_FIL_yek 	   = 'w_a_0_0_yek.php' ;
$w_a_1_1_PHP_DIR_modu 	   = 'w_a_0_0_modu'    ;


$w_a_1_1_PHP_DIR_noyek_yek = './'.$w_a_1_1_PHP_DIR_noyek.'/'.$w_a_1_1_PHP_DIR_yek.'/';

if(is_dir($w_a_1_1_PHP_DIR_decifra))   {}else{ mkdir($w_a_1_1_PHP_DIR_decifra);  };
if(is_dir($w_a_1_1_PHP_DIR_cifrato))   {}else{ mkdir($w_a_1_1_PHP_DIR_cifrato);  };
if(is_dir($w_a_1_1_PHP_DIR_noyek))     {}else{ mkdir($w_a_1_1_PHP_DIR_noyek);    };
if(is_dir($w_a_1_1_PHP_DIR_noyek_yek)) {}else{ mkdir($w_a_1_1_PHP_DIR_noyek_yek);};
if(is_dir($w_a_1_1_PHP_DIR_modu))      {}else{ mkdir($w_a_1_1_PHP_DIR_modu);     };



// 
// creazione della cartella $w_a_1_1_PHP_DIR_decifra
// riempimento di $w_a_1_1_PHP_DIR_decifra con file_n-1 
// $FILE_DECIFRATO
// 
// 

// nome file_n-1 (il precedente originario)
$FILE_DECIFRATO='1970_01_01.w_a_0_0_decifra';

// dove creare file_n-1 (il precedente originario)
// ||
// ||
// \/
$DEFAULT_nome_file_DECIFRATO ='./'.$w_a_1_1_PHP_DIR_noyek.'/'.$FILE_DECIFRATO;
// creato file_n-1 
$handle_DEFAULT_nome_file_DECIFRATO = fopen($DEFAULT_nome_file_DECIFRATO, "w");
// fwrite($handle_DEFAULT_nome_file_DECIFRATO, date("Y_m_d". '_'. time()));
fwrite($handle_DEFAULT_nome_file_DECIFRATO, '');

fclose($handle_DEFAULT_nome_file_DECIFRATO);

// || 
// || una volta creato il file va copiato nella
// || directory dec e deve sempre figurare come
// || primo della lista in un sort() e come 
// || [2] elemento dopo [0 .] e [1 ..] clausola
// || molto importante tenendo conto del modo di
// || archiviare simil-database con timestamp e
// || quindi rispettando la logica del database
// || il file precedente originario figura sempre
// || come primo della lista ordinando i file in
// || ordinare temporale ascendente il time stamp
// || inizia il primo gennaio 1970
// ||
// \/

copy($DEFAULT_nome_file_DECIFRATO, './'.$w_a_1_1_PHP_DIR_decifra.'/'.$FILE_DECIFRATO);
// ||
// || controllo lista sort numero files
// \/
$Busta_DECIFRATO = './'.$w_a_1_1_PHP_DIR_decifra.'/';
$Lista_DECIFRATO = scandir($Busta_DECIFRATO);
 sort($Lista_DECIFRATO);
$Conta_DECIFRATO = count($Lista_DECIFRATO);
$Maxim_DECIFRATO = 5;
if($Maxim_DECIFRATO<7){$Maxim_DECIFRATO=7;}else{};
if($Conta_DECIFRATO>$Maxim_DECIFRATO)
{
// echo "superiore";
// si tengono i primi tre e
// gli ultimi tre della lista
// cancellando il quarto



unset($Lista_DECIFRATO[$Conta_DECIFRATO-1]);
unset($Lista_DECIFRATO[$Conta_DECIFRATO-2]);
unset($Lista_DECIFRATO[$Conta_DECIFRATO-3]);

unset($Lista_DECIFRATO[0]);
unset($Lista_DECIFRATO[1]);



unlink('./w_a_0_0_decifra/'.$Lista_DECIFRATO[3]);

// echo '<div><kbd class="ui orange label">Lista DEC  '  .$Conta_DECIFRATO.' supera il limite</kbd></div>';


}else{

// echo '<div><kbd class="ui olive label">Lista DEC  '  .$Conta_DECIFRATO.' </kbd></div>'; 

};


$Busta_CIFRATURA = './'.$w_a_1_1_PHP_DIR_cifrato.'/';
$Lista_CIFRATURA = scandir($Busta_CIFRATURA);
 sort($Lista_CIFRATURA);
$Conta_CIFRATURA = count($Lista_CIFRATURA);

$Maxim_CIFRATURA = 5;
if($Maxim_CIFRATURA<7){$Maxim_CIFRATURA=7;}else{};
if($Conta_CIFRATURA>$Maxim_CIFRATURA)
{
unset($Lista_CIFRATURA[$Conta_CIFRATURA-1]);
unset($Lista_CIFRATURA[$Conta_CIFRATURA-2]);
unset($Lista_CIFRATURA[$Conta_CIFRATURA-3]);

unset($Lista_CIFRATURA[0]);
unset($Lista_CIFRATURA[1]);

unlink('./w_a_0_0_cifrato/'.$Lista_CIFRATURA[2]);


}
else{};


// modu_variabili_di_sistema.php
?>




<?php  
if($INCLUSIONE_MODULI===1){
include('./'.$w_a_1_1_PHP_DIR_modu.'/'.'modu_semantic_fonts.php');
}
else
{

// SEMANTIC-UI E GOOGLE-FONTS
// esaminare una serie di condizioni per semantic-ui
//

$SEMANTIC_UI_CSS = '../'.'semantic'.'/'.'Semantic-UI-master'.'/'.'dist'.'/'.'semantic.min.css' ;
$SEMANTIC_UI_JAS = '../'.'semantic'.'/'.'Semantic-UI-master'.'/'.'dist'.'/'.'semantic.min.js' ;
if(file_exists($SEMANTIC_UI_CSS)){}else{};
if(file_exists($SEMANTIC_UI_JAS)){}else{};

echo '
<link rel="stylesheet" href="../semantic/Semantic-UI-master/dist/semantic.min.css">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="../semantic/Semantic-UI-master/dist/semantic.min.js"></script>

';


/* CDN come elemento di recupero */

echo '
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.css">
<script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.5.0/dist/semantic.min.js"></script>

';

 
// fonts di sistema

echo '

<link href="https://fonts.googleapis.com/css2?family=PT+Mono:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rasa:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

';
	
};




if($INCLUSIONE_MODULI===1){
include('./'.$w_a_1_1_PHP_DIR_modu.'/'.'modu_styles.php');
}
else
{

// stili_css
echo '
<style>
button{background-color:transparent;border-color:transparent;}

 #w_a_1_1_HTML{}
 #w_a_1_1_BODY{border:solid 0.15rem transparent;}
 
 #w_a_1_1_DETAILS_TESTO_DINAMICO{border:solid 0.00rem olive;}
 #w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO{color:olive; font-size:5rem; font-family:monospace;border-bottom:solid 0.00rem green; border-radius:0.50rem; visibility:visible; display:none;}
 #w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO_SVG{width:48px; height:48px; color:green;}
 
 #w_a_1_1_MAIN{}
 
 #w_a_1_1_TRASH_PUNTINI_ETC{text-align:center; border:dashed 0.00rem olive;}
 #w_a_1_1_TRASH_CAN{display:initial; display:initial; display:none;}
 #w_a_1_1_TRASH_CAN_SVG{display:none;}
 #w_a_1_1_TRASH_CAN_SEMANTIC_SVG{color:orange; font-size:5.95rem;}
 #w_a_1_1_TRASH_CAN_SEMANTIC_SVG:hover{cursor:pointer;}
 #w_a_1_1_TRE_PUNTINI{}
 #w_a_1_1_TRE_PUNTINI_TEXT{font-size:5rem; display:none;}
 #w_a_1_1_TRE_PUNTINI_TRIANGLE_SVG{display:none;}
 #w_a_1_1_TRE_PUNTINI_TRIANGLE_SEMANTIC_SVG{margin-left:2.50rem;font-size:5rem;}

 #w_a_1_1_DARKMODE{display:inline-block;}
 #w_a_1_1_DARKMODE_SVG{width:80px; height:80px;}
 #w_a_1_1_LIGHTMODE{display:inline-block;}
 #w_a_1_1_LIGHTMODE_SVG{width:80px; height:80px;}
 
 #w_a_1_1_BACKDOOR_FORM_SI{}
 #w_a_1_1_BACKDOOR_FORM_SI{display:inline-block;}
 #w_a_1_1_BACKDOOR_FORM_SI_SVG{width:80px; height:80px;}
 
 #w_a_1_1_BACKDOOR_FORM_NO{}
 #w_a_1_1_BACKDOOR_FORM_NO{display:inline-block;}
 #w_a_1_1_BACKDOOR_FORM_NO_SVG{width:80px; height:80px;}
 
 
 
 
 
 #w_a_1_1_SALVATAGGIO_DI_TIPO_CIF{position:fixed; bottom:0rem; left:0rem; display:inline-block;}
 #w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SVG{width:80px; height:80px; display:inline-block;} 
 #w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SUMMARY{background-color:orange; color:orange;  display:inline-block;}
 #w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SUMMARY:hover{cursor:pointer;}
 
 
  
 #w_a_1_1_UP_DOWN_NELLA_PAGINA{position:fixed; top:9.00rem;  top:25%;  left:0%; width:auto; height:auto;}
 #w_a_1_1_UP_DOWN_NELLA_PAGINA{display:block; z-index:999;}

 #w_a_1_1_UP_NELLA_PAGINA{display:block; border:solid 0.00rem green;}
 #w_a_1_1_UP_NELLA_PAGINA_SVG{  width:60px; height:60px; display:block;}
 
 #w_a_1_1_DOWN_NELLA_PAGINA{display:block; border:solid 0.00rem red;} 
 #w_a_1_1_DOWN_NELLA_PAGINA_SVG{width:60px; height:60px; display:block;}




 
 
 #w_a_1_1_FORM_X_INVIA__{border:dotted 0.00rem olive;}
 #w_a_1_1_FORM_X_INVIA_AES__{border:solid 0.00rem olive;}


 #w_a_1_1_DIGITAL_IDENTITY_FREE_READING{} 
 
 #w_a_1_1_SSAP__{text-align:center; border:solid 0.00rem olive;}
 #w_a_1_1_post_uno__{width:20%; font-size:2.5rem; background-color:transparent; color:transparent; font-family:monospace; opacity:0.75;} 
 #w_a_1_1_post_due__{width:20%; font-size:2.5rem; background-color:transparent; color:transparent; font-family:monospace; opacity:0.75;}
 #w_a_1_1_post_tre__{width:20%; font-size:2.5rem; background-color:transparent; color:transparent; font-family:monospace; opacity:0.75;}
 #w_a_1_1_post_qua__{width:20%; font-size:2.5rem; background-color:transparent; color:transparent; font-family:monospace; opacity:0.75;}

 
 #w_a_1_1_area_immissione_testo_invia_container__{text-align:center; border:solid 0.00rem lime;}
 #w_a_1_1_area_immissione_testo__{width:90%; height:48rem; font-size:5rem; font-family:monospace;}
 #w_a_1_1_invia_testo_container__{text-align:center;}
 #w_a_1_1_invia_testo_button__{width:50%; font-size:5rem; font-family:"PT Mono",monospace; text-transform:uppercase;}
 #w_a_1_1_INDEX_WRAP{position:fixed; top:1.00rem; right:0rem;}
 #w_a_1_1_INDEX_CLICK{}
 #w_a_1_1_INDEX_CLICK_SVG{width:80px; height:80px; box-shadow:6px 6px 12px black; border-radius:0.50rem;}
 #w_a_1_1_INDEX_CLICK_SVG:hover{width:80px; height:80px; background-color:white; color:red; box-shadow:6px 6px 12px black; border-radius:0.50rem; cursor:pointer;}
 #w_a_1_1_SEMAFORO_GREEN{ margin-left:80px; background-color:green; color:green; font-size:2.5rem; border-radius:100%; opacity:1; opacity:0;}
 #w_a_1_1_SEMAFORO_RED{   margin-left:80px; background-color:red; color:red; font-size:2.5rem; border-radius:100%;     opacity:1; opacity:0;}





 #w_a_1_1_CONTENUTO_DENCRIPTED{padding:0.50rem; background-color:navy; color:white; font-size:125%; font-family:monospace; overflow:auto;}

 #w_a_1_1_CONTENUTO_DENCRIPTED{padding:1.250rem; background-color:white; color:black; font-size:125%; font-family:"PT Mono", monospace; overflow:auto;}

 #w_a_1_1_CONTENUTO_DENCRIPTED{box-shadow:6px 6px 12px gray;}





 #w_a_1_1_AVVISO_MOBILE,  #w_a_1_1_AVVISO_DESKTOP{ font-family:monospace; font-variant:small-caps; text-align:center; display:none; }
 #w_a_1_1_rilevato_sistema_operativo_e_browser{font-family:monospace; font-variant:small-caps; text-align:center; }

 #w_a_1_1_GIORNO_TIME{margin-top:0.5rem; margin-bottom:0.5rem; font-family:"PT Mono", monospace; font-variant:small-caps; text-align:center;}


 #w_a_1_1_CONTENITORE_DETTAGLI_SLIDERS{position:fixed; top:9.00rem; top:25%; right:0.0rem;  background-color:transparent; background-color:yellow; background-color:rgba(255, 215, 0, 0.125); border:solid 0.00rem red; border-radius:0.35rem;}
 #w_a_1_1_DETTAGLI_SLIDERS{  text-align:center; background-color:transparent; border-width:0rem;}
 #w_a_1_1_SUMMARY_SLIDERS{ background-color:rgba(255, 215, 0, 0.50); border-width:0rem;} 
 #w_a_1_1_SLIDERS_SVG{width:60px; height:60px; color:purple; display:none;}

/* experimental */
/* || */
/* || */
/* || */
/* \/ */

 #w_a_1_1_CONTENITORE_DETTAGLI_SLIDERS{position:fixed; top:9.00rem; top:25%; top:25%; right:0.0rem;  background-color:transparent; background-color:yellow; background-color:rgba(255, 215, 0, 0.125); border:solid 0.00rem red; border-radius:0.35rem;}
 #w_a_1_1_DETTAGLI_SLIDERS{  padding-top:1.50rem; background-color:transparent; text-align:center; border-width:0rem;}
 #w_a_1_1_SUMMARY_SLIDERS{ background-color:rgba(255, 215, 0, 0.50); border-width:0rem;} 
 #w_a_1_1_SLIDERS_SVG{width:60px; height:60px; color:purple; display:none;}


/* experimental textarea.php */
/* nella versione dopo 17    */
/* 2024_04_25_a              */
/* || */
/* || */
/* || */
/* \/ */


#REVERSE_ULTIM_CIF{margin-left:7.5%; width:85%; text-align:left; box-shadow:6px 6px 12px teal;  font-family:"PT Mono", monospace;}
#REVERSE_ULTIM_CIF{
 inline-size: auto;
 overflow-wrap: break-word;
 border:solid 0.00rem gray;
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */ 
 }


#REVERSE_ULTIM_DEC{margin-left:7.5%; width:85%; text-align:left; box-shadow:6px 6px 12px gray;  font-family:"PT Mono", monospace;}
#REVERSE_ULTIM_DEC{
 inline-size: auto;
 overflow-wrap: break-word;
 border:solid 0.00rem gray;
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */ 
 }



</style>



<style>

.preverve{
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




echo '

<style>
.cursore {
 background: lime;
 line-height: 17px;
 margin-left: 3px;
 -webkit-animation: blink 0.8s infinite;
 width: 7px;
 height: 15px;
}

.cursore_freeTest{ line-height: 17px;  margin-left: 3px;  -webkit-animation: blink 0.8s infinite; }

.cursore_freeX{   width: 16px;  height: 16px;  -webkit-animation: blink 0.8s infinite;}
@-webkit-keyframes blink { 0% {background: #222}  50% {background: lime}  100% {background: #222} }

.cursore_free{   width: 16px;  height: 16px;  -webkit-animation: blink 1.8s infinite;}
@-webkit-keyframes blink { 0% {background: yellow}  50% {background: purple}  100% {background: #222} }


</style>
';


echo '

<style>

input[type="range"] {
    -webkit-appearance: none;
    background-color: orange;
    background-color: rgba(255, 255, 255, 0.75);

    width: 100%;
    height:20px;
	
	border-radius: 0.25rem;
}



input[type="range"]::-webkit-slider-thumb {
    -webkit-appearance: none;
    background-color: #666;
    opacity: 0.5;
    width: 10px; 
    height: 25px;
}



</style>

';


echo  '

<style>

ol {  list-style: none;  
counter-reset: CONTATORE_OLLI;}
ol li {  counter-increment: CONTATORE_OLLI;}
ol li::before {  
content: counter(CONTATORE_OLLI) ". ";  
background-color:aqua;
color: black;
font-size:75%;
border:solid 0.15rem aqua;border-radius: 100%;
display:inline-block;}	

</style>

';


	
};



if($INCLUSIONE_MODULI===1){
include('./'.$w_a_1_1_PHP_DIR_modu.'/'.'modu_file_essenziali.php');
}
else
{

function file_essenziali(
$arg00, 
$arg01
)
{
	
// dabaty (DATABASE installazione)	
	
//
// installa distribuzione
// da funicotynn+0
// a funicotynn+1
//


// FILE ESSENZIALI

$origin = $arg00 ;
$destin = $arg01 ;



// echo '<br>$destin= '.$destin;



if(is_dir($destin)){}else{mkdir($destin);};
copy('index.html'   , $destin.'indexTEXTAREA.html');
copy('textarea.php' , $destin.'textarea.php');
copy('textarea.txt' , $destin.'textarea.txt');
copy('LCIF.php'     , $destin.'LCIF.php');
copy('vdir.php'     , $destin.'vdir.php');





// ASSETS

if(is_dir($destin.'assets/')){}else{mkdir($destin.'assets/');};
if(is_dir($destin.'assets/clock/')){}else{mkdir($destin.'assets/clock/');};
copy( 'assets/clock/index-Cn0A_onJ.js'  , $destin.'assets/clock/index-Cn0A_onJ.js');
copy( 'assets/clock/index-DpF8Xlag.css' , $destin.'assets/clock/index-DpF8Xlag.css');
copy( 'assets/clock/vdir.php'           , $destin.'assets/clock/vdir.php');




// DLB

if(is_dir($destin.'dlb/')){}else{mkdir($destin.'dlb/');};
if(is_dir($destin.'dlb/a/')){}else{mkdir($destin.'dlb/a/');};
copy( 'dlb/a/login.php' , $destin.'dlb/a/login.php' );
copy( 'dlb/a/logout.php', $destin.'dlb/a/logout.php');
copy( 'dlb/a/pssw.php'  , $destin.'dlb/a/pssw.php'  );


if(is_dir($destin.'dlb/b/')){}else{mkdir($destin.'dlb/b/');};
copy( 'dlb/b/encdec.php'      , $destin.'dlb/b/encdec.php'      );
copy( 'dlb/b/gen.php'        , $destin.'dlb/b/gen.php'        );
copy( 'dlb/b/toolboxaes.txt' , $destin.'dlb/b/toolboxaes.txt' );


if(is_dir($destin.'dlb/c/')){}else{mkdir($destin.'dlb/c/');};
copy( 'dlb/c/encdec.php'           , $destin.'dlb/c/encdec.php'          );
copy( 'dlb/c/hashession_mini.php' , $destin.'dlb/c/hashession_mini.php');
copy( 'dlb/c/hashession_test.php' , $destin.'dlb/c/hashession_test.php');







// NOYEK YEK

if(is_dir($destin.'w_a_0_0_noyek/')){}else{mkdir($destin.'w_a_0_0_noyek/');};
copy('w_a_0_0_noyek/1970_01_01.w_a_0_0_decifra' , $destin.'w_a_0_0_noyek/1970_01_01.w_a_0_0_decifra');


if(is_dir($destin.'w_a_0_0_noyek/w_a_0_0_platform/')){}else{mkdir($destin.'w_a_0_0_noyek/w_a_0_0_platform/');};
copy('w_a_0_0_noyek/w_a_0_0_platform/platform.js' , $destin.'w_a_0_0_noyek/w_a_0_0_platform/platform.js');
copy('w_a_0_0_noyek/w_a_0_0_platform/index.js' ,    $destin.'w_a_0_0_noyek/w_a_0_0_platform/index.js');


if(is_dir($destin.'w_a_0_0_noyek/w_a_0_0_yek/')){}else{mkdir($destin.'w_a_0_0_noyek/w_a_0_0_yek/');};
copy('w_a_0_0_noyek/w_a_0_0_yek/w_a_0_0_yek.php' , $destin.'w_a_0_0_noyek/w_a_0_0_yek/w_a_0_0_yek.php');
copy('w_a_0_0_noyek/w_a_0_0_yek/w_a_0_0_stello.php' , $destin.'w_a_0_0_noyek/w_a_0_0_yek/w_a_0_0_stello.php');








// DEC 

if(is_dir($destin.'w_a_0_0_decifra/')){}else{mkdir($destin.'w_a_0_0_decifra/');};


$BustaDECorigin = $origin.'w_a_0_0_decifra/';
$ListaDECorigin = scandir($BustaDECorigin);
sort($ListaDECorigin);
$ContaDECorigin = count($ListaDECorigin);

// echo '<hr>';

$BustaDEC = $destin.'w_a_0_0_decifra/';
$ListaDEC = scandir($BustaDEC);
sort($ListaDEC);
$ContaDEC = count($ListaDEC);

copy($BustaDECorigin.$ListaDECorigin[2], $BustaDEC.$ListaDECorigin[2]);
copy($BustaDECorigin.$ListaDECorigin[$ContaDECorigin-1], $BustaDEC.'ULTIMO_DEC.decifra');


	
// CIF	
	
if(is_dir($destin.'w_a_0_0_cifrato/')){}else{mkdir($destin.'w_a_0_0_cifrato/');};
	

$BustaCIForigin = $origin.'w_a_0_0_cifrato/';
$ListaCIForigin = scandir($BustaCIForigin);
sort($ListaCIForigin);
$ContaCIForigin = count($ListaCIForigin);

// echo '<hr>';

$BustaCIF = $destin.'w_a_0_0_cifrato/';
$ListaCIF = scandir($BustaCIF);
sort($ListaCIF);
$ContaCIF = count($ListaCIF);

copy($BustaCIForigin.$ListaCIForigin[$ContaCIForigin-1], $BustaCIF.'ULTIMO_CIF.cifrato');




	

// ------------------
//
// FILE COLLABORATIVI
//
// ------------------

	
if(is_dir($destin.'w_a_0_0_modu/' )){}else{mkdir($destin.'w_a_0_0_modu/' );};
	
   copy( 'w_a_0_0_modu/modu_clock_time_refresh.php'  , $destin.'w_a_0_0_modu/modu_clock_time_refresh.php' ); 
   copy( 'w_a_0_0_modu/modu_device_wh_platform.php'  , $destin.'w_a_0_0_modu/modu_device_wh_platform.php' );  
   copy( 'w_a_0_0_modu/modu_t_dinamico_etc.php'  , $destin.'w_a_0_0_modu/modu_t_dinamico_etc.php' ); 
   copy( 'w_a_0_0_modu/modu_t_details_width_dinamico.php'  , $destin.'w_a_0_0_modu/modu_t_details_width_dinamico.php' ); 
   copy( 'w_a_0_0_modu/modu_styles.php'  , $destin.'w_a_0_0_modu/modu_styles.php' ); 
   copy( 'w_a_0_0_modu/modu_semantic_fonts.php'  , $destin.'w_a_0_0_modu/modu_semantic_fonts.php' ); 
   copy( 'w_a_0_0_modu/modu_scroll_hide_show.php'  , $destin.'w_a_0_0_modu/modu_scroll_hide_show.php' ); 
   copy( 'w_a_0_0_modu/modu_rolling_dot_4arg.php'  , $destin.'w_a_0_0_modu/modu_rolling_dot_4arg.php' ); 
   copy( 'w_a_0_0_modu/modu_rolling_dot.php'  , $destin.'w_a_0_0_modu/modu_rolling_dot.php' ); 
   copy( 'w_a_0_0_modu/modu_responsivity_disk_sliders.php'  , $destin.'w_a_0_0_modu/modu_responsivity_disk_sliders.php' ); 
   copy( 'w_a_0_0_modu/modu_modale_semantic_ui.php'  , $destin.'w_a_0_0_modu/modu_modale_semantic_ui.php' ); 
   copy( 'w_a_0_0_modu/modu_meta.php'  , $destin.'w_a_0_0_modu/modu_meta.php' ); 
   copy( 'w_a_0_0_modu/modu_isset_session.php'  , $destin.'w_a_0_0_modu/modu_isset_session.php' ); 
   copy( 'w_a_0_0_modu/modu_file_essenziali.php'  , $destin.'w_a_0_0_modu/modu_file_essenziali.php' ); 


    
    
// modu_clock_time_refresh.php
// modu_device_wh_platform.php
// modu_isset_session.php
// modu_meta.php
// modu_modale_semantic_ui.php
// modu_responsivity_disk_sliders.php
// modu_rolling_dot.php
// modu_rolling_dot_4arg.php
// modu_scroll_hide_show.php
// modu_semantic_fonts.php
// modu_styles.php
// modu_t_details_width_dinamico.php
// modu_t_dinamico_etc.php




	
};

$origin = '';
$destin = '../TEXTAREA_BACKUP/';

file_essenziali(
$origin,
$destin

);



	
};


?>  



<?php  echo '</head>'; ?> 




<?php  echo '<body id="w_a_1_1_BODY">'; ?> 


<?php  
if($INCLUSIONE_MODULI===1){ include('./'.$w_a_1_1_PHP_DIR_modu.'/'.'modu_responsivity_disk_sliders.php');}
else
{

  
// RESPONSIVITY DESKTOP per alcuni elementi
echo '
<div id="w_a_1_1_RESPONSIVITY_EXTRA"></div> <!--  w_a_1_1_RESPONSIVITY_EXTRA  -->
<script>

if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{

}
else
{
document.getElementById("w_a_1_1_RESPONSIVITY_EXTRA").innerHTML=

`
<style>
 #w_a_1_1_INDEX_CLICK_SVG{width:40px; height:40px; box-shadow:6px 6px 12px black; border-radius:0.50rem;}
 #w_a_1_1_SLIDERS_SVG{width:20px; height:20px; color:purple;}
</style>

<style>
 #w_a_1_1_DARKMODE {display:inline-block;} #w_a_1_1_DARKMODE_SVG {width:40px; height:40px;}
 #w_a_1_1_LIGHTMODE{display:inline-block;} #w_a_1_1_LIGHTMODE_SVG{width:40px; height:40px;}

</style>


<style>
 #w_a_1_1_BACKDOOR_FORM_SI{}
 #w_a_1_1_BACKDOOR_FORM_SI{display:inline-block;}
 #w_a_1_1_BACKDOOR_FORM_SI_SVG{width:40px; height:40px;}
 
 #w_a_1_1_BACKDOOR_FORM_NO{}
 #w_a_1_1_BACKDOOR_FORM_NO{display:inline-block;}
 #w_a_1_1_BACKDOOR_FORM_NO_SVG{width:40px; height:40px;}

</style>


<style>
 #w_a_1_1_UP_DOWN_NELLA_PAGINA{position:fixed; top:9.00rem;  top:25%;  left:0%; width:auto; height:auto;}
 #w_a_1_1_UP_DOWN_NELLA_PAGINA{display:block; z-index:999;}

 #w_a_1_1_UP_NELLA_PAGINA{display:block; border:solid 0.00rem green;}
 #w_a_1_1_UP_NELLA_PAGINA_SVG{  width:30px; height:30px; display:block;}
 
 #w_a_1_1_DOWN_NELLA_PAGINA{display:block; border:solid 0.00rem red;} 
 #w_a_1_1_DOWN_NELLA_PAGINA_SVG{width:30px; height:30px; display:block;}

</style>


`;
};

</script>

'; 

}; 
?> 


<?php   echo '<main id="w_a_1_1_MAIN">'; ?>



<?php  
if($INCLUSIONE_MODULI===1){
include('./'.$w_a_1_1_PHP_DIR_modu.'/'.'modu_t_dinamico_etc.php'); 
}
else
{
	
echo '<details id="w_a_1_1_DETAILS_TESTO_DINAMICO" class="ui  segment">'; 
// w_a_1_0_2_5_0_SUMMARY_TESTO_DINAMICO

echo '

<summary id="w_a_1_1_SUMMARY_TESTO_DINAMICO" class="fluid ui button segment"  style="width:85%; background-color:initial; color:initial; font-variant:small-caps;">

<span id="w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO" >testo dinamico</span><span>&nbsp;</span>


<svg id="w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO_SVG"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-textarea-t" viewBox="0 0 16 16">
  <path d="M1.5 2.5A1.5 1.5 0 0 1 3 1h10a1.5 1.5 0 0 1 1.5 1.5v3.563a2 2 0 0 1 0 3.874V13.5A1.5 1.5 0 0 1 13 15H3a1.5 1.5 0 0 1-1.5-1.5V9.937a2 2 0 0 1 0-3.874zm1 3.563a2 2 0 0 1 0 3.874V13.5a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V9.937a2 2 0 0 1 0-3.874V2.5A.5.5 0 0 0 13 2H3a.5.5 0 0 0-.5.5v3.563M2 7a1 1 0 1 0 0 2 1 1 0 0 0 0-2m12 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2"/>
  <path d="M11.434 4H4.566L4.5 5.994h.386c.21-1.252.612-1.446 2.173-1.495l.343-.011v6.343c0 .537-.116.665-1.049.748V12h3.294v-.421c-.938-.083-1.054-.21-1.054-.748V4.488l.348.01c1.56.05 1.963.244 2.173 1.496h.386z"/>
</svg>

</summary> <!-- w_a_1_1_SUMMARY_TESTO_DINAMICO -->

';

echo '<section id="w_a_1_1_TRASH_PUNTINI_ETC">';


// w_a_1_0_4_0_0_DARKMODE
echo '
<article id="w_a_1_1_DARKMODE" onclick="w_a_1_1_DARKMODE()" style="display:inline-block;">
  <svg id="w_a_1_1_DARKMODE_SVG" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="rgba(128, 128, 128, 0.5)" class="bi bi-ban-fill" viewBox="0 0 16 16">
  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M2.71 12.584c.218.252.454.488.706.707l9.875-9.875a7.034 7.034 0 0 0-.707-.707l-9.875 9.875Z"/>
</svg>
</article> <!-- w_a_1_1_DARKMODE -->
';

// w_a_1_0_4_5_0_LIGHTMODE
echo '
<article id="w_a_1_1_LIGHTMODE"  onclick="w_a_1_1_LIGHTMODE()" style="display:none;">
 <svg id="w_a_1_1_LIGHTMODE_SVG" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="rgba(128, 128, 128, 0.5)" class="bi bi-ban" viewBox="0 0 16 16">
  <path d="M15 8a6.973 6.973 0 0 0-1.71-4.584l-9.874 9.875A7 7 0 0 0 15 8M2.71 12.584l9.874-9.875a7 7 0 0 0-9.874 9.874ZM16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0"/>
</svg>
</article> <!-- w_a_1_1_LIGHTMODE -->
';


// w_a_1_0_5_0_0_BACKDOOR_FORM_SI
echo '
<article id="w_a_1_1_BACKDOOR_FORM_SI" onclick="w_a_1_1_BACKDOOR_FORM_SI()">
<svg id="w_a_1_1_BACKDOOR_FORM_SI_SVG" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgba(255, 215, 0, 1)" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
  <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1m9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1m0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0z"/>
</svg>
</article> <!-- w_a_1_1_BACKDOOR_FORM_SI -->
';

// w_a_1_0_5_5_0_BACKDOOR_FORM_NO
echo '
<article id="w_a_1_1_BACKDOOR_FORM_NO"  onclick="w_a_1_1_BACKDOOR_FORM_NO()" style="display:none;">
<svg id="w_a_1_1_BACKDOOR_FORM_NO_SVG" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgba(173, 216, 230, 1)" class="bi bi-ui-checks-grid" viewBox="0 0 16 16">
  <path d="M2 10h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3a1 1 0 0 1 1-1m9-9h3a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1h-3a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1m0 9a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1zm0-10a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM2 9a2 2 0 0 0-2 2v3a2 2 0 0 0 2 2h3a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2zm7 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2h-3a2 2 0 0 1-2-2zM0 2a2 2 0 0 1 2-2h3a2 2 0 0 1 2 2v3a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.354.854a.5.5 0 1 0-.708-.708L3 3.793l-.646-.647a.5.5 0 1 0-.708.708l1 1a.5.5 0 0 0 .708 0z"/>
</svg>
</article> <!-- w_a_1_1_BACKDOOR_FORM_NO -->
';


// w_a_1_0_6_5_0_UP_DOWN_NELLA_PAGINA
echo '
<details id="w_a_1_1_UP_DOWN_NELLA_PAGINA"> 
<summary></summary>
<a id="w_a_1_1_UP_NELLA_PAGINA" href="#">
<svg id="w_a_1_1_UP_NELLA_PAGINA_SVG" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-up" viewBox="0 0 16 16">
  <path d="M3.204 11h9.592L8 5.519 3.204 11zm-.753-.659 4.796-5.48a1 1 0 0 1 1.506 0l4.796 5.48c.566.647.106 1.659-.753 1.659H3.204a1 1 0 0 1-.753-1.659z"/>
</svg> <!-- w_a_1_1_UP_NELLA_PAGINA_SVG -->
</a> <!-- w_a_1_1_UP_NELLA_PAGINA -->
<br>
<a id="w_a_1_1_DOWN_NELLA_PAGINA"  href="#fine">
<svg id="w_a_1_1_DOWN_NELLA_PAGINA_SVG"  xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-down" viewBox="0 0 16 16">
  <path d="M3.204 5h9.592L8 10.481 3.204 5zm-.753.659 4.796 5.48a1 1 0 0 0 1.506 0l4.796-5.48c.566-.647.106-1.659-.753-1.659H3.204a1 1 0 0 0-.753 1.659z"/>
</svg> <!-- w_a_1_1_DOWN_NELLA_PAGINA_SVG -->
</a> <!-- w_a_1_1_DOWN_NELLA_PAGINA -->
</details> <!-- w_a_1_1_UP_DOWN_NELLA_PAGINA -->
';

// w_a_1_0_7_0_0_DARK_LIGHT_ETC_JS
echo '

<!-- funzioni javascript ini -->
<script>
 function w_a_1_1_DARKMODE(){
    // alert("w_a_1_1_DARKMODE");
    document.querySelector("#w_a_1_1_DARKMODE").style.display="none";
    document.querySelector("#w_a_1_1_LIGHTMODE").style.display="inline-block";    

    document.querySelector("#w_a_1_1_area_immissione_testo__").style.backgroundColor="navy";    
    document.querySelector("#w_a_1_1_area_immissione_testo__").style.backgroundColor="rgba(0, 20, 60, 1)";
    document.querySelector("#w_a_1_1_area_immissione_testo__").style.color="white";

     }
     
  function w_a_1_1_LIGHTMODE(){
    // alert("w_a_1_1_LIGHTMODE");
    document.querySelector("#w_a_1_1_DARKMODE").style.display="inline-block";
    document.querySelector("#w_a_1_1_LIGHTMODE").style.display="none";    
    
    document.querySelector("#w_a_1_1_area_immissione_testo__").style.backgroundColor="initial";
    document.querySelector("#w_a_1_1_area_immissione_testo__").style.color="initial";
     
     }

function w_a_1_1_BACKDOOR_FORM_SI(){
// alert("w_a_1_1_BACKDOOR_FORM_SI");

document.querySelector("#w_a_1_1_BACKDOOR_FORM_SI").style.display="none";
document.querySelector("#w_a_1_1_BACKDOOR_FORM_NO").style.display="inline-block";

document.querySelector("#w_a_1_1_SSAP__").style.display="block";
document.querySelector("#w_a_1_1_SSAP__").style.border="solid 0.00rem purple";

document.querySelector("#w_a_1_1_post_uno__").style.width="90%";
document.querySelector("#w_a_1_1_post_due__").style.width="90%";
document.querySelector("#w_a_1_1_post_tre__").style.width="90%";
document.querySelector("#w_a_1_1_post_qua__").style.width="90%";

document.querySelector("#w_a_1_1_post_uno__").style.marginTop="1.00rem";
document.querySelector("#w_a_1_1_post_due__").style.marginTop="1.00rem";
document.querySelector("#w_a_1_1_post_tre__").style.marginTop="1.00rem";
document.querySelector("#w_a_1_1_post_qua__").style.marginTop="1.00rem";
document.querySelector("#w_a_1_1_post_uno__").style.marginBottom="1.00rem";
document.querySelector("#w_a_1_1_post_due__").style.marginBottom="1.00rem";
document.querySelector("#w_a_1_1_post_tre__").style.marginBottom="1.00rem";
document.querySelector("#w_a_1_1_post_qua__").style.marginBottom="1.00rem";



};

function w_a_1_1_BACKDOOR_FORM_NO(){
//alert("w_a_1_1_BACKDOOR_FORM_NO");

document.querySelector("#w_a_1_1_BACKDOOR_FORM_SI").style.display="inline-block";
document.querySelector("#w_a_1_1_BACKDOOR_FORM_NO").style.display="none";

document.querySelector("#w_a_1_1_SSAP__").style.display="none";
document.querySelector("#w_a_1_1_SSAP__").style.display="block";


document.querySelector("#w_a_1_1_post_uno__").style.width="20%";
document.querySelector("#w_a_1_1_post_due__").style.width="20%";
document.querySelector("#w_a_1_1_post_tre__").style.width="20%";
document.querySelector("#w_a_1_1_post_qua__").style.width="20%";



};


function GO_UP(){
alert("GO_UP()");

};

function GO_DOWN(){
alert("GO_DOWN()");


};


function w_a_1_1_INDEX(){};


</script>
<!-- funzioni javascript fin -->
';

echo '</section>';


// if modulare
};

?> 





<?php  

// modu_form_e_invia_testo.php

echo '<section id="w_a_1_1_FORM_X_INVIA__"  class="ui  segment"></section>'; 

// w_a_1_0_9_0_0_FORM_X_INVIA___JS/

echo '
<script>
function w_a_1_1_FORM_X_INVIA(){
document.getElementById("w_a_1_1_FORM_X_INVIA__").innerHTML=`'; // apertura back tick
echo '<form id="w_a_1_1_FORM_X_INVIA_AES__" action="'.$FUNICOTY_RUNNING.'" method="POST">';



// qui immissione dati e ctrl like
    echo '
    
    <!--    <article id="w_a_1_1_SSAP__">  -->
	
		<article id="w_a_1_1_SSAP__" style="display:none;">
		
        <input id="w_a_1_1_post_uno__" type="password" name="w_a_1_1_post_uno" placeholder="uno">
        <input id="w_a_1_1_post_due__" type="password" name="w_a_1_1_post_due" placeholder="due">
        <input id="w_a_1_1_post_tre__" type="password" name="w_a_1_1_post_tre" placeholder="tre">
        <input id="w_a_1_1_post_qua__" type="password" name="w_a_1_1_post_qua" placeholder="qua">
    
        </article>
    
    ';
    



echo '<section id="w_a_1_1_area_immissione_testo_invia_container__">';


// qui viene inserito il testo
    echo '
    
        <textarea id="w_a_1_1_area_immissione_testo__" name="w_a_1_1_questo_est_un_testo" placeholder="Inserisci il tuo testo qui" rows="" cols=""  ></textarea> <!-- w_a_1_1_area_immissione_testo__ -->    
    
    
    ';



echo '<article id="w_a_1_1_invia_testo_container__" class="">';




// ATTENZIONE : classing seguente id
// per adesso styling
// ||
// ||
// ||
// \/
echo '<input id="w_a_1_1_invia_testo_button__" type="submit" value="invia"  style="width:100%; background-color:white; color:green; border-color:transparent; overflow:auto!important;">';
// /\
// ||
// ||
// ||

// echo '</button> <!-- w_a_1_1_invia_testo_button__ -->';

echo '</article> <!-- w_a_1_1_invia_testo_container__ -->';

echo '</section> <!-- w_a_1_1_area_immissione_testo_invia_container__ -->';


echo '<article id="w_a_1_1_INDEX_WRAP">';

echo '<button id="w_a_1_1_INDEX_CLICK" onclick="w_a_1_1_INDEX()">';


echo '

    <svg id="w_a_1_1_INDEX_CLICK_SVG" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
    <path d="M11 2H9v3h2z"/>
    <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
    </svg> 

';


echo '</button> <!-- w_a_1_1_INDEX_CLICK -->';

echo '</article> <!-- w_a_1_1_INDEX_WRAP -->';

echo '</form> <!-- w_a_1_1_FORM_X_INVIA_AES__ -->`;'; // chiusura back tick molto importante

echo '
 }; 
w_a_1_1_FORM_X_INVIA(); // function call back
</script>
';



// modu_form_e_invia_testo.php
?> 








<?php 

//  modu_yekkey.php
// 
// qui valori importanti che non
// possono stare in funzione ma
// teoricamente disponibili in
// tutto il main program
// 
//
// valori specchietto default
// se non personalizzato
 $w_a_1_1_yek  = 'a b c';
 $w_a_1_1_cedx = 'rinaldo rasa';
 $w_a_1_1_cedy = 'rasa rinaldo';


// 
// if(file_exists('./w_a_0_0_noyek/w_a_0_0_yek/w_a_0_0_yek.php')){
// 	echo '<br> w_a_0_0_yek.php ESISTE';
// }else{echo '<br> w_a_0_0_yek.php NON ESISTE';};
// 
// if(file_exists('./w_a_0_0_noyek/w_a_0_0_yek/w_a_0_0_stello.php')){
// 	echo '<br> w_a_0_0_stello.php ESISTE';
// }else{echo '<br> w_a_0_0_stello.php NON ESISTE';};
// 

 
//
// alcuni valori sono di
// controllo per la 
// visualizzazione del daba
//

if( file_exists('./w_a_0_0_noyek/w_a_0_0_yek/w_a_0_0_yek.php') ){


if($INCLUSIONE_MODULI===1){
 include('./w_a_0_0_noyek/w_a_0_0_yek/w_a_0_0_yek.php');	
}
else
{
 include('./w_a_0_0_noyek/w_a_0_0_yek/w_a_0_0_yek.php');

}; // if modulare 

 $w_a_1_1_cedx=$unoa;
 $w_a_1_1_cedy=$dueb;
 $w_a_1_1_yek= $trec;
 $quad=$quad;


}; // if esistenza yekkey


//  modu_yekkey.php
?>




<?php   

//  modu_salva_testo.php

// salva file ini
//
// inserisce un valore testo GREZZO
//non sanitizzato
//

$w_a_1_1_TestoGrezzoInviato = $_POST["w_a_1_1_questo_est_un_testo"];

//
// controllo se strin input vuota
//
if ($w_a_1_1_TestoGrezzoInviato===""){}
else 
{
// se arrivato qui stringa input
// diversa da vuota
// 
// 

//
// si esegue la sanitizzazione
//


 $w_a_1_1_STRINGA_NUOVA = str_replace("<",  "&#5176;", $w_a_1_1_TestoGrezzoInviato);
 $w_a_1_1_Testo0= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace(">",  "&#5171;", $w_a_1_1_Testo0); 
 $w_a_1_1_Testo1= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace('\'', "&#10076;", $w_a_1_1_Testo1); 
 $w_a_1_1_Testo2= $w_a_1_1_STRINGA_NUOVA;
 $w_a_1_1_STRINGA_NUOVA = str_replace("\"", "&#10078;", $w_a_1_1_Testo2);



// aggiunta nuovi elementi sanitizzazione
//
// $w_a_1_1_Testo3= $w_a_1_1_STRINGA_NUOVA;
// $w_a_1_1_STRINGA_NUOVA = str_replace("=", "&#12307;", $w_a_1_1_Testo3);




//
// effettuata sanitizzazione
//
	$w_a_1_1_TestoInviatoSanitizzato = $w_a_1_1_STRINGA_NUOVA;
	
    
//   echo '<div>'.  $w_a_1_1_TestoInviatoSanitizzato . '</div>' ;
    
    
// il file qui sotto diventa un argomento per la funzione php
	$w_a_1_1_SALVA_IL_FILE_SANITIZZATO_DA_INPUT=$w_a_1_1_TestoInviatoSanitizzato;
//  ||
//  ||
//  ||	
//  \/
// una volta sanitizzato il file va 
// salvato tramite una funzione php
// 
// S A L V A T E X T
// 
// la funzione accetta 6 argomenti
//
//
//
 function w_a_1_1_Salva_FILE_SANITIZZATO_DA_INPUT(
 $w_a_1_1_SALVA_IL_FILE_SANITIZZATO_DA_INPUT, 
 $w_a_1_1_cedx, 
 $w_a_1_1_cedy, 
 $w_a_1_1_yek, 
 $w_a_1_1_PHP_DIR_decifra, 
 $w_a_1_1_PHP_DIR_cifrato){

//
// salvare il decifrato
// in forma di aggiunta
//
// deve esistere un file
// predefinito
// 
// per capire: aggiunta vuol dire che un
// file_n si aggiunge ad un file_n-1 il quale
// fa da sostegno a tutta la accumulazione se
// non esistesse il file_n-1 il programma non
// troverebbe agganci nella sezione VARIABILI 
// DI SISTEMA occorre inserire a inizio una
// cartella dec contenente il file_n-1
// 
// 

// la funzione effettuale operazioni di
// salvataggio del testo in formato PLAINTEXT
// e anche in formato AES
// 
// 
// 

// 
// definire univoco temporale del nome dei file 
// del simil-database
// 
// 
// 

 // rileva la directory corrente
 // 
 // 
 // siccome siamo interno function
 // per risparmiare argomenti si usa
 // getcwd() caveat: senza slash finale 
 // da recuperare
 // 
 $w_a_1_1_DirectoryCorrente = getcwd(); 

 $w_a_1_1_DirectorySalvaTxt = $w_a_1_1_PHP_DIR_decifra;       // ALIAS di argomento

 $w_a_1_1_DirectorySalvaTxtQUICK = $w_a_1_1_PHP_DIR_cifrato;  // ALIAS di argomento

 $w_a_1_1_t=time();  // timestamp
 
 $w_a_1_1_Percorso=$w_a_1_1_DirectoryCorrente;

 $w_a_1_1_Prefisso = date("Y_m_d",$w_a_1_1_t);

 $w_a_1_1_Postfisso = time();

 $w_a_1_1_Postfisso = $w_a_1_1_Postfisso . "_".rand(0, 10000000);

 $w_a_1_1_Estensione = $w_a_1_1_DirectorySalvaTxt;
 
 $w_a_1_1_EstensioneQUICK = $w_a_1_1_DirectorySalvaTxtQUICK;

 $w_a_1_1_NomeFile = $w_a_1_1_Percorso.'/'.$w_a_1_1_DirectorySalvaTxt.'/'.$w_a_1_1_Prefisso."_".$w_a_1_1_Postfisso.".".$w_a_1_1_Estensione;

 $w_a_1_1_directory = $w_a_1_1_Percorso.'/'.$w_a_1_1_DirectorySalvaTxt.'/';

 $Percorso_QUICK_CIF = $w_a_1_1_Percorso.'/'.$w_a_1_1_DirectorySalvaTxtQUICK.'/'.$w_a_1_1_Prefisso."_".$w_a_1_1_Postfisso.".". $w_a_1_1_EstensioneQUICK;

 $w_a_1_1_directory_QUICK_CIF = $w_a_1_1_Percorso.'/'.$w_a_1_1_PHP_DIR_cifrato.'/';
 
 
// 
// fino a qui stabilita nomenclatura 
// adesso procedere con lettura ultimo
// file in decifra per ottenere file_n-1
// 
$Busta_DEC = $w_a_1_1_DirectorySalvaTxt;
$Lista_DEC = scandir($Busta_DEC);
sort($Lista_DEC);
$Conta_DEC = count($Lista_DEC);
// 
// controllo se [. ..]>2
// per evitare errori lettura
// 
if($Conta_DEC>2){
// ^^^^^^^^^^^^^^
// 	deve essere
//  maggiore di 2
//
$Ultim_DEC = $Lista_DEC[$Conta_DEC-1];
$Dove_Ultim_DEC = './'.$Busta_DEC.'/'.$Lista_DEC[$Conta_DEC-1];

// 
// lettura di file_n-1
// 
// 
	$Lettura_Ultim_DEC = file_get_contents($Dove_Ultim_DEC);
	$Aggiornamento_Ultim_DEC = $Lettura_Ultim_DEC . $w_a_1_1_SALVA_IL_FILE_SANITIZZATO_DA_INPUT;
//
// salvataggio del file decifra
//

    $w_a_1_1_SalvaFile=fopen($w_a_1_1_NomeFile, "w");
    fwrite($w_a_1_1_SalvaFile, $Aggiornamento_Ultim_DEC);
    fclose($w_a_1_1_SalvaFile);




	// questo toolbox AES
	// fa parte della dotazione standard
	// di PHP e non richiede CDN
	
	// Funzione per cifrare una stringa utilizzando AES-256-CBC
//	function encrypt($w_a_1_1_plaintext, $w_a_1_1_key) {
//	$method = "AES-256-CBC";
//	$iv = openssl_random_pseudo_bytes(16);
//	$w_a_1_1_ciphertext = openssl_encrypt($w_a_1_1_plaintext, $method, $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
//	return base64_encode($iv . $w_a_1_1_ciphertext);
//	};
//	
//	// Funzione per decifrare una stringa cifrata utilizzando AES-256-CBC
//	function decrypt($w_a_1_1_ciphertext, $w_a_1_1_key) {
//	$w_a_1_1_ciphertext = base64_decode($w_a_1_1_ciphertext);
//	$iv = substr($w_a_1_1_ciphertext, 0, 16);
//	$w_a_1_1_ciphertext = substr($w_a_1_1_ciphertext, 16);
//	$w_a_1_1_plaintext = openssl_decrypt($w_a_1_1_ciphertext, "AES-256-CBC", $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
//	return $w_a_1_1_plaintext;
//	};


	function encrypt($w_a_1_1_plaintext, $w_a_1_1_key) {
	$method = "AES-256-CBC";
	$iv = openssl_random_pseudo_bytes(16);
	$w_a_1_1_ciphertext = openssl_encrypt($w_a_1_1_plaintext, $method, $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
	return base64_encode($iv . $w_a_1_1_ciphertext);
	};
	
	// Funzione per decifrare una stringa cifrata utilizzando AES-256-CBC
	function decrypt($w_a_1_1_ciphertext, $w_a_1_1_key) {
	$w_a_1_1_ciphertext = base64_decode($w_a_1_1_ciphertext);
	$iv = substr($w_a_1_1_ciphertext, 0, 16);
	$w_a_1_1_ciphertext = substr($w_a_1_1_ciphertext, 16);
	$w_a_1_1_plaintext = openssl_decrypt($w_a_1_1_ciphertext, "AES-256-CBC", $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
	return $w_a_1_1_plaintext;
	};

	
	$w_a_1_1_plaintext = $Aggiornamento_Ultim_DEC;
	
	//  ATTENZIONE!!! 
	//  ATTENZIONE!!! 
	//  ATTENZIONE!!! qui si testa il codice AES
	//  ATTENZIONE!!! 
	//  ATTENZIONE!!! 
	//  ATTENZIONE!!! 
	
		
	
	
	
	
	
	
	// 
	// conversione in formato AES
	// 
	$CIF_Aggiornamento_Ultim_DEC = encrypt($w_a_1_1_plaintext, $w_a_1_1_key);
	// 
	// controllo conversione da AES a PLAINTEXT
	// 
	$Reverse_CIF_Aggiornamento_Ultim_DEC = decrypt($CIF_Aggiornamento_Ultim_DEC, $w_a_1_1_key);
	// 
	// converso AES occorre salvare
	// 
	// 

    $w_a_1_1_SalvaFile_CIF=fopen($Percorso_QUICK_CIF, "w");
    fwrite($w_a_1_1_SalvaFile_CIF, $CIF_Aggiornamento_Ultim_DEC);
    fclose($w_a_1_1_SalvaFile_CIF);



}else{}; 
// ^^^^^
// ||||| stiamo ragionando internamente
// ||||| alla funzione di  salvataggio
// $Conta_DEC deve essere maggiore di 2


 }; // fn fin w_a_1_1_Salva_FILE_SANITIZZATO_DA_INPUT

 w_a_1_1_Salva_FILE_SANITIZZATO_DA_INPUT($w_a_1_1_SALVA_IL_FILE_SANITIZZATO_DA_INPUT, $w_a_1_1_cedx, $w_a_1_1_cedy, $w_a_1_1_yek, $w_a_1_1_PHP_DIR_decifra, $w_a_1_1_PHP_DIR_cifrato);

	
};
// qui controllato e agito solo
// se stringa input NON vuota
// 
// 
  
 
// modu_salva_testo.php
?>



<?php   
// modu_lettura_delle_buste.php

// ||
// ||
// ||
// \/

// 
// una volta salvati i file occorre recuperarli per
// la visualizzazione suddivisa in due sezioni 
// 1) visualizza CIF $w_a_1_1_cedx && $w_a_1_1_cedy && $w_a_1_1_yek
// 2) visualizza DEC $quad=$quad;
// 

// i dati ctrl like
 $w_a_1_1_post_uno= filter_input(INPUT_POST, 'w_a_1_1_post_uno');
 $w_a_1_1_post_due= filter_input(INPUT_POST, 'w_a_1_1_post_due');
 $w_a_1_1_post_tre= filter_input(INPUT_POST, 'w_a_1_1_post_tre');




if(( $w_a_1_1_cedx=== $w_a_1_1_post_uno) and ($w_a_1_1_cedy===$w_a_1_1_post_due))
{
echo '';
//
// lettura ultimo file CIF
// riconverso in PLAINTEXT
// memorizza contenuto in 
// variabile
// 
// la lettura di CIF richiede come argomenti
// la posizione del file ultimo nella Lista
// dei file CIF il cui contenuto viene 
// riversato da AES a PLAINTEXT
// 
// 
// 
// 

$BustaCIF = './'.$w_a_1_1_PHP_DIR_cifrato.'/';

function LetturaCIF( $BustaCIF, $w_a_1_1_yek ){
	


	$Lista_CIF=scandir($BustaCIF);
	sort($Lista_CIF);
	$Conta_CIF=count($Lista_CIF);
	$Ultim_CIF=$BustaCIF.$Lista_CIF[$Conta_CIF-1];

	// 
	// il file deve essere convertito
	// 
	// 
	// Funzione per cifrare una stringa utilizzando AES-256-CBC
//	function encrypt($w_a_1_1_plaintext, $w_a_1_1_key) {
//	$method = "AES-256-CBC";
//	$iv = openssl_random_pseudo_bytes(16);
//	$w_a_1_1_ciphertext = openssl_encrypt($w_a_1_1_plaintext, $method, $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
//	return base64_encode($iv . $w_a_1_1_ciphertext);
//	};
//	
//	// Funzione per decifrare una stringa cifrata utilizzando AES-256-CBC
//	function decrypt($w_a_1_1_ciphertext, $w_a_1_1_key) {
//	$w_a_1_1_ciphertext = base64_decode($w_a_1_1_ciphertext);
//	$iv = substr($w_a_1_1_ciphertext, 0, 16);
//	$w_a_1_1_ciphertext = substr($w_a_1_1_ciphertext, 16);
//	$w_a_1_1_plaintext = openssl_decrypt($w_a_1_1_ciphertext, "AES-256-CBC", $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
//	return $w_a_1_1_plaintext;
//	};



	$Contenuto_Ultim_CIF = file_get_contents($Ultim_CIF);


 	function decrypt($w_a_1_1_ciphertext, $w_a_1_1_key) {
 	$w_a_1_1_ciphertext = base64_decode($w_a_1_1_ciphertext);
 	$iv = substr($w_a_1_1_ciphertext, 0, 16);
 	$w_a_1_1_ciphertext = substr($w_a_1_1_ciphertext, 16);
 	$w_a_1_1_plaintext = openssl_decrypt($w_a_1_1_ciphertext, "AES-256-CBC", $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
 	return $w_a_1_1_plaintext;
 	};

	$Reverse_Ultim_CIF = decrypt($Contenuto_Ultim_CIF, $w_a_1_1_key);
	
// 
// il contenuto deve essere visualizzato in un elemento textarea
// per non perdere gli acapo facenti parte di spontenous prose
//
//
// ATTENZIONE MOLTO IMPORTANTE: nella visualizzazione
// usare textarea per preservare tutti i codici carattere
// usare attribute readonly per impedire modificazioni
// USARE width height per mantenere in ambito visuale
// tutti i caratteri che altrimenti andrebbero persi
//  ||
//  || tenere questa stilizzazione
//  || come promemoria 
//  || 
//  || 
//  || 
//  \/
//	echo '<textarea style="width:50%; height:25rem; overflow:auto;"readonly>'.$Reverse_Ultim_CIF.'</textarea>';
// || 
// || 
// || 
// || recuperare gli ID dal programma originario
// || 
// \/

$w_a_1_1_DecritterFileCIF = $Reverse_Ultim_CIF;


// echo '<br>$Ultim_CIF = '.$Ultim_CIF;


echo '<details>';echo '<summary>';echo '</summary>';

// 
// echo '<style>#REVERSE_ULTIM_CIF{font-family:"PT Mono", monospace;}</style>';
// 
// echo '<style>#REVERSE_ULTIM_CIF{
//  inline-size: auto;
//  overflow-wrap: break-word;
//  border:solid 0.00rem gray;
//  white-space: pre-wrap;       /* css-3 */
//  white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
//  white-space: -pre-wrap;      /* Opera 4-6 */
//  white-space: -o-pre-wrap;    /* Opera 7 */
//  word-wrap: break-word;       /* Internet Explorer 5.5+ */ 
//  
//  font-family:monospace;
//  } </style>';
// 




// echo '<textarea id="REVERSE_ULTIM_CIF" style="margin-left:12.5%; width:75%; height:25rem; text-align:left; box-shadow:6px 6px 12px teal; overflow:auto;"  class="preverveCIF" readonly>'; 

// echo '<div id="REVERSE_ULTIM_CIF" style="margin-left:12.5%; width:75%;  text-align:left; box-shadow:6px 6px 12px teal; overflow:auto;"  readonly>'; 

// 
// ATTENZIONE:
// ||
// || portare questo internamente
// || a modu styles
// \/

// echo '<style>#REVERSE_ULTIM_CIF{margin-left:7.5%; width:85%; text-align:left; box-shadow:6px 6px 12px teal;  font-family:"PT Mono", monospace;}</style>';
// 
echo '<style>#REVERSE_ULTIM_CIF{margin-left:7.5%; width:85%; text-align:left; box-shadow:6px 6px 12px teal;  font-family:"PT Mono", monospace;}</style>';


echo '<div id="REVERSE_ULTIM_CIF" style="/* overflow:auto; */"  readonly>'; 


echo $w_a_1_1_DecritterFileCIF ;  

//
echo '</div>';

// echo $w_a_1_1_DecritterFileCIF ;  echo '</textarea>';


$filename = $Ultim_CIF;
$filesize = filesize($filename);

echo '<div style="font-family:monospace; text-align:center;" class="ui segment">';
echo ' Lunghezza del file : <span style="font-weight:700;">' . $filesize . '</span>bytes';
echo '</div>';
echo '<hr>';

echo '</details>';




};
LetturaCIF($BustaCIF, $w_a_1_1_yek);


}
else
{
echo '';
};
// if w_a_1_1_cedx and w_a_1_1_cedy







$w_a_1_1_ControlloValoreQuad = filter_input(INPUT_POST, 'w_a_1_1_post_qua');

if($quad===$w_a_1_1_ControlloValoreQuad)
{

// semaforo
echo '<div style="position:fixed; top:0rem; left:0rem;" class="cursore_free">&nbsp;</div>';


$BustaDEC = './'.$w_a_1_1_PHP_DIR_decifra.'/';

function LetturaDEC( $BustaDEC, $w_a_1_1_yek ){

	$Lista_DEC=scandir($BustaDEC);
	sort($Lista_DEC);
	$Conta_DEC=count($Lista_DEC);
	$Ultim_DEC=$BustaDEC.$Lista_DEC[$Conta_DEC-1];
    
    $Contenuto_Ultim_DEC = file_get_contents($Ultim_DEC);
    
    $w_a_1_1_DecritterFileDEC = $Contenuto_Ultim_DEC;  


// 
// echo '<style>#REVERSE_ULTIM_DEC{font-family:"PT Mono", monospace;}</style>';
// 
// echo '<style>#REVERSE_ULTIM_DEC{
//  inline-size: auto;
//  overflow-wrap: break-word;
//  border:solid 0.00rem gray;
//  white-space: pre-wrap;       /* css-3 */
//  white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
//  white-space: -pre-wrap;      /* Opera 4-6 */
//  white-space: -o-pre-wrap;    /* Opera 7 */
//  word-wrap: break-word;       /* Internet Explorer 5.5+ */ 
//  
//  font-family:monospace;
//  } </style>';
// 





// sistemare nel modulo styles
// queste properties
// 
// 
// echo '<style>#REVERSE_ULTIM_DEC{margin-left:7.5%; width:85%; text-align:left; box-shadow:6px 6px 12px orange;  font-family:"PT Mono", monospace;}</style>';
// echo '<div id="REVERSE_ULTIM_DEC" style="overflow:auto;"  readonly>'; 
// 
//
//
// echo '<style>#REVERSE_ULTIM_DEC{margin-left:7.5%; width:85%; text-align:left; box-shadow:6px 6px 12px gray;  font-family:"PT Mono", monospace;}</style>';

echo '<div id="REVERSE_ULTIM_DEC" style="/* overflow:auto; */"  readonly>'; 
  
echo $w_a_1_1_DecritterFileDEC ;  

echo '</div>';

$filename = $Ultim_DEC;
$filesize = filesize($filename);

echo '<div style="font-family:monospace; text-align:center;" class="ui segment">';
echo ' Lunghezza del file : <span style="font-weight:700;">' . $filesize . '</span>bytes';
echo '</div>';
echo '<hr>';


}; // fn php 
// 
LetturaDEC($BustaDEC, $w_a_1_1_yek);


}
else
{

}; 
// if $w_a_1_1_cedy


// modu_lettura_delle_buste.php

?>






<?php  
if($INCLUSIONE_MODULI===1){
include('./'.$w_a_1_1_PHP_DIR_modu.'/'.'modu_modale_semantic_ui.php'); 
}
else
{

// modale ui
echo '

<style>
  .modal-backdrop {
    background-color: olive;
    opacity: 0.5;
  }
</style>

    <div id="MODALE" style="overflow:auto;"  class="ui container">
        <div  style="width:99.5%; height:99.5%; background-color:transparent; color:black;"  class="ui basic modal">
            <article class="ui header">
            
            <blockquote class="ui segment">
            
            <a href="./dlb/a/logout.php" class="ui red inverted button">LOGOUT</a>   
            
            </blockquote>
            
         
           <blockquote class="ui segment">
           <!-- 
          
          <a href="assembla10.php" style="text-decoration: none; text-decoration-thickness: 0px;" class="ui red inverted button">ASSEMBLA</a>
         
         -->
           
		   <!--
           
            <a href="backup13.php" style="text-decoration: none; text-decoration-thickness: 0px;"  class="ui primary inverted button">B<span style="opacity:0.25;">ACKUP</span>13 </a>
	
    -->
	
	<!--
        
        <a href="backup16.php" style="text-decoration: none; text-decoration-thickness: 0px;"  class="ui primary inverted button">B<span style="opacity:0.25;">ACKUP</span>16 </a>
	
	-->
            <a href="LCIF.php" class="ui primary inverted button">Lettura</a>
			
			
			
		<!--
		
            <a href="./w_a_0_0_commenti/w_a_0_0_RESTAYLING.html" class="ui primary inverted button">commenti</a>


            <a href="./w_a_0_0_commenti/make_new_ynn.htm" class="ui primary inverted button">howto new ynn</a>

		-->
            
            </blockquote>            
            
            <div>
            <a href="http://avid3820725.altervista.org/pdfjs/web/viewer.html?file=http://avid3820725.altervista.org/funicoty07/w_a_0_0_gitm/test.pdf">PDFJS</a>
            </div>
            <div>            
            <div>
            <a href="https://animate.style/">https://animate.style/</a>
            </div>
            <div>
            <a href="https://releases.jquery.com/jquery/">https://releases.jquery.com/jquery/</a>
            </div>
            </article>
            

            <div class="actions">
                <div class="ui negative button">
                    <!-- Chiudi -->
                    <span style="padding:0.5rem;"><i class="window close outline icon"></i></span>
                    
                </div>
                <div class="ui positive button">
                    
                    <span style="padding:0.5rem;"><i class="window close outline icon"></i></span>
                </div>
            </div>

            
        </div>
        <blockquote style="margin-left:2.5rem;">
        <button id="MODALE_UI_BUTTON"  class="ui massive orange inverted button"
                onclick="openModal()">
        <!-- Click --> 
        <span style="padding:0.5rem;"><i class="list icon"></i></span>
        </button>
        </blockquote>        
        
    </div>

    <script>
    
    
    const openModal = () => {
    
    document.querySelector("#w_a_1_1_UP_DOWN_NELLA_PAGINA").style.display="block";
    
                $(".ui.modal").modal("setting",
                    "transition", "horizontal flip").modal("setBackdrop").css("background-color", "white").modal("show").css("background-color", "white");
    
    
    
            };


    </script>
    
    
    

';
	
}; // if modulare

?>

 
 
<?php  echo '</main>'; ?>



<?php  

if($INCLUSIONE_MODULI===1){
include('./'.$w_a_1_1_PHP_DIR_modu.'/'.'modu_t_details_width_dinamico.php'); 
}
else
{

//
// w_a_1_1_6_0_0_checkDetailsStatus_JS
//

echo '

 <script>

 function w_a_1_1_checkDetailsStatus() {
 const w_a_1_1_DetailsStatus_w_a_1_1_DETAILS_TESTO_DINAMICO = document.getElementById("w_a_1_1_DETAILS_TESTO_DINAMICO");
 
 if (w_a_1_1_DetailsStatus_w_a_1_1_DETAILS_TESTO_DINAMICO.open) {
 document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO").style.width="85%";
 }
 else
 {
 document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO").style.width="95%";
 }; // if
  
 }; // function w_a_1_1_checkDetailsStatus

 w_a_1_1_Esegui_checkDetailsStatus = setInterval(w_a_1_1_checkDetailsStatus, 500);

 </script>


 <script>
 // READONLY readonly blues
 // document.querySelector("#w_a_1_1_area_immissione_testo__").setAttribute("readonly", true);
 // document.querySelector("#w_a_1_1_area_immissione_testo__").removeAttribute("readonly", true);
 </script>


';

}; // if modulare

?>



<?php  
if($INCLUSIONE_MODULI===1){
include('./'.$w_a_1_1_PHP_DIR_modu.'/'.'modu_device_wh_platform.php'); 
}
else
{

// w_a_1_1_RilevaDispositivo

   

echo '';


echo '<details style="background-color:yellow; background-color:rgba(255, 215, 0, 0.125); text-align:center;"><summary></summary>';


echo '<div id="w_a_1_1_AVVISO_MOBILE" >rilevato dispositivo mobile</div>';
echo '<div id="w_a_1_1_AVVISO_DESKTOP">rilevato dispositivo desktop</div>';

function w_a_1_1_RilevaDispositivo(){
// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
// PHP
// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ 
// essenziale per responsivity
// ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ 


    
echo '<div id="w_a_1_1_RilevaDispositivo" style="text-align:center;">
<script> 

//
// definizione delle variabili js icone svg 
// da utilizzare
//

w_a_1_1_DESKTOP_ICO=`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/></svg>`; 
w_a_1_1_PHONE_ICO=`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-phone" viewBox="0 0 16 16"> <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>  <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/></svg>`;  
w_a_1_1_WINDOWS_MS_ICO=`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-microsoft" viewBox="0 0 16 16"> <path d="M7.462 0H0v7.19h7.462V0zM16 0H8.538v7.19H16V0zM7.462 8.211H0V16h7.462V8.211zm8.538 0H8.538V16H16V8.211z"/></svg>`; 
w_a_1_1_CHROME_ICO=`<br>`+`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-browser-chrome" viewBox="0 0 16 16">  <path fill-rule="evenodd" d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/></svg>`;  
w_a_1_1_ANDROID_ICO2=`<svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-android2" viewBox="0 0 16 16">  <path d="m10.213 1.471.691-1.26c.046-.083.03-.147-.048-.192-.085-.038-.15-.019-.195.058l-.7 1.27A4.832 4.832 0 0 0 8.005.941c-.688 0-1.34.135-1.956.404l-.7-1.27C5.303 0 5.239-.018 5.154.02c-.078.046-.094.11-.049.193l.691 1.259a4.25 4.25 0 0 0-1.673 1.476A3.697 3.697 0 0 0 3.5 5.02h9c0-.75-.208-1.44-.623-2.072a4.266 4.266 0 0 0-1.664-1.476ZM6.22 3.303a.367.367 0 0 1-.267.11.35.35 0 0 1-.263-.11.366.366 0 0 1-.107-.264.37.37 0 0 1 .107-.265.351.351 0 0 1 .263-.11c.103 0 .193.037.267.11a.36.36 0 0 1 .112.265.36.36 0 0 1-.112.264Zm4.101 0a.351.351 0 0 1-.262.11.366.366 0 0 1-.268-.11.358.358 0 0 1-.112-.264c0-.103.037-.191.112-.265a.367.367 0 0 1 .268-.11c.104 0 .19.037.262.11a.367.367 0 0 1 .107.265c0 .102-.035.19-.107.264ZM3.5 11.77c0 .294.104.544.311.75.208.204.46.307.76.307h.758l.01 2.182c0 .276.097.51.292.703a.961.961 0 0 0 .7.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h1.343v2.182c0 .276.097.51.292.703a.972.972 0 0 0 .71.288.973.973 0 0 0 .71-.288.95.95 0 0 0 .292-.703v-2.182h.76c.291 0 .54-.103.749-.308.207-.205.311-.455.311-.75V5.365h-9v6.404Zm10.495-6.587a.983.983 0 0 0-.702.278.91.91 0 0 0-.293.685v4.063c0 .271.098.501.293.69a.97.97 0 0 0 .702.284c.28 0 .517-.095.712-.284a.924.924 0 0 0 .293-.69V6.146a.91.91 0 0 0-.293-.685.995.995 0 0 0-.712-.278Zm-12.702.283a.985.985 0 0 1 .712-.283c.273 0 .507.094.702.283a.913.913 0 0 1 .293.68v4.063a.932.932 0 0 1-.288.69.97.97 0 0 1-.707.284.986.986 0 0 1-.712-.284.924.924 0 0 1-.293-.69V6.146c0-.264.098-.491.293-.68Z"/></svg>`;


w_a_1_1_MOBILE_DEVICE=1;

if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{

w_a_1_1_MOBILE_DEVICE=1;
document.getElementById("w_a_1_1_RilevaDispositivo").innerHTML=w_a_1_1_PHONE_ICO;

}
else{

w_a_1_1_MOBILE_DEVICE=0;
document.getElementById("w_a_1_1_RilevaDispositivo").innerHTML=
`
<style>
#w_a_1_1_DESKTOP_ICO_SVG_WH{border:solid 0.00rem green;}
#w_a_1_1_DESKTOP_ICO_SVG_WH svg{width:40px; height:40px; border:solid 0.00rem fuchsia;}
</style>



<div id="w_a_1_1_DESKTOP_ICO_SVG_WH">
<svg  xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="orange" class="bi bi-pc-display-horizontal" viewBox="0 0 16 16">  <path d="M1.5 0A1.5 1.5 0 0 0 0 1.5v7A1.5 1.5 0 0 0 1.5 10H6v1H1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5v-1h4.5A1.5 1.5 0 0 0 16 8.5v-7A1.5 1.5 0 0 0 14.5 0h-13Zm0 1h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .5-.5ZM12 12.5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0Zm2 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0ZM1.5 12h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1ZM1 14.25a.25.25 0 0 1 .25-.25h5.5a.25.25 0 1 1 0 .5h-5.5a.25.25 0 0 1-.25-.25Z"/></svg>

</div>

`
;

}; // dgebi w_a_1_1_RilevaDispositivo


//
// already controllato se
// mobile o desktop

if(w_a_1_1_MOBILE_DEVICE===1){
// alert("MOBILE_DEVICE");

document.querySelector("#w_a_1_1_AVVISO_MOBILE").style.display="block";

}

else

{
//alert("DESKTOP_DEVICE");
document.querySelector("#w_a_1_1_AVVISO_DESKTOP").style.display="block";

 
//
// RESPONSIVITY CONDIZIONATA
//

w_a_1_1_AttivaResponsivity = 1 ;
if (w_a_1_1_AttivaResponsivity===1){

//
// responsivity ini
//
//
// RESPONSIVITY
// adattamenti responsive per desktop PER DISPOSITIVO DESKTOP
// --------------------------------------====================

document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO").style.fontSize="1.75rem";
document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO_SVG").style.width="40px";
document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO_SVG").style.height="40px";


document.querySelector("#w_a_1_1_TRASH_CAN_SEMANTIC_SVG").style.fontSize="1.75rem";

document.querySelector("#w_a_1_1_DARKMODE_SVG").style.width="20px";
document.querySelector("#w_a_1_1_DARKMODE_SVG").style.height="20px";
document.querySelector("#w_a_1_1_LIGHTMODE_SVG").style.width="20px";
document.querySelector("#w_a_1_1_LIGHTMODE_SVG").style.height="20px";

document.querySelector("#w_a_1_1_BACKDOOR_FORM_SI_SVG").style.width="20px";
document.querySelector("#w_a_1_1_BACKDOOR_FORM_SI_SVG").style.height="20px";
document.querySelector("#w_a_1_1_BACKDOOR_FORM_NO_SVG").style.width="20px";
document.querySelector("#w_a_1_1_BACKDOOR_FORM_NO_SVG").style.height="20px";

document.querySelector("#w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SVG").style.width="20px";
document.querySelector("#w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SVG").style.height="20px";


document.querySelector("#w_a_1_1_UP_NELLA_PAGINA_SVG").style.width= "20px";
document.querySelector("#w_a_1_1_UP_NELLA_PAGINA_SVG").style.height="20px";

document.querySelector("#w_a_1_1_DOWN_NELLA_PAGINA_SVG").style.width= "20px";
document.querySelector("#w_a_1_1_DOWN_NELLA_PAGINA_SVG").style.height="20px";


// document.querySelector("#w_a_1_1_area_immissione_testo__").style.fontSize="1.275rem";


document.querySelector("#w_a_1_1_invia_testo_button__").style.fontSize="2.750rem";
document.querySelector("#w_a_1_1_invia_testo_button__").style.fontFamily="PT Mono";
document.querySelector("#w_a_1_1_invia_testo_button__").style.fontVariant="small-caps";
document.querySelector("#w_a_1_1_invia_testo_button__").style.fontWeight="bold";


document.querySelector("#w_a_1_1_SEMAFORO_GREEN").style.fontSize="1.275rem";
document.querySelector("#w_a_1_1_SEMAFORO_RED").style.fontSize="1.275rem";


//
// responsivity fin
//
}; // attiva disattiva responsivity


};  //  i.test(navigator.userAgent) ? mobile o desktop 


</script>
</div>
';  // echo


}; // w_a_1_1_RilevaDispositivo funzione php
 
w_a_1_1_RilevaDispositivo();

// ^^^^^^^^^^^^^^^^^^^^^^^^^


// w_a_1_1_7_0_0_detectWH

function w_a_1_1_detectWH(){
// ^^^^^^^^^^^^^^^^^^^^^^^^
echo '<div style="font-family:monospace; text-align:center;">
<span id="w_a_1_1_result" style="font-size:100%;font-variant:small-caps;"></span>
<script>"use strict"; function w_a_1_1_displayWindowSize(){ var w = document.documentElement.clientWidth;var h = document.documentElement.clientHeight;var wFinestraWIDTH = document.documentElement.clientWidth;var hFinestraHEIGHT = document.documentElement.clientHeight;document.getElementById("w_a_1_1_result").innerHTML = " " + wFinestraWIDTH + "x" + hFinestraHEIGHT +" <span style=`font-size:medium;`>"+(wFinestraWIDTH/16)+"rem "+" x "+(hFinestraHEIGHT/16)+"rem </span>";}window.addEventListener("resize", w_a_1_1_displayWindowSize);w_a_1_1_displayWindowSize();+" "</script>

</div>
';

};
// 
w_a_1_1_detectWH();
// ^^^^^^^^^^^^^^^^


// w_a_1_1_7_5_0_CheckPiattaforma

// occorre che esista app platform.js

$w_a_1_1_CheckPiattaforma = "./w_a_0_0_noyek/w_a_0_0_platform/index.js";
if(file_exists($w_a_1_1_CheckPiattaforma)){
        
    echo '
	
	<div>piattaforma: </div>
	
    <script src="./w_a_0_0_noyek/w_a_0_0_platform/index.js"></script>
    <div id="w_a_1_1_rilevato_sistema_operativo_e_browser"></div>
    <script>
    document.getElementById("w_a_1_1_rilevato_sistema_operativo_e_browser").innerHTML=""
    +"<div>"
    +" "
    +""+platform.name 
    +" v"
    +""+platform.version
    +""
    +" "+platform.os
    +" "
    +""
    +""
    +"</div>"
    
    +"";
    
    
    </script>
    ';

}
else
{
	
	echo '<br>'.'<kbd> piattaforma al momento non rilevabile </kbd>';

	
}; // if y or n php platform.js 


echo '</details>';
	
}; // if modulare

?> 






<?php  
if($INCLUSIONE_MODULI===1){
include('./'.$w_a_1_1_PHP_DIR_modu.'/'.'modu_scroll_hide_show.php'); 
}
else
{

echo '

<script>
  let PRECE_SCROLL=0; // posizione numero precedente
  let ADESS_SCROLL;   // posizione attuale
  // definizione di variabili
  // interessate per controllo
  // se esiste un movimento
  // della pagina

function SCROLL(){ 
  currentScrollY = window.scrollY; // rileva pos attuale
  ADESS_SCROLL= currentScrollY;    // in alias 

    // il condizionale esegue un
    // confronto
    // se uguale vuol dire NO scroll
    // se differente SI scroll pagina
    if(ADESS_SCROLL===PRECE_SCROLL){
    document.querySelector("#w_a_1_1_INDEX_WRAP").style.visibility="visible";
    document.querySelector("#w_a_1_1_UP_NELLA_PAGINA_SVG").style.visibility="visible";
    document.querySelector("#w_a_1_1_DOWN_NELLA_PAGINA_SVG").style.visibility="visible";
    document.querySelector("#w_a_1_1_UP_DOWN_NELLA_PAGINA").style.visibility="visible";
    document.querySelector("#w_a_1_1_DETTAGLI_SLIDERS").style.visibility="visible";
    document.querySelector("#w_a_1_1_CONTENITORE_DETTAGLI_SLIDERS").style.visibility="visible";
    document.querySelector("#w_a_1_1_DARKMODE_SVG").style.visibility="visible";
    document.querySelector("#w_a_1_1_LIGHTMODE_SVG").style.visibility="visible";
    document.querySelector("#w_a_1_1_BACKDOOR_FORM_SI_SVG").style.visibility="visible";
    document.querySelector("#w_a_1_1_BACKDOOR_FORM_NO_SVG").style.visibility="visible";
    document.querySelector("#MODALE_UI_BUTTON").style.visibility="visible";
    document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO").style.visibility="visible";



    }else
    {  
    document.querySelector("#w_a_1_1_INDEX_WRAP").style.visibility="hidden";
//  document.querySelector("#w_a_1_1_UP_NELLA_PAGINA_SVG").style.visibility="hidden";
//  document.querySelector("#w_a_1_1_DOWN_NELLA_PAGINA_SVG").style.visibility="hidden";
//  document.querySelector("#w_a_1_1_UP_DOWN_NELLA_PAGINA").style.visibility="hidden";
//  document.querySelector("#w_a_1_1_DETTAGLI_SLIDERS").style.visibility="hidden";
//  document.querySelector("#w_a_1_1_CONTENITORE_DETTAGLI_SLIDERS").style.visibility="hidden";
//  document.querySelector("#w_a_1_1_DARKMODE_SVG").style.visibility="hidden";
//  document.querySelector("#w_a_1_1_LIGHTMODE_SVG").style.visibility="hidden";
//  document.querySelector("#w_a_1_1_BACKDOOR_FORM_SI_SVG").style.visibility="hidden";
//  document.querySelector("#w_a_1_1_BACKDOOR_FORM_NO_SVG").style.visibility="hidden";
//  document.querySelector("#MODALE_UI_BUTTON").style.visibility="hidden";
//  document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO").style.visibility="hidden";



	};

    PRECE_SCROLL=currentScrollY; // memorizza valore attuale

  }; // chiusura della funzione

SCROLL_SETINT=setInterval(SCROLL, 1000);

//                         /\
//                         ||
//                         ||
// funzione che sottopone sotto controllo
// ogni 1sec la posizione dello scroll
// di pagina
//


  function STOP_SCROLL(){
  alert("clearInterval");
  clearInterval( SCROLL_SETINT );
  };
//
// attivato da apposito button onclick
//


</script>



';


}; // if modulare
?> 


<?php  
if($INCLUSIONE_MODULI===1){
include('./'.$w_a_1_1_PHP_DIR_modu.'/'.'modu_rolling_dot_4arg.php'); 
}
else
{

// rolling dot


echo '';

echo '<!-- gli sliders rolling dots ini -->';
    ///////////////////////////
    // ROLLING DOT
    ///////////////////////////
    
    
    echo '
    <script>
    function w_a_1_1_AppRD(arg1, arg2, arg3, arg4){
    // Application Rolling Dot
    
    // definizione di unvalue standard
    // diverso per dispositivo mobile o desktop
    //
    // per MOBILE
    
    w_a_1_1_ValoreStandard=3.5;
    
    // per DESKTOP
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
    {}
    else
    {
    w_a_1_1_ValoreStandard=1.500;  // vecchio default
    
    w_a_1_1_ValoreStandard=1.125;  // nuovo default 
    
    };

    
    document.getElementById(arg2).innerHTML=
    `
 <!--
 old style
    <input id="w_a_1_1_SETYINGS_INPUT" style="width:30%;" type="range" value="${w_a_1_1_ValoreStandard}" step="0.125"  min="0" max="5">
-->


<!-- 
 new style
 -->
    <input id="w_a_1_1_SETYINGS_INPUT"  type="range" value="${w_a_1_1_ValoreStandard}" step="0.125"  min="0" max="5">
    
    
    
    <div id="w_a_1_1_SETYINGS_VALORE_DINAMICO_INPUT" style="font-family:monospace; display:inline-block;"></div>
    <div id="w_a_1_1_SETYINGS"></div>
    
    `;
    
    function w_a_1_1_RollingDot(){
    
    // questa funzioni incapsulata 
    // visualizza in rem la dim
    // del font-size
        function w_a_1_1_LETTURA_RANGE(){
        w_a_1_1_FonteVariabile=document.getElementById("w_a_1_1_SETYINGS_INPUT").value;
        document.getElementById("w_a_1_1_SETYINGS_VALORE_DINAMICO_INPUT").innerHTML=`<span style="font-weight:bold; color:purple; display:inline-block;">${w_a_1_1_FonteVariabile}rem</span>`;
        return w_a_1_1_FonteVariabile;
        }; w_a_1_1_LETTURA_RANGE();
    
    
    
    w_a_1_1_FonteVariabileDinamica=w_a_1_1_LETTURA_RANGE();
    document.getElementById("w_a_1_1_SETYINGS").innerHTML=
    `
    <style>
    
    #${arg1}{padding-left:${w_a_1_1_FonteVariabileDinamica*0.75}rem}
    #${arg1}{font-size:${w_a_1_1_FonteVariabileDinamica}rem}

    #${arg3}{padding-left:${w_a_1_1_FonteVariabileDinamica*0.75}rem}
    #${arg3}{font-size:${w_a_1_1_FonteVariabileDinamica}rem}
    #${arg3}{margin-top:${w_a_1_1_FonteVariabileDinamica}rem}
    #${arg3}{line-height:${w_a_1_1_FonteVariabileDinamica}rem}

    #${arg4}{padding-left:${w_a_1_1_FonteVariabileDinamica*0.75}rem}
    #${arg4}{font-size:${w_a_1_1_FonteVariabileDinamica}rem}
    #${arg4}{margin-top:${w_a_1_1_FonteVariabileDinamica}rem}
    #${arg4}{line-height:${w_a_1_1_FonteVariabileDinamica}rem}



    
    </style>
    `
    ;
    
    
    
    
    }; w_a_1_1_EseguiRollingDot=setInterval(w_a_1_1_RollingDot, 1)
    
    }; // w_a_1_1_AppRD(arg1, arg2)
    </script>
    ';  //  echo



    echo '<section  id="w_a_1_1_CONTENITORE_DETTAGLI_SLIDERS">';
    echo '<details  id="w_a_1_1_DETTAGLI_SLIDERS">';
    echo '<summary  id="w_a_1_1_SUMMARY_SLIDERS">';
    echo '';
    echo '
    <svg id="w_a_1_1_SLIDERS_SVG" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-sliders" viewBox="0 0 16 16">
    <path fill-rule="evenodd" d="M11.5 2a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M9.05 3a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0V3zM4.5 7a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3M2.05 8a2.5 2.5 0 0 1 4.9 0H16v1H6.95a2.5 2.5 0 0 1-4.9 0H0V8zm9.45 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3m-2.45 1a2.5 2.5 0 0 1 4.9 0H16v1h-2.05a2.5 2.5 0 0 1-4.9 0H0v-1z"/>
    </svg>
    ';
    echo '';
    echo '</summary>';
    echo '';
    echo '<article style="width:auto; text-align:center;">';
        echo '<div id="w_a_1_1_area_immissione_testo__RD"></div> <!-- w_a_1_1_area_immissione_testo__RD -->';
    //    echo '<script>w_a_1_1_AppRD("w_a_1_1_area_immissione_testo__", "w_a_1_1_area_immissione_testo__RD","w_a_1_1_CONTENUTO_DENCRIPTED")</script>';
// 
// TENTATIVO DI PERSONALIZZARE GLI ARGOMENTI
// DI ROLLING DOT
// 
	    echo '<script>w_a_1_1_AppRD("w_a_1_1_area_immissione_testo__", "w_a_1_1_area_immissione_testo__RD","REVERSE_ULTIM_CIF", "REVERSE_ULTIM_DEC")</script>';

    echo '';
    echo '</article>';
    echo '</details>';
    
    echo '</section>';
    echo '';


    echo '<!-- gli sliders rolling dots fin -->';

	
};  // if modulare

?> 










<?php 

// modu_the_famous_last_words_include_clock.php

// thefamouslastwords

echo '';

echo '<section id="BIG_LAST_WORDS" style="text-align:center; border:solid 0.00rem teal;">';

echo '
<style>#thefamouslastwords{font-family:"PT Mono",monospace;}</style>
<blockquote id="thefamouslastwords" style="margin-top:0.5rem; margin-bottom:0.5rem; text-align:center; border:dotted 0.25rem yellow; border-radius:0.50rem; box-shadow:6px 6px 12px transparent;">
<q style="margin-top:0.125rem; margin-bottom:0.125rem; padding:0.125rem; background-color:white; color:navy; font-size:100%;  font-weight:normal; font-variant:small-caps; border:solid 0.00rem aqua; border-radius:0.50rem;">
release  textarea_240508_1945a     : verde, nook, sparrow, sixties
 &copy; 2024
</q>

<p style="font-family:Rasa;">
The Mad Yak 
by beat Gregory Corso (<span style="font-weight:700;">on record</span>)
</p>
</blockquote>

';

?>


<?php  
if($INCLUSIONE_MODULI===1){
include('./'.$w_a_1_1_PHP_DIR_modu.'/'.'modu_clock_time_refresh.php'); 
}
else
{

//
// examples svelte clock adattato 
// by rinaldo rasa (c) 2024
// ||
// ||
// ||
// \/
echo '

<!-- -->
<!-- inizia il contenitore details-->
<!-- stylato inline -->
<details><summary style="background-color:rgba(255, 215, 0, 0.150);"></summary>
';


echo '

<section class="ui segment" style="position:static!important; height:0rem; display:inline-block; border:solid 0.00rem lime;">
<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ HACKING  -->


  <section style="border:solid 0.00rem fuchsia;">
  <!-- -->
  <br>
    <section style="width:auto; height:auto; text-align:center; border:solid 0.00rem aqua;">
    <!-- -->
    
      <article style="position:static; width:16rem;  height:16rem; text-align:center; border:dotted 0.00rem red;">
      
      
            <script type="module" crossorigin src="./assets/clock/index-Cn0A_onJ.js?987654321"></script>
            <link rel="stylesheet" crossorigin href="./assets/clock/index-DpF8Xlag.css?987654321">
		    
		    
            <a href="https://svelte.dev/examples/clock">
                <div id="app" style="margin-left:auto;"></div>
            </a>
      
      
      </article>
    
    
      <blockquote style="font-family:monospace; border:solid 0.00rem blue; opacity:0.00;">
      
       <a href="https://svelte.dev/examples/clock">examples svelte clock</a> 
       <br>
       adattato by 
       <br>
       rinaldo rasa (c) 2024
      
      </blockquote>
    
    
    </section>
  
  </section>

</section>

';


echo '
<!-- raggruppare qui sotto alcune feature -->
<!--
fare attenzione che gli inserimenti utilizzano
massicciamente gli id quindi sono mutuamente
esclusivi uno rispetto ad altro

||
||
\/ -->
';

// w_a_1_1_8_0_0_fulldatevisu
// orario del momento
$w_a_1_1_fulldatevisu=0;
if($w_a_1_1_fulldatevisu===1){

echo '<article>';
	
echo '<div id="w_a_1_1_GIORNO_TIME">';
echo date("l d M Y H:i:s");
echo '</div>';
}
else
{
echo '<div id="w_a_1_1_GIORNO_TIME">';
echo date("l d M Y").' '.'ultimo aggiornamento della pagina alle ore:'.' '.date("H:i:s");
echo '</div>';

echo '</article>';

}; // $w_a_1_1_fulldatevisu 

echo '
<!--
fare attenzione che gli inserimenti utilizzano
massicciamente gli id quindi sono mutuamente
esclusivi uno rispetto ad altro

||
||
\/ -->
';

echo '<a href="index.html" class="ui  inverted button">

<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="green" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
  <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
</svg>

</a>';


echo '
</details> <!-- svelte clock -->

<!-- terminato il contenitore details-->

';


	
}; // if modulare

?> 



<?php 

echo '</section"> <!-- BIG_LAST_WORDS -->';

 
echo '';
echo '';

// modu_the_famous_last_words_include_clock.php
?> 


<?php 
//  
//  <!-- et mahler 03620    -->  
//  <!-- notepad blackboard -->
//  
//  
?>


<?php 
echo '
<hr>
<span><button onclick="Refresh()" style="background-color:white; color:black;"  class="ui massive button">
<kbd style="display:block;"><q class="ui orange label"> <span style="display:none;">&#12307;</span> VALIDO SOLO PER TEST: textarea_240508_1945a </q></kbd>
<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="purple" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
  <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
</svg>
</button>
<script>function Refresh(){document.location.replace("textarea.php");}</script></span>
<hr>
';

?>




<?php  
// modu_the_fine_end.php

echo '<div id="fine"></div>';
echo '</body>'; 
echo '</html>'; 

?> 




<?php  /* echo '<br>' . phpinfo();  */  ?>

<?php  
//  
//  <!-- 050 empty -->
//  <!-- 
//  n  modulo
//  =========
//  
//  1  002 w_a_1_1_HTML
//  2  010 w_a_1_1_BODY
//  3  011 w_a_1_1_RESPONSIVITY_EXTRA
//  4  012 w_a_1_1_MAIN
//  5  013 w_a_1_1_DETAILS_TESTO_DINAMICO
//  6  015 w_a_1_1_SUMMARY_TESTO_DINAMICO
//  7  015 w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO
//  8  015 w_a_1_1_SUMMARY_TESTO_DINAMICO_TITOLO_SVG
//  9  016 w_a_1_1_TRASH_PUNTINI_ETC
//  10 017 w_a_1_1_TRASH_CAN
//  11 017 w_a_1_1_TRASH_CAN_SVG
//  12 017 w_a_1_1_TRASH_CAN_SEMANTIC_SVG
//  13 018 w_a_1_1_TRE_PUNTINI 
//  14 018 w_a_1_1_TRE_PUNTINI_TEXT
//  15 018 w_a_1_1_TRE_PUNTINI_TRIANGLE_SVG
//  16 018 w_a_1_1_TRE_PUNTINI_TRIANGLE_SEMANTIC_SVG
//  17 019 w_a_1_1_DARKMODE
//  18 019 w_a_1_1_DARKMODE_SVG
//  19 020 w_a_1_1_LIGHTMODE
//  20 020 w_a_1_1_LIGHTMODE_SVG
//  21 021 w_a_1_1_BACKDOOR_FORM_SI
//  22 021 w_a_1_1_BACKDOOR_FORM_SI_SVG
//  23 022 w_a_1_1_BACKDOOR_FORM_NO
//  24 022 w_a_1_1_BACKDOOR_FORM_NO_SVG
//  25 023 w_a_1_1_SALVATAGGIO_DI_TIPO_CIF
//  26 023 w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SUMMARY
//  27 023 w_a_1_1_SALVATAGGIO_DI_TIPO_CIF_SVG
//  28 024 w_a_1_1_UP_DOWN_NELLA_PAGINA
//  29 024 w_a_1_1_UP_NELLA_PAGINA
//  30 024 w_a_1_1_UP_NELLA_PAGINA_SVG
//  31 024 w_a_1_1_DOWN_NELLA_PAGINA
//  32 024 w_a_1_1_DOWN_NELLA_PAGINA_SVG
//  33 030 w_a_1_1_FORM_X_INVIA__
//  34 031 w_a_1_1_FORM_X_INVIA_AES__
//  35 031 w_a_1_1_SSAP__
//  36 031 w_a_1_1_post_uno__
//  37 031 w_a_1_1_post_due__
//  38 031 w_a_1_1_post_tre__
//  39 031 w_a_1_1_post_qua__
//  40 031 w_a_1_1_area_immissione_testo_invia_container__
//  41 031 w_a_1_1_area_immissione_testo__
//  42 031 w_a_1_1_invia_testo_container__
//  43 031 w_a_1_1_invia_testo_button__
//  44 031 w_a_1_1_invia_testo_button__
//  45 031 w_a_1_1_INDEX_WRAP
//  46 031 w_a_1_1_INDEX_CLICK
//  47 032 w_a_1_1_SEMAFORO_GREEN
//  48 032 w_a_1_1_SEMAFORO_RED
//  49 033 w_a_1_1_DIGITAL_IDENTITY_FREE_READING
//  50 033 w_a_1_1_CONTENUTO_DENCRIPTED
//  51 035 MODALE
//  52 040 w_a_1_1_AVVISO_MOBILE
//  53 040 w_a_1_1_AVVISO_DESKTOP
//  54 040 w_a_1_1_RilevaDispositivo
//  55 040 w_a_1_1_DESKTOP_ICO_SVG_WH
//  56 041 w_a_1_1_result
//  57 042 w_a_1_1_rilevato_sistema_operativo_e_browser
//  58 043 w_a_1_1_GIORNO_TIME
//  59 043 w_a_1_1_GIORNO_TIME
//  60 044 w_a_1_1_SETYINGS_INPUT
//  61 044 w_a_1_1_SETYINGS_VALORE_DINAMICO_INPUT
//  62 044 w_a_1_1_SETYINGS
//  63 044 w_a_1_1_CONTENITORE_DETTAGLI_SLIDERS
//  64 044 w_a_1_1_DETTAGLI_SLIDERS
//  65 044 w_a_1_1_SUMMARY_SLIDERS
//  66 044 w_a_1_1_SLIDERS_SVG
//  67 044 w_a_1_1_area_immissione_testo__RD
//  68 045 BIG_LAST_WORDS
//  69 045 thefamouslastwords
//  70 046 fine
//  -->
//  <!-- 
//  bs icone svg
//  ============
//  
//  bi bi-textarea-t
//  bi bi-trash
//  bi bi-exclamation-triangle
//  bi bi-ban-fill
//  bi bi-ban
//  bi bi-ui-checks-grid
//  bi bi-database-add
//  bi bi-caret-up
//  bi bi-caret-down
//  bi bi-floppy
//  bi bi-pc-display-horizontal
//  bi bi-phone
//  bi bi-microsoft
//  bi bi-browser-chrome
//  bi bi-android2
//  bi bi-pc-display-horizontal
//  bi bi-sliders
//  bi bi-arrow-clockwise
//  
//  -->
//  
//  <!--
//  unicode simil icone
//  ===================
//  #4124; လ
//  #5121; ᐁ
//  #5123; ᐃ
//  #5125; ᐅ
//  #5130; ᐊ
//  #5167; ᐯ
//  #5169; ᐱ
//  #5171; ᐳ
//  #5176; ᐸ
//  #8263; ⁇
//  #8264; ⁈
//  #8265; ⁉
//  
//  #9587; ╳
//  #9650; ▲
//  #9651; △
//  #9654; ▶
//  #9660; ▼
//  #9661; ▽
//  #9664; ◀
//  #9665; ◁
//  
//  #9733; ★
//  #9734; ☆
//  #9747; ☓
//  #9776; ☰
//  
//  #9876; ⚔
//  #9888; ⚠
//  #9932; ⛌
//  
//  #9940; ⛔
//  #9989; ✅
//  
//  #10007; ✗
//  #10008; ✘
//  
//  #10010; ✚
//  #10033; ✱
//  
//  
//  #10060; ❌
//  #10062; ❎
//  #10067; ❓
//  #10071; ❗
//  #10075; ❛
//  #10076; ❜
//  #10077; ❝
//  #10078; ❞
//  
//  #10084; ❤
//  
//  #10088; ❨
//  #10089; ❩
//  #10090; ❪
//  #10091; ❫
//  #10092; ❬
//  #10093; ❭
//  #10094; ❮
//  #10095; ❯
//  #10096; ❰
//  #10097; ❱
//  
//  
//  #11575; ⴷ
//  #11576; ⴸ
//  #11590; ⵆ
//  #11596; ⵌ
//  
//  
//  #11603; ⵓ
//  #11604; ⵔ
//  #11605; ⵕ
//  #11607; ⵗ
//  #11608; ⵘ
//  #11613; ⵝ
//  #11622; ⵦ
//  #12289; 、
//  #12296; 〈
//  #12297; 〉
//  #12298; 《
//  #12299; 》
//  #12307; 〓
//  #12308; 〔
//  #12309; 〕
//  #12324; 〤
//  #12349; 〽
//  #12367; く
//  #12513; メ
//  #12539; ・
//  #12584; ㄨ
//  #12692; ㆔
//  #13189; ㎅
//  #13190; ㎆
//  #13191; ㎇
//  #13192; ㎈
//  #13193; ㎉
//  #13197; ㎍
//  #13198; ㎎
//  #13199; ㎏
//  #13200; ㎐
//  #13201; ㎑
//  #13202; ㎒
//  #13203; ㎓
//  #13204; ㎔
//  #13210; ㎚
//  #13211; ㎛
//  #13212; ㎜
//  #13213; ㎝
//  #13214; ㎞
//  #13215; ㎟
//  #13216; ㎠
//  #13217; ㎡
//  #13218; ㎢
//  #13219; ㎣
//  #13220; ㎤
//  #13221; ㎥
//  #13222; ㎦
//  #13223; ㎧
//  #13224; ㎨
//  
//  
//  
//  -->
//  
//  <!--
//  
//  modu_isset_session.php
//  modu_doctype_html_head_apertura.php
//  modu_inclusione_modu_meta.php
//  modu_title.php
//  modu_variabili_di_sistema.php
//  modu_semantic_fonts.php
//  modu_styles.php
//  modu_file_essenziali.php
//  modu_head_chiusura.php
//  modu_body_apertura.php
//  modu_responsivity_disk_sliders.php
//  modu_main_apertura.php
//  modu_t_dinamico_etc.php
//  modu_form_e_invia_testo.php
//  modu_yekkey.php 
//  modu_salva_testo.php
//  modu_lettura_delle_buste.php
//  modu_modale_semantic_ui.php
//  modu_main_chiusura.php
//  modu_t_details_width_dinamico.php
//  modu_device_wh_platform.php      
//  modu_scroll_hide_show.php        
//  modu_rolling_dot_4arg.php 
//  modu_the_famous_last_words_include_clock.php
//  modu_the_fine_end.php
//  
//  
//  -->
//  <!-- 
//  <blockquote style="font-family:'PT Mono',monospace;" id="ENGINE"></blockquote>
//  <script>
//  document.getElementById("ENGINE").innerHTML=navigator.userAgent;
//  </script>
//  -->
//  
?>
