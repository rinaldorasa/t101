

<?php 

// 031


// w_a_1_0_9_0_0_FORM_X_INVIA___JS/

echo '
<script>
function w_a_1_1_FORM_X_INVIA(){
document.getElementById("w_a_1_1_FORM_X_INVIA__").innerHTML=`'; // apertura back tick
echo '<form id="w_a_1_1_FORM_X_INVIA_AES__" action="funicoty11.php" method="POST">';



// qui immissione dati e ctrl like
    echo '
    
        <article id="w_a_1_1_SSAP__">
        <input id="w_a_1_1_post_uno__" type="password" name="w_a_1_1_post_uno" placeholder="uno">
        <input id="w_a_1_1_post_due__" type="password" name="w_a_1_1_post_due" placeholder="due">
        <input id="w_a_1_1_post_tre__" type="password" name="w_a_1_1_post_tre" placeholder="tre">
        <input id="w_a_1_1_post_qua__" type="password" name="w_a_1_1_post_qua" placeholder="qua">
    
        </article>
    
    ';
    



echo '<section id="w_a_1_1_area_immissione_testo_invia_container__">';


// qui viene inserito il testo
    echo '
    
        <textarea id="w_a_1_1_area_immissione_testo__" name="w_a_1_1_questo_est_un_testo" placeholder="Inserisci il tuo testo qui" rows="" cols=""  ></textarea> <!-- w_a_1_1_area_immissione_testo__ -->    
    
    
    ';



echo '<article id="w_a_1_1_invia_testo_container__" class="">';




// ATTENZIONE : classing seguente id
// per adesso styling
// ||
// ||
// ||
// \/
echo '<input id="w_a_1_1_invia_testo_button__" type="submit" value="invia"  style="width:100%; background-color:white; color:green; border-color:transparent; overflow:auto!important;">';
// /\
// ||
// ||
// ||

// echo '</button> <!-- w_a_1_1_invia_testo_button__ -->';

echo '</article> <!-- w_a_1_1_invia_testo_container__ -->';

echo '</section> <!-- w_a_1_1_area_immissione_testo_invia_container__ -->';


echo '<article id="w_a_1_1_INDEX_WRAP">';

echo '<button id="w_a_1_1_INDEX_CLICK" onclick="w_a_1_1_INDEX()">';


echo '

    <svg id="w_a_1_1_INDEX_CLICK_SVG" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
    <path d="M11 2H9v3h2z"/>
    <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
    </svg> 

';


echo '</button> <!-- w_a_1_1_INDEX_CLICK -->';

echo '</article> <!-- w_a_1_1_INDEX_WRAP -->';

echo '</form> <!-- w_a_1_1_FORM_X_INVIA_AES__ -->`;'; // chiusura back tick molto importante

echo '
 }; 
w_a_1_1_FORM_X_INVIA(); // function call back
</script>
';

?> 
<!--  031 FORM_X_INVIA___JS -->

