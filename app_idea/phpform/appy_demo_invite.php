<?php
session_start();
$_SESSION['spouse1'] = $_POST['spouse1'];
$_SESSION['spouse2'] = $_POST['spouse2'];
$_SESSION['event_date'] = $_POST['event_date'];
$_SESSION['event_location'] = $_POST['event_location'];
?>

<?php 
check_input($_SESSION['spouse1']);
check_input($_SESSION['spouse2']);
check_input($_SESSION['event_date']);
check_input($_SESSION['event_location']);
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
	<div id="logo"></div>
	 <div class="form_container">
	 <form>
		<p>Your Name: <?php echo $_SESSION['spouse1']?></p>
		<p>Spouse's Name: <?php echo $_SESSION['spouse2']?></p>

		<p>Date: <?php echo $_SESSION['event_date'] ?></p>
		<p>Location: <?php echo $_SESSION['event_location'] ?></p>
	 </form>
	</div>
</body>

<?php 
session_unset();
session_destroy();
?>

	
