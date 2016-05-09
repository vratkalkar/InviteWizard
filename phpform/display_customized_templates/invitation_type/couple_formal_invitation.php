<?php
  session_start();
?>

<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../../css/reset.css" type="text/css" />
  <link rel="stylesheet" href="../../css/main.css" type="text/css" />
  <link rel="stylesheet" href="../../foundation-6.2.1-essential/css/foundation.css" type="text/css" />
  <link rel="stylesheet" type="text/css" href="../../css/content-tools.css" />  
 </head>
 <body class="template_background">
  <div id="content">
   <div class="title_bar">APPY COUPLE</div>
   <div class="sub_title_bar">Appy Invite Wizard</div>

   <div class="header_section">
     <h3>Your Suggested Invitation Wording:</h3>
   </div>

  
   <div class="invite_container" data-editable data-name="invite_text">
     <p><?php echo $_SESSION['spouse1']; ?> and <?php echo $_SESSION['spouse2']; ?> </p>
     <p>Request the pleasure of your company at the occasion of their</p>
            <p>Wedding Ceremony</p>
            <p>on</p>
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
     <!-- <input type="submit" class="button" value="Edit" name="edit" /> -->
     <input type="submit" id="click_download" class="button" value="Download" name="download_submit"/>
     <input type="button" class="button" value="Print" name="print_submit" onclick="window.print()" />
   </div>
     <script
        src="https://code.jquery.com/jquery-2.2.3.min.js"
        integrity="sha256-a23g1Nt4dtEYOj7bR+vTu7+T8VP13humZFBJNIYoEJo="
        crossorigin="anonymous"></script>
     <script type="text/javascript" src="../../js/main.js"></script>
     <script type="text/javascript" src="../../js/html2canvas.js"></script>
     <script type="text/javascript" src="../../js/filesaver.js"></script>
     <script type="text/javascript" src="../../js/content-tools.js"></script>
     <script type="text/javascript" src="../../js/editor.js"></script>
 <?php session_unset(); ?>
 <?php session_destroy(); ?>
 </body>
</html>