<?php
session_start();
$_SESSION['save_the_date_message'] = $POST['save_the_date_message'];
$_SESSION['stdt_date'] = $_POST['stdt_date'];
$_SESSION['location'] = $_POST['location'];
$_SESSION['names'] = $_POST['names'];
$_SESSION['website'] = $_POST['website'];
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
   </div>
   <div class="row">
     <div class="form_container">
      <form action="process_save_the_date.php" method="POST" data-abide>
      <label>Date:<br>
        <input type="text" name="stdt_date" required/>
      </label>
      <label>Location:<br>
        <input type="text" name="location" required/>
      </label>
      <label>Your Names:<br>
        <input type="text" name="names" required>
      </label>
      <label>Your Website:<br>
        <input type="text" id="website_textfield" name="website" placeholder="example.appycouple.com"/>
      </label>
      </form>
     </div>

     <div class="editor_section">
        <label>Add your message below:<br>
        <textarea class="editor1" name="message" name="save_the_date" required></textarea>
        <input type="submit" class="button" value="Next">
     </div>
   </div>
       
          
    <script type="text/javascript" src="../main.js"></script>
 </body>
</html>