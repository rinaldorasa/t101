/* ************** ************** ************** */
/* INSxx_dgebi_livelloZA.js                     */
/*                                              */
/* tttm da 1 a 98  [asincrono]                  */
/*                                              */
/*                20210913 18:55                */
/* ************** ************** ************** */

"use strict"

let INS01;let INS02;let INS03;let INS04;let INS05;let INS06;let INS07;let INS08;let INS09;let INS10;let INS11;let INS12;let INS13;let INS14;let INS15;let INS16;let INS17;let INS18;let INS19;let INS20;let INS21;let INS22;let INS23;let INS24;let INS25;let INS26;let INS27;let INS28;let INS29;let INS30;let INS31;let INS32;let INS33;let INS34;let INS35;let INS36;let INS37;let INS38;let INS39;let INS40;let INS41;let INS42;let INS43;let INS44;let INS45;let INS46;let INS47;let INS48;let INS49;let INS50;let INS51;let INS52;let INS53;let INS54;let INS55;let INS56;let INS57;let INS58;let INS59;let INS60;let INS61;let INS62;let INS63;let INS64;let INS65;let INS66;let INS67;let INS68;let INS69;let INS70;let INS71;let INS72;let INS73;let INS74;let INS75;let INS76;let INS77;let INS78;let INS79;let INS80;let INS81;let INS82;let INS83;let INS84;let INS85;let INS86;let INS87;let INS88;let INS89;let INS90;let INS91;let INS92;let INS93;let INS94;let INS95;let INS96;let INS97;let INS98;


