


/* head */




DESKTOP_CHECK = 1 ;
DESKTOP_CHECK = 0 ;
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
{ DESKTOP_CHECK = 0 ; } else { DESKTOP_CHECK = 1 ; }




/* mobile first */
FontSizeStandard__=2.25;
FontSizeStandard__=2.25*1.00;
FontSizeStandard__=3.95*1.00;


// rilevazione width height
// i valori possono variare
// a seconda del tipo di
// dispositivo
// 
function LarghezzaRem__(){let Larghezza__=window.innerWidth/16;return Larghezza__;}
function AltezzaRem__(){let Altezza__=window.innerHeight/16;return Altezza__;}

Larghezza__=LarghezzaRem__();
Altezza__=AltezzaRem__();


HeightHeader__=10;
HeightHeader__=15;


FattMargin__=1;FattPadding__=1;

MarginHeaderTop__=0;MarginHeaderRight__=0;MarginHeaderBottom__=0;MarginHeaderLeft__=0;
PaddingHeaderTop__=0;PaddingHeaderRight__=0;PaddingHeaderBottom__=0;PaddingHeaderLeft__=0;
HeightHeader__=HeightHeader__+(MarginHeaderTop__ * FattMargin__)+(MarginHeaderBottom__ * FattMargin__)+(PaddingHeaderTop__ * FattPadding__)+(PaddingHeaderBottom__ * FattPadding__);

FonteDinamica__=2.5;



FonteSizeXChiudiHeader__=(FontSizeStandard__*1);
FonteSizeXApriHeader__= (FonteSizeXChiudiHeader__*1);


FonteSizeXQuestionMarkPopUp__=FonteSizeXChiudiHeader__;
LarghezzaXQuestionMarkPopUp__=(Larghezza__*1)-(FonteSizeXChiudiHeader__*6);

AltezzaXQuestionMarkPopUp__=(Altezza__*1.00)-(HeightHeader__*0.50);
AltezzaXQuestionMarkPopUp__=(Altezza__*1.00)-(HeightHeader__*0.75);
AltezzaXQuestionMarkPopUp__=(Altezza__*1.00)-(HeightHeader__*0.95);
AltezzaXQuestionMarkPopUp__=(Altezza__*1.00)-(HeightHeader__*1.00);



/* HEADER__ */

document.getElementById("HEADER__").innerHTML=
`
<style>
#HEADER__{
position:fixed;top:0rem;left:0rem;

background-color:rgb(197,212,191);
color:black;

width:100%;
height:`+(HeightHeader__ * 1)+`rem;

overflow:auto;

z-index:1000000000!important;

border:solid 0.00rem red;

}



#CHIUDI_HEADER__{
position:absolute;top:0rem;right:0rem;text-align:right;font-size:`+(FontSizeStandard__*1.00)+`rem;border-radius:0.5rem;
cursor:pointer;opacity:0.75;
}

#APRI_HEADER__{
position:absolute;top:0rem;right:0rem;text-align:right;font-size:`+(FontSizeStandard__*1)+`rem;border-radius:0.5rem;
cursor:pointer;opacity:0.75;
}
#CHIUDI_HEADER__{background-color:red;color:white;}
#APRI_HEADER__{background-color:green;color:white;text-decoration:line-through;z-index:1000000000!important;}




#CONTENITORE_COPY_SI_NO__{
position:absolute;top:33.33%;right:0.00rem; 
padding-right:0rem;text-align:right;border:solid 0.00rem navy;
display:inline-block;
opacity:0.50;
}

#COPY_SI__{font-size:`+(FontSizeStandard__*1.00)+`rem;border-radius:0.50rem;cursor:pointer;display:block;}
#COPY_NO__{font-size:`+(FontSizeStandard__*1.00)+`rem;border-radius:0.50rem;cursor:pointer;display:none;}
#COPY_SI__{background-color:green;color:white!important;}
#COPY_NO__{background-color:red;color:white!important;text-decoration:line-through;}





#QUESTION_MARK_POPUP__{
position:absolute;top:66.66%;right:0rem;text-align:right;
font-size:`+(FontSizeStandard__*1)+`rem;
border-radius:0.5rem;cursor:pointer;opacity:0.75;
}
#ALT_QUESTION_MARK_POPUP__{
position:absolute;top:66.66%;right:0rem;text-align:right;
font-size:`+(FontSizeStandard__*1)+`rem;
border-radius:0.5rem;cursor:pointer;opacity:0.75;
}
#QUESTION_MARK_POPUP__{background-color:teal;color:white;}
#ALT_QUESTION_MARK_POPUP__{background-color:purple;color:white;}





</style>

<button id="CHIUDI_HEADER__" onclick="ChiudiHeader()" >X</button> 

<article id="CONTENITORE_COPY_SI_NO__">
<button id="COPY_SI__" onclick="COPY_SI()">&#35;</button>
<button id="COPY_NO__" onclick="COPY_NO()">&#35;</button>
</article>

<button id="ALT_QUESTION_MARK_POPUP__" onclick="ChiudiQuestionMarkPopup()" >?</button> 
<button id="QUESTION_MARK_POPUP__" onclick="QuestionMarkPopup()" >?</button> 

<div id="POPUP__" class="animate__animated animate__backInUp">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading... POPUP__ </q>
</div>

<div id="VALORE_di_FonteDinamica__">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading... VALORE_di_FonteDinamica__</q>
</div>

<div id="FORM_per_inserimento_nome_file__">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading... FORM_per_inserimento_nome_file__</q>
</div>

<div id="LIV_01__">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading... LIV_01__</q>
</div>

`; // HEADER__





