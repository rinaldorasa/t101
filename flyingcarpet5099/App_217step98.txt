<main id="MAIN" class="da_mo" lang="it">



<div id="VERSIONE_TEST" class="da_mo"> 


<div id="VERSIONE_TEST_NESTED" style="margin-bottom:25rem;padding: 1rem 5rem 10rem 5rem;border:solid 0.00rem olive;">



half0a0 prototype00... step:2023:02:18::18:10 <br><br>


<pre style="background-color:black;color:lime;font-size:inherit;overflow:auto;">

+---------------------------------------------
|                
| MAIN           
+-------+--------+----------------------------
|       |                | BUONGIORNO_0101
|       |                | POMERIGGIO_0202
|       | APPLICAZIONE   | CONTINUA
|       |                |
|       |                |
|       +----------------+--------------------
|       |                |
|       | VERSIONE_TEST  |VERSIONE_TEST_NESTED
|       +----------------+--------------------
|       |                |
|       | TEST_0101      |
|       |                |
|       +----------------+--------------------
|       |                |
|       | TOG_NO         |
|       |                |
|       +----------------+--------------------
|       |                |
|       | TOG_SI         |
|       |                |
|       +----------------+--------------------------
|       |                        |
|       | CONTENITORE_INPUT_0101 | INPUT_SCELTO_0101
|       |                        |
|       +----------------+--------------------------
|       |                |
|       | LISTA_0101     |
|       |                |
|       +----------------+--------------------
|       |                |
|       |             functions
|       |                |
|       +----------------+--------------------
|       |                |
|       | EstNaN&#40;&#41;&#123;&#125;
|       |                |
|       +----------------+--------------------
|       |                |
|       | dimolarem&#40;&#41;&#123;&#125;
|       |                |
|       +----------------+--------------------
|       |                |
|       | sonda_Input_0101&#40;arg0,arg1,arg2,arg3&#41;&#123;&#125;
|       |                |
|       +----------------+--------------------
|       |                |
|       | Tog_No&#40;&#41;&#123;&#125;
|       |                |
|       +----------------+--------------------
|       |                |
|       | Tog_Si&#40;&#41;&#123;&#125;
|       |                |
|       +----------------+--------------------
|       |                |
|       |                |
|       |                |
|       +----------------+--------------------
|       |                |
|       |                |
|       |                |
|       +----------------+--------------------
|       |                |
|       |                |
|       |                |
|       +----------------+--------------------





</pre>


<hr>
<div>empscripten installazione</div>
<pre style="background-color:black;color:orange;font-size:inherit; overflow:auto; ">

Microsoft Windows [Version 10.0.19045.2546]
(c) Microsoft Corporation. All rights reserved.


F:\&#62;dir
  
  

 Directory of F:\

09/02/2023  19:18           110.298 emsdk-main.zip

F:\&#62;cd emsdk-main

F:\emsdk-main&#62;dir
  
  

 Directory of F:\emsdk-main

09/02/2023  19:20    &#60;DIR&#62;          .
09/02/2023  19:20    &#60;DIR&#62;          ..
30/01/2023  15:46    &#60;DIR&#62;          emsdk-main
               0 File(s)              0 bytes
               3 Dir(s)  39.311.802.368 bytes free

F:\emsdk-main&#62;cd emsdk-main

F:\emsdk-main\emsdk-main&#62;dir
  
  

 Directory of F:\emsdk-main\emsdk-main

