<?php 

echo '<style> div{font-family:monospace;} </style>';


		$dir    = './';
		$files1 = scandir($dir);
		// $files2 = scandir($dir, 1);

$QuantiFiles=count($files1);

echo '<div>';
echo 'QuantiFiles= '.$QuantiFiles;

echo '</div>';

$array = $files1;

foreach ($array as $numero) {
  echo $numero . ' <br> ';
  
  
}



echo '<hr>';



 //  print_r($files1);

		// print_r($files2);



?>
		