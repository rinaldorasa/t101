<?


$memo="1.zqu";

$memo="itsok.php";

if(file_exists("4.zqu")){
unlink("4.zqu");
rename("itsokok.php",$memo);


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
