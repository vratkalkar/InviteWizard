<?php
session_start();
$_SESSION['spouse1'] = $_POST['spouse1'];
$_SESSION['spouse2'] = $_POST['spouse2'];
?>
<html>
<head>
	<link rel="stylesheet" href="main.css" type="text/css">
	<link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css">
</head>
<body>


<div class="form_container">
	<form action="appy_demo_invite.php" method="POST">

		<p>When is your wedding date? <input type="date" name="event_date" /></p>

		<p>Where is the main event being held? <input type="text" name="event_location"></p>

		<p><input type="submit" class="button" value="Next"></p>
	</form>
</div>
<script src="form.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"</script>

</body>
</html>