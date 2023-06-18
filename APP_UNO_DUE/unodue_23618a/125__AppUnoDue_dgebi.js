
document.getElementById("APP_UNO_DUE__").innerHTML=
`


<style>

html * {font-size:auto;font-family:monospace;}
body{}

q{border-bottom:dashed 0.15rem orange;}

ol { list-style: none; counter-reset: ColoreCounter__;}ol li { counter-increment: ColoreCounter__;}ol li::before { content: counter(ColoreCounter__) ". "; background-color:aqua;color: black;font-size:75%;border:solid 0.15rem aqua;border-radius: 100%;display:inline-block;}

</style>


<style>
.spinmincaveat0{font-size:initial;}
.spinmincaveat1{background-color:white;color:gray;font-size:initial;}
.spinmincaveat2{background-color:white;color:gray;font-size:initial;}

</style>



<style>
/* UTILITIES ini */
@keyframes spin{ 0%{transform:rotate(0deg);} 100% {transform:rotate(360deg);}}

.spinner{width:48px;height:48px; width:2rem;height:2rem; border:solid 4px red; border:solid 0.25rem red; border:solid 0.25rem red; border:solid 0.25rem red; border-top:solid 4px black; border-top:solid 0.25rem transparent; background-color:transparent; border-radius:50%; overflow:none; animation: spin 1.5s linear infinite;}
.spinmin{width: 1.00rem;height:1.00rem;background-color:transparent;
border:solid 0.175rem orange;border-top:solid 0.175rem transparent;border-radius:50%; display:inline-block;
animation: spin 1.5s linear infinite;
}

@-webkit-keyframes blink { 0% {background: #222} 50% {background: lime} 100% {background: #222}}

.cursore { background: lime; line-height: 17px; margin-left: 3px;
 -webkit-animation: blink 0.8s infinite; width: 7px; height: 15px;}

/* UTILITIES fin */ 

</style>



<section id="NAV_INTERNA__">
<article id="NAV_INTERNA_TOP__"><a href="#">&#47;&#92;</a><a href="#fine__">&#92;&#47;</a></article>
</section>

<button id="NASCONDI_NAVIGAZIONE_INTERNA__" onclick="NascondiNavigazioneInterna()">&#43;</button>
<button id="VEDI_NAVIGAZIONE_INTERNA__" onclick="VediNavigazioneInterna()">&#45;</button>


<section>
<button id="APRI_CapoPagina__" onclick="ApriHeader()" >&#88;</button>
</section>


<header id="CapoPagina__">
<div class="spinmin">&nbsp;</div><q class="spinmincaveat1">Loading elemento ...</q><q class="spinmincaveat2">CapoPagina__</q> 
</header>



<section id="SETTAGGI__"></section>
<div id="COLORE_RANDOM__"></div>


<SECTION id="MAIN__"><div class="spinmin">&nbsp;</div><q style="font-size:0.75rem;">Loading elemento ... MAIN__</q></SECTION>



`;

