<!doctype html>
<meta charset="utf-8">

<style>

:root{
	--fonte-size-standard:2.5rem!important;
	--uva:rgb(87,1,56);
	--verduzzo:rgb(168,254,199);
	
  --psw-red-v15: #E9172E;
  --psw-green-v15: #BBE3C3;
  --psw-blue-v15: #5151A2;
  --psw-orange-v15: #F76717;
  --psw-yellow-v15: #F8FEAF;
  --psw-indigo-v15: #B51FFC;

	
	
}





    ol { list-style: none; counter-reset: ResettaContatore__;}
    ol li { counter-increment: ResettaContatore__;}
    ol li::before { content: counter(ResettaContatore__) ". "; 
	background-color:olive;
    background-color:#BBE3CE;
	color: #5151A2;
	border:solid 0.15rem olive;
    border:solid 0.15rem #BBE3CE;
	border-radius: 100%;
	border-radius: 25%;

	display:inline-block;}


	summary{background-color:var(--verduzzo); color:black; font-size:calc( 1.0*var(--fonte-size-standard) ); font-variant:small-caps;border-radius:2.5%;}
	summary:hover{background-color:var(--uva);color:var(--verduzzo); cursor:pointer;}


#area_immissione_testo__{
	width:98.75%;
	
	font-size:calc( 1.5*var(--fonte-size-standard) );
	
	border:solid 0.15rem gray;
}

#invia_testo__{
	
	width:99.75%;
	margin-top:calc( 0.75*var(--fonte-size-standard) );
    margin-bottom:calc( 1.00*var(--fonte-size-standard) );
	font-size:calc( 0.75*var(--fonte-size-standard) );
	font-variant:small-caps;
}
#invia_testo__:hover{
	background-color:green;
	color:white;
	border:solid 0.25rem teal;
	border-radius:0.50rem;
	cursor:pointer;

}



.nota{
	font-size:calc( 0.5*var(--fonte-size-standard) );
}

</style>

<form action="PSW_TEXTAREA.php" method="get" style="margin-top:auto; background-color:var(--psw-yellow-v15); border:solid 0.25rem var(--psw-indigo-v15);">
	
	<textarea id="area_immissione_testo__" name="questo_est_un_testo" rows="" cols="" style="background-color:teal; color:orange; font-weight:bold;"></textarea>
	
	<button  id="invia_testo__" type="submit" style="background-color:transparent;border:solid 0.25rem var(--psw-indigo-v15);">
	<i style="color: var(--psw-indigo-v15); font-size:calc(1.5*var(--fonte-size-standard));"  class="bi bi-save2"></i>
	</button>
	
</form>

<?

if(file_exists("CONTROLLO_CAPTCHA.php")){

include("CONTROLLO_CAPTCHA.php");

}
else
{
	$CAPTCHA_="1";
	
}


if($CAPTCHA_=="1")

{

$rn="<br>";

$timestamp = time();

function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}
$randomstringa=random_string(10);




$in_quale_percorso="./psw/";
chdir($in_quale_percorso);

// $nome_del_file_afile="0000000000"."_".$randomstringa."_". $timestamp.".txt";
// $nome_del_file_afile="0"."_".$randomstringa."_". $timestamp.".txt";
// $nome_del_file_afile="0"."_".$randomstringa."_". $timestamp.".txt";


$nome_del_file_afile="0"."_". $timestamp."_".$randomstringa.".txt";



// echo $nome_del_file_afile; 


$files = glob('*.*');
$ho_contato_file = count($files);




// il nome del file 
// sempre al primo posto
// ma senza aver un nome fisso
// 
$cartella =  './';
$nomidiprogrammi = scandir ($cartella);
$primodellalista = $cartella . $nomidiprogrammi[2];
$primodellalista = substr($primodellalista, 2); 


$string = $primodellalista;
$firstCharacter = substr($string, 0, 1);
$secondCharacter = substr($string, 1, 1);


echo "<details><summary>tecnicalità</summary>";

echo $nome_del_file_afile;
echo $rn;
echo "<details style='display:block;'><summary></summary>";
	echo "ho_contato_file= ".$ho_contato_file;
	echo $rn;
	echo $rn;
	echo "firstCharacter= ".$firstCharacter; /* echo $rn; */ echo " ";
	echo "secondCharacte= ".$secondCharacter; echo $rn;
echo "</details>";

echo "</details>";



// PRIMO CHECK
// 
// 
if($firstCharacter=="0" and $secondCharacter=="_" and $ho_contato_file==1 ){

     $VecchioTesto = file_get_contents($primodellalista);
     
    echo $rn; 
//    echo "$VecchioTesto= ".$VecchioTesto;
//    echo "VecchioTesto= ".$VecchioTesto;
      echo "<hr>"."<details><summary>testo originario</summary><div style='border:solid 0.05rem maroon; overflow:auto!important;'>".$rn.$VecchioTesto."</div></details>";
	  
	  
	echo $rn;
    

    
    $Testo = $_GET["questo_est_un_testo"]; 
	
	
    
    
   
    $Aggiornamento="";
     
//    unlink($primodellalista);
//    $Aggiornamento = $VecchioTesto." ".$Testo." ";
    

    $Aggiornamento = $Testo;


 /*  */
    $AddTesto = fopen( $primodellalista , "a"); 
    
    fwrite($AddTesto, $Aggiornamento );  
    
    fclose($AddTesto);

   
	
	rename($primodellalista, $nome_del_file_afile);
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}else{
	
    //	exec("CBDwip_.php");
    
	//die("The condition was false.");
	// 
	echo "<b style='background-color:red;color:white;'> WARNING: NOME DEL FILE NON VALIDO !!! </b>";

	
	}








}
else
{
	echo "<div style='text-align:center;'><b style='background-color:red;color:white;font-size:125%;'> WARNING: ERRORE DI SISTEMA !!! <br> I DATI NON POSSONO ESSERE AGGIORNATI !!!</b></div>";
	
}












?>


<hr>
<!-- -->
<script>  document.location.replace("CBDWIPMD.php"); </script>

