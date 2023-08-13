<?


$memo="7.zqu";



if(file_exists("null.null")){
fopen($memo,"w");
fclose($memo);

}
else
{

$files = glob("*.zqu");

foreach ($files as $file) {
    unlink($file); }


}









?>

<script>
document.location.replace("../magazen_CAPTCHA.php");
</script>


<!--

$glob = glob("*.zqu");


foreach ($glob as $file) {
    echo $file . PHP_EOL;
}


$glob = glob("*.zqu"); 
unlink($glob);

-->