09/02/2023  19:20    &#60;DIR&#62;          .
09/02/2023  19:20    &#60;DIR&#62;          ..
30/01/2023  15:46               405 .dockerignore
30/01/2023  15:46               418 .flake8
30/01/2023  15:46               470 .gitignore
30/01/2023  15:46             1.326 LICENSE
30/01/2023  15:46            12.373 README.md
30/01/2023  15:46                26 emcmdprompt.bat
30/01/2023  15:46             9.375 emscripten-releases-tags.json
30/01/2023  15:46             1.642 emsdk
30/01/2023  15:46             1.564 emsdk.bat
30/01/2023  15:46             1.393 emsdk.ps1
30/01/2023  15:46           115.073 emsdk.py
30/01/2023  15:46                33 emsdk_env.bat
30/01/2023  15:46               566 emsdk_env.csh
30/01/2023  15:46               304 emsdk_env.fish
30/01/2023  15:46                98 emsdk_env.ps1
30/01/2023  15:46             1.977 emsdk_env.sh
30/01/2023  15:46            21.675 emsdk_manifest.json
30/01/2023  15:46               659 legacy-binaryen-tags.txt
30/01/2023  15:46             1.190 legacy-emscripten-tags.txt
30/01/2023  15:46             2.380 llvm-tags-64bit.txt
30/01/2023  15:46    &#60;DIR&#62;          .circleci
30/01/2023  15:46    &#60;DIR&#62;          .github
30/01/2023  15:46    &#60;DIR&#62;          bazel
30/01/2023  15:46    &#60;DIR&#62;          docker
30/01/2023  15:46    &#60;DIR&#62;          scripts
30/01/2023  15:46    &#60;DIR&#62;          test
              20 File(s)        172.947 bytes
               8 Dir(s)  39.311.802.368 bytes free

F:\emsdk-main\emsdk-main&#62;emsdk
Missing command; Type 'emsdk help' to get a list of commands.

F:\emsdk-main\emsdk-main&#62;emsdk help
 emsdk: Available commands:

   emsdk list [--old] [--uses]  - Lists all available SDKs and tools and their
                                  current installation status. With the --old
                                  parameter, also historical versions are
                                  shown. If --uses is passed, displays the
                                  composition of different SDK packages and
                                  dependencies.

   emsdk update                 - Updates emsdk to the newest version. If you have
                                  bootstrapped emsdk via cloning directly from
                                  GitHub, call "git pull" instead to update emsdk.

   emsdk install [options] &#60;tool 1&#62; &#60;tool 2&#62; &#60;tool 3&#62; ...
                                - Downloads and installs given tools or SDKs.
                                  Options can contain:

                         -j&#60;num&#62;: Specifies the number of cores to use when
                                  building the tool. Default: use one less
                                  than the # of detected cores.

                  --build=&#60;type&#62;: Controls what kind of build of LLVM to
                                  perform. Pass either 'Debug', 'Release',
                                  'MinSizeRel' or 'RelWithDebInfo'. Default:
                                  'Release'.

              --generator=&#60;type&#62;: Specifies the CMake Generator to be used
                                  during the build. Possible values are the
                                  same as what your CMake supports and whether
                                  the generator is valid depends on the tools
                                  you have installed. Defaults to 'Unix Makefiles'
                                  on *nix systems. If generator name is multiple
                                  words, enclose with single or double quotes.

                       --shallow: When installing tools from one of the git
                                  development branches, this parameter can be
                                  passed to perform a shallow git clone instead
                                  of a full one.  This reduces the amount of
                                  network transfer that is needed. This option
                                  should only be used when you are interested in
                                  downloading one of the development branches,
                                  but are not looking to develop Emscripten
                                  yourself.  Default: disabled, i.e. do a full
                                  clone.

                   --build-tests: If enabled, LLVM is built with internal tests
                                  included. Pass this to enable running test
                                  other.test_llvm_lit in the Emscripten test
                                  suite. Default: disabled.
             --enable-assertions: If specified, LLVM is built with assert()
                                  checks enabled. Useful for development
                                  purposes. Default: Enabled
            --disable-assertions: Forces assertions off during the build.

               --vs2019/--vs2022: If building from source, overrides to build
                                  using the specified compiler. When installing
                                  precompiled packages, this has no effect.
                                  Note: The same compiler specifier must be
                                  passed to the emsdk activate command to
                                  activate the desired version.

                                  Notes on building from source:

                                  To pass custom CMake directives when configuring
                                  LLVM build, specify the environment variable
                                  LLVM_CMAKE_ARGS="param1=value1,param2=value2"
                                  in the environment where the build is invoked.
                                  See README.md for details.

           --override-repository: Specifies the git URL to use for a given Tool. E.g.
                                  --override-repository emscripten-main@https://github.com/&#60;fork&#62;/emscripten/tree/&#60;refspec&#62;


   emsdk uninstall &#60;tool/sdk&#62;   - Removes the given tool or SDK from disk.

   emsdk activate [--permanent] [--system] [--build=type] [--vs2019/--vs2022] &#60;tool/sdk&#62;

                                - Activates the given tool or SDK in the
                                  environment of the current shell.

                                - If the `--permanent` option is passed, then the environment
                                  variables are set permanently for the current user.

                                - If the `--system` option is passed, the registration
                                  is done for all users of the system.
                                  This needs admin privileges
                                  (uses Machine environment variables).

                                - If a custom compiler version was used to override
                                  the compiler to use, pass the same --vs2019/--vs2022
                                  parameter here to choose which version to activate.

   emcmdprompt.bat              - Spawns a new command prompt window with the
                                  Emscripten environment active.

       Both commands 'install' and 'activate' accept an optional parameter
       '--build=type', which can be used to override what kind of installation
       or activation to perform. Possible values for type are Debug, Release,
       MinSizeRel or RelWithDebInfo. Note: When overriding a custom build type,
       be sure to match the same --build= option to both 'install' and
       'activate' commands and the invocation of 'emsdk_env', or otherwise
       these commands will default to operating on the default build type
       which is RelWithDebInfo.


   Environment:
      EMSDK_KEEP_DOWNLOADS=1     - if you want to keep the downloaded archives.
      EMSDK_NOTTY=1              - override isatty() result (mainly to log progress).
      EMSDK_NUM_CORES=n          - limit parallelism to n cores.
      EMSDK_VERBOSE=1            - very verbose output, useful for debugging.

