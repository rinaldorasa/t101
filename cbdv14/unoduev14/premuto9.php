<?
if(file_exists("waiting9.php")){
unlink("waiting9.php");
fopen("zuppa.php","w");
}
else
{
unlink("waiting0.php");
unlink("waiting1.php");
unlink("waiting2.php");
unlink("waiting3.php");
unlink("waiting4.php");
unlink("waiting5.php");
unlink("waiting6.php");
unlink("waiting7.php");
unlink("waiting8.php");
unlink("waiting9.php");

unlink("zuppa.php");

}

?>

<script>
document.location.replace("nembokid.php");
</script>