INS01  = '<span class="badge bg-danger text-light fs-6 rounded"> INS01 </span>';
INS02  = '<span class="badge bg-danger text-light fs-6 rounded"> INS02 </span>';
INS03  = '<span class="badge bg-danger text-light fs-6 rounded"> INS03 </span>';
INS04  = '<span class="badge bg-danger text-light fs-6 rounded"> INS04 </span>';
INS05  = '<span class="badge bg-danger text-light fs-6 rounded"> INS05 </span>';
INS06  = '<span class="badge bg-danger text-light fs-6 rounded"> INS06 </span>';
INS07  = '<span class="badge bg-danger text-light fs-6 rounded"> INS07 </span>';
INS08  = '<span class="badge bg-danger text-light fs-6 rounded"> INS08 </span>';
INS09  = '<span class="badge bg-danger text-light fs-6 rounded"> INS09 </span>';
INS10  = '<span class="badge bg-danger text-light fs-6 rounded"> INS10 </span>';
INS11  = '<span class="badge bg-danger text-light fs-6 rounded"> INS11 </span>';
INS12  = '<span class="badge bg-danger text-light fs-6 rounded"> INS12 </span>';
INS13  = '<span class="badge bg-danger text-light fs-6 rounded"> INS13 </span>';
INS14  = '<span class="badge bg-danger text-light fs-6 rounded"> INS14 </span>';
INS15  = '<span class="badge bg-danger text-light fs-6 rounded"> INS15 </span>';
INS16  = '<span class="badge bg-danger text-light fs-6 rounded"> INS16 </span>';
INS17  = '<span class="badge bg-danger text-light fs-6 rounded"> INS17 </span>';
INS18  = '<span class="badge bg-danger text-light fs-6 rounded"> INS18 </span>';
INS19  = '<span class="badge bg-danger text-light fs-6 rounded"> INS19 </span>';
INS20  = '<span class="badge bg-danger text-light fs-6 rounded"> INS20 </span>';
INS21  = '<span class="badge bg-danger text-light fs-6 rounded"> INS21 </span>';
INS22  = '<span class="badge bg-danger text-light fs-6 rounded"> INS22 </span>';
INS23  = '<span class="badge bg-danger text-light fs-6 rounded"> INS23 </span>';
INS24  = '<span class="badge bg-danger text-light fs-6 rounded"> INS24 </span>';
INS25  = '<span class="badge bg-danger text-light fs-6 rounded"> INS25 </span>';
INS26  = '<span class="badge bg-danger text-light fs-6 rounded"> INS26 </span>';
INS27  = '<span class="badge bg-danger text-light fs-6 rounded"> INS27 </span>';
INS28  = '<span class="badge bg-danger text-light fs-6 rounded"> INS28 </span>';
INS29  = '<span class="badge bg-danger text-light fs-6 rounded"> INS29 </span>';
INS30  = '<span class="badge bg-danger text-light fs-6 rounded"> INS30 </span>';
INS31  = '<span class="badge bg-danger text-light fs-6 rounded"> INS31 </span>';
INS32  = '<span class="badge bg-danger text-light fs-6 rounded"> INS32 </span>';
INS33  = '<span class="badge bg-danger text-light fs-6 rounded"> INS33 </span>';
INS34  = '<span class="badge bg-danger text-light fs-6 rounded"> INS34 </span>';
INS35  = '<span class="badge bg-danger text-light fs-6 rounded"> INS35 </span>';
INS36  = '<span class="badge bg-danger text-light fs-6 rounded"> INS36 </span>';
INS37  = '<span class="badge bg-danger text-light fs-6 rounded"> INS37 </span>';
INS38  = '<span class="badge bg-danger text-light fs-6 rounded"> INS38 </span>';
INS39  = '<span class="badge bg-danger text-light fs-6 rounded"> INS39 </span>';
INS40  = '<span class="badge bg-danger text-light fs-6 rounded"> INS40 </span>';
INS41  = '<span class="badge bg-danger text-light fs-6 rounded"> INS41 </span>';
INS42  = '<span class="badge bg-danger text-light fs-6 rounded"> INS42 </span>';
INS43  = '<span class="badge bg-danger text-light fs-6 rounded"> INS43 </span>';
INS44  = '<span class="badge bg-danger text-light fs-6 rounded"> INS44 </span>';
INS45  = '<span class="badge bg-danger text-light fs-6 rounded"> INS45 </span>';
INS46  = '<span class="badge bg-danger text-light fs-6 rounded"> INS46 </span>';
INS47  = '<span class="badge bg-danger text-light fs-6 rounded"> INS47 </span>';
INS48  = '<span class="badge bg-danger text-light fs-6 rounded"> INS48 </span>';
INS49  = '<span class="badge bg-danger text-light fs-6 rounded"> INS49 </span>';
INS50  = '<span class="badge bg-danger text-light fs-6 rounded"> INS50 </span>';
INS51  = '<span class="badge bg-danger text-light fs-6 rounded"> INS51 </span>';
INS52  = '<span class="badge bg-danger text-light fs-6 rounded"> INS52 </span>';
INS53  = '<span class="badge bg-danger text-light fs-6 rounded"> INS53 </span>';
INS54  = '<span class="badge bg-danger text-light fs-6 rounded"> INS54 </span>';
INS55  = '<span class="badge bg-danger text-light fs-6 rounded"> INS55 </span>';
INS56  = '<span class="badge bg-danger text-light fs-6 rounded"> INS56 </span>';
INS57  = '<span class="badge bg-danger text-light fs-6 rounded"> INS57 </span>';
INS58  = '<span class="badge bg-danger text-light fs-6 rounded"> INS58 </span>';
INS59  = '<span class="badge bg-danger text-light fs-6 rounded"> INS59 </span>';
INS60  = '<span class="badge bg-danger text-light fs-6 rounded"> INS60 </span>';
INS61  = '<span class="badge bg-danger text-light fs-6 rounded"> INS61 </span>';
INS62  = '<span class="badge bg-danger text-light fs-6 rounded"> INS62 </span>';
INS63  = '<span class="badge bg-danger text-light fs-6 rounded"> INS63 </span>';
INS64  = '<span class="badge bg-danger text-light fs-6 rounded"> INS64 </span>';
INS65  = '<span class="badge bg-danger text-light fs-6 rounded"> INS65 </span>';
INS66  = '<span class="badge bg-danger text-light fs-6 rounded"> INS66 </span>';
INS67  = '<span class="badge bg-danger text-light fs-6 rounded"> INS67 </span>';
INS68  = '<span class="badge bg-danger text-light fs-6 rounded"> INS68 </span>';
INS69  = '<span class="badge bg-danger text-light fs-6 rounded"> INS69 </span>';
INS70  = '<span class="badge bg-danger text-light fs-6 rounded"> INS70 </span>';
INS71  = '<span class="badge bg-danger text-light fs-6 rounded"> INS71 </span>';
INS72  = '<span class="badge bg-danger text-light fs-6 rounded"> INS72 </span>';
INS73  = '<span class="badge bg-danger text-light fs-6 rounded"> INS73 </span>';
INS74  = '<span class="badge bg-danger text-light fs-6 rounded"> INS74 </span>';
INS75  = '<span class="badge bg-danger text-light fs-6 rounded"> INS75 </span>';
INS76  = '<span class="badge bg-danger text-light fs-6 rounded"> INS76 </span>';
INS77  = '<span class="badge bg-danger text-light fs-6 rounded"> INS77 </span>';
INS78  = '<span class="badge bg-danger text-light fs-6 rounded"> INS78 </span>';
INS79  = '<span class="badge bg-danger text-light fs-6 rounded"> INS79 </span>';
INS80  = '<span class="badge bg-danger text-light fs-6 rounded"> INS80 </span>';
INS81  = '<span class="badge bg-danger text-light fs-6 rounded"> INS81 </span>';
INS82  = '<span class="badge bg-danger text-light fs-6 rounded"> INS82 </span>';
INS83  = '<span class="badge bg-danger text-light fs-6 rounded"> INS83 </span>';
INS84  = '<span class="badge bg-danger text-light fs-6 rounded"> INS84 </span>';
INS85  = '<span class="badge bg-danger text-light fs-6 rounded"> INS85 </span>';
INS86  = '<span class="badge bg-danger text-light fs-6 rounded"> INS86 </span>';
INS87  = '<span class="badge bg-danger text-light fs-6 rounded"> INS87 </span>';
INS88  = '<span class="badge bg-danger text-light fs-6 rounded"> INS88 </span>';
INS89  = '<span class="badge bg-danger text-light fs-6 rounded"> INS89 </span>';
INS90  = '<span class="badge bg-danger text-light fs-6 rounded"> INS90 </span>';
INS91  = '<span class="badge bg-danger text-light fs-6 rounded"> INS91 </span>';
INS92  = '<span class="badge bg-danger text-light fs-6 rounded"> INS92 </span>';
INS93  = '<span class="badge bg-danger text-light fs-6 rounded"> INS93 </span>';
INS94  = '<span class="badge bg-danger text-light fs-6 rounded"> INS94 </span>';
INS95  = '<span class="badge bg-danger text-light fs-6 rounded"> INS95 </span>';
INS96  = '<span class="badge bg-danger text-light fs-6 rounded"> INS96 </span>';
INS97  = '<span class="badge bg-danger text-light fs-6 rounded"> INS97 </span>';
INS98  = '<span class="badge bg-danger text-light fs-6 rounded"> INS98 </span>';



