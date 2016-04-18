<?php
  session_start();
?>
<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../../main.css" type="text/css">
  <link rel="stylesheet" href="../../foundation-6.2.0-essential/css/foundation.css" type="text/css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.min.css" type="text/css">
 </head>
 <body class="template_background">
 <div class="title_bar">APPY COUPLE</div>
   <div class="sub_title_bar">Appy Stationery Studio</div>
 	<p>This is the formal invitation page</p>
 	<?php var_dump($_SESSION) ?>
 </body>
 <?php 
   session_unset(); 
   session_destroy();
 ?>
</html>