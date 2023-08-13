<!doctype html>
<meta charset="utf-8">

 <style>
 #area_immissione_testo__{width:95%;}
 </style>

 
<form action="ifake.php" method="get" style="margin-top:auto;">
	
	<textarea id="area_immissione_testo__" name="questo_est_un_testo" rows="" cols=""></textarea>

<div style="margin-top:2.75rem;">
	<button  id="invia_testo__" type="submit" style="background-color:transparent;border:solid 0.25rem orange;">
	<i style="color:orange;">INVIA</i>
	</button>
</div>	
</form>



<?


    $Testo = $_GET["questo_est_un_testo"]; 
	
	    $Aggiornamento = $Testo;

 
    $AddTesto = fopen( "fake.txt" , "a"); 
    
    fwrite($AddTesto, $Aggiornamento );  
    
    fclose($AddTesto);

   


?>


<script>

document.location.replace("main_prg.html");
</script>











