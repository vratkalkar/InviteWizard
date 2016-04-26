<?php
session_start();
//include("../../helper_functions/sanitize.php");
  $_SESSION['venue'] = $_POST['venue'];
  $_SESSION['address'] = $_POST['address'];
  $_SESSION['date'] = $_POST['date'];
  $_SESSION['time'] = $_POST['time'];
  header("Location: ../../customizable_templates/invitations/customize_page_three.php");
?>