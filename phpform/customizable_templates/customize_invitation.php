<?php
session_start();
$_SESSION['parents_names'] = $_POST['parents_names'];
$_SESSION['spouse1'] = $_POST['spouse1'];
$_SESSION['spouse2'] = $_POST['spouse2'];
$_SESSION['venue'] = $_POST['venue'];
$_SESSION['date'] = $_POST['date'];
$_SESSION['invite_type'] = $_POST['invite_type'];
?>

<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../reset.css" type="text/css" />
  <link rel="stylesheet" href="../main.css" type="text/css" />
  <link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css"> 
  <script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
 </head>
 <body class="template_background">
   <div class="title_bar">APPY COUPLE</div>
   <div class="sub_title_bar">Appy Stationery Studio</div>

   <div class="header_section">
     <h3>Customize Invitation</h3>
   </div>

   <div class="row">
     <div class="form_container">
      <form action="../process_forms/process_invitation.php" method="POST" data-abide>
        <label>Parent's Names:<br>
          <input type="text" name="parents_names" required/>
        </label>
        <label>Your Name:<br>
          <input type="text" name="spouse1" required/>
        </label>
        <label>Fiance's Name:<br>
          <input type="text" name="spouse2" required/>
        </label>
        <label>Venue:<br>
          <input type="text" name="venue" required/>
        </label>
        <label>Date:<br>
          <input type="text" name="date" required/>
        </label>
        
        <label class="select_section">Invitation Type:<br>
          <select class="select_invite_option" name="invite_type">
            <option value="formal">Formal</option>
            <option value="semi_formal">Semi-Formal</option>
            <option value="casual">Casual</option>
            <option value="preview">Show me a Preview!</option>
          </select>
        </label>
    </div>

      <div class="editor_section">
        <br>
        <br>
          <label>Add a message:<br>
          <textarea class="editor1" name="message" name="invitation_message" required></textarea>
          <input type="submit" class="button" value="Next" name="form_submit">
        </form>
      </div>
     <script type="text/javascript" src="../main.js"></script>
 </body>
</html>