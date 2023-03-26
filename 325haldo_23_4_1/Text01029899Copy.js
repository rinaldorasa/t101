/*
	
	
File da cercare 2023:03:21 08:39


(new Date().getTime()) 

 (Math.random())


*/

// Elenco dei file





// PIANOTERRA
  let File_01="TextToDo317.txt";
  File_01 = File_01 + "?"+(new Date().getTime()) + (Math.random()) ; 
  
  let Richiedo_01 = new XMLHttpRequest();
  
		Richiedo_01.open("GET",File_01,false);
		Richiedo_01.onreadystatechange = function(){
		let Trovato_01 = Richiedo_01.responseText;
		//	alert(Trovato_01);
		
		// 		
		NodoTextTest =	Trovato_01;
		
		}
		Richiedo_01.send();



 let File_02="TextAggiuntivo.txt";
 File_02 = File_02  + "?"+(new Date().getTime()) + (Math.random()) ;
 
  
  let Richiedo_02 = new XMLHttpRequest();
  
		Richiedo_02.open("GET",File_02,false);
		Richiedo_02.onreadystatechange = function(){
		let Trovato_02 = Richiedo_02.responseText;

		//	alert("NodoTextTest= "+NodoTextTest);
		//	
		//	alert("Trovato_02= "+Trovato_02);
		
		// 		
		
		// VARIAZIONE PER PIANOTERRA
		// NodoTextTest =	NodoTextTest + Trovato_02;
		
		NodoTextTest =	Trovato_01;
		
		}
		Richiedo_02.send();












// PRIMOPIANO
  let File_98="TextToDo317.txt";
  File_98 = File_98 + "?"+(new Date().getTime()) + (Math.random()) ;

 
  let Richiedo_98 = new XMLHttpRequest();
  
		Richiedo_98.open("GET",File_98,false);
		Richiedo_98.onreadystatechange = function(){
		let Trovato_98 = Richiedo_98.responseText;
		//	alert(Trovato_98);
		
		// 		
		TextTestNodo =	Trovato_98;
		
		}
		Richiedo_98.send();


  let File_99="TextAggiuntivo.txt";
  File_99 = File_99 + "?"+(new Date().getTime()) + (Math.random()) ;
  
  let Richiedo_99 = new XMLHttpRequest();
  
		Richiedo_99.open("GET",File_99,false);
		Richiedo_99.onreadystatechange = function(){
		let Trovato_99 = Richiedo_99.responseText;

		//			alert("TextTestNodo= "+TextTestNodo);
		//	
		//			alert("Trovato_99= "+Trovato_99);
		
		// 		
		
		
		// TextTestNodo =	TextTestNodo + Trovato_99;
		// 
		// VARIAZIONE PER PRIMOPIANO
		
		TextTestNodo =	Trovato_99;
		
		}
		Richiedo_99.send();


