<?php
 session_start();
 include("login.php");
 echo check_login();
 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head><title>praktik login session</title></head>
   <body>
     <h1>Selamat Datang</h1>
     <h3><a href="logout.php">Logout!</a></h3>
   </body>
 </html>
