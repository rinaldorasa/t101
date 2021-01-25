
<?php 
  
// Set the current working directory 
$directory = getcwd()."/"; 
  
// Initialize filecount variavle 
$filecount = 0; 
  
$files2 = glob( $directory ."*" ); 
  
if( $files2 ) { 
    $filecount = count($files2); 
} 
  
echo $filecount . " files "; 
  
?> 
