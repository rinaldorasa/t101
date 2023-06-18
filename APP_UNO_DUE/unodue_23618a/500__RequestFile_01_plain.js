

let DirectoryDove_File_01__="./txt/";
DirectoryDove_File_01__="";
  let File_01__="Commento.txt";
  // intercetta un altro nome di file diverso da default
File_01__=document.getElementById("INPUT_NOME_FILE__").value;



 File_01__ = DirectoryDove_File_01__+File_01__ + "?"+(new Date().getTime()) + (Math.random()) ; 
  let Richiedo_01__ = new XMLHttpRequest();
    
  Richiedo_01__.open("GET",File_01__,false);
  Richiedo_01__.onreadystatechange = function(){let Trovato_01__ = Richiedo_01__.responseText;
          
      Commento_01__ =    Trovato_01__;
      // 
         document.getElementById("VISUALIZZA_COMMENTO_01__").innerHTML=
`

<div style="font-size:`+(FonteDinamica__*0.75)+`rem;BORDER:dashed 0.25REM MAGENTA;">

${Commento_01__}

</div>

`;

      // alert(Commento_01__);
          
  } ; Richiedo_01__.send();



