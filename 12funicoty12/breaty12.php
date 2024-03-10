<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <link rel="icon" type="image/png" href="https://it.altervista.org/images/favicon/favicon-16x16.png" sizes="16x16">


<title>


µ



breaty12_240227_1845a

</title>

<link rel="stylesheet" href="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.css">
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.js"></script>

<link rel="stylesheet" href="http://avid3820725.altervista.org/semantic/Semantic-UI-master/dist/semantic.min.css">

<script src="http://avid3820725.altervista.org/semantic/Semantic-UI-master/dist/semantic.min.js"></script>




<link href="https://fonts.googleapis.com/css2?family=PT+Mono:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rasa:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">


<style>

html * { font-family:'PT Mono', monospace; }
</style>

</head>
<body>

<section style="position:fixed; top:1.25rem; right:1.000rem; z-index:1000000">
<a href="#" class="ui mini button">/\</a>
<br>
<a href="#fine" class="ui mini button">\/</a>
</section>


<section style="width:75%; margin-left:8.75%; border:solid 0.15rem rgba(0,255,0,0.125);" class="ui placeholder segment">
<div class="ui two column very relaxed stackable grid">


    <div  style="border-right:dashed 0.15rem green;"  class="column">
      <form class="ui form" action="breaty12.php"  method="POST">
            <div class="field">
                <label>Username</label>
                <div class="ui left icon input">
                    <input id="UTENTE" name="UTENTE"type="password" placeholder="">
                    <i class="user icon"></i>
                </div>
            </div>
        
            <div class="field">
                <label>Password</label>
                <div class="ui left icon input">
                    <input id="PASSWORD" name="PASSWORD" type="password">
                    <i class="lock icon"></i>
                </div>
            </div>
            <input class="ui blue basic submit massive button" type="submit" value="Login">  
        
      </form>
      
       
    </div>
    
    <div class="column">
    
       <h5 style="color:olive;" class="ui center aligned segment">BACKUP</h5>
       <h6 style="color:olive;" class="ui center aligned segment">breaty12_240227_1845a</h6>
 

     
        <article style="background-color:white; color:black; display:none;" class="ui center aligned segment">
        <div style="background-color:white;" ><i class="exclamation big red triangle icon"></i></div>
        <blockquote style="font-weight:600;"></blockquote>
        </article>
        
    </div>


    
</div>
</section>


<?php 
include('./w_a_0_0_noyek/w_a_0_0_yek/w_a_0_0_stello.php');



// le cartelle che non hanno
// il magic number sono escluse
// da aggiornamento nome passando
// da una versione ad altra di fitnn
// ||
// ||
// ||
// ||
// ||
// \/

$MAGIC_NUMBER='12';


$VAI=0;

$UTENTE_NOW = $_POST["UTENTE"];
$PASSWORD_NOW = $_POST["PASSWORD"];

$CONTROLLO_NOW = $_POST["CONTROLLO"];


$THE_BIG_CODE=1;




$COLORE_ORIGINE='red';
$COLORE_DESTINA='green';


$root = getcwd();

$ORIGINE = $root . '/';

$DESTINA = '../' . 'breaty'.$MAGIC_NUMBER.'_BAK' . '/' ;




echo '<blockquote class="ui header">';

echo '<div class="ui purple center aligned segment">' . 'MAGIC_NUMBER = ' . $MAGIC_NUMBER . '</div>' ;


echo '<table class="ui table">';
echo '<tr><td>';
echo '<span>ORIGINE: ' .'</span>'. ' <span class="ui red basic  label"> ' . $ORIGINE . '' . '</span>'  ;
echo '</td></tr>';
echo '<tr><td>';
echo '<span>DESTINA: ' .'</span>'. ' <span class="ui green basic label"> ' . $DESTINA . '' . '</span>'  ;
echo '</td></tr>';
echo '';
echo '</table>';

echo '</blockquote>';

echo '<hr>';


echo '<article class="ui purple segment">';

$ASSEMBLA = 'assembla10.php';
if(file_exists($ASSEMBLA)){ echo '<br>' . $ASSEMBLA . ' esiste! '; };
$TROVA_se_gia_copiato = $DESTINA . $ASSEMBLA ;

