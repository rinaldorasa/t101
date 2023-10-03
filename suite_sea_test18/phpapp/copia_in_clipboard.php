<script>
function CopiaInClipboard(element){ 
 
 alert("CopiatoInClipboard");
 
// richiede jQuery 
 
var $temp = $("<input>"); 
$("body").append($temp); 
$temp.val($(element).text()).select(); 
document.execCommand("copy"); 
$temp.remove(); 
 
 
} 


</script>


