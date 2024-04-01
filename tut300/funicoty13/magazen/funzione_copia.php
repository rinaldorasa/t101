

<!doctype html>
<title>
a22

</title>



<?php 

//
// Attenzione:
// origine e destinazione
// sono cartelle e DEVONO
// essere presenti
//


function COPIA($origine, $destinazione){

	echo '
	<style> 
	i, p{font-family:monospace; display:inline-block;} 
	p{margin-left:0.5rem;}
	
	i{background-color:teal; color:white;}
	</style>';
	
	echo '<p style="background-color:yellow; font-weight:700;">'. $origine .'</p>';
	echo '<p style="background-color:yellow; font-weight:700;">'. $destinazione .'</p>';

	if(is_Dir($destinazione)){ echo '<i>'.$destinazione.' esiste</i>';}
	else{'<i>'.$destinazione.' non esiste.</i>'; mkdir($destinazione);};

	$ListaFiles = scandir($origine );
	$ContaFiles = count($ListaFiles);
	
	
	
	
	
	foreach($ListaFiles as $file)
	{

	if (copy($origine . $file, $destinazione . $file)) {

		echo '<p style="background-color:green; color:white;">File copiato correttamente.</p>';  

	}
	else
	{
		echo '<p style="background-color:red; color:white;">Errore durante la copia del file.</p>';
		
	};


	  
  };

  };



$ToCartellaBackup = 'BACKUP14a';
COPIA('./', '../'.$ToCartellaBackup .'/');


COPIA('./assets/', '../'.$ToCartellaBackup .'/assets/');
COPIA('./assets/clock/', '../'.$ToCartellaBackup .'/assets/clock/');


COPIA('./composizione10/', '../'.$ToCartellaBackup .'/composizione10/');


COPIA('./dlb/'  , '../'.$ToCartellaBackup .'/dlb/'  );
COPIA('./dlb/a/', '../'.$ToCartellaBackup .'/dlb/a/');
COPIA('./dlb/b/', '../'.$ToCartellaBackup .'/dlb/b/');
COPIA('./dlb/c/', '../'.$ToCartellaBackup .'/dlb/c/');


COPIA('./w_a_0_0_cifrato/'  , '../'.$ToCartellaBackup .'/w_a_0_0_cifrato/'  );


COPIA('./w_a_0_0_commenti/'  , '../'.$ToCartellaBackup .'/w_a_0_0_commenti/'  );


COPIA('./w_a_0_0_decifra/'  , '../'.$ToCartellaBackup .'/w_a_0_0_decifra/'  );


COPIA('./w_a_0_0_noyek/'  , '../'.$ToCartellaBackup .'/w_a_0_0_noyek/'  );
COPIA('./w_a_0_0_noyek/w_a_0_0_platform/'  , '../'.$ToCartellaBackup .'/w_a_0_0_noyek/w_a_0_0_platform/'  );
COPIA('./w_a_0_0_noyek/w_a_0_0_savecif/'  , '../'.$ToCartellaBackup .'/w_a_0_0_noyek/w_a_0_0_savecif/'  );
COPIA('./w_a_0_0_noyek/w_a_0_0_yek/'  , '../'.$ToCartellaBackup .'/w_a_0_0_noyek/w_a_0_0_yek/'  );


COPIA('./wa10ins/'  , '../'.$ToCartellaBackup .'/wa10ins/'  );

COPIA('./magazen/'  , '../'.$ToCartellaBackup .'/magazen/'  );






?>














