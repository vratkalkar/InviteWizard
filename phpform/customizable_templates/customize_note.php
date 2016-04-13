<?php
session_start();
$_SESSION['note_message'] = $POST['note_message'];
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
       <form action="" method="POST" data-abide>
     </div>

     <div class="editor_section">
          <label>Add your message:<br>
             <textarea class="editor1" name="message" name="note" required></textarea>
          </label>
          <input type="submit" class="button" value="Next">
        </form>
      </div>
    <script type="text/javascript" src="../main.js"></script>
 </body>
</html>