<script>
// function TheRollingThunderProject(){


/*

TheRollingThunderProject released 

17:45 15/07/2023




CBD_23715_0730a_vid3820725_V13__07_35

*/

/* VARIABILI GLOBALI INI */
    DESKTOP_CHECK = 1 ; DESKTOP_CHECK = 0 ;
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) { DESKTOP_CHECK = 0 ; } else { DESKTOP_CHECK = 1 ; }

    /* alert(DESKTOP_CHECK); */

    function LarghezzaRem__(){let Larghezza__=window.innerWidth/16;return Larghezza__;} 
    function AltezzaRem__(){let Altezza__=window.innerHeight/16;return Altezza__;}
    
    Larghezza__=LarghezzaRem__();
    Altezza__=AltezzaRem__();


    
    FonteSizeStandard__=2.75*1.00; /* mobile first */
    FonteSizeStandard__=2.75*1.50; /* mobile first */ /* testing code */
/*    FonteSizeStandard__=2.75*0.50; */ /* mobile first */ /* testing for desktop */

    
    AppUpdated__=""; /* versione e aggiornamenti delle variabili */

       UnMilione__="1000000";
       UnMilioneUnoC__="1000100";

    NomeDelFileDaInput__="Testo.txt"; /* default */





/* VARIABILI GLOBALI FIN */

