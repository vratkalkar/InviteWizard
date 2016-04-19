<?php
session_start();
?>

<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../main.css" type="text/css">
  <link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.min.css" type="text/css">
 </head>
 <body class="template_background">
 <div class="title_bar">APPY COUPLE</div>
   <div class="sub_title_bar">Appy Stationery Studio</div>
    <div class="header_section">
 	  <h3>Choose a Theme</h3>
    </div>
    <div class="theme_container">
    </div>
 	<?php 
 	 var_dump($_SESSION);
 	?>
 	<p></p>
 </body>
</html>