F:\emsdk-main\emsdk-main&#62;emsdk install
Missing parameter. Type 'emsdk install &#60;tool name&#62;' to install a tool or an SDK. Type 'emsdk list' to obtain a list of available tools. Type 'emsdk install latest' to automatically install the newest version of the SDK.

F:\emsdk-main\emsdk-main&#62;emsdk install latest
Resolving SDK alias 'latest' to '3.1.31'
Resolving SDK version '3.1.31' to 'sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit'
Installing SDK 'sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit'..
Installing tool 'node-14.18.2-64bit'..
Downloading: F:/emsdk-main/emsdk-main/zips/node-v14.18.2-win-x64.zip from https://storage.googleapis.com/webassembly/emscripten-releases-builds/deps/node-v14.18.2-win-x64.zip, 30570907 Bytes
Unpacking 'F:/emsdk-main/emsdk-main/zips/node-v14.18.2-win-x64.zip' to 'F:/emsdk-main/emsdk-main/node/14.18.2_64bit'
Done installing tool 'node-14.18.2-64bit'.
Installing tool 'python-3.9.2-nuget-64bit'..
Downloading: F:/emsdk-main/emsdk-main/zips/python-3.9.2-4-amd64+pywin32.zip from https://storage.googleapis.com/webassembly/emscripten-releases-builds/deps/python-3.9.2-4-amd64+pywin32.zip, 14413267 Bytes
Unpacking 'F:/emsdk-main/emsdk-main/zips/python-3.9.2-4-amd64+pywin32.zip' to 'F:/emsdk-main/emsdk-main/python/3.9.2-nuget_64bit'
Done installing tool 'python-3.9.2-nuget-64bit'.
Installing tool 'java-8.152-64bit'..
Downloading: F:/emsdk-main/emsdk-main/zips/portable_jre_8_update_152_64bit.zip from https://storage.googleapis.com/webassembly/emscripten-releases-builds/deps/portable_jre_8_update_152_64bit.zip, 69241499 Bytes
Unpacking 'F:/emsdk-main/emsdk-main/zips/portable_jre_8_update_152_64bit.zip' to 'F:/emsdk-main/emsdk-main/java/8.152_64bit'
Done installing tool 'java-8.152-64bit'.
Installing tool 'releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit'..
Downloading: F:/emsdk-main/emsdk-main/zips/1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-wasm-binaries.zip from https://storage.googleapis.com/webassembly/emscripten-releases-builds/win/1eec24930cb2f56f6d9cd10ffcb031e27ea4157a/wasm-binaries.zip, 423418107 Bytes
Unpacking 'F:/emsdk-main/emsdk-main/zips/1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-wasm-binaries.zip' to 'F:/emsdk-main/emsdk-main/upstream'
Done installing tool 'releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit'.
Done installing SDK 'sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit'.

