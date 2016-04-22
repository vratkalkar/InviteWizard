<?php
session_start();
$_SESSION['thank_you_message'] = $_POST['thank_you_message'];
?>

<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../reset.css" type="text/css">
  <link rel="stylesheet" href="../main.css" type="text/css">
  <link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css"> 
  <script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
 </head>
 <body class="template_background">
   <div class="title_bar">APPY COUPLE</div>
   <div class="sub_title_bar">Appy Stationery Studio</div>
   <div class="row">
     <div class="form_container">
       <form action="process_thank_you_card.php" method="POST" data-abide>
      </div>

      <div class="editor_section">
        <label>Add your message below:<br>
            <textarea class="editor1" name="message" name="thank_you_card"></textarea>
        <input name="submit" type="submit" class="button" value="Next" required>
      </form>
      </div>
  
    <script type="text/javascript" src="../main.js"></script>
 </body>
</html>