if(file_exists($TROVA_se_gia_copiato))
{ 
echo '<br>'.$TROVA_se_gia_copiato.' esiste! '; 
}
else
{ 
echo '<br>'.$TROVA_se_gia_copiato.' NON esiste! '; 

copy($ASSEMBLA, $TROVA_se_gia_copiato);

};

echo '<hr>';

$COMPOSIZIONE_ORIGINA = 'composizione10';
$COMPOSIZIONE_DESTINA = $DESTINA  . $COMPOSIZIONE_ORIGINA . '/' ;

// echo 'COMPOSIZIONE_DESTINA =' . $COMPOSIZIONE_DESTINA ;

// 
if(is_Dir($COMPOSIZIONE_ORIGINA)){ echo '<br>'.$COMPOSIZIONE_ORIGINA.' esiste! ';  
// la directory composizione esiste
$COMPOSIZIONE_ORIGINA_x_lista = './'.$COMPOSIZIONE_ORIGINA.'/';
echo '<br>'.'COMPOSIZIONE_ORIGINA_x_lista= '.$COMPOSIZIONE_ORIGINA_x_lista;

$LISTA_COMPOSIZIONE_ORIGINA_x_lista=scandir($COMPOSIZIONE_ORIGINA_x_lista);
$CONTA_COMPOSIZIONE_ORIGINA_x_lista=count($LISTA_COMPOSIZIONE_ORIGINA_x_lista);

echo '<br>'.'LISTA_COMPOSIZIONE_ORIGINA_x_lista contiene '. $CONTA_COMPOSIZIONE_ORIGINA_x_lista . ' files ';


} else {echo '<br>'.$COMPOSIZIONE_ORIGINA.' NON esiste! '; mkdir($COMPOSIZIONE_ORIGINA); };


// $TROVA_se_gia_esiste = $DESTINA . $COMPOSIZIONE_DESTINA ;

$TROVA_se_gia_esiste =  $COMPOSIZIONE_DESTINA ;

echo '<br>'.'TROVA_se_gia_esiste =  ' . $TROVA_se_gia_esiste ;

/**/
// echo '<br>'. $TROVA_se_gia_esiste  ;
if(is_Dir($TROVA_se_gia_esiste)){ echo '<br>'.$TROVA_se_gia_esiste.' esiste! ';  

echo '<br>';


	echo '<details><summary></summary>';
		foreach($LISTA_COMPOSIZIONE_ORIGINA_x_lista as $ELEMENTI_LISTA_COMPOSIZIONE_ORIGINA_x_lista ){
				
			//	echo '<br>' . $ELEMENTI_LISTA_COMPOSIZIONE_ORIGINA_x_lista ;
			
			
			echo '<div class="ui label">';
			$DOVE_ORIGINA = $COMPOSIZIONE_ORIGINA_x_lista . $ELEMENTI_LISTA_COMPOSIZIONE_ORIGINA_x_lista ;
			echo '<br>' . $DOVE_ORIGINA ;
			
			
			$DOVE_DESTINA = $TROVA_se_gia_esiste .  $ELEMENTI_LISTA_COMPOSIZIONE_ORIGINA_x_lista ;
			echo '<br>' . $DOVE_DESTINA ;
			
			echo '</div>';
			
			// esegue copia da origina a destina
		
			copy($DOVE_ORIGINA, $DOVE_DESTINA);	
				
				
		};  // foreach origina
	echo '</details>';


echo '<hr>';
echo '<br>'.'Controllo se eseguita copia in ' . $COMPOSIZIONE_DESTINA ;

$LISTA_COMPOSIZIONE_DESTINA = scandir($COMPOSIZIONE_DESTINA);
$CONTA_COMPOSIZIONE_DESTINA = count($LISTA_COMPOSIZIONE_DESTINA);
echo '<br>' . 'In '. $COMPOSIZIONE_DESTINA . ' sono presenti ' . $CONTA_COMPOSIZIONE_DESTINA . ' files ';
	echo '<details><summary></summary>';
		foreach($LISTA_COMPOSIZIONE_DESTINA as $ELEMENTI_LISTA_COMPOSIZIONE_DESTINA){
			
			echo '<br>' . $ELEMENTI_LISTA_COMPOSIZIONE_DESTINA ;
			
		};  // foreach destina
	echo '</details>';

} else {echo '<br>'.$TROVA_se_gia_esiste.' NON esiste! '; mkdir($TROVA_se_gia_esiste); }; // if destina ok



