
<!-- controllo csrf -->
<?php 



echo "<br>";

$TOKEN = $_POST["csrfToken"];


$TOKEN2 = $_COOKIE['csrfToken'];



if (!isset($_COOKIE['csrfToken'])) { $csrfToken = bin2hex(random_bytes(32));
setcookie("csrfToken", $csrfToken, time() + 3600); }


// On the server side, verify the CSRF token
if ($_POST['csrfToken'] !== $_COOKIE['csrfToken']) {
  // CSRF token mismatch
  // Reject the request
  echo "<div id='REJECT_REQUEST_PHP__'>";
  echo "<br>";  
  echo ' <a id="REJECT_A__" href="csrfxvxx.php" ><i id="ICO_REJECT_A__" class="bi bi-shield-fill-check"></i></a> '; 
  echo " ";
  echo ' <button id="RSPLOTV_A__" onclick="'.'PopUpSplot()'.'" style="border-width:0rem;"><i class="bi bi-view-stacked"></i></button> ';
  echo ' <a id="SPLOTEX_A__" href="SPLOTv16.php" style="border-width:0rem;"><i class="bi bi-book"></i></a> ';
  

  echo "</div>";  
  echo '<script> function csrf(){window.location.replace("csrfxvxx.php");} setTimeout(csrf, 5000)</script>';   

}
else
{
  echo "<div id='APPROVE_REQUEST_PHP__'>";
  echo " <div STYLE='BACKGROUND-COLOR:GREEN; COLOR:WHITE; DISPLAY:INLINE-BLOCK; VISIBILITY:HIDDEN;'> &nbsp;&nbsp; <!-- APPROVED REQUEST --></div> ";
  echo "<br>";
  echo ' <a id="APPROVE_A__" href="csrfxvxx.php"><i id="ICO_APPROVE_A__" class="bi bi-shield-fill-check"></i></a> ';



  echo " <br> ";  

echo ' <button id="RSPLOTV_A__" onclick="'.'PopUpSplot()'.'" style="border-width:0rem;"><i class="bi bi-view-stacked"></i></button> ';
echo ' <a id="SPLOTEX_A__" href="SPLOTv16.php" style="border-width:0rem;"><i class="bi bi-book"></i></a> ';



  echo "</div>";
}

?>
