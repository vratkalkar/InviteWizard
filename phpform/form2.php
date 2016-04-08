<?php
session_start();
$_SESSION['spouse1'] = $_POST['spouse1'];
$_SESSION['spouse2'] = $_POST['spouse2'];

?>
<html>
<meta charset="UTF-8">
<head>
	<link rel="stylesheet" href="main.css" type="text/css">
	<link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.0.0/normalize.min.css" type="text/css">
</head>
<body>

<div class="logo"><a href="http://www.appycouple.com" /></a></div>
<div class="form_container">
	<form action="appy_demo_invite.php" method="POST" data-abide>

		<p>When is your wedding date? <input type="text" name="event_date" required/></p>

		<p>Where is the main event being held? <input type="text" name="event_location" required></p>

		<p>What kind of stationary are you looking for? <br>
			<a type="button1" class="button" name="select_wedding_invite">Wedding Invitation</a>
			<a type="button2" class="button" name="select_save_the_date">Save The Date</a>
			<a type="button3" class="button" name="select_appy_suite">Appy Suite</a>
		</p>

		<p><input type="submit" class="button" value="Next"></p>

		<?php
			if(isset($_POST['button']) && isset($_POST['submit']) ){
				echo "button selected";
			}
		?>
	</form>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"</script>
<script src="form.js"></script>

</body>
</html>