document.getElementById("APP_UNO_DUE__").innerHTML=
    `
    <style>
    .da_mo{background-color:inherit;color:inherit;}
    </style>



<style>
    html * {font-size:auto;font-family:monospace;}
    ol { list-style: none; counter-reset: ColoreCounter__;}
    ol li { counter-increment: ColoreCounter__;}
    ol li::before { content: counter(ColoreCounter__) ". "; background-color:aqua;color: black;font-size:75%;border:solid 0.15rem aqua;border-radius: 100%;display:inline-block;}
    
    img{   margin:0 auto;  display: block;    max-width:100%;    max-height:100%;    width: auto;    height: auto;   } 
    







	
    
</style>




<style>
    /* UTILITIES ini */
    @keyframes spin{ 0%{transform:rotate(0deg);} 100% {transform:rotate(360deg);}}
    
    .spinner{width:48px;height:48px; width:2rem;height:2rem; border:solid 4px red; border:solid 0.25rem red; border:solid 0.25rem red; border:solid 0.25rem red; border-top:solid 4px black; border-top:solid 0.25rem transparent; background-color:transparent; border-radius:50%; overflow:none; animation: spin 1.5s linear infinite;}
    .spinmin_v0{width: 1.00rem;height:1.00rem;background-color:transparent;
    border:solid 0.175rem orange;border-top:solid 0.175rem transparent;border-radius:50%; display:inline-block;
    animation: spin 1.5s linear infinite;
    }
    .spinmin{width: 3.500rem;height:3.500rem;background-color:transparent;
    border:solid 1.75rem orange;border-top:solid 1.75rem transparent;border-radius:50%; display:inline-block;
    animation: spin 1.5s linear infinite;
    }
    
    
    @-webkit-keyframes blink { 0% {background: #222} 50% {background: lime} 100% {background: #222}}
    
    .cursore { background: lime; line-height: 17px; margin-left: 3px;
    -webkit-animation: blink 0.8s infinite; width: 7px; height: 15px;}
    
    /* UTILITIES fin */ 
    
</style>


<style>
.configurazione_item__{
margin-top:`+(FonteSizeStandard__*0.15)+`rem;
margin-bottom:`+(FonteSizeStandard__*0.15)+`rem;
}

</style>



<article class="da_mo__"><div id="InizioDellaPagina__"></div></article>


<section id="CapopaginaBox__" class="da_mo__" style="border:solid 0.15rem maroon;display:none;">

    <article class="da_mo__" style="display:none;"><div id="COLORE_RANDOM__"></div></article>
    <article class="da_mo__" style="display:none;"><div id="VISUALIZZA_COLORE_RANDOM__"></div></article>

    <article id="Inserisce_il_nome_del_file_da_cercare__">
    <input type="text" placeholder="Testo.txt" id="INPUT_NOME_FILE__" value="Testo.txt" class="centrato___ fs_standard___ no_bordi___"  style="background-color:white;color:black;font-family:monospace;border-radius:0.50rem;">
    
    </article>
    
    <article class="da_mo__" style="display:block; border:solid 0.00rem yellow;"><div id="RighelloInputRange__"></div>

</article>        




<article style="position:fixed;top:`+(FonteSizeStandard__*1.625)+`rem;left:0rem;border:solid 0.00rem red;">

    <aside  id="StopAndGoSi__" onclick="CopySi()"  style="width:auto;height:`+(FonteSizeStandard__*(1.250-0.000))+`rem;background-color:white;color:red;font-size:`+(FonteSizeStandard__*(1.250-0.000))+`rem;border-radius:0.5rem;cursor:pointer;">

<i class="bi bi-pause-btn-fill"><i id="SegnaloreDiColoreRandom__" class="bi bi-0-circle"   style="width:`+(FonteSizeStandard__*0.750)+`rem;"></i></i>

</aside>
    <aside  id="StopAndGoNo__" onclick="CopyNo()"  style="width:auto;height:`+(FonteSizeStandard__*(1.250-0.000))+`rem;background-color:white;color:green;font-size:`+(FonteSizeStandard__*(1.250-0.000))+`rem;border-radius:0.5rem;cursor:pointer;display:none;">

 <i class="bi bi-play-btn-fill"></i>

<i id="SegnaloreDiColoreRandom__" class="bi bi-0-circle"  style="width:`+(FonteSizeStandard__*0.750)+`rem;"></i></i>

    </aside>

</article>


<article style="position:fixed;top:`+(FonteSizeStandard__*1.625)+`rem;right:0rem;border:solid 0.00rem green;">



    <aside onclick="InformazioniConfigurazioneApri()"  style="width:auto;height:`+(FonteSizeStandard__*(1.250*0.000))+`rem;background-color:white;color:orange;font-size:`+(FonteSizeStandard__*(1.250*0.500))+`rem;border-radius:0.5rem;cursor:pointer;">
    
        <i class="bi bi-back"></i>    
        
    </aside>


</article>



    <article class="da_mo__" style="display:none;"><div id="VisualizzaNomeDelFile__"></div></article>




    <article id="InformazioniConfigurazioneBox__" class="da_mo__" style="position:fixed;top:`+(FonteSizeStandard__*3.00)+`rem; border: dotted 0.15rem purple;display:none;overflow:auto;">



<aside class="configurazione_item__">
    <i onclick="InformazioniConfigurazioneChiudi()" class="bi bi-x-square-fill" style="position:fixed;top:`+(FonteSizeStandard__*1.650)+`rem;right:`+(FonteSizeStandard__*0.00)+`rem;background-color:white;color:red; font-size:`+(FonteSizeStandard__*1.00)+`rem; border-radius:0.50rem;cursor:pointer;"></i>
</aside>









    <aside class="configurazione_item__"><i id="Toggle1Configurazione__" onclick="InformazioniConfigurazione1Apri()"  class="bi bi-1-square"></i></aside>
    <aside class="configurazione_item__"><i id="Toggle2Configurazione__" onclick="InformazioniConfigurazione2Apri()"  class="bi bi-2-square"></i></aside>
    <aside class="configurazione_item__"><i id="Toggle3Configurazione__" onclick="InformazioniConfigurazione3Apri()"  class="bi bi-3-square"></i></aside>
    <aside class="configurazione_item__"><i id="Toggle4Configurazione__" onclick="InformazioniConfigurazione4Apri()"  class="bi bi-4-square"></i></aside>
    <aside class="configurazione_item__"><i id="Toggle5Configurazione__" onclick="InformazioniConfigurazione5Apri()"  class="bi bi-5-square"></i></aside>






    </article>






</section>    









<!-- CONFIGURAZIONI 1 2 3 4 5  INI -->

<section id="Configurazione1Stile__">  </section>    
<section id="Configurazione1__" style="position:fixed; top:`+(FonteSizeStandard__*2.95)+`rem; left:`+(FonteSizeStandard__*1.50)+`rem; width:`+(FonteSizeStandard__*11.700)+`rem; width:85%; height:`+(FonteSizeStandard__*5.00)+`rem;  background-color:white; color:black; font-size:`+(FonteSizeStandard__*0.525)+`rem; border:solid 0.15rem gray;display:none;overflow:auto;z-index:`+UnMilioneUnoC__+`;">

<button id="Bottone1Configurazione__"  onclick="InformazioniConfigurazione1Chiudi()"><i class="bi bi-x-square"  style="font-size:`+(FonteSizeStandard__*0.525)+`rem; "></i></button>    
<blockquote>&nbsp; </blockquote>


<blockquote><div id="ConfCodiceColore__">err ConfCodiceColore__</div> 

<ol>
<li id="DUEK23620A__"><q id="DUEK23620A_LINK__">../../test/dir.php</q><button  id="DUEK23620A_BUTTON__" onclick="CopiaDUEK23620A_LINK__()">INS</button><i>Test per Chrome</i></li>

<li id="DUEK23611A__"><q id="DUEK23611A_LINK__">Testo.txt</q><button  id="DUEK23611A_BUTTON__" onclick="CopiaDUEK23611A_LINK__()">INS</button></li>

<li id="DUEK23605A__"><q id="DUEK23605A_LINK__">../tes/23m05/index.txt</q><button  id="DUEK23605A_BUTTON__" onclick="CopiaDUEK23605A_LINK__()">INS</button></li>

<li id="DUEK23712A__"><q id="DUEK23712A_LINK__">afile.txt</q><button  id="DUEK23712A_BUTTON__" onclick="CopiaDUEK23712A_LINK__()">INS</button></li>
<li id="DUEK23712B__"><q id="DUEK23712B_LINK__">aggio.php</q><button  id="DUEK23712B_BUTTON__" onclick="CopiaDUEK23712B_LINK__()">INS</button></li>




</ol>



<!-- ?   


<textarea style="width:95%;font-size:2.5rem;"  id="story" name="questo_est_un_testo" rows="" cols=""></textarea
<input  type="submit">

$Testo = $_GET["questo_est_un_testo"]; 

$DataOdierna=date('l jS \of F Y h:i:s A'); $DataOdierna=$DataOdierna."<br>";

$Aggiornamento = $DataOdierna."<br>".$Testo."<br>";
$AddTesto = fopen("afile.txt", "a"); fwrite($AddTesto, $Aggiornamento ); 
fclose($AddTesto);


? -->






</blockquote>




<blockquote>Configurazione1__ </blockquote>

<blockquote>Configurazione1__ </blockquote>
 <blockquote>Configurazione1__ </blockquote>
<blockquote>Configurazione1__ </blockquote>
<blockquote>Configurazione1__ </blockquote>
<blockquote>Configurazione1__ </blockquote>
<blockquote>Configurazione1__ </blockquote>
<blockquote>Configurazione1__ </blockquote>
<blockquote>Configurazione1__ </blockquote>
<blockquote>Configurazione1__ </blockquote>
<blockquote>Configurazione1__ </blockquote>
<blockquote>Configurazione1__ </blockquote>
<blockquote>Configurazione1__ </blockquote>
<blockquote>fine </blockquote>




</section>    



<!-- CONFIGURAZIONI 1 2 3 4 5  FIN -->














<section id="VisualizzaCommento_01_Box__" class="da_mo__">    
    <article id="VisualizzaCommento_01__">
    
    <blockquote style="margin-top:-`+(FonteSizeStandard__*0.00)+`rem;font-size:5.50rem;text-align:center;">
    <div class="spinmin">&nbsp;</div>
    <div id="RicercaFile__" style="font-size:0.75rem;">RICERCA</div>
    </blockquote>
    
    </article>
</section>    








    <section class="da_mo__">    
    <div id="SettaggiPerIlCommento_01__"></div>
    </section>    
    
    
    
    <section class="da_mo__">    
    <div id="InformazioniConfigurazione__"></div>
    </section>    

    <article class="da_mo__"><div id="InAttesaDelFile__"></div></article>

    <article class="da_mo__"><div id="AppUnoDueUpdated__"></div></article>
    
`;





