<?php   session_start();



if (isset($_SESSION["NOME_UTENTE_ID"]) && isset($_SESSION["PASS_UTENTE_ID"])  ) {
	echo '<br>$ SESSION aperta';
    
} else {
	echo '<br>$ SESSION problematica';
 
    
    $LIBRERIA_FIL_LOGIN='NuovoFile.php';
 //    header('Location: ' . $LIBRERIA_FIL_LOGIN);
  
    
    exit;
    
	};




?>

<?php 

echo  '
<article  id="RELOAD_AR"  >
    
    <button id="RELOAD_BU"  onclick="RELOAD()" > LOGIN </button>
     
    </article>
    
 <script>   
 function RELOAD(){

document.location.replace("NuovoFile.php");

 };
 </script>   
 
 ';

?>

















