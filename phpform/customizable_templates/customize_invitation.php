<?php
session_start();
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
        <?php
          if(isset($_POST['submit'])){
            $_POST['parents_names'];
            $_POST['spouse1'];
            $_POST['spouse2'];
            $_POST['message'];
            $_POST['venue'];
            $_POST['date'];
          }
        ?>
      </div>

     <script type="text/javascript" src="../main.js"></script>
 </body>
</html>