echo '<hr>';

// raccoglitore di moduli da 0 a 50
$WAXXINS = 'wa10ins';

$DOVE_ORIGINA_MODULI = $ORIGINE . $WAXXINS . '/' ;
echo '<br>' . 'I moduli orgine sono in ' . $DOVE_ORIGINA_MODULI ;

$LISTA_DOVE_ORIGINA_MODULI = scandir($DOVE_ORIGINA_MODULI);
$CONTA_DOVE_ORIGINA_MODULI = count($LISTA_DOVE_ORIGINA_MODULI);
echo '<br>' . 'Nella directory  '.$DOVE_ORIGINA_MODULI.' ci sono '.$CONTA_DOVE_ORIGINA_MODULI .' files';


$DOVE_DESTINA_MODULI = $DESTINA . $WAXXINS .'/';

if(is_Dir($DOVE_DESTINA_MODULI)){

echo '<br>';

	echo '<details><summary></summary>';
		foreach($LISTA_DOVE_ORIGINA_MODULI as $ELEMENTI_LISTA_DOVE_ORIGINA_MODULI){
			
		
			echo '<div class="ui label">';
			echo '<br>'. $DOVE_ORIGINA_MODULI . $ELEMENTI_LISTA_DOVE_ORIGINA_MODULI ;
			echo '<br>'. $DOVE_DESTINA_MODULI . $ELEMENTI_LISTA_DOVE_ORIGINA_MODULI ;
			echo '</div>';

// copiati i file da origine a destinazione

copy(  $DOVE_ORIGINA_MODULI . $ELEMENTI_LISTA_DOVE_ORIGINA_MODULI , $DOVE_DESTINA_MODULI . $ELEMENTI_LISTA_DOVE_ORIGINA_MODULI );
		
				
		}; // foreach
	echo '</details>';



echo '<br>' . 'Questi '.$CONTA_DOVE_ORIGINA_MODULI .' files vanno copiati in  ' . $DOVE_DESTINA_MODULI;


$LISTA_DOVE_DESTINA_MODULI = scandir($DOVE_DESTINA_MODULI);
$CONTA_DOVE_DESTINA_MODULI = count($LISTA_DOVE_DESTINA_MODULI);
echo '<br>' .'Al momento nella directory '.$DOVE_DESTINA_MODULI.' esistono '.$CONTA_DOVE_DESTINA_MODULI.' files ';

	echo '<details><summary></summary>';
		foreach($LISTA_DOVE_DESTINA_MODULI as $ELEMENTI_LISTA_DOVE_DESTINA_MODULI){
		
			echo '<br>'.$DOVE_DESTINA_MODULI.$ELEMENTI_LISTA_DOVE_DESTINA_MODULI;
			
		}; // foreach

	echo '</details>';

}
else
{
	
	echo '<br>'.'La directory '.$DOVE_DESTINA_MODULI.' NON esiste!';
	mkdir($DOVE_DESTINA_MODULI);
	
}; // if



echo '</article>';





if( ($UTENTE_NOW===$UTENTE)  and ($PASSWORD_NOW===$PASSWORD) )
{
    echo '';
    
    $VAI=1;
    
}else{
    
    echo '';
    
    $VAI=0;
};


