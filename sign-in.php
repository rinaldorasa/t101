 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 <meta name="generator" content="AlterVista - Editor HTML"/>

 <title>sign-in</title> 

 <link rel="preconnect" href="https://fonts.gstatic.com">
 <link href="https://fonts.googleapis.com/css2?family=PT+Mono&display=swap" rel="stylesheet">
 <style>
 html * {font-size:2.75rem;font-family:"PT Mono",monospace;}
 body{background-color:black;}
 </style>
 </head>
<body>
 <main>

<article style="border:solid 0rem maroon;border-radius:0.25rem;">
 <form method="post" name="Login_Form" style="border:solid 0rem transparent;background-color:oldlace;">
 <table style="margin:0 auto;">
 <tr> <td><h3><span>Login</span></h3></td> <td></td> </tr>
 <tr> <td style="font-variant:small-caps;">Username</td> <td><input name="Username" type="text" class="Input" style="color:transparent;border:solid 0rem transparent;">
 <span style="background-color:oldlace; color:maroon;color:transparent;">username1</span></td></tr>
 <tr><td style="font-variant:small-caps;">Password </td><td><input name="Password" type="password" class="Input" style="color:transparent;border:solid 0rem transparent;">
 <span style="background-color:oldlace; color:maroon;color:transparent;">password1</span></td>
 </tr>
 <tr> <td><input name="Submit" type="submit" value="Login" style=" cursor:pointer !important;">
 </td><td> </td></tr>
 </table>
 </form>
</article>




 <?php session_start(); 
 if(isset($_POST['Submit'])){
 
 $logins = array('username0' => 'password0','username0' => 'password0','username0' => 'password0');
 
 $Username = isset($_POST['Username']) ? $_POST['Username'] : '';
 $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
 
 if (isset($logins[$Username]) && $logins[$Username] == $Password){
 
 $_SESSION['UserData']['Username']=$logins[$Username];
 header("location:file.php");
 exit;
 } else {
 
 $msg="<span style='color:red'>Invalid Login Details</span>";
 
 }
 }
 ?>
 

 </main> 
 
 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/platform/1.3.5/platform.min.js"></script> 
 <script> console.log(platform); document.write("<div style='font-size:1.25rem;text-align:center;font-variant:small-caps;color:gray;'>you are using " + platform.name + " v" + platform.version + " on " + platform.os); +"</div>" </script> 
 <script> if(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){/* true for mobile device */ document.write("mobile device"); }else{/* false for not mobile device */ document.write("not mobile device"); } </script>
 <span id="result"></span> 
 <script>"use strict"; function displayWindowSize(){ var w = document.documentElement.clientWidth;var h = document.documentElement.clientHeight;var wFinestraWIDTH = document.documentElement.clientWidth;var hFinestraHEIGHT = document.documentElement.clientHeight;document.getElementById("result").innerHTML = "<span style='font-size:1.25rem;font-variant:small-caps;'> " + wFinestraWIDTH + "x" + hFinestraHEIGHT +" ";}window.addEventListener("resize", displayWindowSize);displayWindowSize();</script>  
 </body>
 </html>