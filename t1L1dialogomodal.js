document.getElementById("L1dialogomodal").innerHTML = 
''+
  ' <p style="display:none;"> '+
  ' Size iniziale '+window.innerWidth+
  'px '+
  ' </p> '+ 
  

' <style> '+

' .modale{'+
' position:fixed;'+
' top:0;left:0;bottom:0;right:0; '+
' pointer-events:none;opacity:0; '+
' background-color:black;'+
' padding:1em;'+
' overflow:auto !important;'+
' border-radius:0.0em;'+
' z-index:100;'+
' }'+

' .modale:target{'+
' pointer-events:auto;opacity:1; '+
' }'+

' .modalecontenuto{'+
' width:70%;height:70%; '+
' margin-left:15%;'+
' padding:1em;'+
' border:solid 0.2em burlywood;'+
' background-color:oldlace;'+
' border-radius:0.6em;'+
' }'+

' </style> '+

' <div class="modale" id="modale">'+
'  <div class="modalecontenuto">'+
'   <a href="#" style="'+
'    font-size:2em;'+
'    border:solid 0.05em rgba(0,0,0,0.0);'+
'    ">'+
'    <i class="times circle icon"'+
'    style="color:maroon;">'+
'    </i>'+
'   </a>'+


'<a href="http://venexiatre.altervista.org/WORKOU/OGGI/20191119/20191119f_1-CREEK.html"'+
'style="font-size:2em;'+
'border:solid 1px black;'+
'border-radius:0.2em;" >'+
'<i class="home icon"></i></a>'+

'<a href="http://edoraandiamo.altervista.org/i/index.html"'+
'style="margin-left:0.5em; '+
'font-size:2em;'+
'border:solid 1px black;'+
'border-radius:0.2em;" >'+
'<i class="user circle outline icon"></i></a>'+

'<p><hr/></p>'+


' <p style="'+
' position:relative;'+
' padding:0.1em;'+
' border:solid 0.2em rgba(0,0,0,0.1);'+
' border-radius:0.4em; '+
'"> '+
' <span onclick="showElement()" '+
' style=" cursor:pointer; font-size:1.5em;  "'+
' >'+
' <i class="eye icon">'+
'</i></span> '+

' <span onclick="hideElement()" '+
' style=" cursor:pointer; font-size:1.5em;  "'+
' >'+
' <i class="eye slash icon">'+
'</i></span> '+

' <table class="versionedelprogramma"'+
' style="position:absolute; top:50%;'+
' visibility:hidden;">'+
' <tbody><tr><td>'+

'          vers.202004241245        '+

' </td>'+' <td>'+'&nbsp;'+' </td>'+

' <td style="visibility:show;">'+
' <span style="cursor:pointer;"'+
'  onclick="dimschermo()" '+
' >'+
' <i class="tablet alternate icon">'+
' </i></span>'+
' </td>'+

' <td>'+
' <span class="ui mini secondary button"'+
'  onClick="window.location.reload();"'+
' > '+
' <i class="undo icon"></i>'+
' </span>'+
' '+
' '+

' </td>'+


' </tr>'+
' </tbody>'+
' </table>'+

' </p> '+



'     <p style="border:solid 0.05em rgba(0,0,0,0.1);"> '+
'     underground software distillery &copy;2020 '+
'     </p> '+

' <article class="sixteen wide column">'+
' <div id="aforall"style="">'
' </div>'+
' </article>'+

'  '+
'  </div>'+
' </div>'+


''
;

function dimschermo() { function gebID(id){ return document.getElementById(id); }   function gebTN(tagName, parentEl){       if( typeof parentEl == "undefined" ) var parentEl = document;      return parentEl.getElementsByTagName(tagName);   }   function setStyleToTags(parentEl, tagName, styleString){     var tags = gebTN(tagName, parentEl);     for( var i = 0; i<tags.length; i++ ) tags[i].setAttribute('style', styleString);   }   function testSizes(){     gebID( 'screen.Width' ).innerHTML = screen.width;     gebID( 'screen.Height' ).innerHTML = screen.height;     gebID( 'window.Width' ).innerHTML = window.innerWidth;     gebID( 'window.Height' ).innerHTML = window.innerHeight;     gebID( 'documentElement.Width' ).innerHTML = document.documentElement.clientWidth;     gebID( 'documentElement.Height' ).innerHTML = document.documentElement.clientHeight;     gebID( 'body.Width' ).innerHTML = gebTN("body")[0].clientWidth;     gebID( 'body.Height' ).innerHTML = gebTN("body")[0].clientHeight;     }   var table = document.createElement('table');   table.innerHTML =         "<tr><th>SOURCE</th><th>WIDTH</th><th>x</th><th>HEIGHT</th></tr>"       +"<tr><td>screen</td><td id='screen.Width' /><td>x</td><td id='screen.Height' /></tr>"       +"<tr><td>window</td><td id='window.Width' /><td>x</td><td id='window.Height' /></tr>"       +"<tr><td>document<br>.documentElement</td><td id='documentElement.Width' /><td>x</td><td id='documentElement.Height' /></tr>"       +"<tr><td>document.body</td><td id='body.Width' /><td>x</td><td id='body.Height' /></tr>"   ;   gebTN("body")[0].appendChild( table );   table.setAttribute(      'style',      "border: 2px solid black !important; position: fixed !important;"      +"left: 50% !important; top: 0px !important; padding:10px !important;"      +"width: 150px !important; font-size:18px; !important"      +"white-space: pre !important; font-family: monospace !important;"      +"z-index: 9999 !important;background: white !important;"   );   setStyleToTags(table, "td", "color: black !important; border: none !important; padding: 5px !important; text-align:center !important;");   setStyleToTags(table, "th", "color: black !important; border: none !important; padding: 5px !important; text-align:center !important;");   table.style.setProperty( 'margin-left', '-'+( table.clientWidth / 2 )+'px' );   setInterval( testSizes, 200 );      }

