<?php
  session_start();
?>
<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../../reset.css" type="text/css">
  <link rel="stylesheet" href="../../main.css" type="text/css">
  <link rel="stylesheet" href="../../foundation-6.2.0-essential/css/foundation.css" type="text/css">
</head>
 <body class="template_background">
 <div class="title_bar">APPY COUPLE</div>
   <div class="sub_title_bar">Appy Invite Wizard</div>
   <div class="header_section">
      <h3>Your Suggested Invitation</h3>
   </div>
   <div class="customized_template_preview_area">
 	 <?php var_dump($_SESSION); ?>

 	 <div class="button_area">
 	   <input type="submit" class="button" value="Download" name="download_submit">
 	   <input type="button" class="button" value="Print" name="print_submit" onclick="window.print()">
 	 </div>
   </div>
 </body>
</html>