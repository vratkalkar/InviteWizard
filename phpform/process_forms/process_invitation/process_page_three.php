<?php
session_start();
include("../../helper_functions/sanitize.php");
$_SESSION['invite_type'] = sanitize($_POST['invite_type']);
$_SESSION['choose_host'] = sanitize($_POST['choose_host']);

if(isset($_POST['form_submit'])){
	$user_choice = $_POST['choose_host'];
	 switch($user_choice){
		case 'couple':
		  header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
		  break;
		case 'brides_parents':
		  header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
		  break;
		case 'grooms_parents':
		  header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
		  break;
		case 'both_parties':
		  header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
		  break;
		default:
		  header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
		  break;
	}
?>