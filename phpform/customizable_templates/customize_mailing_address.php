<?php
session_start();
$_SESSION['address'] = $POST['address'];
$_SESSION['email_address'] = $POST['email_address'];
$_SESSION['phone_number'] = $POST['phone_number'];
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
          <label>Your Address:
             <textarea name="address" required></textarea>
          </label>
          <label>Email Address:<br>
            <input name="email_address" required/>
          </label>
          <label>Phone Number:<br>
            <input name="phone_number" required/>
          </label>
          <input type="submit" class="button" value="Next">
        </form>
     </div>
   	 <div class="column small-12 medium-6 large-4"></div>
   	 <div class="column small-12 medium-6 large-4"></div>
   </div>
     <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"
         integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw="
         crossorigin="anonymous">
     </script>
 </body>
</html>