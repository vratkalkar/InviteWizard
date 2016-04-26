<?php
  session_start();
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

   <div class="invite_container">
     <h3><?php echo $_SESSION['parents_names']; ?></h3>
     <h4>Request the pleasure of your company at the auspicious occasion of the</h4>
            <h4>Wedding Ceremony</h4>
            <p>of their daughter</p>
     <h3><?php echo $_SESSION['spouse1']; ?></h3>
            <p>to</p>
     <h3><?php echo $_SESSION['spouse2']; ?></h3>
     <h3><?php echo $_SESSION['date']; ?></h3>
            <p>at</p>
   <h3><?php echo $_SESSION['venue']; ?></h3>
   <h3><?php echo $_SESSION['address']; ?></h3>
   <h4>Ceremony begins at <?php echo $_SESSION['time'] ?></h4>
   </div>
 </body>
 	<div class="button_area">
 	   <input type="submit" class="button" value="Download" name="download_submit">
 	   <input type="button" class="button" value="Print" name="print_submit" onclick="window.print()" />
   </div>
   <script type="text/javascript" src="../../main.js"></script>
 </body>
</html>