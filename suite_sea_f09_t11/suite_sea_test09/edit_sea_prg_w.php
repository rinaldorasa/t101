<!doctype html>
<html lang="it">

<head>
<meta charset="utf-8">

<title>



edit_sea_prg_php_w_23927_0045a

</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rasa:wght@300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" >

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
<script src="aes.js"></script>


<style>

html * {/* font-size:1.75rem; */}
html * {font-family: "PT Mono",monospace;}
html * {word-break:break-all;}


div{text-align:center;} 
div q{font-size:37.5%;}




.pre {

    inline-size: auto;
    overflow-wrap: break-word;
    
    border:solid 0.15rem green;
}

.pre {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
}




.xmp {

    inline-size: auto;
    overflow-wrap: break-word;
    
    border:solid 0.15rem green;
}

.xmp {
 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
}


</style>


<style>

#Contenitore_TEXTAREA_INIZIALE__{text-align:center; }
#Scrivere_in_TEXTAREA_INIZIALE__{ width:100%; text-align:left; border:solid 0.15rem olive; }
#VISUALIZZA_TESTO_DINAMICO__{text-align:left; }
#ID_IMMISSIONE_TESTO_DINAMICO__{text-align:left; }
</style>


<script>FontSizeStandard__=2.75;</script>

<script>
// questo flag permette di selezionare una opzione molto importante
// in quanto trasforma un testo in aes occorre poi trasferire questo
// testo in un file dedicato il quale al momento della lettura chiede
// una password

FlagForAES="NO";

</script>


</head>

<body>
<div STYLE="DISPLAY:NONE;"><q> 
edit_sea_prg_php_w_23927_0045a 
</q></div>





<div id="SETTAGGI__"></div>

<main>





<article       id="Contenitore_TEXTAREA_INIZIALE__">
    <textarea  id="Scrivere_in_TEXTAREA_INIZIALE__" ></textarea>
</article>




<hr style="color:red; border-width:0.25rem;">

<article>



<form id="FORM_PER_INVIARE_TESTO_DINAMICO__" action="edit_sea_prg_w.php" method="POST">
    <div id="VISUALIZZA_TESTO_DINAMICO__"></div>
    
    
    <blockquote style="text-align:center;">


<!-- scegliere tra aes o plain  ini -->
    
    <span style="float:left;">
    

<!--    <form style="display:inline-block;" action="edit_sea_prg_w.php" method="post"> -->

<!--    <textarea name="SIYES" style="display:none;">YE</textarea> -->
<!--    <button type="submit" onclick="AES()">AES</button> -->
        <button type="button" onclick="AES()">AES</button>
<!--    </form> -->
    
<!-- <button type="button" onclick="PLA()">PLA</button> -->
<!--    <form style="display:inline-block;" action="edit_sea_prg_w.php" method="post"> -->
<!--    <textarea name="SIYES" style="display:none;">NO</textarea> -->

<!--    <button type="submit" onclick="PLA()">PLA</button> -->
        <button type="button" onclick="PLA()">PLA</button>
<!--    </form> -->


    </span>
    
    <script>
    function AES(){ alert("AES"); FlagForAES="YES"; };
    function PLA(){ alert("PLA"); FlagForAES="NO";  };
    </script>
    
    <?php
    // 
    // $MEMOPHP = $_POST['SIYES'];
    // // Salva la variabile $MEMOPHP in un file esterno
    // $file = fopen("fileesterno.php", "w");
    // fwrite($file, $MEMOPHP);
    // fclose($file);
    // 
    ?>

<!-- scegliere tra aes o plain  fin -->




    <!-- <input id="SUBMIT_PER_TESTO_DINAMICO__" type="submit" value="INVIA"> -->
    <button id="SUBMIT_PER_TESTO_DINAMICO__" type="submit">
    <span>INVIA</span><span STYLE="FONT-SIZE:0.75REM;"> 
    (( edit_sea_prg_php_w_23927_0045a )) 
    </span></button>
    <script>
    LarghezzaButton__ = document.getElementById("SUBMIT_PER_TESTO_DINAMICO__");
    LarghezzaButton__ = LarghezzaButton__.offsetWidth;
    LarghezzaButton__ = (LarghezzaButton__ / 16) ;
    // alert("il bottone INVIA misura "+LarghezzaButton__+"rem");
    LARGHEZZA_BOTTONE_INVIA = LarghezzaButton__ ;
    </script>
    
    
    </blockquote>
    
    
