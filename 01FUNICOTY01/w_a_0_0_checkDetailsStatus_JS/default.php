<?php 

echo '

<!-- ext candidate ini -->
<script>

function w_a_0_0_checkDetailsStatus() {
 const w_a_0_0_DetailsStatus_w_a_0_0_DETAILS_TESTO_DINAMICO = document.getElementById("w_a_0_0_DETAILS_TESTO_DINAMICO");
 
 if (w_a_0_0_DetailsStatus_w_a_0_0_DETAILS_TESTO_DINAMICO.open) {
 document.querySelector("#w_a_0_0_SUMMARY_TESTO_DINAMICO").style.width="85%";
 }
 else
 {
 document.querySelector("#w_a_0_0_SUMMARY_TESTO_DINAMICO").style.width="95%";
 }; // if
  
};

w_a_0_0_Esegui_checkDetailsStatus = setInterval(w_a_0_0_checkDetailsStatus, 500);


</script>


<script>
// READONLY readonly blues

// document.querySelector("#w_a_0_0_area_immissione_testo__").setAttribute("readonly", true);

// document.querySelector("#w_a_0_0_area_immissione_testo__").removeAttribute("readonly", true);

</script>

<!-- ext candidate fin -->



';

?>