function InAttesaDelFile(){

document.querySelector("#CapopaginaBox__").style.display="block";

}; 
setTimeout(InAttesaDelFile, 3100)







function CopySi(){

clearInterval(EsegueIntervalPrendeNomeFileDaInput_01__);EsegueIntervalPrendeNomeFileDaInput_01__=null;

document.querySelector("#StopAndGoSi__").style.display="none";
document.querySelector("#StopAndGoNo__").style.display="block";
/* alert("CopySi()"); */
}

function CopyNo(){
EsegueIntervalPrendeNomeFileDaInput_01__ = setInterval(PrendeNomeFileDaInput_01, 3000);

document.querySelector("#StopAndGoSi__").style.display="block";
document.querySelector("#StopAndGoNo__").style.display="none";
/* alert("CopyNo()"); */
}







/*  FUNZIONE JAVASCRIPT */
function RighelloInputRange(){
    /* 20230701_1915a */

    DESKTOP_CHECK = 1 ; 
    DESKTOP_CHECK = 0 ;
    if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) { DESKTOP_CHECK = 0 ; } else { DESKTOP_CHECK = 1 ; }

    StileDiInputRange=`<div id="LIVELLO_RANGE_01__" style="margin-top:`+(FonteSizeStandard__*1.000*0.150)+`rem; border:solid 0.00rem yellow;"></div>`;
    
    if(DESKTOP_CHECK===1){StileDiInputRange=`<div id="LIVELLO_RANGE_01__" style="margin-top:`+(FonteSizeStandard__*0.250)+`rem;"></div>`;}else{}

    document.getElementById("RighelloInputRange__").innerHTML=`${StileDiInputRange}`;
    
        function RangeDot_Dinamico_Input(){
        
        ValoreInizialeRange__=25;   
        if(DESKTOP_CHECK===1){ValoreInizialeRange__=(ValoreInizialeRange__*0.500);}else{}

        ProprietaInput__=`id="RANGER__" type="range" value="`+ValoreInizialeRange__+`" step="1" min="1" max="99"  class="centrato___" style="margin-left:12.5%;width:75%; border:solid 0.00rem yellow;"`;
        
        document.getElementById("LIVELLO_RANGE_01__").innerHTML=`<input ${ProprietaInput__}  >   `;
        
        }; 
        RangeDot_Dinamico_Input();
    
};
RighelloInputRange();


