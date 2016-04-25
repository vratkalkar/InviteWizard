<?php
session_start();
$_SESSION['spouse2'] = $_POST['spouse2'];
$_SESSION['parents_names'] = $_POST['parents_names'];
$_SESSION['spouse1'] = $_POST['spouse1'];
$_SESSION['spouse2'] = $_POST['spouse2'];
$_SESSION['venue'] = $_POST['venue'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['date'] = $_POST['date'];
$_SESSION['time'] = $_POST['time'];
$_SESSION['invite_type'] = $_POST['invite_type'];
$_SESSION['website_url'] = $_POST['website_url'];
$_SESSION['wedding_code'] = $_POST['wedding_code'];
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
      <form action="../../process_forms/process_invitation/process_page_one.php" method="POST" data-abide>
        <label>Your Name:<br>
          <input type="text" name="spouse1" required />
        </label>

        <label>Fiance's Name:<br>
          <input type="text" name="spouse2" required />
        </label>

        <label>Parent's Names:<br>
          <input type="text" name="parents_names" required />
        </label>

         <input id="customize_invite_button" type="submit" class="button" value="Continue" name="form_submit">
    </div>
     <script type="text/javascript" src="../main.js"></script>
 </body>
</html>