/* POPUP__ */

document.getElementById("POPUP__").innerHTML=
`
<style>
#POPUP__{
position:fixed;bottom:0%;left:0rem;
width:100%;
margin:0rem;
height:`+(AltezzaXQuestionMarkPopUp__*1)+`rem;
font-size:`+(FonteDinamica__*1)+`rem;
background-color:rgb(195,215,245);
color:black;
border-top:solid 0.15rem rgb(85,25,225);

display:none;
overflow:auto;

}

#CONTENITORE_CHIUDI_QUESTION_MARK_POPUP__{
margin:0rem;padding:0rem;
background-color:transparent;
text-align:center;
border-bottom:solid 0.15rem purple;
}

#CHIUDI_QUESTION_MARK_POPUP__{display:block;cursor:pointer;}
#CHIUDI_QUESTION_MARK_POPUP__ span{
background-color:transparent;color:purple;font-size:`+(FontSizeStandard__*1)+`rem;border-radius:0.00rem;word-break:break-all;
}
#CHIUDI_QUESTION_MARK_POPUP__ span:hover{
background-color:transparent;color:olive;border-radius:0.00rem;
}


#CONTENITORE_DI_POPUP__{position:static;}
#CONTENUTO_DI_POPUP__{position:static;}


</style>


<section id="CONTENITORE_DI_POPUP__">
<article id="CONTENUTO_DI_POPUP__">
<aside id="CONTENITORE_CHIUDI_QUESTION_MARK_POPUP__">
<blockquote id="CHIUDI_QUESTION_MARK_POPUP__" onclick="ChiudiQuestionMarkPopup()">
<span>TheRollingThunderProject released THE_VENETIAN_BRIDGE_23603_0830a</span>
</blockquote>
</aside>

<aside>
<ol>
<li><div id="CHECK_STOP_AND_GO__"></div></li>

<li id="DUEK2305__"><q id="DUEK2305_LINK__">../tes/23m05/index.txt</q><button onclick="CopiaDUEK2305_LINK__()">INS</button></li>

</ol>
</aside>

<blockquote id="COMMENTI__">
<q>
<ol>
<li><pre>word-break:break-all</pre></li>
<li>Si può tramite <q>fetch</q> di un file.txt inserire (insert) un file.css-like?</li>
<li>Una simil-compilazione per snellire la lettura del codice</li>
<li></li>

</ol>
</q>
</blockquote>

</article>
</section>


`;


/* FORM_per_inserimento_nome_file__ */


document.getElementById("FORM_per_inserimento_nome_file__").innerHTML=
`

<section id="INSERISCE_il_nome_del_file_da_cercare__">
 <input type="text" placeholder="Testo.txt" id="INPUT_NOME_FILE__" value="Testo.txt" >
 
 <div id="INPUT_INSERITO__">
 <div class="spinner" style="display:inline-block;">&nbsp;</div><q style="color:navy;">Loading... INPUT_INSERITO__</q></div>

</section>


`;



function ChiudiHeader(){ 
document.querySelector("#HEADER__").style.display="none"; 
document.querySelector("#CHIUDI_HEADER__").style.display="none"; 
document.querySelector("#APRI_HEADER__").style.display="block"; 
//
document.querySelector("#THE_LAST_WALTZ__").style.display="block";
};

function ApriHeader(){ 
document.querySelector("#HEADER__").style.display="block"; 
document.querySelector("#CHIUDI_HEADER__").style.display="block"; 
document.querySelector("#APRI_HEADER__").style.display="none"; 

};




function QuestionMarkPopup(){
document.querySelector("#QUESTION_MARK_POPUP__").style.display="none";
document.querySelector("#POPUP__").style.display="block";
};

function ChiudiQuestionMarkPopup(){
document.querySelector("#QUESTION_MARK_POPUP__").style.display="block";
document.querySelector("#POPUP__").style.display="none";
};




function CopiaDUEK2305_LINK__(){
CopiatoDUEK2305_LINK__=document.getElementById("DUEK2305_LINK__").textContent;
document.querySelector("#INPUT_NOME_FILE__").value=CopiatoDUEK2305_LINK__;
}
function CopiaDUEK2305_LINK__clone(){
CopiatoDUEK2305_LINK__=document.getElementById("DUEK2305_LINK__").textContent;
document.querySelector("#INPUT_NOME_FILE__").value=CopiatoDUEK2305_LINK__;
}