F:\emsdk-main\emsdk-main&#62;
F:\emsdk-main\emsdk-main&#62;

</pre>
<hr>











<pre style="background-color:black;color:magenta;font-size:inherit; overflow:auto; ">

&#9888;
<div style="background-color:white;color:black;display:inline-block;">
</div>
&#10004; 
&#10004; 
&#10004;
</pre>

 <br>
 <br>
Nella cartella 214a dal 44 al 53(ko) invece da 54 in poi (ok) <br>

<br><br>


<hr>
<span>
<a href="https://www.rinaldo-rasa.it/00/e/extra/docu/emoji/emoji_local.html">emoji_local</a>
</span><span>&nbsp;</span>
<span>
<a href="https://www.rinaldo-rasa.it/00/e/extra/docu/trasponder0/trasponder0v3__full_monty.html">trasponder0v3</a>
</span><span>&nbsp;</span>
<span>
<a href="http://venexiatre.altervista.org/WORKOU/OGGI/20191119/testtag.html#codicicoloristandard">colori_default</a>
</span><span>&nbsp;</span>
<span>
<a href="https://www.rinaldo-rasa.it/WORKOU/OGGI/20191119/00/e/extra/coloris/hexacolors.html">x11_colors</a>
</span><span>&nbsp;</span>






<hr>
<br>
<span>fin step:2023:02:18::18:10  </span>
<span style="margin:0;padding:0;display:inline-block!important;" class="cursores"></span>
</div> <!-- nested -->
</div> <!-- contenitore -->





















<div id="APPLICAZIONE" style="display:none;" class="da_mo"></div>


<div id="TEST_0101">... TEST_0101</div>



<div id="TOG_NO" onclick="Tog_No()">NO</div>
<div id="TOG_SI" onclick="Tog_Si()">SI</div>
<!-- da qui parallelo -->





<!--

CONTENITORE_INPUT_0101 svolge funzione di scatola INI (1)
INI(2)
INPUT_SCELTO_0101 ha type list step min max
FIN(2)
FIN (1)

-->


<article id="CONTENITORE_INPUT_0101"  style="display:none;display:block;">


 <div>

  <input id="INPUT_SCELTO_0101" type="range" list="LISTA_0101" step="0.10" min="0.00" max="6.00" /> 
  
 </div>


