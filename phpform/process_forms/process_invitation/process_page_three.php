<?php
session_start();
//include("../../helper_functions/sanitize.php");
	$_SESSION['invite_type'] = $_POST['invite_type'];
	$_SESSION['parents_names'] = $_POST['parents_names'];
	$_SESSION['spouse1'] = $_POST['spouse1'];
	$_SESSION['spouse2'] = $_POST['spouse2'];
	$_SESSION['venue'] = $_POST['venue'];
	$_SESSION['address'] = $_POST['address'];
	$_SESSION['date'] = $_POST['date'];
	$_SESSION['time'] = $_POST['time'];
	$_SESSION['website_url'] = $_POST['website_url'];
	$_SESSION['wedding_code'] = $_POST['wedding_code'];
	header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php"); 
?>