

"use strict"; 
 let tempo=setInterval(unaltraprova,1000);
 
 function unaltraprova(){
 
 let inquestomomento=Date();
 /* */
 
 var milli=Date.now();
 
 var anno = new Date();
 var anni= anno.getFullYear(); 
 var annis=anni.toString();
 
 var mese = new Date();
 var mesi= mese.getMonth(); /* 0 11 */
 mesi=mesi+1; /* 1 12 */
 var mesis=mesi.toString();
 var lmesis= mesis.length; 
 if (lmesis===1){ mesis="0"+mesis; } 
 
 
 var giorno = new Date();
 var giorni= giorno.getDate();
 var giornis=giorni.toString();
 var lgiornis= giornis.length; 
 if (lgiornis===1){ giornis="0"+giornis; } 
 
 var ora = new Date();
 var ore = ora.getHours();
 var ores=ore.toString();
 var lores= ores.length; 
 if (lores===1){ ores="0"+ores; }
 
 var minuto = new Date();
 var minuti = minuto.getMinutes();
 var minutis=minuti.toString();
 var lminutis= minutis.length; 
 if (lminutis===1){ minutis="0"+minutis; }
 
 var secondo = new Date();
 var secondi = secondo.getSeconds(); 
 var secondis=secondi.toString();
 var lsecondis= secondis.length; 
 if (lsecondis===1){ secondis="0"+secondis; }
 
 
 var minuseco=annis+mesis+giornis+ores+minutis+secondis;
 
 var minuseconum=parseInt(minuseco, 10);
 
 var differenza=minuseconum-inizio;
 
 if (secondi===0){differenza=differenza;}
 
 
 /* effettivo timer in minuti datosi durata sessione */ 
 /* minore di una ora non richiede correzione */
 if (secondi===0){ incrementotimer=incrementotimer+1;}
 
 /* chiude definitivamente */
 if (incrementotimer===chiudisessione){setTimeout( function(){window.location.href = "log-out.php"},10);}
 if (incrementotimer>chiudisessione){setTimeout( function(){window.location.href = "log-out.php"},10);}
 
 
 /* avvertimento */
 if (incrementotimer<fermasessione){
 /* alert("SESSIONE TERMINATA!"); 
 
 setTimeout( function(){window.location.href = "log-out.php"},10);
 */
 
 /* */
 document.getElementById("termine").innerHTML=
 ''+ '<style>'+ 'html {}'+ '</style>'+ ''+
 '<div class="nascondimi" style="position:fixed;bottom:0;top:0;left:0;width:100%;height:2rem;background-color:gray;">'+
 ''+ ''+ '<a href="log-out.php">'+
 ''+ '<span style="background-color:green;color:white;">Log Out</span>'+ '</a>'+ 
 ''+ '<span style="background-color:orange;color:black;">'+ ''+ '</span>'+ 
 ''+ ''+ ''+ ''+ 
 ''+ ''+ ''+ ''+ 
 '</div>'+
 ''+
 '';
 
 } 
 
 
 
 if (incrementotimer===fermasessione){
 /* alert("SESSIONE TERMINATA!"); 
 
 setTimeout( function(){window.location.href = "sign-in.php"},10);
 */
 
 /* */
 document.getElementById("termine").innerHTML=
 ''+ '<style>'+ 'html {}'+ '</style>'+ ''+
 '<div class="nascondimi" style="position:fixed;bottom:0;left:0;width:100%;height:2rem;background-color:gray;">'+
 ''+ ''+ '<a href="log-out.php">'+
 ''+ '<span style="background-color:green;color:white;">Log Out</span>'+ '</a>'+ 
 ''+ '<span style="background-color:orange;color:black;">'+ ''+ 
 ''+ ''+ ''+ ''+ 
 ''+ ''+ ''+ ''+ 
 '</div>'+
 ''+
 '';
 
 } 
 
 if (incrementotimer>fermasessione){
 /* alert("SESSIONE TERMINATA!"); 
 
 setTimeout( function(){window.location.href = "sign-in.php"},10);
 */
 
 /* */
 document.getElementById("termine").innerHTML=
 ''+ '<style>'+ 'html {}'+ '</style>'+ ''+
 '<div class="nascondimi" style="position:fixed;bottom:0;top:0;left:0;width:100%;height:2rem;background-color:magenta;">'+
 ''+ ''+ '<a href="log-out.php">'+
 ''+ '<span style="background-color:green;color:white;">Log Out</span>'+ '</a>'+ 
 ''+ '<span style="background-color:magenta;color:white;">'+ 'superato il limite'+ '</span>'+ 
 ''+ '<span>'+milli +''+ '</span>'+ 
 ''+ ''+ ''+ ''+ 
 '</div>'+
 ''+
 '';
 
 } 
 
 
 
 
 
 document.getElementById("unaltraprova").innerHTML=
 ' '+
 ' <div style="display:none;"> '+
 ' '+
 ''+inquestomomento+'<br>'+
 ''+
 
 
 ''+minuseco+'-<br>'+ 
 ''+
 ''+
 
 ''+inizio+'= '+ 
 ''+ 
 
 ''+ 
 '<span style="background-color:orange;">'+differenza+'</span>'+''+''+'<== indice contatore approssimato<br>'+
 ''+
 ''+milli+'<br>'+
 ''+
 ''+
 
 ''+''+'<br>'+incrementotimer+' '+'minuti'+''+'<br>'+''+
 ''+ giornis+ '<== giorno <br>'+
 ''+mesis+ '<== mese <br>'+
 ''+annis+ '<== anno <br>'+
 ''+
 '</div>'+
 ''+
 ''+
 
 
 ''+
 ''+
 ''+
 ''+
 
 ''+
 ''+
 ''+
 ''+
 ''+
 
 '';
 
 
 }
