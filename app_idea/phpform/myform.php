<?php 
$spouse1 = check_input($_POST['spouse1']);
$spouse2 = check_input($_POST['spouse2']);
$event_date = check_input($_POST['event_date']);
$event_location = check_input($_POST['event_location']);
?>


<html>
<body>
	<form>
		<p>Your Name: <?php echo $spouse1; ?></p>
		<p>Spouses Name: <?php echo $spouse2; ?></p>

		<p>When is your wedding date?</p>
		 <?php echo $event_date; ?>
	
		<p>Where is the main event being held?
			<?php echo $event_location; ?>
		</p>

		<p><input type="submit" value="Next"></p>
	</form>

</body>
</html>

<?php
function check_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>