</form>
</article>

<hr style="color:red; border-width:0.25rem;">



<?php


$Testo=$_POST["IMMISSIONE_TESTO_DINAMICO__"]; 


// $SalvaUNO=fopen("salvauno.txt","a");

$SalvaUNO=fopen("htm.htm","a");
fwrite($SalvaUNO,$Testo);
fclose($SalvaUNO);

$SalvaUNO=fopen("htm.txt","a");
fwrite($SalvaUNO,$Testo);
fclose($SalvaUNO);


?>






<!-- MyStringaASCII -->
<div id="TEXTAREA_INIZIALE_ASCII__"></div>






<script>
function Leggi_Testo_TEXTAREA_INIZIALE__(ARGO_){




// questo valore originario deve essere trattato
// sia in modo plaintext che in modo encrypted
// inserendo un apposito flag


Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__ = document.getElementById("Scrivere_in_TEXTAREA_INIZIALE__").value;




// a titolo informativo
// qui uno sviluppo del valore letto ini
MyStringa = Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__;
MyStringaASCII = "";
NumCar=0;
for(NumCar=0; NumCar<MyStringa.length; NumCar++)
{ MyStringaASCII = MyStringaASCII + "&#38;&#35;"+MyStringa.charCodeAt(NumCar)+"&#59;" ; }
document.getElementById("TEXTAREA_INIZIALE_ASCII__").innerHTML=
`
<article STYLE="text-align:center;">
<div id="MY_STRINGA_ASCII__" STYLE="text-align:center; BORDER:dashed 0.15REM PURPLE;">

<span style="FONT-SIZE:50%;">${MyStringaASCII}</span>

</div>
</article>

`;



// se flag settato sul NO
// non avviene la cifratura
// 

if(FlagForAES==="YES"){
    
    // sezione di cifratura ini
    
    // Encrypt
    var ciphertext = CryptoJS.AES.encrypt(Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__, 'a b c');
    
    // in alternativa al valore originario
    testocifrato__=ciphertext;
    
    
    
    PASSWORD__='a b c';
    
    
    
    // Decrypt  
    var bytes  = CryptoJS.AES.decrypt(testocifrato__.toString(), PASSWORD__);
    
    var plaintext = bytes.toString(CryptoJS.enc.Utf8);
    
    testodecifrato__ = plaintext;
    
    document.getElementById("VISUALIZZA_CIFRATO_TEXTAREA_INIZIALE__").innerHTML=testocifrato__;
    document.getElementById("VISUALIZZA_DECIFRATO_TEXTAREA_INIZIALE__").innerHTML=testodecifrato__;
    
    
    // sezione di cifratura fin
    
    
    
    // alert("ARGO_= " + typeof(ARGO_));
    
    VALOREF_=ARGO_;
    TYPE_OF_=typeof(ARGO_);
    
    
    document.getElementById("ARGO__").innerHTML=
    `
    ${VALOREF_} 
    
    <span> </span>
    
    ${TYPE_OF_} 
    
    `;
    
    Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__ = testocifrato__;
    
    
}; // FlagForAES yes no





// come viene prodotta la variabile Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__


return Valore_Letto_Scrivere_in_TEXTAREA_INIZIALE__;
};

Esegui_setInterval_Leggi_Testo_TEXTAREA_INIZIALE__ = setInterval(Leggi_Testo_TEXTAREA_INIZIALE__,1);


</script>







<script>
function Visualizza_Testo_Dinamico_TEXTAREA_INIZIALE__(){
    

// main page

    Testo_Dinamico_TEXTAREA_INIZIALE__ = Leggi_Testo_TEXTAREA_INIZIALE__();
    
    document.getElementById("VISUALIZZA_TESTO_DINAMICO__").innerHTML=''
    + '' 
    + '<textarea id="ID_IMMISSIONE_TESTO_DINAMICO__" name="IMMISSIONE_TESTO_DINAMICO__" >' 
    + '' 
    + ''
+    Testo_Dinamico_TEXTAREA_INIZIALE__
    + '' 
    + '' 
    + '</textarea>' 
    + '' 

    + ''
    ;



// modal

    Testo_Dinamico_TEXTAREA_INIZIALE__ = Leggi_Testo_TEXTAREA_INIZIALE__();
    
    document.getElementById("TESTO_MODAL_TEXTAREA__").innerHTML=''
    + '' 
    + '<div STYLE="text-align:left;">' 
    + '' 
    + ''
+    Testo_Dinamico_TEXTAREA_INIZIALE__
    + '' 
    + '' 
    + '</div>' 
    + '' 

    + ''
    ;



    
};
// Visualizza_Testo_Dinamico_TEXTAREA_INIZIALE__();
Esegui_setInterval_Visualizza_Testo_Dinamico_TEXTAREA_INIZIALE__=setInterval(Visualizza_Testo_Dinamico_TEXTAREA_INIZIALE__);




