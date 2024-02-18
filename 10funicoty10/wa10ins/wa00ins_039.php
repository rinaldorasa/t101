

<?php   

// 039

//
// w_a_1_1_6_0_0_checkDetailsStatus_JS
//

echo '

 <script>

 function w_a_1_1_checkDetailsStatus() {
 const w_a_1_1_DetailsStatus_w_a_1_1_DETAILS_TESTO_DINAMICO = document.getElementById("w_a_1_1_DETAILS_TESTO_DINAMICO");
 
 if (w_a_1_1_DetailsStatus_w_a_1_1_DETAILS_TESTO_DINAMICO.open) {
 document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO").style.width="85%";
 }
 else
 {
 document.querySelector("#w_a_1_1_SUMMARY_TESTO_DINAMICO").style.width="95%";
 }; // if
  
 }; // function w_a_1_1_checkDetailsStatus

 w_a_1_1_Esegui_checkDetailsStatus = setInterval(w_a_1_1_checkDetailsStatus, 500);

 </script>


 <script>
 // READONLY readonly blues
 // document.querySelector("#w_a_1_1_area_immissione_testo__").setAttribute("readonly", true);
 // document.querySelector("#w_a_1_1_area_immissione_testo__").removeAttribute("readonly", true);
 </script>


';

?> 
<!-- 039 checkDetailsStatus_JS -->


