<?php 
session_start();
$spouse1 = check_input($_SESSION[$_POST['spouse1']]);
$spouse2 = check_input($_SESSION[$_POST['spouse2']]);
$event_date = check_input($_SESSION[$_POST['event_date']]);
$event_location = check_input($_SESSION[$_POST['event_location']]);
?>

<?php
function check_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>



<html>
<head>
	<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
	<div id="logo">
	 <form>
		<p>Your Name: <?php echo $spouse1 ?></p>
		<p>Spouse's Name: <?php echo $spouse2 ?></p>

		<p>Date: <?php echo $event_date ?></p>
		<p>Location: <?php echo $event_location ?></p>
	 </form>
	</div>
</body>

<?php 
session_unset();
?>

	
