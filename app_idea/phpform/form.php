<?php 
 session_start();

if(isset($_POST['Next'])){
	$_SESSION['spouse1'] = $_POST['spouse1'];
	$_SESSION['spouse2'] = $_POST['spouse2'];
 }
?>

<html>
<meta charset="UTF-8">
<head>
	<link rel="stylesheet" href="main.css" type="text/css">
	<link rel="stylesheet" href="../foundation-6.2.0-essential/css/foundation.css" type="text/css">
</head>
<body>
<div class="form_container">
	<form action="form2.php" method="POST">
		<p>Your Name: <input class="type_name" type="text" name="spouse1" /></br>

		<p>Spouse's Name: <input class="type_name" type="text" name="spouse2" />

		<p><input type="submit" class="button" value="Next"></p>
		
	</form>

</div>
<script src="form.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"</script>

</body>
</html>

