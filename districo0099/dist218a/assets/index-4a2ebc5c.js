(function(){const e=document.createElement("link").relList;if(e&&e.supports&&e.supports("modulepreload"))return;for(const l of document.querySelectorAll('link[rel="modulepreload"]'))d(l);new MutationObserver(l=>{for(const m of l)if(m.type==="childList")for(const c of m.addedNodes)c.tagName==="LINK"&&c.rel==="modulepreload"&&d(c)}).observe(document,{childList:!0,subtree:!0});function o(l){const m={};return l.integrity&&(m.integrity=l.integrity),l.referrerPolicy&&(m.referrerPolicy=l.referrerPolicy),l.crossOrigin==="use-credentials"?m.credentials="include":l.crossOrigin==="anonymous"?m.credentials="omit":m.credentials="same-origin",m}function d(l){if(l.ep)return;l.ep=!0;const m=o(l);fetch(l.href,m)}})();function fe(){}function Ue(t){return t()}function Ce(){return Object.create(null)}function Te(t){t.forEach(Ue)}function Ke(t){return typeof t=="function"}function Ve(t,e){return t!=t?e==e:t!==e||t&&typeof t=="object"||typeof t=="function"}function qe(t){return Object.keys(t).length===0}function n(t,e){t.appendChild(e)}function We(t,e,o){t.insertBefore(e,o||null)}function je(t){t.parentNode&&t.parentNode.removeChild(t)}function a(t){return document.createElement(t)}function He(t){return document.createTextNode(t)}function g(){return He(" ")}function i(t,e,o){o==null?t.removeAttribute(e):t.getAttribute(e)!==o&&t.setAttribute(e,o)}function $e(t){return Array.from(t.childNodes)}function Re(t,e,o,d){o===null?t.style.removeProperty(e):t.style.setProperty(e,o,d?"important":"")}let ze;function ve(t){ze=t}const be=[],xe=[],Ee=[],Ze=[],Ye=Promise.resolve();let Pe=!1;function Qe(){Pe||(Pe=!0,Ye.then(Ge))}function Ne(t){Ee.push(t)}const we=new Set;let _e=0;function Ge(){if(_e!==0)return;const t=ze;do{try{for(;_e<be.length;){const e=be[_e];_e++,ve(e),Je(e.$$)}}catch(e){throw be.length=0,_e=0,e}for(ve(null),be.length=0,_e=0;xe.length;)xe.pop()();for(let e=0;e<Ee.length;e+=1){const o=Ee[e];we.has(o)||(we.add(o),o())}Ee.length=0}while(be.length);for(;Ze.length;)Ze.pop()();Pe=!1,we.clear(),ve(t)}function Je(t){if(t.fragment!==null){t.update(),Te(t.before_update);const e=t.dirty;t.dirty=[-1],t.fragment&&t.fragment.p(t.ctx,e),t.after_update.forEach(Ne)}}const Xe=new Set;function et(t,e){t&&t.i&&(Xe.delete(t),t.i(e))}function tt(t,e,o,d){const{fragment:l,after_update:m}=t.$$;l&&l.m(e,o),d||Ne(()=>{const c=t.$$.on_mount.map(Ue).filter(Ke);t.$$.on_destroy?t.$$.on_destroy.push(...c):Te(c),t.$$.on_mount=[]}),m.forEach(Ne)}function nt(t,e){const o=t.$$;o.fragment!==null&&(Te(o.on_destroy),o.fragment&&o.fragment.d(e),o.on_destroy=o.fragment=null,o.ctx=[])}function it(t,e){t.$$.dirty[0]===-1&&(be.push(t),Qe(),t.$$.dirty.fill(0)),t.$$.dirty[e/31|0]|=1<<e%31}function at(t,e,o,d,l,m,c,ye=[-1]){const u=ze;ve(t);const r=t.$$={fragment:null,ctx:[],props:m,update:fe,not_equal:l,bound:Ce(),on_mount:[],on_destroy:[],on_disconnect:[],before_update:[],after_update:[],context:new Map(e.context||(u?u.$$.context:[])),callbacks:Ce(),dirty:ye,skip_bound:!1,root:e.target||u.$$.root};c&&c(r.root);let b=!1;if(r.ctx=o?o(t,e.props||{},(p,_,...he)=>{const s=he.length?he[0]:_;return r.ctx&&l(r.ctx[p],r.ctx[p]=s)&&(!r.skip_bound&&r.bound[p]&&r.bound[p](s),b&&it(t,p)),_}):[],r.update(),b=!0,Te(r.before_update),r.fragment=d?d(r.ctx):!1,e.target){if(e.hydrate){const p=$e(e.target);r.fragment&&r.fragment.l(p),p.forEach(je)}else r.fragment&&r.fragment.c();e.intro&&et(t.$$.fragment),tt(t,e.target,e.anchor,e.customElement),Ge()}ve(u)}class st{$destroy(){nt(this,1),this.$destroy=fe}$on(e,o){if(!Ke(o))return fe;const d=this.$$.callbacks[e]||(this.$$.callbacks[e]=[]);return d.push(o),()=>{const l=d.indexOf(o);l!==-1&&d.splice(l,1)}}$set(e){this.$$set&&!qe(e)&&(this.$$.skip_bound=!0,this.$$set(e),this.$$.skip_bound=!1)}}function ot(t){let e,o,d,l,m,c,ye,u,r,b,p,_,he,s,f,h,v,y,k,I,D,E,T,S,O,R,w,P,N,z,A,F,M,L,C,x,Z,U,K,j,G,B,V,q,W,H,$,Y,Q,J,X,ee,te,ne,ie,ae,se,oe,le,re,me,de,ce,pe,ue,ge,Ae,Se,Fe,ke,Me,Ie,Le,De;return{c(){e=a("main"),o=a("div"),o.innerHTML=`<div id="VERSIONE_TEST_NESTED" style="margin-bottom:25rem;padding: 1rem 5rem 10rem 5rem;border:solid 0.00rem olive;">step99 half0a0 prototype00... step:2023:02:18::19:07 <br/><br/> 


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
|       | EstNaN(){}
|       |                |
|       +----------------+--------------------
|       |                |
|       | dimolarem(){}
|       |                |
|       +----------------+--------------------
|       |                |
|       | sonda_Input_0101(arg0,arg1,arg2,arg3){}
|       |                |
|       +----------------+--------------------
|       |                |
|       | Tog_No(){}
|       |                |
|       +----------------+--------------------
|       |                |
|       | Tog_Si(){}
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


<hr/> 
<div>empscripten installazione</div> 
<pre style="background-color:black;color:orange;font-size:inherit; overflow:auto; ">

Microsoft Windows [Version 10.0.19045.2546]
(c) Microsoft Corporation. All rights reserved.


F:\\&gt;dir
  
  

 Directory of F:\\

09/02/2023  19:18           110.298 emsdk-main.zip

F:\\&gt;cd emsdk-main

F:\\emsdk-main&gt;dir
  
  

 Directory of F:\\emsdk-main

09/02/2023  19:20    &lt;DIR&gt;          .
09/02/2023  19:20    &lt;DIR&gt;          ..
30/01/2023  15:46    &lt;DIR&gt;          emsdk-main
               0 File(s)              0 bytes
               3 Dir(s)  39.311.802.368 bytes free

F:\\emsdk-main&gt;cd emsdk-main

F:\\emsdk-main\\emsdk-main&gt;dir
  
  

 Directory of F:\\emsdk-main\\emsdk-main

09/02/2023  19:20    &lt;DIR&gt;          .
09/02/2023  19:20    &lt;DIR&gt;          ..
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
30/01/2023  15:46    &lt;DIR&gt;          .circleci
30/01/2023  15:46    &lt;DIR&gt;          .github
30/01/2023  15:46    &lt;DIR&gt;          bazel
30/01/2023  15:46    &lt;DIR&gt;          docker
30/01/2023  15:46    &lt;DIR&gt;          scripts
30/01/2023  15:46    &lt;DIR&gt;          test
              20 File(s)        172.947 bytes
               8 Dir(s)  39.311.802.368 bytes free

F:\\emsdk-main\\emsdk-main&gt;emsdk
Missing command; Type &#39;emsdk help&#39; to get a list of commands.

F:\\emsdk-main\\emsdk-main&gt;emsdk help
 emsdk: Available commands:

   emsdk list [--old] [--uses]  - Lists all available SDKs and tools and their
                                  current installation status. With the --old
                                  parameter, also historical versions are
                                  shown. If --uses is passed, displays the
                                  composition of different SDK packages and
                                  dependencies.

   emsdk update                 - Updates emsdk to the newest version. If you have
                                  bootstrapped emsdk via cloning directly from
                                  GitHub, call &quot;git pull&quot; instead to update emsdk.

   emsdk install [options] &lt;tool 1&gt; &lt;tool 2&gt; &lt;tool 3&gt; ...
                                - Downloads and installs given tools or SDKs.
                                  Options can contain:

                         -j&lt;num&gt;: Specifies the number of cores to use when
                                  building the tool. Default: use one less
                                  than the # of detected cores.

                  --build=&lt;type&gt;: Controls what kind of build of LLVM to
                                  perform. Pass either &#39;Debug&#39;, &#39;Release&#39;,
                                  &#39;MinSizeRel&#39; or &#39;RelWithDebInfo&#39;. Default:
                                  &#39;Release&#39;.

              --generator=&lt;type&gt;: Specifies the CMake Generator to be used
                                  during the build. Possible values are the
                                  same as what your CMake supports and whether
                                  the generator is valid depends on the tools
                                  you have installed. Defaults to &#39;Unix Makefiles&#39;
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
                                  LLVM_CMAKE_ARGS=&quot;param1=value1,param2=value2&quot;
                                  in the environment where the build is invoked.
                                  See README.md for details.

           --override-repository: Specifies the git URL to use for a given Tool. E.g.
                                  --override-repository emscripten-main@https://github.com/&lt;fork&gt;/emscripten/tree/&lt;refspec&gt;


   emsdk uninstall &lt;tool/sdk&gt;   - Removes the given tool or SDK from disk.

   emsdk activate [--permanent] [--system] [--build=type] [--vs2019/--vs2022] &lt;tool/sdk&gt;

                                - Activates the given tool or SDK in the
                                  environment of the current shell.

                                - If the \`--permanent\` option is passed, then the environment
                                  variables are set permanently for the current user.

                                - If the \`--system\` option is passed, the registration
                                  is done for all users of the system.
                                  This needs admin privileges
                                  (uses Machine environment variables).

                                - If a custom compiler version was used to override
                                  the compiler to use, pass the same --vs2019/--vs2022
                                  parameter here to choose which version to activate.

   emcmdprompt.bat              - Spawns a new command prompt window with the
                                  Emscripten environment active.

       Both commands &#39;install&#39; and &#39;activate&#39; accept an optional parameter
       &#39;--build=type&#39;, which can be used to override what kind of installation
       or activation to perform. Possible values for type are Debug, Release,
       MinSizeRel or RelWithDebInfo. Note: When overriding a custom build type,
       be sure to match the same --build= option to both &#39;install&#39; and
       &#39;activate&#39; commands and the invocation of &#39;emsdk_env&#39;, or otherwise
       these commands will default to operating on the default build type
       which is RelWithDebInfo.


   Environment:
      EMSDK_KEEP_DOWNLOADS=1     - if you want to keep the downloaded archives.
      EMSDK_NOTTY=1              - override isatty() result (mainly to log progress).
      EMSDK_NUM_CORES=n          - limit parallelism to n cores.
      EMSDK_VERBOSE=1            - very verbose output, useful for debugging.

F:\\emsdk-main\\emsdk-main&gt;emsdk install
Missing parameter. Type &#39;emsdk install &lt;tool name&gt;&#39; to install a tool or an SDK. Type &#39;emsdk list&#39; to obtain a list of available tools. Type &#39;emsdk install latest&#39; to automatically install the newest version of the SDK.

F:\\emsdk-main\\emsdk-main&gt;emsdk install latest
Resolving SDK alias &#39;latest&#39; to &#39;3.1.31&#39;
Resolving SDK version &#39;3.1.31&#39; to &#39;sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit&#39;
Installing SDK &#39;sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit&#39;..
Installing tool &#39;node-14.18.2-64bit&#39;..
Downloading: F:/emsdk-main/emsdk-main/zips/node-v14.18.2-win-x64.zip from https://storage.googleapis.com/webassembly/emscripten-releases-builds/deps/node-v14.18.2-win-x64.zip, 30570907 Bytes
Unpacking &#39;F:/emsdk-main/emsdk-main/zips/node-v14.18.2-win-x64.zip&#39; to &#39;F:/emsdk-main/emsdk-main/node/14.18.2_64bit&#39;
Done installing tool &#39;node-14.18.2-64bit&#39;.
Installing tool &#39;python-3.9.2-nuget-64bit&#39;..
Downloading: F:/emsdk-main/emsdk-main/zips/python-3.9.2-4-amd64+pywin32.zip from https://storage.googleapis.com/webassembly/emscripten-releases-builds/deps/python-3.9.2-4-amd64+pywin32.zip, 14413267 Bytes
Unpacking &#39;F:/emsdk-main/emsdk-main/zips/python-3.9.2-4-amd64+pywin32.zip&#39; to &#39;F:/emsdk-main/emsdk-main/python/3.9.2-nuget_64bit&#39;
Done installing tool &#39;python-3.9.2-nuget-64bit&#39;.
Installing tool &#39;java-8.152-64bit&#39;..
Downloading: F:/emsdk-main/emsdk-main/zips/portable_jre_8_update_152_64bit.zip from https://storage.googleapis.com/webassembly/emscripten-releases-builds/deps/portable_jre_8_update_152_64bit.zip, 69241499 Bytes
Unpacking &#39;F:/emsdk-main/emsdk-main/zips/portable_jre_8_update_152_64bit.zip&#39; to &#39;F:/emsdk-main/emsdk-main/java/8.152_64bit&#39;
Done installing tool &#39;java-8.152-64bit&#39;.
Installing tool &#39;releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit&#39;..
Downloading: F:/emsdk-main/emsdk-main/zips/1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-wasm-binaries.zip from https://storage.googleapis.com/webassembly/emscripten-releases-builds/win/1eec24930cb2f56f6d9cd10ffcb031e27ea4157a/wasm-binaries.zip, 423418107 Bytes
Unpacking &#39;F:/emsdk-main/emsdk-main/zips/1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-wasm-binaries.zip&#39; to &#39;F:/emsdk-main/emsdk-main/upstream&#39;
Done installing tool &#39;releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit&#39;.
Done installing SDK &#39;sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit&#39;.

F:\\emsdk-main\\emsdk-main&gt;
F:\\emsdk-main\\emsdk-main&gt;

</pre> 
<hr/> 

<hr/> 
<div>empscripten compilazione</div> 
<pre style="background-color:black;color:orange;font-size:inherit; overflow:auto; ">Microsoft Windows [Version 10.0.19045.2546]
(c) Microsoft Corporation. All rights reserved.

C:\\Users\\USER&gt;python -V
Python 3.9.6

C:\\Users\\USER&gt;F:

F:\\&gt;python -V
Python 3.9.6

F:\\&gt;python3 -m http.server 8080
Python non trovato; Esegui senza argomenti per installare da Microsoft Store o disabilitare il collegamento da impostazioni &gt; Gestisci app Alias di esecuzione.

F:\\&gt;C:

C:\\Users\\USER&gt;python3 -m http.server 8080
Python non trovato; Esegui senza argomenti per installare da Microsoft Store o disabilitare il collegamento da impostazioni &gt; Gestisci app Alias di esecuzione.

C:\\Users\\USER&gt;F:

F:\\&gt;emrun --port 8080 tests.html
&#39;emrun&#39; is not recognized as an internal or external command,
operable program or batch file.

F:\\&gt;emsdk list
&#39;emsdk&#39; is not recognized as an internal or external command,
operable program or batch file.

F:\\&gt;dir

F:\\&gt;cd emsdk-main

F:\\emsdk-main&gt;dir
  
  

 Directory of F:\\emsdk-main

09/02/2023  19:20    &lt;DIR&gt;          .
09/02/2023  19:20    &lt;DIR&gt;          ..
30/01/2023  15:46    &lt;DIR&gt;          emsdk-main
               0 File(s)              0 bytes
               3 Dir(s)  37.250.138.112 bytes free

F:\\emsdk-main&gt;cd emsdk-main

F:\\emsdk-main\\emsdk-main&gt;dir
  

 Directory of F:\\emsdk-main\\emsdk-main

09/02/2023  19:20    &lt;DIR&gt;          .
09/02/2023  19:20    &lt;DIR&gt;          ..
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
30/01/2023  15:46    &lt;DIR&gt;          .circleci
30/01/2023  15:46    &lt;DIR&gt;          .github
30/01/2023  15:46    &lt;DIR&gt;          bazel
30/01/2023  15:46    &lt;DIR&gt;          docker
30/01/2023  15:46    &lt;DIR&gt;          scripts
30/01/2023  15:46    &lt;DIR&gt;          test
09/02/2023  19:32    &lt;DIR&gt;          zips
09/02/2023  19:33    &lt;DIR&gt;          node
09/02/2023  19:37    &lt;DIR&gt;          python
09/02/2023  19:40    &lt;DIR&gt;          java
09/02/2023  19:51    &lt;DIR&gt;          upstream
              20 File(s)        172.947 bytes
              13 Dir(s)  37.250.138.112 bytes free

F:\\emsdk-main\\emsdk-main&gt;emsdk list

The *recommended* precompiled SDK download is 3.1.31 (1eec24930cb2f56f6d9cd10ffcb031e27ea4157a).

To install/activate it use:
         latest

This is equivalent to installing/activating:
         3.1.31             INSTALLED

All recent (non-legacy) installable versions are:
         3.1.31    INSTALLED
         3.1.31-asserts
         3.1.30
         3.1.30-asserts
         3.1.29
         3.1.29-asserts
         3.1.28
         3.1.28-asserts
         3.1.27
         3.1.27-asserts
         3.1.26
         3.1.26-asserts
         3.1.25
         3.1.25-asserts
         3.1.24
         3.1.24-asserts
         3.1.23
         3.1.23-asserts
         3.1.22
         3.1.22-asserts
         3.1.21
         3.1.21-asserts
         3.1.20
         3.1.20-asserts
         3.1.19
         3.1.19-asserts
         3.1.18
         3.1.18-asserts
         3.1.17
         3.1.17-asserts
         3.1.16
         3.1.16-asserts
         3.1.15
         3.1.15-asserts
         3.1.14
         3.1.14-asserts
         3.1.13
         3.1.13-asserts
         3.1.12
         3.1.12-asserts
         3.1.11
         3.1.11-asserts
         3.1.10
         3.1.10-asserts
         3.1.9
         3.1.9-asserts
         3.1.8
         3.1.8-asserts
         3.1.7
         3.1.7-asserts
         3.1.6
         3.1.6-asserts
         3.1.5
         3.1.5-asserts
         3.1.4
         3.1.4-asserts
         3.1.3
         3.1.3-asserts
         3.1.2
         3.1.2-asserts
         3.1.1
         3.1.1-asserts
         3.1.0
         3.1.0-asserts
         3.0.1
         3.0.1-asserts
         3.0.0
         3.0.0-asserts
         2.0.34
         2.0.33
         2.0.32
         2.0.31
         2.0.31-asserts
         2.0.30
         2.0.30-asserts
         2.0.29
         2.0.29-lto
         2.0.28
         2.0.28-lto
         2.0.27
         2.0.27-lto
         2.0.26
         2.0.26-lto
         2.0.25
         2.0.24
         2.0.23
         2.0.23-lto
         2.0.22
         2.0.21
         2.0.20
         2.0.20-lto
         2.0.19
         2.0.19-lto
         2.0.18
         2.0.17
         2.0.16
         2.0.15
         2.0.14
         2.0.13
         2.0.12
         2.0.11
         2.0.10
         2.0.9
         2.0.8
         2.0.7
         2.0.6
         2.0.5
         2.0.4
         2.0.3
         2.0.2
         2.0.1
         2.0.0
         1.40.1
         1.40.0
         1.39.20
         1.39.19
         1.39.18
         1.39.17
         1.39.16
         1.39.15
         1.39.14
         1.39.13
         1.39.12
         1.39.11
         1.39.10
         1.39.9
         1.39.8
         1.39.7
         1.39.6
         1.39.5
         1.39.4
         1.39.3
         1.39.2
         1.39.1
         1.39.0
         1.38.48
         1.38.47
         1.38.46
         1.38.45
         1.38.44
         1.38.43
         1.38.42
         1.38.41
         1.38.40
         1.38.39
         1.38.38
         1.38.37
         1.38.36
         1.38.35
         1.38.34
         1.38.33

The additional following precompiled SDKs are also available for download:
         sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit    INSTALLED
         sdk-releases-48488847a38bb9cfb36e7397bea21ab2bb062680-64bit

The following SDKs can be compiled from source:
         sdk-main-64bit

The following precompiled tool packages are available for download:
           releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit      INSTALLED
           releases-48488847a38bb9cfb36e7397bea21ab2bb062680-64bit
           node-14.18.2-64bit           INSTALLED
           node-14.15.5-64bit
           python-3.9.2-nuget-64bit     INSTALLED
           python-3.9.2-64bit
           java-8.152-64bit             INSTALLED
           emscripten-1.38.30
           emscripten-1.38.31
           gnu-2.5.4
           mingw-7.1.0-64bit

The following tools can be compiled from source:
           llvm-git-main-32bit
           llvm-git-main-64bit
           emscripten-tag-1.38.30-32bit
           emscripten-tag-1.38.31-32bit
           emscripten-tag-1.38.30-64bit
           emscripten-tag-1.38.31-64bit
           binaryen-tag-1.38.30-32bit
           binaryen-tag-1.38.31-32bit
           binaryen-tag-1.38.30-64bit
           binaryen-tag-1.38.31-64bit
           emscripten-main-32bit
           emscripten-main-64bit
           binaryen-main-32bit
           binaryen-main-64bit
           ninja-git-release-64bit
           ccache-git-emscripten-64bit

Items marked with * are activated for the current user.

To access the historical archived versions, type &#39;emsdk list --old&#39;

Run &quot;./emsdk update&quot; to pull in the latest list.

F:\\emsdk-main\\emsdk-main&gt;
F:\\emsdk-main\\emsdk-main&gt;emsdk install latest
Resolving SDK alias &#39;latest&#39; to &#39;3.1.31&#39;
Resolving SDK version &#39;3.1.31&#39; to &#39;sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit&#39;
Installing SDK &#39;sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit&#39;..
Skipped installing node-14.18.2-64bit, already installed.
Skipped installing python-3.9.2-nuget-64bit, already installed.
Skipped installing java-8.152-64bit, already installed.
Skipped installing releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit, already installed.
All SDK components already installed: &#39;sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit&#39;.

F:\\emsdk-main\\emsdk-main&gt;emsdk activate latest --global
--global is deprecated. Use \`--system\` to set the environment variables for all users
Resolving SDK alias &#39;latest&#39; to &#39;3.1.31&#39;
Resolving SDK version &#39;3.1.31&#39; to &#39;sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit&#39;
Registering active Emscripten environment permanently

Setting the following tools as active:
   node-14.18.2-64bit
   python-3.9.2-nuget-64bit
   java-8.152-64bit
   releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit

Adding directories to PATH:
PATH += F:\\emsdk-main\\emsdk-main
PATH += F:\\emsdk-main\\emsdk-main\\node\\14.18.2_64bit\\bin
PATH += F:\\emsdk-main\\emsdk-main\\upstream\\emscripten

Setting environment variables:
PATH = F:\\emsdk-main\\emsdk-main;F:\\emsdk-main\\emsdk-main\\node\\14.18.2_64bit\\bin;F:\\emsdk-main\\emsdk-main\\upstream\\emscripten;C:\\Users\\RASA\\bin\\dart-sass;C:\\Program Files (x86)\\Cuminas\\Document Express DjVu Plug-in\\;%SystemRoot%\\system32;%SystemRoot%;%SystemRoot%\\System32\\Wbem;%SYSTEMROOT%\\System32\\WindowsPowerShell\\v1.0\\;C:\\Program Files (x86)\\Common Files\\lenovo\\easyplussdk\\bin;C:\\Program Files (x86)\\QuickTime\\QTSystem\\;C:\\Program Files\\MiKTeX 2.9\\miktex\\bin\\x64\\;%SYSTEMROOT%\\System32\\OpenSSH\\;C:\\Program Files (x86)\\HP\\Common\\HPDestPlgIn\\;C:\\Program Files (x86)\\HP\\IdrsOCR_15.2.10.1114\\;C:\\ProgramData\\Oracle\\Java\\javapath;C:\\Program Files\\nodejs\\
EMSDK = F:/emsdk-main/emsdk-main
EMSDK_NODE = F:\\emsdk-main\\emsdk-main\\node\\14.18.2_64bit\\bin\\node.exe
EMSDK_PYTHON = F:\\emsdk-main\\emsdk-main\\python\\3.9.2-nuget_64bit\\python.exe
JAVA_HOME = F:\\emsdk-main\\emsdk-main\\java\\8.152_64bit
Clearing existing environment variable: EMSDK_PY
error: failed to set the environment variable &#39;PATH&#39;! Setting environment variables permanently requires administrator access. Please rerun this command with administrative privileges. This can be done for example by holding down the Ctrl and Shift keys while opening a command prompt in start menu.

F:\\emsdk-main\\emsdk-main&gt;
F:\\emsdk-main\\emsdk-main&gt;python3 -m http.server 8080
&#39;python3&#39; is not recognized as an internal or external command,
operable program or batch file.

F:\\emsdk-main\\emsdk-main&gt;dir
  
  

 Directory of F:\\emsdk-main\\emsdk-main

09/02/2023  19:20    &lt;DIR&gt;          .
09/02/2023  19:20    &lt;DIR&gt;          ..
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
30/01/2023  15:46    &lt;DIR&gt;          .circleci
30/01/2023  15:46    &lt;DIR&gt;          .github
30/01/2023  15:46    &lt;DIR&gt;          bazel
30/01/2023  15:46    &lt;DIR&gt;          docker
30/01/2023  15:46    &lt;DIR&gt;          scripts
30/01/2023  15:46    &lt;DIR&gt;          test
09/02/2023  19:32    &lt;DIR&gt;          zips
09/02/2023  19:33    &lt;DIR&gt;          node
09/02/2023  19:37    &lt;DIR&gt;          python
09/02/2023  19:40    &lt;DIR&gt;          java
09/02/2023  19:51    &lt;DIR&gt;          upstream
12/02/2023  10:11               449 .emscripten
              21 File(s)        173.396 bytes
              13 Dir(s)  37.245.747.200 bytes free

F:\\emsdk-main\\emsdk-main&gt;emrun
emrun [emrun_options] filename.html -- [html_cmdline_options]

   where emrun_options specifies command line options for emrun itself, whereas
   html_cmdline_options specifies startup arguments to the program.

If you are seeing &quot;unrecognized arguments&quot; when trying to pass
arguments to your page, remember to add \`--\` between arguments
to emrun itself and arguments to your page.


Type emrun --help for a detailed list of available options.

F:\\emsdk-main\\emsdk-main&gt;emrun --port 8080 README.md
Terminate batch job (Y/N)? y

F:\\emsdk-main\\emsdk-main&gt;
F:\\emsdk-main\\emsdk-main&gt;emsdk -v
Unknown command &#39;-v&#39; given! Type &#39;emsdk help&#39; to get a list of commands.

F:\\emsdk-main\\emsdk-main&gt;emsdk help
 emsdk: Available commands:

   emsdk list [--old] [--uses]  - Lists all available SDKs and tools and their
                                  current installation status. With the --old
                                  parameter, also historical versions are
                                  shown. If --uses is passed, displays the
                                  composition of different SDK packages and
                                  dependencies.

   emsdk update                 - Updates emsdk to the newest version. If you have
                                  bootstrapped emsdk via cloning directly from
                                  GitHub, call &quot;git pull&quot; instead to update emsdk.

   emsdk install [options] &lt;tool 1&gt; &lt;tool 2&gt; &lt;tool 3&gt; ...
                                - Downloads and installs given tools or SDKs.
                                  Options can contain:

                         -j&lt;num&gt;: Specifies the number of cores to use when
                                  building the tool. Default: use one less
                                  than the # of detected cores.

                  --build=&lt;type&gt;: Controls what kind of build of LLVM to
                                  perform. Pass either &#39;Debug&#39;, &#39;Release&#39;,
                                  &#39;MinSizeRel&#39; or &#39;RelWithDebInfo&#39;. Default:
                                  &#39;Release&#39;.

              --generator=&lt;type&gt;: Specifies the CMake Generator to be used
                                  during the build. Possible values are the
                                  same as what your CMake supports and whether
                                  the generator is valid depends on the tools
                                  you have installed. Defaults to &#39;Unix Makefiles&#39;
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
                                  LLVM_CMAKE_ARGS=&quot;param1=value1,param2=value2&quot;
                                  in the environment where the build is invoked.
                                  See README.md for details.

           --override-repository: Specifies the git URL to use for a given Tool. E.g.
                                  --override-repository emscripten-main@https://github.com/&lt;fork&gt;/emscripten/tree/&lt;refspec&gt;


   emsdk uninstall &lt;tool/sdk&gt;   - Removes the given tool or SDK from disk.

   emsdk activate [--permanent] [--system] [--build=type] [--vs2019/--vs2022] &lt;tool/sdk&gt;

                                - Activates the given tool or SDK in the
                                  environment of the current shell.

                                - If the \`--permanent\` option is passed, then the environment
                                  variables are set permanently for the current user.

                                - If the \`--system\` option is passed, the registration
                                  is done for all users of the system.
                                  This needs admin privileges
                                  (uses Machine environment variables).

                                - If a custom compiler version was used to override
                                  the compiler to use, pass the same --vs2019/--vs2022
                                  parameter here to choose which version to activate.

   emcmdprompt.bat              - Spawns a new command prompt window with the
                                  Emscripten environment active.

       Both commands &#39;install&#39; and &#39;activate&#39; accept an optional parameter
       &#39;--build=type&#39;, which can be used to override what kind of installation
       or activation to perform. Possible values for type are Debug, Release,
       MinSizeRel or RelWithDebInfo. Note: When overriding a custom build type,
       be sure to match the same --build= option to both &#39;install&#39; and
       &#39;activate&#39; commands and the invocation of &#39;emsdk_env&#39;, or otherwise
       these commands will default to operating on the default build type
       which is RelWithDebInfo.


   Environment:
      EMSDK_KEEP_DOWNLOADS=1     - if you want to keep the downloaded archives.
      EMSDK_NOTTY=1              - override isatty() result (mainly to log progress).
      EMSDK_NUM_CORES=n          - limit parallelism to n cores.
      EMSDK_VERBOSE=1            - very verbose output, useful for debugging.

F:\\emsdk-main\\emsdk-main&gt;emsdk list

The *recommended* precompiled SDK download is 3.1.31 (1eec24930cb2f56f6d9cd10ffcb031e27ea4157a).

To install/activate it use:
         latest

This is equivalent to installing/activating:
         3.1.31             INSTALLED

All recent (non-legacy) installable versions are:
         3.1.31    INSTALLED
         3.1.31-asserts
         3.1.30
         3.1.30-asserts
         3.1.29
         3.1.29-asserts
         3.1.28
         3.1.28-asserts
         3.1.27
         3.1.27-asserts
         3.1.26
         3.1.26-asserts
         3.1.25
         3.1.25-asserts
         3.1.24
         3.1.24-asserts
         3.1.23
         3.1.23-asserts
         3.1.22
         3.1.22-asserts
         3.1.21
         3.1.21-asserts
         3.1.20
         3.1.20-asserts
         3.1.19
         3.1.19-asserts
         3.1.18
         3.1.18-asserts
         3.1.17
         3.1.17-asserts
         3.1.16
         3.1.16-asserts
         3.1.15
         3.1.15-asserts
         3.1.14
         3.1.14-asserts
         3.1.13
         3.1.13-asserts
         3.1.12
         3.1.12-asserts
         3.1.11
         3.1.11-asserts
         3.1.10
         3.1.10-asserts
         3.1.9
         3.1.9-asserts
         3.1.8
         3.1.8-asserts
         3.1.7
         3.1.7-asserts
         3.1.6
         3.1.6-asserts
         3.1.5
         3.1.5-asserts
         3.1.4
         3.1.4-asserts
         3.1.3
         3.1.3-asserts
         3.1.2
         3.1.2-asserts
         3.1.1
         3.1.1-asserts
         3.1.0
         3.1.0-asserts
         3.0.1
         3.0.1-asserts
         3.0.0
         3.0.0-asserts
         2.0.34
         2.0.33
         2.0.32
         2.0.31
         2.0.31-asserts
         2.0.30
         2.0.30-asserts
         2.0.29
         2.0.29-lto
         2.0.28
         2.0.28-lto
         2.0.27
         2.0.27-lto
         2.0.26
         2.0.26-lto
         2.0.25
         2.0.24
         2.0.23
         2.0.23-lto
         2.0.22
         2.0.21
         2.0.20
         2.0.20-lto
         2.0.19
         2.0.19-lto
         2.0.18
         2.0.17
         2.0.16
         2.0.15
         2.0.14
         2.0.13
         2.0.12
         2.0.11
         2.0.10
         2.0.9
         2.0.8
         2.0.7
         2.0.6
         2.0.5
         2.0.4
         2.0.3
         2.0.2
         2.0.1
         2.0.0
         1.40.1
         1.40.0
         1.39.20
         1.39.19
         1.39.18
         1.39.17
         1.39.16
         1.39.15
         1.39.14
         1.39.13
         1.39.12
         1.39.11
         1.39.10
         1.39.9
         1.39.8
         1.39.7
         1.39.6
         1.39.5
         1.39.4
         1.39.3
         1.39.2
         1.39.1
         1.39.0
         1.38.48
         1.38.47
         1.38.46
         1.38.45
         1.38.44
         1.38.43
         1.38.42
         1.38.41
         1.38.40
         1.38.39
         1.38.38
         1.38.37
         1.38.36
         1.38.35
         1.38.34
         1.38.33

The additional following precompiled SDKs are also available for download:
    *    sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit    INSTALLED
         sdk-releases-48488847a38bb9cfb36e7397bea21ab2bb062680-64bit

The following SDKs can be compiled from source:
         sdk-main-64bit

The following precompiled tool packages are available for download:
    (*)    releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit      INSTALLED
           releases-48488847a38bb9cfb36e7397bea21ab2bb062680-64bit
    (*)    node-14.18.2-64bit           INSTALLED
           node-14.15.5-64bit
     *     python-3.9.2-nuget-64bit     INSTALLED
           python-3.9.2-64bit
     *     java-8.152-64bit             INSTALLED
           emscripten-1.38.30
           emscripten-1.38.31
           gnu-2.5.4
           mingw-7.1.0-64bit

The following tools can be compiled from source:
           llvm-git-main-32bit
           llvm-git-main-64bit
           emscripten-tag-1.38.30-32bit
           emscripten-tag-1.38.31-32bit
           emscripten-tag-1.38.30-64bit
           emscripten-tag-1.38.31-64bit
           binaryen-tag-1.38.30-32bit
           binaryen-tag-1.38.31-32bit
           binaryen-tag-1.38.30-64bit
           binaryen-tag-1.38.31-64bit
           emscripten-main-32bit
           emscripten-main-64bit
           binaryen-main-32bit
           binaryen-main-64bit
           ninja-git-release-64bit
           ccache-git-emscripten-64bit

Items marked with * are activated for the current user.
Items marked with (*) are selected for use, but your current shell environment is not configured to use them. Type &quot;emsdk_env.bat&quot; to set up your current shell to use them, or call &quot;emsdk activate --permanent &lt;name_of_sdk&gt;&quot; to permanently activate them.

To access the historical archived versions, type &#39;emsdk list --old&#39;

Run &quot;./emsdk update&quot; to pull in the latest list.

F:\\emsdk-main\\emsdk-main&gt;emsdk update
Downloading: F:/emsdk-main/emsdk-main/zips/HEAD.zip from https://github.com/emscripten-core/emsdk/archive/HEAD.zip, 116418 Bytes
Unpacking &#39;F:/emsdk-main/emsdk-main/zips/HEAD.zip&#39; to &#39;F:/emsdk-main/emsdk-main&#39;

F:\\emsdk-main\\emsdk-main&gt;emsdk install latest
Resolving SDK alias &#39;latest&#39; to &#39;3.1.31&#39;
Resolving SDK version &#39;3.1.31&#39; to &#39;sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit&#39;
Installing SDK &#39;sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit&#39;..
Skipped installing node-14.18.2-64bit, already installed.
Skipped installing python-3.9.2-nuget-64bit, already installed.
Skipped installing java-8.152-64bit, already installed.
Skipped installing releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit, already installed.
All SDK components already installed: &#39;sdk-releases-1eec24930cb2f56f6d9cd10ffcb031e27ea4157a-64bit&#39;.

F:\\emsdk-main\\emsdk-main&gt;
F:\\emsdk-main\\emsdk-main&gt;dir
  
  

 Directory of F:\\emsdk-main\\emsdk-main

09/02/2023  19:20    &lt;DIR&gt;          .
09/02/2023  19:20    &lt;DIR&gt;          ..
30/01/2023  15:46    &lt;DIR&gt;          .circleci
30/01/2023  15:46    &lt;DIR&gt;          .github
30/01/2023  15:46    &lt;DIR&gt;          bazel
30/01/2023  15:46    &lt;DIR&gt;          docker
30/01/2023  15:46    &lt;DIR&gt;          scripts
30/01/2023  15:46    &lt;DIR&gt;          test
09/02/2023  19:32    &lt;DIR&gt;          zips
09/02/2023  19:33    &lt;DIR&gt;          node
09/02/2023  19:37    &lt;DIR&gt;          python
09/02/2023  19:40    &lt;DIR&gt;          java
09/02/2023  19:51    &lt;DIR&gt;          upstream
12/02/2023  10:11               449 .emscripten
12/02/2023  10:26               405 .dockerignore
12/02/2023  10:26               418 .flake8
12/02/2023  10:26               470 .gitignore
12/02/2023  10:26             1.326 LICENSE
12/02/2023  10:26            12.373 README.md
12/02/2023  10:26                26 emcmdprompt.bat
12/02/2023  10:26             9.375 emscripten-releases-tags.json
12/02/2023  10:26             1.642 emsdk
12/02/2023  10:26             1.564 emsdk.bat
12/02/2023  10:26             1.393 emsdk.ps1
12/02/2023  10:26           115.073 emsdk.py
12/02/2023  10:26                33 emsdk_env.bat
12/02/2023  10:26               566 emsdk_env.csh
12/02/2023  10:26               304 emsdk_env.fish
12/02/2023  10:26                98 emsdk_env.ps1
12/02/2023  10:26             1.977 emsdk_env.sh
12/02/2023  10:26            21.675 emsdk_manifest.json
12/02/2023  10:26               659 legacy-binaryen-tags.txt
12/02/2023  10:26             1.190 legacy-emscripten-tags.txt
12/02/2023  10:26             2.380 llvm-tags-64bit.txt
              21 File(s)        173.396 bytes
              13 Dir(s)  37.215.535.104 bytes free

F:\\emsdk-main\\emsdk-main&gt;emcc
shared:INFO: (Emscripten: Running sanity checks)
emcc: error: no input files

F:\\emsdk-main\\emsdk-main&gt;emcc calculates_primes.c
emcc: error: calculates_primes.c: No such file or directory (&quot;calculates_primes.c&quot; was expected to be an input file, based on the commandline arguments provided)

F:\\emsdk-main\\emsdk-main&gt;cd \\

F:\\&gt;dir
  
  

 Directory of F:\\

F:\\&gt;cd my-web-em

F:\\my-web-em&gt;dir
  
  

 Directory of F:\\my-web-em

12/02/2023  12:16    &lt;DIR&gt;          .
12/02/2023  12:16    &lt;DIR&gt;          ..
12/02/2023  12:17    &lt;DIR&gt;          ese00
               0 File(s)              0 bytes
               3 Dir(s)  37.213.208.576 bytes free

F:\\my-web-em&gt;cd ese00

F:\\my-web-em\\ese00&gt;dir
  
  

 Directory of F:\\my-web-em\\ese00

12/02/2023  12:17    &lt;DIR&gt;          .
12/02/2023  12:17    &lt;DIR&gt;          ..
12/02/2023  12:20    &lt;DIR&gt;          html_template
               0 File(s)              0 bytes
               3 Dir(s)  37.213.208.576 bytes free

F:\\my-web-em\\ese00&gt;cd html_template

F:\\my-web-em\\ese00\\html_template&gt;dir
  
  

 Directory of F:\\my-web-em\\ese00\\html_template

12/02/2023  12:20    &lt;DIR&gt;          .
12/02/2023  12:20    &lt;DIR&gt;          ..
12/02/2023  12:33               524 calculates_primes.c
               1 File(s)            524 bytes
               2 Dir(s)  37.213.208.576 bytes free

F:\\my-web-em\\ese00\\html_template&gt;emcc
emcc: error: no input files

F:\\my-web-em\\ese00\\html_template&gt;emcc calculate_primes.c -o html_template.html
emcc: error: calculate_primes.c: No such file or directory (&quot;calculate_primes.c&quot; was expected to be an input file, based on the commandline arguments provided)

F:\\my-web-em\\ese00\\html_template&gt;emcc
emcc: error: no input files

F:\\my-web-em\\ese00\\html_template&gt;dir
  
  

 Directory of F:\\my-web-em\\ese00\\html_template

12/02/2023  12:20    &lt;DIR&gt;          .
12/02/2023  12:20    &lt;DIR&gt;          ..
12/02/2023  12:33               524 calculates_primes.c
               1 File(s)            524 bytes
               2 Dir(s)  37.213.208.576 bytes free

F:\\my-web-em\\ese00\\html_template&gt;dir
  
  

 Directory of F:\\my-web-em\\ese00\\html_template

12/02/2023  12:20    &lt;DIR&gt;          .
12/02/2023  12:20    &lt;DIR&gt;          ..
12/02/2023  12:33               524 calculates_primes.c
30/05/2019  19:09             1.364 calculate_primes.c
               2 File(s)          1.888 bytes
               2 Dir(s)  37.213.175.808 bytes free

F:\\my-web-em\\ese00\\html_template&gt;emcc calculate_primes.c -o html_template.html
cache:INFO: generating system asset: symbol_lists/1c683af19e290d0b5ca7a8747d74a76f63dcb362.txt... (this will be cached in &quot;F:\\emsdk-main\\emsdk-main\\upstream\\emscripten\\cache\\symbol_lists\\1c683af19e290d0b5ca7a8747d74a76f63dcb362.txt&quot; for subsequent builds)
cache:INFO:  - ok

F:\\my-web-em\\ese00\\html_template&gt;
F:\\my-web-em\\ese00\\html_template&gt;
F:\\my-web-em\\ese00\\html_template&gt;dir
  
  

 Directory of F:\\my-web-em\\ese00\\html_template

12/02/2023  12:20    &lt;DIR&gt;          .
12/02/2023  12:20    &lt;DIR&gt;          ..
12/02/2023  12:33               524 calculates_primes.c
30/05/2019  19:09             1.364 calculate_primes.c
12/02/2023  12:47            12.749 html_template.wasm
12/02/2023  12:47            64.889 html_template.js
12/02/2023  12:47           103.808 html_template.html
               5 File(s)        183.334 bytes
               2 Dir(s)  37.212.749.824 bytes free

F:\\my-web-em\\ese00\\html_template&gt;http://localhost:8080/html_template.html
&#39;http:&#39; is not recognized as an internal or external command,
operable program or batch file.

F:\\my-web-em\\ese00\\html_template&gt;emrun --port 8080 html_template.html
Terminate batch job (Y/N)? y

F:\\my-web-em\\ese00\\html_template&gt;emrun --port 8080 html_template.html
Terminate batch job (Y/N)? y

F:\\my-web-em\\ese00\\html_template&gt;dir
  
  

 Directory of F:\\my-web-em\\ese00\\html_template

12/02/2023  12:20    &lt;DIR&gt;          .
12/02/2023  12:20    &lt;DIR&gt;          ..
12/02/2023  12:33               524 calculates_primes.c
30/05/2019  19:09             1.364 calculate_primes.c
12/02/2023  12:47            12.749 html_template.wasm
12/02/2023  12:47            64.889 html_template.js
12/02/2023  12:47           103.808 html_template.html
               5 File(s)        183.334 bytes
               2 Dir(s)  37.212.487.680 bytes free

F:\\my-web-em\\ese00\\html_template&gt;emcc calculate_primes.c -o js_plumbing.js

F:\\my-web-em\\ese00\\html_template&gt;dir
  
  

 Directory of F:\\my-web-em\\ese00\\html_template

12/02/2023  12:20    &lt;DIR&gt;          .
12/02/2023  12:20    &lt;DIR&gt;          ..
12/02/2023  12:33               524 calculates_primes.c
30/05/2019  19:09             1.364 calculate_primes.c
12/02/2023  12:47            12.749 html_template.wasm
12/02/2023  12:47            64.889 html_template.js
12/02/2023  12:47           103.808 html_template.html
12/02/2023  13:06            12.749 js_plumbing.wasm
12/02/2023  13:06            64.887 js_plumbing.js
               7 File(s)        260.970 bytes
               2 Dir(s)  37.212.389.376 bytes free

F:\\my-web-em\\ese00\\html_template&gt;dir
  
  

 Directory of F:\\my-web-em\\ese00\\html_template

12/02/2023  12:20    &lt;DIR&gt;          .
12/02/2023  12:20    &lt;DIR&gt;          ..
12/02/2023  12:33               524 calculates_primes.c
30/05/2019  19:09             1.364 calculate_primes.c
12/02/2023  12:47            12.749 html_template.wasm
12/02/2023  12:47            64.889 html_template.js
12/02/2023  12:47           103.808 html_template.html
12/02/2023  13:06            12.749 js_plumbing.wasm
12/02/2023  13:06            64.887 js_plumbing.js
12/02/2023  13:12               169 js_plumbing.html
               8 File(s)        261.139 bytes
               2 Dir(s)  37.212.356.608 bytes free

F:\\my-web-em\\ese00\\html_template&gt;
F:\\my-web-em\\ese00\\html_template&gt;


</pre> 
<hr/> 
<hr/> 
<a href="https://scrivi.altervista.org/emscripten/my-web-em/ese00/html_template/html_template.html">running compiled program</a> 
<hr/> 





<pre style="background-color:black;color:magenta;font-size:inherit; overflow:auto; ">

⚠
<div style="background-color:white;color:black;display:inline-block;">
</div>
✔ 
✔ 
✔
</pre> 

 <br/> 
 <br/>
Nella cartella 214a dal 44 al 53(ko) invece da 54 in poi (ok) <br/> 

<br/><br/> 


<hr/> 
<span><a href="https://www.rinaldo-rasa.it/00/e/extra/docu/emoji/emoji_local.html">emoji_local</a> 
</span><span> </span> 
<span><a href="https://www.rinaldo-rasa.it/00/e/extra/docu/trasponder0/trasponder0v3__full_monty.html">trasponder0v3</a> 
</span><span> </span> 
<span><a href="http://venexiatre.altervista.org/WORKOU/OGGI/20191119/testtag.html#codicicoloristandard">colori_default</a> 
</span><span> </span> 
<span><a href="https://www.rinaldo-rasa.it/WORKOU/OGGI/20191119/00/e/extra/coloris/hexacolors.html">x11_colors</a> 
</span><span> </span> 






<hr/> 
<br/> 
<span>fin step:2023:02:18::19:07</span> 
<span style="margin:0;padding:0;display:inline-block!important;" class="cursores svelte-r31aew"></span></div>`,d=g(),l=a("div"),m=g(),c=a("div"),c.textContent="... TEST_0101",ye=g(),u=a("div"),u.textContent="NO",r=g(),b=a("div"),b.textContent="SI",p=g(),_=a("article"),_.innerHTML='<div><input id="INPUT_SCELTO_0101" type="range" list="LISTA_0101" step="0.10" min="0.00" max="6.00"/></div>',he=g(),s=a("datalist"),f=a("option"),h=a("option"),v=a("option"),y=a("option"),k=a("option"),I=a("option"),D=a("option"),E=a("option"),T=a("option"),S=a("option"),O=a("option"),R=a("option"),w=a("option"),P=a("option"),N=a("option"),z=a("option"),A=a("option"),F=a("option"),M=a("option"),L=a("option"),C=a("option"),x=a("option"),Z=a("option"),U=a("option"),K=a("option"),j=a("option"),G=a("option"),B=a("option"),V=a("option"),q=a("option"),W=a("option"),H=a("option"),$=a("option"),Y=a("option"),Q=a("option"),J=a("option"),X=a("option"),ee=a("option"),te=a("option"),ne=a("option"),ie=a("option"),ae=a("option"),se=a("option"),oe=a("option"),le=a("option"),re=a("option"),me=a("option"),de=a("option"),ce=a("option"),pe=a("option"),ue=a("option"),ge=a("option"),Ae=g(),Se=a("script"),Se.textContent=`// 
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
\`
<style>

#MAIN{
position:fixed;
top:0rem;left:0rem;

width:\`+LarghezzaBodyRem_0303+\`rem;
height:\`+AltezzaApplicazione+\`rem;

font-family:"PT Mono", monospace;

overflow:auto;
z-index:10000000;
}



#APPLICAZIONE{
position:fixed;
top:0rem;left:0rem;

width:\`+LarghezzaBodyRem_0303+\`rem;
height:\`+AltezzaApplicazione+\`rem;

border:solid 0.00rem green;

overflow:auto;
z-index:10000000;
}


#CONTENITORE_INPUT_0101{

position:fixed;
bottom:0rem;left:\`+PosizioneLeftContenitoreInput+\`rem;

width:\`+LarghezzaContenitoreInput+\`rem;
height:\`+AltezzaContenitoreInput+\`rem;

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



\`;



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
// \\/
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


document.getElementById("TEST_0101").innerHTML=\`

<style>
#APPLICAZIONE{font-size:\`+DIM_INPUT_0101+\`rem!important;}
#BUONGIORNO_0101{font-size:\`+DIM_INPUT_0101+\`rem!important;}
#POMERIGGIO_0202{font-size:\`+DIM_INPUT_0101+\`rem!important;}


img{ width:\`+DIM_IMAGE_0101+\`rem!important;max-width:100%!important;max-height:100%;!important}

#BUONGIORNO_0101{font-family:monospace;text-align:left;}

#APPLICAZIONE, #BUONGIORNO_0101, #POMERIGGIO_0202{text-align:left;overflow:auto;}

#VERSIONE_TEST{
width:\`+ LarghezzaPianoterra+\`rem;
height:\`+ AltezzaPrimopiano+\`rem;





}

\`+ StileVersioneVERSIONE_TEST_NESTED +\`


</style>


    
\`;



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
\`
<style>
#TOG_SI{position:fixed;bottom:0rem;left:0rem;

    border-top:solid     \`+BordoToggleDeviceRem_0303+\`rem rgba(102,152,105,0);
    border-right:solid   \`+BordoToggleDeviceRem_0303+\`rem rgba(102,152,105,0);
    border-bottom:solid  \`+BordoToggleDeviceRem_0303+\`rem rgba(102,152,105,1);
    border-left:solid    \`+BordoToggleDeviceRem_0303+\`rem rgba(102,152,105,1);
    border-radius:0.5rem;
    display:inline-block; 
    cursor:pointer;
    z-index:10000000;
}
</style>
\`;


document.getElementById("TOG_NO").innerHTML=
\`
<style>
#TOG_NO{position:fixed;bottom:0rem;left:0rem;

    border-top:solid     \`+BordoToggleDeviceRem_0303+\`rem rgba(102,152,105,1);
    border-right:solid   \`+BordoToggleDeviceRem_0303+\`rem rgba(102,152,105,1);
    border-bottom:solid  \`+BordoToggleDeviceRem_0303+\`rem rgba(102,152,105,0);
    border-left:solid    \`+BordoToggleDeviceRem_0303+\`rem rgba(102,152,105,0);
    border-radius:0.5rem;
    display:inline-block; 
    cursor:pointer;
    z-index:10000000;


} 
</style>

\`;



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

}`,Fe=g(),ke=a("link"),Me=g(),Ie=a("link"),Le=g(),De=a("link"),i(o,"id","VERSIONE_TEST"),i(o,"class","da_mo svelte-r31aew"),i(l,"id","APPLICAZIONE"),Re(l,"display","none"),i(l,"class","da_mo svelte-r31aew"),i(c,"id","TEST_0101"),i(u,"id","TOG_NO"),i(u,"onclick","Tog_No()"),i(b,"id","TOG_SI"),i(b,"onclick","Tog_Si()"),i(_,"id","CONTENITORE_INPUT_0101"),Re(_,"display","none"),Re(_,"display","block"),i(f,"id","OPZ_00"),f.__value="0.00",f.value=f.__value,i(h,"id","OPZ_01"),h.__value="0.11",h.value=h.__value,i(v,"id","OPZ_02"),v.__value="0.22",v.value=v.__value,i(y,"id","OPZ_03"),y.__value="0.33",y.value=y.__value,i(k,"id","OPZ_04"),k.__value="0.44",k.value=k.__value,i(I,"id","OPZ_05"),I.__value="0.55",I.value=I.__value,i(D,"id","OPZ_06"),D.__value="0.66",D.value=D.__value,i(E,"id","OPZ_07"),E.__value="0.77",E.value=E.__value,i(T,"id","OPZ_08"),T.__value="0.88",T.value=T.__value,i(S,"id","OPZ_09"),S.__value="0.99",S.value=S.__value,i(O,"id","OPZ_10"),O.__value="2.00",O.value=O.__value,i(R,"id","OPZ_11"),R.__value="2.11",R.value=R.__value,i(w,"id","OPZ_12"),w.__value="2.22",w.value=w.__value,i(P,"id","OPZ_13"),P.__value="2.33",P.value=P.__value,i(N,"id","OPZ_14"),N.__value="2.44",N.value=N.__value,i(z,"id","OPZ_15"),z.__value="2.55",z.value=z.__value,i(A,"id","OPZ_16"),A.__value="2.66",A.value=A.__value,i(F,"id","OPZ_17"),F.__value="2.77",F.value=F.__value,i(M,"id","OPZ_18"),M.__value="2.88",M.value=M.__value,i(L,"id","OPZ_19"),L.__value="2.99",L.value=L.__value,i(C,"id","OPZ_20"),C.__value="3.00",C.value=C.__value,i(x,"id","OPZ_21"),x.__value="3.11",x.value=x.__value,i(Z,"id","OPZ_22"),Z.__value="3.22",Z.value=Z.__value,i(U,"id","OPZ_23"),U.__value="3.33",U.value=U.__value,i(K,"id","OPZ_24"),K.__value="3.44",K.value=K.__value,i(j,"id","OPZ_25"),j.__value="3.55",j.value=j.__value,i(G,"id","OPZ_26"),G.__value="3.66",G.value=G.__value,i(B,"id","OPZ_27"),B.__value="3.77",B.value=B.__value,i(V,"id","OPZ_28"),V.__value="3.88",V.value=V.__value,i(q,"id","OPZ_29"),q.__value="3.99",q.value=q.__value,i(W,"id","OPZ_30"),W.__value="4.00",W.value=W.__value,i(H,"id","OPZ_31"),H.__value="4.11",H.value=H.__value,i($,"id","OPZ_32"),$.__value="4.22",$.value=$.__value,i(Y,"id","OPZ_33"),Y.__value="4.33",Y.value=Y.__value,i(Q,"id","OPZ_34"),Q.__value="4.44",Q.value=Q.__value,i(J,"id","OPZ_35"),J.__value="4.55",J.value=J.__value,i(X,"id","OPZ_36"),X.__value="4.66",X.value=X.__value,i(ee,"id","OPZ_37"),ee.__value="4.77",ee.value=ee.__value,i(te,"id","OPZ_38"),te.__value="4.88",te.value=te.__value,i(ne,"id","OPZ_39"),ne.__value="4.99",ne.value=ne.__value,i(ie,"id","OPZ_40"),ie.__value="5.00",ie.value=ie.__value,i(ae,"id","OPZ_41"),ae.__value="5.00",ae.value=ae.__value,i(se,"id","OPZ_42"),se.__value="5.11",se.value=se.__value,i(oe,"id","OPZ_43"),oe.__value="5.22",oe.value=oe.__value,i(le,"id","OPZ_44"),le.__value="5.33",le.value=le.__value,i(re,"id","OPZ_45"),re.__value="5.44",re.value=re.__value,i(me,"id","OPZ_46"),me.__value="5.55",me.value=me.__value,i(de,"id","OPZ_47"),de.__value="5.66",de.value=de.__value,i(ce,"id","OPZ_48"),ce.__value="5.77",ce.value=ce.__value,i(pe,"id","OPZ_49"),pe.__value="5.88",pe.value=pe.__value,i(ue,"id","OPZ_50"),ue.__value="5.99",ue.value=ue.__value,i(ge,"id","OPZ_51"),ge.__value="6.00",ge.value=ge.__value,i(s,"id","LISTA_0101"),i(ke,"rel","preconnect"),i(ke,"href","https://fonts.gstatic.com"),i(Ie,"href","https://fonts.googleapis.com/css2?family=PT+Mono&display=swap"),i(Ie,"rel","stylesheet"),i(De,"href","https://fonts.googleapis.com/css2?family=Rasa:wght@300&display=swap"),i(De,"rel","stylesheet"),i(e,"id","MAIN"),i(e,"class","da_mo svelte-r31aew"),i(e,"lang","it")},m(Oe,Be){We(Oe,e,Be),n(e,o),n(e,d),n(e,l),n(e,m),n(e,c),n(e,ye),n(e,u),n(e,r),n(e,b),n(e,p),n(e,_),n(e,he),n(e,s),n(s,f),n(s,h),n(s,v),n(s,y),n(s,k),n(s,I),n(s,D),n(s,E),n(s,T),n(s,S),n(s,O),n(s,R),n(s,w),n(s,P),n(s,N),n(s,z),n(s,A),n(s,F),n(s,M),n(s,L),n(s,C),n(s,x),n(s,Z),n(s,U),n(s,K),n(s,j),n(s,G),n(s,B),n(s,V),n(s,q),n(s,W),n(s,H),n(s,$),n(s,Y),n(s,Q),n(s,J),n(s,X),n(s,ee),n(s,te),n(s,ne),n(s,ie),n(s,ae),n(s,se),n(s,oe),n(s,le),n(s,re),n(s,me),n(s,de),n(s,ce),n(s,pe),n(s,ue),n(s,ge),n(e,Ae),n(e,Se),n(e,Fe),n(e,ke),n(e,Me),n(e,Ie),n(e,Le),n(e,De)},p:fe,i:fe,o:fe,d(Oe){Oe&&je(e)}}}class lt extends st{constructor(e){super(),at(this,e,null,ot,Ve,{})}}new lt({target:document.getElementById("app")});
