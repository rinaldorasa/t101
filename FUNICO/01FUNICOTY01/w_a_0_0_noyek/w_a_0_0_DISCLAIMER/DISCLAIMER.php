<?php echo '';

echo '
<section id="DOMANDA" style="overflow:auto;">
<article>

<header style="position:fixed; top:0%; left:0%; width:100%; background-color:white; font-size:3.5rem; font-family:monospace;">

<p style="padding:0.5rem; color:navy; font-weight:bold; font-variant:small-caps; text-align:left;">
il programma raccoglie dati 
sei d\'accordo?
</p>
<p style="padding:0.5rem; color:navy;  font-weight:bold; font-variant:small-caps; text-align:left;">
the program collects data, do you agree?
</p>

<details open="true"><summary style="font-size:auto; opacity:0.250;" class="ui raised olive inverted segment">...</summary>
<button onclick="ok()" style="width:100%; font-family:monospace;">

<!-- <hr>  -->

<p style="color:green; font-size:3.5rem; font-variant:small-caps;" class="ui button">
accetto e proseguo/I accept and continue
</p>
<hr>
</button>
<button onclick="ko()" style="position:fixed; bottom:0%; left:0%; width:100%; background-color:yellow; color:red;  font-size:3.5rem; font-family:monospace; font-weight:bold; font-variant:small-caps; border:dashed 0.15rem red; border-radius:0.50rem;">
non sono d\'accordo e termino il programma/I disagree and end the program
</button>
</details>
</header>


<footer>

</footer>
</article>
</section>

<script>

function ok(){
// alert("ok");
document.querySelector("#DOMANDA").style.display="none";
};

function ko(){
// alert("ko");
document.querySelector("html").style.display="none";

};


</script>

';


?>