</script>




</main>









<article STYLE="TEXT-ALIGN:CENTER;">
 <button id="BUTTON_BS_MODAL__" type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#BS_MODAL__">
     TEXTAREA
 </button>
 <span>
 <span id="SALVA_TEXTAREA_INIZIALE__"></span>
 <span STYLE="text-align:center;">
 </span>
 <button type="button" onclick="refreshFinestra()" class="btn btn-secondary"><i class="bi bi-arrow-clockwise"></i></button>
 </span>
</article>


 <div class="modal fade" id="BS_MODAL__">
     <div class="modal-dialog modal-fullscreen">
         <div class="modal-content">
             <div class="modal-header">
             
                 <h5 class="modal-title" STYLE="font-size:50%;">
                    <button type="button" onclick="refreshFinestra()" class="btn btn-secondary">
                    <i class="bi bi-arrow-clockwise"></i>
                    </button>
                   edit_sea_prg_php_w_23927_0045a
                 </h5>
                 
              <!--   <button type="button" class="btn-close"  -->
                 
             <button type="button" data-bs-dismiss="modal"  
             class="btn btn-light btn-lg"  STYLE="font-size:75%;">
                  CHIUDI
             </button>
             </div>
             <div class="modal-body" STYLE="border:solid 0.25rem orange;">
             
             
             
             
             
            <button class="btn btn-light btn-lg border border-danger" type="button" onclick="EseguiBACKUP()" STYLE="FONT-SIZE:75%;"  >BACKUP</button>
             <script> function EseguiBACKUP(){window.location.replace("baktxh.php");} </script>
<!--
            <button class="btn btn-light btn-lg border border-danger" type="button" onclick="NewTEXTAREA()" STYLE="FONT-SIZE:75%;"  >NEW</button>
             <script> function NewTEXTAREA(){window.location.replace("newhtm.php");} </script>

--> 
 
 
             <div id="TIMESTAMP" STYLE="display:inline-block;"></div>
             
             
             <hr>
             
             
                   
             <div id="TESTO_MODAL_TEXTAREA__" STYLE="text-align:left; border:solid 0.25rem magenta;"></div>
        
             <div id="ARGO__"></div>
        
             <div id="VISUALIZZA_CIFRATO_TEXTAREA_INIZIALE__" STYLE="text-align:left; border:solid 0.25rem orange;"></div>
             
             <div id="VISUALIZZA_DECIFRATO_TEXTAREA_INIZIALE__" STYLE="text-align:left; border:solid 0.25rem blue;"></div>
            
<article id="CONTENITORE_XMLHR__">
<!-- <div id="XMLHR__">err XMLHR__</div>  -->
<textarea id="XMLHR__">textarea err XMLHR__</textarea>
</article>
<script>
CercaFileHtm__=new XMLHttpRequest();

CercaFileHtm__.open("GET","htm.txt", false);

CercaFileHtm__.onreadystatechange = function (){

TrovatoFileHtm__ = CercaFileHtm__.responseText;

document.getElementById("XMLHR__").innerHTML=TrovatoFileHtm__;

}; CercaFileHtm__.send();

</script>

<button class="btn btn-light btn-lg border border-danger" type="button" onclick="NewTEXTAREA()" STYLE="FONT-SIZE:75%;"  >NEW</button>
             <script> function NewTEXTAREA(){window.location.replace("newhtm.php");} </script>

            
             </div>
         </div>
     </div>
 </div>


