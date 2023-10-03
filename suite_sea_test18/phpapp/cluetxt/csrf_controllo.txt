<?php 

echo "<br>";

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
  echo "<div id='REJECT_REQUEST_PHP__'>";
  echo "Reject the request";
  echo "<hr>";  
  echo '<a id="REJECT_A__" href="csrfxvxx.php">check approve</a>'; 
  echo " ";
//  echo '<a id="RSPLOTV_A__" href="SPLOTv13.php">splot history</a>'; 
echo '<a id="RSPLOTV_A__" href="'.$ArchivioSplotPHP.'">splot history</a>';

  echo "</div>";  
  echo '<script> function csrf(){window.location.replace("csrfxvxx.php");} setTimeout(csrf, 5000)</script>';   

}
else
{
  echo "<div id='APPROVE_REQUEST_PHP__'>";
  echo "<div STYLE='BACKGROUND-COLOR:GREEN; COLOR:WHITE;'>APPROVED REQUEST</div>";
  echo "<hr>";
  echo '<a id="APPROVE_A__" href="csrfxvxx.php"><i class="bi bi-shield-fill-check"></i></a>';
  echo " ";  
//  echo '<a id="ASPLOTV_A__" href="SPLOTv13.php">splot history</a>';
echo '<a id="RSPLOTV_A__" href="'.$ArchivioSplotPHP.'"><i class="bi bi-view-stacked"></i></a>';

  echo "</div>";
}

?>