/*  FUNZIONE JAVASCRIPT */
function LeggiRangeDot_Dinamico_Input(){
LetturaRange__=document.getElementById("RANGER__").value;
FonteDinamica__=(LetturaRange__*0.075).toFixed(2);





AggiornareVisualizzaTesto_01__=`<style>#VisualizzaCommento_01__{font-size:`+(FonteDinamica__*1.00)+`rem!important; border:solid 0.00rem red;} #VisualizzaCommento_01__ > xmp{/* inline-size: auto; overflow-wrap: break-word;  white-space: pre-wrap;  white-space: -moz-pre-wrap;  white-space: -pre-wrap;  white-space: -o-pre-wrap;  word-wrap: break-word;  */} #area_immissione_testo__{height:`+(FonteDinamica__*5.00)+`rem!important;} </style>`;




document.getElementById("SettaggiPerIlCommento_01__").innerHTML=
`
${AggiornareVisualizzaTesto_01__}

`;

};
setInterval(LeggiRangeDot_Dinamico_Input,1)










/*  FUNZIONE JAVASCRIPT */
function CambiaColoreOgniSetInterval(){
    var LettereColoreRandom__ = '0123456789ABCDEF';
    var CreaColoreRandom__ = '#';
    var IColoreRandom__;
    for (IColoreRandom__ = 0; IColoreRandom__ < 6; IColoreRandom__++ ) {
    CreaColoreRandom__ = CreaColoreRandom__+LettereColoreRandom__[Math.round(Math.random() * 15)];
    };
    
    
    /* esporta i valori */
    document.getElementById("COLORE_RANDOM__").innerHTML=
    `
    <style>
    
    #BODY__{border:dashed `+(FonteSizeStandard__*0.00)+`rem `+CreaColoreRandom__+`!important;}

    #CapopaginaBox__{background-color:`+CreaColoreRandom__+`;}
    #CapopaginaBox__{background-color:white;}




    #SegnaloreDiColoreRandom__{position:fixed;top:`+(FonteSizeStandard__*1.50)+`rem;right:`+(FonteSizeStandard__*1.00)+`rem;background-color:`+CreaColoreRandom__+`; color:`+CreaColoreRandom__+`;font-size:`+(FonteSizeStandard__*0.45)+`rem;border-radius:0.50rem;}




            
    #INPUT_NOME_FILE__{ /* color:  `+CreaColoreRandom__+`; */ 
    width:100%; width:99.25%;
    background-color:white;color:black; 
    font-size:`+(FonteSizeStandard__*1.075)+`rem;}

    /*    #VisualizzaNomeDelFile__{color:  `+CreaColoreRandom__+`;}  */


    </style>

    `;
    
    /*        */
        document.getElementById("VISUALIZZA_COLORE_RANDOM__").innerHTML=
        `
        <style></style>
        <div style="color:`+CreaColoreRandom__+`;">${CreaColoreRandom__}</div>
        
        `;
document.getElementById("ConfCodiceColore__").innerHTML=
`
${CreaColoreRandom__}
<span  style="background-color:`+CreaColoreRandom__+`;">&nbsp;</span>

`;
    
};





















