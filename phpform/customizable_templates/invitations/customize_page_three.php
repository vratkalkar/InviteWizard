<?php
  session_start();
?>

<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../../css/main.css" type="text/css" />
  <link rel="stylesheet" href="../../foundation-6.2.1-essential/css/foundation.css" type="text/css" /> 
  <link rel="stylesheet" href="../../css/selectric.css" type="text/css">
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
       <div class="small button-group">
          <input type="submit" class="secondary button" name="formal_invitation" value="Formal">
          <input type="submit" class="secondary button" name="casual_invitation" value="Casual">
        </div>

       
     <label id="host_label">Who is hosting the event?</label>
      <div class="small button-group">
        <input type="submit" class="secondary button" name="couple" value="Couple (Us)">
        <input type="submit" class="secondary button" name="brides_parents" value="Bride's Parents">
        <input type="submit" class="secondary button" name="grooms_parents" value="Groom's Parents">
        <input type="submit" class="secondary button" name="both_parties" value="Both Parties">
     </div>

       <div class="buttons">
        <input type="submit" class="button"  id="p3_back_button" value="Back" name="back_button">
        <input type="submit" class="button"  id="p3_continue_button" value="Continue" name="form_submit">
       </div>
       </div>
      </div>
    </form>
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
   <script type="text/javascript" src="../../selectric_js_content/public/jquery.selectric.js"></script>
   <script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>