</article> 

 <datalist id="LISTA_0101">


 <option id="OPZ_00" value="0.00"> </option> 
 <option id="OPZ_01" value="0.11"> </option> 
 <option id="OPZ_02" value="0.22"> </option> 
 <option id="OPZ_03" value="0.33"> </option> 
 <option id="OPZ_04" value="0.44"> </option> 
 <option id="OPZ_05" value="0.55"> </option> 
 <option id="OPZ_06" value="0.66"> </option> 
 <option id="OPZ_07" value="0.77"> </option> 
 <option id="OPZ_08" value="0.88"> </option> 
 <option id="OPZ_09" value="0.99"> </option> 
 <option id="OPZ_10" value="2.00"> </option> 
 <option id="OPZ_11" value="2.11"> </option> 
 <option id="OPZ_12" value="2.22"> </option> 
 <option id="OPZ_13" value="2.33"> </option> 
 <option id="OPZ_14" value="2.44"> </option> 
 <option id="OPZ_15" value="2.55"> </option> 
 <option id="OPZ_16" value="2.66"> </option> 
 <option id="OPZ_17" value="2.77"> </option> 
 <option id="OPZ_18" value="2.88"> </option> 
 <option id="OPZ_19" value="2.99"> </option> 
 <option id="OPZ_20" value="3.00"> </option> 
 <option id="OPZ_21" value="3.11"> </option> 
 <option id="OPZ_22" value="3.22"> </option> 
 <option id="OPZ_23" value="3.33"> </option> 
 <option id="OPZ_24" value="3.44"> </option> 
 <option id="OPZ_25" value="3.55"> </option> 
 <option id="OPZ_26" value="3.66"> </option> 
 <option id="OPZ_27" value="3.77"> </option> 
 <option id="OPZ_28" value="3.88"> </option> 
 <option id="OPZ_29" value="3.99"> </option> 
 <option id="OPZ_30" value="4.00"> </option> 
 <option id="OPZ_31" value="4.11"> </option> 
 <option id="OPZ_32" value="4.22"> </option> 
 <option id="OPZ_33" value="4.33"> </option> 
 <option id="OPZ_34" value="4.44"> </option> 
 <option id="OPZ_35" value="4.55"> </option> 
 <option id="OPZ_36" value="4.66"> </option> 
 <option id="OPZ_37" value="4.77"> </option> 
 <option id="OPZ_38" value="4.88"> </option> 
 <option id="OPZ_39" value="4.99"> </option> 
 <option id="OPZ_40" value="5.00"> </option> 
 <option id="OPZ_41" value="5.00"> </option> 
 <option id="OPZ_42" value="5.11"> </option> 
 <option id="OPZ_43" value="5.22"> </option> 
 <option id="OPZ_44" value="5.33"> </option> 
 <option id="OPZ_45" value="5.44"> </option> 
 <option id="OPZ_46" value="5.55"> </option> 
 <option id="OPZ_47" value="5.66"> </option> 
 <option id="OPZ_48" value="5.77"> </option> 
 <option id="OPZ_49" value="5.88"> </option> 
 <option id="OPZ_50" value="5.99"> </option>
 <option id="OPZ_51" value="6.00"> </option> 


 </datalist> 










<script>

// 
// welcome everybody!!!
// 
function EstNaN(){ // alert("NaN"); 
if(NaN===NaN){}else{alert("you are running a computer language that says NaN===NaN is false and if you agree everything is ok");}};
// EstNaN();






let    DESKTOP_0303 = 1 ;
if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))
    { DESKTOP_0303 = 0 ; } else { DESKTOP_0303 = 1 ; }

// alert("DESKTOP_0303= "+DESKTOP_0303);

let LarghezzaBodyRem_0303 = window.innerWidth   /16;
let AltezzaBodyRem_0303   = window.innerHeight  /16;
let CompensazioneEventualiBordi=0.5;

// alert(CompensazioneEventualiBordi);

LarghezzaBodyRem_0303 = LarghezzaBodyRem_0303 - CompensazioneEventualiBordi;
AltezzaBodyRem_0303   = AltezzaBodyRem_0303 - CompensazioneEventualiBordi;
// alert(LarghezzaBodyRem_0303);
// alert(AltezzaBodyRem_0303);


let MargineSinistraRem_0303 = 5 ;
 if (DESKTOP_0303==0){MargineSinistraRem_0303 = 5.0 ;}
 if (DESKTOP_0303==1){MargineSinistraRem_0303 = 2.5 ;}
//alert(MargineSinistraRem_0303);


let BordoToggleDeviceRem_0303;
BordoToggleDeviceRem_0303 = MargineSinistraRem_0303 * 0.50;


let CorrezioneLarghezzaApplicazione = 0;
let CorrezioneAltezzaApplicazione = MargineSinistraRem_0303;

let LarghezzaApplicazione = LarghezzaBodyRem_0303 - CorrezioneLarghezzaApplicazione;
let AltezzaApplicazione   = AltezzaBodyRem_0303 - CorrezioneAltezzaApplicazione;

