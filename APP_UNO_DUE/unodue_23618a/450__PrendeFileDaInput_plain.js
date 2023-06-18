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

/* cambio colore quando setInterval */

#FILE_RICHIESTO__{margin-right: `+(FonteSizeStandard__*0.25)+`rem;  background-color:`+CreaColoreRandom__+`!important;border-radius:0.25rem;}


#COPY_SI__{background-color:`+CreaColoreRandom__+`!important;}
#COPY_NO__{background-color:`+CreaColoreRandom__+`!important;}
#DUEK23605A_BUTTON__{font-size:`+(FonteSizeStandard__*1)+`rem;}
#DUEK23611A_BUTTON__{font-size:`+(FonteSizeStandard__*1)+`rem;}



#NAV_INTERNA__{width:75%;border:solid 0.15rem `+CreaColoreRandom__+`!important;}
#NAV_INTERNA__ * {
font-size:`+(FonteSizeStandard__*1)+`rem;
}

#NAV_INTERNA_TOP__{position:fixed;top:0rem;top:`+(FonteSizeStandard__*1.00)+`rem;left:0rem;}
#NAV_INTERNA_TOP__{position:fixed;top:0rem;background-color:rgb(254,211,192);color:rgb(85,25,225);top:`+(FonteSizeStandard__*1.00)+`rem;left:0rem;border-radius:0.50rem;cursor:pointer;z-index:1000000000!important;}
#NAV_INTERNA_TOP__:hover{border:dashed 0.05rem rgb(85,25,225);}


#NASCONDI_NAVIGAZIONE_INTERNA__{position:absolute;top:`+(FonteSizeStandard__*0.25)+`rem;left:75%;background-color:red;color:`+CreaColoreRandom__+`!important;font-size:`+(FonteSizeStandard__*0.00)+`rem;border:solid 1.500rem red;border-radius:0.250rem; display:inline-block;visibility:visible;opacity:0.50;cursor:pointer;}
#NASCONDI_NAVIGAZIONE_INTERNA__:hover{opacity:1.00;}

#VEDI_NAVIGAZIONE_INTERNA__{position:absolute;top:`+(FonteSizeStandard__*1.50)+`rem;left:75%;background-color:green;color:`+CreaColoreRandom__+`!important;font-size:`+(FonteSizeStandard__*0.00)+`rem;border:solid 1.500rem green;border-radius:0.250rem;  display:inline-block;visibility:visible;opacity:0.50;cursor:pointer;}
#VEDI_NAVIGAZIONE_INTERNA__:hover{opacity:1.00;}




#VISUALIZZA_TESTO_00__{
margin-top:`+(HeightCapoPagina__*1.00)+`rem;
margin-bottom:`+(HeightCapoPagina__*1.5)+`rem;
}




</style>


`

;



document.getElementById("VISUALIZZA_COLORE_RANDOM__").innerHTML=`${CreaColoreRandom__}`;



if(NomeDelFileDaInput__!==""){
//
// esiste un nome
//
//
document.getElementById("INPUT_INSERITO__").innerHTML=
`<span id="FILE_RICHIESTO__">&nbsp;&nbsp;</span><span>File richiesto:</span> `+`<b>`+NomeDelFileDaInput__+`</b>`;

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
document.getElementById("Vedi_TimeStamp__").innerHTML=`${File_00__}`; 
} ; Richiedo_00__.send();


}
else
{
document.getElementById("INPUT_INSERITO__").innerHTML=``;

};






};
EsegueIntervalPrendeNomeFileDaInput_00__ = setInterval(PrendeNomeFileDaInput_00, 3000);


