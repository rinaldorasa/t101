<?php
$actual_link = "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";


$oggi_est = date("l") . " ";
$oggi_est = $oggi_est . date("Y/m/d");
$oggi_est_time = date("h:i:sa");

$fp = fopen('/membri/edoraandiamo/text.txt', 'w');
fwrite($fp, $actual_link. " " .$oggi_est. " ". $oggi_est_time);
fclose($fp);

$myfile = fopen("/membri/edoraandiamo/logs.txt", "a") or die("Unable to open file!");
// $actual_link = "cronologia";
fwrite($myfile, "\n". $actual_link. " " .$oggi_est. " ". $oggi_est_time);
fclose($myfile);

?>
