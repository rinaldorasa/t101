<!doctype html>




<title> magAPTT_v16_23804_1915a </title>


<style>
:root {

  --fonte-size-standard:2.5rem!important;
  --uva:rgb(87,1,56);
  --verduzzo:rgb(168,254,199);
	
  --psw-red-v15: #E9172E;
  --psw-green-v15: #BBE3C3;
  --psw-blue-v15: #5151A2;
  --psw-orange-v15: #F76717;
  --psw-yellow-v15: #F8FEAF;
  --psw-indigo-v15: #B51FFC;

  background-color: var(--verduzzo);
  color: var(--psw-indigo-v15); 
  background-color: white;
  color: black; 
  
  
  
}

q{ font-size:1.5rem!important;}
i{background-color:purple; color:white; font-size:2.5rem;border:solid 0.25rem purple; border-radius:25%;}

</style>


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<section id="TASTIERA_CODICI__" style="text-align:center;">


<!-- HTML -->
<article>
<i onclick="Premuto0()" class="bi bi-0-square-fill" ></i>
<i onclick="Premuto1()" class="bi bi-1-square-fill" ></i>
<i onclick="Premuto2()" class="bi bi-2-square-fill" ></i>
<i onclick="Premuto3()" class="bi bi-3-square-fill" ></i>
<i onclick="Premuto4()" class="bi bi-4-square-fill" ></i></article><article>
<i onclick="Premuto5()" class="bi bi-5-square-fill" ></i>
<i onclick="Premuto6()" class="bi bi-6-square-fill" ></i>
<i onclick="Premuto7()" class="bi bi-7-square-fill" ></i>
<i onclick="Premuto8()" class="bi bi-8-square-fill" ></i>
<i onclick="Premuto9()" class="bi bi-9-square-fill" ></i>
</article>

</section>


<!-- JAVASCRIPT -->
<script>

function Premuto0(){ document.location.replace("./zqu/0.php");}
function Premuto1(){ document.location.replace("./zqu/1.php");}
function Premuto2(){ document.location.replace("./zqu/2.php");}
function Premuto3(){ document.location.replace("./zqu/3.php");}
function Premuto4(){ document.location.replace("./zqu/4.php");}
function Premuto5(){ document.location.replace("./zqu/5.php");}
function Premuto6(){ document.location.replace("./zqu/6.php");}
function Premuto7(){ document.location.replace("./zqu/7.php");}
function Premuto8(){ document.location.replace("./zqu/8.php");}
function Premuto9(){ document.location.replace("./zqu/9.php");}



</script>













<?

echo "<style>
html * {font-size:5.50rem;font-family:monospace;}
q{ font-size:1.00rem!important;}
span{background-color:orange;color:black;font-family:monospace;}</style>
";


if(file_exists("./zqu/itsok.php")){
echo "<style>#TASTIERA_CODICI__{display:none;}</style>";
echo "<div style='text-align:center;'><q style='background-color:red;color:white; font-size:2.75rem!important;'>"."Automated Public Turing Test sessione aperta"."</q></div>";
echo '<div style="text-align:center;">';
echo '<button onclick="QuestionSolved()" style="background-color:green;color:white; border-radius:0.50rem;">?</button><script> function QuestionSolved(){document.location.replace("./zqu/APTT.php");}</script>';
echo '</div>';

}else{
echo "<style>#TASTIERA_CODICI__{display:block;}</style>";
echo "<div style='text-align:center;'><q style='background-color:green;color:white; font-size:2.75rem!important;'>"."Automated Public Turing Test"."</q></div>";

}



$okkei="errore:140";

include("./zqu/itsok.php");

echo "<hr>";

if($okkei=="errore:140"){

echo "<q>"."CODICE= ".$okkei.":("."</q>";

}
else
{

echo "<q>"."CODICE= ".$okkei.":)"."</q>";






/* CODICE magazen.php INI  */


echo "<style>html * { font-size:1.5rem!important; }</style>";

$rn='<br>';
$hr='<hr>';

echo $rn;echo $rn;echo $rn;
echo $hr;

// Check if the directory exists
if (is_dir('maga')) {
    echo "The directory exists";
} else {
    echo "The directory does not exist";
	mkdir('maga');
}

echo $rn;

chdir("./psw/");
$current_directory = getcwd();
echo "<span>sei nella directory </span>".$current_directory;
echo $rn;

$dir    = './';
		$files1 = scandir($dir);
		print_r($files1);

echo $rn;

$filecount = 0; 
$files2 = glob( $directory ."*" ); 
if( $files2 ) { $filecount = count($files2); }
echo $filecount . " files "; 


if($filecount==0){
	fopen("0_nuovofile.txt","w"); fclose("0_nuovofile.txt");}else{}
	


echo $rn;

$filecount = 0; 
$files2 = glob( $directory ."*" ); 
if( $files2 ) { $filecount = count($files2); }
echo $filecount . " files "; 

echo $rn;

$dir    = './';
		$files1 = scandir($dir);
		print_r($files1);




$cartella =  './';
$nomidiprogrammi = scandir ($cartella);
$primodellalista = $cartella . $nomidiprogrammi[2];
$primodellalista = substr($primodellalista, 2);

echo $rn;

echo "<span>primodellalista </span>".$primodellalista;

echo $rn;

$destinazione="../maga/".$primodellalista;

echo $rn;

echo "<span>destinazione </span>".$destinazione;

echo $rn;


copy($primodellalista, $destinazione);

unlink($primodellalista);


echo $rn;

chdir("../maga/");
$current_directory = getcwd();
echo $current_directory; echo $rn;

echo "<span>current_directory= </span>".$current_directory; echo $rn;



$dir    = './';
$files1 = scandir($dir);
print_r($files1);

echo $rn;

echo $hr;

chdir("../");
$current_directory = getcwd();
echo $current_directory; echo $rn;


echo $rn;

echo $hr;

chdir("./psw/");
$current_directory = getcwd();
echo $current_directory; echo $rn;

echo $rn;

$dir    = './';
$files1 = scandir($dir);
print_r($files1);

echo $rn;


unlink("0_nuovofile.txt");


echo $rn;



$dir    = './';
$files1 = scandir($dir);
print_r($files1);

echo $hr;

$current_directory = getcwd();
echo $current_directory; echo $rn;






// old by psw_textarea



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


$nome_del_file_afile="0"."_". $timestamp."_".$randomstringa.".txt";


$files = glob('*.*');
$ho_contato_file = count($files);

 $Aggiornamento="";
 $Testo=$timestamp;
 
 $oggi= date('Y-m-d H:i:s A', time()) ;
 $Testo=$oggi;
 
  $Aggiornamento= $Testo;
 
 $AddTesto = fopen( $primodellalista , "a"); 

 fwrite($AddTesto, $Aggiornamento );

 fclose($AddTesto);


 rename($primodellalista, $nome_del_file_afile);


echo $rn;

echo $hr;

$current_directory = getcwd();
echo $current_directory; echo $rn;


$dir    = './';
$files1 = scandir($dir);
print_r($files1);

echo $hr;

echo $rn;echo $rn;

echo $hr;



/* CODICE magazen.php FIN  */
 
 
 

}







?>


<!--

<div id="oggi_est__">err </div>
<script>oggi_est__=document.getElementById("oggi_est__"); oggi_est__.innerHTML="<q style='background-color:var(--psw-yellow-v15)!important;color: var(--psw-indigo-v15);'>magAPTT_v16_23804_1915a</q><br><q>Inserito cartella wip/zqu per Automated Public Turing Test</q>" +"<br>"+ "<q>"+ Date()+"</q>";</script>

-->

