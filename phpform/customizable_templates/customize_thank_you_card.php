<?php
session_start();
$_SESSION['thank_you_message'] = $POST['thank_you_message'];
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
          <label>Add your message below:<br>
             <textarea class="editor" name="thank_you_message"></textarea>
          <input name="submit" type="submit" class="button" value="Next" required>
        </form>
     </div>
   	 <div class="column small-12 medium-6 large-4"></div>
   	 <div class="column small-12 medium-6 large-4"></div>
   </div>
    <script type="text/javascript" src="../main.js"></script>
 </body>
</html>