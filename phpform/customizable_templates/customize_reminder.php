<?php
session_start();
$_SESSION['reminder'] = $POST['reminder'];
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
          <label>Add your message below:<br>
             <textarea class="editor" name="message" required></textarea>
          </label>
          <input type="submit" class="button" value="Next">
        </form>
     </div>
   </div>
    <script type="text/javascript" src="../main.js"></script>
 </body>
</html>