if($VAI===1){


//
// ----
//  || *****************************
//  ||                             *
//  || DA QUI IN POI SI ESEGUONO   *
//  || DELLE OPERAZIONI CHE HANNO  *
//  || CONSEGUENZE SUL SERVER CHE  *
//  || OSPITA IL PROGRAMMA         *
//  ||                             *
//  ||                             *
//  ||                             *
//  || *****************************
//  \/ 
//


mkdir( $DESTINA );





// ||
// || 
// ||
// ||
// \/
function VediLista($LISTA, $colore){
echo '<div style="color:'.$colore.'; font-weight:600; box-shadow:6px 6px 12px gray;">';
echo '<br> <i class="arrow alternate circle down outline icon"></i> Elenco: '.$LISTA;
$VEDI_LISTA=scandir($LISTA);
$VEDI_CONTA=count($VEDI_LISTA);
$array = $VEDI_LISTA;
foreach ($array as $value) {
  // Codice da eseguire per ogni elemento dell'array
  echo '<br>';
  echo $value ;
};  // foreach
echo '<br>';
echo '</div>';
};  // fn





// Le cartelle di ORIGINE sono già presenti ./
//                   ||
//                   ||
//                   ||
//                   ||
//                   \/
$ORIGINE_DIR_001 = $ORIGINE . '' . 'w_a_0_0_cifrato'  . '/' ;
$ORIGINE_DIR_002 = $ORIGINE . '' . 'w_a_0_0_decifra'  . '/' ;

$ORIGINE_DIR_003 = $ORIGINE . '' . 'w_a_0_0_noyek'    . '/' ;
$ORIGINE_DIR_003_001 = $ORIGINE_DIR_003 . 'w_a_0_0_yek' . '/' ;
$ORIGINE_DIR_003_002 = $ORIGINE_DIR_003 . 'w_a_0_0_savecif' . '/' ;
$ORIGINE_DIR_003_003 = $ORIGINE_DIR_003 . 'w_a_0_0_platform' . '/' ;

$ORIGINE_DIR_004 = $ORIGINE . '' . 'w_a_0_0_commenti' . '/' ;

$ORIGINE_DIR_005     = $ORIGINE .         '' . 'dlb' . '/' ;
$ORIGINE_DIR_005_001 = $ORIGINE_DIR_005 . '' . 'a'   . '/' ;
$ORIGINE_DIR_005_002 = $ORIGINE_DIR_005 . '' . 'b'   . '/' ;
$ORIGINE_DIR_005_003 = $ORIGINE_DIR_005 . '' . 'c'   . '/' ;


function VediCifDec($LISTA, $colore){
echo '<div style="color:'.$colore.'; font-weight:600; box-shadow:6px 6px 12px gray; overflow:auto;">';
echo '<br> <i class="arrow alternate circle down outline icon"></i> Elenco: '.$LISTA;
$VEDI_LISTA=scandir($LISTA);
$VEDI_CONTA=count($VEDI_LISTA);

echo $VEDI_LISTA[$VEDI_CONTA-1];

/*
$array = $VEDI_LISTA;
foreach ($array as $value) {
  // Codice da eseguire per ogni elemento dell'array
  echo '<br>';
  echo $value ;
};  // foreach
*/

echo '<br>';
echo '</div>';
};  // fn




echo '<article class="ui red segment">';

VediLista($ORIGINE, $COLORE_ORIGINE);

VediLista($ORIGINE_DIR_003      , $COLORE_ORIGINE);
VediLista($ORIGINE_DIR_003_001  , $COLORE_ORIGINE);
VediLista($ORIGINE_DIR_003_002  , $COLORE_ORIGINE);
VediLista($ORIGINE_DIR_003_003  , $COLORE_ORIGINE);


VediLista($ORIGINE_DIR_004      , $COLORE_ORIGINE);

                                
VediLista($ORIGINE_DIR_005      , $COLORE_ORIGINE);
VediLista($ORIGINE_DIR_005_001  , $COLORE_ORIGINE);
VediLista($ORIGINE_DIR_005_002  , $COLORE_ORIGINE);
VediLista($ORIGINE_DIR_005_003  , $COLORE_ORIGINE);


echo '</article>';




// Le cartelle di DESTINA  presenti ./
//                   ||
//                   ||
//                   ||
//                   ||
//                   \/
$DESTINA_DIR_001      =  $DESTINA . '' . 'w_a_0_0_cifrato'  . '/' ;
$DESTINA_DIR_002      =  $DESTINA . '' . 'w_a_0_0_decifra'  . '/' ;
                         
$DESTINA_DIR_003      =  $DESTINA . '' . 'w_a_0_0_noyek'    . '/' ;
$DESTINA_DIR_003_001  =  $DESTINA_DIR_003 . 'w_a_0_0_yek' . '/' ;
$DESTINA_DIR_003_002  =  $DESTINA_DIR_003 . 'w_a_0_0_savecif' . '/' ;
$DESTINA_DIR_003_003  =  $DESTINA_DIR_003 . 'w_a_0_0_platform' . '/' ;
                         
$DESTINA_DIR_004      =  $DESTINA . '' . 'w_a_0_0_commenti' . '/' ;
                         
$DESTINA_DIR_005      =  $DESTINA .         '' . 'dlb' . '/' ;
$DESTINA_DIR_005_001  =  $DESTINA_DIR_005 . '' . 'a'   . '/' ;
$DESTINA_DIR_005_002  =  $DESTINA_DIR_005 . '' . 'b'   . '/' ;
$DESTINA_DIR_005_003  =  $DESTINA_DIR_005 . '' . 'c'   . '/' ;



mkdir($DESTINA);

mkdir($DESTINA_DIR_001);
mkdir($DESTINA_DIR_002);

mkdir($DESTINA_DIR_003);
mkdir($DESTINA_DIR_003_001);
mkdir($DESTINA_DIR_003_002);
mkdir($DESTINA_DIR_003_003);

mkdir($DESTINA_DIR_004);

mkdir($DESTINA_DIR_005);
mkdir($DESTINA_DIR_005_001);
mkdir($DESTINA_DIR_005_002);
mkdir($DESTINA_DIR_005_003);



$ORIGINE_FIL_000_001=$ORIGINE.'LeggiCIF.php';
$ORIGINE_FIL_000_002=$ORIGINE.'SALVATAGGIOCIF.php';
$ORIGINE_FIL_000_003=$ORIGINE.'breaty'.$MAGIC_NUMBER.'.php';
$ORIGINE_FIL_000_004=$ORIGINE.'funicoty'.$MAGIC_NUMBER.'.php';
$ORIGINE_FIL_000_005=$ORIGINE.'index.html';
$ORIGINE_FIL_000_006=$ORIGINE.'vdir.php';



$DESTINA_FIL_000_001=$DESTINA.'LeggiCIF.php';
$DESTINA_FIL_000_002=$DESTINA.'SALVATAGGIOCIF.php';
$DESTINA_FIL_000_003=$DESTINA.'breaty'.$MAGIC_NUMBER.'.php';
$DESTINA_FIL_000_004=$DESTINA.'funicoty'.$MAGIC_NUMBER.'.php';
$DESTINA_FIL_000_005=$DESTINA.'index.html';
$DESTINA_FIL_000_006=$DESTINA.'vdir.php';


copy($ORIGINE_FIL_000_001, $DESTINA_FIL_000_001);
copy($ORIGINE_FIL_000_002, $DESTINA_FIL_000_002);
copy($ORIGINE_FIL_000_003, $DESTINA_FIL_000_003);
copy($ORIGINE_FIL_000_004, $DESTINA_FIL_000_004);
copy($ORIGINE_FIL_000_005, $DESTINA_FIL_000_005);
copy($ORIGINE_FIL_000_006, $DESTINA_FIL_000_006);


$LISTA = scandir($ORIGINE_DIR_001);
$CONTA = count($LISTA);
$FILEx = $LISTA[$CONTA-1];
$ORIGINE_FIL_x = $ORIGINE_DIR_001. $FILEx;
$DESTINA_FIL_x = $DESTINA_DIR_001. $FILEx;
copy( $ORIGINE_FIL_x , $DESTINA_FIL_x );

$LISTA = scandir($ORIGINE_DIR_002);
$CONTA = count($LISTA);
$FILEx = $LISTA[$CONTA-1];
$ORIGINE_FIL_x = $ORIGINE_DIR_002. $FILEx;
$DESTINA_FIL_x = $DESTINA_DIR_002. $FILEx;
copy( $ORIGINE_FIL_x , $DESTINA_FIL_x );







$ORIGINE_FIL_x = $ORIGINE_DIR_003.'vdir.php';
$DESTINA_FIL_x = $DESTINA_DIR_003.'vdir.php';
copy( $ORIGINE_FIL_x , $DESTINA_FIL_x );

$ORIGINE_FIL_x = $ORIGINE_DIR_003_001 . 'vdir.php';
$DESTINA_FIL_x = $DESTINA_DIR_003_001 . 'vdir.php';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);

