<?php
  session_start();
?>

<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../../css/reset.css" type="text/css" />
  <link rel="stylesheet" href="../../css/main.css" type="text/css" />
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
     <p><?php echo $_SESSION['spouse1']; ?></p>
            <p>and</p>
     <p><?php echo $_SESSION['spouse2']; ?></p>
     <p>are getting married, and we want you to join us!</p>
            <p>on</p>
     <p><?php echo $_SESSION['date']; ?></p>
            <p>at</p>
     <p><?php echo $_SESSION['venue']; ?></p>
     <p><?php echo $_SESSION['address']; ?></p>
     <p>Events start at<?php echo $_SESSION['time'] ?></p>
     <p>Visit our website at <?php echo $_SESSION['website_url']; ?>, and use wedding code: <?php echo $_SESSION['wedding_code']; ?></p>
   </div>
 </body>
</div>
  <div class="button_area">
     <input type="submit" class="button" value="Edit" name="edit" />
     <input type="submit" id="click_download" class="button" value="Download" name="download_submit"/>
     <input type="button" class="button" value="Print" name="print_submit" onclick="window.print()" />
   </div>
     <script
        src="https://code.jquery.com/jquery-2.2.3.min.js"
        integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
        crossorigin="anonymous"></script>
     <script type="text/javascript" src="../../js/html2canvas.js"></script>
     <script type="text/javascript" src="../../js/canvas2image.js"></script>
     <script type="text/javascript" src="../../js/filesaver.js"></script>
     <script type="text/javascript" src="../../js/main.js"></script>
 <?php session_unset(); ?>
 <?php session_destroy(); ?>
 </body>
</html>