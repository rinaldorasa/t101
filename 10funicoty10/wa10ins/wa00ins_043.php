

<?php   
// 043

// w_a_1_1_8_0_0_fulldatevisu
// orario del momento
$w_a_1_1_fulldatevisu=0;
if($w_a_1_1_fulldatevisu===1){
echo '<div id="w_a_1_1_GIORNO_TIME">';
echo date("l d M Y H:i:s");
echo '</div>';
}
else
{
echo '<div id="w_a_1_1_GIORNO_TIME">';
echo date("l d M Y").' '.'ultimo aggiornamento della pagina alle ore:'.' '.date("H:i:s");
echo '</div>';

}; // $w_a_1_1_fulldatevisu 

?> <!-- 043 fulldatevisu -->

