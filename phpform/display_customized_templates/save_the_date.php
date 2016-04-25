<?php
session_start();
$_SESSION['save_the_date_message'] = $POST['save_the_date_message'];
$_SESSION['stdt_date'] = $POST['stdt_date'];
$_SESSION['location'] = $POST['location'];
$_SESSION['names'] = $POST['names'];
$_SESSION['website'] = $POST['website'];
?>
<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../reset.css" type="text/css">
  <link rel="stylesheet" href="../main.css" type="text/css">
  <link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.min.css" type="text/css">
 </head>
 <body class="template_background">
 	<div class="title_bar">APPY COUPLE</div>
    <div class="sub_title_bar">Appy Stationery Studio</div>
 	<p>This is the save the date page</p>
 	<div class="customized_template_preview_area">
 	 <?php var_dump($_SESSION); ?>
 	 <input type="submit" class="button" value="Download" name="download_submit">
 	 <input type="button" class="button" value="Print" name="print_submit" onclick="window.print()">
   </div>
</html>