<script>
function modale(){
Testo_Dinamico_Modal_TEXTAREA_INIZIALE__ = Leggi_Testo_TEXTAREA_INIZIALE__();
document.getElementById("TESTO_MODAL_TEXTAREA__").innerHTML=Testo_Dinamico_Modal_TEXTAREA_INIZIALE__;
}; setInterval(modale,1);
</script>


<!-- timestamp in modal bs ini -->
<script>
TimeStamp=new Date().getTime();
// alert(TimeStamp);
document.getElementById("TIMESTAMP").innerHTML=`${TimeStamp}`;
</script>
<!-- timestamp in modal bs fin -->



<script>function refreshFinestra(){window.location.replace("edit_sea_prg_w.php");}</script>

<script>
function Salva_TEXTAREA_INIZIALE__(){
document.getElementById("SALVA_TEXTAREA_INIZIALE__").innerHTML=
`

<span>&nbsp;</span> <a id="SALVA_UNO__" href="htm.txt" class="btn btn-info">txt</a><span>&nbsp;</span>
<span>&nbsp;</span> <a id="SALVA_HTM__" href="htm.htm" class="btn btn-info">htm</a><span>&nbsp;</span>


`;
};
Salva_TEXTAREA_INIZIALE__();
</script>












<script>


Larghezza_Finestra = (window.innerWidth/16 );
Altezza_Finestra   = (window.innerHeight/16);


// alert(Larghezza_Finestra +" "+ Altezza_Finestra);



document.getElementById("SETTAGGI__").innerHTML=
`
<style>
html * { font-size:`+( FontSizeStandard__ )+`rem; }


#Contenitore_TEXTAREA_INIZIALE__{ margin-left:`+(Larghezza_Finestra*0.0000)+`rem; width:`+(Larghezza_Finestra*0.95)+`rem; height:`+(Altezza_Finestra*0.50)+`rem;  }
#Scrivere_in_TEXTAREA_INIZIALE__{ margin-left:`+(Larghezza_Finestra*0.0125)+`rem; width:`+(Larghezza_Finestra*0.95)+`rem; height:`+(Altezza_Finestra*0.50)+`rem;  }
#Scrivere_in_TEXTAREA_INIZIALE__{ margin-left:`+(Larghezza_Finestra*0.0250)+`rem; width:`+(Larghezza_Finestra*0.95)+`rem; height:`+(Altezza_Finestra*0.50)+`rem;  }
#Scrivere_in_TEXTAREA_INIZIALE__{ border-radius:0.50rem; }


#TEXTAREA_INIZIALE_ASCII__{text-align:left; text-align:center;}


#VISUALIZZA_TESTO_DINAMICO__{ font-size:`+( FontSizeStandard__ * 0.50 )+`rem; }
#ID_IMMISSIONE_TESTO_DINAMICO__{ font-size:`+( FontSizeStandard__ * 0.50 )+`rem; display:none; overflow:auto;}



#MY_STRINGA_ASCII__{ margin-left:`+( Larghezza_Finestra * 0.0125 *1.25 )+`rem;  width:`+( Larghezza_Finestra * 0.95 )+`rem; height:`+( FontSizeStandard__*1.75 )+`rem; text-align:left; overflow:auto; }





#BUTTON_BS_MODAL__{ font-size:`+( FontSizeStandard__ * 0.75 )+`rem; }

#CONTENITORE_XMLHR__{
border:solid 0.15rem fuchsia;
overflow:auto;}

#XMLHR__{
width:`+( Larghezza_Finestra * 0.75 )+`rem; 
height:`+( Altezza_Finestra * 0.75  )+`rem;

}


#FORM_PER_INVIARE_TESTO_DINAMICO__{}
#SUBMIT_PER_TESTO_DINAMICO__{background-color:green; color:white; border-radius:0.50rem;}
#SUBMIT_PER_TESTO_DINAMICO__:hover{background-color:white; color:green; border-radius:0.50rem;}
#SUBMIT_PER_TESTO_DINAMICO__{}


#SALVA_UNO__{ font-size:`+( FontSizeStandard__*0.75 )+`rem; font-variant:small-caps; }
#SALVA_HTM__{ font-size:`+( FontSizeStandard__*0.75 )+`rem; font-variant:small-caps; }
#SALVA_UNO__:hover{font-style: italic;}
#SALVA_HTM__:hover{font-style: italic;}



</style>

`;

</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>