$ORIGINE_FIL_x = $ORIGINE_DIR_003_001 . 'w_a_0_0_stello.php';
$DESTINA_FIL_x = $DESTINA_DIR_003_001 . 'w_a_0_0_stello.php';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);

$ORIGINE_FIL_x = $ORIGINE_DIR_003_001 . 'w_a_0_0_yek.php';
$DESTINA_FIL_x = $DESTINA_DIR_003_001 . 'w_a_0_0_yek.php';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);


$ORIGINE_FIL_x = $ORIGINE_DIR_003_002 . 'vdir.php';
$DESTINA_FIL_x = $DESTINA_DIR_003_002 . 'vdir.php';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);

$ORIGINE_FIL_x = $ORIGINE_DIR_003_002 . 'savecif.php';
$DESTINA_FIL_x = $DESTINA_DIR_003_002 . 'savecif.php';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);



$ORIGINE_FIL_x = $ORIGINE_DIR_003_003 . 'vdir.php';
$DESTINA_FIL_x = $DESTINA_DIR_003_003 . 'vdir.php';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);

$ORIGINE_FIL_x = $ORIGINE_DIR_003_003 . 'index.js';
$DESTINA_FIL_x = $DESTINA_DIR_003_003 . 'index.js';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);



$ORIGINE_FIL_x = $ORIGINE_DIR_004 . 'vdir.php';
$DESTINA_FIL_x = $DESTINA_DIR_004 . 'vdir.php';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);

