<?php
  session_start();
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
    <form action="../../process_forms/process_invitation/process_page_three.php" method="POST">
     <label>What type of invitation is this?<br><br>
       <select id="invite_type_select" name="invite_type">
         <option value="formal_invitation">Formal</option>
         <option value="casual_invitation">Casual</option>>
       </select>
     </label>
     <label>Who is hosting the event?<br><br>
       <select id="who_is_hosting" name="choose_host">
         <option value="couple">Couple (Us)</option>
         <option value="brides_parents">Brides Parents</option>
         <option value="grooms_parents">Grooms Parents</option>
         <option value="both_parties">Both Parties</option>
       </select>
     </label>
        <input type="submit" class="button"  id="p3_back_button" value="Back" onclick="history.back();">
        <input type="submit" class="button"  id="p3_continue_button" value="Continue" name="form_submit">
    </form>
   </div>
   </div>
   <script type="text/javascript" src="../../main.js"></script>
</body>
</html>