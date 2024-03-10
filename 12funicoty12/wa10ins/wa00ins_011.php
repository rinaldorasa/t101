
<?php  

//  011
  
// RESPONSIVITY DESKTOP per alcuni elementi
echo '
<div id="w_a_1_1_RESPONSIVITY_EXTRA"></div> <!--  w_a_1_1_RESPONSIVITY_EXTRA  -->
<script>

if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{

}
else
{
document.getElementById("w_a_1_1_RESPONSIVITY_EXTRA").innerHTML=

`
<style>
 #w_a_1_1_INDEX_CLICK_SVG{width:40px; height:40px; box-shadow:6px 6px 12px black; border-radius:0.50rem;}
 #w_a_1_1_SLIDERS_SVG{width:20px; height:20px; color:purple;}
</style>
`;
};

</script>

'; ?> 
<!-- 011  responsivity desktop -->

