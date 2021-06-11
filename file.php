<?php session_start(); 
if(!isset($_SESSION['UserData']['Username'])){
header("location:sign-in.php");
exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title>pannello</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
<style>html * {font-size:1.15rem;font-family:"PT Mono",monospace;} span>a{border-radius:0.25rem;}</style>

</head>
<body class="m-0">

<main class="m-5 p-2 border border-1 border-success">

<span><a class="m-2 p-1 btn-info" href="presentazione.php">presentazione</a></span>
<span><a class="m-2 p-1 btn-info" href="provatest.php">provatest</a></span>
<span><a class="m-2 p-1 btn-info" href="provatestemp.php">provatestemp</a></span>

<!--<iframe src="provatest.php" style="width:100%;"></iframe>-->

</main>



 <div class="mx-5 border-0 border-warning" style="text-align:center;">  
  <a class="btn btn-sm btn-success my-2 mx-auto" href="log-out.php"> LOG-OUT </a>
 </div>
 
</body>
</html>

<!--
setTimeout( function(){window.location.href = "main.html"},1000);
-->