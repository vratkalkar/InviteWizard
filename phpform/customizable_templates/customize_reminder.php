<?php
session_start();
$_SESSION['reminder'] = $_POST['reminder'];
?>

<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../reset.css" type="text/css" />
  <link rel="stylesheet" href="../main.css" type="text/css" />
  <link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css" /> 
  <script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
 </head>
 <body class="template_background">
   <div class="title_bar">APPY COUPLE</div>
   <div class="sub_title_bar">Appy Stationery Studio</div>

   <div class="header_section">
     <h3>Customize</h3>
   </div>

   <div class="row">
     <div class="form_container">
      <form action="process_reminder.php" method="POST" data-abide>
     </div>
        <div class="editor_section">
          <label>Add your message below:<br>
             <textarea class="editor1" name="message" note="reminder" required></textarea>
          </label>
          <input type="submit" class="button" value="Next">
        </form>
     </div>
   </div>
    <script type="text/javascript" src="../main.js"></script>
 </body>
</html>