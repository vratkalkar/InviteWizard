<?php
session_start();
include("../../helper_functions/sanitize.php");
if(isset($_POST['form_submit'])){
	$_SESSION['parents_names'] = sanitize($_POST['parents_names']);
	$_SESSION['spouse1'] = sanitize($_POST['spouse1']);
	$_SESSION['spouse2'] = sanitize($_POST['spouse2']);
	$_SESSION['venue'] = sanitize($_POST['venue']);
	$_SESSION['address'] = sanitize($_POST['address']);
	$_SESSION['date'] = sanitize($_POST['date']);
	$_SESSION['time'] = sanitize($_POST['time']);
	$_SESSION['website_url'] = sanitize($_POST['website_url']);
	$_SESSION['wedding_code'] = sanitize($_POST['wedding_code']);
	
	$user_choice = $_POST['invite_type'];
    switch ($user_choice) {
      case 'formal':
	    header("Location: ../display_customized_templates/invitation_type/formal_invitation.php");
	    break;
      case 'casual':
	    header("Location: ../display_customized_templates/invitation_type/casual_invitation.php");
	    break;
}
?>