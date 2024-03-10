<!doctype html>
<html lang="it">

<meta charset="utf-8">

<title>




login.php 
</title>

<?php 
// w_a_1_0_1_0_0_semantic_ui

echo '
<link rel="stylesheet" href="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.css">
<script src="https://www.rinaldo-rasa.it/semantic/Semantic-UI-master/dist/semantic.min.css"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

';

echo '
<link rel="stylesheet" href="http://avid3820725.altervista.org/semantic/Semantic-UI-master/dist/semantic.min.css">
<script src="http://avid3820725.altervista.org/semantic/Semantic-UI-master/dist/semantic.min.css"></script>


';

?>
<?php 
// w_a_1_0_1_5_0_fonts

echo '

<link href="https://fonts.googleapis.com/css2?family=PT+Mono:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rasa:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

';

?>

<body style="background-color:white;">

<section style="width:75%; margin-left:12.25%; border-radius:0.50rem; box-shadow: 6px 6px 12px gray;">

<article style="margin-top:7.5rem;" class="ui middle aligned center aligned grid">
<form method="post" name="Login_Form" style="background-color:white;" class="ui center aligned  segment">

    <div>
    <i class="user circle outline icon"></i>
	<input name="Username" type="password" style="font-size:2.5rem; background-color:white; color:white;"  class="ui massive input">
    </div>

    <div>
    <i class="user circle outline icon"></i>
    <input name="Password" type="password"  style="font-size:2.5rem; background-color:white; color:white;"  class="ui massive input">
    </div>

<blockquote style="width:auto; text-align:center;">
    <button>   
	<input name="Submit" type="submit" style=" background-color:white; color:green; font-size:2.5rem; font-family:'PT Mono', monospace; font-variant:small-caps;">
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
 
 // $logins = array('0' => '0','0' => '0', '0' => '0','0' => '0');
 //  $logins = array('ab' => 'cd');
 
 $logins = array('' => '');
 
 $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
 $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
 
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

</body>
</html>


