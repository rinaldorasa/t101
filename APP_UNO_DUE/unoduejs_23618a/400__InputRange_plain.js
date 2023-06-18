
// aggiunta input range ini

function RangeDot_Dinamico_Input(){ValoreInizialeRange__=25; if(DESKTOP_CHECK==1){ValoreInizialeRange__=12.5;}

 document.getElementById("Liv_01__").innerHTML=
 `
 <input id="RANGER__" type="range" value="`+ValoreInizialeRange__+`" step="1" min="1" max="99">
 `;
 
}; 
RangeDot_Dinamico_Input() ;