// alert(LarghezzaApplicazione);
// alert(AltezzaApplicazione);


let PosizioneLeftContenitoreInput = MargineSinistraRem_0303;
let LarghezzaContenitoreInput     = LarghezzaApplicazione - MargineSinistraRem_0303;
let AltezzaContenitoreInput       = MargineSinistraRem_0303;

// alert(PosizioneLeftContenitoreInput );
// alert(LarghezzaContenitoreInput     );
// alert(AltezzaContenitoreInput       );










//
// La parte APPLICAZIONE viene visualizzata o nascosta
// mediante il toggle
//
// Elementi coinvolti:
// input[type="range"] ( !!! leggi caveat !!! )
//  
// 
// Id coinvolti:
// APPLICAZIONE
// CONTENITORE_INPUT_0101 (
// caveat contiene un possibile duplicato
// input[type="range"]
// )
// 
// 
// 


document.getElementById("APPLICAZIONE").innerHTML=
`
<style>

#MAIN{
position:fixed;
top:0rem;left:0rem;

width:`+LarghezzaBodyRem_0303+`rem;
height:`+AltezzaApplicazione+`rem;

font-family:"PT Mono", monospace;

overflow:auto;
z-index:10000000;
}



#APPLICAZIONE{
position:fixed;
top:0rem;left:0rem;

width:`+LarghezzaBodyRem_0303+`rem;
height:`+AltezzaApplicazione+`rem;

border:solid 0.00rem green;

overflow:auto;
z-index:10000000;
}


#CONTENITORE_INPUT_0101{

position:fixed;
bottom:0rem;left:`+PosizioneLeftContenitoreInput+`rem;

width:`+LarghezzaContenitoreInput+`rem;
height:`+AltezzaContenitoreInput+`rem;

background-color:rgb(102,152,105);
background-color:transparent;


border:solid 0.00rem red;

    z-index:10000000;
}


input[type="range"]{
-webkit-appearance:none;

background-color:rgba(25,225,37,0.25);
background-color:rgb(102,152,105);
background-color:transparent;


width:100%;

z-index:1000000!important;

}
    
</style>




<article style="text-align:center;">
<div style="display:inline-block;">
<img id="WOO_000" src="https://www.rinaldo-rasa.it/WORKOU/OGGI/20191119/immagini/Woodstoc.png" alt="Woodstoc.png" >
</div>
</article>



<article id="BUONGIORNO_0101">
...BUONGIORNO_0101
</article>



<article id="POMERIGGIO_0202">
...POMERIGGIO_0202
</article>



<article id="CONTINUA">
...CONTINUA
</article>



`;



//
// Detect dimensioni originarie immagine
// Al momento inutilizzato
//

function dimolarem(){
let Immagine = document.querySelector("#WOO_000");
let ImmagineWidth     = Immagine.naturalWidth;
let ImmagineHeight    = Immagine.naturalHeight;
let ImmagineWidthRem  = Immagine.naturalWidth/16;
let ImmagineHeightRem = Immagine.naturalHeight/16;

alert("#WOO_000 Width originale=" + ImmagineWidthRem + "rem , " + "#WOO_000 Height originale=" + ImmagineHeightRem+"rem");

}; //dimolarem();




//
// FUNZIONE di
// Lettura input[range]
// e stilizzazione degli elements
// tramite variabili javascrit
// 
// 

let TIPO_DISPOSITIVO=DESKTOP_0303  ;
let LARGHEZZA_PIANOTERRA = LarghezzaApplicazione;
let ALTEZZA_PRIMOPIANO = AltezzaApplicazione;
// alert(LARGHEZZA_PIANOTERRA);
// alert(ALTEZZA_PRIMOPIANO);

let MARGINE_SINISTRA = MargineSinistraRem_0303;