/*    *******************************************
    *******************************************
    Richiede il file da leggere il cui nome
    dipende da input text INPUT_NOME_FILE__
    
    Questo richiesta è il nucleo del programma
    
*/
/*  FUNZIONE JAVASCRIPT */
function PrendeNomeFileDaInput_01(){



NomeDelFileDaInput__=document.getElementById("INPUT_NOME_FILE__").value;

CambiaColoreOgniSetInterval();

document.getElementById("VisualizzaNomeDelFile__").innerHTML=`${NomeDelFileDaInput__}`;

if(NomeDelFileDaInput__!==""){


DirectoryDove_File_01__="";
File_01__=NomeDelFileDaInput__;
UltimoAggiornamento__=new Date();

File_01__ = DirectoryDove_File_01__+File_01__ + "?"+(new Date().getTime()) + (Math.random()) ; 
Richiedo_01__ = new XMLHttpRequest();

Richiedo_01__.open("GET",File_01__,false);
Richiedo_01__.onreadystatechange = function(){
Trovato_01__ = Richiedo_01__.responseText;



SpinnerVirtuale__="<div><div style='background-color:orange;color:black;font-size:1.500rem!important; display:inline-block;  border-radius:50%; '>&#58;&#41;</div></div>";
document.getElementById("VisualizzaCommento_01__").innerHTML=
`

${Trovato_01__}

${SpinnerVirtuale__}

`;

} ; Richiedo_01__.send();



} else { 
/*
 alert("Nome del file vuoto!");
*/
  }






};
EsegueIntervalPrendeNomeFileDaInput_01__ = setInterval(PrendeNomeFileDaInput_01, 3000);











function InformazioniConfigurazioneApri(){

// alert("Altezza__= " +Altezza__);

LarghezzaDellaConfigurazioneBox__=(FonteSizeStandard__*1.15)+"rem";
AltezzaDellaConfigurazioneBox__= (Altezza__*0.550)+"rem";
FonteDellaConfigurazioneBox__=(FonteSizeStandard__*0.750)+"rem";
FonteDellaConfigurazioneBox__=(FonteSizeStandard__*0.765)+"rem";





document.querySelector("#InformazioniConfigurazioneBox__").style.display="block";
document.querySelector("#InformazioniConfigurazioneBox__").style.width=LarghezzaDellaConfigurazioneBox__;
document.querySelector("#InformazioniConfigurazioneBox__").style.height=AltezzaDellaConfigurazioneBox__;
document.querySelector("#InformazioniConfigurazioneBox__").style.fontSize=FonteDellaConfigurazioneBox__;


//alert("InformazioniConfigurazione()");

};

function InformazioniConfigurazioneChiudi(){

document.querySelector("#InformazioniConfigurazioneBox__").style.display="none";

// alert("InformazioniConfigurazione()");

};





function InformazioniConfigurazione1Apri(){
document.querySelector("#Configurazione1__").style.display="block";
document.querySelector("#Toggle1Configurazione__").style.backgroundColor="red";
document.querySelector("#Toggle1Configurazione__").style.color="white";
document.querySelector("#Toggle1Configurazione__").style.borderRadius="0.50rem";

document.querySelector("#Bottone1Configurazione__").style.position="fixed";
document.querySelector("#Bottone1Configurazione__").style.top="`+(7.00)+`rem";
document.querySelector("#Bottone1Configurazione__").style.left="`+(0.15)+`rem";




};

function InformazioniConfigurazione1Chiudi(){
document.querySelector("#Configurazione1__").style.display="none";
document.querySelector("#Toggle1Configurazione__").style.backgroundColor="inherit";
document.querySelector("#Toggle1Configurazione__").style.color="inherit";



};






function InformazioniConfigurazione2Chiudi(){

alert(" InformazioniConfigurazione2Chiudi ");

};


function InformazioniConfigurazione3Chiudi(){

alert(" InformazioniConfigurazione3Chiudi ");

};


function InformazioniConfigurazione4Chiudi(){

alert(" InformazioniConfigurazione4Chiudi ");

};


function InformazioniConfigurazione5Chiudi(){

alert(" InformazioniConfigurazione5Chiudi ");

};








function CopiaDUEK23611A_LINK__(){
CopiatoDUEK23611A_LINK__=document.getElementById("DUEK23611A_LINK__").textContent;
document.querySelector("#INPUT_NOME_FILE__").value=CopiatoDUEK23611A_LINK__;
}

