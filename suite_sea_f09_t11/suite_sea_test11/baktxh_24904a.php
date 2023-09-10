<title>BAKTXH</title>
<?

 if( is_dir("baktxh") ){} else{mkdir("baktxh");}



$timestamp = time();


$t=time();
$Postfisso = date("Y_m_d",$t);


$SORGENTE_1__="htm.txt";
$SORGENTE_2__="htm.htm";
$SORGENTE_3__="SPLOTv10.txt";

$SORGENTE_1__="htm_wippy.txt";
$SORGENTE_2__="htm_wippy.htm";
$SORGENTE_3__="SPLOTv11.txt";



$DESTINA_1__="./baktxh/htm".$timestamp."_".$Postfisso.".txt" ;
$DESTINA_2__="./baktxh/htm".$timestamp."_".$Postfisso.".html";
$DESTINA_3__="./baktxh/SPLOTv10".$timestamp."_".$Postfisso.".txt";





echo "timestamp   " ." = ". $timestamp    . "<br>";

echo "SORGENTE_1__" ." = ". $SORGENTE_1__ . "<br>";
echo "SORGENTE_2__" ." = ". $SORGENTE_2__ . "<br>";
echo "SORGENTE_3__" ." = ". $SORGENTE_3__ . "<br>";


echo "DESTINA_1__ " ." = ". $DESTINA_1__  . "<br>";
echo "DESTINA_2__ " ." = ". $DESTINA_2__  . "<br>";
echo "DESTINA_3__ " ." = ". $DESTINA_3__  . "<br>";



// 

if( is_dir("baktxh") ){

copy($SORGENTE_1__, $DESTINA_1__);
copy($SORGENTE_2__, $DESTINA_2__);
copy($SORGENTE_3__, $DESTINA_3__);


} else{mkdir("baktxh");}





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

