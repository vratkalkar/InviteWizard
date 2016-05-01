<?php
  session_start();
?>

<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../../reset.css" type="text/css" />
  <link rel="stylesheet" href="../../main.css" type="text/css" />
  <link rel="stylesheet" href="../../foundation-6.2.1-essential/css/foundation.css" type="text/css" /> 
 </head>
 <body class="template_background">
  <div id="content">
   <div class="title_bar">APPY COUPLE</div>
   <div class="sub_title_bar">Appy Invite Wizard</div>

   <div class="header_section">
     <h3>Your Suggested Invitation Wording:</h3>
   </div>

  
   <div class="invite_container">
     <p><?php echo $_SESSION['parents_names']; ?></p>
     <p>Request the pleasure of your company at the auspicious occasion of the</p>
            <p>Wedding Ceremony</p>
            <p>of their daughter</p>
     <p><?php echo $_SESSION['spouse1']; ?></p>
            <p>to</p>
     <p><?php echo $_SESSION['spouse2']; ?></p>
     <p><?php echo $_SESSION['date']; ?></p>
            <p>at</p>
     <p><?php echo $_SESSION['venue']; ?></p>
     <p><?php echo $_SESSION['address']; ?></p>
     <p>Ceremony begins at <?php echo $_SESSION['time'] ?></p>
     <p>Details are available at <?php echo $_SESSION['website_url']; ?>, with wedding code: <?php echo $_SESSION['wedding_code']; ?></p>
   </div>
 </body>
</div>
 	<div class="button_area">
     <input type="submit" class="button" value="Edit" name="edit" />
 	   <input type="submit" id="click_download" class="button" value="Download" name="download_submit" />
 	   <input type="button" class="button" value="Print" name="print_submit" onclick="window.print()" />
   </div>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
     <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.debug.js"></script>
     <script type="text/javascript" src="../../main.js"></script>
 </body>
</html>