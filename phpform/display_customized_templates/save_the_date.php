<?php
session_start();
$_SESSION['save_the_date_message'] = $POST['save_the_date_message'];
$_SESSION['stdt_date'] = $POST['stdt_date'];
$_SESSION['location'] = $POST['location'];
$_SESSION['names'] = $POST['names'];
$_SESSION['website'] = $POST['website'];
?>
<html>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../main.css" type="text/css">
  <link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.min.css" type="text/css">
 </head>
 <body class="template_background">
     <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"
         integrity="sha256-xNjb53/rY+WmG+4L6tTl9m6PpqknWZvRt0rO1SRnJzw="
         crossorigin="anonymous">
     </script>
 </body>
</html>