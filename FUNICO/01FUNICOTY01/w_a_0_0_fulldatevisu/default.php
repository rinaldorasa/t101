<?php  




//
// orario del momento
//
$w_a_0_0_fulldatevisu=0;
if($w_a_0_0_fulldatevisu===1){
echo '<div id="w_a_0_0_GIORNO_TIME">';
echo date("l d M Y H:i:s");
echo '</div>';
}
else
{
echo '<div id="w_a_0_0_GIORNO_TIME">';
echo date("l d M Y").' '.'ultimo aggiornamento della pagina alle ore:'.' '.date("H:i:s");
echo '</div>';


}; // $w_a_0_0_fulldatevisu ? y n




?>
