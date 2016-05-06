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

      <form action="../../process_forms/process_invitation/process_page_two.php" method="POST" data-abide />

       <div class="input_fields">
         <label>Wedding Website URL: (optional)<br>
           <input type="text" name="website_url" placeholder="ex. www.ourwedding.com"/>
         </label>

         <label>Wedding Code: (optional)<br>
           <input type="text" name="wedding_code" placeholder="ex. Your Appy Code" />
        </label>
       </div>
       <input type="submit" class="button"  id="p2_back_button" value="Back" onclick="history.back();">
       <input type="submit" class="button"  id="p2_continue_button" value="Continue" name="form_submit">
    </form>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.js"></script>
 </div>
</html>