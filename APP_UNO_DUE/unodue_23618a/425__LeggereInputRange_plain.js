
// Legge i valori del range
// 
// 
function LeggiRangeDot_Dinamico_Input(){
 let LetturaRange__ = document.getElementById("RANGER__").value;
 FonteDinamica__ = (LetturaRange__ * 0.075) ;

document.getElementById("Valore_di_FonteDinamica__").innerHTML=`<q style="visibility:hidden;">`+( FonteDinamica__.toFixed(2) )+`rem`+`</q>`;

document.getElementById("SETTAGGI__").innerHTML=
`
<style>

#INPUT_NOME_FILE__{width:75%;font-size:2.5rem;}
#INSERISCE_il_nome_del_file_da_cercare__{font-size:1.25rem;}
#RANGER__{width:75%;}


#Vedi_TimeStamp__{font-size:`+(FonteDinamica__*0.75)+`rem;border:solid 0.50rem red;}

#DUEK23611A_LINK__{font-size:`+(FonteDinamica__*0.75)+`rem;}
#DUEK23605A_LINK__{font-size:`+(FonteDinamica__*0.75)+`rem;}




#COMMENTI__{font-size:`+(FonteDinamica__*0.75)+`rem;}
#COMMENTI__{font-size:`+(FonteDinamica__*0.75)+`rem;}





#VISUALIZZA_TESTO_00__{font-size:`+(FonteDinamica__ * 1)+`rem;border:solid 0.00rem yellow;overflow:auto!important;

</style>
`;

};
setInterval(LeggiRangeDot_Dinamico_Input,1)