//
// 0=mobile 1=desktop
//
// alert(TIPO_DISPOSITIVO);
//
// || 
// || internamente a questa funzione
// || viene passato TIPO_DISPOSITIVO importante
// || riconoscimento del tipo dispositivo
// || che rende possibile responsive
// || tramite variabili javascrit
// || 
// || 
// \/
function sonda_Input_0101(arg0,arg1,arg2,arg3){
let TipoDiDispositivo=arg0;
// alert(TipoDiDispositivo);
let LarghezzaPianoterra=arg1;
let AltezzaPrimopiano=arg2;
let MargineSinistra =arg3;
//alert(MargineSinistra);
let MargineBottomTestNested=MargineSinistra * 2.5;



let CorrezioneFontPerDispositivo;
// Valore di default
CorrezioneFontPerDispositivo=0.75;
// Detect il dispositivo effettivo
if(TipoDiDispositivo===0){ CorrezioneFontPerDispositivo=1.00; }
if(TipoDiDispositivo===1){ CorrezioneFontPerDispositivo=0.50; }
// alert(CorrezioneFontPerDispositivo);





let StileVersioneVERSIONE_TEST_NESTED;
let ArrayStileVersioneVERSIONE_TEST_NESTED=[""];

// Valore di default
StileVersioneVERSIONE_TEST_NESTED="#VERSIONE_TEST_NESTED{overflow:auto;}";

if(TipoDiDispositivo===0){ StileVersioneVERSIONE_TEST_NESTED="#VERSIONE_TEST_NESTED{margin-bottom:10rem!important;color:#EEE;font-size:1.500rem;overflow:auto;}"; }
if(TipoDiDispositivo===1){ StileVersioneVERSIONE_TEST_NESTED="#VERSIONE_TEST_NESTED{margin-bottom:10rem!important;color:#EEE;font-size:0.875rem;overflow:auto;}"; }
// alert(StileVersioneVERSIONE_TEST_NESTED);










// Leggere il valore di input[range]
let   VALORE_DI_INPUT_0101=document.getElementById("INPUT_SCELTO_0101").value; 
// alert(VALORE_DI_INPUT_0101);


let   DIM_INPUT_0101 = VALORE_DI_INPUT_0101;
// alert("DIM_INPUT_0101= "+DIM_INPUT_0101);
// 
// Qui DIM_INPUT_0101 viene corretto
// 
DIM_INPUT_0101= DIM_INPUT_0101 * CorrezioneFontPerDispositivo;
// alert("DIM_INPUT_0101= "+DIM_INPUT_0101);




let   DIM_IMAGE_0101 = DIM_INPUT_0101 * 10; 
// Quanto + - img ?
DIM_IMAGE_0101 = DIM_INPUT_0101 * 20; 
// alert("DIM_IMAGE_0101 = "+DIM_IMAGE_0101);


// 
// hack con possibile conflitto di nome
//
// (window.innerHeight  /16)
//
AltezzaPrimopiano = (window.innerHeight  /16);


document.getElementById("TEST_0101").innerHTML=`

<style>
#APPLICAZIONE{font-size:`+DIM_INPUT_0101+`rem!important;}
#BUONGIORNO_0101{font-size:`+DIM_INPUT_0101+`rem!important;}
#POMERIGGIO_0202{font-size:`+DIM_INPUT_0101+`rem!important;}


img{ width:`+DIM_IMAGE_0101+`rem!important;max-width:100%!important;max-height:100%;!important}

#BUONGIORNO_0101{font-family:monospace;text-align:left;}

#APPLICAZIONE, #BUONGIORNO_0101, #POMERIGGIO_0202{text-align:left;overflow:auto;}

#VERSIONE_TEST{
width:`+ LarghezzaPianoterra+`rem;
height:`+ AltezzaPrimopiano+`rem;





}

`+ StileVersioneVERSIONE_TEST_NESTED +`


</style>


    
`;



};
setInterval(sonda_Input_0101, 1, TIPO_DISPOSITIVO,LARGHEZZA_PIANOTERRA ,ALTEZZA_PRIMOPIANO,MARGINE_SINISTRA ) ;











