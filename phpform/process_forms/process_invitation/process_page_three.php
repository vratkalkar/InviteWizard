<?php
session_start();
include("../../helper_functions/sanitize.php");
$_SESSION['invite_type'] = sanitize($_POST['invite_type']);
$_SESSION['choose_host'] = sanitize($_POST['choose_host']);

$host = $_SESSION['choose_host'];
$invite_type = $_SESSION['invite_type'];
	
	if ($host == 'couple' && $invite_type == 'formal'){
	  header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
	  break;
	}
	elseif ($host == 'brides_parents' && $invite_type == 'formal') {
	   header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
	   break;
	}
	elseif ($host == 'grooms_parents' && $invite_type == 'formal') {
	   header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
	   break;
	}
	elseif ($host == 'grooms_parents' && $invite_type == 'formal') {
		header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
		break;
	}
	elseif ($host == 'both_parties' && $invite_type == 'formal') {
		header("Location: ../../display_customized_templates/invitation_type/formal_invitation.php");
		break;
	}











