


function Richiedo_File_V15(){
File_V15__="PhpCBDUnoDueV15_wip.txt";

Richiedo_V15__ = new XMLHttpRequest();

Richiedo_V15__.open("GET",File_V15__,false);
Richiedo_V15__.onreadystatechange = function(){
Trovato_V15__ = Richiedo_V15__.responseText;

alert(Trovato_V15__);


} ; Richiedo_V15__.send();

};