//
// DGEBI dedicato al toggle
// e relative funzioni.
//
// Id coinvolti con querySelector:
// APPLICAZIONE
// CONTENITORE_INPUT_0101
// TOG_NO
// TOG_SI
// 
// 


document.getElementById("TOG_SI").innerHTML=
`
<style>
#TOG_SI{position:fixed;bottom:0rem;left:0rem;

    border-top:solid     `+BordoToggleDeviceRem_0303+`rem rgba(102,152,105,0);
    border-right:solid   `+BordoToggleDeviceRem_0303+`rem rgba(102,152,105,0);
    border-bottom:solid  `+BordoToggleDeviceRem_0303+`rem rgba(102,152,105,1);
    border-left:solid    `+BordoToggleDeviceRem_0303+`rem rgba(102,152,105,1);
    border-radius:0.5rem;
    display:inline-block; 
    cursor:pointer;
    z-index:10000000;
}
</style>
`;


document.getElementById("TOG_NO").innerHTML=
`
<style>
#TOG_NO{position:fixed;bottom:0rem;left:0rem;

    border-top:solid     `+BordoToggleDeviceRem_0303+`rem rgba(102,152,105,1);
    border-right:solid   `+BordoToggleDeviceRem_0303+`rem rgba(102,152,105,1);
    border-bottom:solid  `+BordoToggleDeviceRem_0303+`rem rgba(102,152,105,0);
    border-left:solid    `+BordoToggleDeviceRem_0303+`rem rgba(102,152,105,0);
    border-radius:0.5rem;
    display:inline-block; 
    cursor:pointer;
    z-index:10000000;


} 
</style>

`;



function Tog_No(){
document.querySelector("#APPLICAZIONE").style.display="none";
document.querySelector("#CONTENITORE_INPUT_0101").style.display="none";
document.querySelector("#VERSIONE_TEST_NESTED").style.display="block";
document.querySelector("#TOG_NO").style.display="none";
document.querySelector("#TOG_SI").style.display="block";

}


function Tog_Si(){
document.querySelector("#APPLICAZIONE").style.display="block";
document.querySelector("#CONTENITORE_INPUT_0101").style.display="block";
document.querySelector("#VERSIONE_TEST_NESTED").style.display="none";
document.querySelector("#TOG_NO").style.display="block";
document.querySelector("#TOG_SI").style.display="none";

}













</script>


<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rasa:wght@300&display=swap" rel="stylesheet">



<!--
http://avid3820725.altervista.org/WORKOU/OGGI/20191119/immagini/Woodstoc.png

-->
</main>



<style>
 
 main{

 font-family:"PT Mono", monospace;
 
 }

 img{  
 margin-left: auto;
 margin-right: auto;
 display: block;
 max-width:100%;
 max-height:100%;
 width: auto;
 width: 50%;
 height: auto;
 text-align:center!important;
 }



#VERSIONE_TEST{
position:fixed;top:0rem;left:0rem;
/* width height sono dinamici */
background-color:inherit;color:gray;

font-size:1.25rem;font-family:"PT Mono", monospace;
text-align:left;
text-align: justify;text-justify: inter-word;

border:solid 0.00rem white;

overflow:auto;
}



.da_mo{background-color:black!important;color:lime!important;}
.da_mo{background-color:black!important;color:lime!important;}

/* simil dark mode */
.da_mo{background-color:rgba(0, 19, 50, 1)!important;color: rgba(195,  0,  0, 1)!important;}  /* */
.da_mo{background-color:rgba(0, 19, 50, 1)!important;color: #EEE!important;}  /* */


 
.cursore {
 background: lime;
 line-height: 17px;
 margin-left: 3px;
 -webkit-animation: blink 0.8s infinite;
 width: 7px;
 height: 15px;
}
.cursores {
 background: lime;
 line-height: 17px;
 margin-left: 3px;
 -webkit-animation: blink 0.8s infinite;
 width: 7px;   width:  16px;
 height: 15px; height: 32px;
}

@-webkit-keyframes blink {
 0% {background: #222}
 50% {background: lime}
 100% {background: #222}
}
 
</style>



