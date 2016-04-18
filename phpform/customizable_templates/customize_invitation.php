
<?php
/* Utilizing output buffering for now 
* to fix "headers_sent" error 
* when including helper_function file */

ob_start();
session_start();
include("../helper_functions/sanitize.php");

$parents_names = sanitize($_POST['parents_names']);
$spouse1 = sanitize($_POST['spouse1']);
$spouse2 = sanitize($_POST['spouse2']);
$venue = sanitize($_POST['venue']);
$date = sanitize($_POST['date']);


$_SESSION['parents_names'] = $parents_names;
$_SESSION['spouse1'] = $spouse1;
$_SESSION['spouse2'] = $spouse2;
$_SESSION['venue'] = $venue;
$_SESSION['date'] = $date;

ob_end_flush();
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
      <form action="../process_forms/process_invitation.php" method="POST" data-abide>
        <label>Parent's Names:<br>
          <input name="parents_names" required/>
        </label>
        <label>Your Name:<br>
          <input name="spouse1" required/>
        </label>
        <label>Fiance's Name:<br>
          <input name="spouse2" required/>
        </label>
        <label>Venue:<br>
          <input name="venue" required/>
        </label>
        <label>Date:<br>
          <input name="date" required/>
        </label>
       
        <label class="invite_label">Select Invitation Type:<br><br>
          <select name="invite_type">
            <option name="formal">Formal</option>
            <option name="semi_formal">Semi-Formal</option>
            <option name="casual">Casual</option>
          </select>
        </label>
    </div>

      <div class="editor_section">
          <label>Add a message:<br>
          <textarea class="editor1" name="message" name="invitation_message" required></textarea>
          <input type="submit" class="button" value="Next">
        </form>
      </div>

     <script type="text/javascript" src="../main.js"></script>
 </body>
 <?php ob_end_flush(); ?>
</html>