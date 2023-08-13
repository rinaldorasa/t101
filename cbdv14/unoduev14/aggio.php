<!doctype html>

<meta charset="utf-8">
<meta name="generator" content="AlterVista - Editor HTML">





<? $inizioofine=""; ?>

<? include("defin.php"); ?>

<script> alert("DESKTOP_CHECK= " + DESKTOP_CHECK); </script>





<!-- -->
<form action="aggio.php" method="get">



<!--
Text: <input type="text" name="questo_est_un_testo"><br>
-->

<textarea style="width:95%;font-size:2.5rem;"  id="area_immissione_testo__" name="questo_est_un_testo"
          rows="" cols="">

</textarea>



<input  style="width:95%;font-size:2.5rem;"  type="submit">
</form>

<?   




$Rasa="Editor_textarea";
$Rinaldo="Editor_textarea";

echo "<div style='font-size:1.5rem!important;'>".$Rinaldo."</div>"; /* echo $Rasa; */

echo  "<div style='font-size:1.5rem!important;'>".$VersioneDefinizioni."inifin</div>";



if ($Rinaldo==$Rasa){


	
$DataOdierna=date('l jS \of F Y h:i:s A');
$DataOdierna=$DataOdierna."<br>";
$DataOdierna="";


$Testo = $_GET["questo_est_un_testo"]; 

$VecchioTesto = file_get_contents('afile.txt');





if(file_exists("defin.php")){


} else
{
$inizioofine="";
}






$Aggiornamento="";



if($inizioofine=="ini"){
unlink("afile.txt");
$Aggiornamento = $Testo." ".$VecchioTesto." ";

}



if($inizioofine=="fin"){
unlink("afile.txt");
$Aggiornamento = $VecchioTesto." ".$Testo." ";

}


if($inizioofine==""){
unlink("afile.txt");
$Aggiornamento = $VecchioTesto." ".$Testo." ";

}







$AddTesto = fopen("afile.txt", "a");  



fwrite($AddTesto, $Aggiornamento );  



fclose($AddTesto);








/*

function random_string($length) {
    $key = '';
    $keys = array_merge(range(0, 9), range('a', 'z'));

    for ($i = 0; $i < $length; $i++) {
        $key .= $keys[array_rand($keys)];
    }

    return $key;
}

$wantedfile="afile.txt";


$cartella = "./";
$nomidiprogrammi = scandir ($cartella);
$primodellalista = $cartella . $nomidiprogrammi[2];
$primodellalista = substr($primodellalista, 2); 

$kriptonitestringa=random_string(39);
$kriptonitestringa="AAAAAAAA".$kriptonitestringa;

 rename($wantedfile,$kriptonitestringa);

*/



}
else
{
	
}

?>


<script>  document.location.replace("CBD_.php");   </script>

