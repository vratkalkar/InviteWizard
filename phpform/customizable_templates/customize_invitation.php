<?php
session_start();
$_SESSION['parents_names'] = $_POST['parents_names'];
$_SESSION['spouse1'] = $_POST['spouse1'];
$_SESSION['spouse2'] = $_POST['spouse2'];
$_SESSION['message'] = $_POST['message'];
$_SESSION['venue'] = $_POST['venue'];
$_SESSION['date'] = $_POST['date'];

?>

<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../main.css" type="text/css">
  <link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.min.css" type="text/css">
 </head>
 <body class="template_background">
   <div class="title_bar">APPY COUPLE</div>
   <div class="sub_title_bar">Appy Stationery Studio</div>
   <div class="row">
     <div class="form_container">
        <form action="" method="POST" data-abide>
          <label>Parent's Names:<br>
             <input name="parents_names" required/>
          </label>
          <label>Your Name:<br>
            <input name="spouse1" required/>
          </label>
          <label>Fiance's Name:<br>
            <input name="spouse2" required/>
          </label>
          <label>Add a message:<br>
          <textarea class="editor" name="message" required></textarea>
          <label>Venue:<br>
            <input name="venue" required/>
          </label>
          <label>Date:<br>
            <input name="date" required/>
          </label>
          <input type="submit" class="button" value="Next">
        </form>
     </div>
   	 <div class="column small-12 medium-6 large-4"></div>
   	 <div class="column small-12 medium-6 large-4"></div>
   </div>
     <script src="http://cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
     <script type="text/javascript" src="../main.js"></script>
 </body>
</html>