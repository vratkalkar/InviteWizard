<?php
session_start();

if(isset($_POST['form_submit'])){

$user_choice = $_POST['invite_type'];
switch ($user_choice) {
	case 'formal':
		header("Location: ../display_customized_templates/invitation_type/formal_invitation.php");
		break;
	case 'semi_formal':
		header("Location: ../display_customized_templates/invitation_type/semi_formal_invitation.php");
		break;
	case 'casual':
		header("Location: ../display_customized_templates/invitation_type/casual_invitation.php");
		break;
	case 'preview':
		header("Location: ../display_customized_templates/invitation.php");
		break;
  }
}

?>