let oggi = new Date(); let msecdalmillenovecentosettanta = oggi.getTime(); let msec = msecdalmillenovecentosettanta;

//INS01 = COD01ini + INFOR01A  + msecdalmillenovecentosettanta + COD01fin;

let wFinestra____Rem, hFinestra____Rem; wFinestra____Rem = document.documentElement.clientWidth/16;hFinestra____Rem = document.documentElement.clientHeight/16;
let altezzaFOGLIO = hFinestra____Rem ; // standard


INS01 = '<div class="fs-6 text-start fw-bold border border-1 border-dark ptmono" style="position:relative;z-index:10000;width:100%;height:'+altezzaFOGLIO+'rem;overflow:auto!important;">'+
         '<img src="mattdima.jpg" alt="" style="max-width:100%;">'+
         '1 <a href=""> questa è una nuova prova</a> '+'<br>'+
         '2  questa è una nuova prova '+'<br>'+
         '3  questa è una nuova prova '+'<br>'+
         '4  questa è una nuova prova '+'<br>'+
         '5  questa è una nuova prova '+'<br>'+
         '6  questa è una nuova prova '+'<br>'+
         '7  questa è una nuova prova '+'<br>'+
         '8  questa è una nuova prova '+'<br>'+
         '9  questa è una nuova prova '+'<br>'+
         '10 questa è una nuova prova '+'<br>'+
         '11 questa è una nuova prova '+'<br>'+
         '12 questa è una nuova prova '+'<br>'+
         '13 questa è una nuova prova '+'<br>'+
         '14 questa è una nuova prova '+'<br>'+
         '15 questa è una nuova prova '+'<br>'+
         '16 questa è una nuova prova '+'<br>'+
         '17 questa è una nuova prova '+'<br>'+
         '18 questa è una nuova prova '+'<br>'+
         '19 questa è una nuova prova '+'<br>'+
         '20 questa è una nuova prova '+'<br>'+
         '21 questa è una nuova prova '+'<br>'+
         '22 questa è una nuova prova '+'<br>'+
         '23 questa è una nuova prova '+'<br>'+
         '24 questa è una nuova prova '+'<br>'+
         '25 questa è una nuova prova '+'<br>'+
         '26 questa è una nuova prova '+'<br>'+
         '27 questa è una nuova prova '+'<br>'+
         '28 questa è una nuova prova '+'<br>'+
         '29 questa è una nuova prova '+'<br>'+
         '30 questa è una nuova prova '+'<br>'+
         '31 questa è una nuova prova '+'<br>'+
         '32 questa è una nuova prova '+'<br>'+
         '33 questa è una nuova prova '+'<br>'+
         '34 questa è una nuova prova '+'<br>'+
         '35 questa è una nuova prova '+'<br>'+
         '36 questa è una nuova prova '+'<br>'+
         '37 questa è una nuova prova '+'<br>'+
         '38 questa è una nuova prova '+'<br>'+
         '39 questa è una nuova prova '+'<br>'+
         '40 questa è una nuova prova '+'<br>'+


		 
		  msec+


		'</div> ';
		
		
		
		
		
		
		
		
		



