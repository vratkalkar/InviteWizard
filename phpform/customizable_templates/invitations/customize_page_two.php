<?php
session_start();
$_SESSION['venue'] = $_POST['venue'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['date'] = $_POST['date'];
$_SESSION['time'] = $_POST['time'];

$venue = $_SESSION['venue'];
$address = $_SESSION['address'];
$date = $_SESSION['date'];
$time = $_SESSION['time'];
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
      <form action="../../process_forms/process_invitation/process_page_two.php" method="POST" data-abide>

        <label>Venue:<br>
          <input type="text" name="venue" required />
        </label>

        <label>Address:<br>
          <input type="text" name="address" required />
        </label>

        <label>Date:<br>
          <input type="date" name="date" required />
        </label>

        <label>Time:<br>
          <input type="text" name="time" required />
        </label>

        
         <input id="customize_invite_button" type="submit" class="button" value="Continue" name="form_submit">
    </div>
     <script type="text/javascript" src="../../main.js"></script>
 </body>
</html>