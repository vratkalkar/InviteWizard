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
     <label>What type of invitation would you like?<br><br>
       <select id="invite_type_select" name="invite_type">
         <option value="formal_invitation">Formal</option>
         <option value="casual_invitation">Casual</option>>
       </select>
     </label>
   </div>
   </div>
   <script type="text/javascript" src="../../main.js"></script>
</body>
</html>