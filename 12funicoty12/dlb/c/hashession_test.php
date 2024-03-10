<!doctype html><html>

<title>  $ v_240225_0900b   </title>
<style> html * {font-size:1.25rem; font-family:monospace;}</style>
<h3 style="text-align:center; box-shadow:6px 6px 12px rgba(0,0,255,0.25);">
<span style="color:rgba(0,0,255,0.50);">hashession_test</span> login <span style="color:rgba(0,0,255,0.50); font-size:75%;">v_240225_0900b</span> </h3>

<?php session_start();

$db = new PDO('mysql:host=localhost;', 'rinaldo', '$2y$10$KvJ7iG/72ySQYuuIIl5fQefnwD7c/k58ASj5nKeVEVx7jk2fxrcrq');

// Funzione per hashing della password
function hashPassword($password) {
    return password_hash($password, PASSWORD_DEFAULT);
};

    // Validazione input
    $username = filter_input(INPUT_POST, 'user_nome', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'pass_nome', FILTER_SANITIZE_STRING);
	
    
    $FLAG_USER=0;
    $FLAG_PASS=0;
    

   $stmt = $db->prepare('SELECT * FROM my_avid3820725.utenti WHERE username = :username');

   $stmt->bindValue(':username', $username);

   $stmt->execute();
   $user = $stmt->fetch();

	// controlla se username match
     if ($user) {
		 
         /*
			echo '<br>'.'username esiste';
			echo '<br>'.'$ user[]= ' . $user[0] ;
			echo '<br>';
           
         */
         
           
        $FLAG_USER=1;
            

        // Verifica password
        if (password_verify($password, $user['password'])) {
            
        $FLAG_PASS=1;
             
        $LIBRERIA_FIL_OK='casa.php';

		header('Location: ' . $LIBRERIA_FIL_OK);

		echo '<br>';
        }else {};

		 
		 
			 }
			 else
			 {
  
			 };


 $_SESSION["NOME_UTENTE_ID"] = $_POST['user_nome'];
 $_SESSION["PASS_UTENTE_ID"] = $_POST['pass_nome'];


echo '<div>'.''.'</div>';

echo '<div style="visibility:hidden;">';
echo "Nome sessione: " . session_name() . "<br>";
echo '<br>'."ID sessione: " . session_id();
echo '</div>';

$session_status = session_status();

if ($session_status === PHP_SESSION_ACTIVE) {echo '<div>'.''.'</div>';} else {}

echo '<blockquote style="border:solid 0.15rem red; display:none;">';
var_dump($_SESSION);

echo '</blockquote>';
echo '';

// echo '<br>'. 'ID sessione: ' . session_id();
    
if(( $FLAG_USER===1 ) && ( $FLAG_PASS===1 ))
{}else{session_destroy();};

?>

<body>
<header>
    <h1> Login </h1>
</header>

<main>

<section>
    <form method="post">
        <label for="user_nome">USERNAME:</label>
        <input type="text" name="user_nome" id="user_nome">
        <br>
        <label for="pass_nome">PASSWORD:</label>
        <input type="password" name="pass_nome" id="pass_nome">
        <br>
        <button type="submit">Login</button>
    </form>
    
    
    <blockquote  id="RELOAD_AR"  >
    <button id="RELOAD_BU"  onclick="RELOAD()" > RELOAD </button>
    </blockquote>
    <article  id="LOGOUT_AR"  >
    <button id="LOGOUT_AR"  onclick="LOGOUT()" > LOGOUT </button>
    </article>    
</section>

 <script>   
 function RELOAD(){document.location.replace("hashession_test.php");};
 function LOGOUT(){document.location.replace("hashession_logout.php");};


</script>
</main>

<footer>
<?php 
echo '
<hr><span style="font-size:75%;">
hashession_test 
v_240225_0900b
&copy; rinaldo rasa, 2024
</span><hr>
';
?>
</footer>

</body>
</html>

