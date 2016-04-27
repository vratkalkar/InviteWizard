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
     <h3>Add your Details:</h3>
   </div>

   <div class="row">
     <div class="form_container">
      <form action="../../process_forms/process_invitation/process_page_one.php" method="POST" data-abide>
        <label>Wedding Website URL:</label>
          <input type="text" name="website_url"/>
        <label>Wedding Code:</label>
          <input type="text" name="wedding_code" />
        <input type="submit" class="button"  id="back_button" value="Back" onclick="history.back();">
        <input type="submit" class="button"  id="continue_button" value="Continue" name="form_submit">
    </form>
  </div>
 </div>
</html>