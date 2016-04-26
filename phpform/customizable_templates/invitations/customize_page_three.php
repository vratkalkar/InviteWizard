<?php
session_start();
$_SESSION['website_url'] = $_POST['website_url'];
$_SESSION['wedding_code'] = $_POST['wedding_code'];

$website_url = $_SESSION['website_url'];
$wedding_code = $_SESSION['wedding_code'];
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
     <h3>Add your Details:</h3>
   </div>

   <div class="row">
     <div class="form_container">
      <form action="../../process_forms/process_invitation/process_page_three.php" method="POST" data-abide>

      	<label>Website URL:<br>
          <input type="text" name="website_url" />
        </label>

        <label>Wedding Code:<br>
          <input type="number" name="wedding_code" placeholder="Your Appy Code" />
        </label>
       
         <input id="customize_invite_button" type="submit" class="button" value="Continue" name="form_submit">
    </div>
     <script type="text/javascript" src="../../main.js"></script>
 </body>
</html>