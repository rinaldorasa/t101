his will convert js variable to php variable and php variable to js variable
<style>
html * {font-size:2.5rem; font-family:monospace;}
</style>


<script>
function jstophp(){


// var javavar=document.getElementById("text").value; 
var javavar="ciao";

document.getElementById("rslt").innerHTML="<?php 
$phpvar='"+javavar+"'; 
echo $phpvar;?>";
}




</script> 
<body>
<div id="rslt">
</div>





</body>






