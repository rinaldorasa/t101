<!doctype html>
<html lang="it">

<head>
<meta charset="utf-8">

<title>


*?

login.php 
</title>

<link rel="stylesheet" href="../../../semantic/Semantic-UI-master/dist/semantic.min.css">
<script src="../../../semantic/Semantic-UI-master/dist/semantic.min.css"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

<!-- 
<link rel="stylesheet" href="http://avid3820725.altervista.org/semantic/Semantic-UI-master/dist/semantic.min.css">
<script src="http://avid3820725.altervista.org/semantic/Semantic-UI-master/dist/semantic.min.css"></script>
-->


<link href="https://fonts.googleapis.com/css2?family=PT+Mono:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rasa:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">


  <style type="text/css">
 
  </style>


</head>



<body style="background-color:white;">

<br><br><br>


<section style="width:75%; margin-left:12.25%; border-radius:0.50rem; box-shadow: 6px 6px 12px gray;">



<article style="margin-top:7.5rem; DISPLAY:BLOCK;" class="ui middle aligned center aligned grid">
<form method="post" name="Login_Form" style="background-color:white;" class="ui center aligned  segment">

    <div>
    <i id="ICONA_USERNAME" class="user circle outline huge icon"></i>
	
	<input id="INPUT_USERNAME" name="Username" type="password" style="font-size:2.5rem; background-color:white; color:white;"  class="ui massive input">
    </div>

    <div>
    <i id="ICONA_PASSWORD"  class="user circle outline huge icon"></i>
	
	
    <input id="INPUT_PASSWORD"  name="Password" type="password"  style="font-size:2.5rem; background-color:white; color:white;"  class="ui massive input">
    </div>

<blockquote style="width:auto; text-align:center;">
    <button>   
	<input id="INPUT_SUBMIT" name="Submit" type="submit" style="height:5.5rem;  background-color:white; color:teal; font-size:5rem; font-family:'PT Mono', monospace; font-variant:small-caps;" value="Invia">
    </button>
</blockquote>
    
</form>
</article>




</section>



<button style="position:fixed; top:1.25rem; right:1.25rem; width:auto; background-color:white; font-size:2.5rem; font-family:'PT Mono', monospace; border-radius:0.50rem;">   
<a href="logout.php" style="background-color:white; color:black;"> 
LOGOUT 
</a>
</button>


<?php session_start(); 
 if(isset($_POST['Submit'])){
 
 
  

  // questo toolbox AES
 // fa parte della dotazione standard
 // di PHP e non richiede CDN

 // Funzione per cifrare una stringa utilizzando AES-256-CBC
 function encrypt($w_a_1_1_plaintext, $w_a_1_1_key) {
 $method = "AES-256-CBC";
 $iv = openssl_random_pseudo_bytes(16);
 $w_a_1_1_ciphertext = openssl_encrypt($w_a_1_1_plaintext, $method, $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
 return base64_encode($iv . $w_a_1_1_ciphertext);
 };
 
 // Funzione per decifrare una stringa cifrata utilizzando AES-256-CBC
 function decrypt($w_a_1_1_ciphertext, $w_a_1_1_key) {
 $w_a_1_1_ciphertext = base64_decode($w_a_1_1_ciphertext);
 $iv = substr($w_a_1_1_ciphertext, 0, 16);
 $w_a_1_1_ciphertext = substr($w_a_1_1_ciphertext, 16);
 $w_a_1_1_plaintext = openssl_decrypt($w_a_1_1_ciphertext, "AES-256-CBC", $w_a_1_1_key, OPENSSL_RAW_DATA, $iv);
 return $w_a_1_1_plaintext;
 };
 
 
 //
 //  $logins = array($AB_PSSW => $CD_PSSW);
 //  
 // 
 $Dove_pssw = 'pssw.php';
 // 
 include($Dove_pssw);

// 
$AB_PSSW = decrypt($AB_PSSW, $Username);
// 
$CD_PSSW = decrypt($CD_PSSW, $Password);
// 



 
 $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
 $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
 

 
 
   $logins = array($AB_PSSW => $CD_PSSW);
 

 
 
 if (isset($logins[$Username]) && $logins[$Username] == $Password){
 
 $_SESSION['UserData']['Username']=$logins[$Username];
 
 $PROGRAMMA_PRINCIPALE='../../index.html';
 
 header('location:' .  $PROGRAMMA_PRINCIPALE );
 exit;
 } else {
 
 $msg="<span style='color:red'>Invalid Login Details</span>";
 
 }
 }
?>



<div id="SETTAGGI_ICONE"></div>
<script>
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{

document.getElementById("SETTAGGI_ICONE").innerHTML=
`
<style>
#ICONA_USERNAME{display:inline-block;}
#ICONA_PASSWORD{display:inline-block;}

#INPUT_USERNAME{height:`+7.5+`rem;}
#INPUT_PASSWORD{height:`+7.5+`rem;}



</style>

`;



}
else{
	
document.getElementById("SETTAGGI_ICONE").innerHTML=
`
<style>
#ICONA_USERNAME{display:none;}
#ICONA_PASSWORD{display:none;}


</style>

`;

};

</script>



<button onclick="ReSTART()" class="ui basic button">riavvia</button>
<script>
function ReSTART(){
document.location.replace('login.php'); 
};
</script>
<br>
<!-- 
<button onclick="ReSTARThttps()" class="ui basic button">https</button>
<script>
function ReSTARThttps(){
document.location.replace('https://www.rinaldo-rasa.it/funicoty13/dlb/a/login.php'); 
};
</script>

-->

</body>
</html>


