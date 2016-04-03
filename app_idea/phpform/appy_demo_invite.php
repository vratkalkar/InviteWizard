<?php 
$spouse1 = check_input($_POST['spouse1']);
$spouse2 = check_input($_POST['spouse2']);
$event_date = check_input($_POST['event_date']);
$event_location = check_input($_POST['event_location']);
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
	</div>
</body>

	