$ORIGINE_FIL_x = $ORIGINE_DIR_004 . 'w_a_0_0_PAGINA.htm';
$DESTINA_FIL_x = $DESTINA_DIR_004 . 'w_a_0_0_PAGINA.htm';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);

$ORIGINE_FIL_x = $ORIGINE_DIR_004 . 'w_a_0_0_RESTAYLING.html';
$DESTINA_FIL_x = $DESTINA_DIR_004 . 'w_a_0_0_RESTAYLING.html';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);




$ORIGINE_FIL_x = $ORIGINE_DIR_005_001 . 'login.php';
$DESTINA_FIL_x = $DESTINA_DIR_005_001 . 'login.php';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);

$ORIGINE_FIL_x = $ORIGINE_DIR_005_001 . 'logout.php';
$DESTINA_FIL_x = $DESTINA_DIR_005_001 . 'logout.php';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);

$ORIGINE_FIL_x = $ORIGINE_DIR_005_001 . 'pssw.php';
$DESTINA_FIL_x = $DESTINA_DIR_005_001 . 'pssw.php';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);








$ORIGINE_FIL_x = $ORIGINE_DIR_005_003 . 'hashession_test.php';
$DESTINA_FIL_x = $DESTINA_DIR_005_003 . 'hashession_test.php';
copy($ORIGINE_FIL_x, $DESTINA_FIL_x);





echo '<article class="ui red segment">';

VediLista($DESTINA, $COLORE_DESTINA);

VediLista($DESTINA_DIR_003      , $COLORE_DESTINA);
VediLista($DESTINA_DIR_003_001  , $COLORE_DESTINA);
VediLista($DESTINA_DIR_003_002  , $COLORE_DESTINA);
VediLista($DESTINA_DIR_003_003  , $COLORE_DESTINA);


VediLista($DESTINA_DIR_004      , $COLORE_DESTINA);
                                
VediLista($DESTINA_DIR_005      , $COLORE_DESTINA);
VediLista($DESTINA_DIR_005_001  , $COLORE_DESTINA);
VediLista($DESTINA_DIR_005_002  , $COLORE_DESTINA);
VediLista($DESTINA_DIR_005_003  , $COLORE_DESTINA);




echo '</article>';




};  // if VAI 0 1



?>






<?php 

echo '<hr>';
echo ':)';
echo '<hr>';

?>




<div id="fine"></div>
</body>
</html>

