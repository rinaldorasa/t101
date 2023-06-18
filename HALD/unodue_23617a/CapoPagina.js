
document.getElementById("CapoPagina__").innerHTML=
`
<style>

#CapoPagina__{position:fixed;top:0rem;left:0rem;

background-color:#74C974;background-color:#D1A942;
background-color:#E4EE15;
background-color:#99AFE5;
color:black;

width:100%;
height:`+(HeightCapoPagina__ * 1)+`rem;

overflow:auto;

z-index:1000000000!important;

}



#CHIUDI_CapoPagina__{position:absolute;top:0rem;right:0rem;
background-color:red;color:white;font-size:`+(FonteSizeStandard__*1.00)+`rem;text-align:right;border-radius:0.5rem;
cursor:pointer;opacity:0.75;
}

#APRI_CapoPagina__{position:absolute;top:0rem;right:0rem;
background-color:green;color:white;font-size:`+(FonteSizeStandard__*1)+`rem;text-align:right;text-decoration:line-through;border-radius:0.5rem;
cursor:pointer;opacity:0.75;z-index:1000000000!important;
}
#CHIUDI_CapoPagina__{}
#APRI_CapoPagina__{}




#CONTENITORE_COPY_SI_NO__{position:absolute;top:33.33%;right:0.00rem; 
text-align:right;display:inline-block;
opacity:0.50;
}

#COPY_SI__{background-color:green;color:white!important;font-size:`+(FonteSizeStandard__*1.00)+`rem;border-radius:0.50rem;cursor:pointer;display:block;}
#COPY_NO__{background-color:red;color:white!important;font-size:`+(FonteSizeStandard__*1.00)+`rem;text-decoration:line-through;border-radius:0.50rem;cursor:pointer;display:none;}
#COPY_SI__{}
#COPY_NO__{}





#QUESTION_MARK_POPUP__{position:absolute;top:66.66%;right:0rem;
background-color:teal;color:white;
font-size:`+(FonteSizeStandard__*1)+`rem;text-align:right;
border-radius:0.5rem;cursor:pointer;opacity:0.75;
}
#ALT_QUESTION_MARK_POPUP__{position:absolute;top:66.66%;right:0rem;
background-color:purple;color:white;
font-size:`+(FonteSizeStandard__*1)+`rem;text-align:right;
border-radius:0.5rem;cursor:pointer;opacity:0.75;
}
#QUESTION_MARK_POPUP__{}
#ALT_QUESTION_MARK_POPUP__{}





</style>

<button id="CHIUDI_CapoPagina__" onclick="ChiudiHeader()" >X</button> 

<article id="CONTENITORE_COPY_SI_NO__">
<button id="COPY_SI__" onclick="COPY_SI()">&#35;</button><button id="COPY_NO__" onclick="COPY_NO()">&#35;</button>
</article>

<button id="ALT_QUESTION_MARK_POPUP__" onclick="ChiudiQuestionMarkPopup()" >?</button> 
<button id="QUESTION_MARK_POPUP__" onclick="QuestionMarkPopup()" >?</button> 

<div id="POPUP__" class="animate__animated animate__backInUp">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading elemento ... POPUP__ </q>
</div>

<div id="Valore_di_FonteDinamica__">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading elemento ... Valore_di_FonteDinamica__</q>
</div>

<div id="Form_per_inserimento_nome_file__">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading elemento ... Form_per_inserimento_nome_file__</q>
</div>

<div id="Liv_01__">
<div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading elemento ... Liv_01__</q>
</div>


`; // CapoPagina__
