<!doctype html> 
<meta charset="utf-8"> 
<title> csrfxvxx.php </title>
<style> html * { font-size:4.75rem; font-family:monospace; } 
form{margin-top:4.75rem; text-align:center; border-radius:0.50rem; }
input:hover{background-color:white; color:green; cursor:pointer;}
button:hover{background-color:green; color:white; cursor:pointer;}

button, input{border-radius:0.50rem;}

</style>
<form action="csrfxvxx.php" method="POST">
<input type="hidden" name="csrfToken" value="<?php echo $_COOKIE['csrfToken']; ?>">
<input type="submit" value="Submit">
</form>

<?php
// echo "<br>";

$TOKEN = $_POST["csrfToken"];
// echo "<br>TOKEN= " . $TOKEN;

$TOKEN2 = $_COOKIE['csrfToken'];
// echo "<br>TOKEN2= " . $TOKEN2;

if (!isset($_COOKIE['csrfToken'])) { $csrfToken = bin2hex(random_bytes(32));
setcookie("csrfToken", $csrfToken, time() + 3600); }

// On the server side, verify the CSRF token
if ($_POST['csrfToken'] !== $_COOKIE['csrfToken']) {
  // CSRF token mismatch
  // Reject the request
  echo "<div style='text-align:center'>";
  
  echo '<div style="color:red;">Authorization request</div>';

  echo "</div>";
}
else
{
  echo "<div style='text-align:center'>";
  
  echo '<div style="color:green;">APPROVED</div>';
  
  echo "</div>";
  
  echo "";
  
}

?>
<hr>
<div style="text-align:center;">
<button onclick="csrfxapp()">index</button>
</div>
<script>
function csrfxapp(){
window.location.replace("index.html");
}
</script>
