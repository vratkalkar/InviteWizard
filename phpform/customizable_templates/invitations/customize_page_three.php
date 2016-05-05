<?php
  session_start();
?>

<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../../css/reset.css" type="text/css" />
  <link rel="stylesheet" href="../../css/main.css" type="text/css" />
  <link rel="stylesheet" href="../../foundation-6.2.1-essential/css/foundation.css" type="text/css" /> 
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
     <label id="invite_label">What type of invitation is this?</label>
       <select id="invite_type_select" name="invite_type">
         <option value="formal_invitation">Formal</option>
         <option value="casual_invitation">Casual</option>>
       </select>

     <label id="host_label">Who is hosting the event?</label>
       <select id="who_is_hosting" name="choose_host">
         <option value="couple">Couple (Us)</option>
         <option value="brides_parents">Brides Parents</option>
         <option value="grooms_parents">Grooms Parents</option>
         <option value="both_parties">Both Parties</option>
       </select>

        <input type="submit" class="button"  id="p3_back_button" value="Back" onclick="history.back();">
        <input type="submit" class="button"  id="p3_continue_button" value="Continue" name="form_submit">
    </form>
   </div>
   </div>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
   <script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>