function COPY_SI(){ // alert("COPY_SI"); 
clearInterval(EsegueIntervalPrendeNomeFileDaInput_00__);
EsegueIntervalPrendeNomeFileDaInput_00__=null;
document.querySelector("#COPY_SI__").style.display="none";
document.querySelector("#COPY_NO__").style.display="block";
}

function COPY_NO(){ // alert("COPY_NO"); 
//setInterval(PrendeNomeFileDaInput_00, 3000);
EsegueIntervalPrendeNomeFileDaInput_00__ = setInterval(PrendeNomeFileDaInput_00, 3000);
document.querySelector("#COPY_SI__").style.display="block";
document.querySelector("#COPY_NO__").style.display="none";
}









/* FOOTER__ */

document.getElementById("FOOTER__").innerHTML=``;



//
// Testing per value responsive
//
//
//
function RangeDot_Dinamico_Input(){

ValoreInizialeRange__=50;

 if(DESKTOP_CHECK==1){ValoreInizialeRange__=12.5;}

 document.getElementById("LIV_01__").innerHTML=
 `

 <input id="RANGER__" type="range" value="`+ValoreInizialeRange__+`" step="1" min="1" max="99">

 `;


}; // RangeDot_Dinamico_Input()
RangeDot_Dinamico_Input() ;




// Legge i valori del range
// 
// 

function LeggiRangeDot_Dinamico_Input(){
// Prende il valore dal range
// 
// 
 let LetturaRange__ = document.getElementById("RANGER__").value;
 FonteDinamica__ = (LetturaRange__ * 0.075) ;
//
//
// 
document.getElementById("VALORE_di_FonteDinamica__").innerHTML=`<q style="visibility:hidden;">`+( FonteDinamica__.toFixed(2) )+`rem;`+`</q>`;

document.getElementById("SETTAGGI__").innerHTML=
`
<style>

#CHECK_STOP_AND_GO__{font-size:`+(FonteDinamica__*0.75)+`rem;}
#COMMENTI__{font-size:`+(FonteDinamica__*0.75)+`rem;}

#INPUT_NOME_FILE__{width:75%;font-size:2.5rem;}
#INSERISCE_il_nome_del_file_da_cercare__{font-size:1.25rem;}

#RANGER__{width:75%;}

#VISUALIZZA_TESTO_00__{font-size:`+(FonteDinamica__ * 1)+`rem;overflow:auto!important;

</style>
`;


};
// LeggiRangeDot_Dinamico_Input();
setInterval(LeggiRangeDot_Dinamico_Input,1)








// Inserimento dei dati (Testo.txt) tramite input
//
//
function PrendeNomeFileDaInput_00(){
NomeDelFileDaInput__=document.getElementById("INPUT_NOME_FILE__").value;





// Cambia colore ogni setInterval
//
//	
        var LettereColoreRandom__ = '0123456789ABCDEF';
        var CreaColoreRandom__ = '#';
        var IColoreRandom__;
        for (IColoreRandom__ = 0; IColoreRandom__ < 6; IColoreRandom__++ ) {
            CreaColoreRandom__ = CreaColoreRandom__+LettereColoreRandom__[Math.round(Math.random() * 15)];
        };


document.getElementById("COLORE_RANDOM__").innerHTML=
		`
		<style>
		
#COPY_SI__{background-color:`+CreaColoreRandom__+`!important;}
#COPY_NO__{background-color:`+CreaColoreRandom__+`!important;}


        </style>
		
		${CreaColoreRandom__}
		
		`
		;
        










if(NomeDelFileDaInput__!==""){	

document.getElementById("INPUT_INSERITO__").innerHTML=`File richiesto: `+`<b>`+NomeDelFileDaInput__+`</b>`;

// Viene recuperato il file richiesto
//
//
	LaSceltaInterattivaDinamica__ = NomeDelFileDaInput__;
	let DirectoryDove__; DirectoryDove__="";
	let File_00__; File_00__=LaSceltaInterattivaDinamica__;


// Viene aggiornato il file richiesto
//
//
	File_00__ = DirectoryDove__+File_00__ + "?"+(new Date().getTime()) + (Math.random()) ;



// Il file richiesto viene passato
//
//
	let Richiedo_00__ = new XMLHttpRequest(); 

Richiedo_00__.open("GET",File_00__,false);
Richiedo_00__.onreadystatechange = function(){
let Trovato_00__ = Richiedo_00__.responseText;

TestoTrovatoDaLeggere__ = Trovato_00__;

document.getElementById("VISUALIZZA_TESTO_00__").innerHTML=`${TestoTrovatoDaLeggere__}`; 


document.getElementById("CHECK_STOP_AND_GO__").innerHTML=`${File_00__}`; 


} ; Richiedo_00__.send();




}else{document.getElementById("INPUT_INSERITO__").innerHTML=``}; // (NomeDelFileDaInput__!=="")









};
// PrendeNomeFileDaInput_00();

// setInterval(PrendeNomeFileDaInput_00, 3000);

EsegueIntervalPrendeNomeFileDaInput_00__ = setInterval(PrendeNomeFileDaInput_00, 3000);




















































