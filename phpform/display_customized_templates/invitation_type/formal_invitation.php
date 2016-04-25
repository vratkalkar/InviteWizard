<?php
session_start();
$_SESSION['parents_names'] = $_POST['parents_names'];
$_SESSION['spouse1'] = $_POST['spouse1'];
$_SESSION['spouse2'] = $_POST['spouse2'];
$_SESSION['venue'] = $_POST['venue'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['date'] = $_POST['date'];
$_SESSION['time'] = $_POST['time'];
$_SESSION['website_url'] = $_POST['website_url'];
$_SESSION['wedding_code'] = $_POST['wedding_code'];
?>

<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../../reset.css" type="text/css" />
  <link rel="stylesheet" href="../../main.css" type="text/css" />
  <link rel="stylesheet" href="../../foundation-6.2.0-essential/css/foundation.css" type="text/css" /> 
 </head>
 <body class="template_background">
   <div class="title_bar">APPY COUPLE</div>
   <div class="sub_title_bar">Appy Invite Wizard</div>

   <div class="header_section">
     <h3>Your Suggested Invitation:</h3>
   </div>
   <?php var_dump($_SESSION); ?>
 </body>
 	<div class="button_area">
 	   <input type="submit" class="button" value="Download" name="download_submit">
 	   <input type="button" class="button" value="Print" name="print_submit" onclick="window.print()" />
   </div>
   <script type="text/javascript" src="../../main.js"></script>
 </body>
</html>