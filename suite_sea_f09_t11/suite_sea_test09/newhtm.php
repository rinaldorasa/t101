<title>BAKTXH</title>
<?

 if( is_dir("baktxh") ){} else{mkdir("baktxh");}



$timestamp = time();



$SORGENTE_1__="htm.txt";
$SORGENTE_2__="htm.htm";


$DESTINA_1__="./baktxh/htm".$timestamp.".txt" ;
$DESTINA_2__="./baktxh/htm".$timestamp.".html";





echo "timestamp   " ." = ". $timestamp    . "<br>";
echo "SORGENTE_1__" ." = ". $SORGENTE_1__ . "<br>";
echo "SORGENTE_2__" ." = ". $SORGENTE_2__ . "<br>";
echo "DESTINA_1__ " ." = ". $DESTINA_1__  . "<br>";
echo "DESTINA_2__ " ." = ". $DESTINA_2__  . "<br>";



// 

if( is_dir("baktxh") ){

copy($SORGENTE_1__, $DESTINA_1__);
copy($SORGENTE_2__, $DESTINA_2__);


} else{mkdir("baktxh");}


unlink("htm.htm");
unlink("htm.txt");

?>


<div id="incremento"></div>


<script>
function TOINDEX(){

document.location.replace("index.html");


}

setTimeout(TOINDEX, 6000);





var elem = document.getElementById("incremento");
 var numero = 0;
 numero=0 ;
 
 var X="<span style='background-color:orange; color:orange; font-size:2.75rem; font-family:monospace;'>&nbsp;&nbsp;&nbsp;</span>";
 var Y="";
 var intervallo = setInterval(contatore, 1000);
 function contatore() {
 numero=numero+1;
 Y=Y+X;
 elem.innerHTML = Y+"<span style='color:blue; font-size:2.75rem;'>"+ (6-numero)+"</span>";
 
 if (numero==4 || numero>4 ) {
 
 //alert(numero);
 clearInterval(contatore);
 
 }
 }
 
 
 

</script>

