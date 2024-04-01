
<?php session_start();

$db = new PDO('mysql:host=localhost;', 'node_da_cercare', '$2y$10$KvJ7iG/72ySQYuuIIl5fQefnwD7c/k58ASj5nKeVEVx7jk2fxrcrq');

    // Funzione per hashing della password
    function hashPassword($password) {
        return password_hash($password, PASSWORD_DEFAULT);
    };

    // Validazione input
    $username = filter_input(INPUT_POST, 'user_nome', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'pass_nome', FILTER_SANITIZE_STRING);
    
    $FLAG_USER=0; $FLAG_PASS=0;

   $stmt = $db->prepare('SELECT * FROM my_avid3820725.utenti WHERE username = :username');

   $stmt->bindValue(':username', $username);

   $stmt->execute();
   $user = $stmt->fetch();

    // controlla se username match
     if ($user) {
          
        $FLAG_USER=1;
        // Verifica password
        if (password_verify($password, $user['password'])) {
            
        $FLAG_PASS=1;         
        $LIBRERIA_FIL_OK='casa.php';
         header('Location: ' . $LIBRERIA_FIL_OK);
        echo '<br>';
        }else {}; } else{};
 $_SESSION["NOME_UTENTE_ID"] = $_POST['user_nome'];
 $_SESSION["PASS_UTENTE_ID"] = $_POST['pass_nome'];

?>
    <form method="post">
        <label for="user_nome">USERNAME:</label> <input type="text" name="user_nome" id="user_nome">
        <br>
        <label for="pass_nome">PASSWORD:</label> <input type="password" name="pass_nome" id="pass_nome">
        <br>
        <button type="submit">Login</button>
    </form>

