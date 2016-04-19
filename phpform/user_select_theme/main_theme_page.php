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
    <div class="element_container">
     <div class="header_section">
 	   <h3>Choose a Theme</h3>
     </div>

      <div class="theme_container">
      	<form action="process_theme_selection.php" method="POST">
    	  <p style="text-align:center; padding-top: 200px">Theme images would appear here for selection</p>
      </div>
      <input class="index_button" class="expanded button" type="submit" name="form_submit" value="Customize">
    </form>
</div>
 	<p></p>
 </body>
</html>