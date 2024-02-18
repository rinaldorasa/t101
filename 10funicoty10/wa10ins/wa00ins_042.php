


<?php  

// 042

// w_a_1_1_7_5_0_CheckPiattaforma

// occorre che esista app platform.js

$w_a_1_1_CheckPiattaforma = "./w_a_0_0_noyek/w_a_0_0_platform/index.js";
if(file_exists($w_a_1_1_CheckPiattaforma)){
        
    echo '
    <script src="./w_a_0_0_noyek/w_a_0_0_platform/index.js"></script>
    <div id="w_a_1_1_rilevato_sistema_operativo_e_browser"></div>
    <script>
    document.getElementById("w_a_1_1_rilevato_sistema_operativo_e_browser").innerHTML=""
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
{}; // if php platform.js 

?> <!-- 042 CheckPiattaforma  -->