function CopiaDUEK23605A_LINK__(){
CopiatoDUEK23605A_LINK__=document.getElementById("DUEK23605A_LINK__").textContent;
document.querySelector("#INPUT_NOME_FILE__").value=CopiatoDUEK23605A_LINK__;
}

function CopiaDUEK23620A_LINK__(){
CopiatoDUEK23620A_LINK__=document.getElementById("DUEK23620A_LINK__").textContent;
document.querySelector("#INPUT_NOME_FILE__").value=CopiatoDUEK23620A_LINK__;
}





function CopiaDUEK23712A_LINK__(){
CopiatoDUEK23712A_LINK__=document.getElementById("DUEK23712A_LINK__").textContent;
document.querySelector("#INPUT_NOME_FILE__").value=CopiatoDUEK23712A_LINK__;
}

function CopiaDUEK23712B_LINK__(){
CopiatoDUEK23712B_LINK__=document.getElementById("DUEK23712B_LINK__").textContent;
document.querySelector("#INPUT_NOME_FILE__").value=CopiatoDUEK23712B_LINK__;
}










function GoTop(){ VaInizio__ = document.getElementById("InizioDellaPagina__").offsetTop; window.scrollTo(0, VaInizio__) }; GoTop();  


function AppUpdated(arg0__){ 
    
    /* alert(DESKTOP_CHECK+" "+FonteSizeStandard__); */
    
    FonteAppUpdated__=(FonteSizeStandard__*0.50);

    AltezzaCapopaginaBox__=(FonteSizeStandard__*(2.50+0.25));

    MargineDestroVisualizza_01_Box__=(FonteSizeStandard__*1.50);
    MargineSinistroVisualizza_01_Box__=(FonteSizeStandard__*1.50);
    
    
    /* alert("FonteAppUpdated__ = "+FonteAppUpdated__); */
    
    if(DESKTOP_CHECK===1){FonteAppUpdated__=FonteAppUpdated__*0.500;}else{FonteAppUpdated__=FonteAppUpdated__*0.950;}
    
    
    AppUpdated__=`
    <style>#fine__{color:blue;font-size:`+FonteAppUpdated__+`rem;border:solid 0.00rem purple;}</style>
    <div style="color:green;font-size:`+FonteAppUpdated__+`rem;">&#61;CBD_23715_0730a_vid3820725_V13__07_35&#61;</div>`; 


    document.getElementById("AppUnoDueUpdated__").innerHTML=
`

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" >



<style>    

html * {font-family: "PT Mono",monospace;}
html * {word-break:break-all;}


button{font-size:`+(FonteSizeStandard__*0.50)+`rem; border-radius:0.50rem;}


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







xmp {

inline-size: auto; inline-size: auto;
    overflow-wrap: break-word;
    
    border:solid 0.00rem magenta;

 white-space: pre-wrap;       /* css-3 */
 white-space: -moz-pre-wrap;  /* Mozilla, since 1999 */
 white-space: -pre-wrap;      /* Opera 4-6 */
 white-space: -o-pre-wrap;    /* Opera 7 */
 word-wrap: break-word;       /* Internet Explorer 5.5+ */
}









#CapopaginaBox__{
position:fixed;
top:0rem; left:0rem;


width:100%;
height:`+AltezzaCapopaginaBox__+`rem;


font-size:`+(FonteSizeStandard__)+`rem;

z-index:`+UnMilione__+`;
}

#VisualizzaNomeDelFile__{
font-size:`+(FonteSizeStandard__)+`rem;

}

#VISUALIZZA_COLORE_RANDOM__{
font-size:`+(FonteSizeStandard__*0.50)+`rem;
visibility:hidden;
}



#VisualizzaCommento_01_Box__{

margin-top:`+(AltezzaCapopaginaBox__*1.50)+`rem;
margin-right:`+(MargineDestroVisualizza_01_Box__)+`rem;
margin-bottom:`+(AltezzaCapopaginaBox__*1.00)+`rem;
margin-left:`+(MargineSinistroVisualizza_01_Box__)+`rem;


border:solid 0.000rem fuchsia;
overflow:auto!important;
}


#VisualizzaCommento_01__{

}


#area_immissione_testo{}


</style>    


${AppUpdated__}`;
    
    
}; AppUpdated("AppUpdated(arg0__)");





// }; TheRollingThunderProject();
</script>
