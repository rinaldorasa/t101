document.getElementById('rr-dropmenu').innerHTML=
' <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> '+

''+' <style> '+

' dropmenu versione 20020 02 14'+

'/* debugging */ '+
' .rr-bordo000{border:solid 0px lime;}'+
' .rr-bordo111{border:solid 0px blue;} '+
' .rr-bordo121{border:solid 0px orange;} '+
' .rr-bordo131{border:solid 0px fuchsia;} '+
''+

'.rr-dropmenu000{'+ 
' position: fixed;'+
' top: 0; '+
' left:0; width:100%; '+
''+ ' height:3em; '+
' } '+

'.rr-dropmenu111{'+
' position: fixed;'+ 
' top: 0px; '+
' left:50%;'+ 
'  margin-left:-50%;  '+
' } '+

'.rr-dropmenu121{ '+
' margin-left:-0em;'+ 
' border-radius:4px;'+
' } '+
''+

'.rr-dropmenu131{position:relative; display:none;} '+
''+
' .rr-dropmenu111:hover .rr-dropmenu131{ '+
' width:32em; '+'  width:24em;  '+
' height:3em; '+
''+
''+
' border-radius:4px; '+
' display:block;'+
' } '+


' .rr-dropmenu111:hover .rr-dropmenu121{'+
' display:none;}'+
' '+

''+' </style> '+



' <div class="'+
'rr-dropmenu000 rr-bgc000 rr-bordo000'+
'"> </div> '+


'<div class="rr-dropmenu111 rr-bordo111 rr-bgc111">'+

'<div class="material-icons rr-dropmenu121 rr-bgc121"'+
' style="border:solid 1px rgba(0,0,0,0.5);">'+
'menu</div>'+

''+
'<div class="rr-dropmenu131 rr-bordo131 rr-bgc131">'+

''+
'<a href="#rr-modale">'+
'<span class="material-icons" '+
'style="position:absolute;'+ 
'left:30%;'+
'font-size:3em; '+
'border-radius:4px;'+
'">'+
'info</span>'+
'</a>'+
''+

''+
'<a href="#fine">'+
'<span class="material-icons"'+ 
'style="position:absolute; left:60%;'+
'font-size:3em;'+

'border-radius:4px;'+
'">'+
'keyboard_arrow_down </span>'+
'</a>'+
''+
'<a href="#">'+
'<span class="material-icons" '+
'style="position:absolute; left:80%;'+
'font-size:3em;'+

'border-radius:4px;'+
'">'+
'keyboard_arrow_up </span>'+
'</a>'+
''+




' </div> '+

' </div> '+

' '
