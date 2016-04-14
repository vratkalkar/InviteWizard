<?php
session_start();
$_SESSION['parents_names'] = $_POST['parents_names'];
$_SESSION['spouse1'] = $_POST['spouse1'];
$_SESSION['spouse2'] = $_POST['spouse2'];
$_SESSION['message'] = $_POST['message'];
$_SESSION['venue'] = $_POST['venue'];
$_SESSION['date'] = $_POST['date'];
?>
<meta charset="utf-8">
<head>
  <link rel="stylesheet" href="../main.css" type="text/css">
  <link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css"> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.min.css" type="text/css">
 </head>
 <body class="template_background">
 	<p>This is the invitation page</p>
 </body>
</html>