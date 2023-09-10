<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="generator" content="AlterVista - Editor HTML"/>
  <title>
  
  DECRI
  
  </title>
  
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
  
  <script src="aes.js"></script>
  
   <style>
  html * {/* font-size:2.75rem;  */ font-family:monospace;}
  </style> 
  <!-- -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js"></script>


<script>FontSizeStandard__=2.75;</script>


</head>
<body>
<hr>

<details><summary></summary>
<a href="https://github.com/brix/crypto-js/issues/127">link</a>
</details>

<hr>
VEDI IL TESTO (attenzione decifro da una lista prefissata) <br>
non sono dinamico
<hr>
<div id="plaintext"><div class="spinner-border text-danger" role="status">
  <span class="visually-hidden">Loading...</span>
</div></div> 
<hr>
<script>
// Decrypt

/*
ciphertext="";

ciphertext="U2FsdGVkX1+739VRLsdsYZb5PpHkmU9l3VPh0BEcU9I=";
ciphertext="U2FsdGVkX194DyBtT65GzZEJLguxTrA7lWzB2WvlPpg=";
ciphertext="U2FsdGVkX18Wi00J+u5tXWQ+8D303UqmTxR8/ECKOLmc9y7mr8PdbCRmL7x3/tnK62bnhrDtnvbTtzqBvFOXcg==";

// 
ciphertext="U2FsdGVkX1+NGv7mA43AQnU9wFrJbqQJiRUr76SWEpSN4tEr925wQIVWAJX8z1aMslTYfk6FrBL/nW8IYKXOzG7uEhW7FZ/yw2pe0Jg8c+6Ny6Fl/g0zVBywZ8EHtpgrHLyuenzOdoXoJQ5g40Gmsw==";


ciphertext="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";

*/

ciphertext=[""];

ciphertext[0]="U2FsdGVkX1+739VRLsdsYZb5PpHkmU9l3VPh0BEcU9I=";
ciphertext[1]="U2FsdGVkX194DyBtT65GzZEJLguxTrA7lWzB2WvlPpg=";
ciphertext[2]="U2FsdGVkX18Wi00J+u5tXWQ+8D303UqmTxR8/ECKOLmc9y7mr8PdbCRmL7x3/tnK62bnhrDtnvbTtzqBvFOXcg==";
ciphertext[3]="U2FsdGVkX1+NGv7mA43AQnU9wFrJbqQJiRUr76SWEpSN4tEr925wQIVWAJX8z1aMslTYfk6FrBL/nW8IYKXOzG7uEhW7FZ/yw2pe0Jg8c+6Ny6Fl/g0zVBywZ8EHtpgrHLyuenzOdoXoJQ5g40Gmsw==";
ciphertext[4]="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";


ciphertext[5]="U2FsdGVkX18keAkeilaOQlssHKfXTzXVGY+ck1zCi0o=U2FsdGVkX18/53pcYh11pOyjy6tcRFYv4gXIxelMAbY3A9PwKLCyeg6sxzghQ2fX";

ciphertext[5]="U2FsdGVkX18keAkeilaOQlssHKfXTzXVGY+ck1zCi0o=";

ciphertext[6]="U2FsdGVkX18/53pcYh11pOyjy6tcRFYv4gXIxelMAbY3A9PwKLCyeg6sxzghQ2fX";


ciphertext[7]="U2FsdGVkX18keAkeilaOQlssHKfXTzXVGY+ck1zCi0o=U2FsdGVkX18/53pcYh11pOyjy6tcRFYv4gXIxelMAbY3A9PwKLCyeg6sxzghQ2fX13 agosto 2023 ore 1923 aggiunto 16 agosto 2023 ore 19:32 -----aggio 16 agosto 2023 ore 19:39----U2FsdGVkX1/ertZvYcFUAEZnePW3DDTwIJByysY0m3l1xfZne81c/Hi7B1DA8S4DZuYOO1ICahCWOzPDxZ5e4A==---ultimo aggiornamento alle ore 0233 del 17 agosto 2023--- U2FsdGVkX1/+FQ9z4MUp7KW6niPA6UqHm4pfAyiE+NQ=se scrivo qui il testo DEVE essere cifrato prima di essere passato al save fileU2FsdGVkX187tynw4kkhmEXO49WQPT07oxSD9zWYvGg+++0914++++++0914++++++0914++++++0914++++++0914++++++0914++++++0914++++++0914++++++0914++++++0914++++++0914++++++0914+++U2FsdGVkX1+isBojvRxZvYXfX6iPzKg73yYUtFQrJ+M=U2FsdGVkX1+isBojvRxZvYXfX6iPzKg73yYUtFQrJ+M=U2FsdGVkX1+isBojvRxZvYXfX6iPzKg73yYUtFQrJ+M=+++test+++U2FsdGVkX1/kKJGar55hXKyVrRJe3Zi2/p20YH+BQyeUkeFDnsaHVJXQnMr8HTE+MeF8JSkovIqLdMSY6e/7pw==U2FsdGVkX1/kKJGar55hXKyVrRJe3Zi2/p20YH+BQyeUkeFDnsaHVJXQnMr8HTE+MeF8JSkovIqLdMSY6e/7pw==+++";




// testo da decifrare
testocifrato__=ciphertext[7];


<?
$USER__="rsa";

$USER__="rld";

if( $USER__==="rld"){
$PASSAPAROLA =" PASSWORD__='a b c';";

echo $PASSAPAROLA;

} else {}

?>

//  PASSWORD__='a b c';

    // var bytes  = CryptoJS.AES.decrypt(ciphertext.toString(), 'secret key 123');
    // var bytes  = CryptoJS.AES.decrypt(ciphertext.toString(), 'a b c');
    // var bytes  = CryptoJS.AES.decrypt(ciphertext.toString(), PASSWORD__);
             
        
		var bytes  = CryptoJS.AES.decrypt(testocifrato__.toString(), PASSWORD__);
		
        var plaintext = bytes.toString(CryptoJS.enc.Utf8);
       // console.log(plaintext);
		document.getElementById("plaintext").innerHTML=plaintext;
		
</script>


<div id="SETTAGGI__"></div>
<script>
document.getElementById("SETTAGGI__").innerHTML=''
+'<style>'
+'html * {font-size:'+(FontSizeStandard__*0.5)+'rem;}'
+''
+''
+'</style>'

+''
;


</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>

  





