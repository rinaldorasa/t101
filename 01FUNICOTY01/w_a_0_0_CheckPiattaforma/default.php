
<?php  




$CheckPiattaforma = "./w_a_0_0_noyek/w_a_0_0_platform/index.js";
if(file_exists($CheckPiattaforma)){
echo '
<script src="./w_a_0_0_noyek/w_a_0_0_platform/index.js"></script>
<div id="wa_a_0_0_rilevato_sistema_operativo_e_browser"></div>
<script>
document.getElementById("wa_a_0_0_rilevato_sistema_operativo_e_browser").innerHTML=""
+"<div>"
+" "
+""+platform.name 
+" v"
+""+platform.version
+""
+" "+platform.os
+" "
+""
+""
+"</div>"

+"";


</script>
';

}
else
{}; // platform.js ? esiste non esiste





?>

