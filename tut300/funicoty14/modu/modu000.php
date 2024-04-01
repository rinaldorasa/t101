<?php 

//  000

$LIBRERIA_DIR_LOGIN='./dlb/a/';
$LIBRERIA_FIL_LOGIN=$LIBRERIA_DIR_LOGIN . 'login.php';


/* */
 session_start(); 
 if(!isset($_SESSION['UserData']['Username'])){
 
 header('location:' . $LIBRERIA_FIL_LOGIN );
 
 exit;
 }
 
 
 
 
?> 

<!-- 



FUNICOTY14_240330_0730a   

-->

<!-- FIN 000 -->
