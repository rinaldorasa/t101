
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title>
  
  ScrollHideShow
  
  </title>

<style>
 #w_a_1_1_INDEX_WRAP{position:fixed; top:1.00rem; right:0rem;}
</style>


</head>
<body>

<article id="w_a_1_1_INDEX_WRAP">
<button id="w_a_1_1_INDEX_CLICK" onclick="w_a_1_1_INDEX()">
<svg id="w_a_1_1_INDEX_CLICK_SVG" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
    <path d="M11 2H9v3h2z"/>
    <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"/>
    </svg>

</button>

</article>


<?php include("lorem_ipsum.php"); ?>

<script>
  let PRECE_SCROLL=0; // posizione numero precedente
  let ADESS_SCROLL;   // posizione attuale
  // definizione di variabili
  // interessate per controllo
  // se esiste un movimento
  // della pagina

function SCROLL(){ 
  currentScrollY = window.scrollY; // rileva pos attuale
  ADESS_SCROLL= currentScrollY;    // in alias 

    // il condizionale esegue un
    // confronto
    // se uguale vuol dire NO scroll
    // se differente SI scroll pagina
    if(ADESS_SCROLL===PRECE_SCROLL){
    document.querySelector("#w_a_1_1_INDEX_WRAP").style.visibility="visible";
    }else
    {  
    document.querySelector("#w_a_1_1_INDEX_WRAP").style.visibility="hidden";
    };

    PRECE_SCROLL=currentScrollY; // memorizza valore attuale

  }; // chiusura della funzione

SCROLL_SETINT=setInterval(SCROLL, 1000);

//                         /\
//                         ||
//                         ||
// funzione che sottopone sotto controllo
// ogni secondo la posizione dello scroll
// di pagina
//


  function STOP_SCROLL(){
  alert("clearInterval");
  clearInterval( SCROLL_SETINT );
  };
//
// attivato da apposito button onclick
//


</script>

</body>
</html>

