<?php
session_start();
$_SESSION['reminder'] = $POST['reminder'];
?>
<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../main.css" type="text/css">
  <link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.min.css" type="text/css">
 </head>
 <body class="template_background">
 	<p>This is the reminder page</p>
 </body>
</html>