<?php
session_start();
$_SESSION['address'] = $POST['address'];
$_SESSION['email_address'] = $POST['email_address'];
$_SESSION['phone_number'] = $POST['phone_number'];
$_SESSION['mailing_address'] = $POST['mailing_address'];
?>
<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../main.css" type="text/css">
  <link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.min.css" type="text/css">
  <script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
 </head>
 <body class="template_background">
   <div class="title_bar">APPY COUPLE</div>
   <div class="sub_title_bar">Appy Stationery Studio</div>

   <div class="row">
     <div class="form_container">
        <form action="process_forms/process_mailing_address.php" method="POST" data-abide>
          <label>Your Names:<br>
            <input name="names" required/>
          </label>
          <label>Email Address:<br>
            <input name="email_address" required/>
          </label>
          <label>Phone Number:<br>
            <input name="phone_number" required/>
          </label>
      </div>

      <div class="editor_section">
        <label>Your Address:<br>
          <textarea class="editor1" name="message" name="mailing_address"></textarea>
          <input type="submit" class="button" value="Next">
        </form>
     </div>
     <script type="text/javascript" src="../main.js"></script>
 </body>
</html>